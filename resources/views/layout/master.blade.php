<!doctype html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/linearicons/style.css') }}">
	<link rel="stylesheet" href="{{ asset('dashboard/assets/vendor/chartist/css/chartist-custom.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('dashboard/assets/css/main.css') }}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{ asset('dashboard/assets/css/demo.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href=" {{ asset('dashboard/assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" sizes="96x96" href=" {{ asset('dashboard/assets/img/favicon.png') }}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
              <a href="#" style="color: black;">BRIDGENOTE INDONESIA</a>
            </div>
            <div class="container-fluid">
              <div class="navbar-btn">
                <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
              </div>
              <form class="navbar-form navbar-left">
                <div class="input-group">
                  <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                  <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
                </div>
              </form>
              <div id="navbar-menu">
                <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="{{ asset('dashboard/assets/img/user.png') }}" class="img-circle" alt="Avatar"> <span>{{ auth()->user()->name }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                      <li><a href="{{ url('/logout') }}"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
              <nav>
                <ul class="nav">
                  <li><a href="{{ url('/dashboard') }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                </ul>
              </nav>
            </div>
          </div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">

    <!-- Main content -->
    @yield('content')
    <!-- /.content -->
  </div>
  <!-- END MAIN -->
  <div class="clearfix"></div>
  <footer>
    <div class="container-fluid">
      <p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
    </div>
  </footer>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="{{ asset('dashboard/assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/scripts/klorofil-common.js') }}"></script>
</body>

</html>