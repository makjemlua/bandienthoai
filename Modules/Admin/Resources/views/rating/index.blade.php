@extends('admin::layouts.master')

@section('content')
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="">Đánh giá</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
      </ol>
    </nav>
	<h2 class="page-header">Quản lý đánh giá
	</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên thành viên</th>
				<th>Sản phẩm</th>
				<th>Nội dung</th>
				<th>Rating</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($ratings))
			<span style="display: none">{{ $a=1 }}</span>
				@foreach($ratings as $rating)
					<tr>
						<td><!-- id sản phẩm -->
							<b>{{ $a++ }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ isset($rating->user->name) ? $rating->user->name : '' }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ isset($rating->product->pro_name) ? $rating->product->pro_name : '' }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $rating->ra_content }}</b>
						</td>
						<th><!-- Hình ảnh -->
							<b>{{ $rating->ra_number }}</b>
						</th>
						<td><!-- Thao tác -->
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