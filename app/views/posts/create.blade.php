@extends('layouts.scaffold')

@section('main')

<h1>Create Post</h1>

{{ Form::open(array('route' => 'posts.store')) }}
<ul>
	<li>
		{{ Form::label('title', 'Title:') }}
		{{ Form::text('title') }}
	</li>

	<li>
		{{ Form::label('announce', 'Announce:') }}
		{{ Form::textarea('announce') }}
	</li>

	<li>
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description') }}
	</li>

	<li>
		{{ Form::label('off', 'Off:') }}
		{{ Form::input('number', 'off') }}
	</li>

	<li>
		{{ Form::label('image', 'Image:') }}
		{{ Form::text('image') }}
	</li>

	<li>
		{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
	</li>
</ul>
{{ Form::close() }}

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop


