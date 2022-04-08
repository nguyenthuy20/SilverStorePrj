<!-- HEADER TOP AREA START -->
<section class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="left-msg pull-left">
                    <h6>MIỄN PHÍ GIAO HÀNG CHO HÓA ĐƠN TỪ 1.500.000Đ</h6>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col">
                    <div class="right-login ">
                        <div class="curency">
                            <div class="current">
                                <label class="label-user-fullname" style="padding-right: 20px;">
                                    <?php
                                    if(Auth::checkAuth()){
                                        ?>
                                        <img src="<?php echo Auth::user()->getAvatar(); ?>" class="header-avatar">
                                        <a href="<?php echo Route::name('edit-profile')?>">
                                            <?php
                                            echo Auth::user()->getFullName();
                                            ?>
                                        </a>

                                        <?php
                                    }else{
                                        ?>
                                        <a href="<?php echo Route::name('login.show-login')?>" class="dang-nhap-header" style="font-family: arial;font-size: 13px">
                                            Đăng nhập
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </label>

                                <label class="right-logout-label">
                                    <?php
                                    if(Auth::checkAuth()){
                                        ?>
                                        <a class="logout-button" href="<?php echo Route::name('logout')?>" style="font-family: arial;font-size: 13px">
                                            Đăng xuất
                                        </a>
                                        <?php
                                    }
                                    ?>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        </div>
    </div>
</section>
<!-- HEADER TOP AREA END -->
<!-- MENU AREA START -->
<div class="menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2">
                <div class="logo-area">
                    <a href="/"><img src="assets/client/img/white.png" alt="" style="height:50px;width: 65px;"/></a>
                    <span id="cao-bac-header" style="color: #a2a2a2;font-size: 21px;font-family: Garamond;font-weight: 700;">CAOBAC</span>
                </div>
            </div>
            <div class="col-md-8 col-sm-8">
                <div class="main-menu">
                    <ul class="list-inline">
                        <li class="expand active"><a href="/">TRANG CHỦ</a></li>
                        <?php foreach ($categories as $category){ ?>
                            <li class="expand">
                                <?php if ($category->parent_id == 0){ ?>
                                    <a href=""> <?php echo $category->name ?><i class="ion-ios-arrow-right"></i></a>
                                    <ul class="single sub-menu">
                                        <?php foreach ($categories as $parent){ ?>
                                            <?php if($parent->parent_id == $category->id){ ?>
                                                <li><a href="#"><?php echo $parent->name ?></a></li>
                                            <?php } ?>
                                        <?php } ?>
                                    </ul>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 col-sm-2">
                <div class="menu-right-area">
                    <ul>
                        <li>
                            <a href="#" class="cart-toggler search-icon">
                                <i class="fa fa-search"></i>
                            </a>
                            <div class="header-bottom-search">
                                <form method="POST" action="#" class="search-box">
                                    <div>
                                        <input type="text" autocomplete="off" placeholder="Search" value="">
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="cart-toggler mini-cart-icon">
                                <i class="fa fa-shopping-cart"></i>
                                <span>2</span>
                            </a>
                            <div class="top-cart-content">
                                <div class="media header-middle-checkout">
                                    <div class="media-left check-img">
                                        <a href="#">
                                            <img alt="" src="img/other-pg/cart-1.jpg">
                                        </a>
                                    </div>
                                    <div class="media-body checkout-content">
                                        <h4 class="media-heading">
                                            <a href="#">Men Pumping Show</a>
                                            <span title="Remove This Item" class="btn-remove checkout-remove">
														<i class="fa fa-trash"></i>
													</span>
                                        </h4>
                                        <p>1 x $111.00</p>
                                    </div>
                                </div>
                                <div class="media header-middle-checkout last-child"><!-- Cart Middle Check Out -->
                                    <div class="media-left check-img">
                                        <a href="#">
                                            <img alt="" src="img/other-pg/cart-2.jpg">
                                        </a>
                                    </div>
                                    <div class="media-body checkout-content">
                                        <h4 class="media-heading">
                                            <a href="#">Women Pump Show</a>
                                            <span title="Remove This Item" class="btn-remove checkout-remove">
														<i class="fa fa-trash"></i>
													</span>
                                        </h4>
                                        <p>1 x $111.00</p>
                                    </div>
                                </div>
                                <div class="actions">
                                    <button type="button" title="Checkout-botton" class="Checkout-botton">
                                        <span>Checkout</span>
                                    </button>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MENU AREA END -->
