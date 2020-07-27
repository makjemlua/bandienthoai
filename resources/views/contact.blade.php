@extends('layouts.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="active">Liên hệ</li>
            </ul>
        </div>
    </div>
</div>
<!-- Begin Contact Main Page Area -->
<div class="contact-main-page mt-60 mb-40 mb-md-40 mb-sm-40 mb-xs-40">
	<div class="container mb-60">
		<div id="google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.857629962651!2d106.68530841462291!3d10.822205392290448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174deb3ef536f31%3A0x8b7bb8b7c956157b!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2hp4buHcCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmg!5e0!3m2!1svi!2s!4v1561735482569!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-5 offset-lg-1 col-md-12 order-1 order-lg-2">
				<div class="contact-page-side-content">
					<h3 class="contact-page-title">Thông tin liên hệ</h3>
					<p class="contact-page-message mb-25">“Cuộc sống hạnh phúc thật đơn giản, tất cả điều phụ thuộc vào bạn, tùy thuộc vào cách bạn suy nghĩ”</p>
					<div class="single-contact-block">
						<h4><i class="fa fa-fax"></i> Địa chỉ</h4>
						<p>113 Trần Duy Hưng - Hà Nội</p>
					</div>
					<div class="single-contact-block">
						<h4><i class="fa fa-phone"></i> Số điện thoại</h4>
						<p>Mobile: (+999) 999 999</p>
						<p>Hotline: 1900 1009</p>
					</div>
					<div class="single-contact-block last-child">
						<h4><i class="fa fa-envelope-o"></i> Email</h4>
						<p>nguyenan@gmail.com</p>
						<p>support.nguyenan@gmail.com</p>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 order-2 order-lg-1">
				<div class="contact-form-content pt-sm-55 pt-xs-55">
					<h3 class="contact-page-title">Gửi thông tin phản hồi cho chúng tôi</h3>
					<div class="contact-form">
						<form action="" method="post">
							@csrf
							<div class="form-group">
								<label>Tên của bạn <span class="required">*</span></label>
								<input type="text" name="c_name" id="c_name">
								@if ($errors->has('c_name'))
								<div class="error">{{ $errors->first('c_name') }}</div>
								@endif
							</div>
							<div class="form-group">
								<label>Email <span class="required">*</span></label>
								<input type="email" name="c_email" id="c_email">
								@if ($errors->has('c_email'))
								<div class="error">{{ $errors->first('c_email') }}</div>
								@endif
							</div>
							<div class="form-group">
								<label>Tiêu đề</label>
								<input type="text" name="c_title" id="c_title">
								@if ($errors->has('c_title'))
								<div class="error">{{ $errors->first('c_title') }}</div>
								@endif
							</div>
							<div class="form-group mb-30">
								<label>Nội dung</label>
								<textarea name="c_content" id="c_content" ></textarea>
								@if ($errors->has('c_content'))
								<div class="error">{{ $errors->first('c_content') }}</div>
								@endif
							</div>
							<div class="form-group">
								<button type="submit" class="li-btn-3">Gửi</button>
							</div>
						</form>
					</div>
					<p class="form-messege"></p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Contact Main Page Area End Here -->
@stop