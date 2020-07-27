@extends('layouts.app')
@section('content')
<style type="text/css">
	a.label.label-success, a.label.label-default, a.label.label-danger, a.label.label-primary {
	    font-size: 15px;
	    box-shadow: 2px 2px 0 0 #337AB7;
	}
	.label-default {
	    background-color: #777;
	}
	.label-success {
	    background-color: #5cb85c;
	}
	.label {
	    display: inline;
	    padding: .2em .6em .3em;
	    font-size: 75%;
	    font-weight: 700;
	    line-height: 1;
	    color: #fff;
	    text-align: center;
	    white-space: nowrap;
	    vertical-align: baseline;
	    border-radius: .25em;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<div class="sidebar-sticky">
                @include('user.layout')

            </div>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-primary o-hidden h-100">
				  <div class="card-body">
				    <div class="card-body-icon">
				      <i class="fa fa-fw fa-comments"></i>
				    </div>
				    <div class="mr-5">0 thông báo!</div>
				  </div>
				  <a class="card-footer text-white clearfix small z-1" href="#">
				    <span class="float-left">View Details</span>
				    <span class="float-right">
				      <i class="fa fa-angle-right"></i>
				    </span>
				  </a>
				</div>
				</div>
				<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-warning o-hidden h-100">
				  <div class="card-body">
				    <div class="card-body-icon">
				      <i class="fa fa-fw fa-list"></i>
				    </div>
				    <div class="mr-5">{{ $totalTransaction }} tổng đơn hàng!</div>
				  </div>
				  <a class="card-footer text-white clearfix small z-1" href="#">
				    <span class="float-left">View Details</span>
				    <span class="float-right">
				      <i class="fa fa-angle-right"></i>
				    </span>
				  </a>
				</div>
				</div>
				<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-success o-hidden h-100">
				  <div class="card-body">
				    <div class="card-body-icon">
				      <i class="fa fa-fw fa-shopping-cart"></i>
				    </div>
				    <div class="mr-5">{{ $totalTransactionDone }} đã xử lý!</div>
				  </div>
				  <a class="card-footer text-white clearfix small z-1" href="#">
				    <span class="float-left">View Details</span>
				    <span class="float-right">
				      <i class="fa fa-angle-right"></i>
				    </span>
				  </a>
				</div>
				</div>
				<div class="col-xl-3 col-sm-6 mb-3">
				<div class="card text-white bg-danger o-hidden h-100">
				  <div class="card-body">
				    <div class="card-body-icon">
				      <i class="fa fa-fw fa-life-ring"></i>
				    </div>
				    <div class="mr-5">{{ $totalTransaction - $totalTransactionDone }} chưa xử lý!</div>
				  </div>
				  <a class="card-footer text-white clearfix small z-1" href="#">
				    <span class="float-left">View Details</span>
				    <span class="float-right">
				      <i class="fa fa-angle-right"></i>
				    </span>
				  </a>
				</div>
				</div>
				</div>
				{{-- ---- --}}
				<div class="col-md-12">
					<h3>Danh sách đơn hàng</h3>
					@if(isset($transactions))
					<table class="table table-striped table-sm">
						<thead>
							<tr>
								<th>STT</th>
								<th>Số điện thoại</th>
								<th>Địa chỉ</th>
								<th>Tổng tiền</th>
								<th>Trạng thái</th>
								<th>Ngày mua</th>
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
											<b>{{ $transaction->tr_phone }}</b>
										</td>
										<td>
											<b>{{ $transaction->tr_address }}</b>
										</td>
										<td><!-- Tên sản phẩm -->
											<b>{{ number_format($transaction->tr_total,0, ',', '.') }} VNĐ</b>
										</td>
										<td><!-- Tên sản phẩm -->
											@if($transaction->tr_status == 1)
												<a href="#" class="label label-success">Đã xử lý</a>
											@else
												<a href="#" class="label label-default">Chưa xử lý</a>
											@endif
										</td>
										<td>
											{{ $transaction->created_at->format('d-m-Y') }}
										</td>
									</tr>
							@endforeach
						</tbody>
					</table>
					@endif
				</div>
			</div>

		</div>
	</div>

@stop