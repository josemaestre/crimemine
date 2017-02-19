@extends("crudbooster::admin_template")
@section("content")
	//Your Code Here

	{!! Form::open(['url' => '/crimen']) !!}
	@include('layouts.partials.crimen.form')
	{!! Form::close() !!}
@endsection