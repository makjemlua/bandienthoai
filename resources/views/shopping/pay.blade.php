@extends('layouts.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('get.list.shopping.cart') }}">Giỏ hàng</a></li>
                <li class="active">Thanh toán</li>
            </ul>
        </div>
    </div>
</div>
<!--Checkout Area Strat-->
<div class="checkout-area pt-60 pb-30">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<form action="" method="POST">
					@csrf
					<div class="checkbox-form">
						<h3>Chi tiết thanh toán</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Email <span class="required">*</span></label>
									<input placeholder="" type="email" name="email" value="{{ get_data_user('web', 'email') }}" required>
								</div>
							</div>

							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Địa chỉ</label>
									<input placeholder="" name="address" type="text" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Số điện thoại</label>
									<input placeholder="" type="text" name="phone" value="{{ get_data_user('web', 'phone') }}" required>
								</div>
							</div>
							<div class="col-md-12">
								<div class="checkout-form-list">
									<label>Ghi chú</label>
									<textarea id="checkout-mess" cols="30" rows="10" name="note" placeholder="Ghi chú thêm."></textarea>
								</div>
							</div>
							<div class="col-md-4">
								<input class="btn btn-success" type="submit" value="Xác nhận thông tin"></input>
							</div>
						</div>

					</div>
				</form>
			</div>
			<div class="col-lg-6 col-12">
				<div class="your-order">
					<h3>Đơn hàng của bạn</h3>
					<div class="your-order-table table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th class="cart-product-name">Sản phẩm</th>
									<th class="cart-product-total">Tổng tiền</th>
								</tr>
							</thead>
							<tbody>
								@if(isset($products))
								@foreach($products as $product)
								<tr class="cart_item">
									<td class="cart-product-name"> {{ $product->name }}<strong class="product-quantity"> × {{ $product->qty }}</strong></td>
									<td class="cart-product-total"><span class="amount">{{ number_format($product->price,0, ',', '.') }} đ</span></td>
								</tr>
								@endforeach
								@endif
							</tbody>
							<tfoot>
								<tr class="order-total">
									<th>Tổng hóa đơn</th>
									<td><strong><span class="amount">{{ Cart::subtotal(0) }} đ</span></strong></td>
								</tr>
							</tfoot>
						</table>
					</div>
					<div class="payment-method">
						<div class="payment-accordion">
							<div id="accordion">
								<div class="card">
									<div class="card-header" id="#payment-1">
										<h5 class="panel-title">
											<a class="" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Thanh toán online.
											</a>
										</h5>
									</div>
									<div id="collapseOne" class="collapse show" data-parent="#accordion">
										<div class="card-body">
											<p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn hàng của bạn sẽ không được giao cho đến khi tiền được xóa trong tài khoản của chúng tôi.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="#payment-2">
										<h5 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Thẻ ngân hàng
											</a>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" data-parent="#accordion">
										<div class="card-body">
											<p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn hàng của bạn sẽ không được giao cho đến khi tiền được xóa trong tài khoản của chúng tôi.</p>
										</div>
									</div>
								</div>
								<div class="card">
									<div class="card-header" id="#payment-3">
										<h5 class="panel-title">
											<a class="collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												PayPal
											</a>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" data-parent="#accordion">
										<div class="card-body">
											<p>Thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. Đơn hàng của bạn sẽ không được giao cho đến khi tiền được xóa trong tài khoản của chúng tôi.</p>
										</div>
									</div>
								</div>
							</div>
							{{-- <div class="order-button-payment">
								<input value="Đặt hàng" type="submit">
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Checkout Area End-->
@stop