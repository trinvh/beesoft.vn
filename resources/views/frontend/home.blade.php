@extends('frontend')

@section('content')
<div id="hompage-carousel" class="owl-carousel owl-theme hidden-xs">
	<div class="item">
      <img src="/assets/slides/msp-release.jpg">
    </div>
    <div class="item">
      <img src="/assets/slides/slide-01.jpg">
    </div>
    <div class="item">
      <img src="/assets/slides/slide-02.jpg">
    </div>
    <div class="item">
      <img src="/assets/slides/slide-03.jpg">
    </div>
    <div class="item">
      <img src="/assets/slides/slide-04.jpg">
    </div>
</div>
<div class="row home-featured">
    <div class="col-lg-3 col-md-6 col-xs-6">
        <img src="http://trinvh.com/img/icon-1.png" alt="">
        <h4>Easy to Customize</h4>
        <p>Lập trình dựa trên Framework nên dễ dàng bảo trì và nâng cấp</p>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-6">
        <img src="http://trinvh.com/img/icon-2.png" alt="">
        <h4>Responsive Layout</h4>
        <p>Tối ưu hóa hiển thị trên các thiết bị không phụ thuộc kích thước</p>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-6">
        <img src="http://trinvh.com/img/icon-3.png" alt="">
        <h4>Change your own Color</h4>
        <p>Thay đổi màu sắc chủ đạo theo ý bạn dựa trên Color Scheme</p>
    </div>
    <div class="col-lg-3 col-md-6 col-xs-6">
        <img src="http://trinvh.com/img/icon-4.png" alt="">
        <h4>System Speedup</h4>
        <p>Tối ưu hóa mã lệnh, hình ảnh, minify files giúp load nhanh hơn</p>
    </div>
</div>
@stop
