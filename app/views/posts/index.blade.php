@extends('layouts.scaffold')

@section('main')

<h1>All Posts</h1>

<p>{{ link_to_route('posts.create', 'Add new post') }}</p>

@if ($posts->count())
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
		@foreach ($posts as $post)
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
		@endforeach
	</tbody>
</table>
@else
There are no posts
@endif

@stop
