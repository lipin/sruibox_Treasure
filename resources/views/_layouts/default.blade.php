<!DOCTYPE html>
<html lang="en" class="app js no-touch no-android chrome no-firefox no-iemobile no-ie no-ie10 no-ie11 no-ios">
<head>
    <meta charset="utf-8" />
    <title>后台管理 |一元兑奖</title>
    <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
    <![endif]-->
</head>
<body class="">
<section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
        <div class="navbar-header aside-md">
            <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
                <i class="fa fa-bars"></i>
            </a>
            <a href="#" class="navbar-brand" data-toggle="fullscreen">一元兑奖后台管理</a>
            <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
                <i class="fa fa-cog"></i>
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right hidden-xs nav-user">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!--            <span class="thumb-sm avatar pull-left">-->
                    <!--              <img src="images/avatar.jpg">-->
                    <!--            </span>-->
                    <?php echo 111; ?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <!--                    <span class="arrow top"></span>-->
                    <!--                    <li>-->
                    <!--                        <a href="#">Settings</a>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <a href="profile.html">Profile</a>-->
                    <!--                    </li>-->
                    <!--                    <li>-->
                    <!--                        <a href="docs.html">Help</a>-->
                    <!--                    </li>-->
                    <!--                    <li class="divider"></li>-->
                    <li>
                        <a href="site/logout">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch">
            <aside class="bg-dark lter aside-md hidden-print" id="nav">
                <section class="vbox">
                    <section class="w-f scrollable">

                        <!-- nav -->
                        <nav class="nav-primary hidden-xs">
                            <ul class="nav">
                                <li>
                                    <a href="/">
                                        <i class="fa fa-dashboard icon">
                                            <b class="bg-danger"></b>
                                        </i>
                                        <span>管理首页</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <i class="fa fa-columns icon">
                                            <b class="bg-primary"></b>
                                        </i>
                                        <span class="pull-right">
                                          <i class="fa fa-angle-down text"></i>
                                          <i class="fa fa-angle-up text-active"></i>
                                        </span>
                                        <span>基础信息</span>
                                    </a>
                                    <ul class="nav lt">
                                        <li>
                                            <a href="/goods/index.html">
                                                <b class="badge  pull-right">8</b>
                                                <i class="fa fa-angle-right"></i>
                                                商品管理
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#table">
                                                <i class="fa fa-angle-down text"></i>
                                                <i class="fa fa-angle-up text-active"></i>
                                                <span>Table</span>
                                            </a>
                                            <ul class="nav bg">
                                                <li>
                                                    <a href="table-static.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        <span>Table static</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="table-datatable.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        <span>Datatable</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="table-datagrid.html">
                                                        <i class="fa fa-angle-right"></i>
                                                        <span>Datagrid</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </nav>
                        <!-- / nav -->
                    </section>

                </section>
            </aside>
            <!-- /.aside -->
            <section id="content">
                <section class="vbox">
                    <section class="scrollable padder">
                        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
                            <li><a href="/"><i class="fa fa-home"></i> 控制面板</a></li>
                            <li>
                                <a href="">111</a>
                            </li>
                        </ul>
                        @yield('content')
                    </section>
                </section>
                <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
            </section>
            <aside class="bg-light lter b-l aside-md hide" id="notes">
                <div class="wrapper">Notification</div>
            </aside>
        </section>
    </section>
</section>
<script src="/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.js"></script>
<!-- App -->
<script src="/js/app.js"></script>
<script src="/js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="/js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
<script src="/js/charts/sparkline/jquery.sparkline.min.js"></script>
<script src="/js/charts/flot/jquery.flot.min.js"></script>
<script src="/js/charts/flot/jquery.flot.tooltip.min.js"></script>
<script src="/js/charts/flot/jquery.flot.resize.js"></script>
<script src="/js/charts/flot/jquery.flot.grow.js"></script>
<script src="/js/charts/flot/demo.js"></script>
<script src="/js/calendar/bootstrap_calendar.js"></script>
<script src="/js/sortable/jquery.sortable.js"></script>
<script src="/js/app.plugin.js"></script>
<div id="flotTip" style="display: none; position: absolute;">
</div>
</body>
</html>