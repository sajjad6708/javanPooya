<?php
session_start();

  
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="صفحه ورود">
  <meta name="author" content="itsaCo">
  <meta name="keywords" content="صفحه ورود">
  <meta property="og:site_name" content="صفحه ورود">
  <meta property="og:type" content="website">
  <meta property="og:url" content="#">
  <meta property="og:title" content="صفحه ورود">
  <meta property="og:description" content="صفحه ورود">
  <meta property="og:image" content="">
  <meta property="og:locale" content="fa_IR">
  <link rel="canonical" href="#">
  <link rel="icon" href="assets/images/content/logo.jpg" type="image/x-icon">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-styles" content="black-translucent">
  <link rel="apple-touch-icon" sizes="512x512" href="./android-chrome-512x512.png">
  <link rel="apple-touch-icon" sizes="192x192" href="./android-chrome192x192.png">
  <link rel="shortcut icon" sizes="192x192" href="./android-chrome-192x192.png">
  <link rel="apple-touch-startup-image" href="./apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="32x32" href="./favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="16x16" href="./favicon-16x16.png">
  <link rel="apple-touch-icon" href="./apple-touch-icon.png">
  <meta name="msapplication-TileImage" content="./android-chrome-192x192.png">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="theme-color" content="#e76f51">
  <title>صفحه ورود</title>
  <link rel="stylesheet" href="assets/login-assets/styles/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/login-assets/styles/style-site.css">
  <link rel="stylesheet" href="assets/login-assets/styles/page-1.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="container">
    <div class="row full-page">
      <div class="col-12 col-sm-12 col-md-12 col-lg-6">
        <div class="wrapper-form text-center d-flex align-items-center justify-content-center flex-column">
          <article>
            <h2 class="title-login"> نام کاربری و رمز عبور خود را وارد کنید.</h2>
          </article>
          <article>
            <form class="login" action="Db/LoginPage.php" method="post">
              <div class="wrapper-box-enter"><span class="icon-user"></span>
                <input class="user" type="text" name="user" maxlength="10" minlength="3" required placeholder=" نام کاربری خود را وارد کنید " title="نام کاربری را بدون فاصله وارد کنید" oninvalid="setCustomValidity('این فیلد را نمیتوانید خالی رها کنید')" oninput="setCustomValidity('')">
              </div>
              <div class="wrapper-box-enter"><span class="icon-key"></span>
                <input class="pass" type="password" name="pass" maxlength="8" minlength="4" required placeholder="رمز عبور خود را وارد کنید " title=" تمامی کاراکتر ها عددی و بین 4 تا 8 عدد باشد" oninvalid="setCustomValidity('این فیلد را نمیتوانید خالی رها کنید')" oninput="setCustomValidity('')"><span class="icon-eye"></span>
              </div>
              <div class="wrapper-box-link">
                <div class="box-forget-pass d-flex align-items-center">
                  <input type="checkbox"><span class="title-save-pass"> مرا به خاطر بسپار</span>
                </div><a class="link-forget-pass" href="#">فراموشی رمز</a>
              </div><button class="btn-login" type="submit" name="sub" href="#">ورود<span class="icon-enter"></span></a>
            </form>
          </article>
        </div>
      </div>
      <div class="col-12 col-sm-12 col-md-12 col-lg-6 d-flex align-items-center justify-content-center flex-column wrapper-part-left">
        <div class="wrapper-logo"><img class="h-100" src="assets/images/content/logo.png" alt="" title="شرکت اسکای"></div>
        <div class="wrapper-text-logo"></div>
      </div>
    </div>
  </div>
  <script src="assets/login-assets/scripts/js/jquery.min.js"></script>
  <script src="assets/login-assets/scripts/js/bootstrap.min.js"></script>
  <script src="assets/login-assets/scripts/js-site.js"></script>
</body>

<?php
 
 
if( isset($_SESSION['success-login']) ) { 
  if($_SESSION['success-login']== 1 ){ ?>
<script>
 const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title:  ' <?php echo $name;?> عزیز خوش اومدی',
})

window.body.addEventListener('click',)
</script>

 <?php }} ?>


   <?php unset( $_SESSION['success-login'] ); ?>


   <?php


if ( isset($_SESSION['error-login']) ) { 
  if($_SESSION['error-login']== 1 ){ ?>
<script>
  Swal.fire({
  icon: 'error',
  title: 'خطا',
  text: 'نام کاربری یا رمز عبور اشتباه است',
  timer:3000,
})
</script>

 <?php }} ?>


   <?php unset( $_SESSION['error-login'] ); ?>

</html>





















