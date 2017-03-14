@extends('layouts.app')

@section('content')

<div class="content">
	<div class="row">
		<div class="col-md-10">
			<section class="perfil">
			      <div class="row">
			        <div class="col-md-12">
			          <h1 class="page-header" >
			            <i class="fa fa-wheelchair" aria-hidden="true"></i> 
			            <small class="pull-right">Accident insurer details</small>
			          </h1>
			        </div>
			        <div class="col-md-4">
			          <h4>Datos del usuario</h4>
			          <p><b>Name:</b> {{$accidents->title}}{{$accidents->first_name}} {{$accidents->sur_name}}</p>
			          <p><b>Vehicle registration:</b> {{$accidents->vehicle_registration}}</p>
			          <p><b></b></p></p>
			          <p><b></b></p></p>
			          <p><b></b></p></p>
			          <p><b></b></p></p>
			          <p><b></b></p></p>
			          <p><b></b></p></p>
			         
			        </div>
			      </div>
    	</section>
		</div>
	</div>
</div>

@stop