@if($orders)
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Hình ảnh</th>
				<th>Đơn giá</th>
				<th>Số lượng</th>
				<th>Giảm giá</th>
				<th>Thành tiền</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<span style="display: none">{{ $a=1 }}</span>
				@foreach($orders as $key => $order)
					<tr>
						<td><!-- id sản phẩm -->
							<b>{{ $a++ }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b><a href="{{ route('get.detail.product', [str_slug($order->product->pro_name), $order->or_product_id]) }}">{{ $order->product->pro_name }}</a></b>
						</td>
						<td><!-- Hình ảnh -->
							<img src="{{ asset(pare_url_file($order->product->pro_avatar)) }}" alt="image" width="80px" height="80px">
						</td>
						<td><!-- Gia -->
							<b>{{ number_format($order->or_price,0, ',', '.') }} đ</b>
						</td>
						<td><!-- So luong -->
							<b>{{ $order->or_qty }}</b>
						</td>
						<td>
							<b>{{ $order->product->pro_sale }} %</b>
						</td>
						<th><!-- Thanh tien -->
							<b>{{ number_format((($order->or_price*(100 - $order->product->pro_sale))/100)*$order->or_qty,0, ',', '.') }} đ</b>
						</th>
						<td><!-- Thao tác -->
							<a class="thao-tac xoa label label-danger" href="" title="Xóa">
								<i class="fa fa-trash" aria-hidden="true"></i>Xóa
							</a>
						</td>
					</tr>
				@endforeach
		</tbody>
	</table>
</div>
@endif