@extends('app')

@section('content')
	<h1>{{ $article->title }}</h1>

	<article>
		{{ $article->body }}
	</article>

	@unless ($article->tags->isEmpty())
		<h5>Tag:</h5>
		<ul>
			@foreach ($article->tags as $tag)
				<li>{!! link_to_action('TagsController@show', $tag->name, ['name' => $tag->name]) !!}</li>
			@endforeach
		</ul>
	@endif

@stop