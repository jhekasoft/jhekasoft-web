@extends('layouts.scaffold')

@section('main')

<h1>Create Offer</h1>

{{ Form::open(array('route' => 'offers.store')) }}
	<ul>
        <li>
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title') }}
        </li>

        <li>
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description') }}
        </li>

        <li>
            {{ Form::label('city_id', 'City_id:') }}
            {{ Form::input('number', 'city_id') }}
        </li>

        <li>
            {{ Form::label('company_id', 'Company_id:') }}
            {{ Form::input('number', 'company_id') }}
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
            {{ Form::label('expires', 'Expires:') }}
            {{ Form::text('expires') }}
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


