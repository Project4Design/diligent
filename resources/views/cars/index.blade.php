@extends('layouts.app')

@section('title','Cars - '.config('app.name'))

@section('content')
<!-- Main content -->
  <div class="content">
    <!-- Info boxes -->
    <div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($cars) }}</h3>
            <p>Cars Insurance</p>
          </div>
          <div class="icon">
            <i class="fa fa-car"></i>
          </div>
        </div>
      </div>
    </div><!--row-->

    <div class="row">
    	<div class="col-md-12">
	    	<div class="box box-danger">
		      <div class="box-header with-border">
		        <h3 class="box-title"><i class="fa fa-file-text-o"></i> Cars Quotes</h3>
		      </div>
		      <div class="box-body">
		        <table class="table tabe-bordered">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Proposer</th>
									<th class="text-center">Mobile</th>
									<th class="text-center">Coverage</th>
									<th class="text-center">Registered</th>
									<th class="text-center">Policy Start</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@php $i=1; @endphp
								@foreach ($cars AS $d )
								<tr>
									<td class="text-center">{{ $i }}</td>
									<td>{{ $d->title." ".$d->first_name." ".$d->sur_name }}</td>
									<td>{{ $d->mobile }}</td>
									<td>{{ $d->type_coverage }}</td>
									<td>{{ $d->created_at }}</td>
									<td>{{ $d->policy_start }}</td>
									<td class="text-center">
										<a class="btn btn-primary btn-flat btn-sm" href="{{ url('admin/cars/'.$d->id) }}"><i class="fa fa-search" aria-hidden="true"></i></a>
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