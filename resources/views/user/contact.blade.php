@extends('user.index-21')
@section('content')
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-21.blade.php">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Liên hệ</a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">Contact us</li> -->
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('assets/images/Banners/banner-email.jpg')">
        			<h1 class="page-title text-white">Liên hệ<span class="text-white">Giữ liên lạc với chúng tôi</span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                	<div class="row">
                		<div class="col-lg-6 mb-2 mb-lg-0">
                			<h2 class="title mb-1">Thông tin liên lạc</h2><!-- End .title mb-2 -->
                			<p class="mb-3"></p>
                			<div class="row">
                				<div class="col-sm-7">
                					<div class="contact-info">
                						<h3>Trụ sở</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-map-marker"></i>
	                							110 Trần Duy Hưng, Cầu Giấy, Hà Nội
	                						</li>
                							<li>
                								<i class="icon-phone"></i>
                								<a href="tel:#">+92 423 567</a>
                							</li>
                							<li>
                								<i class="icon-envelope"></i>
                								<a href="mailto:#">nguyenduchung@gmail.com</a>
                							</li>
											<li>
                								<i class="icon-facebook"></i>
                								<a href="">Fanpage: H2C SPORTS</a>
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-7 -->

                				<div class="col-sm-5">
                					<div class="contact-info">
                						<h3>The Office</h3>

                						<ul class="contact-list">
                							<li>
                								<i class="icon-clock-o"></i>
	                							<span class="text-dark">Thứ 2 - thứ  7</span> <br>11h sáng - 7h tối
	                						</li>
                							<li>
                								<i class="icon-calendar"></i>
                								<span class="text-dark">Chủ nhật</span> <br>11h sáng - 6h tối
                							</li>
                						</ul><!-- End .contact-list -->
                					</div><!-- End .contact-info -->
                				</div><!-- End .col-sm-5 -->
                			</div><!-- End .row -->
                		</div><!-- End .col-lg-6 -->
                		<div class="col-lg-6">
                			<h2 class="title mb-1">Nếu bạn có bất cứ cau hỏi gì?</h2><!-- End .title mb-2 -->
                			<p class="mb-2">Điền thông tin vào form này để liên hệ với chúng tôi</p>

                			<form action="#" class="contact-form mb-3">
                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cname" class="sr-only">Tên</label>
                						<input type="text" class="form-control" id="cname" placeholder="Tên *" required>
                					</div><!-- End .col-sm-6 -->

                					<div class="col-sm-6">
                                        <label for="cemail" class="sr-only">Email</label>
                						<input type="email" class="form-control" id="cemail" placeholder="Email *" required>
                					</div><!-- End .col-sm-6 -->
                				</div><!-- End .row -->

                				<div class="row">
                					<div class="col-sm-6">
                                        <label for="cphone" class="sr-only">Phone</label>
                						<input type="tel" class="form-control" id="cphone" placeholder="Số điên thoại">
                					</div><!-- End .col-sm-6 -->

                					<!-- <div class="col-sm-6">
                                        <label for="csubject" class="sr-only">Subject</label>
                						<input type="text" class="form-control" id="csubject" placeholder="Subject">
                					</div> -->
                				</div><!-- End .row -->

                                <label for="cmessage" class="sr-only">Lời nhắn</label>
                				<textarea class="form-control" cols="30" rows="4" id="cmessage" required placeholder="Lời nhắn *"></textarea>

                				<button type="submit" class="btn btn-outline-primary-2 btn-minwidth-sm">
                					<span>SUBMIT</span>
            						<i class="icon-long-arrow-right"></i>
                				</button>
                			</form><!-- End .contact-form -->
                		</div><!-- End .col-lg-6 -->
                	</div><!-- End .row -->

                	<hr class="mt-4 mb-5">

                	<div class="stores mb-4 mb-lg-5">
	                	<h2 class="title text-center mb-3">Cửa hàng của chúng tôi</h2><!-- End .title text-center mb-2 -->

	                	<div class="row">
	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="assets/images/stores/img-1.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->
	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">H2C Sport shop</h3><!-- End .store-title -->
	                							<address>110 Trần Duy Hưng, Cầu Giấy, Hà Nội</address>
	                							<div><a href="tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Giời mở cửa:</h4><!-- End .store-subtitle -->
                								<div>Thứ hai - Thứ 7 11h sáng - 7h tối</div>
                								<div>Chủ nhật 11h sáng - 6h tối</div>

                								<!-- <a href="#" class="btn btn-link" target="_blank"><span>View Map</span><i class="icon-long-arrow-right"></i></a> -->
	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->

	                		<div class="col-lg-6">
	                			<div class="store">
	                				<div class="row">
	                					<div class="col-sm-5 col-xl-6">
	                						<figure class="store-media mb-2 mb-lg-0">
	                							<img src="assets/images/stores/img-2.jpg" alt="image">
	                						</figure><!-- End .store-media -->
	                					</div><!-- End .col-xl-6 -->

	                					<div class="col-sm-7 col-xl-6">
	                						<div class="store-content">
	                							<h3 class="store-title">One New York Plaza</h3><!-- End .store-title -->
	                							<address>88 Pine St, New York, NY 10005, USA</address>
	                							<div><a href="tel:#">+1 987-876-6543</a></div>

	                							<h4 class="store-subtitle">Store Hours:</h4><!-- End .store-subtitle -->
												<div>Monday - Friday 9am to 8pm</div>
												<div>Saturday - 9am to 2pm</div>
												<div>Sunday - Closed</div>

	                						</div><!-- End .store-content -->
	                					</div><!-- End .col-xl-6 -->
	                				</div><!-- End .row -->
	                			</div><!-- End .store -->
	                		</div><!-- End .col-lg-6 -->
	                	</div><!-- End .row -->
                	</div><!-- End .stores -->
                </div><!-- End .container -->

            	<div id="map"></div><!-- End #map -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->
@endsection
