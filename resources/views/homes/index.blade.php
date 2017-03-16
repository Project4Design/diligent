@extends('layouts.app')

@section('title','Homes - '.config('app.name'))
@section('header','Homes Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li class="active"> Homes </li>
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
            <h3>{{ count($homes) }}</h3>
            <p>Homes Insurance</p>
          </div>
          <div class="icon">
            <i class="fa fa-home"></i>
          </div>
        </div>
      </div>
    </div><!--row-->

    <div class="row">
    	<div class="col-md-12">
	    	<div class="box box-danger">
		      <div class="box-header with-border">
		        <h3 class="box-title"><i class="fa fa-home"></i> Homes Quotes</h3>
		      </div>
		      <div class="box-body">
		        <table class="table tabe-bordered">
							<thead style="background-color: skyblue">
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Name</th>
									<th class="text-center">Email</th>
									<th class="text-center">Property number</th>
									<th class="text-center">Type property</th>
									<th class="text-center">Stimate built</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@foreach ($homes AS $d )
								<tr>
									<td class="text-center">{{ $i }}</td>
									<td class="text-center">{{ $d->title." ".$d->first_name." ".$d->sur_name }}</td>
									<td class="text-center">{{ $d->email }}</td>
									<td class="text-center">{{ $d->property_number }}</td>
									<td class="text-center">{{ $d->type_property }}</td>
									<td class="text-center">{{ $d->stimate_built }}</td>
									<td>
										<a class="btn btn-primary btn-flat btn-sm" href="{{ url('admin/homes/'.$d->id_home_insurance) }}"><i class="fa fa-search" aria-hidden="true"></i></a>
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