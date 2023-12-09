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
    <meta property="og:url" content="#/">
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
                            <div class="box-title-page-part"><span> مرخصی ساعتی پرسنل</span></div>
                        </div>
                        <div class="col-lg-12">
                            <div class="wrapper-box-btn-report">
                                <div class="box-btn-info-person">
                                    <button class="btn-form" type="button" id="b-fi-1">ثبت مرخصی</button>
                                    <button class="btn-form" type="button" id="b-fi-2">ویرایش مرخصی</button>
                                    <button class="btn-form" type="button" id="b-fi-3"> گزارش مرخصی</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="wrapper-box-form">
                                <div class="form-report" id="fi-1">
                                    <form class="w-100" action="#" method="post" name="formName" id="sabtMorakhasi">
                                        <div class="title-report"><span> فرم ثبت مرخصی</span></div>
                                        <div class="box-table-edit-info">
                                            <table class="table-info-roller text-right">
                                                <thead></thead>
                                                <tr>
                                                    <td>
                                                        <label style="width:195px"> پست :
                                                            <select style="width:127px" name="post" id="post">

                                                                <option value="ss">سرپرست سالن</option>
                                                                <option value="ms ">مهندسی صنعتی</option>
                                                                <option value="hs">حسابداری</option>
                                                                <option value=" sa"> سرشیفت</option>
                                                                <option value="ba">بافنده</option>
                                                                <option value="fn">فنی</option>
                                                                <option value="sha">شانه سازی</option>
                                                                <option value="ts">تاسیسات</option>
                                                                <option value="mo">مقدمات</option>
                                                                <option value="bp">بازرسی پارچه</option>
                                                                <option value="an">انبار</option>
                                                                <option value="br">برق</option>
                                                                <option value="tr">طراحی</option>
                                                                <option value="kh">خدمات</option>
                                                                <option value="ad">اداری</option>
                                                            </select>
                                                        </label>
                                                    </td>
                                                    <td style="width: 395px ">
                                                        <label> نام و نام خانوادگی :

                                                            <select name="name" id="name" style="width: auto;">
                                                                <option value=""> انتخاب نام </option>
                                                            </select>
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label> کد پرسنلی:

                                                            <input type="text-box" name="personelCode" id="personelCode">

                                                        </label>

                                                    </td>

                                                    <td style="width: 150px;">
                                                        <label> شیفت :</label>
                                                        <select name="shift" id="shift" style="width: 50px;">
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                        </select>
                                                    </td>
                                                    <td style="width: 250px;">

                                                        <label> سرشیفت :
                                                            <select id="sarshift" name="sarshift">

                                                                <option value=" "> انتخاب سرشیفت</option>

                                                            </select>
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label>تاریخ:</label>
                                                        <input type="text" name="date" id="get_date_view">
                                                        <input type="text" style="display:none" name="get_date" id="get_date">

                                                    </td>


                                                    <td>
                                                        <label> از ساعت

                                                            <input style="width: 55px " type="text-box" name="hourExit" id="hourExit" placeholder="ساعت">
                                                            <input style="width: 55px " type="text-box" name="minExit" id="minExit" placeholder="دقیقه">
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label> تا :
                                                            <input style="width: 55px " type="text-box" name="hourEntry" id="hourEntry" placeholder="ساعت">
                                                            <input style="width: 55px " type="text-box" name="minEntry" id="minEntry" placeholder="دقیقه">
                                                        </label>
                                                    </td>
                                                </tr>
                                                <tr class="justify-content-center">
                                                    <td style="background-color : #f78700">
                                                        <input class="btn-save" id="save-shift" type="button" value=" ثـبت نهـایی" onclick="sendData()">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-report" id="fi-2">
                                    <div class="title-report"><span> فرم ویرایش مرخصی</span></div>
                                    <div class="box-title-change-roller">
                                        <div class="box-date">
                                            <label> نوع جستجو</label>
                                            <select id="search">
                                                <option value="personelCode">کد پرسنلی</option>
                                                <option value="family">نام خانوادگی</option>
                                            </select>
                                            <input type="text-box" id="searchBox">
                                            <button id="searchBtn" class="btn-search" type="button" value="جستجو">جستجو<span class="icon-search"></span></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table text-center table-tolid" id="editMoTable">
                                            <caption style="caption-side:top">جدول موارد ثبت شده</caption>
                                            <thead>
                                                <tr>
                                                    <td> ردیف</td>
                                                    <td>نام و خانوادگی</td>
                                                    <td>کد پرسنلی</td>
                                                    <td>سرشیفت</td>
                                                    <td>شیفت</td>
                                                    <td>پست</td>
                                                    <td>تاریخ</td>
                                                    <td>ساعت</td>
                                                    <td>عملیات</td>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>

                                        </table>
                                    </div>
                                    <form class="w-100" action="#" method="post" name="formName" id="editMorakhasi"> <span class="box-title-page-part">ورود اطلاعات جدید</span>
                                        <div class="box-table-change-roller" id="divShowEditForm">

                                            <table class="table-info-roller text-right">

                                                <thead> </thead>



                                                <tr>
                                                    <td>
                                                        <label style="width:195px"> پست :
                                                            <input type="text" style="width:127px" name="post" id="postEdit" readonly>
                                                        </label>
                                                    </td>
                                                    <td style="width: 395px ">
                                                        <label> نام و نام خانوادگی :

                                                            <input readonly type="text" name="name" id="nameEdit" style="width: auto;" value="">
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label> کد پرسنلی:

                                                            <input readonly type="text-box" name="personelCode" id="personelCodeEdit" value="">

                                                        </label>

                                                    </td>

                                                    <td style="width: 150px;">
                                                        <label> شیفت :</label>
                                                        <input readonly type="text" name="shift" id="shiftEdit" style="width: 50px;" value="">
                                                    </td>
                                                    <td style="width: 250px;">

                                                        <label> سرشیفت :
                                                            <input readonly type="text" id="sarshiftEdit" name="sarshift" value="">
                                                        </label>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <label>تاریخ:</label>
                                                        <input type="text" name="date" id="get_date_viewEdit">
                                                        <input type="text" style="display:none" name="get_date" id="get_date">



                                                    <td>
                                                        <label> از ساعت

                                                            <input style="width: 95px " type="text-box" name="ExitEdit" id="ExitEdit" placeholder="ساعت خروج" value="">
                                                            <!-- <input style="width: 55px " type="text-box" name="minExit" id="minExitEdit" placeholder="دقیقه" value=""> -->
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <label> تا :
                                                            <input style="width: 95px " type="text-box" name="EntryEdit" id="EntryEdit" placeholder="ساعت ورود">
                                                            <input type="hidden" name="userId" id="userIdEdit">
                                                        </label>
                                                    </td>
                                                </tr>



                                                <tr class="justify-content-center">
                                                    <td style="background-color : #f78700">
                                                        <button type="button" value=" ثـبت اطلاعات " id="#" onclick="editMO()">ثبت اطلاعات</button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                                <div class="form-report" id="fi-3">
                                    <div class="title-report"><span> گزارشات</span></div>
                                    <div class="box-title-change-roller">
                                        <div class="box-date">
                                            <label> نوع جستجو</label>
                                            <select id="searchReportMo">
                                                <option value="personelCode">کد پرسنلی</option>
                                                <option value="family">نام خانوادگی</option>
                                            </select>

                                            <input type="text-box" id="searchBoxReportMo">
                                            <label style="margin-right:50px;"> تاریخ </label>

                                            <strong style="color: black;"> ازتاریخ:</strong>
                                            <input type="text-box" style="margin-left:20px;" id="getDateViewReport">
                                            <input type="text" style="display:none" name="get_date" id="getDateReport">

                                            <strong style="color: black;"> تاتاریخ:</strong>
                                            <input type="text-box" id="getDateViewReportB">
                                            <input type="text" style="display:none" name="get_date" id="getDateReportB">

                                            <button class="btn-search" type="button" value="جستجو" id="searchBtnReportMo">جستجو<span class="icon-search"></span></button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table text-center table-tolid" id="ReportMoTable">
                                            <caption style="caption-side:top"> <span id="namerp" style="float: right; text-align: right;"> </span> <span id="coderp" style="float: left; text-align: left;"> </span> مشخصات </caption>
                                            <thead>
                                                <tr>
                                                    <td>ردیف </td>
                                                    <td>تاریخ </td>
                                                    <td>ساعت خروج</td>
                                                    <td>ساعت ورود </td>
                                                    <td>مدت زمان مرخصی</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
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
    <script src="../../../assets/PersianDate-master/dist/persian-date.min.js "></script>

    <script src="../../../Functions/myFunction.js"></script>


    <script>
        $(document).ready(function() {

            $('#get_date_view').persianDatepicker({
                format: 'YYYY/M/D',
                altField: '#get_date'
            }).setDate();

            $('#getDateViewReport').persianDatepicker({
                format: 'YYYY/M/D',
                altField: '#getDateReport'
            }).setDate();

            $('#getDateViewReportB').persianDatepicker({
                format: 'YYYY/M/D',
                altField: '#getDateReportB'
            }).setDate();
            //   var PersianDate = new PersianDate();
            // ===========================      name&family         ========================================
            var selectPost = document.getElementById('post');
            var personelCode = document.getElementById('personelCode');
            selectPost.addEventListener("click", function() {
                $("#name").empty();
                var postValue = selectPost.value;
                var getPosts = 1;
                $.ajax({
                    url: "getNamePersonel.php",
                    method: "POST",
                    data: {

                        postValue: postValue,
                        getPosts: getPosts
                    },
                    success: function(value) {
                        var nameAndNa = JSON.parse(value);
                        nameAndNa.sort(function(a, b) {
                            return a[1].localeCompare(b[1], 'fa');
                        });
                        console.log(nameAndNa);
                        $.each(nameAndNa, function(key, value) {
                            $("#name").append($('<option>', {
                                value: value[0] + "-" + value[1],
                                text: value[1] + "-" + value[0]
                            }));
                        });
                    }
                });
            });

            $("#name").on("change", function() {
                var personName = $(this).val();
                var namesplit = personName.split("-");
                var firstName = namesplit[0];
                var lastName = namesplit[1];
                var pCode = 1
                $.ajax({
                    url: "getNamePersonel.php",
                    method: "POST",
                    data: {

                        firstName: firstName,
                        lastName: lastName,
                        pCode: pCode
                    },
                    success: function(value) {
                        var pC = JSON.parse(value);
                        console.log(pC);
                        $("#personelCode").val(pC);
                    }
                });
            });

            // ==========================================  SELECT SARSHIFT=======================

            var sarshift = document.getElementById('sarshift');
            sarshift.addEventListener('focus', function() {
                $("#sarshift").html(''); // یا $("#sarshift").empty();
                var getSarshift = 1;
                $.ajax({
                    url: "getNamePersonel.php",
                    method: "POST",
                    data: {
                        getSarshift: getSarshift
                    },
                    success: function(value) {
                        var sarshifts = JSON.parse(value);
                        sarshifts.sort(function(a, b) {
                            return a[1].localeCompare(b[1], 'fa');
                        });

                        console.log(sarshifts);
                        var newOptions = "";
                        $.each(sarshifts, function(key, value) {
                            newOptions += '<option value="' + value[0] + '-' + value[1] + '">' + value[0] + '-' + value[1] + '</option>';
                            $("#sarshift").html(newOptions)
                        });
                    }
                });
            });

            // =========================================  Edit Morakhasi====================================  
            $("#b-fi-2").click(function() {
                $('#editMoTable tbody').empty();
                var tarikh = new persianDate();
                let date = tarikh.toLocale('fa').format("YYYY-MM-DD");
                let editMo = 1;
                $.ajax({
                    url: 'getNamePersonel.php',
                    type: 'post',
                    data: {

                        'editMo': editMo
                    },
                    success: function(value) {
                        var data = JSON.parse(value);
                        var editMoTable = $("#editMoTable tbody");
                        var rowEdit = document.getElementById('rowEdit');
                        var counter = 0;

                        for (var i = 0; i < data.length; i++) {
                            counter++
                            var row = $('<tr></tr>');
                            var rowData = data[i];
                            var post = rowData[3];

                            if (post == 'ba') {
                                post = "بافنده";
                            }
                            if (post == "sr") {
                                post = "سرشیفت";
                            }

                            var cell1 = $('<td>' + counter + '</td>');
                            var cell2 = $('<td>' + rowData[1] + '</td>');
                            var cell3 = $('<td>' + rowData[2] + '</td>');
                            var cell4 = $('<td>' + rowData[5] + '</td>');
                            var cell5 = $('<td>' + rowData[4] + '</td>');
                            var cell6 = $('<td>' + post + '</td>');
                            var cell7 = $('<td>' + rowData[9] + '</td>');
                            var cell8 = $('<td>' + rowData[7] + ' ' + 'الی ' + '  ' + rowData[6] + '</td>');
                            var cell9 = $('<td> </td>');

                            var editBtn = $('<input>').attr({
                                type: 'button',
                                value: 'ویرایش',
                                'data-user-id': rowData[0] // شناسه کاربر در اینجا به عنوان داده data-user-id به المان اضافه شده است
                            }).attr('class', 'editBtn');
                            cell9.append(editBtn);

                            var deleteBtn = $('<input>').attr({
                                type: 'button',
                                value: 'حذف',
                                'data-user-id': rowData[0],
                                class: 'deleteBtn'
                            });
                            cell9.append(deleteBtn);

                            row.append(cell1, cell2, cell3, cell4, cell5, cell6, cell7, cell8, cell9);
                            $('#editMoTable tbody').append(row);
                            console.log(post);
                        }
                    }
                });
            });

            // ===================== SEARCH PERSONEL =====================
            $("#searchBtn").click(function() {
                $('#editMoTable tbody').html('');
                var selectSearch = document.getElementById('search').value;
                var searchBox = document.getElementById('searchBox').value;
                var editMoTable = $("#editMoTable tbody");

                $.ajax({
                    url: 'getNamePersonel.php',
                    type: 'post',
                    data: {
                        'selectSearch': selectSearch,
                        'searchBox': searchBox
                    },

                    success: function(value) {
                        console.log(value);
                        var data = JSON.parse(value);
                        var counter = 0;
                        for (var i = 0; i < data.length; i++) {
                            counter++
                            var row = $('<tr></tr>');

                            var rowData = data[i];
                            var post = rowData[3];

                            if (post == 'ba') {
                                post = "بافنده";
                            }
                            if (post == "sr") {
                                post = "سرشیفت";
                            }
                            var cell1 = $('<td>' + counter + '</td>');
                            var cell2 = $('<td>' + rowData[1] + '</td>');
                            var cell3 = $('<td>' + rowData[2] + '</td>');
                            var cell4 = $('<td>' + rowData[5] + '</td>');
                            var cell5 = $('<td>' + rowData[4] + '</td>');
                            var cell6 = $('<td>' + post + '</td>');
                            var cell7 = $('<td>' + rowData[9] + '</td>');
                            var cell8 = $('<td>' + rowData[7] + ' ' + 'الی ' + '  ' + rowData[6] + '</td>');
                            var cell9 = $('<td> </td>');

                            var editBtn = $('<input>').attr({
                                type: 'button',
                                value: 'ویرایش',
                                'data-user-id': rowData[0]
                            }).attr('class', 'editBtn');
                            cell9.append(editBtn);

                            var deleteBtn = $('<input>').attr({
                                type: 'button',
                                value: 'حذف',
                                'data-user-id': rowData[0]

                            }).attr('class', 'deleteBtn');
                            cell9.append(deleteBtn);

                            row.append(cell1, cell2, cell3, cell4, cell5, cell6, cell7, cell8, cell9);
                            $('#editMoTable tbody').append(row);
                        }
                    }
                });
            });
            // ====================================================    
            $('#editMoTable').on('click', '.editBtn', function() {
                var editMorakhasi = $("#editMorakhasi");
                var userId = $(this).data('user-id');
                $.ajax({
                    url: 'getNamePersonel.php',
                    type: 'post',
                    data: {
                        userId: userId
                    },
                    success: function(value) {
                        var data = JSON.parse(value);
                        var post = data[0][3];

                        if (post == 'ba') {
                            post = "بافنده";
                        }
                        if (post == "sr") {
                            post = "سرشیفت";
                        }

                        $("#userIdEdit").val(data[0][0]);
                        $("#postEdit").val(post);
                        $("#nameEdit").val(data[0][1]);
                        $("#personelCodeEdit").val(data[0][2]);
                        $("#shiftEdit").val(data[0][4]);
                        $("#sarshiftEdit").val(data[0][5]);
                        $("#get_date_viewEdit").val(data[0][9]);
                        $("#ExitEdit").val(data[0][7]);
                        $("#EntryEdit").val(data[0][6]);
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });
            // ===================================================== DELETE
            $('#editMoTable').on('click', '.deleteBtn', function() {
                var editMorakhasi = $("#editMorakhasi");
                var userId = $(this).data('user-id');
                var deleteMo = 1;
                $.ajax({
                    url: 'getNamePersonel.php',
                    type: 'post',
                    data: {
                        'userId': userId,
                        'deleteMo': deleteMo
                    },
                    success: function(value) {
                        var alertBox = document.createElement("div");
                        alertBox.classList.add("alert", "alert-success");
                        alertBox.textContent = "با موفقیت حذف شد";
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
                            window.location.href = "Morakhasi.php";
                        }, 2000);

                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    }
                });
            });

            // ========================================-----------Report Morakhasi Personel--------------===================================
            $("#searchBtnReportMo").click(function() {
                $('#ReportMoTable tbody').html('');
                var selectSearchReport = document.getElementById('searchReportMo').value;
                var searchBoxReport = document.getElementById('searchBoxReportMo').value;
                var dateA = document.getElementById('getDateViewReport').value;
                var dateB = document.getElementById('getDateViewReportB').value;
                var reportMoTable = $("#ReportMoTable tbody");



                $.ajax({
                    url: 'getNamePersonel.php',
                    type: 'post',
                    data: {
                        'selectSearchReport': selectSearchReport,
                        'searchBoxReport': searchBoxReport,
                        'dateA': dateA,
                        'dateB': dateB
                    },

                    success: function(value) {
                        // console.log(value);
                        var data = JSON.parse(value);
                        console.log(data);
                        var counter = 0;
                        $('#namerp').html('نام:' + ' ' + data[0][1]);
                        $('#coderp').html('کدپرسنلی' + ' ' + data[0][2]);
                        for (var i = 0; i < data.length; i++) {
                            counter++
                            var row = $('<tr></tr>');

                            var rowData = data[i];
                            var post = rowData[3];

                            var time1 =  rowData[7];
                            var time2 =  rowData[6];

                            var diff = calculateTimeDifference(time1, time2);

                         








                            // console.log(rowData) ;
                            if (post == 'ba') {
                                post = "بافنده";
                            }
                            if (post == "sr") {
                                post = "سرشیفت";
                            }
                            var cell1 = $('<td>' + counter + '</td>');
                            var cell2 = $('<td>' + rowData[9] + '</td>');

                            var cell3 = $('<td>' + rowData[7] + '</td>');
                            var cell4 = $('<td>' + rowData[6] + '</td>');
                            var cell5 = $('<td>' + diff + '</td>');
                            row.append(cell1, cell2, cell3, cell4, cell5, );
                            $('#ReportMoTable tbody').append(row);
                        }
                    }
                });
            });
        });

        // ====================================   form Sabt Morakhasi=======================================
        function sendData() {
            event.preventDefault();
            var sabtMorakhasi = document.getElementById('sabtMorakhasi');
            formData = new FormData(sabtMorakhasi);
            var sMorakhasi = 1;

            formData.append('sMorakhasi', sMorakhasi);
            $.ajax({
                url: "getNamePersonel.php",
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
                        window.location.href = "Morakhasi.php";
                    }, 2000);
                }
            })
        };

        // =========================================    EDIT MORAKHASI ===================================
        function editMO() {
            event.preventDefault();
            var editMorakhasi = document.getElementById('editMorakhasi');
            formEditData = new FormData(editMorakhasi);
            var eMorakhasi = 1;
            formEditData.append('eMorakhasi', eMorakhasi);

            $.ajax({
                url: "getNamePersonel.php",
                data: formEditData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(data) {
                    console.log(data);
                    var alertBox = document.createElement("div");
                    alertBox.classList.add("alert", "alert-success");
                    alertBox.textContent = "با موفقیت ویرایش  شد";
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
                        window.location.href = "Morakhasi.php";
                    }, 2000);

                }
            })
        }

        function Post(p) {
            var p = "";
            if (p == "ba") {
                p = "بافنده";
            }
            if (p == "sr") {
                p = "سرشیفت";
            }
            return p;
        }

        function getDayName(dateStr) {
            const dateParts = dateStr.split('-');
            const year = parseInt(dateParts[0], 10);
            const month = parseInt(dateParts[1], 10);
            const day = parseInt(dateParts[2], 10);

            const Date = new Date(year, month, day);
            const dayIndex = persianDate.dayOfWeek();
            const daysOfWeek = ['شنبه', 'یکشنبه', 'دوشنبه', 'سه‌شنبه', 'چهارشنبه', 'پنجشنبه', 'جمعه'];

            return daysOfWeek[dayIndex];
        }

        function calculateTimeDifference(time1, time2) {
            // تبدیل دو ساعت به نمایش 24 ساعته
            const time1Parts = time1.split(':');
            const time2Parts = time2.split(':');
            const hours1 = parseInt(time1Parts[0], 10);
            const hours2 = parseInt(time2Parts[0], 10);
            const minutes1 = parseInt(time1Parts[1], 10);
            const minutes2 = parseInt(time2Parts[1], 10);

            // محاسبه اختلاف بین دو ساعت
            let hourDiff = hours2 - hours1;
            let minuteDiff = minutes2 - minutes1;

            // مدیریت اختلاف منفی
            if (hourDiff < 0) {
                hourDiff = 24 + hourDiff;
            }
            if (minuteDiff < 0) {
                minuteDiff = 60 + minuteDiff;
                hourDiff--; // کاهش یک ساعت
            }

            // تبدیل نتیجه به رشته
            const diffString = `${hourDiff.toString().padStart(2, '0')}:${minuteDiff
    .toString()
    .padStart(2, '0')}`;

            return diffString;
        }
    </script>
</body>

</html>