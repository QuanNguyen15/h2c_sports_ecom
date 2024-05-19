@extends('user.index-21')
@section('content')
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Đặt hàng thành công<span></span></h1>
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
        <h5>Quý khách đã đặt hàng thành công, chúng tôi sẽ giao hàng tới quý khách sớm nhất có thể</h5>
        {{-- <h5>Quý khách đã đặt thành công đơn hàng có mã số: #, chúng tôi sẽ giao hàng tới quý khách sớm nhất có thể</h5> --}}

    </main><!-- End .main -->

@endsection
