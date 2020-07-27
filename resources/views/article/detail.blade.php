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
                    <div class="col-lg-12">
                        <div class="li-blog-single-item pb-30">
                            <div class="li-blog-banner">
                                <a href=""><img class="img-full" src="{{ asset(pare_url_file($articleDetail->a_avatar)) }}" alt="" height="300px"></a>
                            </div>
                            <div class="li-blog-content">
                                <div class="li-blog-details">
                                    <h3 class="li-blog-heading pt-25"><a href="#">{{ $articleDetail->a_name }}</a></h3>
                                    <div class="li-blog-meta">
                                        <a class="author" href="#"><i class="fa fa-user"></i>Admin</a>
                                        <a class="comment" href="#"><i class="fa fa-comment-o"></i> 3 comment</a>
                                        <a class="post-time" href="#"><i class="fa fa-calendar"></i>{{ $articleDetail->created_at }}</a>
                                    </div>
                                    <p>{{ $articleDetail->a_description }}</p>
                                    <!-- Begin Blog Blockquote Area -->
                                    <div class="li-blog-blockquote">
                                        <blockquote>
                                            <p>{{ $articleDetail->a_content }}</p>
                                        </blockquote>
                                    </div>
                                    <!-- Blog Blockquote Area End Here -->
                                    <p>{{ $articleDetail->a_description }} </p>
                                    <div class="li-tag-line">
                                        <h4>tag:</h4>
                                        <a href="#">Headphones</a>,
                                        <a href="#">Video Games</a>,
                                        <a href="#">Wireless Speakers</a>
                                    </div>
                                    <div class="li-blog-sharing text-center pt-30">
                                        <h4>share this post:</h4>
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Begin Li's Blog Comment Section -->
                        <div class="li-comment-section">
                            <h3>03 comment</h3>
                            <ul>
                                <li>
                                    <div class="author-avatar pt-15">
                                        <img src="images/product-details/user.png" alt="User">
                                    </div>
                                    <div class="comment-body pl-15">
                                            <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                        <h5 class="comment-author pt-15">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2018 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li class="comment-children">
                                    <div class="author-avatar pt-15">
                                        <img src="images/product-details/admin.png" alt="Admin">
                                    </div>
                                    <div class="comment-body pl-15">
                                            <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                        <h5 class="comment-author pt-15">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2018 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="author-avatar pt-15">
                                        <img src="images/product-details/admin.png" alt="Admin">
                                    </div>
                                    <div class="comment-body pl-15">
                                        <span class="reply-btn pt-15 pt-xs-5"><a href="#">reply</a></span>
                                        <h5 class="comment-author pt-15">admin</h5>
                                        <div class="comment-post-date">
                                            20 nov, 2018 at 9:30pm
                                        </div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- Li's Blog Comment Section End Here -->
                        <!-- Begin Blog comment Box Area -->
                        <div class="li-blog-comment-wrapper">
                            <h3>leave a reply</h3>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form action="#">
                                <div class="comment-post-box">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label>comment</label>
                                            <textarea name="commnet" placeholder="Write a comment"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                                            <label>Name</label>
                                            <input type="text" class="coment-field" placeholder="Name">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20 mb-xs-20">
                                            <label>Email</label>
                                            <input type="text" class="coment-field" placeholder="Email">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 mt-5 mb-sm-20">
                                            <label>Website</label>
                                            <input type="text" class="coment-field" placeholder="Website">
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="coment-btn pt-30 pb-xs-30 pb-sm-30 f-left">
                                                <input class="li-btn-2" type="submit" name="submit" value="post comment">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Blog comment Box Area End Here -->
                    </div>
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
		{{-- -------------------------------------Bai viet khac------------------------------------- --}}
            <div class="col-lg-9 order-lg-1 order-1">
            	<hr>
            	<h3>Bài viết khác</h3>
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
					@endif
				</div>
			</div>
			{{-- ---------------------------------------------------------------- --}}
	</div>
</div>
<!-- Contact Main Page Area End Here -->
@stop