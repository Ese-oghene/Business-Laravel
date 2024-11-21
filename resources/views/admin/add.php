<div class="row">
					<div class="col-xl-6 mx-auto">

					@if (session()->has('message'))
					<div class="alert alert-success" >
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

						{{session()->get('message')}}
					</div>
					
					@endif
						
						<div class="card">
							<div class="card-body p-4">
								<h5 class="mb-4">Add New Products</h5>
								<form class="row g-3" action="{{route('add_product')}}" method="POST" enctype="multipart/form-data">
									
								@csrf

									<div class="col-md-12">
										<label for="input1" class="form-label">Product Tittle</label>
										<input type="text" name="tittle" class="form-control" id="input1" placeholder="Product Name">
									</div>
									
									<div class="col-md-12">
										<label for="input3" class="form-label">Product Description</label>
										<input type="text" name="description" class="form-control" id="input3" placeholder="Product Tittle">
									</div>
									<div class="col-md-12">
										<label for="input4" class="form-label">Product Price</label>
										<input type="text" name="price" class="form-control" id="input4" placeholder="Product Price">
									</div>

									<div class="col-md-12">
										<label for="input4" class="form-label">Discount Price</label>
										<input type="text" name="discount_price" class="form-control" id="input4" placeholder="Discount Price">
									</div>

									<div class="col-md-12">
										<label for="input5" class="form-label">Product Quantity</label>
										<input type="text" name="quantity" class="form-control" id="input5" min="0" placeholder="Product Quantity">
									</div>
									
									<div class="col-md-12">
										<label for="input5" class="form-label">Product Category</label>
										<select name="category" id="">
										@foreach ( $category as $categorys)
										<option value="{{ $categorys->category_name }}">{{ $categorys->category_name }}</option>
										@endforeach
										</select>
									</div>
									<div class="col-md-12">
										<label for="input5" class="form-label">Product Image</label>
										<input type="file" name="image" class="form-control" id="input5"  placeholder="Product Image">
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