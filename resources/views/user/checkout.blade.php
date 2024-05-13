<!DOCTYPE html>
<html lang="en">


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
<head>
<?php include('layout/css_temp.blade.php');?>
</head>

<body>
    <div class="page-wrapper">
        <?php include('layout/header.blade.php');?>

        <main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Thanh toán<span></span></h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="cart.blade.php">Giỏ hàng</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Thanh toán</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<div class="checkout-discount">
            				<form action="#">
        						<input type="text" class="form-control" required id="checkout-discount-input">
            					<label for="checkout-discount-input" class="text-truncate">Nếu bạn có mã giảm giá....<span>Bấm vào đây để nhập và áp dụng</span></label>
            				</form>
            			</div><!-- End .checkout-discount -->
            			<form action="#">
		                	<div class="row">
		                		<div class="col-lg-9">
		                			<h2 class="checkout-title">Chi tiết hoá đơn</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Họ *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Tên *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Tên công ty</label>
	            						<input type="text" class="form-control">

	            						<label>Quốc gia *</label>
	            						<input type="text" class="form-control" required>

	            						<label>Địa chỉ *</label>
	            						<input type="text" class="form-control" placeholder="Số nhà hoặc tên đường" required>
	            						<input type="text" class="form-control" placeholder="Toà nhà,chung cư ..." required>

	            						<!-- <div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input type="text" class="form-control" required>
		                					</div> -->
<!--
		                					<div class="col-sm-6">
		                						<label>State / County *</label>
		                						<input type="text" class="form-control" required>
		                					</div>
		                				</div> -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Mã bưu điện *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Số điện thoại *</label>
		                						<input type="tel" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Email *</label>
	        							<input type="email" class="form-control" required>

	        							<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="checkout-create-acc">
											<!-- <label class="custom-control-label" for="checkout-create-acc">Create an account?</label> -->
										</div><!-- End .custom-checkbox -->

										<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="checkout-diff-address">
											<label class="custom-control-label" for="checkout-diff-address">Giao tới một địa chỉ khác?</label>
										</div><!-- End .custom-checkbox -->

	                					<label>Ghi chú</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Ghi chú thêm về đơn hàng của bạn"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Đơn hàng của bạn</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Sản phẩm</th>
		                							<th>Tổng</th>
		                						</tr>
		                					</thead>

		                					<tbody>
		                						<tr>
		                							<td><a href="#">Beige knitted elastic runner shoes</a></td>
		                							<td>$84.00</td>
		                						</tr>

		                						<tr>
		                							<td><a href="#">Blue utility pinafore denimdress</a></td>
		                							<td>$76,00</td>
		                						</tr>
		                						<tr class="summary-subtotal">
		                							<td>Tạm tính:</td>
		                							<td>$160.00</td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Phí giao hàng:</td>
		                							<td>Miên phí</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Tổng:</td>
		                							<td>$160.00</td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    Trả tiền khi nhận hàng
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
													Quý khách có thể lựa chọn hình thức thanh toán khi nhận hàng với dịch vụ COD (Cash on Delivery) - trả tiền mặt khi nhận hàng. Điều này mang lại sự tiện lợi và tin cậy, cho phép quý khách kiểm tra hàng trước khi thanh toán mà không cần lo lắng về việc chuyển khoản trước. Chúng tôi cam kết đảm bảo sự thuận tiện và an toàn cho mọi giao dịch của quý khách.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    MoMo
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            <div class="card-body">
													Momo là một ứng dụng thanh toán di động phổ biến tại Việt Nam. Với Momo, quý khách có thể dễ dàng thực hiện các giao dịch thanh toán một cách thuận tiện, chỉ cần một chiếc điện thoại di động. Momo cung cấp tính năng thanh toán nhanh chóng và an toàn, giúp quý khách tiết kiệm thời gian và không gặp phải rủi ro khi mang theo tiền mặt..
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <!-- <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                    Cash on delivery
										                </a>
										            </h2>
										        </div>
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
										            </div>
										        </div>
										    </div> -->

										    <div class="card">
										        <div class="card-header" id="heading-4">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
										            <div class="card-body">
													Quý khách có thể lựa chọn thanh toán thông qua PayPal, một phương thức thanh toán trực tuyến an toàn và tiện lợi. Với PayPal, quý khách có thể thực hiện thanh toán một cách nhanh chóng và dễ dàng chỉ qua một vài bước đơn giản. Đồng thời, PayPal cũng đảm bảo an toàn cho thông tin tài khoản và giao dịch của quý khách, mang lại sự yên tâm tuyệt đối trong quá trình mua sắm trực tuyến
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-5">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                    Credit Card (Stripe)
										                    <img src="assets/images/payments-summary.png" alt="payments cards">
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
										            <div class="card-body"> Quý khách có thể thanh toán bằng thẻ tín dụng thông qua hình thức thanh toán an toàn và tiện lợi. Chúng tôi chấp nhận các loại thẻ tín dụng phổ biến như Visa, Mastercard và American Express. Hình thức thanh toán này giúp quý khách thực hiện giao dịch một cách nhanh chóng và dễ dàng, mà không cần phải mang theo tiền mặt. Đồng thời, chúng tôi cam kết bảo mật thông tin thanh toán của quý khách và đảm bảo sự an toàn cho mọi giao dịch
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
										</div><!-- End .accordion -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Thanh toán</span>
		                					<span class="btn-hover-text">Đặt hàng</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

        <?php include('layout/footer_pages.blade.php');?>
    </div><!-- End .page-wrapper -->
    <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

    <!-- Mobile Menu -->
    <?php include('layout/mobile_menu.blade.php');?>

    <!-- Sign in / Register Modal -->
    <?php include('layout/model_login.blade.php');?>
    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
</body>


<!-- molla/checkout.html  22 Nov 2019 09:55:06 GMT -->
</html>
