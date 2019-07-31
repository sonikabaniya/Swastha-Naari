@extends('layouts.app')

@section('content')

@extends('includes.left_navbar')

<div id = "main-wrapper">

    <div class="graph-container">
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
</div>

<script>
    var color = Chart.helpers.color;
    function createConfig(legendPosition, colorName) {
        return {
            type: 'line',
            data: {
                labels: {!! $peoples !!},
                datasets: [{
                    label: 'Weight',
                    data: {!! $datas !!},
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
                            labelString: 'People'
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