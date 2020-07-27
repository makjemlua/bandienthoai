@extends('layouts.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="active">Về chúng tôi</li>
            </ul>
        </div>
    </div>
</div>
<!-- Begin Contact Main Page Area -->
<!-- about wrapper start -->
<div class="about-us-wrapper pt-60 pb-40">
	<div class="container">
		<div class="row">
			<!-- About Text Start -->
			<div class="col-lg-6 order-last order-lg-first">
				<div class="about-text-wrap">
					<h2>{{ isset($page) ? $page->ps_name : 'Đang cập nhập' }}</h2>
					<p>{{ isset($page) ? $page->ps_content : 'Đang cập nhập' }}</p>
				</div>
			</div>
			<!-- About Text End -->
			<!-- About Image Start -->
			<div class="col-lg-5 col-md-10">
				<div class="about-image-wrap">
					<img class="img-full" src="{{ asset('images/13.jpg') }}" alt="About Us" />
				</div>
			</div>
			<!-- About Image End -->
		</div>
	</div>
</div>
<!-- about wrapper end -->
<!-- Begin Counterup Area -->
<div class="counterup-area">
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			<div class="col-lg-3 col-md-6">
				<!-- Begin Limupa Counter Area -->
				<div class="limupa-counter white-smoke-bg">
					<div class="container">
						<div class="counter-img">
							<img src="{{ asset('images/about_us/1.png') }}" alt="">
						</div>
						<div class="counter-info">
							<div class="counter-number">
								<h3 class="counter">2169</h3>
							</div>
							<div class="counter-text">
								<span>KHÁCH HÀNG</span>
							</div>
						</div>
					</div>
				</div>
				<!-- limupa Counter Area End Here -->
			</div>
			<div class="col-lg-3 col-md-6">
				<!-- Begin limupa Counter Area -->
				<div class="limupa-counter gray-bg">
					<div class="counter-img">
						<img src="{{ asset('images/about_us/2.png') }}" alt="">
					</div>
					<div class="counter-info">
						<div class="counter-number">
							<h3 class="counter">869</h3>
						</div>
						<div class="counter-text">
							<span>GIẢI THƯỞNG</span>
						</div>
					</div>
				</div>
				<!-- limupa Counter Area End Here -->
			</div>
			<div class="col-lg-3 col-md-6">
				<!-- Begin limupa Counter Area -->
				<div class="limupa-counter white-smoke-bg">
					<div class="counter-img">
						<img src="{{ asset('images/about_us/3.png') }}" alt="">
					</div>
					<div class="counter-info">
						<div class="counter-number">
							<h3 class="counter">689</h3>
						</div>
						<div class="counter-text">
							<span>GIỜ LÀM VIỆC</span>
						</div>
					</div>
				</div>
				<!-- limupa Counter Area End Here -->
			</div>
			<div class="col-lg-3 col-md-6">
				<!-- Begin limupa Counter Area -->
				<div class="limupa-counter gray-bg">
					<div class="counter-img">
						<img src="{{ asset('images/about_us/4.png') }}" alt="">
					</div>
					<div class="counter-info">
						<div class="counter-number">
							<h3 class="counter">2169</h3>
						</div>
						<div class="counter-text">
							<span>DỰ ÁN HOÀN THÀNH</span>
						</div>
					</div>
				</div>
				<!-- limupa Counter Area End Here -->
			</div>
		</div>
	</div>
</div>
<!-- Counterup Area End Here -->
<!-- team area wrapper start -->
<div class="team-area pt-60 pt-sm-44">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="li-section-title capitalize mb-25">
					<h2><span>Thành viên nhóm</span></h2>
				</div>
			</div>
		</div> <!-- section title end -->
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member mb-60 mb-sm-30 mb-xs-30">
					<div class="team-thumb">
						<img src="{{ asset('images/about_us/9.jpg') }}" alt="Our Team Member" height="450px">
					</div>
					<div class="team-content text-center">
						<h3>Spider Man</h3>
						<p>IT Expert</p>
						<a href="#">info@gmail.com</a>
						<div class="team-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div> <!-- end single team member -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member mb-60 mb-sm-30 mb-xs-30">
					<div class="team-thumb">
						<img src="{{ asset('images/about_us/10.jpg') }}" alt="Our Team Member" height="450px">
					</div>
					<div class="team-content text-center">
						<h3>Captain Marvel</h3>
						<p>Web Designer</p>
						<a href="#">info@gmail.com</a>
						<div class="team-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div> <!-- end single team member -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member mb-30 mb-sm-60">
					<div class="team-thumb">
						<img src="{{ asset('images/about_us/11.jpg') }}" alt="Our Team Member" height="450px">
					</div>
					<div class="team-content text-center">
						<h3>Thor</h3>
						<p>Web Developer</p>
						<a href="#">info@gmail.com</a>
						<div class="team-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div> <!-- end single team member -->
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-member mb-30 mb-sm-60 mb-xs-60">
					<div class="team-thumb">
						<img src="{{ asset('images/about_us/12.jpg') }}" alt="Our Team Member" height="450px">
					</div>
					<div class="team-content text-center">
						<h3>Iron Man</h3>
						<p>Marketing officer</p>
						<a href="#">info@gmail.com</a>
						<div class="team-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-linkedin"></i></a>
							<a href="#"><i class="fa fa-google-plus"></i></a>
						</div>
					</div>
				</div>
			</div> <!-- end single team member -->
		</div>
	</div>
</div>
<!-- team area wrapper end -->
<!-- Contact Main Page Area End Here -->
@stop