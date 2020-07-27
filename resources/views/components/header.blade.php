<header>
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Liên hệ:</span><a href="#">(+999) 999 999</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- Begin Header Top Right Area -->
                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <div class="dropdown">
                                            <button class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i></button>
                                            <div class="dropdown-content">
                                            @if(Auth::check())
                                                <a href="{{ route('user.dashboard') }}">Quản lý</a>
                                                <a href="#">Sản phẩm yêu thích</a>
                                                <a href="#">Giỏ hàng</a>
                                                <a href="{{ route('get.logout.user') }}">Thoát</a>
                                            @else
                                                <a href="{{ route('get.register') }}">Đăng ký</a>
                                                <a href="{{ route('get.login') }}">Đăng nhập</a>
                                            @endif
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('theme/images/menu/logo/1.jpg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form class="hm-searchbox">
                                    <select class="nice-select select-search-category" name="cate">
                                        <option value="0">Tất cả</option>
                                        @if(isset($categories))
                                            @foreach($categories as $category)
                                                <option value="{{ $category->id }}" {{ \Request::get('cate') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    <input type="text" class="form-control" name="search" placeholder="Tên sản phẩm" value="{{ \Request::get('search') }}">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="#">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                                <a href="{{ route('get.list.shopping.cart') }}">
                                                    <div class="hm-minicart-trigge">
                                                        <span class="item-icon"></span>
                                                        <span class="item-text">{{ Cart::subtotal(0) }}
                                                            <span class="cart-item-count">{{ Cart::count() }}</span>
                                                        </span>
                                                    </div>
                                                </a>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Begin Header Bottom Menu Area -->
                                <div class="hb-menu">
                                    <nav>
                                        <ul>
                                            <li class="megamenu-holder"><a href="{{ route('home') }}">Trang chủ</a></li>
                                            <li class="megamenu-holder"><a href="#">Sản phẩm</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li>
                                                        <ul>
                                                            @if(isset($categories))
                                                                @foreach($categories as $category)
                                                                    <li><a href="{{ route('get.list.product', [$category->c_slug, $category->id]) }}">{{ $category->c_name }}</a></li>
                                                                @endforeach
                                                            @endif
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="megamenu-holder">
                                                <a href="{{ route('get.list.article') }}" title="Tinh tức">Tin tức</a>
                                            </li>
                                            <li class="megamenu-holder"><a href="#"> Giới thiệu</a></li>
                                            <li class="megamenu-holder"><a href="{{ route('get.contact') }}">Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area d-lg-none d-xl-none col-12">
                    <div class="container">
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>