@extends('layouts.app')

@section('title','Vans - '.config('app.name'))
@section('header','Vans Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li><a href="{{ url('admin/vans') }}"> Vans</a></li>
	  <li class="active"> Details</li>
	</ol>
@endsection

@section('content')
<!-- Main content -->
  <div class="content">
  	<section>
  		<a class="btn btn-flat btn-default" href="{{ url('admin/vans') }}"><i class="fa fa-reply"></i> Back</a>
  	</section>
  	<section class="perfil">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-header" style="margin-top:0!important">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            {{$van->title." ".$van->first_name." ".$van->middle_name." ".$van->sur_name}}
            <small class="pull-right">Registered: {{ $van->created_at }}&nbsp;&nbsp;&nbsp;</small>
          </h2>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Contact Information</h3>
        	<hr>
        </div>
      	<div class="col-md-4">
      		<h4 class="view-subtitle">Details</h4>
      		<p><b>Contact via:</b> {{ $van->contact_via }}</p>
      		<p><b>Email:</b> {!! $van->email ? "<a href='mailto:$van->email'>".$van->email."</a>":'N/A' !!}</p>
      		<p><b>Phone:</b> {!! $van->phone ? "<a href='tel:$van->phone'>".$van->phone."</a>":'N/A' !!}</p>
      		<p><b>Mobile:</b> {!! $van->mobile ? "<a href='tel:$van->mobile'>".$van->mobile."</a>":'N/A' !!}</p>
      	</div>
      	<div class="col-md-4">
      		<h4 class="view-subtitle">Heard from us</h4>
      		<p><b>Heard from us:</b> {{ $van->heard_from_us ?$van->heard_from_us:'N/A' }}</p>
      		<p><b>Referrer:</b> {{ $van->referrer ?$van->referrer:'N/A' }}</p>
      		<p><b>Comments:</b> {{ $van->phone ?$van->comments:'N/A' }}</p>
      	</div>
        <div class="col-md-12 text-center">
        	<h3>Personal Information</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Information</h4>
          <p><b>Title:</b> {{ $van->title }}</p>
          <p><b>First name:</b> {{ $van->first_name }}</p>
          <p><b>Middle Name:</b> {{ $van->middle_name }}</p>
          <p><b>Surname:</b> {{ $van->sur_name }}</p>
          <p><b>Birthdate:</b> {{ $van->birthdate }}</p>
          <p><b>Marital Status:</b> {{ $van->marital_status }}</p>
          <p><b>Born in UK: </b> {{ $van->born_uk }}</p>
          <p><b>Became resident: </b> {{ $van->became_resident?$van->became_resident:'N/A' }}</p>
          <br>
          <h4 class="view-subtitle">Other vehicle</h4>
          <p><b>Use other vehicle: </b> {{ $van->use_other_vehicle?$van->use_other_vehicle:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Address</h4>
        	<p><b>Address line 1:</b> {{ $van->address_line1 }}</p>
        	<p><b>Address line 2:</b> {{ $van->address_line2?$van->address_line2:'N/A' }}</p>
        	<p><b>City:</b> {{ $van->address_city }}</p>
        	<p><b>Postdate:</b> {{ $van->address_postcode }}</p>
        	<br>
        	<h4 class="view-subtitle">Employment</h4>
        	<p><b>Status:</b> {{ $van->employment_status }}</p>
        	<p><b>Ocupation:</b> {{ $van->occupation?$van->occupation:'N/A' }}</p>
        	<p><b>Type of business:</b> {{ $van->business_type?$van->business_type:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">License</h4>
        	<p><b>License type:</b> {{ $van->license_type }} </p>
        	<p><b>Period:</b> {{ $van->license_period_held }} </p>
        	<p><b>Date obtained:</b> {{ $van->date_provitional_license ? $van->date_provitional_license : 'N/A' }} </p>
        	<p><b>License number:</b> {{ ($van->license_enter == "Yes")?$van->license_number:'N/A' }} </p>
        	<br>
        	<h4 class="view-subtitle">Conditions</h4>
        	<p><b>DVLA medical condition: </b> {{ $van->dvla_medical_condition }}</p>
        	<p><b>Additional qualification: </b> {{ $van->additional_qualifications }}</p>
        	<p><b>Obtained: </b> {{ $van->date_qualifications_obtained?$van->date_qualifications_obtained:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center"><h3>Vehicle details</h3><hr></div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Details</h4>
        	<p><b>Registration:</b> {{ $van->vehicle_registration?$van->vehicle_registration:'N/A' }}</p>
        	<p><b>Registration year:</b> {{ $van->vehicle_registration_year?$van->vehicle_registration_year:'N/A' }}</p>
        	<p><b>Apoximate value:</b> {{ $van->vehicle_aprox_value?'£ '.$van->vehicle_aprox_value:'N/A' }}</p>
        	<br>
        	<h4 class="view-subtitle">Ownership</h4>
        	<p><b>Date of purchase:</b> {{ $van->vehicle_date_purchase?$van->vehicle_date_purchase:'N/A' }}</p>
        	<p><b>Regitered keeper:</b> {{ $van->vehicle_registered_keeper?$van->vehicle_registered_keeper:'N/A' }}</p>
        	<p><b>Legal owner:</b> {{ $van->vehicle_legal_owner?$van->vehicle_legal_owner:'N/A' }}</p>
        	<p><b>Impounded with the police:</b> {{ $van->vehicle_inpounded?$van->vehicle_inpounded:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Manufacturer</h4>
        	<p><b>Manufacturer:</b> {{ $van->vehicle_manufacturer?$van->vehicle_manufacturer:'N/A' }}</p>
        	<p><b>Model:</b> {{ $van->vehicle_model?$van->vehicle_model:'N/A' }}</p>
        	<p><b>Seats:</b> {{ $van->vehicle_number_seats?$van->vehicle_number_seats:'N/A' }}</p>
        	<p><b>Doors:</b> {{ $van->vehicle_number_doors?$van->vehicle_number_doors:'N/A' }}</p>
        	<p><b>Engine size:</b> {{ $van->vehicle_engine_size?$van->vehicle_engine_size:'N/A' }}</p>
        	<p><b>Transmission:</b> {{ $van->vehicle_transmission?$van->vehicle_transmission:'N/A' }}</p>
        	<p><b>Fuel type:</b> {{ $van->vehicle_fuel?$van->vehicle_fuel:'N/A' }}</p>
        	<p><b>Body type:</b> {{ $van->vehicle_body_type?$van->vehicle_body_type:'N/A' }}</p>
        	<p><b>Roof type:</b> {{ $van->vehicle_roof_type?$van->vehicle_roof_type:'N/A' }}</p>
        	<p><b>Wheel base:</b> {{ $van->vehicle_wheel_base?$van->vehicle_wheel_base:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Other details</h4>
        	<p><b>Alarms:</b> {{ $van->vehicle_alarms?$van->vehicle_alarms:'N/A' }}</p>
        	<p><b>Imported:</b> {{ $van->vehicle_imported?$van->vehicle_imported:'N/A' }}</p>
        	<p><b>Modifications:</b> {{ $van->vehicle_modifications?$van->vehicle_modifications:'N/A' }}</p>
        	<p><b>Fitted dash cam:</b> {{ $van->vehicle_dash_cam?$van->vehicle_dash_cam:'N/A' }}</p>
        	<p><b>Engine size:</b> {{ $van->vehicle_engine_size?$van->vehicle_engine_size:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Vehicle usage</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Kept details</h4>
        	<p><b>During day:</b> {{ $van->usage_kept_day?$van->usage_kept_day:'N/A' }}</p>
        	<p><b>During night:</b> {{ $van->usage_kept_night?$van->usage_kept_night:'N/A' }}</p>
        	<p><b>Kept in the same address:</b> {{ $van->usage_kept_same_address?$van->usage_kept_same_address:'N/A' }}</p>
        	<p><b>Other address:</b> {{ $van->usage_kept_other_address?$van->usage_kept_other_address:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Other details</h4>
        	<p><b>Carriage of dangerous goods:</b> {{ $van->dangerous_goods?$van->dangerous_goods:'N/A' }}</p>
        	<p><b>Insurance declined, cancelled or special terms imposed:</b> {{ $van->drivers_insurance_imposed?$van->drivers_insurance_imposed:'N/A' }}</p>
        	<p><b>Usage:</b> {{ $van->usage?$van->usage:'N/A' }}</p>
        	<p><b>Estimated Annual Mileage:</b> {{ $van->usage_annual_milage?$van->usage_annual_milage:'N/A' }}</p>
        	<p><b>Type of business:</b> {{ $van->type_business?$van->type_business:'N/A' }}</p>
        	<p><b>Type of coverage:</b> {{ $van->type_coverage?$van->type_coverage:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">No Claim Discount</h4>
        	<p><b>Any NCD:</b> {{ $van->no_claims?$van->no_claims:'N/A' }}</p>
        	<p><b>NCD earned in the UK:</b> {{ $van->no_claims_earned_uk?$van->no_claims_earned_uk:'N/A' }}</p>
        	<p><b>Protect NDC:</b> {{ $van->no_claims_protect?$van->no_claims_protect:'N/A' }}</p>
        	<p><b>Any other NCD on private car:</b> {{ $van->any_other_ncd?$van->any_other_ncd:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Policy</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Policy details</h4>
        	<p><b>Type of coverage:</b> {{ $van->type_coverage?$van->type_coverage:'N/A' }}</p>
        	<p><b>Voluntary excess:</b> {{ $van->voluntary_excess?$van->voluntary_excess:'N/A' }}</p>
        	<p><b>How normally pay for insurance:</b> {{ $van->pay_insurance?$van->pay_insurance:'N/A' }}</p>
        	<p><b>When to start:</b> {{ $van->policy_start?$van->policy_start:'N/A' }}</p>
        </div>

        <div class="col-md-12 text-center">
        	<h3>Household</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Household details</h4>
        	<p><b>Children under 16:</b> {{ $van->children?$van->children:'N/A' }}</p>
        	<p><b>How many cars at home:</b> {{ ($van->vehicles_how_many>-1 )?$van->vehicles_how_many:'N/A' }}</p>
        	<p><b>Homeowner:</b> {{ $van->home_owner?$van->home_owner:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Business</h4>
        	<p><b>Businesss owner:</b> {{ $van->business_owner?$van->business_owner:'N/A' }}</p>
        	<p><b>Businesss type:</b> {{ $van->business?$van->business:'N/A' }}</p>
        </div>

        <div class="col-md-12 text-center">
        	<h3>Claims & convictions</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Convictions</h4>
        	<p><b>Non motoring criminal convictions:</b> {{ $van->non_motoring_convictions?$van->non_motoring_convictions:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Motor accidents or claims in the last 5 years</h3>
        	<hr>
        </div>
      	@if($van->motor_accidents==="Yes")
      		@php $i=1; @endphp
        	@foreach($acc as $accident)
      			<div class="col-md-3">
      				<h4 class="view-subtitle">{{$i}}</h4>
      				<p><b>Type:</b> {{ $accident->type?$accident->type:'N/A' }}</p>
      				<p><b>Date:</b> {{ $accident->date?$accident->date:'N/A' }}</p>
      				<p><b>Damage:</b> {{ $accident->damage?$accident->damage:'N/A' }}</p>
      				<p><b>Cost:</b> {{ $accident->cost?$accident->cost:'N/A' }}</p>
      				<p><b>Fault:</b> {{ $accident->fault?$accident->fault:'N/A' }}</p>
      				<p><b>Injuries:</b> {{ $accident->any_injuries?$accident->any_injuries:'N/A' }}</p>
				  	</div>
				  	@php $i++; @endphp
					@endforeach
				@else
				<div class="col-md-12">
					<center>No records to show.</center>
				</div>
				@endif
        <div class="col-md-12 text-center">
        	<h3>Motoring convictions, driving license endorsements or fixed penalty points withing the last 5 years</h3>
        	<hr>
        </div>
      	@if($van->motor_offences==="Yes")
      		@php $i=1; @endphp
        	@foreach($ofe as $offence)
      			<div class="col-md-3">
      				<h4 class="view-subtitle">{{$i}}</h4>
      				<p><b>Conviction code:</b> {{ $offence->conviction_code?$offence->conviction_code:'N/A' }}</p>
      				<p><b>Date of conviction:</b> {{ $offence->date_conviction?$offence->date_conviction:'N/A' }}</p>
      				<p><b>Points:</b> {{ $offence->points?$offence->points:'N/A' }}</p>
      				<p><b>Cost:</b> {{ $offence->fine_libras?$offence->fine_libras:'N/A' }}</p>
      				<p><b>Fault:</b> {{ $offence->ban_month?$offence->ban_month:'N/A' }}</p>
				  	</div>
				  	@php $i++; @endphp
					@endforeach
				@else
				<div class="col-md-12">
					<center>No records to show.</center>
				</div>
				@endif
				
				<div class="col-md-12 text-center">
        	<h3>Additional Driver (1)</h3>
        	<hr>
      	</div>
				@if($adt1->data)
        	<div class="col-md-4">
	        	<h4 class="view-subtitle">Information</h4>
	          <p><b>Title:</b> {{ $adt1->data->ca_title }}</p>
	          <p><b>First name:</b> {{ $adt1->data->ca_first_name }}</p>
	          <p><b>Middle Name:</b> {{ $adt1->data->ca_middle_name }}</p>
	          <p><b>Relationship to Proposer:</b> {{ $adt1->data->ca_relationship }}</p>
	          <p><b>Surname:</b> {{ $adt1->data->ca_sur_name }}</p>
	          <p><b>Birthdate:</b> {{ $adt1->data->ca_birthdate }}</p>
	          <p><b>Marital Status:</b> {{ $adt1->data->ca_marital_status }}</p>
	          <p><b>Born in UK: </b> {{ $adt1->data->ca_born_uk }}</p>
	          <p><b>Became resident: </b> {{ $adt1->data->ca_uk_resident }}</p>
	        </div>
	        <div class="col-md-4">
	        	<h4 class="view-subtitle">Employment</h4>
	        	<p><b>Status:</b> {{ $adt1->data->ca_employment_status }}</p>
	        	<p><b>Ocupation:</b> {{ $adt1->data->ca_employed_occupation?$adt1->data->ca_employed_occupation:'N/A' }}</p>
	        	<p><b>Type of business:</b> {{ $adt1->data->ca_employed_business?$adt1->data->ca_employed_business:'N/A' }}</p>
	        	<br>
	        	<h4 class="view-subtitle"></h4>

	        </div>
	        <div class="col-md-4">
	        	<h4 class="view-subtitle">License</h4>
	        	<p><b>License type:</b> {{ $adt1->data->ca_type_license }} </p>
	        	<p><b>Period:</b> {{ $adt1->data->ca_period_license }} </p>
	        	<p><b>Date obtained:</b> {{ $adt1->data->ca_date_provitional_license ? $adt1->data->ca_date_provitional_license : 'N/A' }} </p>
	        	<p><b>License number:</b> {{ ($adt1->data->ca_license_enter == "Yes")?$adt1->data->ca_license_number:'N/A' }} </p>
	        	<br>
	        	<h4 class="view-subtitle">Conditions</h4>
	        	<p><b>DVLA medical condition: </b> {{ $adt1->data->ca_dvla_medical }}</p>
	        </div>
	        <div class="col-md-12 text-center">
	        	<h3>Additional Driver (1)<br>Claims & convictions</h3>
	        	<hr>
	        </div>
	        <div class="col-md-4">
	        	<h4 class="view-subtitle">Convictions</h4>
	        	<p><b>Non motoring criminal convictions:</b> {{ $adt1->data->ca_non_motoring_convictions?$adt1->data->ca_non_motoring_convictions:'N/A' }}</p>
	        </div>
	        <div class="col-md-12 text-center">
	        	<h3>Additional Driver (1)<br>Motor accidents or claims in the last 5 years</h3>
	        	<hr>
	        </div>
	        @if($adt1->data->ca_motor_accidents==="Yes")
	      		@php $i=1; @endphp
	        	@foreach($adt1->acc as $accident)
	      			<div class="col-md-3">
	      				<h4 class="view-subtitle">{{$i}}</h4>
	      				<p><b>Type:</b> {{ $accident->type?$accident->type:'N/A' }}</p>
	      				<p><b>Date:</b> {{ $accident->date?$accident->date:'N/A' }}</p>
	      				<p><b>Damage:</b> {{ $accident->damage?$accident->damage:'N/A' }}</p>
	      				<p><b>Cost:</b> {{ $accident->cost?$accident->cost:'N/A' }}</p>
	      				<p><b>Fault:</b> {{ $accident->fault?$accident->fault:'N/A' }}</p>
	      				<p><b>Injuries:</b> {{ $accident->any_injuries?$accident->any_injuries:'N/A' }}</p>
					  	</div>
					  	@php $i++; @endphp
						@endforeach
					@else
					<div class="col-md-12">
						<center>No records to show.</center>
					</div>
					@endif
					<div class="col-md-12 text-center">
	        	<h3>Additional Driver (1)<br>Motoring convictions, driving license endorsements or fixed penalty points withing the last 5 years</h3>
	        	<hr>
	        </div>
	      	@if($adt1->data->ca_motor_offences==="Yes")
	      		@php $i=1; @endphp
	        	@foreach($adt1->ofe as $offence)
	      			<div class="col-md-3">
	      				<h4 class="view-subtitle">{{$i}}</h4>
	      				<p><b>Conviction code:</b> {{ $offence->conviction_code?$offence->conviction_code:'N/A' }}</p>
	      				<p><b>Date of conviction:</b> {{ $offence->date_conviction?$offence->date_conviction:'N/A' }}</p>
	      				<p><b>Points:</b> {{ $offence->points?$offence->points:'N/A' }}</p>
	      				<p><b>Cost:</b> {{ $offence->fine_libras?$offence->fine_libras:'N/A' }}</p>
	      				<p><b>Fault:</b> {{ $offence->ban_month?$offence->ban_month:'N/A' }}</p>
					  	</div>
					  	@php $i++; @endphp
						@endforeach
					@else
					<div class="col-md-12">
						<center>No records to show.</center>
					</div>
					@endif

					<!--=============================|| ADDITIONAL DIVER 2 ||============================================-->
					@if($adt2->data)
						<div class="col-md-12 text-center">
		        	<h3>Additional Driver (2)</h3>
		        	<hr>
	        	</div>
	        	<div class="col-md-4">
		        	<h4 class="view-subtitle">Information</h4>
		          <p><b>Title:</b> {{ $adt2->data->ca_title }}</p>
		          <p><b>First name:</b> {{ $adt2->data->ca_first_name }}</p>
		          <p><b>Middle Name:</b> {{ $adt2->data->ca_middle_name }}</p>
		          <p><b>Relationship to Proposer:</b> {{ $adt2->data->ca_relationship }}</p>
		          <p><b>Surname:</b> {{ $adt2->data->ca_sur_name }}</p>
		          <p><b>Birthdate:</b> {{ $adt2->data->ca_birthdate }}</p>
		          <p><b>Marital Status:</b> {{ $adt2->data->ca_marital_status }}</p>
		          <p><b>Born in UK: </b> {{ $adt2->data->ca_born_uk }}</p>
		          <p><b>Became resident: </b> {{ $adt2->data->ca_uk_resident ? $adt2->data->ca_uk_resident : 'N/A' }}</p>
		        </div>
		        <div class="col-md-4">
		        	<h4 class="view-subtitle">Employment</h4>
		        	<p><b>Status:</b> {{ $adt2->data->ca_employment_status }}</p>
		        	<p><b>Ocupation:</b> {{ $adt2->data->ca_employed_occupation?$adt2->data->ca_employed_occupation:'N/A' }}</p>
		        	<p><b>Type of business:</b> {{ $adt2->data->ca_employed_business?$adt2->data->ca_employed_business:'N/A' }}</p>
		        	<br>
		        	<h4 class="view-subtitle"></h4>

		        </div>
		        <div class="col-md-4">
		        	<h4 class="view-subtitle">License</h4>
		        	<p><b>License type:</b> {{ $adt2->data->ca_type_license }} </p>
		        	<p><b>Period:</b> {{ $adt2->data->ca_period_license }} </p>
		        	<p><b>Date obtained:</b> {{ $adt2->data->ca_date_provitional_license ? $adt2->data->ca_date_provitional_license : 'N/A' }} </p>
		        	<p><b>License number:</b> {{ ($adt2->data->ca_license_enter == "Yes")?$adt2->data->ca_license_number:'N/A' }} </p>
		        	<br>
		        	<h4 class="view-subtitle">Conditions</h4>
		        	<p><b>DVLA medical condition: </b> {{ $adt2->data->ca_dvla_medical ? $adt2->data->ca_dvla_medical : 'N/A' }}</p>
		        </div>
		        <div class="col-md-12 text-center">
		        	<h3>Additional Driver (2)<br>Claims & convictions</h3>
		        	<hr>
		        </div>
		        <div class="col-md-4">
		        	<h4 class="view-subtitle">Convictions</h4>
		        	<p><b>Non motoring criminal convictions:</b> {{ $adt2->data->ca_non_motoring_convictions?$adt2->data->ca_non_motoring_convictions:'N/A' }}</p>
		        </div>
		        <div class="col-md-12 text-center">
		        	<h3>Additional Driver (2)<br>Motor accidents or claims in the last 5 years</h3>
		        	<hr>
		        </div>
		        @if($adt2->data->ca_motor_accidents==="Yes")
		      		@php $i=1; @endphp
		        	@foreach($adt2->acc as $accident)
		      			<div class="col-md-3">
		      				<h4 class="view-subtitle">{{$i}}</h4>
		      				<p><b>Type:</b> {{ $accident->type?$accident->type:'N/A' }}</p>
		      				<p><b>Date:</b> {{ $accident->date?$accident->date:'N/A' }}</p>
		      				<p><b>Damage:</b> {{ $accident->damage?$accident->damage:'N/A' }}</p>
		      				<p><b>Cost:</b> {{ $accident->cost?$accident->cost:'N/A' }}</p>
		      				<p><b>Fault:</b> {{ $accident->fault?$accident->fault:'N/A' }}</p>
		      				<p><b>Injuries:</b> {{ $accident->any_injuries?$accident->any_injuries:'N/A' }}</p>
						  	</div>
						  	@php $i++; @endphp
							@endforeach
						@else
						<div class="col-md-12">
							<center>No records to show.</center>
						</div>
						@endif
						<div class="col-md-12 text-center">
		        	<h3>Additional Driver (2)<br>Motoring convictions, driving license endorsements or fixed penalty points withing the last 5 years</h3>
		        	<hr>
		        </div>
		      	@if($adt2->data->ca_motor_offences==="Yes")
		      		@php $i=1; @endphp
		        	@foreach($adt2->ofe as $offence)
		      			<div class="col-md-3">
		      				<h4 class="view-subtitle">{{$i}}</h4>
		      				<p><b>Conviction code:</b> {{ $offence->conviction_code?$offence->conviction_code:'N/A' }}</p>
		      				<p><b>Date of conviction:</b> {{ $offence->date_conviction?$offence->date_conviction:'N/A' }}</p>
		      				<p><b>Points:</b> {{ $offence->points?$offence->points:'N/A' }}</p>
		      				<p><b>Cost:</b> {{ $offence->fine_libras?$offence->fine_libras:'N/A' }}</p>
		      				<p><b>Fault:</b> {{ $offence->ban_month?$offence->ban_month:'N/A' }}</p>
						  	</div>
						  	@php $i++; @endphp
							@endforeach
						@else
						<div class="col-md-12">
							<center>No records to show.</center>
						</div>
						@endif
					@endif
					<!--ADDITIONA DRIVER 1-->
				@else
					<div class="col-md-12">
						<center>No additional drivers</center>
					</div>
				@endif
				<!--==========================================================================-->
      </div>
    </section>
  </div>
@endsection