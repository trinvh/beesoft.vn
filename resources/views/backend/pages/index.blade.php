@extends('backend.layout')
@section('content')
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Danh sách trang đã thêm</h2>
            <p>Quản lý trang</p>
        </div>
        <div class="col-md-6 col-sm-6">
            <ul class="list-page-breadcrumb">
                <li><a href="/">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="{{ route('admin.page.index') }}">Pages <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Lists</li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="widget-wrap material-table-widget">
            <div class='widget-container margin-top-0'>
                <div class="widget-content">
                    <div class="data-action-bar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget-header">
                                    <h3>Danh sách các trang đã tạo</h3>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="data-align-right">
                                    <a href="{{ route('admin.page.create') }}" class="btn add-row btn-primary">Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('backend.messages')
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên tiếng Việt</th>
                                <th>Tên tiếng Anh</th>
                                <th>Đã xem</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pages as $page)
                            <tr>
                                <td>{{ $page->id }}</td>
                                <td>{{ $page->{'name:vi'} }}</td>
                                <td>{{ $page->{'name:en'} }}</td>
                                <td>{{ $page->viewed }}</td>
                                <td class="td-right">
                                    <div class="btn-toolbar">
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.page.edit', $page->id) }}" class="btn btn-default btn-edit"><i class="zmdi zmdi-edit"></i></a>
                                            <button class="btn btn-default btn-delete" data-id="{{ $page->id }}"><i class="zmdi zmdi-close"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('footer')
<script>
$(document).on('click', '.btn-delete', function() {
	var $row = $(this).closest('tr');
	var $id = $(this).data('id');
	bootbox.confirm("Are you sure?", function(result) {
	  	if(result) {
	  		$.ajax({
				type: "DELETE",
				url: '/admin/page/' + $id,
				success: function(result) {
					$row.hide();
				}
			});
	  	}
	});
});
</script>
@stop