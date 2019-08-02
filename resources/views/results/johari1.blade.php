@extends('layouts.app')
<style type="text/css">
    g[class$='creditgroup'] {
        display:none !important;
    }
    .raphael-group-110-dataset-axis{
        display: none !important;
    }
    .raphael-group-129-dataset-axis{
        display: none !important;
    }
    .fusioncharts-datalabels{
        display: none !important;
    }
    .raphael-group-144-item{
        display: none !important;
    }
    .raphael-group-94-quadrantTLGroup{
        font-size: 12px;
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
                    "captionalignment": "left",
                    "baseFontSize": "12",
                    "caption": "5. Encourage Excellence",
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
                    <div id="chart-container">Johari window chart will render here</div>
                    {{--                    <div style="float:left;height: 300px;">--}}
                    {{--                        <p>Self: </p>--}}
                    {{--                        <p>Manager: </p>--}}
                    {{--                        <p>Direct Report: </p>--}}
                    {{--                        <p>Peer: </p>--}}
                    {{--                        <p>Average: </p>--}}
                    {{--                    </div>--}}
                    {{--                    <div style="clear:both;"></div>--}}
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('tests.index') }}" class="btn btn-default">Take another quiz</a>
            <a href="{{ route('results.index') }}" class="btn btn-default">See all my results</a>
        </div>
    </div>
@stop
