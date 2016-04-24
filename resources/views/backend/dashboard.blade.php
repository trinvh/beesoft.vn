@extends('backend.layout')

@section('content')
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Dashboard</h2>
            <p>Bootstrap3 supported admin template</p>
        </div>
        <div class="col-md-6 col-sm-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Layout <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Dashboard</li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>Today's Stats</h3>
                <p>Total earnings and items sales today</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li>
                        <label>Earning:</label> $400 USD</li>
                    <li>
                        <label>Items Sold:</label> 20 Items </li>
                    <li>
                        <label>Last Hour Sales:</label> $34 USD </li>
                </ul>
            </div>
            <div class="w_bg_teal stats-chart-container">
                <div id="widget-stats-chart" class="stats-chart">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget-wrap stats-widget">
            <div class="widget-header">
                <h3>Monthly Stats</h3>
                <p>Monthly earnings and items sales</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li>
                        <label>Earning:</label> $5,000 USD</li>
                    <li>
                        <label>Items Sold:</label> 400 Items </li>
                    <li>
                        <label>Last Month Earning:</label> $2,434 USD </li>
                </ul>
            </div>
            <div class="w_bg_deep_purple stats-chart-container">
                <div id="widget-monthly-chart" class="stats-chart"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget-wrap stats-widget">
            <div class="widget-header">
                <h3>Alltime Stats</h3>
                <p>All earnings and items sales</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li>
                        <label>Earning:</label> $98,300 USD</li>
                    <li>
                        <label>Items Sold:</label> 8,296 Items </li>
                    <li>
                        <label>Last Year Earning:</label> $78,034 USD </li>
                </ul>
            </div>
            <div class="w_bg_cyan stats-chart-container">
                <div id="widget-alltime-chart" class="stats-chart"></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">
            <div class="widget-header block-header margin-bottom-0 clearfix">
                <div class="pull-left">
                    <h3>Visitors Stats</h3>
                    <p>Monthly visitors &amp; sell statistics</p>
                </div>
                <div class="pull-right w-action">
                    <ul class="widget-action-bar">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-more"></i></a>
                            <ul class="dropdown-menu">
                                <li class="widget-reload"><a href="#"><i class="zmdi zmdi-refresh-alt"></i></a></li>
                                <li class="widget-toggle"><a href="#"><i class="zmdi zmdi-chevron-down"></i></a></li>
                                <li class="widget-fullscreen"><a href="#"><i class="zmdi zmdi-fullscreen"></i></a></li>
                                <li class="widget-exit"><a href="#"><i class="zmdi zmdi-power"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="widget-container margin-top-0">
                <div class="widget-content">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="analytics-container">
                                <div id="main-chart-legend"></div>
                                <div id="main-chart">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="stats-meta">
                                <h4>Traffic Source</h4>
                                <ul>
                                    <li class="clearfix"><a href="#" class="pull-left">Google</a> <span class="t-source-counter pull-right">13,489</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">Yahoo</a> <span class="t-source-counter pull-right">6,866</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">Envato</a> <span class="t-source-counter pull-right">23,908</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">Themeforest</a> <span class="t-source-counter pull-right">12,767</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">Codecanyon</a> <span class="t-source-counter pull-right">8,465</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">One Page Love</a> <span class="t-source-counter pull-right">5,323</span></li>
                                </ul>
                                <h4>Top Visited Items</h4>
                                <ul>
                                    <li class="clearfix"><a href="#" class="pull-left">MatMix</a> <span class="t-source-counter pull-right">14,846</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">Falgun</a> <span class="t-source-counter pull-right">12,080</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">Bingo</a> <span class="t-source-counter pull-right">10,989</span></li>
                                    <li class="clearfix"><a href="#" class="pull-left">Srabon</a> <span class="t-source-counter pull-right">3,947</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-chart-info">
                        <ul>
                            <li>
                                <a href="#">
                                    <span class="chart-info-icon"><i class="zmdi zmdi-eye"></i></span>
                                    <span class="main-chart-stat-label">109,273</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="chart-info-icon"><i class="zmdi zmdi-chart"></i></span>
                                    <span class="main-chart-stat-label">48,979</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="chart-info-icon"><i class="zmdi zmdi-smartphone-iphone"></i></span>
                                    <span class="main-chart-stat-label">20,998</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="chart-info-icon"><i class="zmdi zmdi-laptop-mac"></i></span>
                                    <span class="main-chart-stat-label">28,764</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="chart-info-icon"><i class="zmdi zmdi-accounts"></i></span>
                                    <span class="main-chart-stat-label">2,090</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop