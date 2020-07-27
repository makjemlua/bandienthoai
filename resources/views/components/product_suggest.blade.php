@if(!empty($productSuggest))
<!-- Bắt đầu sản vừa xem -->
<div class="product-area pt-60 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="li-product-tab">
                    <h2>
                        <span>Sản phẩm đã mua gần đây</span>
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
                        @foreach($productSuggest as $suggest)
                        <div class="col-lg-12">
                            <!-- single-product-wrap start -->
                            <div class="single-product-wrap">
                                <div class="product-image">
                                    @if($suggest->pro_number == 0)
                                    <span style="background-color: red;color: white;padding: 2px 5px;border-radius: 4px;font-size: 12px;">Tạm hết hàng
                                    </span>
                                    @endif
                                    @if($suggest->pro_sale)
                                    <span style="background-color: #ccc601;color: white;padding: 2px 5px;border-radius: 4px;font-size: 12px;float: right;position: absolute;z-index: 99">Giảm giá {{ $suggest->pro_sale }} %
                                    </span>
                                    @endif
                                    <a href="{{ route('get.detail.product',[$suggest->pro_slug,$suggest->id]) }}">
                                        <img src="{{ asset(pare_url_file($suggest->pro_avatar)) }}" alt="{{ $suggest->pro_name }}" height="206px">
                                    </a>
                                    <span class="sticker">product</span>
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
if ($suggest->pro_total_rating) {
	$ageDetail = round($suggest->pro_total_number / $suggest->pro_total_rating, 1);
}
?>
                                               <div class="pro-rating">
                                                @for($i=1;$i<=5;$i++)
                                                <span><i class="fa fa-star {{ $i <= $ageDetail ? 'active' : '' }}"></i></span>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <h4><a class="product_name" href="{{ route('get.detail.product',[$suggest->pro_slug,$suggest->id]) }}">
                                        {{ $suggest->pro_name }}
                                    </a></h4>
                                    <div class="price-box">
                                        <span class="product-price">{{ number_format($suggest->pro_price,0, ',', '.') }} đ</span>
                                    </div>
                                </div>
                                <div class="add-actions">
                                    <ul class="add-actions-link">
                                        <li class="add-cart active"><a href="{{ route('add.shopping.cart', $suggest->id) }}">Thêm giỏ hàng</a></li>
                                        <li><a class="links-details" href="\"><i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="{{ route('get.detail.product',[$suggest->pro_slug,$suggest->id]) }}" title="quick view" class="quick-view-btn" data-toggle="modal" data-target="#{{ $suggest->id }}"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single-product-wrap end -->
                    </div>
                    @endforeach
                    <!-- ------------------------------------------- -->

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endif
            <!-- Kết thúc sản phẩm mới -->