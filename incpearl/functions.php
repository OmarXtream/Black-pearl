<?php

if(count(get_included_files()) == 1){
	header('HTTP/1.0 403 Forbidden');
	exit;
}

function secure_delete($file_path)
{
    $file_size = filesize($file_path);
    $new_content = str_repeat('0', $file_size);
    file_put_contents($file_path, $new_content);
    unlink($file_path);
    return true;

}


function sendMessage($messaggio) {
    	$token = "1035484815:AAFOk2INl0LaH1X-8ij27_MRPly6upi3QAI";
    	$chatID = '-390510780';

    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
    $url = $url . "&text=" . urlencode($messaggio);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}






function timeToString( $inTimestamp ) {
  $now = time();
  if( abs( $inTimestamp-$now )<86400 ) {
    $t = date('g:ia',$inTimestamp);
    if( date('zY',$now)==date('zY',$inTimestamp) )
      return 'Today, '.$t;
    if( $inTimestamp>$now )
      return 'Tomorrow, '.$t;
    return 'Yesterday, '.$t;
  }
  if( ( $inTimestamp-$now )>0 ) {
    if( $inTimestamp-$now < 604800 ) # Within the next 7 days
      return date( 'l, g:ia' , $inTimestamp );
    if( $inTimestamp-$now < 1209600 ) # Within the next 14, but after the next 7 days
      return 'Next '.date( 'l, g:ia' , $inTimestamp );
  } else {
    if( $now-$inTimestamp < 604800 ) # Within the last 7 days
      return 'Last '.date( 'l, g:ia' , $inTimestamp );
  }
 # Some other day
  return date( 'l jS F, g:ia' , $inTimestamp );
}




function rand_code($len)
{
 $min_lenght= 0;
 $max_lenght = 100;
 $bigL = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
 $smallL = "abcdefghijklmnopqrstuvwxyz";
 $number = "0123456789";
 $bigB = str_shuffle($bigL);
 $smallS = str_shuffle($smallL);
 $numberS = str_shuffle($number);
 $subA = substr($bigB,0,5);
 $subB = substr($bigB,6,5);
 $subC = substr($bigB,10,5);
 $subD = substr($smallS,0,5);
 $subE = substr($smallS,6,5);
 $subF = substr($smallS,10,5);
 $subG = substr($numberS,0,5);
 $subH = substr($numberS,6,5);
 $subI = substr($numberS,10,5);
 $RandCode1 = str_shuffle($subA.$subD.$subB.$subF.$subC.$subE);
 $RandCode2 = str_shuffle($RandCode1);
 $RandCode = $RandCode1.$RandCode2;
 if ($len>$min_lenght && $len<$max_lenght)
 {
 $CodeEX = substr($RandCode,0,$len);
 }
 else
 {
 $CodeEX = $RandCode;
 }
 return $CodeEX;
}

function antiSpam(string $sessionName, int $timeInSec = 3){
	if(isset($_SESSION[$sessionName])){
		if($_SESSION[$sessionName] > time()){
			return true;
		}else{
			$_SESSION[$sessionName] = time() + $timeInSec;
			return false;
		}
	}else{
			$_SESSION[$sessionName] = time() + $timeInSec;
	}
}


function rankPermission($staffid,$per){
	global $database;

	$conn=$database->openConnection();

	$stmt=$conn->query("SELECT rank FROM staff WHERE id={$staffid} AND $per = 1"); //دقيقه وجاي

	if($stmt->rowCount() > 0){

return true;

	} else {

		return null;

	}
}


function validateMobile($phone){
	$phone = str_replace(' ', '', $phone);
	if(!preg_match("/^\+?[0-9]{7,14}$/",$phone)){
		return false;
	}
	return true;
}

function tokenHandler(){
	$_SESSION['_token']=bin2hex(random_bytes(16));
	return $_SESSION['_token'];
}

function ago(int $i){
    $m = time()-$i;
	$o='الآن';
    $t = array('سنة'=>31556926,'شهر'=>2629744,'اسبوع'=>604800,
'يوم'=>86400,'ساعات'=>3600,'دقيقه'=>60,'ثانية'=>1);

    foreach($t as $u=>$s){
        if($s<=$m){
			$v=floor($m/$s);
			if($u == "سنة"){
				if($v == 1){
					$o="سنة";
				}else if($v == 2){
					$o="سنتين";
				}else {
					$o="$v $u";
				}
			}else if($u == "شهر"){
				if($v == 1){
					$o="شهر";
				}else if($v == 2){
					$o="شهرين";
				}else {
					$o="$v اشهر";
				}
			}else if($u == "اسبوع"){
				if($v == 1){
					$o = "اسبوع";
				}else if($v == 2){
					$o = "اسبوعين";
				}else if($v >= 3 && $v <= 10){
					$o="$v اسابيع";
				}else{
					$o="$v $u";
				}
			}else if($u == "يوم"){
				if($v == 1){
					$o = "يوم";
				}else if($v == 2){
					$o="يومين";
				}else if($v >= 3 && $v <= 10){
					$o = "$v ايام";
				}else {
					$o = "$v $u";
				}
			}else if($u == "ساعات"){
				if($v == 1){
					$o = "ساعه";
				}else if($v == 2){
					$o="ساعتين";
				}else if($v >= 3 && $v <= 10){
					$o="$v $u";
				}else{
					$o = "$v ساعة";
				}
			}else if($u == "دقيقه"){
				if($v == 1){
					$o="دقيقة";
				}else if($v == 2){
					$o="دقيقتين";
				}else if($v >= 3 && $v <= 10){
					$o="$v دقائق";
				}else{
					$o = "$v $u";
				}
			}else if($u == "ثانية"){
				if($v == 1){
					$o="ثانية";
				}else if($v == 2){
					$o="ثانتين";
				}else if($v >= 3 && $v <= 10){
					$o="$v ثواني";
				}else{
					$o="$v $u";
				}
			}else{}

			break;
			//$o="$v $u".($v==1?'':'').''; break;
		}
    }

    return $o;
}

function etc($text,$length){
	if(strlen($text) > $length){
		$text=substr($text,0,$length)."...";
		return $text;
	}else{
		return $text;
	}
}

function returnJSON(array $f,bool $updateToken = true) {
	  /*
		  Usage:
		  returnJSON(array(params));
	  */
	  if(!is_array($f)){ exit; }
	  if($updateToken){
		  $f['updatetoken'] = tokenHandler();
	  }
		  header('Content-Type: application/json');

		  exit(json_encode($f));

}

function password_strength($password) {
	$returnVal = True;
	if ( !preg_match("#[0-9]+#", $password) ) $returnVal = False;
	if ( !preg_match("#[a-z]+#", $password) ) $returnVal = False;
	if ( !preg_match("#[A-Z]+#", $password) ) $returnVal = False;
	return $returnVal;
}
function checked(int $status){

if($status == 1){
echo 'checked';
}
}



?>
