@extends('layouts.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li class="active">Giỏ hàng</li>
            </ul>
        </div>
    </div>
</div>
<!--Shopping Cart Area Strat-->
<div class="Shopping-cart-area pt-60 pb-60">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<form action="#">
					<div class="table-content table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>STT</th>
									<th class="cart-product-name">Sản phẩm</th>
									<th class="li-product-thumbnail">Hình ảnh</th>
									<th class="li-product-price">Đơn giá</th>
									<th class="li-product-quantity">Số lượng</th>
									<th class="li-product-subtotal">Tổng tiền</th>
									<th class="li-product-remove">Thao tác</th>
								</tr>
							</thead>
							<tbody>
								@if(isset($products))
								<span style="display: none">{{ $a=1 }}</span>
									@foreach($products as $key => $product)

									<tr>
										<td>{{ $a++ }}</td>
										<td class="li-product-name"><a href="#">{{ $product->name }}</a></td>
										<td class="li-product-thumbnail"><a href="#"><img src="{{ asset(pare_url_file($product->options->avatar)) }}" alt="Image" width="80px" height="80px" name="avatar"></a></td>
										<td class="li-product-price"><span class="amount">{{ number_format($product->price,0, ',', '.') }} đ</span></td>
										<td class="quantity">
											<div>
												<input class="cart-plus-minus-box" value="{{ $product->qty }}" type="text" style="width: 50px">
											</div>
										</td>
										<td class="product-subtotal"><span class="amount">{{ number_format($product->qty * $product->price,0,',','.') }} đ</span></td>
										<td class="li-product-remove">
											<a href="{{ route('delete.shopping.cart', $key) }}"><i class="fa fa-times" style="font-size: 30px"></i></a>
										</td>
									</tr>
									@endforeach
								@endif
							</tbody>
						</table>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="coupon-all">
								<div class="coupon">
									<input id="coupon_code" class="input-text" name="coupon_code" value="" placeholder="Mã code" type="text">
									<input class="button" name="apply_coupon" value="Xác nhận" type="submit">
								</div>
								{{-- <div class="coupon2">
									<input class="button" name="update_cart" value="Cập nhập" type="submit">
								</div> --}}
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 ml-auto">
							<div class="cart-page-total">
								<h2>Tổng giỏ hàng</h2>
								<ul>
									<li>Thành tiền <span>{{ Cart::subtotal(0) }} đ</span></li>
								</ul>
								<a href="{{ route('get.form.pay') }}">Thanh toán</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--Shopping Cart Area End-->
@stop