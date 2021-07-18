<?php

#if (session_status() !== PHP_SESSION_ACTIVE) {
ini_set('session.cookie_httponly', true);
ini_set('session.cookie_secure', true);
ini_set('session.cookie_domain', '.blackpearl.team');
session_name('__Secure-PHPSESSID');

    session_start();
    $_SESSION['_token']=bin2hex(openssl_random_pseudo_bytes(16));

#}

?>
<!doctype html>
<html lang="ar" dir="rtl">
  <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="token" content="<?php if(isset($_SESSION['_token'])) { echo $_SESSION['_token']; } ?>">
    <noscript><meta HTTP-EQUIV="refresh" content=0;url="javascriptErr.php"></noscript>
    <script src='https://www.google.com/recaptcha/api.js?hl=ar'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.2.1/css/bootstrap.min.css" integrity="sha384-vus3nQHTD+5mpDiZ4rkEPlnkcyTP+49BhJ4wJeJunw06ZAp+wzzeBPUXr42fi8If" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="imgs/icon.png">

    <title>♦ BlackPearl Team</title>
    <meta name="description" content="فريق عمل شاب مختصين ب الامن، التصاميم، البرمجيات.. نسعى لتطوير المجتمع العربي وتشجيع الشباب العربي لإنجاز أحلامهم وتحويلها لواقع يفتخر به">
    <meta name="author" content="BlackPearl Team">
    <meta name="keywords" content="BlackPearl Team, اللؤلؤة السوداء, بلاك بيرل , فريق برمجة" />
	  <meta property="og:title" content="♦ BlackPearl Team">
	  <meta property="og:site_name" content="♦ BlackPearl Team">
	  <meta property="og:description" content="فريق عمل شاب مختصين ب الامن، التصاميم، البرمجيات.. نسعى لتطوير المجتمع العربي وتشجيع الشباب العربي لإنجاز أحلامهم وتحويلها لواقع يفتخر به">
    <meta property="og:type" content="website">
    <meta property="og:url" content="BlackPearl.team">
    <meta property="og:image" content="https://BlackPearl.team/icon.png">
    
<script type="text/javascript">
var sc_project=12149763; 
var sc_invisible=1; 
var sc_security="21704ac5"; 
var sc_https=1; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
  </head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153575674-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153575674-1');
</script>

  <body>

    <div class="toTop d-none" id="totop">
      <i class="fas fa-arrow-up"></i>
    </div>

    <div class="wrapper">
      <!-- Start Nav -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">الرئيسية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#sections">الأقسام</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutus">من نحن</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">التواصل</a>
              </li>
            </ul>

            <h3>Black<span>Pearl</span> </h3>
          </div>
        </div>
      </nav>

      <!-- Start Main -->
      <div class="main d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="info">
                <h3>مرحباً بكم في</h3>
                <h1>اللؤلؤة السوداء</h1>
                <h3>فريق المبرمجين العرب</h3>

                <br><br>

                <div class="main-buttons">
                  <a href="#aboutus"><button type="button" class="btn btn-main btn-lg">معرفة المزيد</button></a> &nbsp;
                  <a href="#contact"><button type="button" class="btn btn-outline-secondary btn-lg">تواصل معنا</button></a>
                </div>
              </div>
            </div>
            <img src="imgs/main.png" alt="main" class="d-none d-md-block main-img">
            <img src="imgs/e1.png" alt="main" class="d-none d-md-block" style="position: absolute; right: 2%; top: 10%; height: 152.7%">
            <img src="imgs/e2.png" alt="main" class="d-none d-md-block" style="position: absolute; top: 10%; left: 50%; height: 120.5%">
          </div>
        </div>
      </div>

      <!-- Start Sections -->
      <div class="sections" id="sections">
        <div class="container">
          <h2>الأقسام</h2>
          <div class="row">
            <div class="col-md-4 mb-4">
              <fieldset>
                <legend>برمجة المواقع</legend>
                <p>تصميم وبرمجة المواقع المتكاملة للأفراد والشركات والمؤسسات بتكلفة اقتصادية بأفضل التقنيات التي تخدم نشاط كل جهة</p>
                <br><br>
                <a href="#contact"><button type="button" class="btn btn-main float-right">طلب الخدمة</button></a>
              </fieldset>
            </div>

            <div class="col-md-4 mb-4">
              <fieldset>
                <legend>برمجة البرامج</legend>
                <p> نحن نمتلك الخبرة و الإبداع في تنفيذ البرمجيات الخاصة التي تطمح لها من خلال خبراتنا في مجال البرمجة و التطوير،</p>
                <br><br>
                <a href="#contact"><button type="button" class="btn btn-main float-right">طلب الخدمة</button></a>
              </fieldset>
            </div>

            <div class="col-md-4">
              <fieldset>
                <legend>الأمن والتطوير</legend>
                <p>لا يكفي الجمال والجاذبية فحسب في نجاح مشروعك، بل لا بدّ أن يكون التصميم فعّالاً ويحقق أهدافه ببساطة ،نقدم لك استشارات رائعة ومفيدة تساعدك على تطوير مستوى امان اعمالك وبرمجياتك </p>
                <br><br>
                <a href="#contact"><button type="button" class="btn btn-main float-right">طلب الخدمة</button></a>
              </fieldset>
            </div>
          </div>
        </div>
      </div>

      <!-- Start About Us -->
      <div class="aboutus text-center" id="aboutus">
        <div class="container">
          <h2>من نحن</h2>
          <p>
            فريق عمل شاب مختصين ب الامن، التصاميم، البرمجيات.. نسعى لتطوير المجتمع العربي وتشجيع الشباب العربي لإنجاز أحلامهم وتحويلها لواقع يفتخر به
          </p>
        </div>

        <img src="imgs/e3.png" alt="main" class="d-none d-md-block" style="position: absolute; left: 2%; top: -100%; height: 225%">
        <img src="imgs/e4.png" alt="main" class="d-none d-md-block" style="position: absolute; top: 100%; right: 2%; height: 125%">
      </div>

      <!-- Start Contact -->
      <div class="contact" id="contact">
        <div class="container">
          <h2>التواصل</h2>
          <div class="row">
            <div class="col-md-7 mb-4">
              <form class="contactus" id="contactForm" data-parsley-validate="" method="post" data-parsley-required-message="هذا الحقل مطلوب">
              <div class="form-group d-none">
               <input type="text" class="form-control" name="formOmar" id="formOmar">
                </div>

                <fieldset>
                  <input type="text" name="name" id="formName"  placeholder="محمد أحمد الحامدي" data-parsley-trigger="change" data-parsley-minlength="6" data-parsley-minlength-message="يجب عليك كتابة ستة أحرف على الأقل" required>
                  <legend>الإسم الكامل</legend>
               </fieldset>
                <fieldset>
                  <input type="email" name="email" id="formEmail" placeholder="name@email.com" data-parsley-trigger="change" data-parsley-type-message="يجب عليك كتابة إيميل صحيح " required>
                  <legend>البريد الإلكتروني</legend>
                </fieldset>
                <fieldset>
                  <textarea name="msg" id="msg" placeholder="إكتب رسالتك هنا" data-parsley-trigger="change" data-parsley-trigger="keyup" data-parsley-minlength="30" data-parsley-maxlength="500" data-parsley-minlength-message="يجب عليك كتابة ثلاثون حرفا على الأقل" data-parsley-validation-threshold="10" required></textarea>
                  <legend>رسالتك</legend>
                </fieldset>

                <div class="g-recaptcha" data-sitekey="6LcsjcQUAAAAAPITZ13s9zC-a3v6Jn8jZrhW-Xh6"></div>

                <input type="submit" name="send" value="إرسال" class="btn btn-main btn-lg float-right" style="margin: 16px auto;">
              </form>
            </div>
            <div class="col-md-5">
              <h5>قنوات التواصل الإجتماعي</h5>
              <div class="row text-center">
                <div class="col-md-3 mb-4">
                  <a href="https://facebook.com" target="_blank">
                    <div class="part">
                      <i class="fab fa-facebook-f fa-2x"></i>
                    </div>
                  </a>
                </div>
                <div class="col-md-3 mb-4">
                  <a href="https://www.instagram.com/bpp.team/" target="_blank">
                    <div class="part">
                      <i class="fab fa-instagram fa-2x"></i>
                    </div>
                  </a>
                </div>
                <div class="col-md-3 mb-4">
                  <a href="https://twitter.com" target="_blank">
                    <div class="part">
                      <i class="fab fa-twitter fa-2x"></i>
                    </div>
                  </a>
                </div>
                <div class="col-md-3">
                  <a href="https://t.me/bpp_team" target="_blank">
                    <div class="part">
                      <i class="fab fa-telegram-plane fa-2x"></i>
                    </div>
                  </a>
                </div>
              </div>

              <br><br><br>

              <h5>للإتصال على الهاتف</h5>
              <p>واتس أب: +971505730208</p>
              <p>تليقرام: @bpp_team</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Start Copyright -->
      <div class="copyright text-center">
       جميع الحقوق محفوظه لفريق اللؤلؤه السوداء &copy;
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js" integrity="sha384-a9xOd0rz8w0J8zqj1qJic7GPFfyMfoiuDjC9rqXlVOcGO/dmRqzMn34gZYDTel8k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.18.0/dist/sweetalert2.all.min.js"></script>
    <!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.1/parsley.min.js" integrity="sha256-NIrmL5MpKPRrVKsHLnkWp5u4vNpVp2fKLoFOz96mHUY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
    <script src="js/script.js"></script>
    <script>
     $('#contactForm').parsley();
     $("#contactForm").submit(function(e) {
       e.preventDefault();
       var form = $(this);
       if($('#contactForm').parsley().isValid())
       {
		 if (grecaptcha === undefined) {
			Swal.fire({
			  title: "خطأ",
			  text: "من فضلك تحقق من أنك لست روبوت",
			  type: "error"
			});
			throw new Error("Empty RECAPTCHA");
		}

		var response = grecaptcha.getResponse();
		if (!response) {
			Swal.fire({
				title: "خطأ",
				text: "من فضلك تحقق من أنك لست روبوت",
				type: "error"
			});
			throw new Error("Robot Check");
		}

         sendData("contact.php", form.serialize())
           .then(function(response)
           {
             Swal.fire(
               {
                 title: response.t,
                 text: response.m,
                 type: response.tp,
                 showConfirmButton: response.b,
                 confirmButtonText: 'حسناً'
               });
				grecaptcha.reset();

             if(response.tp == 'error')
             {
              grecaptcha.reset();
             }
             else if(response.tp == 'success')
             {
               $('#contactForm')[0].reset();
               $('#contactForm').parsley().reset();

               animateCSS(".contactus", "fadeOut", function() {

$(".contactus").addClass("d-none");

});

animateCSS(".contactus", "fadeIn", function() {

$(".contactus").html(response.m);

$(".contactus").removeClass("d-none");

});

             }
           });
       }
     });
</script>

  </body>
</html>
