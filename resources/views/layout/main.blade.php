<!DOCTYPE html>
<html lang="zxx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  @yield('title')

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/bootstrap/bootstrap.css')}}">
  <!-- Iconfont Css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/awesome/css/fontawesome-all.min.css"')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/flaticon/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/fonts/gilroy/font-gilroy.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/magnific-popup/magnific-popup.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{asset('assets/vendors/animate-css/animate.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/animated-headline/animated-headline.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/owl/assets/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendors/owl/assets/owl.theme.default.min.css')}}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('assets/css/woocomerce.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">

</head>

<body id="top-header">
    <!-- Header Start -->
<header class="header-style-1"> 

    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="dashboard">
                        <img src="assets/images/logo.png" alt="" class="img-fluid" />
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a> 
                </div>
        
                <nav class="site-navbar ms-auto">
                    <ul class="primary-menu">
                        <li class="current">
                            <a href="mahasiswa">Mahasiswa</a>
                        </li>
                        <li><a href="matakuliah">Mata Kuliah</a></li>
                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>

                <div class="header-btn d-none d-xl-block">
                    <a href="logout.html" class="btn btn-main-2 btn-sm-2 rounded">Log Out</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!--====== Header End ======-->

<!-- Main Start -->
<div>
    @yield('main')
</div>
<!--Main end-->

<!-- Footer section start -->
<section class="footer footer-3" style="margin-top:100px;">
	<div class="footer-btm">
        <div class="container">
            <div class="row align-items-center">
				<div class="col-xl-6 col-sm-12 col-lg-6">
					<img text="center" src="assets/images/logo-white.png" alt="" class="img-fluid">
				</div>
                <div class="col-xl-5 col-sm-12 col-lg-6">
					<div class="footer-btm-links text-start text-sm-center text-lg-end">
						<p class="mb-0 copyright text-sm-center text-lg-start">© 2021 Edumel All rights reserved by <a href="" rel="nofollow">Kelompok 4</a> </p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="fixed-btm-top">
		<a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
	</div>
	
</section>
<!-- Footer section End -->

    <!-- Main jQuery -->
    <script src="{{asset('assets/vendors/jquery/jquery.js')}}"></script>
    <!-- Bootstrap 5:0 -->
    <script src="{{asset('assets/vendors/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/vendors/bootstrap/bootstrap.js')}}"></script>
    <!-- Counterup -->
    <script src="{{asset('assets/vendors/counterup/waypoint.js')}}"></script>
    <script src="{{asset('assets/vendors/counterup/jquery.counterup.min.js')}}"></script>
    <!--  Owl Carousel -->
    <script src="{{asset('assets/vendors/owl/owl.carousel.min.js')}}"></script>
    <!-- Isotope -->
    <script src="{{asset('assets/vendors/isotope/jquery.isotope.js')}}"></script>
    <script src="{{asset('assets/vendors/isotope/imagelaoded.min.js')}}"></script>
    <!-- Animated Headline -->
    <script src="{{asset('assets/vendors/animated-headline/animated-headline.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('assets/vendors/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <script src="{{asset('assets/js/script.js')}}"></script>

  </body>
  </html>