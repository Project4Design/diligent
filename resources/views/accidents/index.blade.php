@extends('layouts.app')

@section('title','Accidents - '.config('app.name'))
@section('header','Accidents Quotes')
@section('breadcrumb')
	<ol class="breadcrumb">
	  <li><a href="{{ route('index') }}"><i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard</a></li>
	  <li class="active"> Accidents </li>
	</ol>
@endsection
@section('content')
<!-- Main content -->
	<div class="content">
	  <!-- Info boxes -->
	 	<div class="row">
 			<div class="col-md-3 col-sm-6 col-xs-12 col-lg-3">
        <div class="small-box bg-blue">
          <div class="inner">
            <h3>{{ count($accidents) }}</h3>
            <p>Accident Quotes</p>
          </div>
          <div class="icon">
            <i class="fa fa-wheelchair"></i>
          </div>
        </div>
      </div>
	 	</div>

		<div class="row">
			<div class="col-md-12">
		 		<div class="box box-warning">
		      <div class="box-header with-border">
		        <h3 class="box-title"><i class="fa fa-file-text-o"></i> Accidents</h3>
		      </div>
		      <div class="box-body">
		      	<div class="table-responsive">
					<table class="table table-bordered table-condensed table-hover data-table">
						<thead style="background-color: skyblue">
							<tr>
								<th class="text-center">#</th>
								<th class="text-center"><strong>Name</strong></th>
								<th class="text-center"><strong>Vehicle registration</strong></th>
								<th class="text-center"><strong>Birthdate</strong></th>
								<th class="text-center"><strong>House number name</strong></th>
								<th class="text-center"><strong>First line address</strong></th>
								<th class="text-center"><strong>Postcode</strong></th>
								<th class="text-center"><strong>Phone</strong></th>
								<th class="text-center"><strong>Acción</strong></th>

							</tr>
						</thead>
						@php
							$i = 1;
						@endphp
						@foreach($accidents as $a)
						<tbody>
							  <tr>
							    <td class="text-center">{{$i}}</td>
								<td class="text-center">{{$a->title}} {{$a->first_name}} {{$a->sur_name}}</td>
								<td class="text-center">{{$a->vehicle_registration}}</td>
								<td class="text-center">{{$a->birthdate}}</td>
								<td class="text-center">{{$a->house_number_name}}</td>
								<td class="text-center">{{$a->first_line_address}}</td>
								<td class="text-center">{{$a->postcode}}</td>
								<td class="text-center">{{$a->phone}}</td>
								<td class="text-center">
									<a href="{{url('admin/accidents/'.$a->id_accidents_management.'')}}" class="btn btn-success btn-flat"><i class="fa fa-search "></i></a>
								</td>
							 </tr>
						</tbody>
						@php
							$i++;
						@endphp
						@endforeach
				</table>
			</div>
		   </div>
		 	
		  </div>
		</div>
	</div>
</div>
@stop

@section('script')

<script type="text/javascript">
	$('.data-table').DataTable({
    
    responsive: true
  });
</script>

@stop