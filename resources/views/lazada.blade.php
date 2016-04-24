@extends('frontend')

@section('content')
<div class="row">
	<div class="col-md-6 col-xs-12">
		<h1 class="page-heading">DEMO LAZADA API</h1>
	</div>
</div>
<div class="row">
<ul class="thumbnails">
	@foreach($products as $product)
    <div class="col-md-3">
      <div class="thumbnail">
        <img src="{{ $product->MainImage }}" alt="{{ $product->Name }}">
        <div class="caption">
          <h3>{{ $product->Name }}</h3>
          <p>{{ $product->SellerSku }}</p>
          <p>{{ $product->SalePrice }} x {{ $product->Available }}</p>
          <p align="center">
          	<button class="btn btn-primary ladda-button" data-sku="{{ $product->SellerSku }}" data-qty="{{ $product->Available }}" data-style="expand-left">
          	<span class="ladda-label">Tăng số lượng lên 1</span>
          	</button>
          </p>
        </div>
      </div>
    </div>
    @endforeach
</ul>
</div>
@stop

@section('footer')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ladda-bootstrap/0.9.4/ladda-themeless.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/ladda-bootstrap/0.9.4/spin.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ladda-bootstrap/0.9.4/ladda.min.js"></script>
<script>
$('button').click(function() {
	var $this = $(this);
	var l = Ladda.create(this);
 	l.start();
 	$.post("lazada/increase-qty",
 	    { sku : $this.data('sku'), qty : ($this.data('qty') + 1), _token: '{{ csrf_token() }}' },
 	  function(response){
 	    $this.text("OK. F5 to refresh");
 	  }, "json")
 	.always(function() { l.stop(); });
 	return false;
});
</script>
@stop
