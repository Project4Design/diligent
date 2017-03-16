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
  	<section>
  		<a class="btn btn-flat btn-default" href="{{ url('admin/cars') }}"><i class="fa fa-reply"></i> Back</a>
  	</section>
  	<section class="perfil">
      <div class="row">
        <div class="col-md-12">
          <h2 class="page-header" style="margin-top:0!important">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            {{$car->title." ".$car->first_name." ".$car->middle_name." ".$car->sur_name}}
            <small class="pull-right">Registered: {{ $car->created_at }}&nbsp;&nbsp;&nbsp;</small>
          </h2>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Contact Information</h3>
        	<hr>
        </div>
      	<div class="col-md-4">
      		<h4 class="view-subtitle">Details</h4>
      		<p><b>Contact via:</b> {{ $car->contact_via }}</p>
      		<p><b>Email:</b> {!! $car->email ? "<a href='mailto:$car->email'>".$car->email."</a>":'N/A' !!}</p>
      		<p><b>Phone:</b> {!! $car->phone ? "<a href='tel:$car->phone'>".$car->phone."</a>":'N/A' !!}</p>
      		<p><b>Mobile:</b> {!! $car->mobile ? "<a href='tel:$car->mobile'>".$car->mobile."</a>":'N/A' !!}</p>
      	</div>
      	<div class="col-md-4">
      		<h4 class="view-subtitle">Heard from us</h4>
      		<p><b>Heard from us:</b> {{ $car->heard_from_us }}</p>
      		<p><b>Referrer:</b> {{ $car->referrer ?$car->referrer:'N/A' }}</p>
      		<p><b>Comments:</b> {{ $car->phone ?$car->comments:'N/A' }}</p>
      	</div>
        <div class="col-md-12 text-center">
        	<h3>Personal Information</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Information</h4>
          <p><b>Title:</b> {{ $car->title }}</p>
          <p><b>First name:</b> {{ $car->first_name }}</p>
          <p><b>Middle Name:</b> {{ $car->middle_name }}</p>
          <p><b>Surname:</b> {{ $car->sur_name }}</p>
          <p><b>Birthdate:</b> {{ $car->birthdate }}</p>
          <p><b>Marital Status:</b> {{ $car->marital_status }}</p>
          <p><b>Born in UK: </b> {{ $car->born_uk }}</p>
          <p><b>Became resident: </b> {{ $car->became_resident?$car->became_resident:'N/A' }}</p>
          <br>
          <h4 class="view-subtitle">Other vehicle</h4>
          <p><b>Use other vehicle: </b> {{ $car->use_other_vehicle?$car->use_other_vehicle:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Address</h4>
        	<p><b>Address line 1:</b> {{ $car->address_line1 }}</p>
        	<p><b>Address line 2:</b> {{ $car->address_line2?$car->address_line2:'N/A' }}</p>
        	<p><b>City:</b> {{ $car->address_city }}</p>
        	<p><b>Postdate:</b> {{ $car->address_postcode }}</p>
        	<br>
        	<h4 class="view-subtitle">Employment</h4>
        	<p><b>Status:</b> {{ $car->employment_status }}</p>
        	<p><b>Ocupation:</b> {{ $car->occupation?$car->occupation:'N/A' }}</p>
        	<p><b>Type of business:</b> {{ $car->business_type?$car->business_type:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">License</h4>
        	<p><b>License type:</b> {{ $car->license_type }} </p>
        	<p><b>Period:</b> {{ $car->license_period_held }} </p>
        	<p><b>Date obtained:</b> {{ $car->date_provitional_license ? $car->date_provitional_license : 'N/A' }} </p>
        	<p><b>License number:</b> {{ ($car->license_enter == "Yes")?$car->license_number:'N/A' }} </p>
        	<br>
        	<h4 class="view-subtitle">Conditions</h4>
        	<p><b>DVLA medical condition: </b> {{ $car->dvla_medical_condition }}</p>
        	<p><b>Additional qualification: </b> {{ $car->additional_qualifications }}</p>
        	<p><b>Obtained: </b> {{ $car->date_qualifications_obtained?$car->date_qualifications_obtained:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center"><h3>Vehicle details</h3><hr></div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Details</h4>
        	<p><b>Registration:</b> {{ $car->vehicle_registration?$car->vehicle_registration:'N/A' }}</p>
        	<p><b>Registration year:</b> {{ $car->vehicle_registration_year?$car->vehicle_registration_year:'N/A' }}</p>
        	<p><b>Apoximate value:</b> {{ $car->vehicle_aprox_value?'£ '.$car->vehicle_aprox_value:'N/A' }}</p>
        	<br>
        	<h4 class="view-subtitle">Ownership</h4>
        	<p><b>Date of purchase:</b> {{ $car->vehicle_date_purchase?$car->vehicle_date_purchase:'N/A' }}</p>
        	<p><b>Regitered keeper:</b> {{ $car->vehicle_registered_keeper?$car->vehicle_registered_keeper:'N/A' }}</p>
        	<p><b>Legal owner:</b> {{ $car->vehicle_legal_owner?$car->vehicle_legal_owner:'N/A' }}</p>
        	<p><b>Impounded with the police:</b> {{ $car->vehicle_impounded?$car->vehicle_impounded:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Manufacturer</h4>
        	<p><b>Manufacturer:</b> {{ $car->vehicle_manufacturer?$car->vehicle_manufacturer:'N/A' }}</p>
        	<p><b>Model:</b> {{ $car->vehicle_model?$car->vehicle_model:'N/A' }}</p>
        	<p><b>Seats:</b> {{ $car->vehicle_number_seats?$car->vehicle_number_seats:'N/A' }}</p>
        	<p><b>Doors:</b> {{ $car->vehicle_number_doors?$car->vehicle_number_doors:'N/A' }}</p>
        	<p><b>Engine size:</b> {{ $car->vehicle_engine_size?$car->vehicle_engine_size:'N/A' }}</p>
        	<p><b>Transmission:</b> {{ $car->vehicle_transmission?$car->vehicle_transmission:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Other details</h4>
        	<p><b>Alarms:</b> {{ $car->vehicle_alarms?$car->vehicle_alarms:'N/A' }}</p>
        	<p><b>Imported:</b> {{ $car->vehicle_imported?$car->vehicle_imported:'N/A' }}</p>
        	<p><b>Modifications:</b> {{ $car->vehicle_modifications?$car->vehicle_modifications:'N/A' }}</p>
        	<p><b>Fitted dash cam:</b> {{ $car->vehicle_dash_cam?$car->vehicle_dash_cam:'N/A' }}</p>
        	<p><b>Engine size:</b> {{ $car->vehicle_engine_size?$car->vehicle_engine_size:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Vehicle usage</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Kept details</h4>
        	<p><b>During day:</b> {{ $car->usage_kept_day?$car->usage_kept_day:'N/A' }}</p>
        	<p><b>During night:</b> {{ $car->usage_kept_night?$car->usage_kept_night:'N/A' }}</p>
        	<p><b>Kept in the same address:</b> {{ $car->usage_kept_same_address?$car->usage_kept_same_address:'N/A' }}</p>
        	<p><b>Other address:</b> {{ $car->usage_kept_other_address?$car->usage_kept_other_address:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Other details</h4>
        	<p><b>Insurance declined, cancelled or special terms imposed:</b> {{ $car->drivers_insurance_imposed?$car->drivers_insurance_imposed:'N/A' }}</p>
        	<p><b>Usage:</b> {{ $car->usage?$car->usage:'N/A' }}</p>
        	<p><b>Estimated Annual Mileage:</b> {{ $car->usage_annual_milage?$car->usage_annual_milage:'N/A' }}</p>
        	<p><b>Type of coverage:</b> {{ $car->type_coverage?$car->type_coverage:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">No Claim Discount</h4>
        	<p><b>Any NCD:</b> {{ $car->no_claims?$car->no_claims:'N/A' }}</p>
        	<p><b>NCD earned in the UK:</b> {{ $car->no_claims_earned_uk?$car->no_claims_earned_uk:'N/A' }}</p>
        	<p><b>Protect NDC:</b> {{ $car->no_claims_protect?$car->no_claims_protect:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Policy</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Policy details</h4>
        	<p><b>Type of coverage:</b> {{ $car->type_coverage?$car->type_coverage:'N/A' }}</p>
        	<p><b>Voluntary excess:</b> {{ $car->voluntary_excess?$car->voluntary_excess:'N/A' }}</p>
        	<p><b>How normally pay for insurance:</b> {{ $car->pay_insurance?$car->pay_insurance:'N/A' }}</p>
        	<p><b>When to start:</b> {{ $car->policy_start?$car->policy_start:'N/A' }}</p>
        </div>

        <div class="col-md-12 text-center">
        	<h3>Household</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Household details</h4>
        	<p><b>Children under 16:</b> {{ $car->children?$car->children:'N/A' }}</p>
        	<p><b>How many cars at home:</b> {{ ($car->vehicles_how_many>-1 )?$car->vehicles_how_many:'N/A' }}</p>
        	<p><b>Homeowner:</b> {{ $car->home_owner?$car->home_owner:'N/A' }}</p>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Business</h4>
        	<p><b>Businesss owner:</b> {{ $car->business_owner?$car->business_owner:'N/A' }}</p>
        	<p><b>Businesss type:</b> {{ $car->business?$car->business:'N/A' }}</p>
        </div>

        <div class="col-md-12 text-center">
        	<h3>Claims & convictions</h3>
        	<hr>
        </div>
        <div class="col-md-4">
        	<h4 class="view-subtitle">Convictions</h4>
        	<p><b>Non motoring criminal convictions:</b> {{ $car->non_motoring_convictions?$car->non_motoring_convictions:'N/A' }}</p>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Motor accidents or claims in the last 5 years</h3>
        	<hr>
        </div>
      	@if($car->motor_accidents==="Yes")
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
      	@if($car->motor_offences==="Yes")
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
		          <p><b>Became resident: </b> {{ $adt2->data->ca_uk_resident }}</p>
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
		        	<p><b>DVLA medical condition: </b> {{ $adt2->data->ca_dvla_medical }}</p>
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
		        	<h3>Additional Driver (2)<br>Motoring convictions, driving license endorsements or fixed penalty points withing the last 5 years</h3>
		        	<hr>
		        </div>
		      	@if($adt2->data->ca_motor_offences==="Yes")
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