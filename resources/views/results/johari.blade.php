@extends('layouts.app')
<style type="text/css">
    g[class$='creditgroup'] {
        display:none !important;
    }
    /*.fusioncharts-datalabels{*/
    /*    display: none !important;*/
    /*}*/
    .triangle-up {
        width: 0;
        height: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
        border-bottom: 10px solid #6baa01;
        margin-top: 4px;
        margin-right: 3px;
    }
    .circle {
        height: 10px;
        width: 10px;
        margin-top: 5px;
        margin-right: 4px;
        background-color: #00aee4;
        border-radius: 50%;
    }
    .hexagon {
        position: relative;
        width: 10px;
        height: 5.77px;
        background-color: #aaa00f;
        margin-top: 5px;
        margin-right: 4px;
    }
    .hexagon:before,
    .hexagon:after {
        content: "";
        position: absolute;
        width: 0;
        border-left: 5px solid transparent;
        border-right: 5px solid transparent;
    }
    .hexagon:before {
        bottom: 100%;
        border-bottom: 2.89px solid #aaa00f;
    }
    .hexagon:after {
        top: 100%;
        width: 0;
        border-top: 2.89px solid #aaa00f;
    }
    .diamond {
        width: 10px;
        height: 10px;
        background: #ff0a2f;
        -webkit-transform: rotate(-45deg);
        -moz-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        -o-transform: rotate(-45deg);
        transform: rotate(-45deg);
        -webkit-transform-origin: 0 100%;
        -moz-transform-origin: 0 100%;
        -ms-transform-origin: 0 100%;
        -o-transform-origin: 0 100%;
        transform-origin: 0 100%;
        margin-top: 5px;margin-left: 4px;
    }
</style>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>
<script>
    FusionCharts.ready(function() {
        var conversionChart = new FusionCharts({
            type: 'scatter',
            renderAt: 'chart-container',
            width: '600',
            height: '300',
            dataFormat: 'json',
            dataSource: {
                "chart": {
                    "theme": "fusion",
                    "showYAxisValues": "0",
                    "showXAxisValues": "0",
                    "captionHorizontalPadding": "-70",
                    "captionalignment": "left",
                    "baseFontSize": "12",
                    "caption": "1. Ability to focus on what matters and communicate it to others",
                    "subcaption": "",
                    "xAxisMinValue": "0",
                    "xAxisMaxValue": "100",
                    "yAxisMinValue": "0",
                    "yAxisMaxValue": "30000",
                    "plotFillAlpha": "70",
                    "plotFillHoverColor": "#6baa01",
                    "showPlotBorder": "0",
                    "xAxisName": "How Others Rate You",
                    "yAxisName": "How You Rate Yourself",
                    "numDivlines": "2",
                    "showValues": "1",
                    "showTrendlineLabels": "0",
                    "plotTooltext": "",
                    //Drawing quadrants on chart
                    "drawQuadrant": "1",
                    "quadrantLabelTL": "Blind Spot",
                    "quadrantLabelTR": "Visible Strength",
                    "quadrantLabelBL": "Acknowledge Soft Spot - Low",
                    "quadrantLabelBR": "Unrealized Strength - High",
                    //Setting x quadrant value to 54
                    "quadrantXVal": "50",
                    //Setting y quadrant value to 12000
                    "quadrantYVal": "15000",
                    "quadrantLineAlpha": "50",
                    "quadrantLineThickness": "2",
                    "showcanvasborder": "0",
                    "valueFontSize": "12"
                },
                "categories": [{
                    "category": [{
                        "label": "0",
                        "x": "0"
                    }, {
                        "label": "$20",
                        "x": "20",
                        "showverticalline": "1"
                    }, {
                        "label": "$40",
                        "x": "40",
                        "showverticalline": "1"
                    }, {
                        "label": "$60",
                        "x": "60",
                        "showverticalline": "1"
                    }, {
                        "label": "$80",
                        "x": "80",
                        "showverticalline": "1"
                    }, {
                        "label": "$100",
                        "x": "100",
                        "showverticalline": "1"
                    }]
                }],
                "dataset": [
                    {
                        "seriesname": "Manager",
                        "drawline": "0",
                        "color": "#aaa00f",
                        "anchorsides": "6",
                        "anchorradius": "6",
                        "anchorbgcolor": "#aaa00f",
                        "anchorbordercolor": "#aaa00f",
                        "data": [{
                            "x": "90",
                            "y": "4300",
                            "z": "24",
                            "name": "manager"
                        }]
                    },{
                        "seriesname": "Direct Report",
                        "drawline": "0",
                        "color": "#ff0a2f",
                        "anchorsides": "4",
                        "anchorradius": "6",
                        "anchorbgcolor": "#ff0a2f",
                        "anchorbordercolor": "#ff0a2f",
                        "data": [{
                            "x": "70",
                            "y": "4000",
                            "z": "24",
                            "name": "direct-report"
                        }]
                    },{
                        "seriesname": "Peer",
                        "drawline": "0",
                        "color": "#6baa01",
                        "anchorsides": "3",
                        "anchorradius": "6",
                        "anchorbgcolor": "#6baa01",
                        "anchorbordercolor": "#6baa01",
                        "data": [{
                            "x": "80",
                            "y": "5000",
                            "z": "24",
                            "name": "peer"
                        }]
                    },
                    {
                    "seriesname": "Average",
                    "color": "#00aee4",
                    "drawline": "0",
                    "anchorsides": "1",
                    "anchorradius": "6",
                    "anchorbgcolor": "#00aee4",
                    "anchorbordercolor": "#00aee4",
                    "data": [{
                        "x": "80",
                        "y": "15000",
                        "z": "24",
                        "name": "average"
                    }]
                }],
                "trendlines": [{
                    "line": [{
                        "startValue": "0",
                        "endValue": "15000",
                        "isTrendZone": "1",
                        "color": "#aaaaaa",
                        "alpha": "14"
                    }, {
                        "startValue": "15000",
                        "endValue": "30000",
                        "isTrendZone": "1",
                        "color": "#aaaaaa",
                        "alpha": "7"
                    }]
                }]
            }
        });
        conversionChart.render();
    });
</script>
@section('content')
    <h3 class="page-title">@lang('quickadmin.results.title')</h3>
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.view-result')
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div style="float:left;" id="chart-container">Johari window chart will render here</div>
                    <div style="color:darkblue;float:left;height: 300px;width: 300px;margin-top: 20px;">
                        <p style="font-family: 'Source Sans Pro'; font-size: 18px; font-weight: bold">Focus</p>
                        <p>Ability to focus on what matters and communicate it to others</p>
                        <div style="border: 1px solid lightblue;padding:10px;-webkit-border-radius: 5px !important;-moz-border-radius: 5px !important;;border-radius: 5px !important;;width: 70%">
                            <div>
                                <div style="float:left;">&nbsp;&nbsp;&nbsp;&nbsp;</div>
                                <div style="float:left;font-weight: bold">Self : </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div>
                                <div style="float:left;" class="triangle-up"></div>
                                <div style="float:left;font-weight: bold">Peer : </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div>
                                <div style="float:left;" class="hexagon"></div>
                                <div style="float:left;font-weight: bold">Manager : </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div>
                                <div style="float:left;" class="diamond"></div>
                                <div style="float:left;font-weight: bold">Direct Report : </div>
                                <div style="clear: both;"></div>
                            </div>
                            <div>
                                <div style="float:left;" class="circle"></div>
                                <div style="float:left;font-weight: bold">Average : </div>
                                <div style="clear: both;"></div>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both;"></div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-default">Take another quiz</a>
            <a href="{{ route('results.index') }}" class="btn btn-default">See all my results</a>
        </div>
    </div>
@stop
