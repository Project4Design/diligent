@extends('layouts.front')

@section('title','Car - '.config('app.name'))

@section('content')
<div class="container-fluid">
  <section class="row">
    <div class="col-md-12"><div style="padding-top:70px;"></div></div>
    <div class="col-md-10 col-md-offset-1">
      <h1 class="text-center" style="color:#B51235;margin:30px 0">Car Insurance</h1>
      <div class="row">
        <div class="col-md-3" style="background-color: #F5F5F5;margin-bottom:30px">
          @include('front.tips')
        </div>

        <div class="col-md-9">
          <div class="col-md-8">
            <h4>We advise you to shop around to locate the best deal for insurance</h4>
            <p class="text-justify">
              If you fill out our form located on our website, we can then look into your current situation and the conditions you are currently residing in.
              With the given information we will manually search into a deeper field of scope, to find insurance suited to your lifestyle,
              usually this is a more challenging premium which in turn will save you money and time.
              <br><br>  
              Any data you supply will only be used for the purposes of dealing with your enquiry.
              For mutual security, calls may be recorded and monitored for training purposes.
            </p>
          </div>
          <div class="col-md-4">
            <img class="img-responsive" src="img/car-insure-300x200.jpg">
          </div>

          <div class="col-md-12">
            <p class="text-justify">
              We do not act as a broker or agent for any particular insurance company, although we act as an introducer.
              We provide you with links to comparison websites, and other various companies,
              to find you the best possible deal so that you can use our website with ease to save money.
              If you would like us to manually fill out any form on your behalf, we can do so,
              as long as you authorise us and provide us with accurate information. Based on the details given,
              we can provide you with prices from various different companies from price comparison sites.
              <b>Diligent Services</b> does not make any personal recommendations as to the suitability of the policy to individual client’s circumstances.
            </p>
          </div>

          <div class="col-md-12">
            <h4>Stay Legal</h4>
            <p class="text-justify">
              The law states that the registered keeper of a vehicle must keep it insured unless they’ve made a Statutory Off Road Notification.
              If you’re not insured and haven’t made a Statutory Off Road Notification, you could face a penalty,
              have the vehicle wheel-clamped, impounded, or destroyed.
              <br><br>
              If you are insured it is important to check that your vehicle details are recorded correctly on the Motor Insurance Database.
              You can do this for free by checking  <a href="http://ownvehicle.askmid.com/">askMID here</a>.
              Simply enter your vehicle registration number and if your details do not appear, or are incorrect,
              you should contact your insurance provider immediately so that they can update your records.
              <a href="{{ url('/car-quote') }}">Get a tailored quote</a>
            </p>
          </div>

          <div class="col-md-12">
            @include('front.insurances')
          </div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 quote-button">
      <a href="{{ url('car-quote') }}">Get a quote</a>
    </div>
  </section>
</div>
@endsection