@extends("crudbooster::admin_template")
@section("content")
  
 
{{   Session::pull('message') }}
{{ Session::get('flash_message') }}


 <!-- @include('layouts.partials.general.message')    -->
 @include('layouts.partials.general.success')
 @include('layouts.partials.general.errors')

{!! Form::open([
    'route' => 'delitos.store'
]) !!}

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