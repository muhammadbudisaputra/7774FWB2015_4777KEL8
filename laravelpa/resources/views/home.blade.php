<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PELABUHAN SIA</title>

    <!-- Bootstrap Core CSS -->
	<link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- MetisMenu CSS -->
    <link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/metisMenu/metisMenu.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- Custom CSS -->
	<link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/dist/css/sb-admin-2.css") }}" rel="stylesheet" type="text/css" />

    <!-- Custom Fonts -->
	<link href="{{ asset("/startbootstrap-sb-admin-2-gh-pages/vendor/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{url('home')}}">PT. PELABUHAN INFORMATIKA</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="empat">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
					<ul class="dropdown-menu dropdown-user">
                        <li class="divider"></li>
                        <li><a href="{{url('logout1')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
					</li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{url('home')}}"><i class="fa fa-home fa-fw"></i> Beranda</a>
                        </li>
                        <li>
                            <a href="tables.html"><i class="fa fa-shopping-cart fa-fw"></i> DATA PELABUHAN<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('kapal')}}">KAPAL</a>
                                </li>
                                <li>
                                    <a href="{{url('kapten')}}">KAPTEN</a>
                                </li>
                                <li>
                                    <a href="{{url('awak')}}">AWAK KAPAL</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="tables.html"><i class="fa fa-wrench fa-fw"></i> DATA TIKET <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{url('tiket')}}">TIKET</a>
                                 </li>
                                <li>
                                    <a href="{{url('penumpang')}}">PENUMPANG</a>
                                </li>
                                <li>
                                    <a href="{{url('kategori')}}">KATEGORI</a>
                                </li>
                                <li>
                                    <a href="{{url('tujuan')}}">DESTINASI</a>
                                </li>
                                <li>
                                    <a href="{{url('tpt')}}">DETAIL TIKET</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{url('pengguna')}}"><i class="fa fa-sitemap fa-fw"></i> Beranda</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
			@yield('container')	
                    </div>
                </div>
            </div>
        </div>
    </div>
	
 <div class="panel-footer">
                            Panel Footer
                        </div>
						
    <!-- jQuery -->
	<script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages/vendor/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
	<script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Metis Menu Plugin JavaScript -->
	<script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages/vendor/metisMenu/metisMenu.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
	<script type="text/javascript" src="{{asset('startbootstrap-sb-admin-2-gh-pages//dist/js/sb-admin-2.js')}}"></script>
</body>

</html>