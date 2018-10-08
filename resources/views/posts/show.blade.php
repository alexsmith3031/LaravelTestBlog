@extends ('layouts.master')

@section ('content')

	<p>
		
	<h1>{{ $post->title }}</h1>

	{{ $post->body }}

	<p>

	<a href="/posts">Go back</a>

@endsection