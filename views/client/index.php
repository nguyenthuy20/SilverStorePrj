<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Cáo Bạc - Trang sức bạc
<?php endblock() ?>

<?php startblock('content') ?>
    <!-- SLIDER AREA START -->
    <section class="slider-area-main">
        <!-- slider -->
        <div class="slider-area">
            <div class="bend niceties preview-1">
                <div id="ensign-nivoslider-3" class="slides">
                    <img src="assets/client/img/home-1/slide-1.png" alt="" title="#slider-direction-1"  />
                    <img src="assets/client/img/home-1/slide-2.png" alt="" title="#slider-direction-2"  />
                    <img src="assets/client/img/home-1/slide-3.png" alt="" title="#slider-direction-3"  />
                </div>
                <!-- direction 1 -->
                <div id="slider-direction-1" class="t-cn slider-direction">
                    <div class="slider-content t-lfl s-tb slider-1">
                        <div class="title-container s-tb-c" style="float:right; padding-top: 120px; padding-right: 120px; font-size: 16px">
                            <h1 class="title1">CÁO BẠC</h1>
                            <p style="padding-right: 120px; color: #000000; font-weight: bold; word-wrap: unset">In oder to be inrreplaceable, one must always be different.</p>
                            <h3 class="title3" style="color: #000000"><a href="#">MUA NGAY</a></h3>
                        </div>
                    </div>
                </div>
                <!-- direction 2 -->
                <div id="slider-direction-2" class="slider-direction">
                    <div class="slider-content t-cn s-tb slider-2">
                        <div class="title-container s-tb-c">
                            <h1 class="title1" style="color: white">Handmade jewelry since 2014</h1>
<!--                            <h3 class="title3">for fashion</h3>-->
                        </div>
                    </div>
                </div>
                <!-- direction 3 -->
                <div id="slider-direction-3" class="slider-direction">
                    <div class="slider-content t-lfr s-tb slider-3">
<!--                        <div class="title-container s-tb-c">-->
<!--                            <h1 class="title1">Every piece of our jewelry tells a story</h1>-->
<!--                            <h3 class="title3">Fashion Shoe</h3>-->
<!--                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider end-->
</section>
<!-- SLIDER AREA END -->

<!-- BANNER AREA START -->
<section class="banner-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 xs-res-mrbtm">
                <div class="banner-left">
                    <a class="promo-link" href="#">
                        <img src="assets/client/img/home-1/banner-1.jpg" alt="" />
                        <h1>MEN’S COLLECTION</h1>
                        <span class="promo-hover"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="banner-left-side">
                    <a class="mr-btm promo-link" href="#">
                        <img src="assets/client/img/home-1/banner-2.jpg" alt="" />
                        <h1>NEW COLLECTION</h1>
                        <span class="sl-btn">SALE</span>
                        <div class="promo-hover"></div>
                    </a>
                    <a class="promo-link xs-res-mrbtm" href="#">
                        <img src="assets/client/img/home-1/banner-3.jpg" alt="" />
                        <h1>BEST MEN’S COLLECTION</h1>
                        <span class="sl-btn">SALE</span>
                        <div class="promo-hover"></div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 xs-res-mrbtm">
                <div class="banner-right">
                    <a class="promo-link" href="#">
                        <img src="assets/client/img/home-1/banner-4.jpg" alt="" />
                        <h1>WOMEN’S COLLECTION</h1>
                        <span class="promo-hover"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <div class="banner-right-side">
                    <a class="mr-btm promo-link" href="#">
                        <img src="assets/client/img/home-1/banner-5.jpg" alt="" />
                        <h1>NEW COLLECTION</h1>
                        <span class="sl-btn">SALE</span>
                        <div class="promo-hover"></div>
                    </a>
                    <a class="promo-link" href="#">
                        <img src="assets/client/img/home-1/banner-6.jpg" alt="" />
                        <h1>WOMEN’S COLLECTION</h1>
                        <span class="sl-btn">SALE</span>
                        <div class="promo-hover"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BANNER AREA END -->

<!-- FEATURED PRODUCT START -->
<section class="featured-area">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="section-titel">
                    <h3>Sản phẩm nổi bật</h3>
                </div>
            </div>
            <div class="featured-tab">
                <ul class="text-center">
                    <li class="active"><a data-toggle="tab" href="#home">Nữ</a></li>
                    <li><a data-toggle="tab" href="#menu1">Nam</a></li>
                    <li><a data-toggle="tab" href="#menu2">Khác</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div id="home" class="tab-pane active">
                    <div id="features-curosel" class="indicator-style">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="<?php echo Route::name('single-product')?>">
<!--                                    <a class="product-img" href="/single_product">-->
                                        <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">90%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">50%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu1" class="tab-pane">
                    <div id="features-curosel-two" class="indicator-style">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">35%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">45%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">45%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">45%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu2" class="tab-pane">
                    <div id="features-curosel-three" class="indicator-style">
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">30%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">95%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">95%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single-product">
                                <div class="product-image">
                                    <a class="product-img" href="/singleproduct">
                                        <img class="primary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        <img class="secondary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                    </a>
                                </div>
                                <span class="onsale red">
                                                <span class="sale-text">95%</span>
                                            </span>
                                <div class="product-action">
                                    <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                    <ul class="pro-rating">
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <span class="price">$ 180</span>
                                </div>
                                <div class="pro-action">
                                    <ul>
                                        <li>
                                            <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                                <i class="fa fa-retweet" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>

                                        </li>
                                        <li>
                                            <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATURED PRODUCT END -->

<!-- HOT DEALS ARAEA START -->
<section class="hot-deals-area">
    <div class="container">
        <div class="row">
            <div class="hot-deals">
                <div class="col-md-4 col-sm-12">
                    <div class="titel">
                        <h4>HOT DEALS</h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="pro-details">
                        <h5>JORDAN 4 DUNK</h5>
                        <div class="pro-review">
                            <ul>
                                <li class="clr"><i class="fa fa-star"></i></li>
                                <li class="clr"><i class="fa fa-star"></i></li>
                                <li class="clr"><i class="fa fa-star"></i></li>
                                <li class="clr"><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><span>( 3 review )</span></li>
                            </ul>
                            <p><b>$250.00</b><span>$230.00</span></p>
                        </div>
                        <div class="pro-shop">
                            <a href="#"><i aria-hidden="true" class="fa fa-retweet"></i></a>
                            <a href="#"><i aria-hidden="true" class="fa fa-heart"></i></a>
                            <a href="#"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a>
                        </div>
                        <div class="product-cuntdown">
                            <div class="timer">
                                <div data-countdown="2016/12/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="product-offer">
                        <span>-25%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- HOT DEALS ARAEA END -->

<!-- NEW ARRIVALS START -->
<section class="featured-area new-arrival">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <div class="section-titel">
                    <h3>MẪU GIÀY ĐƯỢC YÊU THÍCH NHẤTt</h3>
                </div>
            </div>
            <div class="newarrival-area">
                <div id="newarrival-curosel" class="indicator-style">
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-img" href="/singleproduct">
                                    <img class="primary-img" src="assets/client/img/home-1/new-arri-1.jpg" alt="" />
                                    <img class="secondary-img" src="assets/client/img/home-1/new-arri-4.jpg" alt="" />
                                </a>
                            </div>
                            <span class="onsale">
                                            <span class="sale-text">Sale</span>
                                        </span>
                            <div class="product-action">
                                <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                <ul class="pro-rating">
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$ 180</span>
                            </div>
                            <div class="pro-action">
                                <ul>
                                    <li>
                                        <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-img" href="/singleproduct">
                                    <img class="primary-img" src="assets/client/img/home-1/new-arri-2.jpg" alt="" />
                                    <img class="secondary-img" src="assets/client/img/home-1/new-arri-1.jpg" alt="" />
                                </a>
                            </div>
                            <span class="onsale">
                                            <span class="sale-text">Sale</span>
                                        </span>
                            <div class="product-action">
                                <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                <ul class="pro-rating">
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$ 180</span>
                            </div>
                            <div class="pro-action">
                                <ul>
                                    <li>
                                        <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-img" href="/singleproduct">
                                    <img class="primary-img" src="assets/client/img/home-1/new-arri-3.jpg" alt="" />
                                    <img class="secondary-img" src="assets/client/img/home-1/new-arri-1.jpg" alt="" />
                                </a>
                            </div>
                            <span class="onsale">
                                            <span class="sale-text">Sale</span>
                                        </span>
                            <div class="product-action">
                                <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                <ul class="pro-rating">
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$ 180</span>
                            </div>
                            <div class="pro-action">
                                <ul>
                                    <li>
                                        <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-img" href="/singleproduct">
                                    <img class="primary-img" src="assets/client/img/home-1/new-arri-1.jpg" alt="" />
                                    <img class="secondary-img" src="assets/client/img/home-1/new-arri-4.jpg" alt="" />
                                </a>
                            </div>
                            <span class="onsale red">
                                            <span class="sale-text">90%</span>
                                        </span>
                            <div class="product-action">
                                <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                <ul class="pro-rating">
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$ 180</span>
                            </div>
                            <div class="pro-action">
                                <ul>
                                    <li>
                                        <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-img" href="/singleproduct">
                                    <img class="primary-img" src="assets/client/img/home-1/new-arri-2.jpg" alt="" />
                                    <img class="secondary-img" src="assets/client/img/home-1/new-arri-3.jpg" alt="" />
                                </a>
                            </div>
                            <span class="onsale">
                                            <span class="sale-text">Sale</span>
                                        </span>
                            <div class="product-action">
                                <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                <ul class="pro-rating">
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$ 180</span>
                            </div>
                            <div class="pro-action">
                                <ul>
                                    <li>
                                        <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="single-product">
                            <div class="product-image">
                                <a class="product-img" href="/singleproduct">
                                    <img class="primary-img" src="assets/client/img/home-1/new-arri-1.jpg" alt="" />
                                    <img class="secondary-img" src="assets/client/img/home-1/new-arri-4.jpg" alt="" />
                                </a>
                            </div>
                            <span class="onsale red">
                                            <span class="sale-text">50%</span>
                                        </span>
                            <div class="product-action">
                                <h4><a href="/singleproduct">Sanita Shoes</a></h4>
                                <ul class="pro-rating">
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <span class="price">$ 180</span>
                            </div>
                            <div class="pro-action">
                                <ul>
                                    <li>
                                        <a class="test all_src_icon" href="/singleproduct" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Xem">
                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                    <li>

                                    </li>
                                    <li>
                                        <a class="test all_src_icon" href="?controller=shop_cart" title="" data-toggle="tooltip" data-placement="top" data-original-title="Thêm vào giỏ hàng">
                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- NEW ARRIVALS END -->

<!-- LATEST BLOG AREA START -->
<section class="latest-blog-area">
    <div class="container">
        <div class="text-center">
            <div class="section-titel">
                <h3>Sản phẩm mới</h3>
            </div>
        </div>
        <div class="row">
            <div class="blog-area">
                <div class="col-md-6 col-sm-12 res-mr-btm xs-res-mrbtm">
                    <div class="blog-left">
                        <a class="product-image-overlay" href="#">
                            <img src="assets/client/img/home-1/blog-1.jpg" alt="" />
                            <div class="left-content text-center">
                                <h1>SHARP STYLE </h1>
                                <h3>For this season</h3>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 xs-res-mrbtm">
                    <div class="blog-right">
                        <a class="product-image-overlay" href="#">
                            <img src="assets/client/img/home-1/blog-2.jpg" alt="" />
                        </a>
                        <div class="blog-content">
                            <i class="fa fa-book"></i>
                            <span>31 January, 2016 By JOHN</span>
                            <p>Our autumn 2016  exhibition Shoes: Pleasure and Pain will look at the extremes...</p>
                            <a href="#">READ MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="blog-right">
                        <div class="blog-content">
                            <i class="fa fa-book"></i>
                            <span>31 January, 2016 By JOHN</span>
                            <p>Our autumn 2016  exhibition Shoes: Pleasure and Pain will look at the extremes...</p>
                            <a href="#">READ MORE</a>
                        </div>
                        <a class="product-image-overlay" href="#">
                            <img src="assets/client/img/home-1/blog-3.jpg" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- LATEST BLOG AREA END -->

<?php endblock() ?>






