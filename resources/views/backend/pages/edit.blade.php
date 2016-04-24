@extends('backend.layout')
@section('content')
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Sửa nội dung trang</h2>
            <p>Quản lý trang</p>
        </div>
        <div class="col-md-6 col-sm-6">
            <ul class="list-page-breadcrumb">
                <li><a href="/">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="{{ route('admin.page.index') }}">Pages <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Edit</li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap">
            <div class='widget-container'>
                @include('backend.messages')
                <form class="form-horizontal j-forms" method="POST" action="{{ route('admin.page.update', $page->id) }}">
                    <input type="hidden" name="_method" value="put" />
                    {!! csrf_field() !!}
                    <div class="clearfix">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#vi" aria-controls="vi" role="tab" data-toggle="tab">Tiếng Việt</a></li>
                            <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">Tiếng Anh</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="vi">
                            	<div class="unit">
                            		<label>Tên trang</label>
	                            	<div class="input">
				                        <div>
				                            <input type="text" class="form-control" placeholder="Tiêu đề trang" value="{{ $page->name }}" name="name" autofocus required>
				                        </div>
				                    </div>
				                </div>
				                <div class="unit">
				                	<label>Nội dung</label>
				                    <div class="input">
				                        <div>
				                            <textarea class="ckeditor" name="content">{{ $page->content }}</textarea>
				                        </div>
				                    </div>
				                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="en">
                            	<div class="unit">
                            		<label>Page title</label>
	                            	<div class="input">
				                        <div>
				                            <input type="text" class="form-control" placeholder="The page title" value="{{ $page->translate('en')->name }}" name="name_en">
				                        </div>
				                    </div>
				                </div>
				                <div class="unit">
				                	<label>Content</label>
				                    <div class="input">
				                        <div>
				                            <textarea class="ckeditor" name="content_en">{{ $page->content }}</textarea>
				                        </div>
				                    </div>
				                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">Lưu trang</button>
                        <a href="/pages" class="btn btn-default">Quay lại danh sách</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
