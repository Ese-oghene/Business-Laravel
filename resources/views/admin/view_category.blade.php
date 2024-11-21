@extends('admin.home');
@section('admin')

<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Category</div>
					
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-6 mx-auto">
						
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add Category</h5>
                                @if (session()->has('message'))

                                <div class="alert alert-success" >

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                    {{session()->get('message')}}

                                </div>
                                
                                @endif
								<form class="row g-3" action="{{url('add_category')}}" method="POST" >

									@csrf

									<div class="col-md-12">
										<label for="input3" class="form-label">Category Name</label>
										<input type="text" name="category_name" class="form-control" id="input3" placeholder="Write Category name">
									</div>
									
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit"  name="submit" class="btn btn-primary px-4">Submit</button>
										
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>
				<!--end row-->

                <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Basic Table</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table mb-0">
									<thead>
										<tr>
											<th scope="col">Sl</th>
											<th scope="col">Category Name</th>
											<th scope="col">Action</th>
											
										</tr>
									</thead>
									<tbody>
                                        @foreach ($data as $key=> $item)
										<tr>
											<th scope="row">{{$key+1}}</th>
											<td>{{$item->category_name}}</td>
											<td>
                                                <a onclick="return confirm('Are you sure to delete this ?')" href="{{url('delete_category', $item->id)}}" class="btn btn-danger" >Delete</a>
                                            </td>
										</tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
					
					</div>
				</div>

			</div>


@endsection