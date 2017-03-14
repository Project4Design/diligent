@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
					<table class="table table-bordered table-condensed">
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
									<a href="#" class="btn btn-success">View all</a>
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



@stop