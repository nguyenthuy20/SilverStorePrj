<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Fowler - Shopping
<?php endblock() ?>

<?php startblock('content') ?>
    <!-- BANNER AREA STRAT -->
    <section class="bannerhead-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-heading">
                        <h1>SHOPPING</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->

    <!-- SHOP AREA START -->
    <section class="wishlist-area shop-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="wishlist-left-area">
                        <div class="category">
                            <h4>CATEGORY</h4>
                            <div class="category-list">
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-double-right"></i>LEARNING <span>(5)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-double-right"></i>LIGHTING <span>(8)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-double-right"></i>LIVING ROOMS <span>(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-angle-double-right"></i>LAMP <span>(10)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="price-slider">
                                <h4>PRICE SLIDER</h4>
                                <aside class="widget shop-filter">
                                    <div class="info_widget">
                                        <div class="price_filter">
                                            <div id="slider-range"></div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="amount" name="price"  placeholder="Add Your Price" />
                                                <input type="submit"  value="Filter"/>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <div class="price-slider size-area">
                                <h4>SIZE</h4>
                                <ul>
                                    <li><a href="#">XS</a></li>
                                    <li><a href="#">S</a></li>
                                    <li><a href="#">M</a></li>
                                    <li><a href="#">L</a></li>
                                    <li><a href="#">XL</a></li>
                                    <li><a href="#">XXL</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular-tag">
                            <h4>POPULAR TAG</h4>
                            <ul>
                                <li><a href="#">kids</a></li>
                                <li><a href="#">fashion</a></li>
                                <li><a href="#">dresses</a></li>
                                <li><a href="#">shopy</a></li>
                                <li><a href="#">nice</a></li>
                                <li><a href="#">child</a></li>
                            </ul>
                        </div>
                        <div class="compare-products">
                            <h4>COMPARE PRODUCTS</h4>
                            <p>You have no item to compare</p>
                            <div class="single-product">
                                <a href="#"><img src="assets/client/img/other-pg/wishlist-1.jpg" alt="" />
                                    <span>$ 60</span>
                                    <p>SAVE UP TO 25% OFF</p>
                                </a>
                            </div>
                        </div>
                        <div class="shop-top-seller">
                            <h4>TOP SELLERS</h4>
                            <div class="shop-single-main">
                                <div class="top-seller-product">
                                    <img alt="#" src="assets/client/img/other-pg/wishlist-2.jpg">
                                </div>
                                <div class="top-seller-details">
                                    <h5><a href="#">Girl’s dress</a></h5>
                                    <h5>$ 50.00</h5>
                                    <ul>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-single-main">
                                <div class="top-seller-product">
                                    <img alt="#" src="assets/client/img/other-pg/wishlist-3.jpg">
                                </div>
                                <div class="top-seller-details">
                                    <h5><a href="#">Boys dress</a></h5>
                                    <h5>$ 50.00</h5>
                                    <ul>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                        <li><i class="fa fa-star color"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="shop-right-area">
                        <div class="shop-banner">
                            <img src="assets/client/img/other-pg/shop-1.jpg" alt="" />
                        </div>
                        <div class="shop-tab-area">
                            <!--NAV PILL-->
                            <div class="shop-tab-pill">
                                <ul>
                                    <li class="active" id="p-mar">
                                        <a data-toggle="pill" href="#grid">
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                            <span>Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#list">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                            <span>List</span>
                                        </a>
                                    </li>
                                    <li class="product-size-deatils">
                                        <div class="show-label">
                                            <label>Show : </label>
                                            <select>
                                                <option value="10" selected="selected">10</option>
                                                <option value="09">09</option>
                                                <option value="08">08</option>
                                                <option value="07">07</option>
                                                <option value="06">06</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sort-position">
                                            <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                            <select>
                                                <option value="position" selected="selected">Position</option>
                                                <option value="Name">Name</option>
                                                <option value="Price">Price</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--NAV PILL-->
                            <div class="tab-content">
                                <div class="row tab-pane active" id="grid">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt=""/>
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale">
                                                        <span class="sale-text">Sale</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale">
                                                        <span class="sale-text">Sale</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale red">
                                                        <span class="sale-text">50%</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale red">
                                                        <span class="sale-text">90%</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale">
                                                        <span class="sale-text">Sale</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale red">
                                                        <span class="sale-text">50%</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale">
                                                        <span class="sale-text">Sale</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale red">
                                                        <span class="sale-text">50%</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <div class="single-product">
                                            <div class="product-image">
                                                <a class="product-img" href="#">
                                                    <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                                    <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                                </a>
                                            </div>
                                            <span class="onsale">
                                                        <span class="sale-text">Sale</span>
                                                    </span>
                                            <div class="product-action">
                                                <h4><a href="#">Sanita Shoes</a></h4>
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
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                            <i class="fa fa-retweet" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="list" class="tab-pane">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="shop-list-single shop-single-product-area">
                                                <div class="shop-list-left">
                                                    <a href="#"><img src="assets/client/img/home-1/fp-1.jpg" alt="" /></a>
                                                    <span class="shop-cart-icon">
                                                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                                            </span>
                                                </div>
                                                <div class="shop-list-right">
                                                    <div class="product-content">
                                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                                        <p><b>$ 80.00</b></p>
                                                        <div class="rating">
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="shop-list-single shop-single-product-area">
                                                <div class="shop-list-left">
                                                    <a href="#"><img src="assets/client/img/home-1/fp-2.jpg" alt="" /></a>
                                                    <span class="shop-cart-icon">
                                                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                                            </span>
                                                </div>
                                                <div class="shop-list-right">
                                                    <div class="product-content">
                                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                                        <p><b>$ 80.00</b></p>
                                                        <div class="rating">
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="shop-list-single shop-single-product-area">
                                                <div class="shop-list-left">
                                                    <a href="#"><img src="assets/client/img/home-1/fp-3.jpg" alt="" /></a>
                                                    <span class="shop-cart-icon">
                                                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                                    </span>
                                                </div>
                                                <div class="shop-list-right">
                                                    <div class="product-content">
                                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                                        <p><b>$ 80.00</b></p>
                                                        <div class="rating">
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="shop-list-single shop-single-product-area">
                                                <div class="shop-list-left">
                                                    <a href="#"><img src="assets/client/img/home-1/fp-4.jpg" alt="" /></a>
                                                    <span class="shop-cart-icon">
                                                                <a href="#"><i class="fa fa-shopping-bag"></i></a>
                                                            </span>
                                                </div>
                                                <div class="shop-list-right">
                                                    <div class="product-content">
                                                        <h2><a href="#">Boy’s Cloths</a></h2>
                                                        <p><b>$ 80.00</b></p>
                                                        <div class="rating">
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star color"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <div class="product-desc">
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.Morbi ornare lectus quis justo gravida semper.</p>
                                                        <p>Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--NAV PILL-->
                            <div class="shop-tab-pill dwn">
                                <ul>
                                    <li class="active" id="r-mar">
                                        <a data-toggle="pill" href="#grid">
                                            <i class="fa fa-th" aria-hidden="true"></i>
                                            <span>Grid</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-toggle="pill" href="#list">
                                            <i class="fa fa-th-list" aria-hidden="true"></i>
                                            <span>List</span>
                                        </a>
                                    </li>
                                    <li class="product-size-deatils">
                                        <div class="show-label">
                                            <label>Show : </label>
                                            <select>
                                                <option value="10" selected="selected">10</option>
                                                <option value="09">09</option>
                                                <option value="08">08</option>
                                                <option value="07">07</option>
                                                <option value="06">06</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sort-position">
                                            <label><i class="fa fa-sort-amount-asc"></i>Sort by : </label>
                                            <select>
                                                <option value="position" selected="selected">Position</option>
                                                <option value="Name">Name</option>
                                                <option value="Price">Price</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--NAV PILL-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SHOP AREA END -->
    <!-- OUR BRAND AREA START -->
    <section class="our-brand-area">
        <div class="container">
            <div class="text-center">
                <div class="section-titel">
                    <h3>OUR BRANDS</h3>
                </div>
            </div>
            <div class="row blog-area">
                <div id="ourbrand-owl">
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-1.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-2.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-3.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-4.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-5.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-3.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-1.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-2.jpg" alt="" /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR BRAND AREA END -->
<?php endblock() ?>

