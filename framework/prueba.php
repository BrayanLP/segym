<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>

<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>

<div style="width: 600px; height: 400px; margin: 0 auto">
    <div id="container-speed" style="width: 300px; height: 200px; float: left"></div>
    <div id="peso" style="width: 300px; height: 200px; float: left"></div>
    
</div>

<script type="text/javascript">
	$(function () {

    var gaugeOptions = {

        chart: {
            type: 'solidgauge'
        },

        title: null,

        pane: {
            center: ['50%', '85%'],
            size: '140%',
            startAngle: -90,
            endAngle: 90,
            background: {
                backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#ecebeb',
                innerRadius: '60%',
                outerRadius: '100%',
                shape: 'arc'
            }
        },

        tooltip: {
            enabled: false
        },

        // the value axis
        yAxis: {
            stops: [
                [0.4, 'green'], // green
                [0.7, 'orange'], // yellow
                [0.8, 'red'] // red
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickAmount: 2,
            title: {
                y: -70
            },
            labels: {
                y: 16
            }
        },

        plotOptions: {
            solidgauge: {
                dataLabels: {
                    y: 5,
                    borderWidth: 0,
                    useHTML: true
                }
            }
        }
    };

    // The speed gauge
    var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 100,
            title: {
                text: 'TU IMC'
            }
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Speed',
            data: [70],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                       '<span style="font-size:12px;color:silver">IMC</span></div>'
            },
            tooltip: {
                valueSuffix: 'IMC'
            }
        }]

    }));

    var chartSpeed = Highcharts.chart('peso', Highcharts.merge(gaugeOptions, {
        yAxis: {
            min: 0,
            max: 180,
            title: {
                text: 'TU PESO'
            }
        },
        credits: {
            enabled: false
        },
        series: [{
            name: 'Speed',
            data: [40],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                       '<span style="font-size:12px;color:silver">KG</span></div>'
            },
            tooltip: {
                valueSuffix: 'KG'
            }
        }]

    }));
  
        var point,
            newVal,
            inc;

        if (chartSpeed) {
            point = chartSpeed.series[0].points[0];
            newVal = point.y;
 
            point.update(newVal);
        }


});

</script>
</body>
</html>