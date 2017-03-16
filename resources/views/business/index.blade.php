@extends('layouts.app')

@section('title','Business - '.config('app.name'))
@section('header','Business Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li class="active"> Busines </li>
	</ol>
@endsection

@section('content')
<!-- Main content -->
  <div class="content">
    <!-- Info boxes -->
    <div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($business) }}</h3>
            <p>Business Quotes</p>
          </div>
          <div class="icon">
            <i class="fa fa-building"></i>
          </div>
        </div>
      </div>
    </div><!--row-->

    <div class="row">
    	<div class="col-md-12">
	    	<div class="box box-danger">
		      <div class="box-header with-border">
		        <h3 class="box-title"><i class="fa fa-file-text-o"></i> Business Quotes</h3>
		      </div>
		      <div class="box-body">
		        <table class="table tabe-bordered">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Name</th>
									<th class="text-center">Phone</th>
									<th class="text-center">Email</th>
									<th class="text-center">Business Name</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@foreach ($business AS $d )
								<tr>
									<td class="text-center">{{ $i }}</td>
									<td class="text-center">{{ $d->title.''.$d->first_name.''.$d->sur_name }}</td>
									<td class="text-center">{{ $d->mobile_telephone }}</td>
									<td class="text-right">{{ $d->email }}</td>
									<td class="text-center">{{ $d->bussiness_name }}</td>
									<td class="text-center">
										<a class="btn btn-primary btn-flat btn-sm" href="{{ url('admin/business/'.$d->id_insurance_bussiness) }}"><i class="fa fa-search" aria-hidden="true"></i></a>
									</td>
								</tr>
								@php $i++; @endphp
								@endforeach
							</tbody>
						</table>
		      </div>
		    </div>
		  </div>
    </div>
  </div>
@endsection