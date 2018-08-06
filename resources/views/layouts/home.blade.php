<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <!--IE Compatibility modes-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Mobile first-->
    <!--   <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>Dashboard</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/lib/bootstrap/css/bootstrap.css">

    <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Metis core stylesheet -->
    <link rel="stylesheet" href="/css/main.css">

    <!-- metisMenu stylesheet -->
    <link rel="stylesheet" href="/lib/metismenu/metisMenu.css">
    <!-- onoffcanvas stylesheet -->
    <link rel="stylesheet" href="/lib/onoffcanvas/onoffcanvas.css">
    <link rel="stylesheet" href="/lib/animate.css/animate.css">
    
    <link rel="stylesheet" type="text/css" href="/css/mystyle.css">
    <link rel="stylesheet" type="text/css" href="/css/fullcalendar.css">
    
    <script>
        less = {
        env: "development",
        relativeUrls: false,
        rootpath: "/assets/"
        };
    </script>
    <link rel="stylesheet" href="/css/style-switcher.css">
    <link rel="stylesheet/less" type="text/css" href="/less/theme.less">

    <link rel="stylesheet"  href="/css/bootstrap-datetimepicker.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>
</head>
<body class="  ">
    <div class="bg-dark dk" id="wrap">
        <div id="top">
            <!-- .navbar -->
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container-fluid">
                     <!-- Brand and toggle get grouped for better mobile display -->
                    <header class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="{{route('dashboard')}}" class="navbar-brand"><img src="assets/img/Capture.JPG" width="121" height="50" alt=""></a>
                    </header>
                    <div class="topnav">
                        <div class="btn-group">
                            <a data-placement="bottom" data-original-title="Fullscreen" data-toggle="tooltip"
                               class="btn btn-default btn-sm" id="toggleFullScreen">
                                <i class="glyphicon glyphicon-fullscreen"></i>
                            </a>
                        </div>
                        <div class="btn-group">
                            <a data-toggle="tooltip" data-original-title="Logout" data-placement="bottom"
                                class="btn btn-metis-1 btn-sm"href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{route('dashboard')}}">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <header class="head">    
                <div class="main-bar">
                    <h3> <center>Lebak Futsal</center></h3>
                </div>
                <!-- /.main-bar -->
            </header>
        </div>
        <div id="left">
            <div class="media user-media bg-dark dker">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                                       
                </div>
            </div>
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="nav-header">Menu</li>
                <li class="nav-divider"></li>
                <li class="">
                    <a href="{{route('dashboard')}}">
                        <i class="fa fa-dashboard"></i><span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>
                <li class="">
               <a href="javascript:;">
                                      <i class="fa fa-pencil"></i>
                                      <span class="link-title">
                                    Booking
                              </span>
                                      <span class="fa arrow"></span>
                                    </a>
                                    <ul class="collapse">
                                      <li>
                                        <a href="{{route('booking')}}">
                                          <i class="fa fa-angle-right"></i>&nbsp; Booking </a>
                                      </li>
                                      <li>
                                        <a href="{{route('carabooking')}}">
                                          <i class="fa fa-angle-right"></i>&nbsp; Cara Booking </a>
                                      </li>
                                  </ul>
                              </li>
                <li class="">
                    <a href="{{route('laporan')}}">
                        <i class="fa fa fa-bar-chart-o"></i><span class="link-title">&nbsp;Laporan</span>
                    </a>
                </li>
            </ul>

            <!-- /#menu -->
        </div>
        <div id="content">
                @yield('body')
        </div>
    </div>
    <footer class="Footer bg-dark dker" style="bottom :0;position: absolute;">
        <p>2018 &copy; Lebak Futsal</p>
    </footer>
</body>


         <script src="assets/lib/jquery/jquery.js"></script>

        <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        
        <script src="assets/lib/bootstrap/js/bootstrap.js"></script>
        <script src="/js/bootstrap-datetimepicker.js"></script>
        <script src="/js/fullcalendar.js"></script>
        <script src="/js/locale-all.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.18.4/js/jquery.tablesorter.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.resize.min.js"></script>

        <!--Bootstrap -->
      
        <!-- MetisMenu -->
        <script src="assets/lib/metismenu/metisMenu.js"></script>
        <!-- onoffcanvas -->
        <script src="assets/lib/onoffcanvas/onoffcanvas.js"></script>
        <!-- Screenfull -->
        <script src="assets/lib/screenfull/screenfull.js"></script>
        <!-- Metis core scripts -->
        <script src="assets/js/core.js"></script>
        <!-- Metis demo scripts -->
        <script src="/js/app.js"></script>
<!-- 
        <script>
            $(function() {
            Metis.dashboard();
            });

        </script>
 -->
        <script src="assets/js/style-switcher.js"></script>

        @yield('js')
 </html>