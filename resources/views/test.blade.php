@extends('base')

@section('headContent')

    <script src="https://www.chartjs.org/dist/2.8.0/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    
	<style>
		canvas {
			-moz-user-select: none;
			-webkit-user-select: none;
			-ms-user-select: none;
		}
		.chart-container {
			width: 500px;
			margin-left: 40px;
			margin-right: 40px;
		}
		.container {
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			justify-content: center;
		}
	</style>
@endsection

@section('content')

<div class="container">
    <div class="chart-container">
        <canvas id="chart-legend-top"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="chart-legend-right"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="chart-legend-bottom"></canvas>
    </div>
    <div class="chart-container">
        <canvas id="chart-legend-left"></canvas>
    </div>
</div>
<script>
    var color = Chart.helpers.color;
    function createConfig(legendPosition, colorName) {
        return {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Menopause',
                    data: {{ $datas }},
                    backgroundColor: color(window.chartColors[colorName]).alpha(0.5).rgbString(),
                    borderColor: window.chartColors[colorName],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                legend: {
                    position: legendPosition,
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Month'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Value'
                        }
                    }]
                },
                title: {
                    display: true,
                    text: 'Legend Position: ' + legendPosition
                }
            }
        };
    }

    window.onload = function() {
        [{
            id: 'chart-legend-top',
            legendPosition: 'top',
            color: 'red'
        }, {
            id: 'chart-legend-right',
            legendPosition: 'right',
            color: 'blue'
        }, {
            id: 'chart-legend-bottom',
            legendPosition: 'bottom',
            color: 'green'
        }, {
            id: 'chart-legend-left',
            legendPosition: 'left',
            color: 'yellow'
        }].forEach(function(details) {
            var ctx = document.getElementById(details.id).getContext('2d');
            var config = createConfig(details.legendPosition, details.color);
            new Chart(ctx, config);
        });
    };
</script>
@endsection