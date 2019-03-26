@extends('admin.adminlayout')

@section('title', 'Register a New Company')

@section('content')
	<section class="content-header">
      <h1>
        <i class="fa fa-building"></i> Register a New Company
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Register</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		<div class="box box-info">
            <div class="box-header with-border">
              <a href="{{ route('all_companies') }}" class="btn btn-sm btn-info pull-left"> << List all Companies</a>

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <form action="{{ route('register') }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			@if(session('success'))
              <div class="alert alert-success" role="alert">
              <strong>Error!</strong> {{ session('success') }}.
              </div>
            @endif
		</div>
		
		<div class="form-group">
			<input type="email" name="email" class="form-control" placeholder="Email Address">
		</div>
		<div class="form-group">
			<input type="text" name="first_name" class="form-control" placeholder="First Name">
		</div>
		<div class="form-group">
			<input type="text" name="last_name" class="form-control" placeholder="Last Name">
		</div>
    <div class="form-group">
      <input type="text" name="company" class="form-control" placeholder="Company Name">
    </div>
		<div class="form-group">
			<input type="password" name="password" class="form-control" placeholder="Password">
		</div>
		<div class="form-group">
			<input type="password" name="password_confirmation" class="form-control" placeholder="Password Confirmation">
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Register</button>
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


