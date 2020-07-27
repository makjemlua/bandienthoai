@extends('layouts.app')
@section('content')
<style type="text/css">
    .list-text
    {
        display: inline-block;
        margin-left: 10px;
        position: relative;
        background-color: #52b858;
        color: #fff;
        padding: 2px 8px;
        box-sizing: border-box;
        font-size: 12px;
        border-radius: 2px;
    }
    .list-text:after
    {
        right:100%;
        top: 50%;
        border:solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
        border-color: rgba(82,184,88,0);
        border-right-color: #52b858;
        border-width: 6px;
        margin-top: -6px;
    }
    .list-star
    {
        cursor: pointer;
    }
    .list-star .rating-active, .pro-rating .active
    {
        color: #ff9705;
    }
    span.pro-rating .active
    {
        color: #ff9705;
    }
    .pro-rating
    {
        color: #bcbcbc;
    }
</style>
<div class="breadcrumb-area">
    <div class="container">
        <div class="breadcrumb-content">
            <ul>
                <li><a href="{{ route('home') }}">Trang chủ</a></li>
                <li class="active">Chi tiết sản phẩm</li>
            </ul>
        </div>
    </div>
</div>
<!-- Li's Breadcrumb Area End Here -->
<!-- content-wraper start -->
<div class="content-wraper" id="content_product" data-id="{{ $productDetail->id }}">
    <div class="container">
        <div class="row single-product-area">
            <!-- --------------------- -->
            @if(isset($productDetail))
            <div class="col-lg-5 col-md-6">
             <!-- Product Details Left -->
             <div class="product-details-left">
                <div class="product-details-images slider-navigation-1">
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="images/product/large-size/1.jpg" data-gall="myGallery">
                            <img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image">
                        </a>
                    </div>
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="images/product/large-size/2.jpg" data-gall="myGallery">
                            <img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image">
                        </a>
                    </div>
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="images/product/large-size/3.jpg" data-gall="myGallery">
                            <img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image">
                        </a>
                    </div>
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="images/product/large-size/4.jpg" data-gall="myGallery">
                            <img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image">
                        </a>
                    </div>
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="images/product/large-size/5.jpg" data-gall="myGallery">
                            <img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image">
                        </a>
                    </div>
                    <div class="lg-image">
                        <a class="popup-img venobox vbox-item" href="images/product/large-size/6.jpg" data-gall="myGallery">
                            <img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image">
                        </a>
                    </div>
                </div>
                <div class="product-details-thumbs slider-thumbs-1">
                    <div class="sm-image"><img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image thumb"></div>
                    <div class="sm-image"><img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image thumb"></div>
                    <div class="sm-image"><img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image thumb"></div>
                    <div class="sm-image"><img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image thumb"></div>
                    <div class="sm-image"><img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image thumb"></div>
                    <div class="sm-image"><img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="product image thumb"></div>
                </div>
            </div>
            <!--// Product Details Left -->
        </div>
        <div class="col-lg-7 col-md-6">
            <div class="product-details-view-content pt-60">
                <div class="product-info">
                    <h2>{{ $productDetail->pro_name }}</h2>
                    <span class="product-details-ref">{{ $productDetail->pro_description }}</span>
                    <div class="rating-box pt-20">
                        <?php
$ageDetail = 0;
if ($productDetail->pro_total_rating) {
	$ageDetail = round($productDetail->pro_total_number / $productDetail->pro_total_rating, 1);
}
?>
                       <div class="pro-rating">
                        @for($i=1;$i<=5;$i++)
                        <span><i class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></span>
                        @endfor
                    </div>
                </div>
                <div class="price-box pt-20">
                    <span class="new-price new-price-2">
                       {{ number_format($productDetail->pro_price,0,',','.') }} đ
                   </span>
               </div>
               <div class="product-desc">
                <p>
                    <span>
                       {{ $productDetail->pro_content }}
                   </span>
               </p>
           </div>
           <div class="single-add-to-cart">
            <ul class="add-actions-link">
                <li class="add-cart active"><a href="{{ route('add.shopping.cart', $productDetail->id) }}">Thêm giỏ hàng</a></li>
            </ul>
        </div>
        <div class="product-additional-info pt-25">
            <a class="wishlist-btn" href="wishlist.html"><i class="fa fa-heart-o"></i>
               Thêm vào yêu thích
           </a>
           <div class="product-social-sharing pt-25">
            <ul>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i>Google +</a></li>
                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i>Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="block-reassurance">
        <ul>
            <li>
                <div class="reassurance-item">
                    <div class="reassurance-icon">
                        <i class="fa fa-check-square-o"></i>
                    </div>
                    <p>Bảo đảm an toàn thông tin người dùng</p>
                </div>
            </li>
            <li>
                <div class="reassurance-item">
                    <div class="reassurance-icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <p>Giao hàng dễ dàng, nhanh chóng</p>
                </div>
            </li>
            <li>
                <div class="reassurance-item">
                    <div class="reassurance-icon">
                        <i class="fa fa-exchange"></i>
                    </div>
                    <p>Miễn phí đổi trả hàng 3 ngày</p>
                </div>
            </li>
        </ul>
    </div>
</div>
</div>
</div>

@endif
<!-- ----------------------- -->
</div>
</div>
</div>
<!-- content-wraper end -->
{{-- -------------------------------------------------------------------- --}}
<!-- Begin Product Area -->
<div class="product-area pt-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <h4><span>Đánh giá sản phẩm</span></h4>
                </div>
                <!-- Begin Li's Tab Menu Content Area -->
            </div>
        </div>
        <div class="tab-content">

            <div id="reviews" class="tab-pane active show" >
                <div class="product-reviews">
                    <div class="product-details-comment-block">
                        <div class="row" style="align-items: center;border:1px solid #dedede;border-radius: 5px">
                            <div class="col-md-2">
                                <div class="rating-item">
                                    <span class="fa fa-star" style="font-size: 100px;display: block;color: #ff9705;margin: 0 auto;text-align: center;"><b style="position: absolute;top: 50%;left: 50%;transform:translateX(-50%) translateY(-50%);font-size: 20px;color: white;">{{ $ageDetail }} </b></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="list-rating" style="padding: 20px;">
                                    @foreach($arrayRatings as $key => $arrayRating)
                                    <?php
$itemAge = round(($arrayRating['total'] / $productDetail->pro_total_rating) * 100, 1);
?>
                                    <div class="item-rating" style="display: flex;">
                                        <div style="width: 10%">
                                            {{ $key }} <span class="fa fa-star" style="color: #ff9705"></span>
                                        </div>
                                        <div style="width: 55%;margin: 10px 20px;">
                                            <span style="width: 100%;height: 6px;display: block;border:1px solid #dedede;border-radius: 5px;background-color: #dedede">
                                                <b style="width: {{ $itemAge }}%;background-color: #ff9705;display:block;height: 100%;border-radius: 5px">

                                                </b>
                                            </span>
                                        </div>
                                        <div style="width: 35%">
                                            <a href="">{{ $arrayRating['total'] }} đánh giá ({{ $itemAge }} %)</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="review-btn">
                                    <a class="review-links" href="#" data-toggle="modal" data-target="#mymodal">Viết đánh giá của bạn!</a>
                                </div>
                            </div>
                        </div>
                        @if(isset($ratings))
                        @foreach($ratings as $rating)
                        <div>
                            <div class="comment-author-infos pt-25">
                                <span>{{ isset($rating->user->name) ? $rating->user->name : '' }}</span>
                            </div>
                            <div class="pro-rating">
                                @for($i=1;$i<=5;$i++)
                                <span><i class="fa fa-star {{ $i<=$rating->ra_number ? 'active' : ''}}"></i></span>
                                @endfor
                                <div style="margin-left: 5px;color: #000">&nbsp&nbsp&nbsp{{ $rating->ra_content }}</div>
                                <p>{{ $rating->created_at }}</p>
                            </div>
                        </div>

                        @endforeach
                        @endif


                        <!-- Begin Quick View | Modal Area -->
                        <div class="modal fade modal-wrapper" id="mymodal" >
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <h3 class="review-page-title">Đánh giá của bạn</h3>
                                        <div class="modal-inner-area row">
                                            <div class="col-lg-6">
                                               <div class="li-review-product">
                                                   <img src="{{ asset(pare_url_file($productDetail->pro_avatar)) }}" alt="Product" width="80px" height="80px">
                                                   <div class="li-review-product-desc">
                                                       <h3><p class="li-product-name"><h3>{{ $productDetail->pro_name }}</h3></p>
                                                       <p>
                                                           <span>{{ $productDetail->pro_description }} </span>
                                                       </p>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="col-lg-6">
                                            <div class="li-review-content">
                                                <!-- Begin Feedback Area -->
                                                <div class="feedback-area">
                                                    <div class="feedback">
                                                        <h3 class="feedback-title">Phản hồi</h3>
                                                        <form action="" method="POST">
                                                            @csrf
                                                            <p class="your-opinion" style="display: flex;font-size: 15px">
                                                                <span style="margin:0 15px;" class="list-star">
                                                                    @for($i=1;$i<=5;$i++)
                                                                    <i class="fa fa-star" data-key="{{ $i }}"></i>
                                                                    @endfor
                                                                </span>
                                                                <span class="list-text">Tốt</span>
                                                            </p>
                                                            <input type="hidden" name="" class="number_rating">
                                                            <p class="feedback-form">
                                                                <label for="feedback">Viết đánh giá</label>
                                                                <textarea id="ra_content" name="ra_content" cols="45" rows="8" aria-required="true"></textarea>
                                                            </p>
                                                            <div class="feedback-input">
                                                                <div class="feedback-btn pb-15">
                                                                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">Đóng</a>
                                                                    <a href="{{ route('post.rating.product', $productDetail) }}" class="js_rating_product">Xác nhận</a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                                <!-- Feedback Area End Here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Quick View | Modal Area End Here -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Product Area End Here -->
{{-- -------------------------------------------------------------------- --}}
<!-- Begin Product Area -->
<div class="product-area pt-35">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <ul class="nav li-product-menu">
                     <li><a class="active" data-toggle="tab" href="#description"><span>Sản phẩm nổi bật</span></a></li>
                 </ul>
             </div>
             <!-- Begin Li's Tab Menu Content Area -->
         </div>
     </div>
 </div>
</div>
<!-- Product Area End Here -->
<!-- Begin Li's Laptop Product Area -->
<section class="product-area li-laptop-product pt-30 pb-50">
    <div class="container">
        <div class="row">
            <!-- Begin Li's Section Area -->
            <div class="col-lg-12">
                <div class="row">
                    <div class="product-active owl-carousel">
                        <!-- -------------------------------- -->
                        @if(isset($productHot))
                        @foreach($productHot as $hot)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    <a href="{{ route('get.detail.product', [$hot->pro_slug, $hot->id]) }}">
                                        <img src="{{ asset(pare_url_file($hot->pro_avatar)) }}" alt="Li's Product Image" height="206">
                                    </a>
                                    <span class="sticker">New</span>
                                </div>
                                <div class="product_desc">
                                    <div class="product_desc_info">
                                        <div class="product-review">
                                            <h5 class="manufacturer">
                                                <a href="#">Graphic Corner</a>
                                            </h5>
                                            <div class="rating-box">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                    <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <h4><a class="product_name" href="{{ route('get.detail.product', [$hot->pro_slug, $hot->id]) }}">
                                           {{ $hot->pro_name }}
                                       </a></h4>
                                       <div class="price-box">
                                        <span class="new-price">
                                           {{ number_format($hot->pro_price,0,',','.') }} đ
                                       </span>
                                   </div>
                               </div>
                               <div class="add-actions">
                                <ul class="add-actions-link">
                                    <li class="add-cart active"><a href="#">Thêm giỏ hàng</a></li>
                                    <li><a href="{{ route('get.detail.product', [$hot->pro_slug, $hot->id]) }}" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                    <li><a class="links-details" href="#"><i class="fa fa-heart-o"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-wrap end -->
                </div>
                @endforeach
                @endif
                <!-- ------------------------------- -->

            </div>
        </div>
    </div>
    <!-- Li's Section Area End Here -->
</div>
</div>
</section>
@stop

@section('script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(function(){
            let listStar = $(".list-star .fa");
            listRatingText = {
                1 : 'Không thích',
                2 : 'Tạm được',
                3 : 'Bình thường',
                4 : 'Rất tốt',
                5 : 'Tuyệt vời',
            }
            listStar.mouseover(function(){
                let $this = $(this);
                let number = $this.attr('data-key');
                listStar.removeClass('rating-active')

                $(".number_rating").val(number);
                $.each(listStar, function(key,value){
                    if(key +1 <= number)
                    {
                        $(this).addClass('rating-active')
                    }
                });
                $(".list-text").text('').text(listRatingText[number]);
            });
            $(".js_rating_product").click(function(e){
                event.preventDefault();
                let content = $("#ra_content").val();
                let number = $(".number_rating").val();
                let url = $(this).attr('href');
                if(content && number){
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {
                            number: number,
                            r_content: content,
                        }
                    }).done(function(result){
                        if(result.code == 1)
                        {
                            alert("Gửi đánh giá thành công");
                            location.reload();
                        }
                    });
                }

            });

            //lay id san pham vao storage
            let idProduct = $("#content_product").attr('data-id');

            //lay gia tri storage
            let products = localStorage.getItem('products');

            if(products == null)
            {
                arrayProduct = new Array();
                arrayProduct.push(idProduct)

                localStorage.setItem('products', JSON.stringify(arrayProduct))
            }else
            {
                //chuyen ve mang
                products = $.parseJSON(products)

                if(products.indexOf(idProduct) == -1)
                {
                    products.push(idProduct);
                    localStorage.setItem('products',JSON.stringify(products))
                }
            }
        });
    </script>
@stop