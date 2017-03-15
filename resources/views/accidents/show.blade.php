@extends('layouts.app')

@section('title','Accidents - '.config('app.name'))
@section('header','Accidents Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li><a href="{{ url('admin/accidents') }}"> Cars</a></li>
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
		        <h3 class="box-title"><i class="fa fa-file-text-o"></i> {{$accidents->title." ".$accidents->first_name." ".$accidents->surname." ".$accidents->middle_name}}</h3>
		        <span class="pull-right">{{ $accidents->created_at }}</span>
		      </div>
		      <div class="box-body">
		      <h2 class="text-center">Personal info</h2>
		      <hr class="separador">
		      <div class="content">
		      	<div class="row" style="font-size: 18px">
		      		<div class="col-md-4">
		      			<strong>First name:</strong>  {{$accidents->first_name}}<br><br>
		      			<strong>Surname: </strong>   {{$accidents->sur_name}}<br><br>
 		      			<strong>Middle name: </strong>  {{$accidents->middle_name}}<br><br>
 		      			<strong>Date of Birth: </strong> {{$accidents->birthdate}}<br><br>
		      		</div>
		      		<div class="col-md-4">
		      			<strong>Vehicle registration: </strong> {{$accidents->vehicle_registration}}<br><br>
		      			<strong>Postcode: </strong>  {{$accidents->postcode}}<br><br>
		      			<strong>House Number/Name </strong> {{$accidents->house_number_name}}
		      		</div>
		      		<div class="col-md-4">
		      			<strong>First Line Address: </strong> {{$accidents->first_line_address}}<br><br>
		      			<strong>Phone: </strong> {{$accidents->phone}}<br><br>
		      			<strong>Insurer: </strong> {{$accidents->insurer}}
		      		</div>	
		      	</div>
		      	<h2 class="text-center">Other Driver Details</h2>
		      	  <hr class="separador">
			      	<div class="row" style="font-size: 18px">
			      		<div class="col-md-4">
			      			<strong>Other Driver's Full Name: </strong> {{$accidents->other_name}}<br><br>
			      			<strong>Other Driver's Vehicle Registration: </strong>  {{$accidents->other_driver_vehicle}}
			      		</div>
			      		<div class="col-md-4">
			      			<strong>Other Driver's Adress: </strong> {{$accidents->other_driver_address}}<br><br>
			      			<strong>Other Driver's Contact Number: </strong> {{$accidents->other_driver_contact_number}}
			      		</div>
			      		<div class="col-md-4">
			      			<strong>Other Driver's Contact Insurer: </strong> {{$accidents->other_driver_contact_insurer}}
			      		</div>
			      	</div>
			      	<h2 class="text-center">Accident Details</h2>
		      	  	 <hr class="separador">
				      	<div class="row" style="font-size: 18px">
				      		<div class="col-md-4">
					      		<strong>Valid insurance policy in force at the time of accident: </strong>{{$accidents->valid_insurance}}<br><br>
					      		<strong>Date of Incident: </strong> {{$accidents->date_incident}}
				      		</div>
				      		<div class="col-md-4">
					      		<strong>Time of Incident: </strong> {{$accidents->time_incident}}<br><br>
					      		<strong>Location of the Incident: </strong> {{$accidents->location_incident}}
				      		</div>
				      		<div class="col-md-4">
					      		<strong>Weather condition: </strong> {{$accidents->weather_condition}}<br><br>
					      		<strong>Brief description of what happened: </strong> {{$accidents->brief_description_happened}}
				      		</div>
				      	</div>

		      </div>
		      	
		      </div>
		    </div>
		  </div>
    </div>
  </div>
@endsection