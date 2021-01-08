//======================== daterangepicker profile
$('.daterange-input').daterangepicker({
    "locale": {
        "format": "MM/DD/YYYY",
        "separator": " - ",
        "applyLabel": "Выбрать",
        "cancelLabel": "Отмена",
        "fromLabel": "От",
        "toLabel": "До",
        "customRangeLabel": "Своя дата",
        "daysOfWeek": [
            "Вс",
            "Пт",
            "Вт",
            "Ср",
            "Чт",
            "Пт",
            "Сб"
        ],
        "monthNames": [
            "Январь",
            "Февраль",
            "Март",
            "Апрель",
            "Май",
            "Июнь",
            "Июль",
            "Август",
            "Сентябрь",
            "Октябрь",
            "Ноябрь",
            "Декабрь"
        ],
        "firstDay": 1
    }
});


//entry-account
$('#entry-account').on('click', function (e) {
    if ($(this).closest('.main-form').find(".main-form__phone").val().length >= 18) {
        $('#authorization-confirm').show();
        $('#entry-cabinet__entry').hide();
    } else {
        $(this).closest('.main-form').find(".main-form__phone").closest(".main-form__label_phone").addClass("_error");
    }
});

$('#change-number').on('click', function (e) {
    $('#entry-cabinet__entry').show();
    $('#authorization-confirm').hide();
});

// TAIMER
function startTimer() {
    var _Seconds = $('.seconds').text(),
        int;
    int = setInterval(function () {
        // запускаем интервал
        if (_Seconds > 0) {
            _Seconds--; // вычитаем 1
            $('.seconds').text(_Seconds); // выводим получившееся значение в блок
        } else {
            clearInterval(int); // очищаем интервал, чтобы он не продолжал работу при _Seconds = 0
            $('#send-sms').show(300);
            $('#authorization-confirm__sms').hide(300);
            $('#authorization-confirm__sms-timer').hide(300);
            $('.seconds').text('15');
        }
    }, 1000);
}
$('#entry-account').on('click', function (e) {
    startTimer();
});
$('#send-sms').on('click', function (e) {
    $(this).hide();
    $('#authorization-confirm__sms').show(300);
    $('#authorization-confirm__sms-timer').show(300);
    startTimer();
});

// ввод кода из СМС
let in1 = document.getElementById('otc-1'),
    ins = document.querySelectorAll('input[name="code_number"]');
if(in1){
    ins.forEach(function (input) {
        /**
         * Control on keyup to catch what the user intent to do.
         * I could have check for numeric key only here, but I didn't.
         */
        input.addEventListener('keyup', function (e) {
            if (e.target.value.length > 1) e.target.value = e.target.value[0];
            // Break if Shift, Tab, CMD, Option, Control.
            if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
                return;
            }
    
            // On Backspace or left arrow, go to the previous field.
            if ((e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT") {
                this.previousElementSibling.select();
            } else if (e.keyCode !== 8 && this.nextElementSibling) {
                this.nextElementSibling.select();
            }
        });
    
        /**
         * Better control on Focus
         * - don't allow focus on other field if the first one is empty
         * - don't allow focus on field if the previous one if empty (debatable)
         * - get the focus on the first empty field
         */
        input.addEventListener('focus', function (e) {
            // If the focus element is the first one, do nothing
            if (this === in1) return;
    
            // If value of input 1 is empty, focus it.
            if (in1.value == '') {
                in1.focus();
            }
    
            // If value of a previous input is empty, focus it.
            // To remove if you don't wanna force user respecting the fields order.
            if (this.previousElementSibling.value == '') {
                this.previousElementSibling.focus();
            }
        });
    });
    
    /**
     * Handle copy/paste of a big number.
     * It catches the value pasted on the first field and spread it into the inputs.
     */
    in1.addEventListener('input', function (e) {
        let data = e.data || this.value; // Chrome doesn't get the e.data, it's always empty, fallback to value then.
        if (!data) return; // Shouldn't happen, just in case.
        if (data.length === 1) return; // Here is a normal behavior, not a paste action.
    
        for (i = 0; i < data.length; i++) {
            ins[i].value = data[i];
        }
    });
}

$('#authorization-confirm').on('submit', function(e){
    e.preventDefault();
    window.location.href = "/profile.php";
})

//======================== Analitic
var options = {
    series: [{
        name: "Desktops",
        data: [10, 50, 35, 5, 49, 90, 19]
    }],
    chart: {
        height: 437,
        type: 'area',
        zoom: {
            enabled: false
        },
        events: {
            mouseMove: function (event, chartContext, config) {
                var tooltip = chartContext.el.querySelector('.apexcharts-tooltip');
                var pointsArray = config.globals.pointsArray;
                var seriesIndex = config.seriesIndex;
                var dataPointIndex = config.dataPointIndex === -1 ? 0 : config.dataPointIndex;
                if (seriesIndex !== -1) {
                    var position = pointsArray[seriesIndex][dataPointIndex];

                    tooltip.style.top = position[1] + 'px';
                    tooltip.style.left = (position[0] + 30) + 'px';
                }
            },
            click: function (event, chartContext, config) {
                var tooltip = chartContext.el.querySelector('.apexcharts-tooltip');
                var pointsArray = config.globals.pointsArray;
                var seriesIndex = config.seriesIndex;
                var dataPointIndex = config.dataPointIndex === -1 ? 0 : config.dataPointIndex;
                if (seriesIndex !== -1) {
                    var position = pointsArray[seriesIndex][dataPointIndex];

                    tooltip.style.top = position[1] + 'px';
                    tooltip.style.left = (position[0] + 30) + 'px';
                }
            }
        }
    },
    fill: {
        type: 'solid',
        opacity: [0.07],
    },
    dataLabels: {
        enabled: false
    },
    tooltip: {
        custom: function ({
            series,
            seriesIndex,
            dataPointIndex,
            w
        }) {
            return '<div class="arrow_box">' +
                '<span>' + series[seriesIndex][dataPointIndex] + '</span>' +
                '</div>'
        }
    },
    stroke: {
        curve: 'smooth',
        width: [1, 2]
    },
    colors: ["#043598", "#043598"],
    xaxis: {
        categories: ['10.02', '11.02', '12.02', '13.02', '14.02', '15.02', '16.02'],
        labels: {
            minHeight: 60,
            maxHeight: 60,
            offsetX: 0,
            offsetY: 10,
            rotate: 0,

        },
        tooltip: {
            enabled: false
        },
        crosshairs: {
            show: false
        },
    },
    markers: {
        strokeColors: '#043598',
        strokeWidth: 5,
        colors: "#FFF",
        radius: 1,
    },
    yaxis: {
        labels: {
            minWidth: 60,
            maxWidth: 60,
            offsetX: -30,
            offsetY: 0,
            rotate: 0,
        }
    },
    grid: {
        strokeDashArray: 10,
    }
};

var options1 = {
    series: [{
        name: "Desktops",
        data: [10000, 5000, 35000, 500, 4900, 9000, 19000]
    }],
    chart: {
        height: 437,
        type: 'area',
        zoom: {
            enabled: false
        },
        events: {
            mouseMove: function (event, chartContext, config) {
                var tooltip = chartContext.el.querySelector('.apexcharts-tooltip');
                var pointsArray = config.globals.pointsArray;
                var seriesIndex = config.seriesIndex;
                var dataPointIndex = config.dataPointIndex === -1 ? 0 : config.dataPointIndex;
                if (seriesIndex !== -1) {
                    var position = pointsArray[seriesIndex][dataPointIndex];

                    tooltip.style.top = position[1] + 'px';
                    tooltip.style.left = (position[0] + 10) + 'px';
                }
            },
            click: function (event, chartContext, config) {
                var tooltip = chartContext.el.querySelector('.apexcharts-tooltip');
                var pointsArray = config.globals.pointsArray;
                var seriesIndex = config.seriesIndex;
                var dataPointIndex = config.dataPointIndex === -1 ? 0 : config.dataPointIndex;
                if (seriesIndex !== -1) {
                    var position = pointsArray[seriesIndex][dataPointIndex];

                    tooltip.style.top = position[1] + 'px';
                    tooltip.style.left = (position[0] + 10) + 'px';
                }
            }
        }
    },
    fill: {
        type: 'solid',
        opacity: [0.07],
    },
    dataLabels: {
        enabled: false
    },
    tooltip: {
        custom: function ({
            series,
            seriesIndex,
            dataPointIndex,
            w
        }) {
            return '<div class="arrow_box">' +
                '<span>' + series[seriesIndex][dataPointIndex] + ' ₽</span>' +
                '</div>'
        }
    },
    stroke: {
        curve: 'smooth',
        width: [1, 2]
    },
    colors: ["#043598", "#043598"],
    xaxis: {
        categories: ['10.02', '11.02', '12.02', '13.02', '14.02', '15.02', '16.02'],
        labels: {
            minHeight: 60,
            maxHeight: 60,
            offsetX: 0,
            offsetY: 10,
            rotate: 0,

        },
        tooltip: {
            enabled: false
        },
        crosshairs: {
            show: false
        },
    },
    markers: {
        strokeColors: '#043598',
        strokeWidth: 5,
        colors: "#FFF",
        radius: 1,
    },
    yaxis: {
        labels: {
            minWidth: 60,
            maxWidth: 60,
            offsetX: -20,
            offsetY: 0,
            rotate: 0,
        }
    },
    grid: {
        strokeDashArray: 10,
    }
};

var colors = ['#31BCFE', '#022270', '#043598']

var options2 = {
    chart: {
        type: 'donut',
        width: 230,
    },

    colors: colors,
    legend: {
        show: false,
    },
    plotOptions: {
        pie: {
            donut: {
                size: '25%',
            },
            expandOnClick: false,
        },
    },
    tooltip: {
        enabled: false
    },
    stroke: {
        width: 0
    },
    dataLabels: {
        style: {
            fontSize: '14px',
            fontFamily: "Stapel",
            fontWeight: "500",
            colors: ["#FFF"]
        },
        formatter: function (val) {
            return parseInt(val) + "%"
        },
    },
    series: [15, 27, 58],
};

for (var i = 0; i < colors.length; i++) {
    $('.diagram-info__item').eq(i).find('.diagram-info__title span').css('background', colors[i]);
}

var chart1 = document.querySelector("#analitic-delivery")
if (chart1) {
    var chart1 = new ApexCharts(chart1, options);
    chart1.render();
}

var chart2 = document.querySelector("#analitic-pay")
if (chart2) {
    var chart2 = new ApexCharts(chart2, options1);
    chart2.render();
}

var chart3 = document.querySelector("#analitic-materials")
if (chart3) {
    var chart3 = new ApexCharts(chart3, options2);
    chart3.render();
}