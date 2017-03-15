@extends('layouts.app')

@section('title','Cars - '.config('app.name'))

@section('content')
<!-- Main content -->
  <div class="content">
    <!-- Info boxes -->

    <div class="row">
    	<div class="col-md-12">
	    	<div class="box box-danger">
		      <div class="box-header with-border">
		        <h3 class="box-title"><i class="fa fa-file-text-o"></i> {{$car->title." ".$car->first_name." ".$car->surname}}</h3>
		        <span class="pull-right">{{ $car->created_at }}</span>
		      </div>
		      <div class="box-body">
		      </div>
		    </div>
		  </div>
    </div>
  </div>
@endsection