<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About  ||   Doctor</title>

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="Frontend/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="Frontend/assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="Frontend/assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="Frontend/assets/images/favicon/site.webmanifest">

    <!-- plugins styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Baloo+2:400,500,600,700,800%7CLato:100,300,400,700,900%7COpen+Sans:300,400,600,700,800%7CRoboto:300,400,500,700,900%7CRubik:300,400,500,700,900&display=swap">
    <link rel="stylesheet" href="Frontend/assets/css/animate.css">
    <link rel="stylesheet" href="Frontend/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/hover-min.css">
    <link rel="stylesheet" href="Frontend/assets/css/swiper.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="Frontend/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="Frontend/assets/css/oberlin-icons.css">

    <!-- template styles -->
    <link rel="stylesheet" href="Frontend/assets/css/style.css">
    <link rel="stylesheet" href="Frontend/assets/css/responsive.css">

</head>

<body>

    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div><!-- /.preloader -->



    <div class="page-wrapper">

      @include('Frontend.body.topbar')

        <!-- /.topbar-one -->

       @include('Frontend.body.header')

        <!-- /.main-nav-one -->

        <section class="page-header" style="background-image: url(assets/images/background/page-header-about-1.jpg);">
            <div class="container">
                <h2>About Us 01</h2>
                <ul class="list-unstyled thm-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><span>About Us</span></li>
                </ul><!-- /.list-unstyled -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="about-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-one__image">
                            <img src="assets/images/resources/about-1-2.png" alt="">
                            <div class="about-one__image-content">
                                <h3>25</h3>
                                <p>Years Experience</p>
                            </div><!-- /.about-one__image-content -->
                        </div><!-- /.about-one__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6 d-flex">
                        <div class="my-auto">
                            <div class="about-one__content">
                                <div class="block-title text-left">
                                    <p class="has-line">01. About Us</p>
                                    <h3>We’re Take Care of Your <br> Problems Carefully</h3>
                                </div><!-- /.block-title -->
                                <div class="nav navtabs about-one__tab-title">
                                    <a href="#approach" class="nav-link active" data-toggle="tab">Approach</a>
                                    <!-- /.nav-link -->
                                    <a href="#mission" class="nav-link" data-toggle="tab">Mission</a><!-- /.nav-link -->
                                    <a href="#target" class="nav-link" data-toggle="tab">Target</a><!-- /.nav-link -->
                                </div><!-- /.nav navtabs about-one__tab-title -->
                                <div class="tab-content">
                                    <div class="tab-pane fade show active animated fadeInUp" id="approach">
                                        <p>Our goal each day is to ensure that our residents’ needs are not only met but
                                            exceeded. To make that happen, we are committed to providing an environment
                                            in which residents can enjoy a wide range of amenities that allow them to
                                            feel independent.</p>
                                        <img src="assets/images/resources/about-1-1-sign.png" alt="">
                                    </div><!-- /.tab-pane fade show active animated fadeInUp -->

                                    <div class="tab-pane fade  animated fadeInUp" id="mission">
                                        <p>Our goal each day is to ensure that our residents’ needs are not only met but
                                            exceeded. To make that happen, we are committed to providing an environment
                                            in which residents can enjoy a wide range of amenities that allow them to
                                            feel independent.</p>
                                        <img src="assets/images/resources/about-1-1-sign.png" alt="">
                                    </div><!-- /.tab-pane fade  animated fadeInUp -->
                                    <div class="tab-pane fade animated fadeInUp" id="target">
                                        <p>Our goal each day is to ensure that our residents’ needs are not only met but
                                            exceeded. To make that happen, we are committed to providing an environment
                                            in which residents can enjoy a wide range of amenities that allow them to
                                            feel independent.</p>
                                        <img src="assets/images/resources/about-1-1-sign.png" alt="">
                                    </div><!-- /.tab-pane fade animated fadeInUp -->
                                </div><!-- /.tab-content -->
                            </div><!-- /.about-one__content -->
                        </div><!-- /.my-auto -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-one -->


    <section class="service-one service-one__service-page">
        <div class="container">
            <div class="block-title text-center">
                <p>04. Experts</p>
                <h3>Our Registered Nurses and Skilled
                     <br> Professionals...</h3>
            </div><!-- /.block-title -->

       <!-- Doctors Area End -->
       <div class="container">

        <div class="row">



@foreach ($doctors as $iteam)


<div class="col-md-4">
    <div class="card" style="width: 18rem;">

        <img src="{{ (! empty($iteam->photo)) ? url('upload/admin_images/'.$iteam->photo):url('upload/no_image.jpg') }}"
        alt="Admin" class="card-img-top"  style="width:300px; height: 300px;">


        <div class="card-body">
          <h5 class="card-title">Doctor's Name:{{ $iteam->name }}</h5>
          <p class="card-text">Designation: {{ $iteam->designation }}</p>
        </div>
      </div>
   </div>

@endforeach








        </div>
    </div>


    {{-- doctor end --}}



      @include('Frontend.body.footer')

    </div><!-- /.page-wrapper -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <div class="side-menu__block">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><i class="fa fa-times"></i>
            <!-- /.fa fa-close --></a>

        <div class="side-menu__block-overlay custom-cursor__overlay">
            <div class="cursor"></div>
            <div class="cursor-follower"></div>
        </div><!-- /.side-menu__block-overlay -->
        <div class="side-menu__block-inner ">

            <a href="index.html" class="side-menu__logo"><img src="Frontend/assets/images/light-logo-1-1.png" alt=""
                    width="190"></a>
            <nav class="mobile-nav__container">
                <!-- content is loading via js -->
            </nav>
            <p class="side-menu__block__copy">(c) 2021 <a href="#">Oberlin</a> - All rights reserved.</p>
            <div class="side-menu__social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-google-plus"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div><!-- /.side-menu__block-inner -->
    </div><!-- /.side-menu__block -->

    <!-- template scripts -->
    <script src="Frontend/assets/js/jquery.min.js"></script>
    <script src="Frontend/assets/js/bootstrap.bundle.min.js"></script>
    <script src="Frontend/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="Frontend/assets/js/bootstrap-select.min.js"></script>
    <script src="Frontend/assets/js/isotope.js"></script>
    <script src="Frontend/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="Frontend/assets/js/jquery.circleType.js"></script>
    <script src="Frontend/assets/js/waypoints.min.js"></script>
    <script src="Frontend/assets/js/jquery.counterup.min.js"></script>
    <script src="Frontend/assets/js/jquery.lettering.min.js"></script>
    <script src="Frontend/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="Frontend/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Frontend/assets/js/jquery.validate.min.js"></script>
    <script src="Frontend/assets/js/owl.carousel.min.js"></script>
    <script src="Frontend/assets/js/TweenMax.min.js"></script>
    <script src="Frontend/assets/js/wow.min.js"></script>
    <script src="Frontend/assets/js/swiper.min.js"></script>
    <script src="Frontend/assets/js/theme.js"></script>
</body>

</html>
