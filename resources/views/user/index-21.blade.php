<!DOCTYPE html>
<html>
<head>
    <?php include(base_path('resources/views/user/layout/css_temp.blade.php'))?>
    <link rel="stylesheet" href="{{('assets/css/skins/skin-demo-21.css')}}">
    <link rel="stylesheet" href="{{('assets/css/demos/demo-21.css')}}">
    <link rel="stylesheet" href="{{('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css')}}">


</head>
<body>
    <div class="page-wrapper">
        <div class="notification" style="background-image: url(assets/images/demos/demo-21/notification-back.jpg)">
            <div class="notify-content">
                <h3>Miễn phí vận chuyển cho tất cả các đơn hàng từ 1.000.000 đồng</h3>
            </div>
            <div class="notify-action">
                <a href="#"><i class="icon-close"></i></a>
            </div>
        </div>

        <!--Header-->
        <?php include(base_path('resources/views/user/layout/header.blade.php')); ?>

        <main class="main">
            <div class="intro-slider-container mb-5">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl"
                    data-owl-options='{
                        "dots": true,
                        "nav": false,
                        "responsive": {
                            "1200": {
                                "nav": false,
                                "dots": false
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url(assets/images/banners/Banner-3.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="intro">
                                    <!-- <div class="title">
                                        <h3>WOMEN'S</h3>
                                    </div> -->
                                    <!-- <div class="content">
                                        <h3>RUNNING &</h3>
                                        <h3>TRAINING SHIRTS</h3>
                                    </div> -->
                                    <!-- <div class="price">
                                        <h3>SAVE UP TO 30%</h3>
                                        </div> -->
                                    <div class="action">
                                        <a href="category-fullwidth.blade.php" class="btn btn-primary">
                                            <span>DISCOVER NOW</span>
                                        </a>
                                    </div>

                                </div>
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url(assets/images/demos/demo-21/slider/slide-2.jpg);">
                        <div class="container intro-content">
                            <div class="row">
                                <div class="intro">
                                    <div class="title">
                                        <h3 class="darkWhite">DEAL OF THE DAY</h3>
                                    </div>
                                    <div class="content">
                                        <h3>IT'S TIME TO UPGRADE<br>YOUR HIKING KIT</h3>
                                    </div>
                                    <div class="price">
                                        <h3 class="darkWhite">SAVE UP TO 15%</h3>
                                    </div>
                                    <div class="action">
                                        <a href="category-fullwidth.blade.php" class="btn btn-primary">
                                            <span>Tới cửa hàng</span>
                                        </a>
                                    </div>
                                </div>
                            </div><!-- End .row -->
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->



                </div><!-- End .intro-slider owl-carousel owl-simple -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->


            <div class="container banner-container">
                <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
                    <a href="category-fullwidth.blade.php">
                        <img src="{{('resources/views/assets/images/banners/banner-aodm.jpg')}}">
                    </a>
                    <div class="banner-content">
                        <div class="title">
                            <a href="category-fullwidth.blade.php"><h3 class="darkWhite"></h3></a>
                        </div>
                        <div class="content">
                            <!-- <a href="category-fullwidth.php"><h3>Quần áo</h3></a>
                            <a href="category-fullwidth.php"><h3>bóng đá</h3></a> -->
                        </div>
                        <!-- <div class="action">
                            <a href="category-fullwidth.php" class="btn btn-demoprimary">
                                <span>Tới cửa hàng</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div> -->
                    </div><!-- End .row -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
                    <a href="category-fullwidth.blade.php">
                        <img src="{{('resources/views/user/assets/images/banners/banner-giaydm.jpg')}}">
                    </a>
                    <div class="banner-content">
                        <div class="title">
                            <a href="category-fullwidth.blade.php"><h3 class="darkWhite"></h3></a>
                        </div>
                        <div class="content">
                            <!-- <a href="category-fullwidth.php"><h3>Giày</h3></a>
                            <a href="category-fullwidth.php"><h3>Bóng đá</h3></a> -->
                        </div>
                        <!-- <div class="action">
                            <a href="category-fullwidth.php" class="btn btn-demoprimary">
                                <span>Tới cửa hàng</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div> -->
                    </div><!-- End .row -->
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10 col-12 col-pd1">
                    <a href="category-fullwidth.php">
                        <img src="assets/images/banners/banner-phukiendm.jpg">
                    </a>
                    <div class="banner-content">
                        <div class="title">
                            <a href="category-fullwidth.blade.php"><h3 class="darkWhite"></h3></a>
                        </div>
                        <div class="content">
                            <!-- <a href="category-fullwidth.php"><h3>Phụ kiện</h3></a>
                            <a href="category-fullwidth.php"><h3>Tiết kiệm lên tới 30%</h3></a> -->
                        </div>
                        <!-- <div class="action">
                            <a href="category-fullwidth.php" class="btn btn-demoprimary">
                                <span>Tới cửa hàng</span>
                                <i class="icon-long-arrow-right"></i>
                            </a>
                        </div> -->
                    </div><!-- End .row -->
                </div>
            </div>


            <div class="container logos">
                <div class="owl-carousel mb-5 owl-simple" data-toggle="owl"
                    data-owl-options='{
                        "nav": true,
                        "dots": false,
                        "margin": 10,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                </div><!-- End .owl-carousel -->
            </div><!-- End .container -->

            <div class="container bestsellers">
                <hr class="mb-3">
                <div class="heading">
                    <h2 class="title text-center">Bán chạy nhất</h2>
                    <p class="content text-center mb-4">Những sản phẩm tốt nhất từ những thương hiệu hàng đầu!</p>
                </div>

                <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                    data-owl-options='{
                        "nav": true,
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "768": {
                                "items":3
                            },
                            "992": {
                                "items":4
                            }
                        }
                    }'>
                    <div class="product demo21">
                        <figure class="product-media">
                            <span class="product-label label-sale">Sale</span>
                            <a href="product-sidebar.blade.php">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Shoes</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product-sidebar.blade.php">Nike Renew Arena</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="new-price">$58.99</span>
                                <span class="old-price">Was $75.00</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 2 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #c12f46;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #d3def0;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->
                            </div><!-- End .product-action -->


                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <span class="product-label label-new">New</span>
                            <a href="product-sidebar.blade.php">
                                <img src="assets/images/demos/demo-21/bestSellers/product-2-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-2-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Jackets & Vests</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product-sidebar.blade.php">Advanced Skin 12 Set</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$199.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 4 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots" style="visibility: hidden;">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product-sidebar.blade.php">
                                <img src="assets/images/demos/demo-21/bestSellers/product-3-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-3-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Tops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product-sidebar.blade.php">On Performance-T Shirt</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$99.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #5a7399;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product-sidebar.blade.php">
                                <img src="assets/images/demos/demo-21/bestSellers/product-4-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-4-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Bottoms</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product-sidebar.blade.php">CB Carbon 2 Cycling Short</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$159.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 12 Reviews )</span>
                            </div><!-- End .rating-container -->
                            <div class="product-nav product-nav-dots" style="visibility: hidden;">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                    <div class="product demo21">
                        <figure class="product-media">
                            <a href="product-sidebar.blade.php">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-1.jpg" alt="Product image" class="product-image">
                                <img src="assets/images/demos/demo-21/bestSellers/product-1-2.jpg" alt="Product image" class="product-image-hover">
                            </a>

                            <div class="product-countdown" data-until="+7h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->

                        </figure><!-- End .product-media -->

                        <div class="product-body text-center">
                            <div class="product-cat">
                                <a href="#">Tops</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="product-sidebar.blade.php">On Performance-T Shirt</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                <span class="cur-price">$99.99</span>
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 40%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( 0 Reviews )</span>
                            </div><!-- End .rating-container -->

                            <div class="product-nav product-nav-dots">
                                <a href="#" class="active" style="background: #db7e6c;"><span class="sr-only">Color name</span></a>
                                <a href="#" style="background: #5a7399;"><span class="sr-only">Color name</span></a>
                            </div><!-- End .product-nav -->
                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->
                            </div><!-- End .product-action -->

                        </div><!-- End .product-body -->
                    </div><!-- End .product -->

                </div><!-- End .owl-carousel -->
            </div>
            <style>
               .choose-style p{
                    font-size: 18px;
                }
            </style>
            <div class="choose-style">
                <div class="container row">
                    <div class="banner-intro col-lg-5">
                        <h3 class="title">Lấy cảm hứng<br>của bạn<br>từ trên sân cỏ.</h3>

                        <p class="darkWhite">Những mẫu giày chất lượng <br>nhất</p>
                        <h4 class="content darkWhite">• Độ ôm chân vừa phải</h4>
                        <h4 class="content darkWhite">• Bám sân tốt</h4>
                        <h4 class="content darkWhite">• Độ bền tốt sau nhiều trận <br>đấu</h4>
                        <p class="price darkWhite">800.000 - 1.000.000</p>

                        <a href="category-fullwidth.blade.php" class="btn btn-demoprimary">
                            <span>Tới cửa hàng</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div>
                    <div class="carousel col-lg-7">
                        <div class="heading">
                            <!-- <h2 class="title">Lựa chọn phong cách của bạn</h2> -->
                            <!-- <p class="content">Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis</p> -->
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/chooseStyle/product-1.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Tops</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Stowell Hood Fleece</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$55.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->


                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                            </div>
                            <div class="col-lg-4 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/chooseStyle/product-2.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Bags</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Force Tight</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$135.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->
                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-lg-4 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/chooseStyle/product-3.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Accessories</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Blitzing 3.0 Cap</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$29.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->
                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container category-banner">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="category-fullwidth.blade.php">
                            <img src="assets/images/demos/demo-21/banner/footware.jpg">
                        </a>
                        <div class="banner-content">
                            <a href="category-fullwidth.blade.php"><h3 class="category"> Nike </h3></a>
                            <a href="category-fullwidth.blade.php" class="action">Tới cửa hàng</a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="category-fullwidth.blade.php">
                            <img src="assets/images/demos/demo-21/banner/accessories.jpg">
                        </a>
                        <div class="banner-content">
                            <a href="category-fullwidth.blade.php"><h3 class="category"> Puma </h3></a>
                            <a href="category-fullwidth.blade.php" class="action">Tới cửa hàng</a>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6" >
                        <a href="category-fullwidth.blade.php">
                            <img src="assets/images/demos/demo-21/banner/mens.jpg">
                        </a>
                        <div class="banner-content">
                             <a href="category-fullwidth.blade.php"><h3 class="category"> Mizuno </h3></a>
                            <a href="category-fullwidth.blade.php" class="action">Tới cửa hàng</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <a href="category-fullwidth.blade.php">
                            <img src="assets/images/demos/demo-21/banner/womens.jpg">
                        </a>
                        <div class="banner-content">
                             <a href="category-fullwidth.blade.php"><h3 class="category"> Áo câu lạc bộ </h3></a>
                            <a href="category-fullwidth.blade.php" class="action">Tới cửa hàng</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container new-arrivals">

                <hr class="mb-5 mt-8">

                <div class="heading heading-center mb-3">
                    <h2 class="title">Sản phẩm mới nhất </h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="arrivals-all-link" data-toggle="tab" href="#arrivals-all-tab" role="tab" aria-controls="arrivals-all-tab" aria-selected="true">Tất cả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrivals-women-link" data-toggle="tab" href="#arrivals-women-tab" role="tab" aria-controls="arrivals-women-tab" aria-selected="false">Quần áo bóng đá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrivals-men-link" data-toggle="tab" href="#arrivals-men-tab" role="tab" aria-controls="arrivals-men-tab" aria-selected="false">Giày bóng đá</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="arrivals-shoes-link" data-toggle="tab" href="#arrivals-shoes-tab" role="tab" aria-controls="arrivals-shoes-tab" aria-selected="false">Phụ kiện</a>
                        </li>
                        <li class="nav-item">
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="arrivals-all-tab" role="tabpanel" aria-labelledby="arrivals-all-link">
                        <div class="row">
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-1.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">UA Spawn Low</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$77.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #34529d;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-2.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Jackets & Vests</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">The North Face Fanorak 2.0</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$76.99</span>
                                            <span class="old-price">Was $109.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-3.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Bags</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Osprey Talia</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$67.50</span>
                                            <span class="old-price">Was $150.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-4.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Ignite Limitless Leather</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$52.66</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-5.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Accessories</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Small Sleeping Bag</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$299.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->
<!--
                                        <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-6.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Tops</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Alphaskin Sport Bra</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$34.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #d64042;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-7.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Jackets & Vests</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Watertight Jacket</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$76.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-8.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Y-3 by Yohji Yamamoto</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$239.99</span>
                                            <span class="old-price">Was $400.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-9.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Bags</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Marmot Empire Daypack</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$59.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-10.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">On Cloudflyer</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$127.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                        </div>
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="arrivals-women-tab" role="tabpanel" aria-labelledby="arrivals-women-link">
                        <div class="row">
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-2.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Jackets & Vests</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">The North Face Fanorak 2.0</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$76.99</span>
                                            <span class="old-price">Was $109.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->
<!--
                                        <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-6.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Tops</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Alphaskin Sport Bra</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$34.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #d64042;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                        </div>
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="arrivals-men-tab" role="tabpanel" aria-labelledby="arrivals-men-link">
                        <div class="row">
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-7.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Jackets & Vests</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Watertight Jacket</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$76.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                        </div>
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="arrivals-shoes-tab" role="tabpanel" aria-labelledby="arrivals-shoes-link">
                        <div class="row">
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">

                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-1.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">UA Spawn Low</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$77.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #34529d;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-4.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Ignite Limitless Leather</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$52.66</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-8.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Y-3 by Yohji Yamamoto</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$239.99</span>
                                            <span class="old-price">Was $400.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-10.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">On Cloudflyer</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$127.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                        </div>
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="arrivals-acc-tab" role="tabpanel" aria-labelledby="arrivals-acc-link">
                        <div class="row">
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-3.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Bags</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Osprey Talia</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="new-price">$67.50</span>
                                            <span class="old-price">Was $150.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->
<!--
                                        <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-5.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Accessories</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Small Sleeping Bag</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$299.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->
<!--
                                        <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>
                            <div class="col-xl-5col col-lg-3 col-md-4 col-6">
                                <div class="product demo21">
                                    <figure class="product-media">
                                        <a href="product-sidebar.blade.php">
                                            <img src="assets/images/demos/demo-21/newArrivals/product-9.jpg" alt="Product image" class="product-image">
                                        </a>

                                    </figure><!-- End .product-media -->

                                    <div class="product-body text-center">
                                        <div class="product-cat">
                                            <a href="#">Bags</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product-sidebar.blade.php">Marmot Empire Daypack</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="cur-price">$59.99</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Thêm vào giỏ hàng</span></a>
                                        </div><!-- End .product-action -->

                                        <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->

                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div>

                        </div>
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
                <div class="text-center">
                    <a href="category-fullwidth.blade.php" class="btn btn-viewMore">
                        <span>Tới cửa hàng</span>
                        <i class="icon-long-arrow-right"></i>
                    </a>
                </div>
            </div><!-- End .container -->

            <div class="container newsletter">
                <div class="background" style="background-image: url(assets/images/banners/banner-email.jpg);">
                    <div class="subscribe">
                        <div class="subscribe-title text-center">
                            <h1 class="intro-title2nd">Đăng ký với email để biết thêm nhiều điều về chúng tôi</h1>
                            <h1 class="intro-title1st">Tìm hiểu về các ưu đãi mới và nhận thêm ưu đãi bằng cách tham gia bản tin của chúng tôi</h1>
                        </div>
                        <form action="#">
                            <div class="input-group">
                                <input type="email" placeholder="Nhập email của bản vào đây..." aria-label="Email Adress" required="">
                                <div class="input-group-append">
                                    <button class="btn btn-subscribe" type="submit"><span>Đăng ký</span><i class="icon-long-arrow-right"></i></button>
                                </div><!-- .End .input-group-append -->
                            </div><!-- .End .input-group -->
                        </form>
                    </div>
                </div>
            </div>

            <div class="container service mt-4">
                <div class="col-sm-6 col-lg-3 col-noPadding">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-truck"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Thanh toán &amp; Giao hàng</h3><!-- End .icon-box-title -->
                            <p>Miễn phí vận chuyển cho các đơn hàng từ 1.000.000 đồng</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Return &amp; Refund</h3><!-- End .icon-box-title -->
                            <p>Free 100% money back guarantee</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Hỗ trợ khách hàng</h3><!-- End .icon-box-title -->
                            <p>Luôn hỗ trợ khách hàng 24/7</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-envelope"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Theo dõi chúng tôi</h3><!-- End .icon-box-title -->
                            <p>Giảm 10% khi dùng Email theo dõi bản tin của chúng tôi</p>
                        </div><!-- End .icon-box-content -->
                    </div><!-- End .icon-box -->
                </div><!-- End .col-sm-6 col-lg-4 -->
            </div>

            <div class="container instagram-store text-center">
                <hr>
                <div class="heading">
                    <h2 class="title">Hình ảnh từ khách hàng</h2><!-- End .title -->
                </div>
                <div class="row">
                    <div class="col-sm-3 banner-sm-div">
                        <div class="banner-sm col-12 instagram-feed">
                            <img src="assets/images/demos/demo-21/instagramStore/banner-1.jpg">
                            <div class="instagram-feed-content">
                                <a href="#"><i class="icon-heart-o"></i>280</a>
                                <a href="#"><i class="icon-comments"></i>22</a>
                            </div>
                        </div>
                        <div class="banner-sm col-12 instagram-feed">
                            <img src="assets/images/demos/demo-21/instagramStore/banner-2.jpg">
                            <div class="instagram-feed-content">
                                <a href="#"><i class="icon-heart-o"></i>280</a>
                                <a href="#"><i class="icon-comments"></i>22</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 banner-lg instagram-feed">
                        <img src="assets/images/demos/demo-21/instagramStore/banner-3.jpg">
                        <div class="instagram-feed-content">
                            <a href="#"><i class="icon-heart-o"></i>280</a>
                            <a href="#"><i class="icon-comments"></i>22</a>
                        </div>
                    </div>
                    <div class="col-sm-3 banner-sm-div">
                        <div class="banner-sm col-6 instagram-feed">
                            <img src="assets/images/demos/demo-21/instagramStore/banner-4.jpg">
                            <div class="instagram-feed-content">
                                <a href="#"><i class="icon-heart-o"></i>280</a>
                                <a href="#"><i class="icon-comments"></i>22</a>
                            </div>
                        </div>
                        <div class="banner-sm col-6 instagram-feed">
                            <img src="assets/images/demos/demo-21/instagramStore/banner-6.jpg">
                            <div class="instagram-feed-content">
                                <a href="#"><i class="icon-heart-o"></i>280</a>
                                <a href="#"><i class="icon-comments"></i>22</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3 banner-sm-div">
                        <div class="banner-sm col-6 instagram-feed">
                            <img src="assets/images/demos/demo-21/instagramStore/banner-5.jpg">
                            <div class="instagram-feed-content">
                                <a href="#"><i class="icon-heart-o"></i>280</a>
                                <a href="#"><i class="icon-comments"></i>22</a>
                            </div>
                        </div>
                        <div class="banner-sm col-6 instagram-feed">
                            <img src="assets/images/demos/demo-21/instagramStore/banner-7.jpg">
                            <div class="instagram-feed-content">
                                <a href="#"><i class="icon-heart-o"></i>280</a>
                                <a href="#"><i class="icon-comments"></i>22</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>


        <?php
            include(base_path('resources/views/user/layout/footer.blade.php'));
        ?>

        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        <?php
            include(base_path('resources/views/user/layout/mobile_menu.blade.php'));
        ?>
    </div>

    <!-- Sign in / Register Modal -->
    <?php
        include(base_path('resources/views/user/layout/model_login.blade.php'));
    ?>

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="assets/images/logo-1.jpg" class="logo" alt="logo" width="60" height="15">
                            <h2 class="banner-title">Giảm<span> 25<light>%</light></span></h2>
                            <p>Chào mừng bạn đến với shop quần áo bóng đá của chúng tôi! Chúng tôi đang tổ chức chương trình giảm giá đặc biệt, giúp bạn sở hữu những bộ trang phục chất lượng với mức giá ưu đãi. Hãy nhanh chân đến với chúng tôi để không bỏ lỡ cơ hội này!</p>
                            <form action="#">
                                <div class="input-group input-group-round">
                                    <div class="input-group-append">

                                    </div><!-- .End .input-group-append -->
                                </div><!-- .End .input-group -->
                            </form>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
                                <label class="custom-control-label" for="register-policy-2">Không hiển thị lần nữa</label>
                            </div><!-- End .custom-checkbox -->
                        </div>
                    </div>
                    <div class="col-xl-2-5col col-lg-5 ">
                        <img src="assets/images/Banners/banner-giay-2.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div id ="chat-box">
        <a onclick = "Show_mess()"><span><i class="fa-brands fa-facebook-messenger icon-chatbox"></i></span></a>

   </div>
   <div id = "Link-mess" class= "contents">
          <!-- <div class = "mess-header">
              <div class="logo-mess">
                <img src="assets/images/logo-1.jpg" alt="">
              </div>
              <a href="" onclick = "">X</a>
          </div>
          <div class="content-mess">
            <h2>Chat với H2C SPORT</h2>
            <p class = "mess-note">Thường trả lời trong vài giờ</p>
            <p class="hello-mess">Xin chào! H2C SPORT có thể giúp gì cho bạn</p>
          </div>
          <a href="" class ="btn-mess">Chat ngay</a>
          <div class ="footer-mess">
                  <span><i class="fa-brands fa-facebook-messenger"></i></span>
                  <span>Do Messsenger cung cấp</span>
          </div> -->

   </div>
    <?php
        include(base_path('resources/views/user/layout/js_temp.blade.php'));
    ?>
   <script>
            document.getElementById('chat-box').addEventListener('click', function() {
          var contentDiv = document.getElementById('Link-mess');
          if (contentDiv.style.display === 'none') {
            contentDiv.style.display = 'block';
          } else {
            contentDiv.style.display = 'none';
          }
        });
            function  Show_mess(){
                const mess = document.getElementById('Link-mess');


            const mess_block = document.createElement('div');
            mess_block.classList.add('Link-mess');
            mess_block.innerHTML = ` <div class = "mess-header">
            <div class="logo-mess">
              <img src="assets/images/logo-1.jpg" alt="">
            </div>
            <a href="" onclick = "">X</a>
        </div>
        <div class="content-mess">
          <h2>Chat với H2C SPORT</h2>
          <p class = "mess-note">Thường trả lời trong vài giờ</p>
          <p class="hello-mess">Xin chào! H2C SPORT có thể giúp gì cho bạn</p>
        </div>
        <a href="" class ="btn-mess">Chat ngay</a>
        <div class ="footer-mess">
                <span><i class="fa-brands fa-facebook-messenger"></i></span>
                <span>Do Messsenger cung cấp</span>
        </div>`;
        mess.appendChild(mess_block);
            }
//      const mess = document.getElementById('Link-mess');
//   if(mess){
//     const mess_block = document.createElement('div');
//     mess_block.classList.add('Link-mess');
//     mess_block.innerHTML = ` <div class = "mess-header">
//     <div class="logo-mess">
//       <img src="assets/images/logo-1.jpg" alt="">
//     </div>
//     <a href="" onclick = "">X</a>
// </div>
// <div class="content-mess">
//   <h2>Chat với H2C SPORT</h2>
//   <p class = "mess-note">Thường trả lời trong vài giờ</p>
//   <p class="hello-mess">Xin chào! H2C SPORT có thể giúp gì cho bạn</p>
// </div>
// <a href="" class ="btn-mess">Chat ngay</a>
// <div class ="footer-mess">
//         <span><i class="fa-brands fa-facebook-messenger"></i></span>
//         <span>Do Messsenger cung cấp</span>
// </div>`;
// mess.appendChild(mess_block);

//   }


   </script>
</body>

<!-- molla/index-21.html  22 Nov 2019 10:01:54 GMT -->
</html>
