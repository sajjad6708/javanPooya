<html lang="en">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="پنل مدیریت">
    <meta name="author" content="itsaCo">
    <meta name="keywords" content="پنل مدیریت">
    <meta property="og:site_name" content="پنل مدیریت">
    <meta property="og:type" content="website">
    <meta property="og:url" content="#">
    <meta property="og:title" content="پنل مدیریت">
    <meta property="og:description" content="پنل مدیریت">
    <meta property="og:image" content="">
    <meta property="og:locale" content="fa_IR">
    <link rel="canonical" href="http:///">
    <link rel="icon" href="assets/images/content/logo.png" type="image/x-icon">
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
    <title>پنل مدیریت</title>
    <link rel="stylesheet" href="../assets/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/jalalidatepicker/persian-datepicker.min.css">
    <link rel="stylesheet" href="../assets/styles/style-site.css">
</head>
<?php
include "../assets/phpinc/header.php";
?>

<body>
    <div class="wrapper-main">
      
        <div class="row">
            <div class="col-lg-2"> <span><strong>شرکت جوان پویای کاشان</strong></span>
            <img src="../assets/images/s.jpg" alt="" srcset="" style="text-align:center" >
              
                <div class="main-sidebar text-center"><a class="brand-link text-right" href="#"><img class="logo-image" src="assets/images/content/Logo.png" alt="شرکت جوان پویای کاشان" title="شرکت جوان پویای کاشان"></a>
                <div class="col-md-2 col-lg-2">
    <div class="layer"></div>
    <div class="main-sidebar text-center"><a class="brand-link text-right" href="#"><img class="logo-image"
                src="../assets/images/content/logo.png" alt="Admin Logo" title="شرکت جوان پویای کاشان"></a>
        <div class="main-shift">
            <ul class="list-shift">
                <li class="type-shift"><span>A</span></li>
                <li class="item-list-shift"><span class="clock" id="MyClockDisplay" onload="showTime()"></span></li>
                <li class="item-list-shift"><span id="pdate1"></span></li>
            </ul>
        </div>
        <div class="sidebar text-right">
            <div class="text-right">
                <nav>
                    <ul class="list-sidebar-title flex-column show">
                        <li class="item-list-sidebar"><a class="d-flex position-relative align-items-baseline active"
                                href="../home.php"><span class="icon-home icon-link-item"></span>
                                <p class="part-link-item">خانه</p>
                            </a></li>
                        <li class="item-list-sidebar"><a class="d-flex position-relative align-items-baseline"
                                data-toggle="collapse" href="#sub-list-charts" role="button" aria-expanded="false"
                                aria-controls="collapseExample"><span class="icon-info icon-link-item"></span>
                                <p class="part-link-item"> واحد انتظامات<span class="icon-down"></span></p>
                            </a>
                            <ul class="collapse list-sub-item show" id="sub-list-charts">
                         
                                    <ul class="collapse list-sub-item show" id="sub-list-salon">
                                        <li class="item-list-sub-item"><a class="d-flex align-items-baseline"
                                                href="../Folders/security/meeting/meeting.php">
                                                <p> ملاقات</p>
                                            </a></li>
                                        <li class="item-list-sub-item"><a class="d-flex align-items-baseline"
                                                href="../Folders/security/morakhasi/morakhasi.php">
                                                <p> مرخصی</p>
                                            </a></li>
                                        <li class="item-list-sub-item"><a class="d-flex align-items-baseline"
                                                href="../Folders/security/commodity/commodity.php">
                                                <p> ورود خروج بار</p>
                                            </a></li>

                                            <li class="item-list-sub-item"><a class="d-flex align-items-baseline"
                                                href="../Folders/security/barcode/barcode.html">
                                                <p>   سیستم ثبت بارکد</p>
                                            </a></li>
                                            <li class="item-list-sub-item"><a class="d-flex align-items-baseline"
                                                href="../Folders/security/managerBarcode/managerBarcode.html">
                                                <p>بارکد های ثبت شده</p>
                                            </a></li>
                                    </ul>
                          
                            
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="icon-menu menu-bar-icon float-right"></div>
                </div>
            </div>
            <div class="icon-menu menu-bar-icon float-right"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
              
                <?php
                include "../assets/phpinc/footer.php";
                ?>
            
    <script src="../assets/scripts/js/jquery.min.js"></script>
    <script src="../assets/scripts/js/bootstrap.min.js"></script>
    <script src="../assets/scripts/js/pdate.min.js"></script>
    <script src="../assets/scripts/js/zingchart.min.js"></script>
    <script src="../assets/scripts/js-site.js"></script>
    <script src="../assets/scripts/my-js.js"></script>
    <script src="../assets/jalalidatepicker/persian-date.min.js"></script>
    <script src="../assets/jalalidatepicker/persian-datepicker.min.js"></script>
    <script src="../Functions/myFunction.js"></script>

</body>

</html>