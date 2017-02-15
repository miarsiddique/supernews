<!DOCTYPE html>
<html lang="en">
<head>
		@include('includes.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="wrapper">
		<!-- main Header -->
			<header class="main-header">
				@include('includes.header')
			</header>
			<!-- close main header -->
			<!-- Left side column. contains the logo and sidebar -->
			<aside class="main-sidebar">
				@include('includes.leftSidebar')
			</aside>
			<!-- Close Left side column. contains the logo and sidebar -->

			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">
					<!-- Content Header (Page header) -->
					<section class="content-header">
						<h1>
								Page Header
								<small>Optional description</small>
						</h1>
						<ol class="breadcrumb">
								<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
								<li class="active">Here</li>
						</ol>
					</section>
					<!-- Main content -->
					<section class="content">

					<!-- Your Page Content Here -->
						@yield('content')

					</section>
					<!-- /.content -->
			</div>
			<!-- /.content-wrapper -->

			<!-- Main Footer -->
			<footer class="main-footer">
				@include('includes.footer')
			</footer>
			<!-- Close Main Footer -->

			<!-- Control Sidebar -->
			<aside class="control-sidebar control-sidebar-dark">
				@include('includes.sidebar')
			</aside>
			<!-- Close Control Sidebar -->
		
		<!-- Add the sidebar's background. This div must be placed
				 immediately after the control sidebar -->
			<div class="control-sidebar-bg">alam</div>
		</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="admin/bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
		 Both of these plugins are recommended to enhance the
		 user experience. Slimscroll is required when using the
		 fixed layout. -->
</body>
</html>