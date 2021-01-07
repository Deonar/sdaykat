//======================== daterangepicker profile
$('.daterange-input').daterangepicker();

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
    $('.diagram__info__single').eq(i).find('.diagram__info__single--title span').css('background', colors[i]);
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