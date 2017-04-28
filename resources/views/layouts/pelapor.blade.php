<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'SiMALIN') }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{url('/assets/admin/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/assets/admin/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/assets/admin/dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="{{url('/admin')}}" class="logo" style="background-color: #2a3b48">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini">MALIN</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><h3>SiMALIN</h3></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" style="background-color: #2a3b48">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{  url('/assets/img/user2.png') }}" class="user-image" alt="User Image">
                            <span class="hidden-xs">{{ ucwords(Auth()->user()->getNamaDepan()) }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header" style="background-color: #2a3b48">
                                <img src="{{  url('/assets/img/user2.png') }}" class="img-circle" alt="User Image">

                                <p>
                                    {{ ucwords(Auth()->user()->nama) }}

                                    <small>Terdaftar sejak {{ date("F", mktime(0, 0, 0, Auth()->user()->created_at->month, 1)) }} {{Auth()->user()->created_at->year}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->

                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a class="btn btn-default btn-flat" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <center>Keluar</center>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{  url('/assets/img/user2.png') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p><?php
                    $time = date("H");
                    $timezone = date("e");
                    $suasana = "";
                    if ($time < "12") {
                        $suasana = "Pagi";
                    } else
                        if ($time >= "12" && $time < "17") {
                            $suasana = "Siang";
                        } else
                            if ($time >= "17" && $time < "19") {
                                $suasana = "Sore";
                            } else
                                if ($time >= "19") {
                                    $suasana = "Malam";
                                }
                    ?>
                    <center>Selamat <?php echo $suasana ?>, {{ ucwords(Auth::user()->getNamaDepan()) }}!</center>

                    <p>

                        <script type="text/javascript">
                            function timedMsg()
                            {
                                var t=setInterval("change_time();",1000);
                            }
                            function change_time()
                            {
                                var d = new Date();
                                var curr_hour = d.getHours();
                                var curr_min = d.getMinutes();
                                var curr_sec = d.getSeconds();
                                if(curr_hour > 12)
                                    curr_hour = curr_hour - 12;
                                document.getElementById('Hour').innerHTML =curr_hour+':';
                                document.getElementById('Minut').innerHTML=curr_min+':';
                                document.getElementById('Second').innerHTML=curr_sec;
                            }
                            timedMsg();
                        </script>

                    <table>
                        <tr>
                            <td id="Hour" style="color:#ffffff;"></td>
                            <td id="Minut" style="color:#ffffff;"></td>
                            <td id="Second" style="color:#ffffff;"></td>
                            <td style="width: 5px"> </td>
                            <td style="color:#ffffff;">WIB</td>
                        <tr>
                    </table>
                    </p>

                </div>
            </div>
            <!-- search form -->
            <form action="{{ route('track.cek') }}" method="post" class="sidebar-form" role="form">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="kode_tracking" class="form-control" placeholder="Kode Tracking">
                    <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
                </div>
            </form>
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="header">Navigasi Utama</li>
                <li>
                    <a href="{{ route('lapor.create') }}">
                        <i class="fa  fa-pencil-square"></i> <span>Lapor Gangguan</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
                <li class="header">LABEL</li>
                <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Terbaru</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Diproses</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o text-green"></i> <span>Selesai</span></a></li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <!--<b>Versi</b> 1.0.0 -->
        </div>
        <center><strong>Copyright &copy; 2017 SiMALIN.</strong></center>
    </footer>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{url('/assets/admin/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('/assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/assets/admin/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/assets/admin/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/assets/admin/dist/js/demo.js')}}"></script>
</body>
</html>
