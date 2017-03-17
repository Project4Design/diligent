@extends('layouts.app')

@section('title','Accidents - '.config('app.name'))
@section('header','Accidents Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li><a href="{{ url('admin/accidents') }}"> Accidents</a></li>
	  <li class="active"> Details</li>
	</ol>
@endsection

@section('content')
<!-- Main content -->
  <div class="content">
  	<section>
  		<a class="btn btn-flat btn-default" href="{{ url('admin/accidents') }}"><i class="fa fa-reply"></i> Back</a>
  	</section>
  	<section class="perfil">
	    <div class="row">
	    	<div class="col-md-12">
          <h2 class="page-header" style="margin-top:0!important">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            </i> {{$accidents->title." ".$accidents->first_name." ".$accidents->middle_name." ".$accidents->surname}}
            <small class="pull-right">Registered: {{ $accidents->created_at }}&nbsp;&nbsp;&nbsp;</small>
          </h2>
        </div>
	    	<div class="col-md-12">
			    <h3 class="text-center">Personal info</h3>
			    <hr class="separador">
			  </div>
    		<div class="col-md-4">
    			<h4 class="view-subtitle">Details</h4>
    			<p><b>First name:</b>  {{$accidents->first_name}}</p>
      		<p><b>Middle name: </b>  {{$accidents->middle_name?$accidents->middle_name:'N/A'}}</p>
    			<p><b>Surname: </b>   {{$accidents->sur_name}}</p>
      		<p><b>Date of Birth: </b> {{$accidents->birthdate}}</p>
    		</div>
    		<div class="col-md-4">
    			<h4 class="view-subtitle">Address</h4>
    			<p><b>House Number/Name:</b> {{$accidents->house_number_name}}</p>
    			<p><b>First Line Address: </b> {{$accidents->first_line_address}}</p>
    			<p><b>Postcode: </b>  {{$accidents->postcode}}</p>
    			<p><b>Phone: </b> {{$accidents->phone}}</p>
    		</div>
    		<div class="col-md-4">
    			<h4 class="view-subtitle">Vehicle</h4>
    			<p><b>Vehicle registration: </b> {{$accidents->vehicle_registration}}</p>
    			<p><b>Insurer: </b> {{$accidents->insurer}}</p>
    		</div>
    		<div class="col-md-12">
			    <h3 class="text-center">Other Driver Details</h3>
			    <hr class="separador">
			  </div>
    		<div class="col-md-4">
    			<h4 class="view-subtitle">Details</h4>
    			<p><b>Full Name: </b> {{$accidents->other_name}}</p>
    			<p><b>Contact Number: </b> {{$accidents->other_driver_contact_number?$accidents->other_driver_contact_number:'N/A'}}</p>
    			<p><b>Adress: </b> {{$accidents->other_driver_address?$accidents->other_driver_address:'N/A'}}</p>
    		</div>
    		<div class="col-md-4">
    			<h4 class="view-subtitle">Vehicle</h4>
    			<p><b>Vehicle Registration: </b>  {{$accidents->other_driver_vehicle}}</p>
    			<p><b>Contact Insurer: </b> {{$accidents->other_driver_contact_insurer?$accidents->other_driver_contact_insurer:'N/A'}}</p>
    		</div>
				<div class="col-md-12">
				  <h3 class="text-center">Accident Details</h3>
			    <hr class="separador">
			  </div>
    		<div class="col-md-4">
    			<h4 class="view-subtitle">Details</h4>
      		<p><b>Valid insurance policy in force at the time of accident: </b>{{$accidents->valid_insurance}}</p>
      		<p><b>Date of Incident: </b> {{$accidents->date_incident}}</p>
      		<p><b>Time of Incident: </b> {{$accidents->time_incident}}</p>
      		<p><b>Location of the Incident: </b> {{$accidents->location_incident}}</p>
    		</div>
    		<div class="col-md-4">
    			<h4 class="view-subtitle">Other</h4>
      		<p><b>Weather condition: </b> {{$accidents->weather_condition}}</p>
      		<p><b>Brief description of what happened: </b> {{$accidents->brief_description_happened}}</p>
    		</div>
				<div class="col-md-12">
		      <h3 class="text-center">Additional Details</h3>
			    <hr class="separador">
			  </div>
	    	<div class="col-md-12">
	    		<h4 class="view-subtitle">Witnesses</h4>
	    		<p><b>Any Witnesses:</b> {{$accidents->witnesses_details}}</p>
	    	</div>
	    	@if($accidents->witnesses_details == "Yes")
	    		@php $i=1; @endphp
	    		<div class="col-md-12">
	    	  @foreach($witness as $witnes)
	    	  	<div class="col-md-4">
	    	  		<h4 class="view-subtitle">Witness {{$i}}</h4>
	    	  		<p><b>Full Name: </b> {{$witnes->witness_name?$witnes->witness_name:'N/A'}}</p> 
	    	  		<p><b>Adress: </b> {{$witnes->witness_address?$witnes->witness_address:'N/A'}}</p>
	    	  		<p><b>Contact Number: </b> {{$witnes->witness_contact_number?$witnes->witness_contact_number:'N/A'}}</p>
	    	  	</div>
	    	  	@php $i++; @endphp
  	    	@endforeach
						<div class="col-md-12">
	  	    		<hr class="separador">
	  	    	</div>
  	    	</div>
  	    @endif

	    	<div class="col-md-12">
	    		<h4 class="view-subtitle">Passenger</h4>
	    		<p><b>Passengers Injury: </b> {{$accidents->passengers_injury}}</p>
	    	</div>

				@if($accidents->passengers_injury == "Yes")
				<div class="col-md-12">
					@php $i=1; @endphp
					@foreach($passengers as $pas)
						<div class="col-md-4">
							<h4 class="view-subtitle">Passenger {{$i}}</h4>
	    	  		<p><b>Full Name: </b> {{$pas->passenger_name?$pas->passenger_name:'N/A'}}</p> 
	    	  		<p><b>Adress: </b> {{$pas->passenger_address?$pas->passenger_address:'N/A'}}</p>
	    	  		<p><b>Contact Number: </b> {{$pas->passenger_contact_number?$pas->passenger_contact_number:'N/A'}}</p>
  	    	  </div>
  	    	  @php $i++; @endphp
					@endforeach
				</div>
				@endif
	    </div>
	  </section>
  </div>
@endsection