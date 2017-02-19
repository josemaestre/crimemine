@extends("crudbooster::admin_template")
 @section("content")


 <div class="row">
 	<!-- left column -->
 	<div class="col-md-12">
 		<!-- general form elements -->
 		<div class="box box-primary">
 			<div class="box-header with-border">
 				<h3 class="box-title">Incluir</h3>
 			</div>

 			<div class="row">
 				<div class="col-lg-12 margin-tb">
 					<div class="pull-left">
 						<h2> Show Item</h2>
 					</div>
 					
 				</div>
 			</div>

 			<div class="row">

 				<div class="col-xs-12 col-sm-12 col-md-12">
 					<div class="form-group">
 						<strong>Title:</strong>
 						{{ $del->tx_delito }}
 					</div>
 				</div>

 				<div class="col-xs-12 col-sm-12 col-md-12">
 					<div class="form-group">
 						<strong>Description:</strong>
 						{{ $del->icon_name }}
 					</div>
 				</div>


 			</div>
 			<div class="pull-left">
 				<a class="btn btn-primary" href="{{ route('delitos.index') }}"> Back</a>
 			</div>

 		</div>


 	</div>




 </div>
	
@endsection