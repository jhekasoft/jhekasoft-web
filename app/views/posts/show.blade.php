@extends('layouts.scaffold')

@section('main')

<h1>Show Post</h1>

<p>{{ link_to_route('posts.index', 'Return to all posts') }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Title</th>
			<th>Announce</th>
			<th>Description</th>
			<th>Off</th>
			<th>Image</th>
			<th>Actions</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $post->title }}}</td>
			<td>{{{ $post->announce }}}</td>
			<td>{{{ $post->description }}}</td>
			<td>{{{ $post->off }}}</td>
			<td>{{{ $post->image }}}</td>
			<td>
				{{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-info')) }}
				{{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id), 'style' => 'display: inline-block')) }}
				{{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
				{{ Form::close() }}
			</td>
		</tr>
	</tbody>
</table>

@stop
