@extends('layouts.front')

@section('title','Home Quote - '.config('app.name'))

@section('content')

<div class="container">
	<div class="pad"></div>

	<div class="row">
    <div class="col-xs-12">
      <h1 class="main-title">Home Insurance Quote</h1>
    </div>
    @include('partials.flash')
    <div class="col-xs-12">
      <form action="{{ route('home_register') }}" method="POST">
         {{ csrf_field() }}
        <legend class="legend">Personal Information</legend>
        <br>
        <div class="row">
          <div class="col-md-12">
            <label>Name <span class="required">*</span></label>
          </div>
          <div class="form-group col-md-2">
            <select class="form-control" id="title" name="title" required>
              <option value="Mr.">Mr.</option>
              <option value="Mrs.">Mrs.</option>
              <option value="Miss">Miss</option>
            </select>
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <input id="first_name" class="form-control" type="text" name="first_name" placeholder="First name" required>
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <input id="middle_name" class="form-control" type="text" name="middle_name" placeholder="Middle name">
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <input id="sur_name" class="form-control" type="text" name="sur_name" placeholder="Surname" required>
          </div>
        </div><!--Row-->

        <div class="row">
          <div class="form-group col-xs-12 col-md-2">
            <label for="birthdate">Date of Birth <span class="required">*</span></label>
            <div class="input-group">
              <input id="birthdate" class="form-control datepicker" type="text" name="birthdate" placeholder="DD-MM-YYYY" required>
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            </div>
          </div>
          <div class="form-group col-xs-12 col-md-2">
            <label for="marital_status">Marital Status <span class="required">*</span></label>
            <select id="marital_status" class="form-control" name="marital_status" required>
              <option value="" selected>Please Select</option>
              <option value="Single">Single</option>
              <option value="Married">Married</option>
              <option value="Divorced">Divorced</option>
              <option value="Widow">Widow</option>
            </select>
          </div>
        </div><!--Row-->

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="employment_status">What's your employment status? <span class="required">*</span></label>
	          <select id="employment_status" class="form-control" name="employment_status" required>
	            <option value="" selected>Please Select</option>
	            <option value="Employed">Employed</option>
	            <option value="Unemployed">Unemployed</option>
	            <option value="Self-Employed">Self-Employed</option>
	            <option value="House Person">House Person</option>
	            <option value="Education">Education</option>
	            <option value="Retired">Retired</option>
	            <option value="Not employed due to illness/disability">Not employed due to illness/disability</option>                       
	          </select>
	        </div>
	      </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-4">
            <label for="occupation">If Employed/Self Employed, what is your occupation</label>
            <input id="occupation" class="form-control" type="text" name="occupation" readonly>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-md-4">
            <label for="business_type">If Employed/Self Employed, what type of business</label>
            <input id="business_type" class="form-control" type="text" name="business_type" readonly>
          </div>
        </div><!--Row-->

        <div class="row">
          <div class="col-xs-12 col-md-3">
            <div class="form-group">
              <label>Are you born in the UK? <span class="required">*</span></label>
              <div class="col-xs-6 col-md-6">
                <input type="radio" name="born_uk" value="Yes" checked required>
                <label class="form-check-label">Yes</label>
              </div>
              <div class="col-xs-6 col-md-6">
                <input type="radio" name="born_uk" value="No" required>
                <label class="form-check-label">No</label>
              </div>
            </div>
          </div>
          <div class="form-group col-xs-12 col-md-3">
            <label for="became_resident">If no, When did you became a UK resident? </label>
            <div class="input-group">
              <input id="became_resident" class="form-control datepicker" type="text" name="became_resident" placeholder="DD-MM-YYYY" readonly>
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            </div>
          </div>
        </div><!---Row-->

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="email">Email address</label>
            <input id="email" class="form-control" type="email" name="email" >
          </div>
        </div>
        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="contact_number">Contact Number <span class="required">*</span></label>
            <input id="contact_number" class="form-control" type="text" name="contact_number"  required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <label>Property Address <span class="required">*</span></label>
          </div>
          <div class="form-group col-xs-12 col-md-3">
            <input id="property_number" class="form-control" type="text" name="property_number" placeholder="Door n#" required>
          </div>
        </div>
				<div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <input id="property_first_line" class="form-control" type="text" name="property_first_line" placeholder="1st line of address" required>
          </div>
        </div>
       	<div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <input id="property_postcode" class="form-control" type="text" name="property_postcode" placeholder="Postcode" required>
          </div>
        </div><!--Row-->

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="type_property">Type of property</label>
	          <select id="type_property" class="form-control" name="type_property">
              <option value="" selected>Please Select</option>
              <option value="Semi Detached">Semi Detached</option>
              <option value="Detached">Detached</option>
              <option value="Terraced">Terraced</option>
              <option value="End Terrace">End Terrace</option>
              <option value="Flat">Flat</option>
              <option value="Bungalow">Bungalow</option>
              <option value="Town House">Town House</option>
              <option value="Other">Other</option>    
	          </select>
	        </div>
	      </div>

	      <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="stimate_built">Estimated year property built</label>
            <input id="stimate_built" class="form-control" type="number" min="1" step="1" max="9999" name="stimate_built" >
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="number_living_rooms">Number of living rooms</label>
            <input id="number_living_rooms" class="form-control" type="number" min="1" step="1" max="20" name="number_living_rooms" >
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="number_kitchens">Number of Kitchens</label>
            <input id="number_kitchens" class="form-control" type="number" min="1" step="1" max="20" name="number_kitchens" >
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="number_bathrooms">Number of Bathrooms</label>
            <input id="number_bathrooms" class="form-control" type="number" min="1" step="1" max="20" name="number_bathrooms" >
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="number_bedrooms">Number of Bedrooms</label>
            <input id="number_bedrooms" class="form-control" type="number" min="1" step="1" max="20" name="number_bedrooms" >
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <label>Are there any trees taller than 10m within 5m of the property?</label>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="taller_within_property" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="taller_within_property" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="approximate_roof">Approximate % of flat roof</label>
	          <select id="approximate_roof" class="form-control" name="approximate_roof">
              <option value="" selected>Please Select</option>
              <option value="None">None</option>
              <option value="Less than 20%">Less than 20%</option>
              <option value="Less than 40%">Less than 40%</option>
              <option value="Less than 50%">Less than 50%</option>
              <option value="More than 50%">More than 50%</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="own_property">Do you own this property <span class="required">*</span></label>
	          <select id="own_property" class="form-control" name="own_property" required>
              <option value="" selected>Please Select</option>
              <option value="Yes(mortgaged)">Yes (mortgaged)</option>
              <option value="Yes (own outright)">Yes (own outright)</option>
              <option value="Renting(council)">Renting (council)</option>
              <option value="Renting (private)">Renting (private)</option>
              <option value="Housing Association">Housing Association</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="lives_property">Who lives in the property <span class="required">*</span></label>
	          <select id="lives_property" class="form-control" name="lives_property" required>
              <option value="" selected>Please Select</option>
              <option value="Unoccupied">Unoccupied</option>
              <option value="Policyholder and family">Policyholder and family</option>
              <option value="Policyholder and lodgers">Policyholder and lodgers</option>
              <option value="Policyholder only">Policyholder only</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="many_years_property">How many years have they lived at the property</label>
            <input id="many_years_property" class="form-control" type="number" min="1" step="1" max="500" name="many_years_property" >
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="many_adults_property">How many adults live in the property</label>
            <input id="many_adults_property" class="form-control" type="number" min="1" step="1" max="99" name="many_adults_property" >
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="many_children_property">How many children under the age of 18 live in the property</label>
            <input id="many_children_property" class="form-control" type="number" min="1" step="1" max="99" name="many_children_property">
          </div>
        </div>

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="property_usually_occupied">When is the property usually occupied</label>
	          <select id="property_usually_occupied" class="form-control" name="property_usually_occupied">
              <option value="" selected>Please Select</option>
              <option value="Day and night">Day and night</option>
              <option value="Only day">Only day</option>
              <option value="Only night">Only night</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="many_days_row_property">For how many days in a row is the property left empty (e.g. holidays)</label>
	          <select id="many_days_row_property" class="form-control" name="many_days_row_property">
              <option value="" selected>Please Select</option>
              <option value="Less than 14">Less than 14</option>
              <option value="Less than 30">Less than 30</option>
              <option value="Only night">Only night</option>
              <option vlaue="More than 60 days">More than 60 days</option>
	          </select>
	        </div>
	      </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
            	<div class="co-md-12">
              	<label>Does anybody in the property smoke?</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="anybody_smoke" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="anybody_smoke" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

	      <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
            	<div class="col-md-12">
              	<label>Is the property ever used for business use</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="property_business" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="property_business" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

	      <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="property_alarm">Does the property have an alarm</label>
	          <select id="property_alarm" class="form-control" name="property_alarm">
              <option value="" selected>Please Select</option>
              <option value="Yes  bells only">Yes  bells only</option>
              <option value="Yes  Maintained by NACOSS or NSI annually">Yes  Maintained by NACOSS or NSI annually</option>
              <option value="No">No</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="lock_main_door">What lock is fitted to your main door </label>
	          <select id="lock_main_door" class="form-control" name="lock_main_door">
              <option value="" selected>Please Select</option>
              <option value="5 lever mortice deadlock">5 lever mortice deadlock</option>
              <option value="Key operated multi point lock">Key operated multi point lock</option>
              <option value="Rim lock">Rim lock</option>
              <option value="Other lock">Other lock</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="lock_external_doors">For how many days in a row is the property left empty (e.g. holidays)</label>
	          <select id="lock_external_doors" class="form-control" name="lock_external_doors">
              <option value="" selected="">Please Select</option>
              <option value="No other external doors">No other external doors</option>
              <option value="5 lever mortice deadlock">5 lever mortice deadlock</option>
              <option value="Key operated multi point lock">Key operated multi point lock</option>
              <option value="Rim lock">Rim lock</option>
              <option value="Other lock">Other lock</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <label>Do all ground floor windows have key operated locks</label>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="key_operated_locks" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="key_operated_locks" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="smoke_alarms_property">How many working smoke alarms are there in the property</label>
            <input id="smoke_alarms_property" class="form-control" type="number" min="1" step="1" max="99" name="smoke_alarms_property" >
          </div>
        </div>

        <div class="row">
          <div class="form-group col-xs-12 col-md-3">
            <label for="rebuild_property">Rebuild value of the property</label>
            <input id="rebuild_property" class="form-control" type="number" min="1" step="1" max="99" name="rebuild_property" >
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
              <label>Would you like accidental damage cover for buildings</label>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="accidental_damage_buildings" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="accidental_damage_buildings" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="ncb_buildings_insurance">How many years NCB do you have buildings insurance</label>
	          <select id="ncb_buildings_insurance" class="form-control" name="ncb_buildings_insurance">
              <option value="" selected>Please Select</option>
              <option value="Never had building insurance">Never had building insurance</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="more">more</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
	      	<div class="form-group col-xs-12 col-md-4">
	      		<label for="content_value_property">Contents value of the property: (including fixtures, furniture, utensils)</label>
	      		<textarea id="content_value_property" class="form-control" name="content_value_property" maxlength="190"></textarea>
	      	</div>
	      </div>

	      <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
            	<div class="col-md-12">
              	<label>Any specific items worth over £1000</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="specific_items" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="specific_items" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
            	<div class="col-md-12">
              	<label>Would you like cover away from home</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="like_away_home" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="like_away_home" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
            	<div class="col-md-12">
              	<label>Would you like accidental damage cover for contents</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="accidentals_damage_contents" value="Yes">
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="accidentals_damage_contents" value="No" checked>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
	        <div class="form-group col-xs-12 col-md-4">
	          <label for="ncb_content_insurance">How many years NCB do you have buildings insurance</label>
	          <select id="ncb_content_insurance" class="form-control" name="ncb_content_insurance">
              <option value="" selected="">Please Select</option>
              <option value="Never had building insurance">Never had building insurance</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="more">more</option>
	          </select>
	        </div>
	      </div>

	      <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="form-group">
            	<div class="col-md-12">
              	<label>In the past 5 years, have you or anyone living at the property made any home insurance claims or
              		suffered any losses or damage, whether insured or not <span class="required">*</span>
              	</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="property_losses_damage" value="Yes" required>
                <label>Yes</label>
              </div>
              <div class="col-xs-12 col-md-3">
                <input type="radio" name="property_losses_damage" value="No" checked required>
                <label>No</label>
              </div>
            </div>
          </div>
        </div>

        <fieldset id="insurance-history" style="display:none" disabled>
        	<div class="row">
        		<div class="col-md-10 col-md-offset-1">
        			<legend class="legend">Your Insurance History</legend>
        			<div class="row">
			          <div class="form-group col-xs-12 col-md-3">
			            <label for="much_was_claim">How much was the claim for?</label>
			            <input id="much_was_claim" class="form-control" type="number" min="1" step="1" name="much_was_claim">
			          </div>
			        </div>

			        <div class="row">
				        <div class="form-group col-xs-12 col-md-4">
				          <label for="type_claim">How many years NCB do you have buildings insurance <span class="required">*</span></label>
				          <select id="type_claim" class="form-control" name="type_claim" required>
                    <option value="" selected="">Please Select</option>
                    <option value="Buildings">Buildings</option>
                    <option value="Contents">Contents</option>
				          </select>
				        </div>
				      </div>

				      <div class="row">
			          <div class="form-group col-xs-12 col-md-3">
			            <label for="date_claim">What date was the claim?</label>
			            <input id="date_claim" class="form-control" type="text" name="date_claim" >
			          </div>
			        </div>

			        <div class="row">
			          <div class="col-xs-12 col-md-4">
			            <div class="form-group">
			            	<div class="col-md-12">
			              	<label>Has the claim been settled?</label>
			              </div>
			              <div class="col-xs-12 col-md-3">
			                <input type="radio" name="claim_settled" value="Yes">
			                <label>Yes</label>
			              </div>
			              <div class="col-xs-12 col-md-3">
			                <input type="radio" name="claim_settled" value="No">
			                <label>No</label>
			              </div>
			            </div>
			          </div>
			        </div>
			      </div>
        	</div>
        </fieldset>

        <div class="row">
        	<div class="form-group col-xs-12 col-md-2">
            <label for="like_cover_start">When would you like the cover to start </label>
            <div class="input-group">
              <input id="like_cover_start" class="form-control datepicker" type="text" name="like_cover_start" placeholder="DD-MM-YYYY">
              <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            </div>
          </div>
        </div>

        <legend class="legend">Assumptions bellow are correct: (input tick boxes what would be pre-ticked)</legend>
        <div class="row">
        	<div class="col-md-8 col-md-offset-1">
        		<h4>The Property</h4>
        		<hr>

        		<div class="">
              <label>Is built with brick walls?
              <input name="built_blick_walls" checked type="checkbox">
              </label>
              <br>
              <label>Is more than 400 meters away from water
              <input name="meter_from_water" checked type="checkbox">
              </label>
              <br>
              <label>Has a roof made of slate or tile
              <input name="roof_made_slate" checked type="checkbox">
              </label>
              <br>
              <label>Is not a listed property
              <input name="listed_property" checked type="checkbox">
              </label>
              <br>
              <label>Is not for sale
              <input name="not_for_sale" checked type="checkbox">
              </label>
              <br>
              <label>Has never shown signs of heave, landslip or subsidence
              <input name="shown_subsidence" checked type="checkbox">
              </label>
              <br>
              <label>Is your main residence
              <input name="main_residence" checked type="checkbox">
              </label>
              <br>
              <label>Has not had underpinning or structural support
              <input name="underpinning_structural_support" checked type="checkbox">
              </label>
              <br>
              <label>Is not currently undergoing building work
              <input name="undergoing_building" checked type="checkbox">
              </label>
              <br>
              <label>Has never suffered from flooding
              <input name="suffered_from_flooding" checked type="checkbox">
              </label>
              <br>
              <label>Has no significant cracks on the external walls
              	<input name="significant_external_walls" checked type="checkbox">
              </label>
        		</div>
        	</div>
        </div>

      	<div class="row">
          <div class="col-md-4 col-md-offset-4">
            <div class="alert alert-danger" style="display:none">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong class="text-center">You must complete all required fields</strong> 
            </div>
            <br>
            <button type="submit" class="btn btn-block btn-submit b-submit">Submit Quote</button>
          </div>
        </div>
      	<br><br><br>
      </form>
    </div>
  </div>
</div>



@endsection

@section('scripts')

	<script type="text/javascript">
	  $(document).ready(function(){
	    $('.datepicker').datepicker({
        autoclose: true,
	      format: "dd-mm-yyyy",
	      endDate: "today",
	      enableOnReadonly: false
	    });

      $("input[name='born_uk']").click(function(){
        var bool = (this.value !== "No");
        $('#became_resident').prop({'readonly':bool,'required':(!bool)}).val('');
      });
      
      $('#employment_status').change(function(){
        var bool = (this.value == "Employed" || this.value == "Self-Employed");
        $('#business_type,#occupation').prop({'readonly':!bool,'required':bool}).val('');
      });

			$('input[name="date_claim"]').datepicker({
        autoclose: true,
		    format: "mm-yyyy",
		    startView: "years", 
		    minViewMode: "months"
	    });

	    $("input[name='property_losses_damage']").click(function(){
        var bool = (this.value === "Yes");
        if(bool){
          $('#insurance-history').show().prop('disabled',!bool);
        }else{
          $('#insurance-history').hide().prop('disabled',!bool);
        }
      });

      //VALIDAR
      $('.b-submit').click(function(e){
        e.preventDefault();
        var btn    = $(this);
        var form   = btn.closest('form');
        var action = form.attr('action');
        var bar    = form.find('.progress');
        var alert  = form.find('.alert');

        alert.hide();
        btn.button('loading');
        bar.show();

        //Validacion
        var fields = form.find('input:visible,select:visible').filter('[required]').length;
        form.find('input:visible,select:visible').filter('[required]').each(function(){
          var regex = $(this).attr('pattern');
          var val   = $(this).val();
          if(val == ""){
            $(this).closest('.form-group').addClass('has-error');
            if(!$(this).closest('.form-group').find('.help-block').length){
              $(this).closest('.form-group').append($('<p class="help-block">This field  is required</p>'));
            }
          }
          else{
            if(val.match(regex)){
              $(this).closest('.form-group').removeClass('has-error');
              $(this).closest('.form-group').find('.help-block').remove();
              fields = fields-1;
            }else{
              $(this).closest('.form-group').addClass('has-error');
              if(!$(this).closest('.form-group').find('.help-block').length){
                $(this).closest('.form-group').append($('<p class="help-block">This field  is required</p>'));
              }
            }
          }
        });

        if(fields!=0){
          alert.removeClass('alert-success').addClass('alert-danger');
          alert.find('#msj').text('You must complete all required fields.');
          bar.hide();
          btn.button('reset');
          alert.show().delay(7000).hide('slow');
        }else{
          form.submit();
        }
      })


	  });//Ready
	</script>
@endsection