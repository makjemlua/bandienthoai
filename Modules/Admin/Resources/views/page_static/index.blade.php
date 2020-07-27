@extends('admin::layouts.master')

@section('content')
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.get.list.page_static') }}">Page static</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
      </ol>
    </nav>
	<h2 class="page-header">Quản lý <a class="thao-tac them label label-primary float-right" href="{{ route('admin.get.create.page_static') }}" title="Thêm mới">
		<i class="fa fa-plus-square" aria-hidden="true"></i> Thêm mới</a>
	</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tiêu đề</th>
				<th>Nội dung</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($pages))
			<span style="display: none">{{ $a=1 }}</span>
				@foreach($pages as $page)
					<tr>
						<td><!-- STT -->
							<b>{{ $a++ }}</b>
						</td>
						<td style="width: 200px"><!-- Tên bài viết -->
							<b>{{ $page->ps_name }}</b>
						</td>
						<td>
							<b>{{ $page->ps_content }}</b>
						</td>
						<td><!-- Thao tác -->
							<a class="thao-tac sua label label-primary" href="{{ route('admin.get.edit.page_static', $page->id) }}" title="Cập nhập">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sửa
							</a>
						</td>
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>
</div>
@stop