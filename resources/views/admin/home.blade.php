<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png"/>
	<!--plugins-->
	<link href="admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
	<!-- loader-->
	<link href="admin/assets/css/pace.min.css" rel="stylesheet"/>
	<script src="admin/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="admin/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="admin/assets/css/app.css" rel="stylesheet">
	<link href="admin/assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="admin/assets/css/dark-theme.css"/>
	<link rel="stylesheet" href="admin/assets/css/semi-dark.css"/>
	<link rel="stylesheet" href="admin/assets/css/header-colors.css"/>
	<title>Admin</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->

		@include('admin.sidebar')
		<!--end sidebar wrapper -->

		<!--start header -->

		@include('admin.header')

		<!--end header -->
		<!--start page wrapper -->
		
		<div class="page-wrapper">
			<!--start page content-->

			@yield('admin')
		
			<!--end page content-->
		</div>

		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		@include('admin.footer')
	</div>
	<!--end wrapper-->



	<!-- Bootstrap JS -->
	<script src="admin/assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="admin/assets/js/jquery.min.js"></script>
	<script src="admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="admin/assets/plugins/chartjs/js/chart.js"></script>
	<script src="admin/assets/js/index.js"></script>
	<!--app JS-->
	<script src="admin/assets/js/app.js"></script>
	<script>
		new PerfectScrollbar(".app-container")
	</script>
</body>

</html>