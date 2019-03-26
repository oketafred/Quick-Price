@extends('admin.adminlayout')

@section('title', 'List of Companies')

@section('content')
	<section class="content-header">
      <h1>
        <i class="fa fa-building"></i> All Companies
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-building"></i> Home</a></li>
        <li class="active">All Companies</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-md-12">
      		<div class="box box-info">
            <div class="box-header with-border">
              <a href="{{ route('register') }}" class="btn btn-sm btn-info pull-left"> Add New Company</a>

              <div class="box-tools pull-right">
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table table-hover table-striped table-sm">
                	<thead>
                		<tr>
                			<th>#</th>
                			<th>First Name</th>
                			<th>Last Name</th>
                			<th>Email</th>
                			<th>Company</th>
                			<th>Action</th>
                		</tr>
                	</thead>
                	<tbody>
                		@foreach($companies as $company)
							<tr>
								<td>{{ $company->id }}</td>
								<td>{{ $company->first_name }}</td>
								<td>{{ $company->last_name }}</td>
								<td>{{ $company->email }}</td>
								<td>{{ $company->company }}</td>
								<td><a href="#" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Edit</a></td>
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