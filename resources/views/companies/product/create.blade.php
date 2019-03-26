@extends('companies.userlayout')

@section('title', 'Add a New Products')

@section('content')
	<section class="content-header">
      <h1>
        <i class="fa fa-building"></i> Add a New Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		<div class="box box-info">
            <div class="box-header with-border">
              <a href="{{ route('all_products') }}" class="btn btn-sm btn-info pull-left"> << List of all Products</a>

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <form style="overflow-x: hidden;" action="{{ route('add_products') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			@if(session('success'))
              <div class="alert alert-success" role="alert">
              <strong>Success!</strong> {{ session('success') }}.
              </div>
            @endif
		</div>
		
		<div class="form-group">
			<label for="product_name">Product Name</label>
			<input type="text" name="product_name" class="form-control" placeholder="Product Name">
		</div>
		<div class="row">
      <div class="form-group col-md-9">
        <label for="quantity">Wholesale Quantity</label>
        <input type="number" min="0" name="wholesale_quantity" class="form-control ">
      </div> 
      <div class="form-group col-md-3">
        <label for="quantity">Unit</label>
        <select name="wholesale_unit" class="form-control">
          <option>Select Unit</option>
          <option value="Bars">Bars</option>
          <option value="Litres">Litres</option>
        </select>
      </div>  
    </div>
    <div class="form-group">
      <label for="price">Wholesale price</label>
      <input type="number" min="0" name="wholesale_price" class="form-control">
    </div>
	  <div class="row">
     <div class="form-group col-md-9">
        <label for="quantity">Retail Quantity</label>
        <input type="number" min="0" name="retail_quantity" class="form-control">
      </div> 
      <div class="form-group col-md-3">
        <label for="quantity">Unit</label>
        <select name="retail_unit" class="form-control">
          <option>Select Unit</option>
          <option value="Bars">Bars</option>
          <option value="Litres">Litres</option>
        </select>
      </div>  
    </div>
    <div class="form-group">
      <label for="price">Retail price</label>
      <input type="number" min="0" name="retail_price" class="form-control">
    </div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Add Product</button>
		</div>
	</form>
              </div>
              <!-- /.table-responsive -->
            </div>
          </div>
      	</div>
      </div>
      <!-- /.row -->
    </section>
@endsection


