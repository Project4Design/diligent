@extends('layouts.app')

@section('content')

	<section class="content">
		<!-- Info boxes -->
    <div class="row">
      <div class="col-md-2 col-md-offset-1 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($cars) }}</h3>
            <p>Car Insurances</p>
          </div>
          <div class="icon">
            <i class="fa fa-car"></i>
          </div>
          <a href="{{ url('admin/cars') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
			
      <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($vans) }}</h3>
            <p>Van Insurances</p>
          </div>
          <div class="icon">
            <i class="fa fa-bus"></i>
          </div>
          <a href="{{ url('admin/vans') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($homes) }}</h3>
            <p>Home Insurances</p>
          </div>
          <div class="icon">
            <i class="fa fa-home"></i>
          </div>
          <a href="{{ url('admin/homes') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($business) }}</h3>
            <p>Business Insurance</p>
          </div>
          <div class="icon">
            <i class="fa fa-building"></i>
          </div>
          <a href="{{ url('admin/business') }}" class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ $accidents }}</h3>
            <p>Accident Insurance</p>
          </div>
          <div class="icon">
            <i class="fa fa-wheelchair"></i>
          </div>
          <a href="{{ url('admin/accidents') }} " class="small-box-footer">
            More info <i class="fa fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div><!--row-->

	  <div class="row">
	    <div class="col-md-12">
	      <div class="box box-danger">
	        <div class="box-header with-border">
	          <h3 class="box-title">Last Insurance registered</h3>
	          <div class="box-tools pull-right">
	            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
	            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
	          </div>
	        </div>
	        <!-- /.box-header -->
	        <div class="box-body">
          	<div class="row">
            	<div class="col-md-12">

          		</div>
          	</div><!-- /.row -->
	        </div><!-- /.box-body -->
	      </div><!-- /.box -->
	    </div><!-- /.col -->
	  </div><!-- /.row -->

	</section><!-- /.content -->
@endsection