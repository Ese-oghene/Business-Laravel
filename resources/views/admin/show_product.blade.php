@extends('admin.home');
@section('admin')

<div class="page-content">
					@if (session()->has('message'))
					<div class="alert alert-success" >
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

						{{session()->get('message')}}
					</div>
					
					@endif
  
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Tables</div>
					<!-- <div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data Table</li>
							</ol>
						</nav>
					</div> -->
					
				</div>
				<!--end breadcrumb-->
				<h6 class="mb-0 text-uppercase"> All Product </h6>
				<hr/>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>Product Tittle</th>
										<th>Description</th>
										<th>Quantity</th>
										<th>Category</th>
										<th>Price</th>
										<th>Discount Price</th>
                                        <th>Product Image</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach ($product as $productt)
                                    
                                   
									<tr>
										<td>{{$productt->tittle}}</td>
                                        <td>{{$productt->description}}</td>
                                        <td>{{$productt->quantity}}</td>
										<td>{{$productt->category}}</td>
										<td>{{$productt->price}}</td>
										<td>{{$productt->discount_price}}</td>
										
										<td><img src="/product/{{$productt->image}}" alt="" style="height: 150px; width: 150px; " ></td>
										<td>
											<a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ?')" href="{{route('delete_product', $productt->id)}}">Delete</a>
										</td>
										<td>
											<a class="btn btn-success" href="{{route('update_product', $productt->id)}}" >Edit</a>
										</td>
										
									</tr>

                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			
			
			</div>
@endsection