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
  	<section>
  		<a class="btn btn-flat btn-default" href="{{ url('admin/homes') }}"><i class="fa fa-reply"></i> Back</a>
  	</section>
  	<section class="perfil">
	    <div class="row">
        <div class="col-md-12">
          <h2 class="page-header" style="margin-top:0!important">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            {{$homes->title." ".$homes->first_name." ".$homes->middle_name." ".$homes->surname}}
            <small class="pull-right">Registered: {{ $homes->created_at }}&nbsp;&nbsp;&nbsp;</small>
          </h2>
        </div>
        <div class="col-md-12 text-center">
        	<h3>Contact Information</h3>
        	<hr class="separador">
        </div>
				<div class="col-md-4">
					<h4 class="view-subtitle">Details</h4>
					<p><b>Email</b>  {{$homes->email}}</p>
					<p><b>Contact number</b>  {{$homes->contact_number}}
				</div>

	    	<div class="col-md-12">
					<h3 class="text-center">Personal Info</h3>
					<hr class="separador">
				</div>
				<div class="col-md-4">
        	<h4 class="view-subtitle">Information</h4>
        	<p><b>Title:</b>  {{$homes->first_name}}</p>
					<p><b>First name:</b>  {{$homes->first_name}}</p>
		     	<p><b>Middle name: </b>  {{$homes->middle_name?$homes->middle_name:'N/A'}}</p>
	      	<p><b>Surname: </b>   {{$homes->sur_name}}</p>
		      <p><b>Date of Birth: </b> {{$homes->birthdate}}</p>
				</div>
				<div class="col-md-4">
        	<h4 class="view-subtitle">Employment</h4>					
					<p><b>Employment status: </b> {{$homes->employment_status}}</p>
					<p><b>Occupation: </b> {{$homes->occupation?$homes->occupation:'N/A'}}</p>
					<p><b>Business type: </b> {{$homes->business_type?$homes->business_type:'N/A'}}</p>
				</div>
				<div class="col-md-4">
					<h4 class="view-subtitle">Other details</h4>
					<p><b>Marital status: </b> {{$homes->marital_status}}</p>
					<p><b>Born in UK:</b>  {{$homes->born_uk}}</p>
					<p><b>Became resident:</b>  {{$homes->became_resident?$homes->became_resident:'N/A'}}</p>
				</div>
				<div class="col-md-12">
					<h3 class="text-center">Property information</h3>
					<hr class="separador">
				</div>
		  	<div class="col-md-4">
		  		<h4 class="view-subtitle">Address</h4>
		  		<p><b>Poperty number:  </b>  {{$homes->property_number}}</p>
		  		<p><b>Property line address:  </b>  {{$homes->property_first_line}}</p>
		  		<p><b>Postcode:  </b>  {{$homes->property_postcode}}</p>
		  		<p><b>Type of property:  </b>  {{$homes->type_property?$homes->type_property:'N/A'}}</p>
		  		<p><b>Are there any trees taller than 10m within 5m of the property?:  </b> {{$homes->taller_within_property?$homes->taller_within_property:'N/A'}}</p>
		  		<p><b>Children under 18: </b> {{$homes->many_children_property?$homes->many_children_property:'N/A'}} </p>
		  	</div>
		  	<div class="col-md-4">
		  		<h4 class="view-subtitle">Details</h4>
		  		<p><b>Estimated built year:  </b>  {{$homes->stimate_built?$homes->stimate_built:'N/A'}}</p>
		  		<p><b>Living rooms:  </b>  {{$homes->number_living_rooms?$homes->number_living_rooms:'N/A'}}</p>
		  		<p><b>Kitchens:  </b>  {{$homes->number_kitchens?$homes->number_kitchens:'N/A'}}</p>
		  		<p><b>Bathrooms:  </b>  {{$homes->number_bathrooms?$homes->number_bathrooms:'N/A'}}</p>
		  		<p><b>Bedrooms:  </b> {{$homes->number_bedrooms?$homes->number_bedrooms:'N/A'}} </p>
		  		<p><b>Approximate % of flat roof:  </b>  {{$homes->approximate_roof?$homes->approximate_roof:'N/A'}}</p>
		  	</div>
		  	<div class="col-md-4">
		  		<h4 class="view-subtitle">Ownership</h4>
		  		<p><b>Do you own this property:   </b>  {{$homes->own_property?$homes->own_property:'N/A'}}</p>
		  		<p><b>Who lives in the property:  </b>  {{$homes->lives_property?$homes->lives_property:'N/A'}}</p>
		  		<p><b>Years lived at the property:  </b>  {{$homes->many_years_property?$homes->many_years_property:'N/A'}}</p>
		  		<p><b>Adults living in the property:  </b> {{$homes->many_adults_property?$homes->many_adults_property:'N/A'}} </p>
		  	</div>
		  	<div class="col-md-12">
				  <h2 class="text-center">Other Details</h2>
				   <hr class="separador">
				</div>
	    	<div class="col-md-4">
	    		<h4 class="view-subtitle">Details</h4>
	    		<p><b>Usually occupied:</b> {{$homes->property_usually_occupied?$homes->property_usually_occupied:'N/A'}}</p>
	    		<p><b>Days in a row left empty:</b> {{$homes->many_days_row_property?$homes->many_days_row_property:'N/A'}}</p>
	    		<p><b>Anybody smoke: </b> {{$homes->anybody_smoke?$homes->anybody_smoke:'N/A'}}</p>
	    		<p><b>Business use: </b>  {{$homes->property_business?$homes->property_business:'N/A'}} </p>
	    	</div>
	    	<div class="col-md-4">
	    		<h4 class="view-subtitle">Security</h4>
	    		<p><b>Alarm:  </b> {{$homes->property_alarm?$homes->property_alarm:'N/A'}}</p>
	    		<p><b>Lock in main door: </b>  {{$homes->lock_main_door?$homes->lock_main_door:'N/A'}}</p>
	    		<p><b>Days in a row left empty: </b> {{$homes->lock_external_doors?$homes->lock_external_doors:'N/A'}}</p>
	    		<p><b>Do all ground floor windows have key operated locks: </b>  {{$homes->key_operated_locks}}</p>
	    		<p><b>Working smoke alarms: </b>  {{$homes->smoke_alarms_property?$homes->smoke_alarms_property:'N/A'}}</p>
	    	</div>
	    	<div class="col-md-4">
	    		<h4 class="view-subtitle">Other</h4>
	    		<p><b>Rebuild value of the property: </b>  {{$homes->rebuild_property?$homes->rebuild_property:'N/A'}}</p>
	    		<p><b>Accidental damage cover for buildings: </b> {{$homes->accidental_damage_buildings?$homes->accidental_damage_buildings:'N/A'}}</p>
	    		<p><b>How many years NCB do you have buildings insurance: </b>  {{$homes->ncb_buildings_insurance?$homes->ncb_buildings_insurance:'N/A'}} </p>
	    	</div>
	    	<div class="col-md-12">
		    	<h2 class="text-center">Values Details</h2>
		    	<hr class="separador">
		    </div>
      	<div class="col-md-4">
      		<h4 class="view-subtitle">Content</h4>
	      	<p><b>Contents value of the property: </b> {{$homes->content_value_property?$homes->content_value_property:'N/A'}}</p>
	      	<p><b>Any specific items worth over £1000: </b> {{$homes->specific_items?$homes->specific_items:'N/A'}} </p>
      	</div>
      	<div class="col-md-4">
      		<h4 class="view-subtitle">Cover</h4>
	      	<p><b>Cover away from home: </b> {{$homes->like_away_home?$homes->like_away_home:'N/A'}}</p>
	      	<p><b>Accidental damage contents: </b> {{$homes->accidentals_damage_contents?$homes->accidentals_damage_contents:'N/A'}} </p>
      	</div>
      	<div class="col-md-4">
      		<h4 class="view-subtitle">Other</h4>
	      	<p><b>How many years NCB do you have buildings insurance: </b> {{$homes->ncb_content_insurance}}</p>
	      	<p><b>Cover start: </b> {{$homes->like_cover_start?$homes->like_cover_start:'N/A'}} </p>
      	</div>

      	<div class="col-md-12 text-center">
      		<h3>Property losses damage: </h3>
      		<hr class="separador">
	      	@if($homes->property_losses_damage == "Yes")
	      		@foreach($losses as $los)
						<div class="col-md-3">
							<p><b>How much was the claim for?: </b>    {{$los->much_was_claim}}</p>
							<p><b>How many years NCB do you have buildings insurance: </b>    {{$los->type_claim}}</p>
							<p><b>What date was the claim?: </b>    {{$los->date_claim}}</p>
							<p><b>Has the claim been settled?: </b>    {{$los->claim_settled}}
						</div>
	      		@endforeach
	      	@else
						<div class="col-md-12">
							<center>No records to show.</center><br>
						</div>
	      	@endif
      	</div>

      	<div class="col-md-12">
		      <h3 class="text-center">Assumptions property</h3>
		      <hr class="separador">
		    </div>
       	<div class="col-md-4">
       		<p><b>Is built with brick walls?: </b>  {{$homes->built_blick_walls?$homes->built_blick_walls:'N/A'}}</p>
       		<p><b>Is more than 400 meters away from water: </b>  {{$homes->meter_from_water?'Yes':'N/A'}}</p>
       		<p><b>Has a roof made of slate or tile: </b>  {{$homes->roof_made_slate?'Yes':'N/A'}}</p>
       		<p><b>Is not a listed property: </b>  {{$homes->listed_property?'Yes':'N/A'}}
       	</div>
       	<div class="col-md-4">
       		<p><b>Is not for sale: </b>  {{$homes->not_for_sale?'Yes':'N/A'}}</p>
       		<p><b>Has never shown signs of heave, landslip or subsidence: </b>  {{$homes->shown_subsidence?'Yes':'N/A'}}</p>
       		<p><b>Is your main residence: </b>  {{$homes->main_residence?'Yes':'N/A'}}</p>
       		<p><b>Has not had underpinning or structural support: </b>  {{$homes->underpinning_structural_support?'Yes':'N/A'}}
       	</div>
	     	<div class="col-md-4">
	     		<p><b>Is not currently undergoing building work</b>  {{$homes->undergoing_building?'Yes':'N/A'}}</p>
	     		<p><b>Has never suffered from flooding</b>  {{$homes->suffered_from_flooding?'Yes':'N/A'}}</p>
	     		<p><b>Has no significant cracks on the external walls</b>  {{$homes->significant_external_walls?'Yes':'N/A'}}
	     	</div>
	    </div>
	  </section>
  </div>
@endsection