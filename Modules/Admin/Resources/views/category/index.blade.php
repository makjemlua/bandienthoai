@extends('admin::layouts.master')

@section('content')
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.get.list.category') }}">Danh mục</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
      </ol>
    </nav>
	<h2 class="page-header">Quản lý danh mục <a class="thao-tac them label label-primary float-right" href="{{ route('admin.get.create.category') }}" title="Thêm mới">
		<i class="fa fa-plus-square" aria-hidden="true"></i> Thêm mới</a>
	</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên danh mục</th>
				<th>Title seo</th>
				<th>Trang chủ</th>
				<th>Trạng thái</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<span style="display: none">{{ $a=1 }}</span>
			@if(isset($categories))
				@foreach($categories as $category)
					<tr>
						<td><!-- id danh mục -->
							<b>{{ $a++ }}</b>
						</td>
						<td><!-- Tên danh mục -->
							<b>{{ $category->c_name }}</b>
						</td>
						<td><!-- Title seo -->
							{{ $category->c_title_seo }}
						</td>
						<td><!-- Trang chủ -->
							<a href="{{ route('admin.get.action.category',['home', $category->id]) }}" class="label {{ $category->getHome($category->c_home)['class'] }}">{{ $category->getHome($category->c_home)['name'] }}</a>
						</td>
						<td><!-- Trạng thái -->
							<a href="{{ route('admin.get.action.category',['active', $category->id]) }}" class="label {{ $category->getStatus($category->c_active)['class'] }}">{{ $category->getStatus($category->c_active)['name'] }}</a>
						</td>
						<td><!-- Thao tác -->
							<a class="thao-tac sua label label-primary" href="{{ route('admin.get.edit.category',$category->id) }}" title="Cập nhập">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sửa
							</a>
							<a class="thao-tac xoa label label-danger" href="{{ route('admin.get.action.category',['delete', $category->id]) }}" title="Xóa">
								<i class="fa fa-trash" aria-hidden="true"></i>Xóa
							</a>
						</td>
					</tr>
				@endforeach
			@endif
		</tbody>
	</table>
</div>
@stop