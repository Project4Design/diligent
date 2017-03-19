@extends('layouts.app')

@section('content')

<div class="content">
	<section>
		<a class="btn btn-flat btn-default" href="{{ url('admin/homes') }}"><i class="fa fa-reply"></i> Back</a>
	</section>
	<section class="perfil">
		<div class="row">
			<div class="col-md-12">
	          <h2 class="page-header" style="margin-top:0!important">
	            <i class="fa fa-clipboard" aria-hidden="true"></i>
	            {{$perfil->name}}
	            <small class="pull-right">Role:&nbsp;&nbsp;&nbsp; Admistrator</small>
	          </h2>
	          	  <div class="col-md-12 text-center">
			        	<h3>Perfil</h3>
			        	<hr class="separador">
        		  </div>
			  <form action="{{route('modificar_perfil')}}" method="POST">
			  {{csrf_field()}}
			  {{method_field('PUT')}}
				  <div class="form-group col-md-4 col-md-offset-4">
					  <div class="alert alert-danger" style="display:none;" id="message">
					      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					      <strong class="text-center">Passwords must be the same</strong> 
	  				 </div>
				    <label for="name">Name</label>
				    <input type="text" class="form-control" name="name"  value="{{$perfil->name}}" required>
				  </div>
				  <div class="form-group col-md-4 col-md-offset-4">
				    <label for="email">Email</label>
				    <input type="email" class="form-control" name="email" value="{{$perfil->email}}" required >
				  </div>
				  <div class="col-md-4 col-md-offset-4">
				  	<div class="checkbox">
				    <label>
				      <input type="checkbox" id="pp" name="checkbox" value="Yes"> Do you want to change the password?
				    </label>
				  </div>
				  </div>
						  <section id="pass" style="display:none">
							  <div class="form-group col-md-4 col-md-offset-5">
							  	<label>Password new</label>
							  	<input type="password" class="form-control" name="password_new" id="pass_new">
							  </div>
							  <div class=" form-group col-md-4 col-md-offset-5">
							  	<label>Password repeat</label>
							  	<input type="password" class="form-control" name="password_rep" id="pass_rep">
							  </div>
						  </section>

				  <div class="col-md-4 col-md-offset-4">
				     <button type="submit" id="submit" class="btn btn-flat btn-success">Update</button>
				  </div>
			  </form>
            </div>
		</div>
	</section>
</div>
@stop

@section('script')

 	<script type="text/javascript">

 	$("#pp").click(function(event) {
 		var bool = this.checked;
 		var pass1 = $("#pass_new").val();
 		var pass2 = $("#pass_rep").val();
 		var message = $("#message");

 		if(bool == true){
 			$("#pass").show('slow/400/fast');
 			$("#pass_new").prop('required',true);
 			$("#pass_rep").prop('required',true);
 			$("#submit").click(function(event) {

 				if(pass1 === pass2){
 					$("#pass_new").css('border','solid 1px red');
 					$("#pass_rep").css('border','solid 1px red');
 					message.fadeIn('slow/400/fast');
 					message.fadeOut(3000);
 					console.log("checked")
 					console.log(pass1)
 					console.log(pass2)

 					return false;
 				}else{
 					return true;
 				}
 	});
 			
 		}else{
 			$("#pass").hide('slow/400/fast');
 			$("#pass_new").val('');
 			$("#pass_rep").val('');
 			$("#pass_new").prop('required',false);
 			$("#pass_rep").prop('required',false);
 			console.log("Desmarcar check")
 		}


 	});

 	
 		
 	</script>

@stop