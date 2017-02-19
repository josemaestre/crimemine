@extends("crudbooster::admin_template")
@section("content")
 
 
 <!-- @include('layouts.partials.general.message')    -->
 @include('layouts.partials.general.success')
 @include('layouts.partials.general.errors')


 {!! Form::model($delito, ['method' => 'PATCH','route' => ['delitos.update', $delito->id_delito]]) !!}


 <div class="row">
 	<!-- left column -->
 	<div class="col-md-12">
 		<!-- general form elements -->
 		<div class="box box-primary">
 			<div class="box-header with-border">
 				<h3 class="box-title">Incluir</h3>
 			</div>

  			<div class="box-body">  @include('delito.form') </div> 

 		</div>
 	</div>
 </div>

@endsection