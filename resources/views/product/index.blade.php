@extends('layouts.app')
@section('content')
<style type="text/css">
    .categori-checkbox .active
    {
    color: red;
    }
</style>
<div class="body-wrapper">
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Danh mục</li>
                            <li class="active">Sản phẩm</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Li's Content Wraper Area -->
            <div class="content-wraper pt-60 pb-60 pt-sm-30">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 order-1 order-lg-2">
                            <!-- Begin Li's Banner Area -->
                            <div class="single-banner shop-page-banner">
                                <a href="#">
                                    <img src="{{ asset('theme/images/bg-banner/2.jpg') }}" alt="Li's Static Banner">
                                </a>
                            </div>
                            <!-- Li's Banner Area End Here -->
                            <!-- shop-top-bar start -->
                            <div class="shop-top-bar mt-30">
                                <div class="shop-bar-inner">
                                    <div class="product-view-mode">
                                        <!-- shop-item-filter-list start -->
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active" role="presentation"><a aria-selected="true" class="active show" data-toggle="tab" role="tab" aria-controls="grid-view" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                            <li role="presentation"><a data-toggle="tab" role="tab" aria-controls="list-view" href="#list-view"><i class="fa fa-th-list"></i></a></li>
                                        </ul>
                                        <!-- shop-item-filter-list end -->
                                    </div>
                                    <div class="toolbar-amount">
                                        <span>Showing 1 to 9 of 15</span>
                                    </div>
                                </div>
                                <!-- product-select-box start -->
                                <form id="form_order" method="GET">
                                    <div class="product-select-box">
                                        <div class="product-short">
                                            <p>Sort By:</p>
                                            <select class="orderby nice-select" name="orderby">
                                                <option {{ Request::get('orderby') == "name_a" || !Request::get('orderby') ? "selected='selected'" : "" }} value="name_a">Tên (A - Z)</option>
                                                <option {{ Request::get('orderby') == "name_z" ? "selected='selected'" : "" }} value="name_z">Tên (Z - A)</option>
                                                <option {{ Request::get('orderby') == "price_min" ? "selected='selected'" : "" }} value="price_min">Giá (Thấp &gt; Cao)</option>
                                                <option {{ Request::get('orderby') == "price_max" ? "selected='selected'" : "" }} value="price_max">Giá (Cao &gt; Thấp)</option>
                                                <option {{ Request::get('orderby') == "date_desc" ? "selected='selected'" : "" }} value="date_desc">Ngày (Cũ - Mới)</option>
                                                <option {{ Request::get('orderby') == "date_asc" ? "selected='selected'" : "" }} value="date_asc">Ngày (Mới - Cũ)</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                                <!-- product-select-box end -->
                            </div>
                            <!-- shop-top-bar end -->
                            <!-- shop-products-wrapper start -->
                            <div class="shop-products-wrapper">
                                <div class="tab-content">
                                    <div id="grid-view" class="tab-pane fade active show" role="tabpanel">
                                        <div class="product-area shop-product-area">
                                            <div class="row">
                                                {{-- ---------------------------- --}}
                                                @if(isset($products))
                                                    @foreach($products as $product)
                                                        <div class="col-lg-4 col-md-4 col-sm-6 mt-40">
                                                            <!-- single-product-wrap start -->
                                                            <div class="single-product-wrap">
                                                                <div class="product-image">
                                                                    <a href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">
                                                                        <img src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="Li's Product Image" height="310px">
                                                                    </a>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                                <div class="product_desc">
                                                                    <div class="product_desc_info">
                                                                        <div class="product-review">
                                                                            <h5 class="manufacturer">
                                                                                <a href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">Graphic Corner</a>
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
                                                                        <h4><a class="product_name" href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}">{{ $product->pro_name }}</a></h4>
                                                                        <div class="price-box">
                                                                            <span class="new-price">
                                                                                {{ number_format($product->pro_price,0,',','.') }} đ
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="add-actions">
                                                                        <ul class="add-actions-link">
                                                                            <li class="add-cart active"><a href="shopping-cart.html">Add to cart</a></li>
                                                                            <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                                                            <li><a class="links-details" href="{{ route('get.detail.product', [$product->pro_slug, $product->id]) }}"><i class="fa fa-heart-o"></i></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- single-product-wrap end -->
                                                        </div>
                                                    @endforeach
                                                @endif
                                                {{-- ----------------------------- --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div id="list-view" class="tab-pane fade product-list-view" role="tabpanel">
                                        <div class="row">
                                            <div class="col">
                                                @if(isset($products))
                                                    @foreach($products as $product)
                                                        <div class="row product-layout-list">
                                                            <div class="col-lg-3 col-md-5 ">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="images/product/large-size/12.jpg" alt="Li's Product Image">
                                                                    </a>
                                                                    <span class="sticker">New</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-5 col-md-7">
                                                                <div class="product_desc">
                                                                    <div class="product_desc_info">
                                                                        <div class="product-review">
                                                                            <h5 class="manufacturer">
                                                                                <a href="product-details.html">Graphic Corner</a>
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
                                                                        <h4><a class="product_name" href="single-product.html">Hummingbird printed t-shirt</a></h4>
                                                                        <div class="price-box">
                                                                            <span class="new-price">$46.80</span>
                                                                        </div>
                                                                        <p>Beach Camera Exclusive Bundle - Includes Two Samsung Radiant 360 R3 Wi-Fi Bluetooth Speakers. Fill The Entire Room With Exquisite Sound via Ring Radiator Technology. Stream And Control R3 Speakers Wirelessly With Your Smartphone. Sophisticated, Modern Desig</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="shop-add-action mb-xs-30">
                                                                    <ul class="add-actions-link">
                                                                        <li class="add-cart"><a href="#">Add to cart</a></li>
                                                                        <li class="wishlist"><a href="wishlist.html"><i class="fa fa-heart-o"></i>Add to wishlist</a></li>
                                                                        <li><a class="quick-view" data-toggle="modal" data-target="#exampleModalCenter" href="#"><i class="fa fa-eye"></i>Quick view</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="paginatoin-area">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 pt-xs-15">
                                                <p>Showing 1-4 item(s)</p>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                {!! $products->links() !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop-products-wrapper end -->
                        </div>
                        <div class="col-lg-3 order-2 order-lg-1">
                            <!--sidebar-categores-box start  -->
                            <div class="sidebar-categores-box">
                                <div class="sidebar-title">
                                    <h2>Sắp xếp theo</h2>
                                </div>
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area">
                                    <h5 class="filter-sub-titel">Khoảng giá</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><a class="{{ Request::get('price') == 1 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '1']) }}">Dưới 1tr</a></li>
                                                <li><a class="{{ Request::get('price') == 2 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '2']) }}">1tr - 3tr</a></li>
                                                <li><a class="{{ Request::get('price') == 3 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '3']) }}">3tr - 5tr</a></li>
                                                <li><a class="{{ Request::get('price') == 4 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '4']) }}">5tr - 7tr</a></li>
                                                <li><a class="{{ Request::get('price') == 5 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '5']) }}">7tr - 10tr</a></li>
                                                <li><a class="{{ Request::get('price') == 6 ? 'active' : '' }}" href="{{ request()->fullUrlWithQuery(['price' => '6']) }}">Trên 10tr</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Categories</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">Graphic Corner (10)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#"> Studio Design (6)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Size</h5>
                                    <div class="size-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-size"><a href="#">S (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">M (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">L (3)</a></li>
                                                <li><input type="checkbox" name="product-size"><a href="#">XL (3)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pt-xs-10">
                                    <h5 class="filter-sub-titel">Color</h5>
                                    <div class="color-categoriy">
                                        <form action="#">
                                            <ul>
                                                <li><span class="white"></span><a href="#">White (1)</a></li>
                                                <li><span class="black"></span><a href="#">Black (1)</a></li>
                                                <li><span class="Orange"></span><a href="#">Orange (3) </a></li>
                                                <li><span class="Blue"></span><a href="#">Blue  (2) </a></li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <!-- filter-sub-area end -->
                                <!-- filter-sub-area start -->
                                <div class="filter-sub-area pt-sm-10 pb-sm-15 pb-xs-15">
                                    <h5 class="filter-sub-titel">Dimension</h5>
                                    <div class="categori-checkbox">
                                        <form action="#">
                                            <ul>
                                                <li><input type="checkbox" name="product-categori"><a href="#">40x60cm (6)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">60x90cm (6)</a></li>
                                                <li><input type="checkbox" name="product-categori"><a href="#">80x120cm (6)</a></li>
                                            </ul>
                                        </form>
                                    </div>
                                 </div>
                                <!-- filter-sub-area end -->
                            </div>
                            <!--sidebar-categores-box end  -->
                            <!-- category-sub-menu start -->
                            <div class="sidebar-categores-box mb-sm-0 mb-xs-0">
                                <div class="sidebar-title">
                                    <h2>Laptop</h2>
                                </div>
                                <div class="category-tags">
                                    <ul>
                                        <li><a href="# ">Devita</a></li>
                                        <li><a href="# ">Cameras</a></li>
                                        <li><a href="# ">Sony</a></li>
                                        <li><a href="# ">Computer</a></li>
                                        <li><a href="# ">Big Sale</a></li>
                                        <li><a href="# ">Accessories</a></li>
                                    </ul>
                                </div>
                                <!-- category-sub-menu end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content Wraper Area End Here -->

@stop

@section('script')
<script>
    $(function(){
        $('.orderby').change(function(){
            $("#form_order").submit();
        })
    })
</script>
@stop