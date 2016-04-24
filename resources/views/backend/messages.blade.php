@if(Session::has('error'))
<div class="alert alert-danger">{{ Session::get('error') }}</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success">{{ Session::get('success') }}</div>
@endif

@if(Session::has('message'))
<div class="alert alert-warning">{{ Session::get('message') }}</div>
@endif

@if($errors->has())
	<div class="alert alert-danger">
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</div>
@endif