@extends('layouts.frontend')

@section('main')

<h1 class="page-header">Котячий тест</h1>

<p>{{ $city }}</p>
<p>{{ $fullname }}</p>
<p>{{ $mobilePhone }}</p>
<img src="{{ URL::to('/') }}/temp/{{ $image }}">

@stop
