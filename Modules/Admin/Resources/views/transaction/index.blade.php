@extends('admin::layouts.master')

@section('content')
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.get.list.user') }}">Đơn hàng</a></li>
        <li class="breadcrumb-item active" aria-current="page">Danh sách</li>
      </ol>
    </nav>
	<h2 class="page-header">Quản lý đơn hàng <a class="thao-tac them label label-primary float-right" href="#" title="Thêm mới">
		<i class="fa fa-plus-square" aria-hidden="true"></i> Thêm mới</a>
	</h2>
<div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>STT</th>
				<th>Tên khách hàng</th>
				<th>Địa chỉ</th>
				<th>Số điện thoại</th>
				<th>Tổng tiền</th>
				<th>Trạng thái</th>
				<th>Ngày mua</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<span style="display: none">{{ $a=1 }}</span>
			@foreach($transactions as $transaction)
				<tr>
						<td><!-- id sản phẩm -->
							<b>{{ $a++ }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $transaction->user->name }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $transaction->tr_address }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ $transaction->tr_phone }}</b>
						</td>
						<td><!-- Tên sản phẩm -->
							<b>{{ number_format($transaction->tr_total,0, ',', '.') }} VNĐ</b>
						</td>
						<td><!-- Tên sản phẩm -->
							@if($transaction->tr_status == 1)
								<a href="" class="label label-success">Đã xử lý</a>
							@else
								<a href="{{ route('admin.get.active.transaction', $transaction->id) }}" class="label label-default">Chưa xử lý</a>
							@endif
						</td>
						<td>
							{{ $transaction->created_at->format('d-m-Y') }}
						</td>
						<td><!-- Thao tác -->
							<a class="thao-tac xoa label label-danger" href="" title="Xóa">
								<i class="fa fa-trash" aria-hidden="true"></i>Xóa
							</a>
							<a class="thao-tac label label-success js_order_item" data-id="{{ $transaction->id }}" href="{{ route('admin.get.view.order',
							$transaction->id) }}">
								<i class="fa fa-eye" aria-hidden="true"></i> Xem
							</a>
						</td>
					</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Modal -->
  <div class="modal fade" id="myModalOrder" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title float-left">Chi tiết đơn hàng <b class="transaction_id"></b></h4>
        </div>
        <div class="modal-body" id="md_content">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
        </div>
      </div>

    </div>
  </div>
@stop
@section('script')
	<script>
		$(function(){
			$(".js_order_item").click(function(event){
				event.preventDefault();
				let $this = $(this);
				let url = $this.attr('href');
				$(".transaction_id").text('').text($this.attr('data-id'));
				$("#myModalOrder").modal('show');
				$.ajax({
					url:url,
				}).done(function(result){
					console.log(result);
					if(result)
					{
						$("#md_content").html('').append(result);
					}
				});
			});
		})
	</script>
@stop