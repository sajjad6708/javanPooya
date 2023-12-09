<!DOCTYPE html>
<html lang="fa" dir="rtl">

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
    <link rel="stylesheet" href="../../../assets/styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/jalalidatepicker/persian-datepicker.min.css">
    <link rel="stylesheet" href="../../../assets/styles/style-site.css">
</head>
<body>
    <div class="wrapper-main">
        <div class="row">
            <div class="col-lg-2">
                <div class="layer"></div>
                <div class="main-sidebar text-center"><a class="brand-link text-right" href="#"><img class="logo-image" src="../../../assets/images/content/Logo.png" alt="Admin Logo" title="لوگو"></a>
                    <?php
                    include "../../../assets/phpinc/sidebar.php";
                    ?>
                </div>
            </div>
            <div class="icon-menu menu-bar-icon float-right"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-10">
                <div class="wrapper-body-page">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="box-title-page-part"><span> ورود و خروج کالا</span></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="wrapper-box-btn-report">
                                <div class="box-btn-info-person">
                                    <button class="btn-form" type="button" id="b-fi-1">ثبت کالا</button>
                                    <button class="btn-form" type="button" id="b-fi-3"> گزارش کالاها</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper-box-form">
                                <div class="form-report" id="fi-1">
                                    <form class="w-100" action="#" method="post" name="formName" id="sabtCommodity" enctype="multipart/form-data">
                                        <div class="title-report"><span> فرم ثبت کالا</span></div>
                                        <div class="box-table-edit-info">
                                            <table class="table-info-roller text-right">
                                                <thead></thead>
                                                <tr>
                                                    <td>
                                                        <label> ورود : </label>
                                                        <input type="radio" name="entryExit" id="entry" value="1">

                                                        <label> خروج : </label>
                                                        <input type="radio" name="entryExit" id="exit" value="0">

                                                    </td>
                                                    <td style="width: 395px ">
                                                        <label> نام کالا :
                                                            <input style="width: 100%;" type="text" name="comName" id="comName">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <label> تعداد :
                                                            <input type="text-box" name="count" id="count">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label> واحد شمارش :</label>
                                                        <input type="text-box" name="unit" id="unit">
                                                    </td>
                                                    <td>
                                                        <label> طرف حساب :
                                                            <input type="text-box" name="account" id="account">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%">
                                                        <label> راننده :
                                                            <input style="width: 50%" type="text-box" name="driver" id="driver">
                                                        </label>
                                                    </td>
                                                    <td style="width: 50%">
                                                        <label> شماره پلاک :
                                                            <input style="width: 50%" type="text-box" name="pelak" id="pelak">
                                                        </label>
                                                    </td>
                                                <tr>
                                                    <td>
                                                        <label>تاریخ:</label>
                                                        <input type="text" name="date" id="get_date_view">
                                                        <input type="text" style="display:none" name="get_date" id="get_date">
                                                    </td>
                                                    <td>
                                                        <label> ساعت
                                                            <input style="width: 55px " type="text-box" name="hour" id="hour" placeholder="ساعت">
                                                            <input style="width: 55px " type="text-box" name="min" id="min" placeholder="دقیقه">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label> بار گذاری فایل
                                                            <input type="file" class="form-control-file " id="attachment" name="attachment" multiple>
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 100%;">
                                                        <label for=""> توضیحات</label>
                                                        <textarea style="width: 80%;" name="description" id="description" cols="30" rows="4"></textarea>
                                                    </td>
                                                </tr>
                                                <tr class="justify-content-center">
                                                    <td style="background-color : #007bff">
                                                        <input class="btn-save" id="save-shift" type="button" value=" ثـبت نهـایی" onclick="sendData()">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-report" id="fi-3">
                                    <form action="" method="post" id="formProduct">
                                        <div class="title-report"><span> </span></div>
                                        <div class="box-title-change-roller">
                                            <form action=" " method="post" id="formProduct">
                                                <div class="box-date">

                                                    <strong style="font-size: 10px; color:black ;margin:auto "> کالا های وارد شده به نگهبانی </strong> <input type="radio" name="status" id="importProduct" value="1">
                                                    <strong style="font-size: 10px; color:black"> کالا های خارج شده از نگهبانی</strong> <input type="radio" name="status" id="exportProduct" value="0">

                                                    <label style="margin:auto;"> نام کالا </label>
                                                    <input type="text-box" id="ProductName" name="ProductName" value=" ">
                                                    <label style="margin:auto;"> تاریخ </label>

                                                    <strong style="color: black;"> ازتاریخ:</strong>
                                                    <input type="text-box" style="margin:auto;" name="DateP" id="getDateViewP">
                                                    <input type="text" style="display:none" name="get_date" id="getDateP">

                                                    <strong style="color: black;"> تا تاریخ:</strong>
                                                    <input type="text-box" name="DatePB" id="getDateViewPB">
                                                    <input type="text" style="display:none" name="get_dateB" id="getDatePB">

                                                    <button class="btn-search" type="button" style="margin: auto;" value="جستجو" id="searchBtnReportMo" onclick="searchProduct()">جستجو<span class="icon-search"></span></button>
                                                </div>
                                        </div>

                                        <div class="table-responsive">
                                            <table class="table text-center table-tolid" id="reportProductTable">
                                                <caption style="caption-side:top">جدول موارد ثبت شده</caption>
                                                <thead>
                                                    <tr>
                                                        <td>ردیف </td>
                                                        <td>نام کالا </td>
                                                        <td> تعداد</td>
                                                        <td>واحد شمارش</td>
                                                        <td>طرف حساب </td>
                                                        <td> راننده </td>
                                                        <td> شماره پلاک</td>
                                                        <td>تاریخ </td>
                                                        <td>ساعت </td>
                                                        <td>توضیحات </td>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>

                                            </table>
                                        </div>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../assets/scripts/js/jquery.min.js"></script>
    <script src="../../../assets/scripts/js/bootstrap.min.js"></script>
    <script src="../../../assets/scripts/js/pdate.min.js"></script>
    <script src="../../../assets/scripts/js/zingchart.min.js"></script>
    <script src="../../../assets/scripts/js-site.js"></script>
    <script src="../../../assets/scripts/my-js.js"></script>
    <script src="../../../assets/jalalidatepicker/persian-date.min.js"></script>
    <script src="../../../assets/jalalidatepicker/persian-datepicker.min.js"></script>
    <script src="../../../Functions/myFunction.js"></script>

    <script>
        $(document).ready(function() {
            $('#get_date_view').persianDatepicker({
                format: 'YYYY/M/D',
                altField: '#get_date'
            }).setDate();

            $('#getDateViewP').persianDatepicker({
                format: 'YYYY/M/D',
                altField: '#getDateP'
            }).setDate();

            $('#getDateViewPB').persianDatepicker({
                format: 'YYYY/M/D',
                altField: '#getDatePB'
            }).setDate();

        });

        // ====================================   form Sabt product=======================================

        function sendData() {
            event.preventDefault();
            var sabtCommodity = document.getElementById('sabtCommodity');

            formData = new FormData(sabtCommodity);
            var scommodity = 1;

            formData.append('scommodity', scommodity);

            $.ajax({
                url: "commodityTable.php",
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data) {
                    console.log(data);
                    var alertBox = document.createElement("div");
                    alertBox.classList.add("alert", "alert-success");
                    alertBox.textContent = "با موفقیت ثبت شد";
                    alertBox.style.position = "fixed";
                    alertBox.style.textAlign = "center";
                    alertBox.style.width = "250px";
                    alertBox.style.height = "80px";
                    alertBox.style.top = "50%";
                    alertBox.style.left = "50%";
                    alertBox.style.transform = "translate(-50%, -50%)";
                    document.body.appendChild(alertBox);

                    setTimeout(function() {
                        alertBox.style.display = "none";
                        // window.location.href = "commidity.php";
                    }, 2000);

                }
            })
        };

        // =======================   SEARCH PRODUCT   =============================

        function searchProduct() {
            event.preventDefault();
            ProductF = document.getElementById('formProduct');
            var formProduct = new FormData(ProductF);
            var issetProduct = 1;
            formProduct.append('issetProduct', issetProduct);

            $.ajax({
                url: "commodityTable.php",
                data: formProduct,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(value) {
                    var data = JSON.parse(value);
                    console.log(data);
                    $("#reportProductTable tbody").html('');
                    var cunter = 0;
                    for (var i = 0; i < data.length; i++) {
                        cunter++;
                        var row = $('<tr></tr>');
                        var rowData = data[i];

                        var cell1 = $('<td>' + cunter + '</td>');
                        var cell2 = $('<td>' + rowData[2] + '</td>');
                        var cell3 = $('<td>' + rowData[3] + '</td>');
                        var cell4 = $('<td>' + rowData[4] + '</td>');
                        var cell5 = $('<td>' + rowData[5] + '</td>');
                        var cell6 = $('<td>' + rowData[6] + '</td>');
                        var cell7 = $('<td>' + rowData[7] + '</td>');
                        var cell8 = $('<td>' + rowData[12] + '</td>');
                        var cell9 = $('<td>' + rowData[8] + '</td>');
                        var cell10 = $('<td>' + rowData[9] + '</td>');

                        row.append(cell1, cell2, cell3, cell4, cell5, cell6, cell7, cell8, cell9, cell10);
                        $("#reportProductTable tbody").append(row)

                    }





                }
            })


        }
    </script>
</body>

</html>