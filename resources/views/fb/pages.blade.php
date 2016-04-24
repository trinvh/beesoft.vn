@extends('frontend')

@section('content')
@foreach($pages as $page) {
	<li>{{ $page['name'] }} - {{ $page['access_token'] }}</li>
@endforeach
@stop