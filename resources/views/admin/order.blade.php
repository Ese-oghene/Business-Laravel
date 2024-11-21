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

    <style type="tex/css" >
        .tittle_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
        }
        .table_deg{
            border: 2px solid white;
            width: 70%;
            margin: auto;
            padding-top: 50px;        
        }
    </style>

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

            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Orders</li>
							</ol>
						</nav>
					</div>
				
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase tittle_deg">All Orders</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table mb-0 table_deg" >
									<thead>
										<tr>
                                           <th scope="col">Name</th>
											<th scope="col">Email</th>
                                            <th scope="col">Phone</th>
											<th scope="col">Address</th>
                                            <th scope="col">Product_Tittle</th>
											<th scope="col">Qauntity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Payment_status</th>
                                            <th scope="col">Delivery _status</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Delivered</th>
											<th scope="col">Print PDF</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach ($order as $order)
                                        
                                        
										<tr>
											<td>{{$order->name}}</td>
											<td>{{$order->email}}</td>
                                            <td>{{$order->phone}}</td>
											<td>{{$order->address}}</td>
                                            <td>{{$order->product_tittle}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>{{$order->price}}</td>
                                            <td>{{$order->payment_status}}</td>
                                            <td>{{$order->delivery_status}}</td>
                                            <td>
                                                <img src="/product/{{$order->image}}" style="width: 60px; height: 60px; " alt="">
                                            </td>
                                            <td> 
                                                @if ($order->delivery_status =='processing')
                                                
                                              
                                                <a href="{{route('delivered', $order->id)}}" class="btn btn-primary" onclick="return confirm('Are you sure this product is delivered !!!')" >Delivered</a> 

                                                @else

                                                <p style="color: green;" >Delivered</p>

                                                @endif
                                            </td>
											<td>
												<a href="{{route('print_pdf', $order->id)}}" class="btn btn-secondary">Print PDF</a>
											</td>
										</tr>

                                        @endforeach  
									</tbody>
								</table>
							</div>
						</div>
				
				
					</div>
				</div>

			<!-- @yield('admin') -->
		
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