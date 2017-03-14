@extends('layouts.front')

@section('title','Car quote - '.config('app.name'))

@section('content')
<div class="pad"></div>

<div class="container">

  <div class="row">
    <div class="col-xs-12">
      <h1 class="main-title">Car Insurance Quote</h1>
    </div>

    <div class="col-xs-12">
      <form action="{{route('register_cars')}}" method="POST">
         {{ csrf_field() }}
        <legend class="legend">Personal Information</legend>
          <div class="row">
            <div class="col-md-12">
              <label>Name *</label>
            </div>
            <div class="form-group col-md-2">
              <select class="form-control" id="title" name="title" >
                <option value="Mr.">Mr.</option>
                <option value="Mrs.">Mrs.</option>
                <option value="Miss">Miss</option>
              </select>
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <input id="first_name" class="form-control" type="text" name="first_name" placeholder="First name" value="Fran">
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <input id="middle_name" class="form-control" type="text" name="middle_name" placeholder="Middle name" value="Jose">
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <input id="sur_name" class="form-control" type="text" name="sur_name" placeholder="Surname" value="hernandez" >
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="form-group col-xs-12 col-md-2">
              <label for="birthdate">Date of Birth *</label>
              <div class="input-group">
                <input id="birthdate" class="form-control datepicker" type="date" name="birthdate" placeholder="DD-MM-YYYY" required>
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
              </div>
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <label for="marital_status">Marital Status *</label>
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
            <div class="form-group col-xs-12 col-md-3">
              <label for="address_line1">Address *</label>
              <input id="address_line1" class="form-control" type="text" name="address_line1" placeholder="Address line 1" value="Cagua">
              <input id="address_line2" class="form-control" type="text" name="address_line2" placeholder="Address line 2" value="Cagua">
              <input id="address_city" class="form-control" type="text" name="address_city" placeholder="City" value="Cagua">
              <input id="address_postcode" class="form-control" type="text" name="address_postcode" placeholder="Postal/ Zip code" value="Cagua" >
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label>Are you born in the UK? *</label>
                <div class="col-xs-6 col-md-6">
                  <input type="radio" name="born_uk" value="Yes"  checked>
                  <label class="form-check-label">Yes</label>
                </div>
                <div class="col-xs-6 col-md-6">
                  <input type="radio" name="born_uk" value="No" >
                  <label class="form-check-label">No</label>
                </div>
              </div>
            </div>
            <div class="form-group col-xs-12 col-md-3">
              <label for="became_resident">If no, When did you became a UK resident? </label>
              <div class="input-group">
                <input id="became_resident" class="form-control datepicker" type="date" name="became_resident" placeholder="DD-MM-YYYY" readonly>
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
              </div>
            </div>
          </div><!---Row-->

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="employment_status">What's your employment status? *</label>
              <select id="employment_status" class="form-control" name="employment_status" >
                <option value="Employed" selected>Please Select</option>
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
              <label for="occupation">If Employed/Self Employed, what is your occupation: </label>
              <input id="occupation" class="form-control" type="text" name="occupation" value="Engineer">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="business_type">If Employed/Self Employed, what type of business: </label>
              <input id="business_type" class="form-control" type="text" name="business_type" value="yes">
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="form-group col-xs-12 col-md-4">
              <label for="license_type">What type of license do you have? *</label>
              <select id="license_type" class="form-control" name="license_type" >
                <option value="Full UK Manual">Please Select </option>
                <option value="Full UK Manual">Full UK Manual</option>
                <option value="Full UK Automatic">Full UK Automatic</option>
                <option value="Provisional UK">Provisional UK</option>
                <option value="Full Euro EEC">Full Euro EEC</option>
                <option value="Full UK-Pass Plus">Full UK-Pass Plus</option>
                <option value="Full UK-IAM">Full UK-IAM</option>
                <option value="International licence (non-exchangeable)">International licence (non-exchangeable)</option>
                <option value="International licence (exchangeable)">International licence (exchangeable)</option>
              </select>
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <label for="license_type">Period License held for *</label>
              <select id="license_period_held" class="form-control" name="license_period_held">
                <option value="1 years" selected>Please Select</option>
                <option value="Less than 1 year">Less than 1 year</option>
                <option value="1 year">1 year</option><option value="2 years">2 years</option>
                <option value="3 years">3 years</option><option value="4 years">4 years</option>
                <option value="5 years">5 years</option><option value="6 years">6 years</option>
                <option value="7 years">7 years</option><option value="8 years">8 years</option>
                <option value="9 years">9 years</option><option value="10 years">10 years</option>
                <option value="11 years">11 years</option><option value="12 years">12 years</option>
                <option value="13 years">13 years</option><option value="14 years">14 years</option>
                <option value="15 years">15 years</option><option value="15 years">16 years</option>
                <option value="15 years">17 years</option><option value="15 years">18 years</option>
                <option value="15 years">19 years</option><option value="15 years">20 years</option>
                <option value="20 years +">20 years +</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-xs-12 col-md-3">
              <label for="date_provitional_license">Date obtained provisional licence? *</label>
              <div class="input-group">
                <input id="date_provitional_license" class="form-control datepicker" type="text" name="date_provitional_license" placeholder="DD-MM-YYYY" readonly>
                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
              </div>
            </div>
          </div><!--Row-->
          
          <div class="row">
            <div class="col-xs-12 col-md-3">
              <fieldset class="form-group">
                <label>Would you like to enter your driving licence number?</label>
                <div class="col-xs-12 col-md-6">
                  <input type="radio" name="license_enter" value="Yes">
                  <label>Yes</label>
                </div>
                <div class="col-xs-12 col-md-6">
                  <input type="radio" name="license_enter" value="No" checked>
                  <label>No</label>
                </div>
              </fieldset>
            </div>
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="license_number">Please enter your 16-character driving licence number.</label>
                <input id="license_number" class="form-control" type="text" name="license_number" maxlength="16" readonly>
              </div>
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="dvla_medical_condition">DVLA medical conditions or disabilities *</label>
                <select id="dvla_medical_condition" class="form-control" name="dvla_medical_condition" >
                  <option value="No" selected>Please Select</option>
                  <option value="No">No</option>
                  <option value="DVLA aware – No restrictions">DVLA aware – No restrictions</option>
                  <option value="DVLA aware – 1 year restricted Licence">DVLA aware – 1 year restricted Licence</option>
                  <option value="DVLA aware – 2 year restricted Licence">DVLA aware – 2 year restricted Licence</option>
                  <option value="DVLA aware – 3 year restricted Licence">DVLA aware – 3 year restricted Licence</option>
                  <option value="DVLA unaware">DVLA unaware</option>
                </select>
              </div>
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="additional_qualifications">Any additional driving qualifications *</label>
                <select id="additional_qualifications" class="form-control" name="additional_qualifications" >
                  <option value="No" selected>Please Select</option>
                  <option value="No">No</option>
                  <option value="AA Proficiency">AA Proficiency</option>
                  <option value="Institute of Advance Motorists">Institute of Advance Motorists</option>
                  <option value="Pass Plus">Pass Plus</option>
                </select>
              </div>
            </div>
          </div><!--Row-->
          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label for="date_qualifications_obtained">If one is selected, what date was qualification obtained</label>
                <input id="date_qualifications_obtained" class="form-control datepicker" type="" name="date_qualifications_obtained" readonly>
              </div>
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="form-group col-xs-12 col-md-3">
              <label for="use_other_vehicle">Use any other vehicles? *</label>
              <select id="use_other_vehicle" class="form-control" name="use_other_vehicle" >
                <option value="No access" selected>Please Select</option>
                <option value="No access to any other vehicle">No access to any other vehicle</option>
                <option value="Own another car or van">Own another car or van</option>
                <option value="Have use of another car">Have use of another car</option>
                <option value="Company car(Including personal use)">Company car(Including personal use)</option>
                <option value="Company car(Excluding personal use)">Company car(Excluding personal use)</option>
              </select>
            </div>
          </div><!--Row-->

          <!--================================|| CAR DETAILS ||=========================================-->

          <legend class="legend">Car Details</legend>
          <div class="row">
            <div class="form-group col-xs-12 col-md-2">
              <label for="vehicle_registration">Registration *</label>
              <input id="vehicle_registration" class="form-control" type="text" name="vehicle_registration" value="Cagua" >
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <label for="vehicle_registration_year">Registration year </label>
              <input id="vehicle_registration_year" class="form-control datepicker" type="text" name="vehicle_registration_year" placeholder="DD-MM-YYYY" value="03-03-2017">
            </div>
          </div><!--Row-->
          <div class="row">
            <div class="form-group col-xs-12 col-md-3">
              <label for="vehicle_aprox_value">How much is the car worth? *</label>
              <input id="vehicle_aprox_value" class="form-control" type="number" name="vehicle_aprox_value" value="1">
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="form-group col-xs-12 col-md-2">
              <label for="vehicle_manufacturer">Manufacturer *</label>
              <select id="vehicle_manufacturer" class="form-control" name="vehicle_manufacturer" >
                <option value="Asia" selected="">Please select</option>
                <option value="Abarth">Abarth</option><option value="AC">AC</option><option value="Aixam">Aixam</option><option value="Alfa Romeo">Alfa Romeo</option>
                <option value="Asia">Asia</option><option value="Aston Martin">Aston Martin</option><option value="Audi">Audi</option><option value="Austin">Austin</option>
                <option value="Bentley">Bentley</option><option value="BMW">BMW</option><option value="Bristol">Bristol</option><option value="Cadillac">Cadillac</option>
                <option value="Caterham">Caterham</option><option value="Chevrolet">Chevrolet</option><option value="Chrysler">Chrysler</option><option value="Citroen">Citroen</option>
                <option value="Coleman Milne">Coleman Milne</option><option value="Corvette">Corvette</option><option value="Dacia">Dacia</option><option value="Daewoo">Daewoo</option>
                <option value="Daihatsu">Daihatsu</option><option value="Daimler">Daimler</option><option value="De Tomaso">De Tomaso</option><option value="Dodge">Dodge</option>
                <option value="Eagle">Eagle</option><option value="F.S.O.">F.S.O.</option><option value="Ferrari">Ferrari</option><option value="Fiat">Fiat</option>
                <option value="Ford">Ford</option><option value="Honda">Honda</option><option value="Hummer">Hummer</option><option value="Hyundai">Hyundai</option>
                <option value="Infiniti">Infiniti</option><option value="Isuzu">Isuzu</option><option value="Jaguar">Jaguar</option><option value="Jeep">Jeep</option>
                <option value="Jensen">Jensen</option><option value="Kia">Kia</option><option value="Lada">Lada</option><option value="Lamborghini">Lamborghini</option>
                <option value="Lancia">Lancia</option><option value="Land Rover">Land Rover</option><option value="Lexus">Lexus</option><option value="Ligier">Ligier</option>
                <option value="Lotus">Lotus</option><option value="Marcos">Marcos</option><option value="Maserati">Maserati</option><option value="Maybach">Maybach</option>
                <option value="Mazda">Mazda</option><option value="Mercedes-Benz">Mercedes-Benz</option><option value="MG">MG</option><option value="Microcar">Microcar</option>
                <option value="Mini">Mini</option><option value="Mitsubishi">Mitsubishi</option><option value="Morgan">Morgan</option><option value="Nissan">Nissan</option>
                <option value="Noble">Noble</option><option value="Opel">Opel</option><option value="Perodua">Perodua</option><option value="Peugeot">Peugeot</option>
                <option value="PGO">PGO</option><option value="Porsche">Porsche</option><option value="Proton">Proton</option><option value="Reliant">Reliant</option>
                <option value="Renault">Renault</option><option value="Rolls-Royce">Rolls-Royce</option><option value="Rover">Rover</option><option value="SAAB">SAAB</option>
                <option value="SAO">SAO</option><option value="Seat">Seat</option><option value="Skoda">Skoda</option><option value="Smart">Smart</option>
                <option value="Ssangyong">Ssangyong</option><option value="Subaru">Subaru</option><option value="Suzuki">Suzuki</option><option value="Talbot">Talbot</option>
                <option value="Tata">Tata</option><option value="TOYOTA">TOYOTA</option><option value="TVR">TVR</option><option value="Vauxhall">Vauxhall</option>
                <option value="Volkswagen">Volkswagen</option><option value="Volvo">Volvo</option><option value="Westfield">Westfield</option><option value="Yugo">Yugo</option>
              </select>
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <label for="vehicle_model">Model *</label>
              <input id="vehicle_model" class="form-control" type="text" name="vehicle_model" value="3">
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <label for="vehicle_number_seats">Number of Seats *</label>
              <input id="vehicle_number_seats" class="form-control" type="number" name="vehicle_number_seats" style="width:65px" min="1" value="2">
            </div>
            <div class="form-group col-xs-12 col-md-2">
              <label for="vehicle_number_doors">Number of Doors: *</label>
              <input id="vehicle_number_doors" class="form-control" type="number" name="vehicle_number_doors" style="width:65px" min="1" max="6" value="4">
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label id="vehicle_alarms">Alarms - Immobiliser:</label>
                <select id="vehicle_alarms" class="form-control" name="vehicle_alarms">
                  <option value="Factory" selected>Please select</option>
                  <option value="Factory Fitted Thatcham Approved Alarm/Immobiliser">Factory Fitted Thatcham Approved Alarm/Immobiliser</option>
                  <option value="Factory Fitted Thatcham Approved Alarm">Factory Fitted Thatcham Approved Alarm</option>
                  <option value="Factory Fitted Non-Thatcham Alarm/Immobiliser">Factory Fitted Non-Thatcham Alarm/Immobiliser</option>
                  <option value="Factory Fitted Non-Thatcham Alarm">Factory Fitted Non-Thatcham Alarm</option>
                  <option value="Factory Fitted">Factory Fitted</option>
                  <option value="None">None</option>
                </select>
              </div>
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="vehicle_engine_size">Engine Size (CC)</label>
                <input id="vehicle_engine_size" class="form-control" type="text" name="vehicle_engine_size" value="45">
              </div>
            </div>
          </div><!--Row-->

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="vehicle_transmission">Transmission</label>
                <div class="form-check">
                  <div class="col-xs-12 col-md-6">
                    <input type="radio" class="form-check-input" name="vehicle_transmission" value="Manual" checked>
                    <label class="form-check-label">Manual</label>
                  </div>
                </div>
                <div class="form-check">
                  <div class="col-xs-12 col-md-6">
                    <input type="radio" class="form-check-input" name="vehicle_transmission" value="Automatic">
                    <label class="form-check-label">Automatic</label>
                  </div>
                </div>
              </div>
            </div>
          </div><!--Row-->
          
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <fieldset class="form-group">
                <label>Has the car been imported? *</label>
                <div class="form-check">
                  <div class="col-xs-12 col-md-3">
                    <input id="yes-born" type="radio" class="form-check-input" name="vehicle_imported" value="Yes" >
                    <label class="form-check-label">Yes</label>
                  </div>
                </div>
                <div class="form-check">
                  <div class="col-xs-12 col-md-3">
                    <input type="radio" class="form-check-input" name="vehicle_imported" id="no-born" value="No" checked >
                    <label class="form-check-label">No</label>
                  </div>
                </div>
                <div class="col-xs-12">
                  <small class="text-justify">Any car that wasn't made specially to UK specification for sale in the country is considered an import. You can find this information in the vehicle registration document (VSC log book)</small>
                </div>
              </fieldset>
            </div>
          </div><!--Row-->
          
          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label>Does this car have any modifications? *</label>
                <div class="col-xs-12 col-md-4">
                  <input type="radio" name="vehicle_modifications" value="Yes" >
                  <label>Yes</label>
                </div>
                <div class="col-xs-12 col-md-4">
                  <input type="radio" name="vehicle_modifications" value="No" checked >
                  <label>No</label>
                </div>
              </div>
            </div>
          </div><!--Row-->
          
          <div class="row">
            <div class="col-xs-12 col-md-3">
              <div class="form-group">
                <label>Do you have a dashcam fitted to your car?</label>
                <div class="col-xs-12 col-md-4">
                  <input type="radio" name="vehicle_dash_cam" value="Yes">
                  <label>Yes</label>
                </div>
                <div class="col-xs-12 col-md-4">
                  <input type="radio" name="vehicle_dash_cam" value="No" checked>
                  <label>No</label>
                </div>
              </div>
            </div>
          </div><!--Row-->

            <legend class="legend">Car ownership</legend>
            <div class="row">
              <div class="col-xs-12 col-md-3">
                <div class="form-group">
                  <label for="vehicle_date_purchase">When did you buy this car? *</label>
                  <div class="input-group">
                    <input id="vehicle_date_purchase" class="form-control datepicker" type="text" name="vehicle_date_purchase" placeholder="DD-MM-YYYY" value="12-03-2017">
                    <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="checkbox">
                  <br>
                  <label>
                    <input id="vehicle_date_purchase_not" type="checkbox">or Not yet purchased.
                  </label>
                </div>
              </div>
            </div><!--Row-->

            <div class="row">
              <div class="form-group">
                <div class="col-xs-12 col-md-3">
                  <label for="vehicle_registered_keeper">Registered keeper *</label>
                  <select id="vehicle_registered_keeper" class="form-control" name="vehicle_registered_keeper" >
                    <option value="Policy" selected>Please select</option>
                    <option value="Policy Holder">Policy Holder</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Other Driver">Other Driver</option>
                    <option value="Parent">Parent</option>
                    <option value="Common Law Partner">Common Law Partner</option>
                    <option value="Private Leased">Private Leased</option>
                    <option value="Company">Company</option>
                    <option value="Company (Leased)">Company (Leased)</option>
                    <option value="Limited Company">Limited Company</option>
                    <option value="Civil Partner">Civil Partner</option>
                    <option value="Society/Club">Society/Club</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->

            <div class="row">
              <div class="col-xs-12 col-md-3">
                <div class="form-group">
                  <label for="vehicle_legal_owner">Legal Owner *</label>
                  <select id="vehicle_legal_owner" class="form-control" name="vehicle_legal_owner" >
                    <option value="Spouse" selected>Please select</option>
                    <option value="Policy Holder">Policy Holder</option>
                    <option value="Spouse">Spouse</option>
                    <option value="Other Driver">Other Driver</option>
                    <option value="Parent">Parent</option>
                    <option value="Common Law Partner">Common Law Partner</option>
                    <option value="Private Leased">Private Leased</option>
                    <option value="Company">Company</option>
                    <option value="Company (Leased)">Company (Leased)</option>
                    <option value="Limited Company">Limited Company</option>
                    <option value="Civil Partner">Civil Partner</option>
                    <option value="Society/Club">Society/Club</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->

            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>Is the car impounded with the police? *</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-6">
                      <input type="radio" class="form-check-input" name="vehicle_inpounded" value="Yes" >
                      <label class="form-check-label">Yes</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-6">
                      <input type="radio" class="form-check-input" name="vehicle_inpounded" value="No" checked >
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!--===============================|| VEHICLE USAGE ||==================================-->
            <legend class="legend">Vehicle Usage</legend>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="usage_kept_day">Where is the vehicle kept during the day *</label>
                  <select id="usage_kept_day" class="form-control" name="usage_kept_day" >
                    <option value="At home" selected="selected">Please select</option>
                    <option value="At Home">At Home</option>
                    <option value="Office or Factory Car Park">Office or Factory Car Park</option>
                    <option value="Open public car park">Open public car park</option>
                    <option value="Secure public car park">Secure public car park</option>
                    <option value="Street away from home">Street away from home</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="usage_kept_night">Where is the vehicle kept overnight *</label>
                  <select id="usage_kept_night" class="form-control" name="usage_kept_night" >
                    <option value="Garaged" selected>Please select</option>
                    <option value="Garaged">Garaged</option>
                    <option value="Public Road">Public Road</option>
                    <option value="Drive">Drive</option>
                    <option value="Private Property">Private Property</option>
                    <option value="Car Park">Car Park</option>
                    <option value="Locked Compound">Locked Compound</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->

            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="usage_kept_same_address">Is the vehicle kept at the same address *</label>
                  <select id="usage_kept_same_address" class="form-control" name="usage_kept_same_address" >
                    <option value="Yes" selected>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="usage_kept_other_address">If No, what is the full address of where the vehicle is kept</label>
                  <input id="usage_kept_other_address" class="form-control" type="text" name="usage_kept_other_address" readonly>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label>Have you or any of the drivers ever had insurance declined, cancelled or special terms imposed? *</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="drivers_insurance_imposed" value="Yes" >
                      <label class="form-check-label">Yes</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-9">
                      <input type="radio" class="form-check-input" name="drivers_insurance_imposed" value="No" checked >
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="usage">Use of vehicle *</label>
                  <select id="usage" class="form-control" name="usage" >
                    <option value="Social test" selected">Please select</option>
                    <option value="Social, domestic, pleasure, commuting (SDPC)">Social, domestic, pleasure, commuting (SDPC)</option>
                    <option value="Social, domestic and pleasure only (SDP)">Social, domestic and pleasure only (SDP)</option>
                    <option value="SDPC and business use (proposer/spouse only)">SDPC and business use (proposer/spouse only)</option>
                    <option value="SDPC and business use (any named driver)">SDPC and business use (any named driver)</option>
                    <option value="SDPC and business use (proposer only)">SDPC and business use (proposer only)</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="usage_annual_milage">Estimated Annual Mileage</label>
                  <input id="usage_annual_milage" class="form-control" type="text" name="usage_annual_milage">
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="type_coverage">Type of Cover</label>
                  <select id="type_coverage" class="form-control" name="type_coverage">
                    <option selected value="Comprehensive">Please select</option>
                    <option value="Comprehensive">Comprehensive</option>
                    <option value="Third party fire &amp; theft">Third party fire &amp; theft</option>
                    <option value="Third party only">Third party only</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="no_claims">Any no claims discount *</label>
                  <select id="no_claims" class="form-control" name="no_claims" >
                    <option value="1 year" selected>Please select</option><option value="No NCD">No NCD</option>
                    <option value="1 Year">1 Year</option><option value="2 Years">2 Years</option><option value="3 Years">3 Years</option>
                    <option value="4 Years">4 Years</option><option value="5 Years">5 Years</option><option value="6 Years">6 Years</option>
                    <option value="7 Years">7 Years</option><option value="8 Years">8 Years</option><option value="9 Years">9 Years</option>
                    <option value="10 Years">10 Years</option><option value="11 Years">11 Years</option><option value="12 Years">12 Years</option>
                    <option value="13 Years">13 Years</option><option value="14 Years">14 Years</option><option value="15 Years +">15 Years +</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="no_claims_earned_uk">Was this NCD earned in the UK?</label>
                  <select id="no_claims_earned_uk" class="form-control" name="no_claims_earned_uk" disabled>
                    <option value="Yes" selected>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No, earned in the European Union</option>
                    <option value="No">No, earned in the Rest of the World </option> 
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="no_claims_protect">Would you like to protect your NCD</label>
                  <select id="no_claims_protect" class="form-control" name="no_claims_protect" disabled>
                    <option value="Yes" selected>Please select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option> 
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="voluntary_excess">What voluntary excess would you like? *</label>
                  <select id="voluntary_excess" class="form-control" name="voluntary_excess" >
                    <option value="$40" selected>Please select</option><option value="None">None</option>
                    <option value="£50">£50</option><option value="£100">£100</option><option value="£150">£150</option>
                    <option value="£200">£200</option><option value="£250">£250</option><option value="£300">£300</option>
                    <option value="£350">£350</option><option value="£400">£400</option><option value="£450">£450</option>
                    <option value="£500">£500</option><option value="£750">£750</option><option value="£1000">£1000</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="pay_insurance">How do you normally pay for insurance? *</label>
                  <select id="pay_insurance" class="form-control" name="pay_insurance" >
                    <option value="Monthly" selected>Please select</option>
                    <option value="Monthly">Monthly</option>
                    <option value="In Full">In Full</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="policy_start">When would you like the policy to start? *</label>
                  <input id="policy_start" class="form-control" type="text" name="policy_start" placeholder="DD-MM-YYYY" value="12-03-2017">
                </div>
              </div>
            </div>


            <!--============================|| HOUSEHOLD ||======================================-->
            <legend class="legend">Your household</legend>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label>Do you have any childer under 16 years old? *</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="children" value="Yes" >
                      <label class="form-check-label">Yes</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-9">
                      <input type="radio" class="form-check-input" name="children" value="No" checked >
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label for="vehicles_how_many">How many cars are at your home? *</label>
                  <input id="vehicles_how_many" class="form-control" type="number" name="vehicles_how_many" step="1" min="0" style="width: 65px"  value="1">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label>Are you a homeowner?</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="home_owner" value="Yes" checked >
                      <label class="form-check-label">Yes</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="home_owner" value="No" >
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--Row-->

            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label>Do you own a business?</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="business_owner" value="Yes" >
                      <label class="form-check-label">Yes</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="business_owner" value="No" checked >
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="business">What Type of business do you own?</label>
                  <input id="business" class="form-control" type="text" name="business" readonly>
                </div>
              </div>
            </div><!--Row-->

            <legend class="legend">Claims &amp; convictions</legend>
            <div class="row">
              <div class="col-md-3">
                <div class="form-group">
                  <label for="non_motoring_convictions">Non motoring criminal convictions</label>
                  <select id="non_motoring_convictions" class="form-control" name="non_motoring_convictions">
                    <option value="No" selected>No</option>
                    <option value="Yes">Yes</option>
                  </select>
                </div>
              </div>
            </div><!--Row-->

            <div class="row">
              <div class="col-xs-12 col-md-4">
                <fieldset class="form-group">
                  <label>Any motor accidents or claims in the last 5 years? *</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="motor_accidents" value="Yes" >
                      <label class="form-check-label">Yes</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-9">
                      <input type="radio" class="form-check-input" name="motor_accidents" value="No" checked >
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                 </fieldset>
              </div>
            </div><!--Row-->

            <!--=====================================|| ACCIDENST FORM ||====================================================-->
            <fieldset id="accident-sub-from" class="row" style="display:none" disabled>
              <div class="col-md-10 col-md-offset-1">
                <legend class="legend">Motor Accidents or Claim Details</legend>
                <div class="col-md-3">
                  <!--================|| ACCIDENTS SECTION 1 ||======================-->
                  <legend class="legend">1</legend>
                  <div class="col-md-12">
                    <label for="type_1">Type:</label>
                    <select id="type_1" class="form-control" name="type_1">
                      <option value="" selected>Please select</option>
                      <option value="Accident">Accident</option>
                      <option value="Explosion">Explosion</option>
                      <option value="Fire Damage">Fire Damage</option>
                      <option value="Lightning Damage">Lightning Damage</option>
                      <option value="Malicious Damage">Malicious Damage</option>
                      <option value="Riot Damage">Riot Damage</option>
                      <option value="Storm Damage">Storm Damage</option>
                      <option value="Theft - Accessories">Theft - Accessories</option>
                      <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                      <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                      <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                      <option value="Theft Related Damage">Theft Related Damage</option>
                      <option value="Windscreen Only">Windscreen Only</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="date_1">Date</label>
                      <input id="date_1" class="form-control datepicker" type="text" name="date_1" placeholder="DD-MM-YYYY" >
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="damage_1">Damage:</label>
                      <select id="damage_1" class="form-control" name="damage_1">
                        <option value="Damaged" selected>Please select</option>
                        <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                        <option value="No Damage">No Damage</option>
                        <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="cost_1">Cost(£) - if known:</label>
                      <input id="cost_1" class="form-control" type="number" name="cost_1">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="fault_1">Fault:</label>
                    <select id="fault_1" class="form-control" name="fault_1">
                      <option value="" selected>Please select</option>
                      <option value="Both parties">Both parties</option>
                      <option value="No other vehicle involved">No other vehicle involved</option>
                      <option value="Other party">Other party</option>
                      <option value="Our Driver">Our Driver</option>
                      <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Any injuries:</label>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_1" value="Yes" >
                          <label class="form-check-label">Yes</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_1" value="No" checked >
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!--Col-md-3 Section 1 -->
                <!--===========================================================================-->
                <!--=======================|| ACCIDENTS SECTION 2 ||===========================-->
                <div class="col-md-3">
                  <legend class="legend">2</legend>
                  <div class="col-md-12">
                    <label for="type_2">Type:</label>
                    <select id="type_2" class="form-control" name="type_2">
                      <option value="" selected>Please select</option>
                      <option value="Accident">Accident</option>
                      <option value="Explosion">Explosion</option>
                      <option value="Fire Damage">Fire Damage</option>
                      <option value="Lightning Damage">Lightning Damage</option>
                      <option value="Malicious Damage">Malicious Damage</option>
                      <option value="Riot Damage">Riot Damage</option>
                      <option value="Storm Damage">Storm Damage</option>
                      <option value="Theft - Accessories">Theft - Accessories</option>
                      <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                      <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                      <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                      <option value="Theft Related Damage">Theft Related Damage</option>
                      <option value="Windscreen Only">Windscreen Only</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="date_2">Date</label>
                      <input id="date_2" class="form-control datepicker" type="text" name="date_2" placeholder="DD-MM-YYYY">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="damage_2">Damage:</label>
                      <select id="damage_2" class="form-control" name="damage_2">
                        <option value="" selected>Please select</option>
                        <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                        <option value="No Damage">No Damage</option>
                        <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="cost_2">Cost(£) - if known:</label>
                      <input id="cost_2" class="form-control" type="number" name="cost_2">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="fault_2">Fault:</label>
                    <select id="fault_2" class="form-control" name="fault_2">
                      <option value="" selected>Please select</option>
                      <option value="Both parties">Both parties</option>
                      <option value="No other vehicle involved">No other vehicle involved</option>
                      <option value="Other party">Other party</option>
                      <option value="Our Driver">Our Driver</option>
                      <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Any injuries:</label>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_2" value="Yes" >
                          <label class="form-check-label">Yes</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_2" value="No" checked >
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!--Col-md-3 Section 2 -->
                <!--==========================================================================================-->
                <!--==================================|| ACCIDENTS SECTION 3 ||==================================-->
                <div class="col-md-3">
                  <legend class="legend">3</legend>
                  <div class="col-md-12">
                    <label for="type_3">Type:</label>
                    <select id="type_3" class="form-control" name="type_3">
                      <option value="" selected>Please select</option>
                      <option value="Accident">Accident</option>
                      <option value="Explosion">Explosion</option>
                      <option value="Fire Damage">Fire Damage</option>
                      <option value="Lightning Damage">Lightning Damage</option>
                      <option value="Malicious Damage">Malicious Damage</option>
                      <option value="Riot Damage">Riot Damage</option>
                      <option value="Storm Damage">Storm Damage</option>
                      <option value="Theft - Accessories">Theft - Accessories</option>
                      <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                      <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                      <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                      <option value="Theft Related Damage">Theft Related Damage</option>
                      <option value="Windscreen Only">Windscreen Only</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="date_3">Date</label>
                      <input id="date_3" class="form-control datepicker" type="text" name="date_3" placeholder="DD-MM-YYYY">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="damage_3">Damage:</label>
                      <select id="damage_3" class="form-control" name="damage_3">
                        <option value="" selected>Please select</option>
                        <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                        <option value="No Damage">No Damage</option>
                        <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="cost_3">Cost(£) - if known:</label>
                      <input id="cost_3" class="form-control" type="number" name="cost_3">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="fault_3">Fault:</label>
                    <select id="fault_3" class="form-control" name="fault_3">
                      <option value="" selected>Please select</option>
                      <option value="Both parties">Both parties</option>
                      <option value="No other vehicle involved">No other vehicle involved</option>
                      <option value="Other party">Other party</option>
                      <option value="Our Driver">Our Driver</option>
                      <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Any injuries:</label>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_3" value="Yes" >
                          <label class="form-check-label">Yes</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_3" value="No" checked >
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!--Col-md-3 Section 3 -->
                <!--==========================================================================================-->
                <!--================|| ADDITIONAL DRIVER 1 - SECTION 4 ||==================================-->
                <div class="col-md-3">
                  <legend class="legend">4</legend>
                  <div class="col-md-12">
                    <label for="type_4">Type:</label>
                    <select id="type_4" class="form-control" name="type_4">
                      <option value="" selected>Please select</option>
                      <option value="Accident">Accident</option>
                      <option value="Explosion">Explosion</option>
                      <option value="Fire Damage">Fire Damage</option>
                      <option value="Lightning Damage">Lightning Damage</option>
                      <option value="Malicious Damage">Malicious Damage</option>
                      <option value="Riot Damage">Riot Damage</option>
                      <option value="Storm Damage">Storm Damage</option>
                      <option value="Theft - Accessories">Theft - Accessories</option>
                      <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                      <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                      <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                      <option value="Theft Related Damage">Theft Related Damage</option>
                      <option value="Windscreen Only">Windscreen Only</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="date_4">Date</label>
                      <input id="date_4" class="form-control datepicker" type="text" name="date_4" placeholder="DD-MM-YYYY">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="damage_4">Damage:</label>
                      <select id="damage_4" class="form-control" name="damage_4">
                        <option value="" selected>Please select</option>
                        <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                        <option value="No Damage">No Damage</option>
                        <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="cost_4">Cost(£) - if known:</label>
                      <input id="cost_4" class="form-control" type="number" name="cost_4">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <label for="fault_4">Fault:</label>
                    <select id="fault_4" class="form-control" name="fault_4">
                      <option value="" selected>Please select</option>
                      <option value="Both parties">Both parties</option>
                      <option value="No other vehicle involved">No other vehicle involved</option>
                      <option value="Other party">Other party</option>
                      <option value="Our Driver">Our Driver</option>
                      <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                    </select>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label>Any injuries:</label>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_4" value="Yes" >
                          <label class="form-check-label">Yes</label>
                        </div>
                      </div>
                      <div class="form-check">
                        <div class="col-xs-6">
                          <input type="radio" class="form-check-input" name="any_injuries_4" value="No" checked >
                          <label class="form-check-label">No</label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!--Col-md-3 Section 4 -->
                <div class="col-md-12">
                  <hr>
                </div>
              </div>
            </fieldset>
            <!--===================================================================================================-->
            <!--====================================================================================================-->
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label>Any motoring convictions, driving license endorsements or fixed penalty points withing the last 5 years?</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="motor_offences" value="Yes" >
                      <label class="form-check-label">Yes</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-9">
                      <input type="radio" class="form-check-input" name="motor_offences" value="No" checked >
                      <label class="form-check-label">No</label>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--Row-->

            <!--=====================================|| OFFENCES FORM ||====================================================-->
            <fieldset id="offences-sub-from" class="row" style="display:none" disabled>
              <div class="col-md-10 col-md-offset-1">
                <legend class="legend">Motor Conviction, Fixed Penalty or Disqualification Details</legend>
                <!--==============================|| SECTION 1 ||============================================-->
                <div class="col-md-3">
                  <legend class="legend">1</legend>
                  <div class="form-group">
                    <label for="conviction_code_1">Conviction Code:</label>
                    <select id="mpenalties_code_1" class="form-control" name="conviction_code_1">
                      <option value="" selected>Please select</option>
                      <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                      <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                      <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                      <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                      <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                      <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                      <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                      <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                      <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                      <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                      <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                      <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                      <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                      <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                      <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                      <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                      <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                      <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                      <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                      <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                      <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                      <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="date_conviction_1">Date of Conviction:</label>
                    <input id="date_conviction_1" class="form-control datepicker" name="date_conviction_1" placeholder="DD-MM-YYYY">
                  </div>
                  <div class="form-group">
                    <label for="points_1">Points:</label>
                    <select id="points_1" class="form-control" name="points_1">
                      <option value="" selected="">Please select</option><option value="None">None</option>
                      <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                      <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                      <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                      <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="fine_libras_1">Fine(£) - if any:</label>
                    <input id="fine_libras_1" class="form-control" type="number" step="any" min="1" name="fine_libras_1">
                  </div>
                  <div class="form-group">
                    <label for="ban_month_1">Ban(months) - if any:</label>
                    <input id="ban_month_1" class="form-control" type="number" step="1" min="1" name="ban_month_1">
                  </div>
                </div>
                <!--===================================================================================================-->
                <!--======================================|| SECTION 2 ||==============================================-->
                <div class="col-md-3">
                  <legend class="legend">2</legend>
                  <div class="form-group">
                    <label for="conviction_code_2">Conviction Code:</label>
                    <select id="mpenalties_code_2" class="form-control" name="conviction_code_2">
                      <option value="" selected>Please select</option>
                      <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                      <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                      <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                      <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                      <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                      <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                      <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                      <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                      <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                      <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                      <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                      <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                      <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                      <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                      <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                      <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                      <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                      <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                      <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                      <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                      <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                      <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="date_conviction_2">Date of Conviction:</label>
                    <input id="date_conviction_2" class="form-control datepicker" name="date_conviction_2" placeholder="DD-MM-YYYY">
                  </div>
                  <div class="form-group">
                    <label for="points_2">Points:</label>
                    <select id="points_2" class="form-control" name="points_2">
                      <option value="" selected="">Please select</option><option value="None">None</option>
                      <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                      <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                      <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                      <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="fine_libras_2">Fine(£) - if any:</label>
                    <input id="fine_libras_2" class="form-control" type="number" step="any" min="1" name="fine_libras_2">
                  </div>
                  <div class="form-group">
                    <label for="ban_month_2">Ban(months) - if any:</label>
                    <input id="ban_month_2" class="form-control" type="number" step="1" min="1" name="ban_month_2">
                  </div>
                </div>
                <div class="col-md-3">
                  <legend class="legend">3</legend>
                  <div class="form-group">
                    <label for="conviction_code_3">Conviction Code:</label>
                    <select id="mpenalties_code_3" class="form-control" name="conviction_code_3">
                      <option value="" selected>Please select</option>
                      <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                      <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                      <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                      <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                      <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                      <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                      <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                      <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                      <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                      <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                      <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                      <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                      <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                      <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                      <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                      <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                      <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                      <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                      <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                      <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                      <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                      <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="date_conviction_3">Date of Conviction:</label>
                    <input id="date_conviction_3" class="form-control datepicker" name="date_conviction_3" placeholder="DD-MM-YYYY">
                  </div>
                  <div class="form-group">
                    <label for="points_3">Points:</label>
                    <select id="points_3" class="form-control" name="points_3">
                      <option value="" selected="">Please select</option><option value="None">None</option>
                      <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                      <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                      <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                      <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="fine_libras_3">Fine(£) - if any:</label>
                    <input id="fine_libras_3" class="form-control" type="number" step="any" min="1" name="fine_libras_3">
                  </div>
                  <div class="form-group">
                    <label for="ban_month_3">Ban(months) - if any:</label>
                    <input id="ban_month_3" class="form-control" type="number" step="1" min="1" name="ban_month_3">
                  </div>
                </div>
                <div class="col-md-3">
                  <legend class="legend">4</legend>
                  <div class="form-group">
                    <label for="conviction_code_4">Conviction Code:</label>
                    <select id="mpenalties_code_4" class="form-control" name="conviction_code_4">
                      <option value="" selected>Please select</option>
                      <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                      <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                      <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                      <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                      <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                      <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                      <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                      <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                      <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                      <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                      <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                      <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                      <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                      <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                      <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                      <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                      <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                      <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                      <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                      <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                      <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                      <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="date_conviction_4">Date of Conviction:</label>
                    <input id="date_conviction_4" class="form-control datepicker" name="date_conviction_4" placeholder="DD-MM-YYYY">
                  </div>
                  <div class="form-group">
                    <label for="points_4">Points:</label>
                    <select id="points_4" class="form-control" name="points_4">
                      <option value="" selected="">Please select</option><option value="None">None</option>
                      <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                      <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                      <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                      <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="fine_libras_4">Fine(£) - if any:</label>
                    <input id="fine_libras_4" class="form-control" type="number" step="any" min="1" name="fine_libras_4">
                  </div>
                  <div class="form-group">
                    <label for="ban_month_4">Ban(months) - if any:</label>
                    <input id="ban_month_4" class="form-control" type="number" step="1" min="1" name="ban_month_4">
                  </div>
                </div>
              </div>
              <div class="col-md-12">
                <hr>
              </div>
            </fieldset>
            <!--=====================================|| OFFENCES FORM ||====================================================-->
            <!--=====================================================================================-->

            <legend class="legend">Contact Information</legend>
            <div class="row">
              <div class="form-group col-xs-12 col-md-3">
                <label for="email">Email address</label>
                <input id="email" class="form-control" type="email" name="email" value="prueba@gmail.com">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-12 col-md-3">
                <label for="phone">Phone</label>
                <input id="phone" class="form-control" type="text" name="phone" value="04169328863">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-xs-12 col-md-3">
                <label for="mobile">Movile *</label>
                <input id="mobile" class="form-control" type="text" name="mobile" value="04125879854">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label>Please contact me via</label>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="contact_via" value="Phone" value="0416-9325587">
                      <label class="form-check-label">Phone</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="contact_via" value="Text" value="prueba">
                      <label class="form-check-label">Text</label>
                    </div>
                  </div>
                  <div class="form-check">
                    <div class="col-xs-12 col-md-3">
                      <input type="radio" class="form-check-input" name="contact_via" value="Email" value="francisco20990@gmail.com">
                      <label class="form-check-label">Email</label>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--Row-->
						<!--===================================|| ADDITIONAL DRIVER ||================================-->
            <legend class="legend">Additional Drivers</legend>
            <div class="row">
              <div class="col-xs-12 col-md-4">
                <div class="form-group">
                  <label>Would you like to add an additional driver? *</label>
                  <div class="col-xs-12 col-md-3">
                    <input type="radio" name="additional_driver1" value="Yes" >
                    <label>Yes</label>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <input type="radio" name="additional_driver1" value="No" checked>
                    <label>No</label>
                  </div>
                </div>
              </div>
            </div>
						<!--===============================|| ADDITIONAL DRIVER FORM - 1 ||================================-->
            <!--===============================|| ADDITIONAL DRIVER FORM - 1 ||================================-->
            <!--===============================|| ADDITIONAL DRIVER FORM - 1 ||================================-->
            <fieldset id="driver_1" style="display:none" disabled>
            	<div class="col-md-11 col-md-offset-1">
            		<legend class="legend">Additional Driver (1) Details</legend>
            		<div class="row">
			            <div class="col-md-12">
			              <label>Name *</label>
			            </div>
			            <div class="form-group col-md-2">
			              <select class="form-control" id="ca_title_1" name="ca_title_1" required>
			                <option value="Mr.">Mr.</option>
			                <option value="Mrs.">Mrs.</option>
			                <option value="Miss">Miss</option>
			              </select>
			            </div>
			            <div class="form-group col-xs-12 col-md-2">
			              <input id="ca_first_name_1" class="form-control" type="text" name="ca_first_name_1" placeholder="First name" required>
			            </div>
			            <div class="form-group col-xs-12 col-md-2">
			              <input id="ca_middle_name_1" class="form-control" type="text" name="ca_middle_name_1" placeholder="Middle name">
			            </div>
			            <div class="form-group col-xs-12 col-md-2">
			              <input id="ca_sur_name_1" class="form-control" type="text" name="ca_sur_name_1" placeholder="Surname" required>
			            </div>
			          </div><!--Row-->
			          <div class="row">
			            <div class="form-group col-xs-12 col-md-4">
			              <label for="ca_relationship_1">Relationship to Proposer/Policy Holder *</label>
			              <select id="ca_relationship_1" class="form-control" name="ca_relationship_1" required>
                      <option value="">Please select</option>
                      <option value="Spouse">Spouse</option>
                      <option value="Civil Partner">Civil Partner</option>
                      <option value="Common Law Partner/Cohabitee">Common Law Partner/Cohabitee</option>
                      <option value="Son/Daughter">Son/Daughter</option>
                      <option value="Parent">Parent</option>
                      <option value="Brother/Sister">Brother/Sister</option>
                      <option value="Other Family">Other Family</option>
                      <option value="Employee">Employee</option>
                      <option value="Employer">Employer</option>
                      <option value="Business Partner">Business Partner</option>
                      <option value="Other">Other</option>
			              </select>
			            </div>
			          </div>
			          <div class="row">
			            <div class="form-group col-xs-12 col-md-3">
			              <label for="ca_birthdate_1">Date of Birth *</label>
			              <div class="input-group">
			                <input id="ca_birthdate_1" class="form-control datepicker" type="date" name="ca_birthdate_1" placeholder="DD-MM-YYYY" required>
			                <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
			              </div>
			            </div>
			            <div class="form-group col-xs-12 col-md-3">
			              <label for="ca_marital_status_1">Marital Status *</label>
			              <select id="ca_marital_status_1" class="form-control" name="ca_marital_status_1" required>
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
                    <label for="ca_employment_status_1">What's your employment status? *</label>
                    <select id="ca_employment_status_1" class="form-control" name="ca_employment_status_1" required>
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
                    <label for="ca_employed_ocupation_1">If Employed/Self Employed, what is your occupation: </label>
                    <input id="ca_employed_ocupation_1" class="form-control" type="text" name="ca_employed_ocupation_1">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-md-4">
                    <label for="ca_employed_business_1">If Employed/Self Employed, what type of business: </label>
                    <input id="ca_employed_business_1" class="form-control" type="text" name="ca_employed_business_1">
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="form-group col-xs-12 col-md-4">
                    <label for="ca_license_type_1">What type of license do you have? *</label>
                    <select id="ca_license_type_1" class="form-control" name="ca_license_type_1" required>
                      <option value="">Please Select </option>
                      <option value="Full UK Manual">Full UK Manual</option>
                      <option value="Full UK Automatic">Full UK Automatic</option>
                      <option value="Provisional UK">Provisional UK</option>
                      <option value="Full Euro EEC">Full Euro EEC</option>
                      <option value="Full UK-Pass Plus">Full UK-Pass Plus</option>
                      <option value="Full UK-IAM">Full UK-IAM</option>
                      <option value="International licence (non-exchangeable)">International licence (non-exchangeable)</option>
                      <option value="International licence (exchangeable)">International licence (exchangeable)</option>
                    </select>
                  </div>
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_period_license_1">Period License held for *</label>
                    <select id="ca_period_license_1" class="form-control" name="ca_period_license_1">
                      <option value="" selected>Please Select</option>
                      <option value="Less than 1 year">Less than 1 year</option>
                      <option value="1 year">1 year</option><option value="2 years">2 years</option>
                      <option value="3 years">3 years</option><option value="4 years">4 years</option>
                      <option value="5 years">5 years</option><option value="6 years">6 years</option>
                      <option value="7 years">7 years</option><option value="8 years">8 years</option>
                      <option value="9 years">9 years</option><option value="10 years">10 years</option>
                      <option value="11 years">11 years</option><option value="12 years">12 years</option>
                      <option value="13 years">13 years</option><option value="14 years">14 years</option>
                      <option value="15 years">15 years</option><option value="15 years">16 years</option>
                      <option value="15 years">17 years</option><option value="15 years">18 years</option>
                      <option value="15 years">19 years</option><option value="15 years">20 years</option>
                      <option value="20 years +">20 years +</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-md-4">
                    <label for="ca_date_provitional_license_1">Date obtained provisional licence? *</label>
                    <div class="input-group">
                      <input id="ca_date_provitional_license_1" class="form-control datepicker" type="text" name="ca_date_provitional_license_1" placeholder="DD-MM-YYYY" readonly>
                      <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                  </div>
                </div><!--Row-->
                
                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <fieldset class="form-group">
                      <label>Would you like to enter your driving licence number?</label>
                      <div class="col-xs-12 col-md-6">
                        <input type="radio" name="ca_license_enter_1" value="Yes">
                        <label>Yes</label>
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <input type="radio" name="ca_license_enter_1" value="No" checked>
                        <label>No</label>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <div class="form-group">
                      <label for="ca_license_number_1">Please enter your 16-character driving licence number.</label>
                      <input id="ca_license_number_1" class="form-control" type="text" name="ca_license_number_1" maxlength="16" readonly>
                    </div>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label for="dvla_medical_1">DVLA medical conditions or disabilities *</label>
                      <select id="dvla_medical_1" class="form-control" name="ca_dvla_medical_1" required>
                        <option value="" selected>Please Select</option>
                        <option value="No">No</option>
                        <option value="DVLA aware – No restrictions">DVLA aware – No restrictions</option>
                        <option value="DVLA aware – 1 year restricted Licence">DVLA aware – 1 year restricted Licence</option>
                        <option value="DVLA aware – 2 year restricted Licence">DVLA aware – 2 year restricted Licence</option>
                        <option value="DVLA aware – 3 year restricted Licence">DVLA aware – 3 year restricted Licence</option>
                        <option value="DVLA unaware">DVLA unaware</option>
                      </select>
                    </div>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <div class="form-group">
                      <label>Are you born in the UK? *</label>
                      <div class="col-xs-6 col-md-6">
                        <input type="radio" name="ca_born_uk_1" value="Yes" required>
                        <label>Yes</label>
                      </div>
                      <div class="col-xs-6 col-md-6">
                        <input type="radio" name="ca_born_uk_1" value="No" required>
                        <label>No</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_uk_resident_1">If no, When did you became a UK resident? </label>
                    <div class="input-group">
                      <input id="ca_uk_resident_1" class="form-control datepicker" type="date" name="ca_uk_resident_1" placeholder="DD-MM-YYYY" readonly>
                      <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                  </div>
                </div><!---Row-->
                <div class="row">
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_other_vehicle_1">Use any other vehicles? *</label>
                    <select id="ca_other_vehicle_1" class="form-control" name="ca_other_vehicle_1" required>
                      <option value="" selected>Please Select</option>
                      <option value="No access to any other vehicle">No access to any other vehicle</option>
                      <option value="Own another car or van">Own another car or van</option>
                      <option value="Have use of another car">Have use of another car</option>
                      <option value="Company car(Including personal use)">Company car(Including personal use)</option>
                      <option value="Company car(Excluding personal use)">Company car(Excluding personal use)</option>
                    </select>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="ca_non_motoring_convictions_1">Non motoring criminal convictions</label>
                      <select id="ca_non_motoring_convictions_1" class="form-control" name="ca_non_motoring_convictions_1">
                        <option value="No" selected>No</option>
                        <option value="Yes">Yes</option>
                      </select>
                    </div>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label>Any motor accidents or claims in the last 5 years? *</label>
                      <div class="col-xs-12 col-md-3">
                        <input type="radio" name="ca_motor_accidents_1" value="Yes" required>
                        <label>Yes</label>
                      </div>
                      <div class="col-xs-12 col-md-9">
                        <input type="radio" name="ca_motor_accidents_1" value="No" checked required>
                        <label>No</label>
                      </div>
                     </div>
                  </div>
                </div><!--Row-->

                <!--==========================|| ADDITIONAL DRIVER 1 - ACCIDENST FORM ||===============================-->
                <fieldset id="accident-sub-from_1" class="row" style="display:none" disabled>
                  <div class="col-md-11 col-md-offset-1">
                    <legend class="legend">Motor Accidents or Claim Details (Additional Driver 1)</legend>
                    <div class="col-md-3">
                      <!--================|| ADDITIONAL DRIVER 1 - SECTION 1 ||======================-->
                      <legend class="legend">1</legend>
                      <div class="col-md-12">
                        <label for="type_1_1">Type:</label>
                        <select id="type_1_1" class="form-control" name="type_1_1">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_1_1">Date</label>
                          <input id="date_1_1" class="form-control datepicker" type="text" name="date_1_1" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_1_1">Damage:</label>
                          <select id="damage_1_1" class="form-control" name="damage_1_1">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_1_1">Cost(£) - if known:</label>
                          <input id="cost_1_1" class="form-control" type="number" name="cost_1_1">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_1_1">Fault:</label>
                        <select id="fault_1_1" class="form-control" name="fault_1_1">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_1_1" value="Yes" required>
                              <label class="form-check-label">Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_1_1" value="No" checked required>
                              <label class="form-check-label">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 1 -->
                    <!--===========================================================================-->
                    <!--================|| ADDITIONAL DRIVER 1 -  SECTION 2 ||===========================-->
                    <div class="col-md-3">
                      <legend class="legend">2</legend>
                      <div class="col-md-12">
                        <label for="type_2_1">Type:</label>
                        <select id="type_2_1" class="form-control" name="type_2_1">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_2_1">Date</label>
                          <input id="date_2_1" class="form-control datepicker" type="text" name="date_2_1" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_2_1">Damage:</label>
                          <select id="damage_2_1" class="form-control" name="damage_2_1">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_2_1">Cost(£) - if known:</label>
                          <input id="cost_2_1" class="form-control" type="number" name="cost_2_1">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_2_1">Fault:</label>
                        <select id="fault_2_1" class="form-control" name="fault_2_1">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_2_1" value="Yes" required>
                              <label>Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_2_1" value="No" checked required>
                              <label>No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 2 -->
                    <!--==========================================================================================-->
                    <!--================|| ADDITIONAL DRIVER 1 - SECTION 3 ||==================================-->
                    <div class="col-md-3">
                      <legend class="legend">3</legend>
                      <div class="col-md-12">
                        <label for="type_3_1">Type:</label>
                        <select id="type_3_1" class="form-control" name="type_3_1">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_3_1">Date</label>
                          <input id="date_3_1" class="form-control datepicker" type="text" name="date_3_1" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_3_1">Damage:</label>
                          <select id="damage_3_1" class="form-control" name="damage_3_1">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_3_1">Cost(£) - if known:</label>
                          <input id="cost_3_1" class="form-control" type="number" name="cost_3_1">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_3_1">Fault:</label>
                        <select id="fault_3_1" class="form-control" name="fault_3_1">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_3_1" value="Yes" required>
                              <label class="form-check-label">Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_3_1" value="No" checked required>
                              <label class="form-check-label">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 3 -->
                    <!--==========================================================================================-->
                    <!--================|| ADDITIONAL DRIVER 1 - ACCIDENTS SECTION 4 ||==================================-->
                    <div class="col-md-3">
                      <legend class="legend">4</legend>
                      <div class="col-md-12">
                        <label for="type_4_1">Type:</label>
                        <select id="type_4_1" class="form-control" name="type_4_1">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_4_1">Date</label>
                          <input id="date_4_1" class="form-control datepicker" type="text" name="date_4_1" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_4_1">Damage:</label>
                          <select id="damage_4_1" class="form-control" name="damage_4_1">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_4_1">Cost(£) - if known:</label>
                          <input id="cost_4_1" class="form-control" type="number" name="cost_4_1">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_4_1">Fault:</label>
                        <select id="fault_4_1" class="form-control" name="fault_4_1">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_4_1" value="Yes" required>
                              <label>Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_4_1" value="No" checked required>
                              <label>No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 4 -->
                    <div class="col-md-12">
                      <hr>
                    </div>
                  </div>
                </fieldset>

                <!--========================================================================================-->
                <!--========================================================================================-->
                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label>Any motoring convictions, driving license endorsements or fixed penalty points withing the last 5 years?</label>
                      <div class="col-xs-12 col-md-3">
                        <input type="radio" name="ca_motor_offences_1" value="Yes" required>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div class="col-xs-12 col-md-9">
                        <input type="radio" name="ca_motor_offences_1" value="No" checked required>
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div><!--Row-->

                <!--===============================|| ADDITIONAL 1 - OFFENCES FORM ||====================================================-->
                <fieldset id="offences-sub-from_1" class="row" style="display:none" disabled>
                  <div class="col-md-11 col-md-offset-1">
                    <legend class="legend">Motor Conviction, Fixed Penalty or Disqualification Details (Additional Driver 1)</legend>
                    <!--===============================|| ADDITIONAL 1 - SECTION 1 ||============================================-->
                    <div class="col-md-3">
                      <legend class="legend">1</legend>
                      <div class="form-group">
                        <label for="conviction_code_1_1">Conviction Code:</label>
                        <select id="conviction_code_1_1" class="form-control" name="conviction_code_1_1">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option valuse="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_1_1">Date of Conviction:</label>
                        <input id="date_conviction_1_1" class="form-control datepicker" name="date_conviction_1_1" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_1_1">Points:</label>
                        <select id="points_1_1" class="form-control" name="points_1_1">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_1_1">Fine(£) - if any:</label>
                        <input id="fine_libras_1_1" class="form-control" type="number" step="any" min="1" name="fine_libras_1_1">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_1_1">Ban(months) - if any:</label>
                        <input id="ban_month_1_1" class="form-control" type="number" step="1" min="1" name="ban_month_1_1">
                      </div>
                    </div>
                    <!--===================================================================================================-->
                    <!--===============================|| ADDITIONAL 1 - SECTION 2 ||==============================================-->
                    <div class="col-md-3">
                      <legend class="legend">2</legend>
                      <div class="form-group">
                        <label for="conviction_code_2_1">Conviction Code:</label>
                        <select id="mpenalties_code_2_1" class="form-control" name="conviction_code_2_1">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_2_1">Date of Conviction:</label>
                        <input id="date_conviction_2_1" class="form-control datepicker" name="date_conviction_2_1" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_2_1">Points:</label>
                        <select id="points_2_1" class="form-control" name="points_2_1">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_2_1">Fine(£) - if any:</label>
                        <input id="fine_libras_2_1" class="form-control" type="number" step="any" min="1" name="fine_libras_2_1">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_2_1">Ban(months) - if any:</label>
                        <input id="ban_month_2_1" class="form-control" type="number" step="1" min="1" name="ban_month_2_1">
                      </div>
                    </div>
                    <!--===============================|| ADDITIONAL 1 - SECTION 3 ||======================================-->
                    <div class="col-md-3">
                      <legend class="legend">3</legend>
                      <div class="form-group">
                        <label for="conviction_code_3_1">Conviction Code:</label>
                        <select id="mpenalties_code_3_1" class="form-control" name="conviction_code_3_1">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_3_1">Date of Conviction:</label>
                        <input id="date_conviction_3_1" class="form-control datepicker" name="date_conviction_3_1" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_3_1">Points:</label>
                        <select id="points_3_1" class="form-control" name="points_3_1">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_3_1">Fine(£) - if any:</label>
                        <input id="fine_libras_3_1" class="form-control" type="number" step="any" min="1" name="fine_libras_3_1">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_3_1">Ban(months) - if any:</label>
                        <input id="ban_month_3_1" class="form-control" type="number" step="1" min="1" name="ban_month_3_1">
                      </div>
                    </div>
                    <!--===============================|| ADDITIONAL 1 - SECTION 4 ||===================================-->
                    <div class="col-md-3">
                      <legend class="legend">4</legend>
                      <div class="form-group">
                        <label for="conviction_code_4_1">Conviction Code:</label>
                        <select id="mpenalties_code_4_1" class="form-control" name="conviction_code_4_1">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_4_1">Date of Conviction:</label>
                        <input id="date_conviction_4_1" class="form-control datepicker" name="date_conviction_4_1" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_4_1">Points:</label>
                        <select id="points_4_1" class="form-control" name="points_4_1">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_4_1">Fine(£) - if any:</label>
                        <input id="fine_libras_4_1" class="form-control" type="number" step="any" min="1" name="fine_libras_4_1">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_4_1">Ban(months) - if any:</label>
                        <input id="ban_month_4_1" class="form-control" type="number" step="1" min="1" name="ban_month_4_1">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <hr>
                  </div>
                </fieldset>

                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label>Would you like to add an additional driver (2)? *</label>
                      <div class="col-xs-12 col-md-3">
                        <input type="radio" name="additional_driver2" value="Yes" required>
                        <label>Yes</label>
                      </div>
                      <div class="col-xs-12 col-md-3">
                        <input type="radio" name="additional_driver2" value="No" checked required>
                        <label>No</label>
                      </div>
                    </div>
                  </div>
                </div>
            	</div>
            </fieldset>
            <!--===============================|| ADDITIONAL DRIVER FORM - 2 ||================================-->
            <!--===============================|| ADDITIONAL DRIVER FORM - 2 ||================================-->
            <!--===============================|| ADDITIONAL DRIVER FORM - 2 ||================================-->
            <fieldset id="driver_2" style="display:none" disabled>
              <div class="col-md-11 col-md-offset-1">
                <legend class="legend">Additional Driver (2) Details</legend>
                <div class="row">
                  <div class="col-md-12">
                    <label>Name *</label>
                  </div>
                  <div class="form-group col-md-2">
                    <select class="form-control" id="ca_title_2" name="ca_title_2" required>
                      <option value="Mr.">Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Miss">Miss</option>
                    </select>
                  </div>
                  <div class="form-group col-xs-12 col-md-2">
                    <input id="ca_first_name_2" class="form-control" type="text" name="ca_first_name_2" placeholder="First name" required>
                  </div>
                  <div class="form-group col-xs-12 col-md-2">
                    <input id="ca_middle_name_2" class="form-control" type="text" name="ca_middle_name_2" placeholder="Middle name">
                  </div>
                  <div class="form-group col-xs-12 col-md-2">
                    <input id="ca_sur_name_2" class="form-control" type="text" name="ca_sur_name_2" placeholder="Surname" required>
                  </div>
                </div><!--Row-->
                <div class="row">
                  <div class="form-group col-xs-12 col-md-4">
                    <label for="ca_relationship_2">Relationship to Proposer/Policy Holder *</label>
                    <select id="ca_relationship_2" class="form-control" name="ca_relationship_2" required>
                      <option value="">Please select</option>
                      <option value="Spouse">Spouse</option>
                      <option value="Civil Partner">Civil Partner</option>
                      <option value="Common Law Partner/Cohabitee">Common Law Partner/Cohabitee</option>
                      <option value="Son/Daughter">Son/Daughter</option>
                      <option value="Parent">Parent</option>
                      <option value="Brother/Sister">Brother/Sister</option>
                      <option value="Other Family">Other Family</option>
                      <option value="Employee">Employee</option>
                      <option value="Employer">Employer</option>
                      <option value="Business Partner">Business Partner</option>
                      <option value="Other">Other</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_birthdate_2">Date of Birth *</label>
                    <div class="input-group">
                      <input id="ca_birthdate_2" class="form-control datepicker" type="date" name="ca_birthdate_2" placeholder="DD-MM-YYYY" required>
                      <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_marital_status_2">Marital Status *</label>
                    <select id="ca_marital_status_2" class="form-control" name="ca_marital_status_2" required>
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
                    <label for="ca_employment_status_2">What's your employment status? *</label>
                    <select id="ca_employment_status_2" class="form-control" name="ca_employment_status_2" required>
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
                    <label for="ca_employed_ocupation_2">If Employed/Self Employed, what is your occupation: </label>
                    <input id="ca_employed_ocupation_2" class="form-control" type="text" name="ca_employed_ocupation_2">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-md-4">
                    <label for="ca_employed_business_2">If Employed/Self Employed, what type of business: </label>
                    <input id="ca_employed_business_2" class="form-control" type="text" name="ca_employed_business_2">
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="form-group col-xs-12 col-md-4">
                    <label for="ca_license_type_2">What type of license do you have? *</label>
                    <select id="ca_license_type_2" class="form-control" name="ca_license_type_2" required>
                      <option value="">Please Select </option>
                      <option value="Full UK Manual">Full UK Manual</option>
                      <option value="Full UK Automatic">Full UK Automatic</option>
                      <option value="Provisional UK">Provisional UK</option>
                      <option value="Full Euro EEC">Full Euro EEC</option>
                      <option value="Full UK-Pass Plus">Full UK-Pass Plus</option>
                      <option value="Full UK-IAM">Full UK-IAM</option>
                      <option value="International licence (non-exchangeable)">International licence (non-exchangeable)</option>
                      <option value="International licence (exchangeable)">International licence (exchangeable)</option>
                    </select>
                  </div>
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_period_license_2">Period License held for *</label>
                    <select id="ca_period_license_2" class="form-control" name="ca_period_license_2">
                      <option value="" selected>Please Select</option>
                      <option value="Less than 1 year">Less than 1 year</option>
                      <option value="1 year">1 year</option><option value="2 years">2 years</option>
                      <option value="3 years">3 years</option><option value="4 years">4 years</option>
                      <option value="5 years">5 years</option><option value="6 years">6 years</option>
                      <option value="7 years">7 years</option><option value="8 years">8 years</option>
                      <option value="9 years">9 years</option><option value="10 years">10 years</option>
                      <option value="11 years">11 years</option><option value="12 years">12 years</option>
                      <option value="13 years">13 years</option><option value="14 years">14 years</option>
                      <option value="15 years">15 years</option><option value="15 years">16 years</option>
                      <option value="15 years">17 years</option><option value="15 years">18 years</option>
                      <option value="15 years">19 years</option><option value="15 years">20 years</option>
                      <option value="20 years +">20 years +</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-xs-12 col-md-4">
                    <label for="ca_date_provitional_license_2">Date obtained provisional licence? *</label>
                    <div class="input-group">
                      <input id="ca_date_provitional_license_2" class="form-control datepicker" type="text" name="ca_date_provitional_license_2" placeholder="DD-MM-YYYY" readonly>
                      <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                  </div>
                </div><!--Row-->
                
                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <fieldset class="form-group">
                      <label>Would you like to enter your driving licence number?</label>
                      <div class="col-xs-12 col-md-6">
                        <input type="radio" name="ca_license_enter_2" value="Yes">
                        <label>Yes</label>
                      </div>
                      <div class="col-xs-12 col-md-6">
                        <input type="radio" name="ca_license_enter_2" value="No" checked>
                        <label>No</label>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col-xs-12 col-md-3">
                    <div class="form-group">
                      <label for="ca_license_number_2">Please enter your 16-character driving licence number.</label>
                      <input id="ca_license_number_2" class="form-control" type="text" name="ca_license_number_2" maxlength="16" readonly>
                    </div>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label for="dvla_medical_2">DVLA medical conditions or disabilities *</label>
                      <select id="dvla_medical_2" class="form-control" name="dvla_medical_2" required>
                        <option value="" selected>Please Select</option>
                        <option value="No">No</option>
                        <option value="DVLA aware – No restrictions">DVLA aware – No restrictions</option>
                        <option value="DVLA aware – 1 year restricted Licence">DVLA aware – 1 year restricted Licence</option>
                        <option value="DVLA aware – 2 year restricted Licence">DVLA aware – 2 year restricted Licence</option>
                        <option value="DVLA aware – 3 year restricted Licence">DVLA aware – 3 year restricted Licence</option>
                        <option value="DVLA unaware">DVLA unaware</option>
                      </select>
                    </div>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-xs-12 col-md-3">
                    <div class="form-group">
                      <label>Are you born in the UK? *</label>
                      <div class="col-xs-6 col-md-6">
                        <input type="radio" name="ca_born_uk_2" value="Yes" required>
                        <label>Yes</label>
                      </div>
                      <div class="col-xs-6 col-md-6">
                        <input type="radio" name="ca_born_uk_2" value="No" required>
                        <label>No</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_uk_resident_2">If no, When did you became a UK resident? </label>
                    <div class="input-group">
                      <input id="ca_uk_resident_2" class="form-control datepicker" type="date" name="ca_uk_resident_2" placeholder="DD-MM-YYYY" readonly>
                      <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
                    </div>
                  </div>
                </div><!---Row-->
                <div class="row">
                  <div class="form-group col-xs-12 col-md-3">
                    <label for="ca_other_vehicle_2">Use any other vehicles? *</label>
                    <select id="ca_other_vehicle_2" class="form-control" name="ca_other_vehicle_2" required>
                      <option value="" selected>Please Select</option>
                      <option value="No access to any other vehicle">No access to any other vehicle</option>
                      <option value="Own another car or van">Own another car or van</option>
                      <option value="Have use of another car">Have use of another car</option>
                      <option value="Company car(Including personal use)">Company car(Including personal use)</option>
                      <option value="Company car(Excluding personal use)">Company car(Excluding personal use)</option>
                    </select>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="ca_non_motoring_convictions_2">Non motoring criminal convictions</label>
                      <select id="ca_non_motoring_convictions_2" class="form-control" name="ca_non_motoring_convictions_2">
                        <option value="No" selected>No</option>
                        <option value="Yes">Yes</option>
                      </select>
                    </div>
                  </div>
                </div><!--Row-->

                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label>Any motor accidents or claims in the last 5 years? *</label>
                      <div class="col-xs-12 col-md-3">
                        <input type="radio" name="ca_motor_accidents_2" value="Yes" required>
                        <label>Yes</label>
                      </div>
                      <div class="col-xs-12 col-md-9">
                        <input type="radio" name="ca_motor_accidents_2" value="No" checked required>
                        <label>No</label>
                      </div>
                     </div>
                  </div>
                </div><!--Row-->

                <!--==========================|| ADDITIONAL DRIVER 2 - ACCIDENST FORM ||===============================-->
                <fieldset id="accident-sub-from_2" class="row" style="display:none" disabled>
                  <div class="col-md-11 col-md-offset-1">
                    <legend class="legend">Motor Accidents or Claim Details (Additional Driver 2)</legend>
                    <div class="col-md-3">
                      <!--================|| ADDITIONAL DRIVER 2 - SECTION 1 ||======================-->
                      <legend class="legend">1</legend>
                      <div class="col-md-12">
                        <label for="type_1_2">Type:</label>
                        <select id="type_1_2" class="form-control" name="type_1_2">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_1_2">Date</label>
                          <input id="date_1_2" class="form-control datepicker" type="text" name="date_1_2" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_1_2">Damage:</label>
                          <select id="damage_1_2" class="form-control" name="damage_1_2">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_1_2">Cost(£) - if known:</label>
                          <input id="cost_1_2" class="form-control" type="number" name="cost_1_2">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_1_2">Fault:</label>
                        <select id="fault_1_2" class="form-control" name="fault_1_2">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_1_2" value="Yes" required>
                              <label class="form-check-label">Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_1_2" value="No" checked required>
                              <label class="form-check-label">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 1 -->
                    <!--===========================================================================-->
                    <!--================|| ADDITIONAL DRIVER 1 -  SECTION 2 ||===========================-->
                    <div class="col-md-3">
                      <legend class="legend">2</legend>
                      <div class="col-md-12">
                        <label for="type_2_2">Type:</label>
                        <select id="type_2_2" class="form-control" name="type_2_2">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_2_2">Date</label>
                          <input id="date_2_2" class="form-control datepicker" type="text" name="date_2_2" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_2_2">Damage:</label>
                          <select id="damage_2_2" class="form-control" name="damage_2_2">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_2_2">Cost(£) - if known:</label>
                          <input id="cost_2_2" class="form-control" type="number" name="cost_2_2">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_2_2">Fault:</label>
                        <select id="fault_2_2" class="form-control" name="fault_2_2">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_2_2" value="Yes" required>
                              <label>Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_2_2" value="No" checked required>
                              <label>No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 2 -->
                    <!--==========================================================================================-->
                    <!--================|| ADDITIONAL DRIVER 1 - SECTION 3 ||==================================-->
                    <div class="col-md-3">
                      <legend class="legend">3</legend>
                      <div class="col-md-12">
                        <label for="type_3_2">Type:</label>
                        <select id="type_3_2" class="form-control" name="type_3_2">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_3_2">Date</label>
                          <input id="date_3_2" class="form-control datepicker" type="text" name="date_3_2" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_3_2">Damage:</label>
                          <select id="damage_3_2" class="form-control" name="damage_3_2">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_3_2">Cost(£) - if known:</label>
                          <input id="cost_3_2" class="form-control" type="number" name="cost_3_2">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_3_2">Fault:</label>
                        <select id="fault_3_2" class="form-control" name="fault_3_2">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_3_2" value="Yes" required>
                              <label class="form-check-label">Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" class="form-check-input" name="any_injuries_3_2" value="No" checked required>
                              <label class="form-check-label">No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 3 -->
                    <!--==========================================================================================-->
                    <!--================|| ADDITIONAL DRIVER 1 - ACCIDENTS SECTION 4 ||==================================-->
                    <div class="col-md-3">
                      <legend class="legend">4</legend>
                      <div class="col-md-12">
                        <label for="type_4_2">Type:</label>
                        <select id="type_4_2" class="form-control" name="type_4_2">
                          <option value="" selected>Please select</option>
                          <option value="Accident">Accident</option>
                          <option value="Explosion">Explosion</option>
                          <option value="Fire Damage">Fire Damage</option>
                          <option value="Lightning Damage">Lightning Damage</option>
                          <option value="Malicious Damage">Malicious Damage</option>
                          <option value="Riot Damage">Riot Damage</option>
                          <option value="Storm Damage">Storm Damage</option>
                          <option value="Theft - Accessories">Theft - Accessories</option>
                          <option value="Theft - Personal Effects">Theft - Personal Effects</option>
                          <option value="Theft - Sound Equipment">Theft - Sound Equipment</option>
                          <option value="Theft Of Vehicle">Theft Of Vehicle</option>
                          <option value="Theft Related Damage">Theft Related Damage</option>
                          <option value="Windscreen Only">Windscreen Only</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="date_4_2">Date</label>
                          <input id="date_4_2" class="form-control datepicker" type="text" name="date_4_2" placeholder="DD-MM-YYYY">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="damage_4_2">Damage:</label>
                          <select id="damage_4_2" class="form-control" name="damage_4_2">
                            <option value="" selected>Please select</option>
                            <option value="Damaged - Amount Known">Damaged - Amount Known</option>
                            <option value="No Damage">No Damage</option>
                            <option value="UnknownWrite-Off">UnknownWrite-Off</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label for="cost_4_2">Cost(£) - if known:</label>
                          <input id="cost_4_2" class="form-control" type="number" name="cost_4_2">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <label for="fault_4_2">Fault:</label>
                        <select id="fault_4_2" class="form-control" name="fault_4_2">
                          <option value="" selected>Please select</option>
                          <option value="Both parties">Both parties</option>
                          <option value="No other vehicle involved">No other vehicle involved</option>
                          <option value="Other party">Other party</option>
                          <option value="Our Driver">Our Driver</option>
                          <option value="Unoccupied Vehicle">Unoccupied Vehicle</option>
                        </select>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Any injuries:</label>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_4_2" value="Yes" required>
                              <label>Yes</label>
                            </div>
                          </div>
                          <div class="form-check">
                            <div class="col-xs-6">
                              <input type="radio" name="any_injuries_4_2" value="No" checked required>
                              <label>No</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Col-md-3 Section 4 -->
                    <div class="col-md-12">
                      <hr>
                    </div>
                  </div>
                </fieldset>

                <!--========================================================================================-->
                <!--========================================================================================-->
                <div class="row">
                  <div class="col-xs-12 col-md-4">
                    <div class="form-group">
                      <label>Any motoring convictions, driving license endorsements or fixed penalty points withing the last 5 years?</label>
                      <div class="col-xs-12 col-md-3">
                        <input type="radio" name="ca_motor_offences_2" value="Yes" required>
                        <label class="form-check-label">Yes</label>
                      </div>
                      <div class="col-xs-12 col-md-9">
                        <input type="radio" name="ca_motor_offences_2" value="No" checked required>
                        <label class="form-check-label">No</label>
                      </div>
                    </div>
                  </div>
                </div><!--Row-->

                <!--===============================|| ADDITIONAL 2 - OFFENCES FORM ||====================================================-->
                <fieldset id="offences-sub-from_2" class="row" style="display:none" disabled>
                  <div class="col-md-11 col-md-offset-1">
                    <legend class="legend">Motor Conviction, Fixed Penalty or Disqualification Details (Additional Driver 2)</legend>
                    <!--===============================|| ADDITIONAL 2 - SECTION 1 ||============================================-->
                    <div class="col-md-3">
                      <legend class="legend">1</legend>
                      <div class="form-group">
                        <label for="conviction_code_1_2">Conviction Code:</label>
                        <select id="conviction_code_1_2" class="form-control" name="conviction_code_1_2">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option valuse="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_1_2">Date of Conviction:</label>
                        <input id="date_conviction_1_2" class="form-control datepicker" name="date_conviction_1_2" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_1_2">Points:</label>
                        <select id="points_1_2" class="form-control" name="points_1_2">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_1_2">Fine(£) - if any:</label>
                        <input id="fine_libras_1_2" class="form-control" type="number" step="any" min="1" name="fine_libras_1_2">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_1_2">Ban(months) - if any:</label>
                        <input id="ban_month_1_2" class="form-control" type="number" step="1" min="1" name="ban_month_1_2">
                      </div>
                    </div>
                    <!--===================================================================================================-->
                    <!--===============================|| ADDITIONAL 1 - SECTION 2 ||==============================================-->
                    <div class="col-md-3">
                      <legend class="legend">2</legend>
                      <div class="form-group">
                        <label for="conviction_code_2_2">Conviction Code:</label>
                        <select id="mpenalties_code_2_2" class="form-control" name="conviction_code_2_2">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_2_2">Date of Conviction:</label>
                        <input id="date_conviction_2_2" class="form-control datepicker" name="date_conviction_2_2" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_2_2">Points:</label>
                        <select id="points_2_2" class="form-control" name="points_2_2">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_2_2">Fine(£) - if any:</label>
                        <input id="fine_libras_2_2" class="form-control" type="number" step="any" min="1" name="fine_libras_2_2">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_2_2">Ban(months) - if any:</label>
                        <input id="ban_month_2_2" class="form-control" type="number" step="1" min="1" name="ban_month_2_2">
                      </div>
                    </div>
                    <!--===============================|| ADDITIONAL 1 - SECTION 3 ||======================================-->
                    <div class="col-md-3">
                      <legend class="legend">3</legend>
                      <div class="form-group">
                        <label for="conviction_code_3_2">Conviction Code:</label>
                        <select id="mpenalties_code_3_2" class="form-control" name="conviction_code_3_2">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_3_2">Date of Conviction:</label>
                        <input id="date_conviction_3_2" class="form-control datepicker" name="date_conviction_3_2" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_3_2">Points:</label>
                        <select id="points_3_2" class="form-control" name="points_3_2">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_3_2">Fine(£) - if any:</label>
                        <input id="fine_libras_3_2" class="form-control" type="number" step="any" min="1" name="fine_libras_3_2">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_3_2">Ban(months) - if any:</label>
                        <input id="ban_month_3_2" class="form-control" type="number" step="1" min="1" name="ban_month_3_2">
                      </div>
                    </div>
                    <!--===============================|| ADDITIONAL 1 - SECTION 4 ||===================================-->
                    <div class="col-md-3">
                      <legend class="legend">4</legend>
                      <div class="form-group">
                        <label for="conviction_code_4_2">Conviction Code:</label>
                        <select id="mpenalties_code_4_2" class="form-control" name="conviction_code_4_2">
                          <option value="" selected>Please select</option>
                          <option value="AC10">AC10</option><option value="AC20">AC20</option><option value="AC30">AC30</option><option value="AC99">AC99</option>
                          <option value="BA10">BA10</option><option value="BA20">BA20</option><option value="BA30">BA30</option><option value="BA99">BA99</option>
                          <option value="CD10">CD10</option><option value="CD20">CD20</option><option value="CD30">CD30</option><option value="CD40">CD40</option>
                          <option value="CD50">CD50</option><option value="CD60">CD60</option><option value="CD70">CD70</option><option value="CD80">CD80</option>
                          <option value="CD90">CD90</option><option value="CD99">CD99</option><option value="CU10">CU10</option><option value="CU20">CU20</option>
                          <option value="CU30">CU30</option><option value="CU40">CU40</option><option value="CU50">CU50</option><option value="CU60">CU60</option>
                          <option value="CU80">CU80</option><option value="DD10">DD10</option><option value="DD20">DD20</option><option value="DD30">DD30</option>
                          <option value="DD40">DD40</option><option value="DD50">DD50</option><option value="DD60">DD60</option><option value="DD70">DD70</option>
                          <option value="DD80">DD80</option><option value="DD90">DD90</option><option value="DR10">DR10</option><option value="DR20">DR20</option>
                          <option value="DR30">DR30</option><option value="DR40">DR40</option><option value="DR50">DR50</option><option value="DR60">DR60</option>
                          <option value="DR70">DR70</option><option value="DR80">DR80</option><option value="DR90">DR90</option><option value="IN10">IN10</option>
                          <option value="LC10">LC10</option><option value="LC20">LC20</option><option value="LC30">LC30</option><option value="LC40">LC40</option>
                          <option value="LC50">LC50</option><option value="MS10">MS10</option><option value="MS20">MS20</option><option value="MS30">MS30</option>
                          <option value="MS40">MS40</option><option value="MS50">MS50</option><option value="MS60">MS60</option><option value="MS70">MS70</option>
                          <option value="MS80">MS80</option><option value="MS90">MS90</option><option value="MS99">MS99</option><option value="MW10">MW10</option>
                          <option value="PC10">PC10</option><option value="PC20">PC20</option><option value="PC30">PC30</option><option value="PL10">PL10</option>
                          <option value="PL20">PL20</option><option value="PL30">PL30</option><option value="PL40">PL40</option><option value="PL50">PL50</option>
                          <option value="SAC">SAC</option><option value="SP10">SP10</option><option value="SP20">SP20</option><option value="SP30">SP30</option>
                          <option value="SP40">SP40</option><option value="SP50">SP50</option><option value="SP60">SP60</option><option value="TS10">TS10</option>
                          <option value="TS20">TS20</option><option value="TS30">TS30</option><option value="TS40">TS40</option><option value="TS50">TS50</option>
                          <option value="TS60">TS60</option><option value="TS70">TS70</option><option value="TT99">TT99</option><option value="UT10">UT10</option>
                          <option value="UT20">UT20</option><option value="UT30">UT30</option><option value="UT40">UT40</option><option value="UT50">UT50</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="date_conviction_4_2">Date of Conviction:</label>
                        <input id="date_conviction_4_2" class="form-control datepicker" name="date_conviction_4_2" placeholder="DD-MM-YYYY">
                      </div>
                      <div class="form-group">
                        <label for="points_4_2">Points:</label>
                        <select id="points_4_2" class="form-control" name="points_4_2">
                          <option value="" selected="">Please select</option><option value="None">None</option>
                          <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                          <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                          <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                          <option value="10">10</option><option value="11">11</option><option value="12">12</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="fine_libras_4_2">Fine(£) - if any:</label>
                        <input id="fine_libras_4_2" class="form-control" type="number" step="any" min="1" name="fine_libras_4_2">
                      </div>
                      <div class="form-group">
                        <label for="ban_month_4_2">Ban(months) - if any:</label>
                        <input id="ban_month_4_2" class="form-control" type="number" step="1" min="1" name="ban_month_4_2">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <hr>
                  </div>
                </fieldset>
              </div>
            </fieldset>
            <!--===========================================================================================-->
            <!--===========================================================================================-->
            <!--===========================================================================================-->
            <hr>
            <div class="row">
              <div class="form-group col-xs-12 col-md-3">
                <label for="heard_from_us">How did you hear about us?</label>
                <select id="heard_from_us" class="form-control" name="heard_from_us">
                  <option value="Walk in" selected>Please select</option> 
                  <option value="Walk In">Walk In</option>
                  <option value="Word of Mouth">Word of Mouth</option> 
                  <option value="Leaflet">Leaflet</option> 
                  <option value="Existing customer">Existing customer </option> 
                  <option value="Friend or Family">Friend or Family</option> 
                  <option value="Email/Newsletter">Email/Newsletter</option> 
                  <option value="T.V Advertisement">T.V Advertisement </option>
                </select>
              </div>
            </div><!--Row-->
            <div class="row">
              <div class="form-group col-xs-12 col-md-3">
                <label for="referrer">If by a friend, family or referrer pelase state their name</label>
                <input id="referrer" class="form-control" type="text" name="referrer" value="No prueba">
                <small class="help-text">This information is solely for our marketing purpose.</small>
              </div>
            </div><!--Row-->

            <div class="row">
              <div class="form-group col-xs-12 col-md-3">
                <label for="comments">Additional comments</label>
                <textarea id="comments" class="form-control" type="text" name="comments">Prueba</textarea>
              </div>
            </div><!--Row-->
            
            <div class="row">
              <div class="col-md-4 col-md-offset-4">
                <br>
                <button type="submit" class="btn btn-block btn-submit">Submit Quote</button>
              </div>
            </div>
          </form>
          <br><br><br>
         </div>
        
    </div>
</div><!--Container-->

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

	    $('#policy_start').datepicker({
        autoclose: true,
	      format: "dd-mm-yyyy",
	      startDate: "today",
	      enableOnReadonly: false
	    });

	    $("input[name='born_uk']").click(function(){
	      var bool = (this.value !== "No");
	      $('#became_resident').prop({'readonly':bool,'required':(!bool)}).val('');
	    });

	    //Activar si Do you own a business = Yes
	    $("input[name='business_owner']").click(function(){
	      var bool = (this.value !== "Yes");
	      $('#business').prop({'readonly':bool,'required':(!bool)}).val('');
	    });

	    $("#license_type").change(function(){
	      var bool = (this.value !== "Full UK Automatic");
	      $('#date_provitional_license').prop({'readonly':bool,'required':(!bool)}).val('');
	    });

	    $("input[name='license_enter']").click(function(){
	      var bool = (this.value !== "Yes");
	      $('#license_number').prop({'readonly':bool,'required':(!bool)}).val('');
	    });

	    //
	    $("#additional_qualifications").change(function(){
	      var bool = (this.value == "" || this.value == "No");
	      $('#date_qualifications_obtained').prop({'readonly':bool,'required':(!bool)}).val('');
	    });

	    //Activate accidents sub form
	    $("input[name='motor_accidents']").click(function(){
	      var bool = (this.value === "Yes");
	      if(bool){
	        $('#accident-sub-from').show().prop('disabled',!bool);
	      }else{
	        $('#accident-sub-from').hide().prop('disabled',!bool);
	      }
	    });

	    //Activate Offences sub form
	    $("input[name='motor_offences']").click(function(){
	      var bool = (this.value === "Yes");
	      if(bool){
	        $('#offences-sub-from').show().prop('disabled',!bool);
	      }else{
	        $('#offences-sub-from').hide().prop('disabled',!bool);
	      }
	    });

	    $("#vehicle_date_purchase_not").click(function(){
	      var bool = this.checked;
	      var text = bool ? 'Not yet.':'';
	      $('#vehicle_date_purchase').prop('readonly',bool).val(text);
	    });

	    $('#usage_kept_same_address').change(function(){
	      var bool = (this.value == "No");
	      $('#usage_kept_other_address').prop({'readonly':!bool,'required':bool}).val('');
	    });

	    $('#no_claims').change(function(){
	      var bool = (this.value == "" || this.value == "No NCD");
	      $('#no_claims_earned_uk,#no_claims_protect').prop({'disabled':bool,'required':!bool}).val('');
	    })

	    //Activate ADDITIONAL FORM 1
	    $("input[name='additional_driver1']").click(function(){
	      var bool = (this.value === "Yes");
	      if(bool){
	        $('#driver_1').show().prop('disabled',!bool);
	      }else{
	        $('#driver_1').hide().prop('disabled',!bool);
	      }
	    });

      //=================|| ADITIONAL DRIVER 1 ||======================
      $("#ca_license_type_1").change(function(){
        var bool = (this.value !== "Full UK Automatic");
        $('#ca_date_provitional_license_1').prop({'readonly':bool,'required':(!bool)}).val('');
      });
      $("input[name='ca_license_enter_1']").click(function(){
        var bool = (this.value !== "Yes");
        $('#ca_license_number_1').prop({'readonly':bool,'required':(!bool)}).val('');
      });
      $("input[name='ca_born_uk_1']").click(function(){
        var bool = (this.value !== "No");
        $('#ca_uk_resident_1').prop({'readonly':bool,'required':(!bool)}).val('');
      });
      //====================================================================================
      //Activate accidents sub form ADDITIONAL 1
      $("input[name='ca_motor_accidents_1']").click(function(){
        var bool = (this.value === "Yes");
        if(bool){
          $('#accident-sub-from_1').show().prop('disabled',!bool);
        }else{
          $('#accident-sub-from_1').hide().prop('disabled',!bool);
        }
      });

      //Activate Offences sub form  ADDITIONAL 1
      $("input[name='ca_motor_offences_1']").click(function(){
        var bool = (this.value === "Yes");
        if(bool){
          $('#offences-sub-from_1 ').show().prop('disabled',!bool);
        }else{
          $('#offences-sub-from_1').hide().prop('disabled',!bool);
        }
      });

      //Activate ADDITIONAL FORM 2
      $("input[name='additional_driver2']").click(function(){
        var bool = (this.value === "Yes");
        if(bool){
          $('#driver_2').show().prop('disabled',!bool);
        }else{
          $('#driver_2').hide().prop('disabled',!bool);
        }
      });

      //=================|| ADITIONAL DRIVER 2 ||======================
      $("#ca_license_type_2").change(function(){
        var bool = (this.value !== "Full UK Automatic");
        $('#ca_date_provitional_license_2').prop({'readonly':bool,'required':(!bool)}).val('');
      });
      $("input[name='ca_license_enter_2']").click(function(){
        var bool = (this.value !== "Yes");
        $('#ca_license_number_2').prop({'readonly':bool,'required':(!bool)}).val('');
      });
      $("input[name='ca_born_uk_2']").click(function(){
        var bool = (this.value !== "No");
        $('#ca_uk_resident_2').prop({'readonly':bool,'required':(!bool)}).val('');
      });
      //====================================================================================
      //Activate accidents sub form ADDITIONAL 2
      $("input[name='ca_motor_accidents_2']").click(function(){
        var bool = (this.value === "Yes");
        if(bool){
          $('#accident-sub-from_2').show().prop('disabled',!bool);
        }else{
          $('#accident-sub-from_2').hide().prop('disabled',!bool);
        }
      });

      //Activate Offences sub form  ADDITIONAL 2
      $("input[name='ca_motor_offences_2']").click(function(){
        var bool = (this.value === "Yes");
        if(bool){
          $('#offences-sub-from_2 ').show().prop('disabled',!bool);
        }else{
          $('#offences-sub-from_2').hide().prop('disabled',!bool);
        }
      });
	  });
	</script>
@endsection