$(document).ready(function () {

})
var myConfig = {
    "graphset": [{
        "type": "bar",
        "background-color": "white",
        "title": {
            "text": "نمودار خطی ",
            "font-color": "#7E7E7E",
            "backgroundColor": "none",
            "font-size": "22px",
            "alpha": 1,
            "adjust-layout": true,
        },
        "plotarea": {
            "margin": "dynamic"
        },
        "legend": {
            "layout": "x3",
            "overflow": "page",
            "alpha": 0.05,
            "shadow": false,
            "align": "center",
            "adjust-layout": true,
            "marker": {
                "type": "circle",
                "border-color": "none",
                "size": "10px"
            },
            "border-width": 0,
            "maxItems": 3,
            "toggle-action": "hide",
            "pageOn": {
                "backgroundColor": "#000",
                "size": "10px",
                "alpha": 0.65
            },
            "pageOff": {
                "backgroundColor": "#7E7E7E",
                "size": "10px",
                "alpha": 0.65
            },
            "pageStatus": {
                "color": "black"
            }
        },
        "plot": {
            "bars-space-left": 0.15,
            "bars-space-right": 0.15,
            "animation": {
                "effect": "ANIMATION_SLIDE_BOTTOM",
                "sequence": 0,
                "speed": 800,
                "delay": 800
            }
        },
        "scale-y": {
            "line-color": "#7E7E7E",
            "item": {
                "font-color": "#7e7e7e"
            },
            "values": "0:60:10",
            "guide": {
                "visible": true
            },
            "label": {
                "text": "افزایش تولید",
                "font-family": "arial",

                "bold": true,
                "font-size": "30px",
                "font-color": "#7E7E7E",
            },
        },
        "scaleX": {
            "values": [
                " فروردین ماه",
                "اردیبهشت ماه ",
                "خرداد ماه ",
            ],
            "placement": "default",
            "tick": {
                "size": 60,
                "placement": "cross"
            },
            "itemsOverlap": true,
            "item": {
                "offsetY": -55
            }
        },
        "scaleX2": {
            "values": ["2021", "2022"],
            "placement": "default",
            "tick": {
                "size": 25,
            },
            "item": {
                "offsetY": -15
            }
        },
        "tooltip": {
            "visible": false
        },
        "crosshair-x": {
            "line-width": "100%",
            "alpha": 0.18,
            "plot-label": {
                "header-text": "%kv سال"
            }
        },
        "series": [{
            "values": [
                37.47,
                52.59,
                45.65,
                50.52
            ],
            "alpha": 0.95,
            "borderRadiusTopLeft": 7,
            "background-color": "purple",
            "text": "سالن تولید",
        },
            {
                "values": [
                    2.02,
                    5.59,
                    2.5,
                    2.91
                ],
                "borderRadiusTopLeft": 7,
                "alpha": 0.95,
                "background-color": "orange",
                "text": "تحویل به کنترل"
            },
            {
                "values": [
                    13.4,
                    14.11,
                    14.89,
                    16.86
                ],
                "alpha": 0.95,
                "borderRadiusTopLeft": 7,
                "background-color": "teal",
                "text": "ثبت غلتک"
            },
            {
                "values": [
                    18.53,
                    24.52,
                    20.4,
                    23.38
                ],
                "borderRadiusTopLeft": 7,
                "alpha": 0.95,
                "background-color": "red",
                "text": "تغییر رنگ ماشین"
            },
            {
                "values": [
                    17.09,
                    25.59,
                    19.74,
                    19.34
                ],
                "borderRadiusTopLeft": 7,
                "alpha": 0.95,
                "background-color": "blue",
                "text": "تغییر پالت"
            },
            {
                "values": [
                    2.31,
                    2.36,
                    2.42,
                    2.52
                ],
                "borderRadiusTopLeft": 7,
                "alpha": 0.95,
                "background-color": "green",
                "text": "تغییر رنگ پالت "
            }
        ]
    }]
};
zingchart.render({
    id: 'chart_bar',
    data: myConfig,
    height: '100%',
    width: '100%'
});
var myConfig = {
    type: "gauge",
    globals: {
        fontSize: 25
    },
    plotarea: {
        marginTop: 80
    },
    plot: {
        size: '100%',
        valueBox: {
            placement: 'center',
            text: '%v', //default
            fontSize: 35,
            rules: [{
                rule: '%v >= 700',
                text: '%v<br>مصرف بالا'
            },
                {
                    rule: '%v < 700 && %v > 640',
                    text: '%v<br>مصرف خوب'
                },
                {
                    rule: '%v < 640 && %v > 580',
                    text: '%v<br> مصرف متوسط'
                },
                {
                    rule: '%v <  580',
                    text: '%v<br> مصرف کم'
                }
            ]
        }
    },
    tooltip: {
        borderRadius: 5
    },
    scaleR: {
        aperture: 180,
        minValue: 300,
        maxValue: 850,
        step: 50,
        center: {
            visible: false
        },
        tick: {
            visible: false
        },
        item: {
            offsetR: 0,
            rules: [{
                rule: '%i == 9',
                offsetX: 15
            }]
        },
        labels: ['300', '', '', '', '', '', '580', '640', '700', '750', '', '850'],
        ring: {
            size: 50,
            rules: [{
                rule: '%v <= 580',
                backgroundColor: '#E53935'
            },
                {
                    rule: '%v > 580 && %v < 640',
                    backgroundColor: '#EF5350'
                },
                {
                    rule: '%v >= 640 && %v < 700',
                    backgroundColor: '#FFA726'
                },
                {
                    rule: '%v >= 700',
                    backgroundColor: '#29B6F6'
                }
            ]
        }
    },
    refresh: {
        type: "feed",
        transport: "js",
        url: "feed()",
        interval: 1500,
        resetTimeout: 1000
    },
    series: [{
        values: [755], // starting value
        backgroundColor: 'black',
        indicator: [10, 10, 10, 10, 0.75],
        animation: {
            effect: 2,
            method: 1,
            sequence: 4,
            speed: 900
        },
    }]
};
zingchart.render({
    id: 'my_gauge',
    data: myConfig,
    height: 800,
    width: '100%',
});

let chartConfig = {
    type: 'radar',
    plot: {
        aspect: 'area',
        animation: {
            effect: 3,
            sequence: 1,
            speed: 700,
        },
    },
    scaleV: {
        visible: false,
    },
    scaleK: {
        values: '0:5:1',
        labels: ['تولید', 'رنگرزی', 'تحویل به کنترل', 'پرسنل', 'Reptiles', 'Horses'],
        guide: {
            alpha: 0.3,
            backgroundColor: '#c5c5c5 #718eb4',
            lineColor: '#607D8B',
            lineStyle: 'solid',
        },
        item: {
            backgroundColor: 'white',
            borderColor: '#aeaeae',
            borderRadius: '10px',
            borderWidth: '1px',
            fontColor: '#607D8B',
            padding: '5 10',
        },
        refLine: {
            lineColor: '#c10000',
        },
        tick: {
            lineColor: '#59869c',
            lineWidth: '2px',
            lineStyle: 'dotted',
            size: 20,
        },
    },
    series: [{
        values: [59, 39, 38, 19, 21, 35],
        text: 'farm',
    },
        {
            values: [20, 20, 54, 41, 41, 35],
            backgroundColor: '#689F38',
            lineColor: '#53a534',
        },
    ],
};

zingchart.render({
    id: 'my_radar',
    data: chartConfig,
    height: '100%',
    width: '100%',
});
$(function() {
  $("#demo").persianDatepicker({

        // month names
        months: ["فروردین", "اردیبهشت", "خرداد", "تیر", "مرداد", "شهریور", "مهر", "آبان", "آذر", "دی", "بهمن", "اسفند"],

        // week names
        dowTitle: ["شنبه", "یکشنبه", "دوشنبه", "سه شنبه", "چهارشنبه", "پنج شنبه", "جمعه"],

        // short week names
        shortDowTitle: ["ش", "ی", "د", "س", "چ", "پ", "ج"],

        // shows Gregorian date
        showGregorianDate: false,

        // persian numbers
        persianNumbers: true,
        /*
        YYYY  =>   year             : 1394  -  ...
        MM    =>   month            : 1     -  12
        DD    =>   day              : 1     -  30|31
        0M    =>   month with zero  : 01    -  12
        0D    =>   day  with zero   : 01    -  30|31
        hh    =>   hour             : 0     -  23
        mm    =>   minute           : 0     -  59
        ss    =>   second           : 0     -  59
        ms    =>   milisecond       : 0     -  3 digit random time of cpu like 359
        NM    =>   name of month    : اسفند-فروردین
        DW    =>   day of week      : 0     -  6
        ND    =>   name of day      : جمعه-شنبه
        */
        formatDate: "YYYY/MM/DD",

        // selected before
        selectedBefore: false,

        // '1394/11/12'
        selectedDate: null,

        // '1394/11/12'
        startDate: null,

        // '1395/5/5'
        endDate: null,

        // prev/next arrows
        prevArrow: '\u25c4',
        nextArrow: '\u25ba',

        // 'dark', 'latoja', 'lightorange', 'melon'
        theme: 'default',

        // always show
        alwaysShow: !1,

        // selectable years
        selectableYears: null,

        // selectable months
        selectableMonths: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],

        // in pixles
        cellWidth: 25,
        cellHeight: 20,
        fontSize: 13,

        // RTL mode
        isRTL: false,

        // close on blur
        closeOnBlur: true,

        // position of the calendar
        calendarPosition: {
            x: 0,
            y: 0,
        },

        // callback functions
        onShow: function () {
        },
        onHide: function () {
        },
        onSelect: function () {
        },
        onRender: function () {
        }

    });

    
});
AMIB.showPDate('pdate1');

function showTime() {
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "";

    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    var time = h + ":" + m + ":" + s + " " + session;
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    setTimeout(showTime, 1000);
}

showTime();


$(".menu-bar-icon").click(function () {
    if ($(".main-sidebar").addClass("show-menu")) {
        $(".layer").css("display", "block")
    }
})
$(".layer").click(function () {
    $(".layer").css("display", "none")
    $(".main-sidebar").removeClass("show-menu")
})
$("#btn-edit-roller").click(function () {
    $("#form-save-roller").css("display", "none")
    $("#form-edit-roller").css("display", "block")
})
$("#btn-save-roller").click(function () {
    $("#form-save-roller").css("display", "block")
    $("#form-edit-roller").css("display", "none")
})
/*
$("#btn-save-info").click(function () {
    debugger;
    var customer = $("#customer option:selected").val();
    var boom = $("#boom option:selected").val();
    var name_pallet = $("#paletname:text").val();
    var margin = $("#margin option:selected").val();
    var size = $("#size1:text").val()+"*"+ $("#size2:text").val();
    var code_pallet = $("#paletCode option:selected").val();
    var map = $("#map:text").val();
    var number = $("#numbercarpet:text").val();
    
      $.ajax({
                        url: 'sabteData.php',
                        type: 'POST',
                        data: {
                            // "b": bStop,
                            "mt": mt,
                            "stopCode": stopCode,
                            "dateVal": dateVal,
                            "machinName": machinName,
                            "shiftVal": shiftVal,
                            "dayVal": dayVal,
                            // "stopCode" :stopCode,
                            "stopMachinInsert": 1,
                            "discription":des
                        },
                        success: function(response) {
                            console.log(response);
                        }
                    });
                    
    $("#data").append(`<tr><td><var>${customer}</var></td><td><var>${size}</var></td><td><var>${map}</var></td><td><var>${name_pallet}</var></td><td><var>${boom}</var></td><td><var>${margin}</var></td><td><var>${number}</var></td><td><var>${code_pallet}</var></td></tr>`)
})*/
$(".btn-form").click(function () {
    $(".btn-form").removeClass("active");
    $(this).addClass("active");

})
$("#b-fr-1").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-1").css("display", "block")

})
$("#b-fr-2").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-2").css("display", "block")

})
$("#b-fr-3").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-3").css("display", "block")

})
$("#b-fr-4").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-4").css("display", "block")

})
$("#b-fr-5").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-5").css("display", "block")

})
$("#b-fr-6").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-6").css("display", "block")

})
$("#b-fr-7").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-7").css("display", "block")

})
$("#b-fr-8").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-8").css("display", "block")

})
$("#b-fr-9").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-9").css("display", "block")

})
$("#b-fr-10").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-10").css("display", "block")

})
$("#b-fr-11").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-11").css("display", "block")

})
$("#b-fr-12").click(function () {
    $(".form-report").css("display", "none")
    $("#fr-12").css("display", "block")

})
$("#b-fi-1").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-1").css("display", "block")
})
$("#b-fi-2").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-2").css("display", "block")
})
$("#b-fi-3").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-3").css("display", "block")
})
$("#b-fi-4").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-4").css("display", "block")
})
$("#b-fi-5").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-5").css("display", "block")
})
$("#b-fi-6").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-6").css("display", "block")
})
$("#b-fi-7").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-7").css("display", "block")
})
$("#b-fi-8").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-8").css("display", "block")
})
$("#b-fi-9").click(function () {
    $(".form-report").css("display", "none")
    $("#fi-9").css("display", "block")
})







