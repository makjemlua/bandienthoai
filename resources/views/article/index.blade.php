@extends('layouts.app')
@section('content')
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="active">Bài viết</li>
            </ul>
        </div>
    </div>
</div>
<!-- Begin Contact Main Page Area -->
<div class="li-main-blog-page pt-60 pb-55">
	<div class="container">
		<div class="row">
			<!-- Begin Li's Main Content Area -->
			<div class="col-lg-9 order-lg-1 order-1">
				<div class="row li-main-content">
					@if(isset($articles))
						@foreach($articles as $article)
							<div class="col-lg-12">
								<div class="li-blog-single-item mb-30">
									<div class="row">
										<div class="col-lg-6">
											<div class="li-blog-banner">
												<a href="{{ route('get.detail.article', [$article->a_slug, $article->id]) }}"><img class="img-full" src="{{ asset(pare_url_file($article->a_avatar)) }}" alt="" width="420px" height="328px"></a>
											</div>
										</div>
										<div class="col-lg-6">
											<div class="li-blog-content">
												<div class="li-blog-details">
													<h3 class="li-blog-heading pt-xs-25 pt-sm-25"><a href="{{ route('get.detail.article', [$article->a_slug, $article->id]) }}">{{ $article->a_name }}</a></h3>
													<div class="li-blog-meta">
														<a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
														<a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
														<a class="post-time" href="#"><i class="fa fa-calendar"></i>{{ $article->created_at }}</a>
													</div>
													<p>{{ $article->a_description }}</p>
													<a class="read-more" href="{{ route('get.detail.article', [$article->a_slug, $article->id]) }}">Đọc thêm...</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
						{!! $articles->links() !!}
					@endif
					<!-- Begin Li's Pagination Area -->
					{{-- <div class="col-lg-12">
						<div class="li-paginatoin-area text-center pt-25">
							<div class="row">
								<div class="col-lg-12">
									<ul class="li-pagination-box">
										<li><a class="Previous" href="#">Previous</a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a class="Next" href="#">Next</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div> --}}
					<!-- Li's Pagination End Here Area -->
				</div>
			</div>
			<!-- Li's Main Content Area End Here -->
			<!-- Begin Li's Blog Sidebar Area -->
			{{-- -------------------------------------- --}}
			<div class="col-lg-3 order-lg-2 order-2">
				<div class="li-blog-sidebar-wrapper">
					<div class="li-blog-sidebar">
						<div class="li-sidebar-search-form pt-xs-30 pt-sm-30">
							<form action="#">
								<input type="text" class="li-search-field" placeholder="search here">
								<button type="submit" class="li-search-btn"><i class="fa fa-search"></i></button>
							</form>
						</div>
					</div>
					<div class="li-blog-sidebar pt-25">
						<h4 class="li-blog-sidebar-title">Categories</h4>
						<ul class="li-blog-archive">
							<li><a href="#">Laptops (10)</a></li>
							<li><a href="#">TV & Audio (08)</a></li>
							<li><a href="#">reach (07)</a></li>
							<li><a href="#">Smartphone (14)</a></li>
							<li><a href="#">Cameras (10)</a></li>
							<li><a href="#">Headphone (06)</a></li>
						</ul>
					</div>
					<div class="li-blog-sidebar">
						<h4 class="li-blog-sidebar-title">Blog Archives</h4>
						<ul class="li-blog-archive">
							<li><a href="#">January (10)</a></li>
							<li><a href="#">February (08)</a></li>
							<li><a href="#">March (07)</a></li>
							<li><a href="#">April (14)</a></li>
							<li><a href="#">May (10)</a></li>
							<li><a href="#">June (06)</a></li>
						</ul>
					</div>
					<div class="li-blog-sidebar">
						<h4 class="li-blog-sidebar-title">Recent Post</h4>
						<div class="li-recent-post pb-30">
							<div class="li-recent-post-thumb">
								<a href="blog-details-left-sidebar.html">
									<img class="img-full" src="images/product/small-size/3.jpg" alt="Li's Product Image">
								</a>
							</div>
							<div class="li-recent-post-des">
								<span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
								<span class="li-post-date">25.11.2018</span>
							</div>
						</div>
						<div class="li-recent-post pb-30">
							<div class="li-recent-post-thumb">
								<a href="blog-details-left-sidebar.html">
									<img class="img-full" src="images/product/small-size/2.jpg" alt="Li's Product Image">
								</a>
							</div>
							<div class="li-recent-post-des">
								<span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
								<span class="li-post-date">25.11.2018</span>
							</div>
						</div>
						<div class="li-recent-post pb-30">
							<div class="li-recent-post-thumb">
								<a href="blog-details-left-sidebar.html">
									<img class="img-full" src="images/product/small-size/5.jpg" alt="Li's Product Image">
								</a>
							</div>
							<div class="li-recent-post-des">
								<span><a href="blog-details-left-sidebar.html">First Blog Post</a></span>
								<span class="li-post-date">25.11.2018</span>
							</div>
						</div>
					</div>
					<div class="li-blog-sidebar">
						<h4 class="li-blog-sidebar-title">Tags</h4>
						<ul class="li-blog-tags pb-xs-15 pb-sm-15">
							<li><a href="#">Gaming</a></li>
							<li><a href="#">Chromebook</a></li>
							<li><a href="#">Refurbished</a></li>
							<li><a href="#">Touchscreen</a></li>
							<li><a href="#">Ultrabooks</a></li>
							<li><a href="#">Sound Cards</a></li>
						</ul>
					</div>
				</div>
			</div>
			{{-- --------------------------------------- --}}
			<!-- Li's Blog Sidebar Area End Here -->
		</div>
	</div>
</div>
<!-- Contact Main Page Area End Here -->
@stop