@extends('layouts.app')

@section('title','Business - '.config('app.name'))
@section('header','Business Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li><a href="{{ url('admin/business') }}"> Business</a></li>
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
		        <h3 class="box-title"><i class="fa fa-file-text-o"></i> {{$business->title." ".$business->first_name." ".$business->sur_name}}</h3>
		        <span class="pull-right">{{ $business->created_at }}</span>
		      </div>
		      <div class="box-body">
		      	<h2 class="text-center">Personal Info</h2>
		      	 <hr class="separador">
		      	 <div class="content">
		      	 	<div class="row">
		      	 		<div class="col-md-4">
			      	 		<strong>Name</strong> {{$business->title." ".$business->first_name." ".$business->sur_name}} <br><br>
			      	 		<strong>Date of Birth: </strong> {{$business->birthdate}}<br><br>
			      	 		<strong>Mobile / Telephone Number: </strong> {{$business->mobile_telephone}}
		      	 		</div>
		      	 		<div class="col-md-4">
			      	 		<strong>What's your employment status?: </strong> {{$business->employment_status}}<br><br>
			      	 		<strong>If Employed/Self Employed, what is your occupation: </strong> {{$business->occupation}}
		      	 		</div>
		      	 		<div class="col-md-4">
			      	 		<strong>If Employed/Self Employed, what type of business: </strong> {{$business->business_type}}<br><br>
			      	 		<strong>Email address: </strong> {{$business->email}}
		      	 		</div>
		      	 	</div>
		      	 	<h2 class="text-center">Business / Trade Address</h2>
		      	 	 <hr class="separador">
		      	 	  <div class="row">
		      	 	  	<div class="col-md-4">
		      	 	  		<strong>Address: </strong> {{$business->house_number}}<br><br>
		      	 	  		<strong>Year established at this address since: </strong> {{$business->stablished_address}}
		      	 	  	</div>
		      	 	  	<div class="col-md-4">
		      	 	  		<strong>1st line of address: </strong> {{$business->house_first_line}}
		      	 	  	</div>
		      	 	  	<div class="col-md-4">
		      	 	  		<strong>Postcode: </strong> {{$business->postcode}}
		      	 	  	</div>
		      	 	  </div>
		      	 	  <h2 class="text-center">Correspondence Address (If Different)</h2>
		      	 	 <hr class="separador">
		      	 	  <div class="row">
		      	 	  	<div class="col-md-4">
		      	 	  		<strong>Door #: </strong> {{$business->house_number_correspondence?$business->house_number_correspondence:'N/A'}}
		      	 	  	</div>
		      	 	  	<div class="col-md-4">
		      	 	  		<strong>1st line of address: </strong> {{$business->house_address_correspondence?$business->house_address_correspondence:'N/A'}}
		      	 	  	</div>
		      	 	  	<div class="col-md-4">
		      	 	  		<strong>Postcode: </strong> {{$business->postcode_correspondence?$business->postcode_correspondence:'N/A'}}
		      	 	  	</div>
		      	 	  </div>
		      	 	  <h2 class="text-center">Company Detals</h2>
		      	 	   <hr class="separador">
		      	 	    <div class="row">
		      	 	    	<div class="col-md-4">
		      	 	    		<strong>Current/Previous Insurer: </strong> {{$business->current_insurer?$business->current_insurer:'N/A'}}<br><br>
		      	 	    		<strong>Company Status: </strong> {{$business->company_status?$business->company_status:'N/A'}}<br><br>
		      	 	    		<strong>Business, Company or Partnership Name: </strong> {{$business->bussiness_name?$business->bussiness_name:'N/A'}}
		      	 	    	</div>
		      	 	    	<div class="col-md-4">
		      	 	    		<strong>Business Description: </strong> {{$business->business_description?$business->business_description:'N/A'}}<br><br>
		      	 	    		<strong>If other please specify the business type: </strong> {{$business->specify_business?$business->specify_business:'N/A'}}<br><br>
		      	 	    		<strong>What date Was your business established?: </strong> {{$business->date_bussiness?$business->date_bussiness:'N/A'}}
		      	 	    	</div>
		      	 	    	<div class="col-md-4">
		      	 	    		<strong>Total number of employees including partners, principals and directors: </strong> {{$business->total_employees?$business->total_employees:'N/A'}}<br><br>
		      	 	    		<strong>What is your Estimated Annual Turnover?: </strong> {{$business->stimated_annual_turnover?$business->stimated_annual_turnover:'N/A'}}<br><br>
		      	 	    		<strong>What is your Estimated Annual Wages?: </strong> {{$business->stimated_annual_wages?$business->stimated_annual_wages:'N/A'}}
		      	 	    	</div>
		      	 	    </div>
		      	 	    <h2 class="text-center">Premises</h2>
		      	 	     <hr class="separador">
		      	 	      <div class="row">
		      	 	      	<div class="col-md-4">
		      	 	      		<strong>Where is your premises located?: </strong> {{$business->premises_located?$business->premises_located:'N/A'}}<br><br>
		      	 	      		<strong>What are the opening hours for your business?:  </strong> {{$business->opening_hours_business?$business->opening_hours_business:'N/A'}}<br><br>
		      	 	      		<strong>Any CCTV camera inside this premises: </strong> {{$business->any_cctv?$business->any_cctv:'N/A'}}<br><br>
		      	 	      		<strong>Is this premises entitled as a listed building: </strong> {{$business->premises_building?$business->premises_building:'N/A'}}<br><br>
		      	 	      		<strong>The roof of this premises, is it flat or slope: </strong> {{$business->roof_slope?$business->roof_slope:'N/A'}}<br><br>
		      	 	      		<strong>The floor, is it made of concrete or wood: </strong> {{$business->floor_wood?$business->floor_wood:'N/A'}}
		      	 	      	</div>
		      	 	      	<div class="col-md-4">
		      	 	      		<strong>The walls, are they made of bricks or wood: </strong> {{$business->walls_wood?$business->walls_wood:'N/A'}}<br><br>
		      	 	      		<strong>The back door, is it secured enough, any shutters or grilled: </strong> {{$business->doors_shutters?$business->doors_shutters:'N/A'}}<br><br>
		      	 	      		<strong>When is the premises occupied?: </strong> {{$business->premises_occupied?$business->premises_occupied:'N/A'}}<br><br>
		      	 	      		<strong>Does the property have a roller shutter which covers all ground floor exposed glazing?: </strong> {{$business->roller_shutter?$business->roller_shutter:'N/A'}}<br><br>
		      	 	      		<strong>Does the property have grilles fitted which cover all ground floor exposed glazing?: </strong> {{$business->grilles_fitted?$business->grilles_fitted:'N/A'}}
		      	 	      		
		      	 	      	</div>
		      	 	      	<div class="col-md-4">
		      	 	      		<strong>If yes, Type or name/brand of the alarm?: </strong> {{$business->type_alarm?$business->type_alarm:'N/A'}}<br><br>
		      	 	      		<strong>Does the alarm notify you along with police or only you?: </strong> {{$business->alarm_notify?$business->alarm_notify:'N/A'}}<br><br>
		      	 	      		<strong>Is the alarm being checked regularly by any organization?: </strong> {{$business->checked_organization?$business->checked_organization:'N/A'}}<br><br>
		      	 	      		<strong>Do you have use of kitchen in the premises for commercial use?: </strong> {{$business->premises_comercial?$business->premises_comercial:'N/A'}}<br><br>
		      	 	      		<strong>Do you have any sort of alarm in the premises?</strong> {{$business->alarm_premises?$business->alarm_premises:'N/A'}}
		      	 	      	</div>
		      	 	      </div><br><br>
		      	 	      <hr>
		      	 	      <div class="row">
		      	 	      	<div class="col-md-3">
		      	 	      		<strong>If you are running a: Café, Take Away and Restaurant: </strong> {{$business->if_running}}
		      	 	      	</div>
		      	 	      </div>
		      	 	      <h2 class="text-center">Cover Details</h2>
		      	 	       <hr class="separador">

		      	 </div>
		      </div>
		    </div>
		  </div>
    </div>
  </div>
@endsection