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
  	<section>
  		<a class="btn btn-flat btn-default" href="{{ url('admin/cars') }}"><i class="fa fa-reply"></i> Back</a>
  	</section>
  	<section class="perfil">
    	<div class="row">
    		<div class="col-md-12">
    			<h2 class="page-header" style="margin-top:0!important">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            {{$business->title." ".$business->first_name." ".$business->sur_name}}
            <small class="pull-right">Registered: {{ $business->created_at }}&nbsp;&nbsp;&nbsp;</small>
          </h2>
        </div>
        <div class="col-md-12">
	      	<h3 class="text-center">Contact Information</h3>
	      	<hr class="separador">
		    </div>
		    <div class="col-md-4">
		    	<h4 class="view-subtitle">Details</h4>
    	 		<p><b>Mobile / Telephone Number: </b> <a href="tel:{{$business->mobile_telephone}}">{{$business->mobile_telephone}}</a></p>
    	 		<p><b>Email address: </b> <a href="mailto:{{$business->email}}">{{$business->email}}</a></p>
       		<p><b>Additional comments:  </b> {{$business->additional_comments?$business->additional_comments:'N/A'}}</p>
		    </div>
        <div class="col-md-12">
	      	<h3 class="text-center">Personal Information</h3>
	      	<hr class="separador">
		    </div>
  	 		<div class="col-md-4">
  	 			<h4 class="view-subtitle">Information</h4>
  	 			<p><b>Title:</b> {{$business->title}}</p>
    	 		<p><b>Fisrt name:</b> {{$business->first_name}} </p>
    	 		<p><b>Middle name</b> {{$business->middle_name?$business->middle_name:'N/A'}} </p>
    	 		<p><b>Surname: </b> {{$business->sur_name}} </p>
    	 		<p><b>Date of Birth: </b> {{$business->birthdate}}</p>
  	 		</div>
  	 		<div class="col-md-4">
  	 			<h4 class="view-subtitle">Employment</h4>
    	 		<p><b>What's your employment status: </b> {{$business->employment_status}}</p>
    	 		<p><b>Occupation: </b> {{$business->occupation?$business->occupation:'N/A'}}</p>
    	 		<p><b>Type of business: </b> {{$business->business_type?$business->business_type:'N/A'}}</p>
  	 		</div>
  	 		<div class="col-md-12">
	    	 	<h3 class="text-center">Business / Trade Address</h3>
	    	 	<hr class="separador">
	    	</div>
	 	  	<div class="col-md-4">
	 	  		<h4 class="view-subtitle">Address</h4>
	 	  		<p><b>Door n#: </b> {{$business->house_number}}</p>
	 	  		<p><b>1st line of address: </b> {{$business->house_first_line}}
	 	  		<p><b>Postcode: </b> {{$business->postcode}}</p>
	 	  		<p><b>Year established at this address since: </b> {{$business->stablished_address}}</p>
	 	  	</div>
	 	  	<div class="col-md-4">
	 	  		<h4 class="view-subtitle">Correspondence Address (If Different)</h4>
	 	  		<p><b>Door #: </b> {{$business->house_number_correspondence?$business->house_number_correspondence:'N/A'}}</p>
	 	  		<p><b>1st line of address: </b> {{$business->house_address_correspondence?$business->house_address_correspondence:'N/A'}}</p>
	 	  		<p><b>Postcode: </b> {{$business->postcode_correspondence?$business->postcode_correspondence:'N/A'}}</p>
	 	  	</div>
	 	  	<div class="col-md-12">
    	 	  <h3 class="text-center">Company Details</h3>
    	 	  <hr class="separador">
    	 	</div>
 	    	<div class="col-md-4">
 	    		<h4 class="view-subtitle">Details</h4>
 	    		<p><b>Current/Previous Insurer: </b> {{$business->current_insurer?$business->current_insurer:'N/A'}}</p>
 	    		<p><b>Company Status: </b> {{$business->company_status?$business->company_status:'N/A'}}</p>
 	    		<p><b>Business, Company or Partnership Name: </b> {{$business->bussiness_name?$business->bussiness_name:'N/A'}}</p>
 	    		<p><b>Business Description: </b> {{$business->business_description?$business->business_description:'N/A'}}</p>
 	    		<p><b>Specify the business type: </b> {{$business->specify_business?$business->specify_business:'N/A'}}</p>
 	    	</div>
 	    	<div class="col-md-4">
 	    		<h4 class="view-subtitle">Other</h4>
 	    		<p><b>Business established date: </b> {{$business->date_bussiness?$business->date_bussiness:'N/A'}}
 	    		<p><b>Total number of employees including partners, principals and directors: </b> {{$business->total_employees?$business->total_employees:'N/A'}}</p>
 	    		<p><b>Estimated Annual Turnover: </b> {{$business->stimated_annual_turnover?$business->stimated_annual_turnover:'N/A'}}</p>
 	    		<p><b>Estimated Annual Wages: </b> {{$business->stimated_annual_wages?$business->stimated_annual_wages:'N/A'}}</p>
 	    	</div>
 	    	<div class="col-md-12">
  	 	    <h3 class="text-center">Premises</h3>
  	 	    <hr class="separador">
  	 	  </div>
      	<div class="col-md-4">
      		<p><b>Where is the premises located: </b> {{$business->premises_located?$business->premises_located:'N/A'}}</p>
      		<p><b>Opening hours:  </b> {{$business->opening_hours_business?$business->opening_hours_business:'N/A'}}</p>
      		<p><b>Any CCTV camera inside this premises: </b> {{$business->any_cctv?$business->any_cctv:'N/A'}}</p>
      		<p><b>Premises entitled as a listed building: </b> {{$business->premises_building?$business->premises_building:'N/A'}}</p>
      		<p><b>The roof of this premises, is it flat or slope: </b> {{$business->roof_slope?$business->roof_slope:'N/A'}}</p>
      		<p><b>The floor, is it made of concrete or wood: </b> {{$business->floor_wood?$business->floor_wood:'N/A'}}</p>
      	</div>
      	<div class="col-md-4">
      		<p><b>The walls, are they made of bricks or wood: </b> {{$business->walls_wood?$business->walls_wood:'N/A'}}</p>
      		<p><b>The back door, is it secured enough, any shutters or grilled: </b> {{$business->doors_shutters?$business->doors_shutters:'N/A'}}</p>
      		<p><b>When is the premises occupied?: </b> {{$business->premises_occupied?$business->premises_occupied:'N/A'}}</p>
      		<p><b>Does the property have a roller shutter which covers all ground floor exposed glazing?: </b> {{$business->roller_shutter?$business->roller_shutter:'N/A'}}</p>
      		<p><b>Does the property have grilles fitted which cover all ground floor exposed glazing?: </b> {{$business->grilles_fitted?$business->grilles_fitted:'N/A'}}</p>		
      	</div>
      	<div class="col-md-4">
      		<p><b>If yes, Type or name/brand of the alarm?: </b> {{$business->type_alarm?$business->type_alarm:'N/A'}}</p>
      		<p><b>Does the alarm notify you along with police or only you?: </b> {{$business->alarm_notify?$business->alarm_notify:'N/A'}}</p>
      		<p><b>Is the alarm being checked regularly by any organization?: </b> {{$business->checked_organization?$business->checked_organization:'N/A'}}</p>
      		<p><b>Do you have use of kitchen in the premises for commercial use?: </b> {{$business->premises_comercial?$business->premises_comercial:'N/A'}}</p>
      		<p><b>Do you have any sort of alarm in the premises?</b> {{$business->alarm_premises?$business->alarm_premises:'N/A'}}</p>
      	</div>

      	<div class="col-md-12">
      		<h3 class="text-center">Café, Take Away and Restaurant</h3>
      		<hr class="separador">
      	</div>
      	<div class="col-md-12">
      		<p><b>Running a: Café, Take Away and Restaurant: </b> {{$business->if_running}}</p>
      		<hr>
      	</div>
    		@if($business->if_running == "Yes")
    			<div class="col-md-12">
    				<h4 class="view-subtitle">Details</h4>
	      	@foreach($business_details as $bu)
 	      		<p><b>Percentage of collection: </b> {{$bu->porcentage_collection?$bu->porcentage_collection:'N/A'}}%</p>
 	      		<p><b>How many persons could be dined at a time?: </b> {{$bu->many_persons?$bu->many_persons:'N/A'}}</p>
 	      		<p><b>How often the kitchen extractor fan is cleaned?: </b>{{$bu->often_kitchen?$bu->often_kitchen:'N/A'}}</p>
 	      		<p><b>Is your fryer a standing fryer or just a small basket fryer?:</b> {{$bu->basket_fryer?$bu->basket_fryer:'N/A'}}</p>
 	      		<p><b>Maximum how many liters of oil the fryer can occupy?:</b> {{$bu->maximum_occupy?$bu->maximum_occupy:'N/A'}}</p>
		     	@endforeach
		     	</div>
		    @endif
		    <div class="col-md-12">
	 	      <h3 class="text-center">Cover Details</h3>
	 	      <hr class="separador">
	 	    </div>
      	<div class="col-md-4">
        	<p><b>Is the Premises’ Owned / Leased / Rented by you?: </b> {{$business->premises_owned_rented?$business->premises_owned_rented:'N/A'}}</p>
        	<p><b>Do you require buildings cover?: </b> {{$business->require_building_cover?$business->require_building_cover:'N/A'}}</p>
      	</div>
      	<div class="col-md-4">
        	<p><b>What’s the maximum cash amount to be covered during the business hours?: </b> {{$business->maximum_cash?$business->maximum_cash:'N/A'}}</p>
        	<p><b>Do you want any cash sum to be covered outside the premises?:  </b> {{$business->cash_premises?$business->cash_premises:'N/A'}}</p>
      	</div>
      	<div class="col-md-12">
	        <h3 class="text-center">Stocks to be insured</h3>
	        <hr class="separador">
	      </div>

       	<div class="col-md-4">
         	<p><b>Cigarettes, Cigars and tabacco sum insured amount: </b> {{$business->cigarettes_insured?$business->cigarettes_insured:'N/A'}}</p>
         	<p><b>Wines, Fortified Wines and Spirits sum insured amount</b> {{$business->wines_insured?$business->wines_insured:'N/A'}}</p>
       	</div>
       	<div class="col-md-4">
         	<p><b>Frozen items to be insured</b> {{$business->frozen_insured?$business->frozen_insured:'N/A'}}</p>
         	<p><b>Other Stock (other than target stock shown above) to be insured</b> {{$business->other_stock?$business->other_stock:'N/A'}}</p>
       	</div>
       	<div class="col-md-4">
         	<p><b>Contents (Fixtures & Furniture’s) sum insured amount</b> {{$business->contents_insured?$business->contents_insured:'N/A'}}</p>
         	<p><b>Contents (If any Till, Computers & other electrical Equipment’s) sum insured amount</b> {{$business->contents_other_insured?$business->contents_other_insured:'N/A'}}</p>
       	</div>
				<div class="col-md-12">
          <h3 class="text-center">Claim Summary</h3>
          <hr class="separador">
        </div>
       	<div class="col-md-4">
       	  <p><b>Have you had any losses or incidents that have or could have given rise to claims (whether insured or not) in the past 5 years in connection with your current, or previous, business? </b></p>
       	  <center>{{$business->have_losses_accidents}}</center>
       	</div>
       	<div class="col-md-12">
	        <h3 class="text-center">Employer Reference Number Details</h3>
	        <hr class="separador">
	      </div>
       	<div class="col-md-4">
       		<h4 class="view-subtitle">Details</h4>
       	  <p><b>Are you exempt from paying PAYE?:  </b> {{$business->paying_paye}}</p>
       	  <p><b>Please provide your Employer Reference Number: </b> {{$business->employer_reference?$business->employer_reference:'N/A'}}</p>
       	</div>
       	<div class="col-md-12">
          <h3 class="text-center">Policy details</h3>
          <hr class="separador">
        </div>
       	<div class="col-md-4">
       		<h4 class="view-subtitle">Details</h4>
       	  <p><b>When would you like the cover to start: </b> {{$business->policy_start?$business->policy_start:'N/A'}}</p>
       	</div>
		  </div>
    </section>
  </div>
@endsection