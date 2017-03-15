@extends('layouts.app')

@section('title','Cars - '.config('app.name'))
@section('header','Cars Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li><a href="{{ url('admin/cars') }}"> Cars</a></li>
	  <li class="active"> Details</li>
	</ol>
@endsection

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