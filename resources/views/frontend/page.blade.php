@extends('frontend')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<h1 class="page-heading">{{ $page->name }}</h1>
		<hr class="divider">
	</div>
    <div class="col-sm-12">
        {!! $page->content !!}
    </div>
</div>
@stop
