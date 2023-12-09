<?php
include "../../../Db/securityTable.php";
include "../../../assets/phpinc/header.php";
include "../../../DateAndTime/jdf.php";

$security = new security();

if (isset($_POST['sub']) && !empty($_POST['name']) && !empty($_POST['visited'])) {
    $name = $_POST['name'];
    $visited = $_POST['visited'];
    $reason = $_POST['reason'];
    $equipment = $_POST['equipment'];
    $hourEntry = $_POST['hourEntry'];
    $minEntry = $_POST['minEntry'];
    $hourExit = $_POST['hourExit'];
    $minExit = $_POST['minExit'];
    $entry = $hourEntry . ":" . $minEntry;
    $exit = $hourExit . ":" . $minExit;
    $user = "سجاد دشتبان";

    $jdate =  jdate('Y/n/j');
    $date = str_replace('/', '-', $jdate);

    $security->AddMeeting($name, $visited, $reason, $equipment, $entry, $exit, $user,  $date);
    $dateNow = jdate('Y/n/j');
    $dateNow = str_replace('/', '-', $jdate);
    $mettings = $security->selectMeeting($dateNow);
}

?>
<?php
include "../../../assets/phpinc/header.php";
?>
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
    <meta property="og:url" content="http://negin-carpet.bargrizoon.ir/">
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
    <link rel="stylesheet" href="../../../assets/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/jalalidatepicker/persian-datepicker.min.css">
    <link rel="stylesheet" href="../../../assets/styles/style-site.css">
</head>



<body>
    <div class="wrapper-main">
        <div class="row">
            <div class="col-lg-2">
                <div class="layer"></div>
                <div class="main-sidebar text-center"><a class="brand-link text-right" href="#"><img class="logo-image" src="../../../assets/images/content/logo.png" alt="Admin Logo" title="لوگو"></a>
                    <?php
                    include "../../../assets/phpinc/sidebar.php";
                    ?>
                </div>
            </div>
            <div class="icon-menu menu-bar-icon float-right"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="wrapper-body-page">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper-box-form col-12">
                                <div class="title-report"><span style="background-color:LightGray">
                                        ثبت مراجعات</span><br></div><br>
                                <form class="form-full" action="meeting.php" method="post">

                                    <div class="col-6"> <label style="width:395px"> مراجعه کننده :
                                            <input type="text-box" name="name" size="10" style="width:295px">

                                        </label></div>
                                    <div class="col-6"><label style="width:395px"> ملاقات شونده :
                                            <input type="text-box" name="visited" size="10" style="width:295px">

                                        </label></div>


                                    <div class="col-6"> <label style="width:395px "> علت مراجعه :
                                            <input type="text-box" name="reason" size="10" style="width:295px">

                                        </label></div>
                                    <div class="col-6"><label style="width:395px "> وسایل همراه :
                                            <input type="text-box" name="equipment" size="10" style="width:295px">

                                        </label></div>

                                    <div class="col-6"><label style="width:195px"> ساعت ورود :
                                            <input type="text-box" name="hourEntry" size="3" placeholder="ساعت">
                                            <input type="text-box" name="minEntry" size="3" placeholder="دقیقه">
                                        </label></div>

                                    <div class="col-6"> <label style="width:195px"> ساعت خروج :
                                            <input type="text-box" name="hourExit" size="3" placeholder="ساعت">
                                            <input type="text-box" name="minExit" size="3" placeholder="دقیقه">
                                        </label></div>

                                    <div class="col-12"> <button class="btn-search" type="submit" value="جستجو" name="sub">ثبت ملاقات <span class="icon-search"></span></button> </div>
                                </form>

                                <div class="table-responsive">
                                    <table class="table table-data">
                                        <caption style="caption-side:top ; background-color:#ffed8fba; color: black;"> لیست مراجعات </caption>
                                        <thead>
                                            <tr>
                                                <td>ردیف</td>
                                                <td>مراجعه کننده</td>
                                                <td> ملاقات شونده</td>
                                                <td> علت مراجعه</td>
                                                <td>وسایل همراه</td>
                                                <td>ساعت ورود</td>
                                                <td>ساعت خروج</td>
                                                <td>تاریخ</td>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            if (isset($mettings)) {
                                                $counter = 1;
                                                foreach ($mettings as $meeting) {
                                                    echo "<tr>";
                                                    echo "<td>" . $counter . "</td>";
                                                    echo "<td>" . $meeting['fullName'] . "</td>";
                                                    echo "<td>" . $meeting['visited'] . "</td>";
                                                    echo "<td>" . $meeting['reason'] . "</td>";
                                                    echo "<td>" . $meeting['equipment'] . "</td>";
                                                    echo "<td>" . $meeting['entry'] . "</td>";
                                                    echo "<td>" . $meeting['end'] . "</td>";
                                                    echo "<td>" . $meeting['date'] . "</td>";
                                                    $counter++;
                                                }
                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

          
            </script>
            <script src="../../../assets/scripts/js/bootstrap.min.js"></script>
            <script src="../../../assets/scripts/js/pdate.min.js"></script>
            <script src="../../../assets/scripts/js/zingchart.min.js"></script>
            <script src="../../../assets/scripts/js-site.js"></script>
            <script src="../../../assets/scripts/my-js.js"></script>
            <script src="../../../assets/jalalidatepicker/persian-date.min.js"></script>
            <script src="../../../assets/jalalidatepicker/persian-datepicker.min.js"></script>
            <script src="../../../assets/PersianDate-master/dist/persian-date.min.js "></script>

            </script>
</body>
</html>