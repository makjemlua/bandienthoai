@extends('admin::layouts.master')

@section('content')
<style type="text/css">
	.rating .active
	{
		color: #ff9705 !important;
	}
</style>
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.get.list.product') }}">Sản phẩm</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
      </ol>
    </nav>
    <div class="row">
    	<div class="col-md-12">
    		<form class="form-inline">
    			<div class="form-group">
    				<input type="text" class="form-control" name="search" placeholder="Tên sản phẩm" value="{{ \Request::get('search') }}">
    			</div>
    			<div class="form-group">
    				<select class="form-control" name="cate">
    					<option>Danh mục</option>
    					@if(isset($categories))
    						@foreach($categories as $category)
    							<option value="{{ $category->id }}" {{ \Request::get('cate') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
    						@endforeach
    					@endif
    				</select>
    			</div>
				<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
    		</form>
    	</div>
    </div>
	<h2 class="page-header">Quản lý sản phẩm <a class="thao-tac them label label-primary float-right" href="{{ route('admin.get.create.product') }}" title="Thêm mới">
		<i class="fa fa-plus-square" aria-hidden="true"></i> Thêm mới</a>
	</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Loại sản phẩm</th>
				<th>Hình ảnh</th>
				<th>Trạng thái</th>
				<th>Nổi bật</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($products))
			<span style="display: none">{{ $a=1 }}</span>
				@foreach($products as $product)
				<?php
$age = 0;
if ($product->pro_total_rating) {
	$age = round($product->pro_total_number / $product->pro_total_rating, 2);
}
?>
					<tr>
						<td><!-- id sản phẩm -->
							<b>{{ $a++ }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $product->pro_name }}</b>
							<ul class="sale">
								<li><span></span><span><i><b>Giá</b>:<span style="background-color: #ffff0047"> {{ number_format($product->pro_price,0, ',', '.') }}</span> (vnđ)</i></span></li>
								<li><span></span><span><i><b>Khuyến mãi</b>:<span style="background-color: #ff2f0029"> {{ $product->pro_sale }} </span>(%)</i></span></li>
								<li><span><b>Đánh giá: </b></span>
									<span class="rating">
										@for($i=1;$i<=5;$i++)
										<i class="fa fa-star {{ $i <= $age ? 'active' : '' }}" style="color: #999"></i>
										@endfor
									</span>
									<span>{{ $age }}</span>
								</li>
								<li><span></span><span><i><b>Số lượng</b>: {{ $product->pro_number }}</i></span></li>
							</ul>
						</td>
						<td><!-- Loại sản phẩm -->
							<b>{{ isset($product->category->c_name) ? $product->category->c_name : '' }}</b>
						</td>
						<th><!-- Hình ảnh -->
							<img src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="image" width="80px" height="80px">
						</th>
						<td><!-- Trạng thái -->
							<a href="{{ route('admin.get.action.product',['active', $product->id]) }}" class="label {{ $product->getStatus($product->pro_active)['class'] }}">{{ $product->getStatus($product->pro_active)['name'] }}</a>
						</td>
						<td><!-- Nổi bật -->
							<a href="{{ route('admin.get.action.product',['hot', $product->id]) }}" class="label {{ $product->getHot($product->pro_active)['class'] }}">{{ $product->getHot($product->pro_hot)['name'] }}</a>
						</td>
						<td><!-- Thao tác -->
							<a class="thao-tac sua label label-primary" href="{{ route('admin.get.edit.product',$product->id) }}" title="Cập nhập">
								<i class="fa fa-pencil-square-o" aria-hidden="true"></i>Sửa
							</a>
							<a class="thao-tac xoa label label-danger" href="{{ route('admin.get.action.product',['delete', $product->id]) }}" title="Xóa">
								<i class="fa fa-trash" aria-hidden="true"></i>Xóa
							</a>
						</td>
					</tr>
				@endforeach
				{!! $products->links() !!}
			@endif
		</tbody>
	</table>
</div>
@stop