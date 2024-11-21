<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<base href="/public">
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
	
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Forms</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4"> Edit  Product</h5>
								<form action="{{route('update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data" class="row g-3">
									@csrf
									<div class="col-md-12">
										<label for="input3" class="form-label">Title</label>
										<input type="text" name="tittle" class="form-control" id="input3" placeholder="Phone" value="{{$product->tittle}}" >
									</div>
									<div class="col-md-12">
										<label for="input4" class="form-label">Product Description</label>
										<input type="text" name="description" class="form-control" id="input4" placeholder="Email" value="{{$product->description}}">
									</div>
									<div class="col-md-12">
										<label for="input5" class="form-label">Product Price</label>
										<input type="text" name="price" class="form-control" id="input5" placeholder="Password" value="{{$product->price}}">
									</div>
									<div class="col-md-12">
										<label for="input6" class="form-label">Discount Price</label>
										<input type="text" name="discount_price" class="form-control" id="input6" placeholder="Date of Birth" value="{{$product->discount_price}}">
									</div>
									
									<div class="col-md-12">
										<label for="input11" class="form-label"></label>
										<input type="text" name="quantity" class="form-control" id="input6" placeholder="Date of Birth" value="{{$product->quantity}}">
									</div>

									<div class="col-md-12">
										<label for="input7" class="form-label">Product Category</label>
										<select id="input7" name="category" class="form-select">

										@foreach ( $category as $categorys)
										<option value="{{ $categorys->category_name }}">{{ $categorys->category_name }}</option>
										@endforeach
										
											
										</select>
									</div>

									<div class="col-md-12">
										<label for="input6" class="form-label">Current product image</label>
										<img height="60px" width="60px" src="/product/{{$product->image}}" alt="">
									</div>

									<div class="col-md-12">
										<label for="input6" class="form-label">Change product image</label>
										<input type="file" name="image" class="form-control" id="input6" >
									</div>
									
								
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>

				


					


					</div>
				</div>
				<!--end row-->




			</div>


			
		
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