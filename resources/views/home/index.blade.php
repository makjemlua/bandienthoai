@extends('layouts.app')
@section('content')
<style type="text/css">
    .pro-rating .active
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
    <div class="body-wrapper">
            <!-- Bắt đầu slide -->
            <div class="slider-with-banner">
                <div class="container">
                    <div class="row">
                        <!-- Begin Slider Area -->
                        <div class="col-lg-8 col-md-8">
                            <div class="slider-area">
                                <div class="slider-active owl-carousel">
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left  animation-style-01 bg-1">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-20% Off</span> This Week</h5>
                                            <h2>Chamcham Galaxy S9 | S9+</h2>
                                            <h3>Starting at <span>$1209.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-02 bg-2">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>Black Friday</span> This Week</h5>
                                            <h2>Work Desk Surface Studio 2018</h2>
                                            <h3>Starting at <span>$824.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                    <!-- Begin Single Slide Area -->
                                    <div class="single-slide align-center-left animation-style-01 bg-3">
                                        <div class="slider-progress"></div>
                                        <div class="slider-content">
                                            <h5>Sale Offer <span>-10% Off</span> This Week</h5>
                                            <h2>Phantom 4 Pro+ Obsidian</h2>
                                            <h3>Starting at <span>$1849.00</span></h3>
                                            <div class="default-btn slide-btn">
                                                <a class="links" href="shop-left-sidebar.html">Shopping Now</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Slide Area End Here -->
                                </div>
                            </div>
                        </div>
                        <!-- Slider Area End Here -->
                        <!-- Begin Li Banner Area -->
                        <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                            <div class="li-banner">
                                <a href="#">
                                    <img src="theme/images/banner/1_1.jpg" alt="">
                                </a>
                            </div>
                            <div class="li-banner mt-15 mt-sm-30 mt-xs-30">
                                <a href="#">
                                    <img src="theme/images/banner/1_2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- Li Banner Area End Here -->
                    </div>
                </div>
            </div>
            <!-- Kết thúc slide -->
            <!-- Bắt đầu sản phẩm mới -->
            <div class="product-area pt-60 pb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <h2>
                                    <span>Sản phẩm mới nhất</span>
                                </h2>
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                        </div>
                    </div>

                    <div class="tab-content">
                        <div id="li-new-product" class="tab-pane active show" >
                            <div class="row">
                                <div class="product-active owl-carousel">
<!-- -------------------------------------------------- -->
                                @if(isset($productsNew))
                                    @foreach($productsNew as $new)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                @if($new->pro_number <= 0)
                                                <span style="background-color: red;color: white;padding: 2px 5px;border-radius: 4px;font-size: 12px;">Tạm hết hàng
                                                </span>
                                                @endif
                                                @if($new->pro_sale)
                                                <span style="background-color: #ccc601;color: white;padding: 2px 5px;border-radius: 4px;font-size: 12px;float: right;position: absolute;z-index: 99">Giảm giá {{ $new->pro_sale }} %
                                                </span>
                                                @endif
                                                <a href="{{ route('get.detail.product',[$new->pro_slug,$new->id]) }}">
                                                    <img src="{{ asset(pare_url_file($new->pro_avatar)) }}" alt="{{ $new->pro_name }}" height="206px">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <?php
$ageDetail = 0;
if ($new->pro_total_rating) {
	$ageDetail = round($new->pro_total_number / $new->pro_total_rating, 1);
}
?>
                                                            <div class="pro-rating">
                                                                @for($i=1;$i<=5;$i++)
                                                                    <span><i class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></span>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="{{ route('get.detail.product',[$new->pro_slug,$new->id]) }}">
                                                        {{ $new->pro_name }}
                                                    </a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{ number_format($new->pro_price,0, ',', '.') }} đ</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="{{ route('add.shopping.cart', $new->id) }}">Thêm giỏ hàng</a></li>
                                                        <li><a class="links-details" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="{{ route('get.detail.product',[$new->pro_slug,$new->id]) }}" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{ $new->id }}"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
                                    @endforeach
                                @endif
<!-- ------------------------------------------- -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Kết thúc sản phẩm mới -->
@if(isset($categoriesHome))
@foreach($categoriesHome as $categoriHome)
            <!-- Bắt đầu laptop -->
            <section class="product-area li-laptop-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <h2>
                                    <span>{{ $categoriHome->c_name }}</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
<!-- ------------------------------- -->
@if(isset($categoriHome->products))
@foreach($categoriHome->products as $product)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}">
                                                    <img src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="Li's Product Image" height="206px">
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
                                                            <?php
$ageDetail = 0;
if ($product->pro_total_rating) {
	$ageDetail = round($product->pro_total_number / $product->pro_total_rating, 1);
}
?>
                                                            <div class="pro-rating">
                                                                @for($i=1;$i<=5;$i++)
                                                                    <span><i class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></span>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="{{ route('get.detail.product',[$product->pro_slug,$product->id]) }}">{{ $product->pro_name }}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{ number_format($product->pro_price,0, ',', '.') }} đ</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="{{ route('add.shopping.cart', $product->id) }}">Thêm giỏ hàng</a></li>
                                                        <li><a class="links-details" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
@endforeach
@endif
<!-- -------------------------------- -->
                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Kết thúc laptop -->
@endforeach
@endif
            <!-- Bắt đầu trending -->
            <section class="product-area li-trending-product pt-60 pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Tab Menu Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <h2>
                                    <span>Sản phẩm nổi bật</span>
                                </h2>
                            </div>
                            <!-- Begin Li's Tab Menu Content Area -->
                            <div class="tab-content li-tab-content li-trending-product-content">
                                <div id="home1" class="tab-pane show fade in active">
                                    <div class="row">
                                        <div class="product-active owl-carousel">
<!-- ---------------------------------- -->
@if(isset($productHot))
@foreach($productHot as $hot)
                                            <div class="col-lg-12">
                                                <!-- single-product-wrap start -->
                                                <div class="single-product-wrap">
                                                    <div class="product-image">
                                                        <a href="{{ route('get.detail.product',[$hot->pro_slug,$hot->id]) }}">
                                                            <img src="{{ asset(pare_url_file($hot->pro_avatar)) }}" alt="Li's Product Image" height="206px">
                                                        </a>
                                                        <span class="sticker">New</span>
                                                    </div>
                                                    <div class="product_desc">
                                                        <div class="product_desc_info">
                                                            <div class="product-review">
                                                                <h5 class="manufacturer">
                                                                    <a href="{{ route('get.detail.product',[$hot->pro_slug,$hot->id]) }}">Graphic Corner</a>
                                                                </h5>
                                                                <div class="rating-box">
                                                                    <?php
$ageDetail = 0;
if ($hot->pro_total_rating) {
	$ageDetail = round($hot->pro_total_number / $hot->pro_total_rating, 1);
}
?>
                                                                    <div class="pro-rating">
                                                                        @for($i=1;$i<=5;$i++)
                                                                            <span><i class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></span>
                                                                        @endfor
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <h4><a class="product_name" href="{{ route('get.detail.product',[$hot->pro_slug,$hot->id]) }}">{{ $hot->pro_name }}</a></h4>
                                                            <div class="price-box">
                                                                <span class="new-price">{{ number_format($hot->pro_price,0, ',', '.') }} đ</span>
                                                            </div>
                                                        </div>
                                                        <div class="add-actions">
                                                            <ul class="add-actions-link">
                                                                <li class="add-cart active"><a href="{{ route('add.shopping.cart', $hot->id) }}">Thêm giỏ hàng</a></li>
                                                                <li><a class="links-details" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                                <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- single-product-wrap end -->
                                            </div>
@endforeach
@endif
<!-- --------------------------------------- -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Tab Menu Content Area End Here -->
                        </div>
                        <!-- Tab Menu Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Kết thúc trending -->

            <!-- Bắt đầu Sale -->
            <section class="product-area li-laptop-product li-trendding-products best-sellers pb-45">
                <div class="container">
                    <div class="row">
                        <!-- Begin Li's Section Area -->
                        <div class="col-lg-12">
                            <div class="li-product-tab">
                                <h2>
                                    <span>Sản phẩm giảm giá</span>
                                </h2>
                            </div>
                            <div class="row">
                                <div class="product-active owl-carousel">
<!-- ----------------------------------- -->
@if(isset($productsSale))
@foreach($productsSale as $productSale)
                                    <div class="col-lg-12">
                                        <!-- single-product-wrap start -->
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                @if($productSale->pro_sale)
                                                <span style="background-color: #ccc601;color: white;padding: 2px 5px;border-radius: 4px;font-size: 12px;float: right;">Giảm giá {{ $productSale->pro_sale }} %
                                                </span>
                                                @endif
                                                <a href="{{ route('get.detail.product',[$productSale->pro_slug,$productSale->id]) }}">
                                                    <img src="{{ asset(pare_url_file($productSale->pro_avatar)) }}" alt="Li's Product Image" height="206px">
                                                </a>
                                                <span class="sticker">New</span>
                                            </div>
                                            <div class="product_desc">
                                                <div class="product_desc_info">
                                                    <div class="product-review">
                                                        <h5 class="manufacturer">
                                                            <a href="{{ route('get.detail.product',[$productSale->pro_slug,$productSale->id]) }}">Graphic Corner</a>
                                                        </h5>
                                                        <div class="rating-box">
                                                            <?php
$ageDetail = 0;
if ($productSale->pro_total_rating) {
	$ageDetail = round($productSale->pro_total_number / $productSale->pro_total_rating, 1);
}
?>
                                                            <div class="pro-rating">
                                                                @for($i=1;$i<=5;$i++)
                                                                    <span><i class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></span>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h4><a class="product_name" href="{{ route('get.detail.product',[$productSale->pro_slug,$productSale->id]) }}">{{ $productSale->pro_name }}</a></h4>
                                                    <div class="price-box">
                                                        <span class="new-price">{{ number_format($productSale->pro_price,0, ',', '.') }} đ</span>
                                                    </div>
                                                </div>
                                                <div class="add-actions">
                                                    <ul class="add-actions-link">
                                                        <li class="add-cart active"><a href="{{ route('add.shopping.cart', $productSale->id) }}">Thêm giỏ hàng</a></li>
                                                        <li><a class="links-details" href="#"><i class="fa fa-heart-o"></i></a></li>
                                                        <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-product-wrap end -->
                                    </div>
@endforeach
@endif
<!-- ----------------------------- -->

                                </div>
                            </div>
                        </div>
                        <!-- Li's Section Area End Here -->
                    </div>
                </div>
            </section>
            <!-- Kết thúc sale -->
            @include('components.product_suggest')
            </div>


@stop
@section('script')
<script>
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        let routeRenderProduct = '{{ route('post.product.view') }}';
        checkRenderProduct = false;
        $(document).on('scroll', function(){
            if($(window).scrollTop()>100 && checkRenderProduct == false){
                checkRenderProduct = true;
                let products = localStorage.getItem('products');
                products = $.parseJSON(products)

                if(products.length > 0)
                {
                    $.ajax({
                        url : routeRenderProduct,
                        method : "POST",
                        data : {id : products},
                        success : function(result)
                        {
                            console.log(result.data);
                            $("#product_view").html('').append(result.data);
                        }
                    });
                }
            }
        });
    })
</script>
@stop