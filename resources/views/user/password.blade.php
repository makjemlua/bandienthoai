@extends('layouts.app')
@section('content')
<style type="text/css">
	.form-group
	{
		position: relative;
	}
	i.fa.fa-eye::before
	{
		color: #337ab7;
		position: absolute;
		top:50%;
		right: 10px;
	}
</style>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<div class="sidebar-sticky">
                @include('user.layout')
            </div>
		</div>
		<div class="col-md-6">
			<form action="" method="POST">
				@csrf
			  <div class="form-group">
			    <label for="exampleInputEmail1">Mật khẩu cũ</label>
			    <input type="password" class="form-control" name="password_old" placeholder="Mật khẩu cũ" value="{{ old('password_old') }}">
			    <a href="javascript:;void(0)"><i class="fa fa-eye"></i></a>
			    @if ($errors->has('password_old'))
				<div class="error">{{ $errors->first('password_old') }}</div>
				@endif
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Mật khẩu mới</label>
			    <input type="password" class="form-control" name="password" placeholder="Mật khẩu mới" value="{{ old('password') }}">
			    <a href="javascript:;void(0)"><i class="fa fa-eye"></i></a>
			    @if ($errors->has('password'))
				<div class="error">{{ $errors->first('password') }}</div>
				@endif
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Nhập lại mật khẩu</label>
			    <input type="password" class="form-control" name="password_comfirm" placeholder="Nhập lại mật khẩu" value="{{ old('password_comfirm') }}">
			    <a href="javascript:;void(0)"><i class="fa fa-eye"></i></a>
			    @if ($errors->has('password_comfirm'))
				<div class="error">{{ $errors->first('password_comfirm') }}</div>
				@endif
			  </div>
			  <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Cập nhập</button>
			</form>
		</div>
	</div>
</div>
@stop
@section('script')
<script>
	$(function(){
		$(".form-group a").click(function(){
			let $this = $(this);

			if($this.hasClass('active'))
			{
				$this.parents('.form-group').find('input').attr('type', 'password')
				$this.removeClass('active');
			}
			else
			{
				$this.parents('.form-group').find('input').attr('type', 'text')
				$this.addClass('active');
			}
		})
	})
</script>
@stop