@extends('layouts.front')

@section('title','Accidents quote - '.config('app.name'))

@section('content')
<div class="pad"></div>
<div class="container">

  <div class="row">
   <form action="{{ route('register_accidents') }}" method="POST">
    {{ csrf_field() }}
      <h1 class="main-title">Accidents Insurance Quote</h1>
      @if ( session()->has('message') )
    <div class="col-md-5 col-md-offset-4">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><center>{{session()->get('message') }}</center></strong>
      </div>
    </div>
    @endif
       
    	<div class="col-xs-12">
				<div class="col-xs-12">
	        <legend class="legend">Your Personal Information</legend>
          <div class="row">
            <div class="col-md-12">
              <label>Your Name *</label>
            </div>
            <div class="form-group col-md-2">
              <select class="form-control" id="title" name="title" required>
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss">Miss</option>
              </select>
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <input id="first_name" class="form-control" type="text" name="first_name" placeholder="Your First name" required>
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <input id="middle_name" class="form-control" type="text" name="middle_name" placeholder="Your Middle name">
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <input id="sur_name" class="form-control" type="text" name="sur_name" placeholder="Your Surname" required>
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="form-group col-xs-12 col-md-3">
              <label for="vehicle_registration">Your Vehicle registration *</label>
              <input id="vehicle_registration" class="form-control" type="text" name="vehicle_registration" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-2">
              <label for="birthdate">Date of Birth *</label>
              <div class="input-group">
                <input id="birthdate" class="form-control datepicker" type="date" name="birthdate" placeholder="DD-MM-YYYY" required>
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="house_number_name">Your House Number/Name *</label>
              <input id="house_number_name" class="form-control" type="text" name="house_number_name" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="first_line_address">Your First Line Address *</label>
              <input id="first_line_address" class="form-control" type="text" name="first_line_address" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="postcode">Your Postcode *</label>
              <input id="postcode" class="form-control" type="text" name="postcode" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="phone">Your Phone *</label>
              <input id="phone" class="form-control" type="text" name="phone" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="insurer">Your Insurer</label>
              <input id="insurer" class="form-control" type="text" name="insurer">
            </div>
          </div>

          <legend class="legend">Other Driver Details</legend>
          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="other_name">Other Driver's Full Name *</label>
              <input id="other_name" class="form-control" type="text" name="other_name" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="other_driver_vehicle">Other Driver's Vehicle Registration *</label>
              <input id="other_driver_vehicle" class="form-control" type="text" name="other_driver_vehicle" required>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="other_driver_address">Other Driver's Adress (if known)</label>
              <input id="other_driver_address" class="form-control" type="text" name="other_driver_address">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="other_driver_contact_number">Other Driver's Contact Number (if known)</label>
              <input id="other_driver_contact_number" class="form-control" type="text" name="other_driver_contact_number">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="other_driver_contact_insurer">Other Driver's Contact Insurer (if known)</label>
              <input id="other_driver_contact_insurer" class="form-control" type="text" name="other_driver_contact_insurer">
            </div>
          </div>

          <legend class="legend">Accident Details</legend>
					<div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="valid_insurance">Was a valid insurance policy in force at the time of accident *</label>
              <select id="valid_insurance" class="form-control" name="valid_insurance" required>
              	<option value="" selected>Please select</option>
              	<option value="Yes">Yes</option>
              	<option value="No">No</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-3">
              <label for="date_incident">Date of Incident *</label>
              <div class="input-group">
                <input id="date_incident" class="form-control datepicker" type="text" name="date_incident" required>
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-3">
	            <label for="time_incident">Time of Incident *</label>
	            <div class="input-group bootstrap-timepicker timepicker">
	              <input id="time_incident" class="form-control timepicker" type="text" name="time_incident" required>
		            <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
			        </div>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="location_incident">Location of the Incident (street, area, city, etc) *</label>
              <textarea id="location_incident" class="form-control" type="text" name="location_incident" required></textarea>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="weather_condition">Weather condition (optional)</label>
              <select id="weather_condition" class="form-control" name="weather_condition">	
								<option value="">Please select</option>
								<option value="Clear">Clear</option>
								<option value="Dry">Dry</option>
								<option value="Sunny">Sunny</option>
								<option value="Wet">Wet</option>
								<option value="Raining">Raining</option>
								<option value="Icy">Icy</option>
								<option value="Snowing">Snowing</option>
								<option value="Fog">Fog</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="brief_description_happened">Brief description of what happened *</label>
              <textarea id="brief_description_happened" class="form-control" type="text" name="brief_description_happened" required></textarea>
            </div>
          </div>

          <legend class="legend">Additional Detals</legend>
          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label>Do you have any witnesses details </label>
                <div class="col-xs-12 col-md-6">
                  <input type="radio" name="witnesses_details" value="Yes">
                  <label>Yes</label>
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="radio" name="witnesses_details" value="No" checked>
                  <label>No</label>
                </div>
              </div>
            </div>
          </div>
					
					<fieldset id="witnesses-subfrom" style="display:none" disabled>
						<div class="col-md-10 col-md-offset-1">
							<legend class="legend">Witnesses Details (only if any)</legend>
							<div class="col-md-4">
								<legend class="legend">Witness 1</legend>
								<div class="form-group">
									<label for="witness_name_1">Witness Full Name</label>
									<input id="witness_name_1" class="form-control" type="text" name="witness_name_1">
								</div>
								<div class="form-group">
									<label for="witness_address_1">Witness Adress</label>
									<textarea id="witness_address_1" class="form-control" name="witness_address_1"></textarea>
								</div>
								<div class="form-group">
									<label for="witness_contact_number_1">Witness Contact Number</label>
									<input id="witness_contact_number_1" class="form-control" type="text" name="witness_contact_number_1">
								</div>

							</div>
							<div class="col-md-4">
								<legend class="legend">Witness 2</legend>
								<div class="form-group">
									<label for="witness_name_2">Witness Full Name</label>
									<input id="witness_name_2" class="form-control" type="text" name="witness_name_2">
								</div>
								<div class="form-group">
									<label for="witness_address_2">Witness Adress</label>
									<textarea id="witness_address_2" class="form-control" name="witness_address_2"></textarea>
								</div>
								<div class="form-group">
									<label for="witness_contact_number_2">Witness Contact Number</label>
									<input id="witness_contact_number_2" class="form-control" type="text" name="witness_contact_number_2">
								</div>

							</div>
							<div class="col-md-4">
								<legend class="legend">Witness 3</legend>
								<div class="form-group">
									<label for="witness_name_3">Witness Full Name</label>
									<input id="witness_name_3" class="form-control" type="text" name="witness_name_3">
								</div>
								<div class="form-group">
									<label for="witness_address_3">Witness Adress</label>
									<textarea id="witness_address_3" class="form-control" name="witness_address_3"></textarea>
								</div>
								<div class="form-group">
									<label for="witness_contact_number_3">Witness Contact Number</label>
									<input id="witness_contact_number_3" class="form-control" type="text" name="witness_contact_number_3">
								</div>
							</div>
						</div>
					</fieldset>


          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label>Did any passengers sustain injury</label>
                <div class="col-xs-12 col-md-6">
                  <input type="radio" name="passengers_injury" value="Yes">
                  <label>Yes</label>
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="radio" name="passengers_injury" value="No" checked>
                  <label>No</label>
                </div>
              </div>
            </div>
          </div>

          <fieldset id="passengers-subfrom" style="display:none" disabled>
						<div class="col-md-10 col-md-offset-1">
							<legend class="legend">Passengers Details (only if any)</legend>
							<div class="col-md-4">
								<legend class="legend">Passenger 1</legend>
								<div class="form-group">
									<label for="passenger_name_1">Passenger Full Name</label>
									<input id="passenger_name_1" class="form-control" type="text" name="passenger_name_1">
								</div>
								<div class="form-group">
									<label for="passenger_address_1">Passenger Adress</label>
									<textarea id="passenger_address_1" class="form-control" name="passenger_address_1"></textarea>
								</div>
								<div class="form-group">
									<label for="passenger_contact_number_1">Passenger Contact Number</label>
									<input id="passenger_contact_number_1" class="form-control" type="text" name="passenger_contact_number_1">
								</div>

							</div>
							<div class="col-md-4">
								<legend class="legend">Passenger 2</legend>
								<div class="form-group">
									<label for="passenger_name_2">Passenger Full Name</label>
									<input id="passenger_name_2" class="form-control" type="text" name="passenger_name_2">
								</div>
								<div class="form-group">
									<label for="passenger_address_2">Passenger Adress</label>
									<textarea id="passenger_address_2" class="form-control" name="passenger_address_2"></textarea>
								</div>
								<div class="form-group">
									<label for="passenger_contact_number_2">Passenger Contact Number</label>
									<input id="passenger_contact_number_2" class="form-control" type="text" name="passenger_contact_number_2">
								</div>

							</div>
							<div class="col-md-4">
								<legend class="legend">Passenger 3</legend>
								<div class="form-group">
									<label for="passenger_name_3">Passenger Full Name</label>
									<input id="passenger_name_3" class="form-control" type="text" name="passenger_name_3">
								</div>
								<div class="form-group">
									<label for="passenger_address_3">Passenger Adress</label>
									<textarea id="passenger_address_3" class="form-control" name="passenger_address_3"></textarea>
								</div>
								<div class="form-group">
									<label for="passenger_contact_number_3">Passenger Contact Number</label>
									<input id="passenger_contact_number_3" class="form-control" type="text" name="passenger_contact_number_3">
								</div>
							</div>
						</div>
					</fieldset>

					<div class="row">
	          <div class="col-md-4 col-md-offset-4">
	            <br>
	            <button type="submit" class="btn btn-block btn-submit">Submit Quote</button>
	          </div>
	        </div>
      		<br><br><br>
	    	</form>
	    </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(window).ready(function(){

		$('.datepicker').datepicker({
			autoclose: true,
      format: "dd-mm-yyyy",
      endDate: "today",
      enableOnReadonly: false
    });

    $('.timepicker').timepicker({
    	disableFocus: true,
    	minuteStep: 5
    });

		//Activate Witnesses subform
    $("input[name='witnesses_details']").click(function(){
      var bool = (this.value === "Yes");
      if(bool){
        $('#witnesses-subfrom').show().prop('disabled',!bool);
      }else{
        $('#witnesses-subfrom').hide().prop('disabled',!bool);
      }
    });

    //Activate Passengers subform
    $("input[name='passengers_injury']").click(function(){
      var bool = (this.value === "Yes");
      if(bool){
        $('#passengers-subfrom').show().prop('disabled',!bool);
      }else{
        $('#passengers-subfrom').hide().prop('disabled',!bool);
      }
    });

	});
</script>
@endsection