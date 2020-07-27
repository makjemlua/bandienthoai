@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<div class="sidebar-sticky">
                @include('user.layout')
            </div>
		</div>
		<div class="col-md-10">
			<form action="" method="POST">
				@csrf
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email</label>
			    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ $user->email }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Họ tên</label>
			    <input type="text" class="form-control" name="name" placeholder="Họ tên" value="{{ $user->name }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Số điện thoại</label>
			    <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{ $user->phone }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Địa chỉ</label>
			    <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $user->address }}" required>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Giới thiệu</label>
			    <input type="text" class="form-control" name="about" placeholder="Info" value="{{ $user->about }}" required>
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Cập nhập</button>
			</form>
		</div>
	</div>
</div>
@stop