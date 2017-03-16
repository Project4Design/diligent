@extends('layouts.app')

@section('title','Homes - '.config('app.name'))
@section('header','Homes Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li><a href="{{ url('admin/homes') }}"> Homes</a></li>
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
		        <h3 class="box-title"><i class="fa fa-file-text-o"></i> {{$homes->title." ".$homes->first_name." ".$homes->surname}}</h3>
		        <span class="pull-right">{{ $homes->created_at }}</span>
		      </div>
		      <div class="box-body">

				<h2 class="text-center">Personal Info</h2>
				<hr class="separador">
				<div class="content">
					<div class="row">
						<div class="col-md-4">
							<strong>First name:</strong>  {{$homes->first_name}}<br><br>
			      			<strong>Surname: </strong>   {{$homes->sur_name}}<br><br>
	 		      			<strong>Middle name: </strong>  {{$homes->middle_name}}<br><br>
	 		      			<strong>Date of Birth: </strong> {{$homes->birthdate}}<br><br>
						</div>
						<div class="col-md-4">
							<strong>Marital status: </strong> {{$homes->marital_status}}<br><br>
							<strong>Employment status: </strong> {{$homes->employment_status}}<br><br>
							<strong>Occupation: </strong> {{$homes->occupation}}<br><br>
							<strong>Business type: </strong> {{$homes->business_type}}
						</div>
						<div class="col-md-4">
							<strong>¿Born UK?</strong>  {{$homes->born_uk}}<br><br>
							<strong>Became resident</strong>  {{$homes->became_resident?$homes->became_resident:'N/A'}}<br><br>
							<strong>Email</strong>  {{$homes->email}}<br><br>
							<strong>Contact number</strong>  {{$homes->contact_number}}
						</div>
					</div>
					<h2 class="text-center">Property info</h2>
					 <hr class="separador">
					  <div class="row">
					  	<div class="col-md-4">
					  		<strong>Poperty number:  </strong>  {{$homes->property_number}}<br><br>
					  		<strong>Property line address:  </strong>  {{$homes->property_first_line}}<br><br>
					  		<strong>Postcode:  </strong>  {{$homes->property_postcode}}<br><br>
					  		<strong>Type of property:  </strong>  {{$homes->type_property}}<br><br>
					  		<strong>Are there any trees taller than 10m within 5m of the property?:  </strong> {{$homes->taller_within_property?$homes->taller_within_property:'N/A'}}
					  	</div>
					  	<div class="col-md-4">
					  		<strong>Estimated year property built:  </strong>  {{$homes->stimate_built}}<br><br>
					  		<strong>Number of living rooms:  </strong>  {{$homes->number_living_rooms}}<br><br>
					  		<strong>Number of Kitchens:  </strong>  {{$homes->number_kitchens}}<br><br>
					  		<strong>Number of Bathrooms:  </strong>  {{$homes->number_bathrooms}}<br><br>
					  		<strong>Number of Bedrooms:  </strong> {{$homes->number_bedrooms}}
					  	</div>
					  	<div class="col-md-4">
					  		<strong>Approximate % of flat roof:  </strong>  {{$homes->approximate_roof}}<br><br>
					  		<strong>Do you own this property:   </strong>  {{$homes->own_property}}<br><br>
					  		<strong>Who lives in the property:  </strong>  {{$homes->lives_property}}<br><br>
					  		<strong>How many years have they lived at the property:  </strong>  {{$homes->many_years_property}}<br><br>
					  		<strong>How many adults live in the property:  </strong> {{$homes->many_adults_property}}
					  	</div>
					  </div>

				</div>

		      </div>
		    </div>
		  </div>
    </div>
  </div>
@endsection