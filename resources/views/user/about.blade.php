@extends('user.index-21')
@section('content')
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item"><a href="#">Giới thiệu</a></li>
                        <!-- <li class="breadcrumb-item active" aria-current="page">About us</li> -->
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="container">
	        	<div class="page-header page-header-big text-center" style="background-image: url('assets/images/Banners/banner-email.jpg')">
        			<h1 class="page-title text-white">Về chúng tôi<span class="text-white"></span></h1>
	        	</div><!-- End .page-header -->
            </div><!-- End .container -->

            <div class="page-content pb-0">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-3 mb-lg-0">
                            <h2 class="title">Tầm nhìn của chúng tôi</h2><!-- End .title -->
                            <p>Tầm nhìn của chúng tôi tại shop là trở thành điểm đến hàng đầu cho những người yêu thích bóng đá, nơi họ có thể tìm thấy những sản phẩm chất lượng cao và đa dạng, từ quần áo, giày đến phụ kiện. Chúng tôi không chỉ là một cửa hàng bán hàng, mà còn là một nơi thăng hoa cho đam mê bóng đá, nơi mà mọi người có thể tìm thấy sự hỗ trợ, cảm thấy tự tin và truyền cảm hứng để thể hiện niềm đam mê của mình trên sân cỏ. Chúng tôi cam kết mang đến cho khách hàng trải nghiệm mua sắm tuyệt vời nhất, với sự chăm sóc tận tâm và cam kết về chất lượng sản phẩm. Đồng hành cùng những người yêu bóng đá trên hành trình chinh phục ước mơ là mục tiêu hàng đầu của chúng tôi </p>
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <h2 class="title">Mong muốn của chúng tôi</h2><!-- End .title -->
                            <p>Mong muốn chính của chúng tôi tập trung vào việc xây dựng một cộng đồng đam mê bóng đá và đồng thời tạo ra một thương hiệu mà khách hàng có thể tin tưởng và yêu thích. Chúng tôi hiểu rằng, để trở thành một thương hiệu được lòng khách hàng, chìa khóa nằm ở việc cung cấp những sản phẩm chất lượng cao và dịch vụ tận tâm, luôn đặt lợi ích của khách hàng lên hàng đầu.

Chúng tôi mong muốn tạo ra một môi trường mua sắm thân thiện và tiện lợi, nơi mà khách hàng cảm thấy được quan tâm và đồng hành trên mỗi bước đi. Bằng cách này, chúng tôi hy vọng có thể xây dựng một liên kết vững chắc và lâu dài với khách hàng, từ đó thúc đẩy sự phát triển bền vững của thương hiệu và cùng nhau chia sẻ niềm vui và đam mê bóng đá. </p>
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->

                    <div class="mb-5"></div><!-- End .mb-4 -->
                </div><!-- End .container -->

                <div class="bg-light-2 pt-6 pb-5 mb-6 mb-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 mb-3 mb-lg-0">
                                <h2 class="title">Về Shop</h2><!-- End .title -->
                                <p class="lead text-primary mb-3">Chào mừng bạn đến với H2C Sport - điểm đến lý tưởng cho những người đam mê bóng đá! Tại H2C Sport, chúng tôi tự hào là địa chỉ tin cậy cung cấp quần áo, giày và phụ kiện chất lượng cho cả những cầu thủ chuyên nghiệp và những người yêu thích bóng đá. Với sự đa dạng về sản phẩm và dịch vụ tận tâm, chúng tôi cam kết mang đến trải nghiệm mua sắm tuyệt vời nhất cho mọi khách hàng. Hãy đến và khám phá ngay hôm nay! </p>

                                <a href="blog.html" class="btn btn-sm btn-minwidth btn-outline-primary-2">
                                    <span>Đến trang tin tức</span>
                                    <i class="icon-long-arrow-right"></i>
                                </a>
                            </div><!-- End .col-lg-5 -->

                            <div class="col-lg-6 offset-lg-1">
                                <div class="about-images">
                                    <img src="assets/images/about/img-1.jpg" alt="" class="about-img-front">
                                    <img src="assets/images/about/img-2.jpg" alt="" class="about-img-back">
                                </div><!-- End .about-images -->
                            </div><!-- End .col-lg-6 -->
                        </div><!-- End .row -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-6 pb-6 -->

            

                <div class="mb-2"></div><!-- End .mb-2 -->

                <div class="about-testimonials bg-light-2 pt-6 pb-6">
                    <div class="container">
                        <h2 class="title text-center mb-3">Điều khách hàng nói về chúng tôi</h2><!-- End .title text-center -->

                        <div class="owl-carousel owl-simple owl-testimonials-photo" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "1200": {
                                        "nav": true
                                    }
                                }
                            }'>
                            <blockquote class="testimonial text-center">
                                <img src="assets/images/testimonials/user-1.jpg" alt="user">
                                <p>“ Tôi thực sự ấn tượng với sự đa dạng và chất lượng sản phẩm tại H2C Sport. <br>Tôi đã tìm thấy đôi giày mà tôi luôn ao ước có được và chúng thực sự vượt qua mong đợi của tôi!. ”</p>
                                <cite>
                                    Nguyễn Tùng
                                    <span>Khách hàng</span>
                                </cite>
                            </blockquote><!-- End .testimonial -->

                            <blockquote class="testimonial text-center">
                                <img src="assets/images/testimonials/user-2.jpg" alt="user">
                                <p>“Dịch vụ khách hàng tại H2C Sport thật sự tuyệt vời. Nhân viên thân thiện và nhiệt tình, luôn sẵn sàng giúp đỡ và tư vấn cho tôi lựa chọn sản phẩm phù hợp nhất. ”</p>

                                <cite>
                                    Nguyễn Ánh
                                    <span>Khách hàng</span>
                                </cite>
                            </blockquote><!-- End .testimonial -->
                        </div><!-- End .testimonials-slider owl-carousel -->
                    </div><!-- End .container -->
                </div><!-- End .bg-light-2 pt-5 pb-6 -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->

@endsection
