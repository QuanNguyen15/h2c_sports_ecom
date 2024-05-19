@extends('user.index-21')
@section('content')
<div>

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
                <div class="intro-slide" style="background-image: url(../assets/images/banners/Banner-3.jpg);">
                    <div class="container intro-content">
                        <div class="row">

                            <div class="intro">
                                <div class="action">
                                    <a href="" class="btn btn-primary">
                                        <span>DISCOVER NOW</span>
                                    </a>
                                </div>
                            </div>

                        </div><!-- End .row -->
                    </div><!-- End .intro-content -->
                </div><!-- End .intro-slide -->

                <div class="intro-slide" style="background-image: url(../assets/images/demos/demo-21/slider/slide-2.jpg);">
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
                                    <a href="" class="btn btn-primary">
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
                <a href="">
                    <img src="../assets/images/banners/banner-aodm.jpg">
                </a>
                <div class="banner-content">
                    <div class="title">
                        <a href=""><h3 class="darkWhite"></h3></a>
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
                <a href="">
                    <img src="../assets/images/banners/banner-giaydm.jpg">
                </a>
                <div class="banner-content">
                    <div class="title">
                        <a href=""><h3 class="darkWhite"></h3></a>
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
                    <img src="../assets/images/banners/banner-phukiendm.jpg">
                </a>
                <div class="banner-content">
                    <div class="title">
                        <a href=""><h3 class="darkWhite"></h3></a>
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
                    @if(!empty($productbestsale) )
                           @foreach($productbestsale as $productbestsale)

                <div class="product demo21">
            
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="{{route('user.product-sidebar',$productbestsale->ID)}}">
                            <img src="../assets/images/products/{{$productbestsale->category->category}}/{{$productbestsale->image}}" alt="Product image" class="product-image">
                        </a>

                    </figure><!-- End .product-media -->

                    <div class="product-body text-center">
                        <div class="product-cat">
                    
                        </div><!-- End .product-cat -->
                        <!-- {{route('user.product-sidebar', ['id' =>1 ])}} -->
                        <h3 class="product-title"><a href="">{{$productbestsale->name}}</a></h3><!-- End .product-title -->
                        <div class="product-price">
                          
                            <span class="old-price">{{$productbestsale->price}} đồng</span>
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
                            <a href="#" class="btn-product btn-cart" title="Thêm vào giỏ hàng"><span>Xem chi tiết</span></a>
                            <!-- <a href="#" class="btn-addtolist"><span>&nbsp;Add to Wishlist</span></a> -->
                        </div><!-- End .product-action -->


                    </div><!-- End .product-body -->
                </div><!-- End .product -->
              
               
                     @endforeach
               
                     @else 
                      <h1>rỗng</h1>
                     @endif

              

               

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

                    <a href="" class="btn btn-demoprimary">
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
                                    <a href="{{route('user.product-sidebar', ['id' =>1 ])}}">
                                        <img src="../assets/images/demos/demo-21/chooseStyle/product-1.jpg" alt="Product image" class="product-image">
                                    </a>

                                </figure><!-- End .product-media -->

                                <div class="product-body text-center">
                                    <div class="product-cat">
                                        <a href="#">Tops</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="{{route('user.product-sidebar', ['id' =>1 ])}}">Stowell Hood Fleece</a></h3><!-- End .product-title -->
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
                                    <a href="{{route('user.product-sidebar', ['id' =>1 ])}}">
                                        <img src="../assets/images/demos/demo-21/chooseStyle/product-2.jpg" alt="Product image" class="product-image">
                                    </a>

                                    <div class="product-countdown" data-until="+9h" data-format="HMS" data-relative="true" data-labels-short="true"></div><!-- End .product-countdown -->
                                </figure><!-- End .product-media -->

                                <div class="product-body text-center">
                                    <div class="product-cat">
                                        <a href="#">Bags</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="{{route('user.product-sidebar', ['id' =>1 ])}}">Force Tight</a></h3><!-- End .product-title -->
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
                                    <a href="{{route('user.product-sidebar', ['id' =>1 ])}}">
                                        <img src="../assets/images/demos/demo-21/chooseStyle/product-3.jpg" alt="Product image" class="product-image">
                                    </a>

                                </figure><!-- End .product-media -->

                                <div class="product-body text-center">
                                    <div class="product-cat">
                                        <a href="#">Accessories</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="{{route('user.product-sidebar', ['id' =>1 ])}}">Blitzing 3.0 Cap</a></h3><!-- End .product-title -->
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
      

   

        <div class="container newsletter">
            <div class="background" style="background-image: url(../assets/images/banners/banner-email.jpg);">
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

      

    </main>

</div>
@endsection
