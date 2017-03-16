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
		      	 	    		<strong>Business Description</strong> {{$business->business_description?$business->business_description:'N/A'}}<br><br>
		      	 	    		<strong>If other please specify the business type</strong> {{$business->specify_business?$business->specify_business:'N/A'}}<br><br>
		      	 	    		<strong>What date Was your business established?</strong> {{$business->date_bussiness?$business->date_bussiness:'N/A'}}
		      	 	    	</div>
		      	 	    	<div class="col-md-4">
		      	 	    		<strong>Total number of employees including partners, principals and directors</strong> {{$business->total_employees?$business->total_employees:'N/A'}}<br><br>
		      	 	    		<strong>What is your Estimated Annual Turnover?</strong> {{$business->stimated_annual_turnover?$business->stimated_annual_turnover:'N/A'}}<br><br>
		      	 	    		<strong>What is your Estimated Annual Wages?</strong> {{$business->stimated_annual_wages?$business->stimated_annual_wages:'N/A'}}
		      	 	    	</div>
		      	 	    </div>
		      	 	    <h2 class="text-center">Premises</h2>
		      	 	     <hr class="separador">

		      	 </div>
		      </div>
		    </div>
		  </div>
    </div>
  </div>
@endsection