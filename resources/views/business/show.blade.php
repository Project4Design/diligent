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
			      	 		<strong>Email address: </strong> <a href="mailto:{{$business->email}}">{{$business->email}}</a>
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
		      	 	      	@if($business->if_running == "Yes")
		      	 	      		@foreach($business_details as $bu)
		      	 	      	<div class="col-md-4">
		      	 	      		<h3>Café, Take Away and Restaurant Details</h3>
		      	 	      		<hr>
			      	 	      		<strong>Percentage of collection: </strong> {{$bu->porcentage_collection?$bu->porcentage_collection:'N/A'}}%<br><br>
			      	 	      		<strong>How many persons could be dined at a time?: </strong> {{$bu->many_persons?$bu->many_persons:'N/A'}}<br><br>
			      	 	      		<strong>How often the kitchen extractor fan is cleaned?: </strong>{{$bu->often_kitchen?$bu->often_kitchen:'N/A'}}<br><br>
			      	 	      		<strong>Is your fryer a standing fryer or just a small basket fryer?</strong> {{$bu->basket_fryer?$bu->basket_fryer:'N/A'}}<br><br>
			      	 	      		<strong>Maximum how many liters of oil the fryer can occupy?</strong> {{$bu->maximum_occupy?$bu->maximum_occupy:'N/A'}}
		      	 	      	</div>	
		      	 	      </div>
		      	 	           @endforeach
		      	 	      @endif
		      	 	      <h2 class="text-center">Cover Details</h2>
		      	 	       <hr class="separador">
		      	 	        <div class="row">
		      	 	        	<div class="col-md-4">
			      	 	        	<strong>Is the Premises’ Owned / Leased / Rented by you?: </strong> {{$business->premises_owned_rented?$business->premises_owned_rented:'N/A'}}<br><br>
			      	 	        	<strong>Do you require buildings cover?: </strong> {{$business->require_building_cover?$business->require_building_cover:'N/A'}}
		      	 	        	</div>
		      	 	        	<div class="col-md-4">
			      	 	        	<strong>What’s the maximum cash amount to be covered during the business hours?: </strong> {{$business->maximum_cash?$business->maximum_cash:'N/A'}}<br><br>
			      	 	        	<strong>Do you want any cash sum to be covered outside the premises?:  </strong> {{$business->cash_premises?$business->cash_premises:'N/A'}}
		      	 	        	</div>
		      	 	        </div>
		      	 	        <h2 class="text-center">Stocks to be insured</h2>
		      	 	         <hr class="separador">
		      	 	           <div class="row">
			      	 	           	<div class="col-md-4">
				      	 	           	<strong>Cigarettes, Cigars and tabacco sum insured amount: </strong> {{$business->cigarettes_insured?$business->cigarettes_insured:'N/A'}}<br><br>
				      	 	           	<strong>Wines, Fortified Wines and Spirits sum insured amount</strong> {{$business->wines_insured?$business->wines_insured:'N/A'}}
			      	 	           	</div>
			      	 	           	<div class="col-md-4">
				      	 	           	<strong>Frozen items to be insured</strong> {{$business->frozen_insured?$business->frozen_insured:'N/A'}}<br><br>
				      	 	           	<strong>Other Stock (other than target stock shown above) to be insured</strong> {{$business->other_stock?$business->other_stock:'N/A'}}
			      	 	           	</div>
			      	 	           	<div class="col-md-4">
				      	 	           	<strong>Contents (Fixtures & Furniture’s) sum insured amount</strong> {{$business->contents_insured?$business->contents_insured:'N/A'}}<br><br>
				      	 	           	<strong>Contents (If any Till, Computers & other electrical Equipment’s) sum insured amount</strong> {{$business->contents_other_insured?$business->contents_other_insured:'N/A'}}
			      	 	           	</div>
		      	 	           </div>
		      	 	           <h2 class="text-center">Claim Summary</h2>
		      	 	            <hr class="separador">
		      	 	             <div class="row">
		      	 	             	<div class="col-md-4 col-md-offset-4">
		      	 	             	   <strong>Have you had any losses or incidents that have or could have given rise to claims (whether insured or not) in the past 5 years in connection with your current, or previous, business? </strong><br>
		      	 	             	    <center>{{$business->have_losses_accidents}}</center>
		      	 	             	</div>
		      	 	             </div>
		      	 	             <h2 class="text-center">Employer Reference Number Details</h2>
		      	 	              <hr class="separador">
		      	 	               <div class="row">
			      	 	               	<div class="col-md-4">
			      	 	               	  <strong>Are you exempt from paying PAYE?:  </strong> {{$business->paying_paye}}
			      	 	               	</div>
			      	 	               	<div class="col-md-4">
			      	 	               	  <strong>Please provide your Employer Reference Number: </strong> {{$business->employer_reference?$business->employer_reference:'N/A'}}
			      	 	               	</div>
		      	 	               </div>
		      	 	               <h2 class="text-center">Policy Start Date</h2>
		      	 	                <hr class="separador">
		      	 	                 <div class="row">
		      	 	                 	<div class="col-md-4">
		      	 	                 	   <strong>When would you like the cover to start: </strong> {{$business->policy_start?$business->policy_start:'N/A'}}
		      	 	                 	</div>
		      	 	                 	<strong>Additional comments:  </strong> {{$business->additional_comments?$business->additional_comments:'N/A'}}
		      	 	                 </div>

		      	 </div>
		      </div>
		    </div>
		  </div>
    </div>
  </div>
@endsection