@extends('admin::layouts.master')

@section('content')
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="">Thành viên</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
      </ol>
    </nav>
	<h2 class="page-header">Quản lý thành viên <a class="thao-tac them label label-primary float-right" href="#" title="Thêm mới">
		<i class="fa fa-plus-square" aria-hidden="true"></i> Thêm mới</a>
	</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên hiển thị</th>
				<th>Email</th>
				<th>Phone</th>
				<td>Hình ảnh</td>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($users))
			<span style="display: none">{{ $a=1 }}</span>
				@foreach($users as $user)
					<tr>
						<td><!-- id sản phẩm -->
							<b>{{ $a++ }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $user->name }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $user->email }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $user->phone }}</b>
						</td>
						<th><!-- Hình ảnh -->
							<img src="{{ asset(pare_url_file($user->avatar)) }}" alt="image" width="80px" height="80px">
						</th>
						<td><!-- Thao tác -->
							<a class="thao-tac sua label label-primary" href="" title="Cập nhập">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sửa
							</a>
							<a class="thao-tac xoa label label-danger" href="" title="Xóa">
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