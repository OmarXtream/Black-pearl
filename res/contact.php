<?php
ini_set('session.cookie_httponly', true);
ini_set('session.cookie_secure', true);
ini_set('session.cookie_domain', '.blackpearl.team');
session_name('__Secure-PHPSESSID');

    session_start();

require_once("../incpearl/db.php");
require_once("../incpearl/functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
		$_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
	}

  if(!isset($_SESSION['_token']) OR !isset($_POST['token']) OR $_POST['token'] !== $_SESSION['_token']){
		returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'حدث خطأ غير معروف من فضلك أعد تحميل هذه الصفحة','b' => true));
	} else if(isset($_POST['name'],$_POST['email'],$_POST['msg'],$_POST['token'],$_POST['formOmar'],$_POST['g-recaptcha-response']) and empty($_POST['formOmar'])){
		if(antiSpam("Pmsg:Pmsg.php","60")){
			returnJSON(array('t'=>'خطأ','m'=>'من فضلك انتظر قليلا ثم حاول مجدداً', 's'=>'error', 'b'=>'موافق'));
		}
		$post = http_build_query(
			array (
				'response' => $_POST['g-recaptcha-response'],
				'secret' => '#',
				'remoteip' => $_SERVER['REMOTE_ADDR']
			)
		);
		$opts = array('http' => 
				array (
					'method' => 'POST',
					'header' => 'application/x-www-form-urlencoded',
					'content' => $post
				)
        );
		$context = stream_context_create($opts);
		$response = @file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
		$result = json_decode($response);
		if (!$result -> success) {
			returnJSON(array('tp' => 'error', 't' => 'خطأ','m' => 'رجاءَ تحقق من أنك لست روبوت','b' => true));
        }

	if(empty($_POST['name']) OR empty($_POST['email']) OR empty($_POST['msg']) ){
        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'تاكد من المدخلات','b' => true));

	}elseif(strlen($_POST['name']) < 6 || strlen($_POST['name']) > 30){
        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'يجب إن يكون الإسم مكون من 6 حروف ولا يتعدى 30 حرف','b' => true));

	}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        returnJSON(array('tp' => 'error', 't' => 'خطأ', 'm' => 'يجب إن يكون بريد الإلكتروني الخاص بك صحيح. يرجى التأكد','b' => true));

	}else{

        $conn=Database::getInstance();

	$stmtz=$conn->prepare("INSERT INTO contact (fName,eMail,msg,date,IP) VALUES (:fName, :eMail, :msg,".time().", :ip)");
    $stmtz->bindValue(":fName", $_POST['name']);
    $stmtz->bindValue(":eMail", $_POST['email']);
    $stmtz->bindValue(":msg", $_POST['msg']);
    $stmtz->bindValue(":ip", $_SERVER['REMOTE_ADDR']);

		$stmtz->execute();

		if($stmtz->rowCount() > 0){

      $tname = $_POST['name'];
      $temail = $_POST['email'];
      $tmsg = $_POST['msg'];

$json = file_get_contents('http://ip-api.com/json/'.$_SERVER['REMOTE_ADDR'].'?fields=status,message,continent,country,countryCode,region,regionName,city,zip,timezone,currency,proxy,query');
$info = json_decode($json, true);
if($info['status'] == 'success'){

$proxy = ($info['proxy'] == '1') ? 'Proxy is On':'No Proxy';
$ip = ''.$info['country'].' » '.$info['regionName'].' » '.$info['city'].' » '.$proxy;
}else{
$ip = ''.$info['status'].' » '.$info['message'].' » '.$info['query'];

}

      $telegramMsg = "
  ————(  رسالة من الموقع )———— \n
  .\n
  🔸الإسم: $tname \n
  🔸البريد الإلكتروني: $temail \n
  🔸الرسالة: \n $tmsg  \n
  🔸اللوكيشن: \n $ip\n

  .\n
  ————(  رسالة من الموقع )———— \n
  ";


   $uhd = sendMessage($telegramMsg);

   returnJSON(array('tp' => 'success', 't' => 'حسناً', 'm' => 'تم إرسال رسالتك بنجاح، سيتم التواصل معك في القريب العاجل.. ','b' => true));


			}
		}
	}
}
?>

