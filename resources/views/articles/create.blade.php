@extends('app')

@section('content')
	<h1>White A Article</h1>

	<hr/>

	{!! Form::open(['url' => 'articles']) !!}
		@include('articles.form', ['submitButtonText' => 'Add Article'])

	{!! Form::close() !!}

	@include('errors.list');

@stop