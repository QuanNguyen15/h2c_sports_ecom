<!DOCTYPE html>
<html>
<head>
    <?php include('layout/css_temp.blade.php')?>
    <link rel="stylesheet" href="{{ asset('assets/css/skins/skin-demo-21.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demos/demo-21.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
 <!-- ffwefjwe frfe -->

</head>
<body>
    <div class="page-wrapper">
        <div class="notification" style="background-image: url(../assets/images/demos/demo-21/notification-back.jpg)">
            <div class="notify-content">
                <h3>Miễn phí vận chuyển cho tất cả các đơn hàng từ 1.000.000 đồng</h3>
            </div>
            <div class="notify-action">
                <a href="#"><i class="icon-close"></i></a>
            </div>
        </div>
        <!--Header-->
{{--     <?php include('layout/header.blade.php'); ?>--}}
        <link rel="stylesheet" href="../assets/css/demos/demo-21.css?v= <?php echo time(); ?>">
        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <div class="header-dropdown">
                            <!-- <a href="#">Usd</a> -->
                            <div class="header-menu">

                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown">

                        </div><!-- End .header-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                    <li><a href="about.blade.php">Về chúng tôi</a></li>
                                    <li><a href="{{route('user.contact')}}">Liên hệ</a></li>
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Đăng nhập</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="index-21.blade.php" class="logo">
                            <img src="{{ asset('assets/images/logo-1.jpg') }}" alt="Molla Logo" width="100" height="25">
                        </a>

                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="{{route('user.trangchu')}}" class="sf-with-ul">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="{{route('user.category-boxed')}}" class="sf-with-ul df-ul">Sản phẩm</a>

                                    <div class="megamenu megamenu-md">
                                        <div class="row no-gutters">
                                            <div class="col-md-8">
                                                <div class="menu-col">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="menu-title">Áo bóng đá</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#">Áo đội tuyển quốc gia</a></li>
                                                                <li><a href="#">Áo không logo</a></li>
                                                                <li><a href="#">Áo câu lạc bộ</a></li>
                                                                <!-- <li><a href="#">Shop Grid 4 Columns</a></li> -->
                                                                <!-- <li><a href="#"><span>Shop Market<span class="tip tip-new">New</span></span></a></li> -->
                                                            </ul>

                                                            <div class="menu-title">Giày bóng đá</div><!-- End .menu-title -->
                                                            <ul>
                                                                <li><a href="#"><span>Puma<span class="tip tip-hot">Hot</span></span></a></li>
                                                                <li><a href="#">Adidas</a></li>
                                                                <li><a href="#">Nike</a></li>
                                                            </ul>
                                                        </div><!-- End .col-md-6 -->

                                                        <div class="col-md-6">
                                                            <div class="menu-title">Phụ kiện</div><!-- End .menu-title -->
                                                        </div><!-- End .col-md-6 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .menu-col -->
                                            </div><!-- End .col-md-8 -->

                                        </div><!-- End .row -->
                                    </div><!-- End .megamenu megamenu-md -->
                                </li>
                                <li>
                                    <a href="{{route('user.about')}}" class="sf-with-ul">Giới thiệu</a>
                                </li>
                                <li>
                                    <a href="{{route('user.contact')}}" class="sf-with-ul">Liên hệ</a>

                                <li>
                                    <a href="{{route('user.blog-listing')}}" class="sf-with-ul">Tin tức</a>

                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <div class="header-search">
                            <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Nhập để tìm kiếm....." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->


                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-shopping-cart"></i>
                                <span class="cart-count">{{$cart->getTotalQuantity()}}</span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.blade.php">Beige knitted elastic runner shoes</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $84.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.blade.php" class="product-image">
                                                <img src="{{('../assets/images/products/cart/product-1.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-cart-details">
                                            <h4 class="product-title">
                                                <a href="product.blade.php">Blue utility pinafore denim dress</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                <span class="cart-product-qty">1</span>
                                                x $76.00
                                            </span>
                                        </div><!-- End .product-cart-details -->

                                        <figure class="product-image-container">
                                            <a href="product.blade.php" class="product-image">
                                                <img src="{{('../assets/images/products/cart/product-2.jpg')}}" alt="product">
                                            </a>
                                        </figure>
                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">$160.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="{{route('cart.index')}}" class="btn btn-primary">View Cart</a>
                                    <a href="{{route('user.checkout')}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->
        </header>

        @yield('content')

        <footer class="footer footer-2">
            <div class="container">
                <hr class="mb-7">
                <div class="row">
                    <div class="col-2xl-5col col-md-12">
                        <div class="widget widget-about">
                            <img src="{{ asset('assets/images/logo-1.jpg') }}" class="footer-logo" alt="Footer Logo" width="100" height="25">
                            <p>Mang lại sự hài lòng cho khách hàng là mục tiêu đầu tiên của  chúng tôi. </p>
                            <div class="widget-about-info">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4 phoneNum">
                                        <span class="widget-about-title">Sẵn sàng hỗ trợ 24/7</span>
                                        <a href="tel:123456789">SDT: +0123 456 789</a>
                                    </div><!-- End .col-sm-6 -->
                                    <div class="col-sm-6 col-md-8 payment">
                                        <span class="widget-about-title">Phương thức thanh toán</span>
                                        <figure class="footer-payments">
                                            <img src="../assets/images/payments.png" alt="Payment methods" width="272" height="20">
                                        </figure><!-- End .footer-payments -->
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .widget-about-info -->
                        </div><!-- End .widget about-widget -->
                    </div><!-- End .col-sm-12 col-lg-3 -->

                    <div class="col-xl-5col col-sm-4 col-md-4">
                        <div class="widget">
                            <h4 class="widget-title">Danh mục nổi bật</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="about.blade.php">Áo bóng đá</a></li>
                                <li><a href="#">Áo câu lạc bộ</a></li>
                                <li><a href="faq.blade.php">Áo đội tuyển quốc gia</a></li>
                                <li><a href="contact.blade.php">Giày bóng đá</a></li>
                                <li><a href="../admins/login.blade.php">Mizuno</a></li>
                                <li><a href="../admins/login.blade.php">Adidas</a></li>
                                <li><a href="../admins/login.blade.php">Puma</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-3 -->

                    <div class="col-xl-5col col-sm-4 col-md-6=4">
                        <div class="widget">
                            <h4 class="widget-title">Chính sách và bảo mật</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="#">Chính sách kiểm hàng</a></li>
                                <li><a href="#">Chính sách bảo hàng quần áo và phụ kiện</a></li>
                                <li><a href="#">Chính sách bảo hàng giày</a></li>
                                <li><a href="#">Chính sách bảo hành in ấn quần áo bóng đá</a></li>
                                <li><a href="#">Chính sách đổi hàng</a></li>
                                <li><a href="#">Chính sách vận chuyển</a></li>
                                <li><a href="#">Chính sách thanh toán</a></li>
                                <li><a href="#">Chính sách bảo mật thông tin</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-4 col-lg-3 -->

                    <div class="col-xl-5col col-sm-4 col-md-4">
                        <div class="widget">
                            <h4 class="widget-title">Tài khoản</h4><!-- End .widget-title -->

                            <ul class="widget-list">
                                <li><a href="../admins/login.blade.php">Đăng ký</a></li>
                                <li><a href="cart.blade.php">Xem giỏ hàng</a></li>

                                <li><a href="#">Theo dõi đơn hàng của tôi</a></li>
                                <li><a href="#">Trợ giúp</a></li>
                            </ul><!-- End .widget-list -->
                        </div><!-- End .widget -->
                    </div><!-- End .col-sm-64 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="footer-bottom">
                <div class="container">
                    <p class="footer-copyright">Copyright © 2019 H2C Store. All Rights Reserved.</p><!-- End .footer-copyright -->
                    <ul class="footer-menu">
                        <li><a href="#">Terms Of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul><!-- End .footer-menu -->

                    <div class="social-icons social-icons-color">
                        <span class="social-label">Mạng xã hội</span>
                        <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                        <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                        <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                        <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                        <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                    </div><!-- End .soial-icons -->
                </div><!-- End .container -->
            </div><!-- End .footer-bottom -->
        </footer><!-- End .footer -->


        <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

        <?php
            include('layout/mobile_menu.blade.php');
        ?>
    </div>

    <!-- Sign in / Register Modal -->
    <?php
        include('layout/model_login.blade.php');
    ?>

    <div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row no-gutters bg-white newsletter-popup-content">
                    <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                        <div class="banner-content text-center">
                            <img src="{{ asset('assets/images/logo-1.jpg') }}" class="logo" alt="logo" width="60" height="15">
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
                        <img src="../assets/images/Banners/banner-giay-2.jpg" class="newsletter-img" alt="newsletter">
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div id ="chat-box">
        <a onclick = "Show_mess()"><span><i class="fa-brands fa-facebook-messenger icon-chatbox"></i></span></a>

   </div>
   <div id = "Link-mess" class= "contents">
   </div>
    <?php include('layout/js_temp.blade.php'); ?>
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
              <img src="{{ asset('assets/images/logo-1.jpg') }}" alt="">
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


   </script>
</body>

</html>
