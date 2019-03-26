@extends('companies.userlayout')

@section('title', 'List of All Products')

@section('content')
	<section class="content">
      <div class="row">
      	<div class="col-md-12">
      		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">My Product Prices</h3>
            </div>
            <div class="box-header with-border">
              <a href="{{ route('add_products') }}" class="btn btn-sm btn-info pull-left"> << Add New Products</a>

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Wholesale Quantity</th>
                    <th>Wholesale Price</th>
                    <th>Retail Quantity</th>
                    <th>Retail Price</th>
                    <th>Updated At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @forelse($products as $product)
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->wholesale_quantity }}</td>
                        <td>{{ $product->wholesale_price }}</td>
                        <td>{{ $product->retail_quantity }}</td>
                        <td>{{ $product->retail_price }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td><a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a></td>
                      </tr>
                    @empty
                    <tr><td colspan="6">No record Found</td></tr>
                    @endforelse
                  
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
          </div>
      	</div>
      </div>
      <!-- /.row -->
    </section>
@endsection