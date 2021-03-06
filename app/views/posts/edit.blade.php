@extends('layouts.scaffold')

@section('main')

<h1>Edit Post</h1>
{{ Form::model($post, array('method' => 'PATCH', 'route' => array('posts.update', $post->id))) }}
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
		{{ Form::submit('Update', array('class' => 'btn btn-info')) }}
		{{ link_to_route('posts.show', 'Cancel', $post->id, array('class' => 'btn')) }}
	</li>
</ul>
{{ Form::close() }}

@if ($errors->any())
<ul>
	{{ implode('', $errors->all('<li class="error">:message</li>')) }}
</ul>
@endif

@stop
