<!DOCTYPE html>
<html lang="en">


<head>
    <?php
        include('layout/css_temp.blade.php');
    ?>
</head>

<body>
    <div class="page-wrapper">
        <?php
            include("layout/header.blade.php");
        ?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">F.A.Q<span>Pages</span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                	<h2 class="title text-center mb-3">Shipping Information</h2><!-- End .title -->
        			<div class="accordion accordion-rounded" id="accordion-1">
					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading-1">
					            <h2 class="card-title">
					                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
					                    How will my parcel be delivered?
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
					            <div class="card-body">
					                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading-2">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
					                    Do I pay for delivery?
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-1">
					            <div class="card-body">
					                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading-3">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
					                    Will I be charged customs fees?
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-1">
					            <div class="card-body">
					                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading-4">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
					                    My item has become faulty
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-1">
					            <div class="card-body">
					                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->
					</div><!-- End .accordion -->

                	<h2 class="title text-center mb-3">Orders and Returns</h2><!-- End .title -->
        			<div class="accordion accordion-rounded" id="accordion-2">
					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading2-1">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-1" aria-expanded="false" aria-controls="collapse2-1">
					                    Tracking my order
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse2-1" class="collapse" aria-labelledby="heading2-1" data-parent="#accordion-2">
					            <div class="card-body">
					                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading2-2">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
					                    I haven’t received my order
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse2-2" class="collapse" aria-labelledby="heading2-2" data-parent="#accordion-2">
					            <div class="card-body">
					                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading2-3">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-3" aria-expanded="false" aria-controls="collapse2-3">
					                    How can I return an item?
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse2-3" class="collapse" aria-labelledby="heading2-3" data-parent="#accordion-2">
					            <div class="card-body">
					                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->
					</div><!-- End .accordion -->

                	<h2 class="title text-center mb-3">Payments</h2><!-- End .title -->
                	<div class="accordion accordion-rounded" id="accordion-3">
					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading3-1">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-1" aria-expanded="false" aria-controls="collapse3-1">
					                    What payment types can I use?
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse3-1" class="collapse" aria-labelledby="heading3-1" data-parent="#accordion-3">
					            <div class="card-body">
					                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading3-2">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-2" aria-expanded="false" aria-controls="collapse3-2">
					                    Can I pay by Gift Card?
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse3-2" class="collapse" aria-labelledby="heading3-2" data-parent="#accordion-3">
					            <div class="card-body">
					                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading3-3">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-3" aria-expanded="false" aria-controls="collapse3-3">
					                    I can't make a payment
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse3-3" class="collapse" aria-labelledby="heading3-3" data-parent="#accordion-3">
					            <div class="card-body">
					                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->

					    <div class="card card-box card-sm bg-light">
					        <div class="card-header" id="heading3-4">
					            <h2 class="card-title">
					                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-4" aria-expanded="false" aria-controls="collapse3-4">
					                    Has my payment gone through?
					                </a>
					            </h2>
					        </div><!-- End .card-header -->
					        <div id="collapse3-4" class="collapse" aria-labelledby="heading3-4" data-parent="#accordion-3">
					            <div class="card-body">
					                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
					            </div><!-- End .card-body -->
					        </div><!-- End .collapse -->
					    </div><!-- End .card -->
					</div><!-- End .accordion -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->

            <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-9 col-xl-7">
                            <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                                <div class="col">
                                    <h3 class="cta-title text-white">If You Have More Questions</h3><!-- End .cta-title -->
                                    <p class="cta-desc text-white">Quisque volutpat mattis eros</p><!-- End .cta-desc -->
                                </div><!-- End .col -->

                                <div class="col-auto">
                                    <a href="contact.html" class="btn btn-outline-white"><span>CONTACT US</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .col-auto -->
                            </div><!-- End .row no-gutters -->
                        </div><!-- End .col-md-10 col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
        </main><!-- End .main -->


    <?php
        include('layout/footer_pages.blade.php');
    ?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>

            <form action="#" method="get" class="mobile-search">
                <label for="mobile-search" class="sr-only">Search</label>
                <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
                <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>

            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index-21.blade.php">Home</a>
                    </li>
                    <li>
                        <a href="category-fullwidth.blade.php">Shop</a>
                        <ul>
                            <li><a href="category-list.html">Shop List</a></li>
                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                            <li><a href="category-fullwidth.blade.php">Shop Fullwidth No Sidebar</a></li>
                            <li><a href="product-category-boxed.blade.php">Product Category Boxed</a></li>
                            <li><a href="product-category-fullwidth.blade.php"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="checkout.blade.php">Checkout</a></li>
                            <li><a href="wishlist.blade.php">Wishlist</a></li>
                            <li><a href="#">Lookbook</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="product-fullwidth.blade.php" class="sf-with-ul">Product</a>
                        <ul>
                            <li><a href="product.html">Default</a></li>
                            <li><a href="product-centered.html">Centered</a></li>
                            <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                            <li><a href="product-gallery.html">Gallery</a></li>
                            <li><a href="product-sticky.html">Sticky Info</a></li>
                            <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                            <li><a href="product-fullwidth.blade.php">Full Width</a></li>
                            <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul>
                            <li>
                                <a href="about.blade.php">About</a>
                            </li>
                            <li>
                                <a href="contact.blade.php">Contact</a>
                            </li>
                            <li><a href="login.blade.php">Login</a></li>
                            <li><a href="faq.blade.php">FAQs</a></li>
                            <li><a href="404.blade.php">Error 404</a></li>
                            <li><a href="coming-soon.blade.php">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="single-fullwidth.blade.php">Blog</a>
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <div class="social-icons">
                <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div><!-- End .social-icons -->
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <!-- Sign in / Register Modal -->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="icon-close"></i></span>
                    </button>

                    <div class="form-box">
                        <div class="form-tab">
                            <ul class="nav nav-pills nav-fill" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="tab-content-5">
                                <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="singin-email">Username or email address *</label>
                                            <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="singin-password">Password *</label>
                                            <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>LOG IN</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signin-remember">
                                                <label class="custom-control-label" for="signin-remember">Remember Me</label>
                                            </div><!-- End .custom-checkbox -->

                                            <a href="#" class="forgot-link">Forgot Your Password?</a>
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                    <form action="#">
                                        <div class="form-group">
                                            <label for="register-email">Your email address *</label>
                                            <input type="email" class="form-control" id="register-email" name="register-email" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-group">
                                            <label for="register-password">Password *</label>
                                            <input type="password" class="form-control" id="register-password" name="register-password" required>
                                        </div><!-- End .form-group -->

                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-outline-primary-2">
                                                <span>SIGN UP</span>
                                                <i class="icon-long-arrow-right"></i>
                                            </button>

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                                <label class="custom-control-label" for="register-policy">I agree to the <a href="#">privacy policy</a> *</label>
                                            </div><!-- End .custom-checkbox -->
                                        </div><!-- End .form-footer -->
                                    </form>
                                    <div class="form-choice">
                                        <p class="text-center">or sign in with</p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login btn-g">
                                                    <i class="icon-google"></i>
                                                    Login With Google
                                                </a>
                                            </div><!-- End .col-6 -->
                                            <div class="col-sm-6">
                                                <a href="#" class="btn btn-login  btn-f">
                                                    <i class="icon-facebook-f"></i>
                                                    Login With Facebook
                                                </a>
                                            </div><!-- End .col-6 -->
                                        </div><!-- End .row -->
                                    </div><!-- End .form-choice -->
                                </div><!-- .End .tab-pane -->
                            </div><!-- End .tab-content -->
                        </div><!-- End .form-tab -->
                    </div><!-- End .form-box -->
                </div><!-- End .modal-body -->
            </div><!-- End .modal-content -->
        </div><!-- End .modal-dialog -->
    </div><!-- End .modal -->

    <?php
        include('layout/js_temp.blade.php');
    ?>
</body>
</html>
