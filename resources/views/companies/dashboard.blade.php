@extends('companies.userlayout')

@section('title', 'User Dashboard')

@section('content')
  <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">My Product Prices</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Product Name</th>
                    <th>Litres</th>
                    <th>Price</th>
                    <th>Updated At</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($products as $product)
                      <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->litres }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->updated_at }}</td>
                        <td><a href="#" class="btn btn-success btn-sm">Edit</a></td>
                      </tr>
                    @endforeach
                  
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