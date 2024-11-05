<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farm Doc</title>

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



        <section class="slider-one__wrapper">
            <div class="slider-one__nav">
                <a href="#" class="slider-one__nav-left">
                    <i class="far fa-angle-left"></i>
                </a><!-- /.slider-one__nav-left -->
                <a href="#" class="slider-one__nav-right">
                    <i class="far fa-angle-right"></i>
                </a><!-- /.slider-one__nav-left -->
            </div><!-- /.slider-one__nav -->
            <div class="slider-one__carousel owl-carousel owl-theme thm__owl-carousel" data-options='{
                "items": 1, "loop": true, "autoplay": true, "autoplayHoverPause": true, "autoplayTimeout": 5000,
                "margin": 0, "dots": false, "nav": false, "animateOut": &quot;fadeOut&quot;, "animateIn": &quot;fadeIn&quot;, "active": true, "smartSpeed": 1000
            }' data-carousel-next-btn=".slider-one__nav-right" data-carousel-prev-btn=".slider-one__nav-left">
                <div class="item" style="background-image: url(Frontend/assets/images/main-slider/main-slider-1-1.jpg);">
                    <div class="slider-one__item">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <div class="slider-one__content">
                                        <div class="slider-one__content-inner">
                                            <h3>Finding The Best Senior <br> Care Services.</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt labore dolore magna aliqua enim ad minim veniam.</p>
                                            <a href="donation-single.html" class="thm-btn slider-one__btn">Donate
                                                Now</a>
                                            <!-- /.thm-btn slider-one__btn -->
                                        </div><!-- /.slider-one__content-inner -->
                                    </div><!-- /.slider-one__content -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row justify-content-end -->
                        </div><!-- /.container -->
                    </div><!-- /.slider-one__item -->
                </div><!-- /.item -->
                <div class="item" style="background-image: url(Frontend/assets/images/main-slider/main-slider-1-2.jpg);">
                    <div class="slider-one__item">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <div class="slider-one__content">
                                        <div class="slider-one__content-inner">
                                            <h3>Finding The Best Senior <br> Care Services.</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt labore dolore magna aliqua enim ad minim veniam.</p>
                                            <a href="donation-single.html" class="thm-btn slider-one__btn">Donate
                                                Now</a>
                                            <!-- /.thm-btn slider-one__btn -->
                                        </div><!-- /.slider-one__content-inner -->
                                    </div><!-- /.slider-one__content -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row justify-content-end -->
                        </div><!-- /.container -->
                    </div><!-- /.slider-one__item -->
                </div><!-- /.item -->
                <div class="item" style="background-image: url(Frontend/assets/images/main-slider/main-slider-1-3.jpg);">
                    <div class="slider-one__item">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-12 d-flex justify-content-end">
                                    <div class="slider-one__content">
                                        <div class="slider-one__content-inner">
                                            <h3>Finding The Best Senior <br> Care Services.</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt labore dolore magna aliqua enim ad minim veniam.</p>
                                            <a href="donation-single.html" class="thm-btn slider-one__btn">Donate
                                                Now</a>
                                            <!-- /.thm-btn slider-one__btn -->
                                        </div><!-- /.slider-one__content-inner -->
                                    </div><!-- /.slider-one__content -->
                                </div><!-- /.col-lg-6 -->
                            </div><!-- /.row justify-content-end -->
                        </div><!-- /.container -->
                    </div><!-- /.slider-one__item -->
                </div><!-- /.item -->
            </div><!-- /.slider-one__carousel owl-carousel owl-theme thm__owl-carousel -->
        </section><!-- /.slider-one__wrapper -->


        {{-- service start --}}

        @include('Frontend.body.Services')
       <!-- /.service-one -->

        <section class="about-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-three__content">
                            <div class="block-title">
                                <p class="has-line">02. About Us</p><!-- /.has-line -->
                                <h3>Best Home Care Center <br> with Love</h3>
                            </div><!-- /.block-title -->
                            <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded.
                                To make that happen, we are committed to providing an environment in which residents can
                                enjoy a wide range of amenities that allow them to feel independent.</p>
                            <div class="row">
                                <div class="col-xl-6">
                                    <ul class="blog-details__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            In-House Theater
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Medication Management
                                        </li>
                                    </ul><!-- /.blog-details__list list-unstyled -->
                                </div><!-- /.col-md-6 -->
                                <div class="col-xl-6">
                                    <ul class="blog-details__list list-unstyled">
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            On-Site Physician Services
                                        </li>
                                        <li>
                                            <i class="fa fa-check-circle"></i>
                                            Convenient One-Story Design
                                        </li>
                                    </ul><!-- /.blog-details__list list-unstyled -->
                                </div><!-- /.col-md-6 -->
                                <img src="Frontend/assets/images/resources/about-1-1-sign.png" alt="">
                            </div><!-- /.row -->
                        </div><!-- /.about-three__content -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="about-three__image ">
                            <img src="Frontend/assets/images/shapes/about-dot-3-1.png" class="about-dot-3-1" alt="">
                            <div class="about-three__image-text"><span
                                    class="curved-circle">25&nbsp;Years&nbsp;Of&nbsp;Experiences&nbsp;&nbsp;25&nbsp;Years&nbsp;of&nbsp;Experinces&nbsp;&nbsp;Experince</span>
                            </div><!-- /.about-three__image-text -->
                            <img src="Frontend/assets/images/resources/about-3-1.jpg" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.about-three -->




        <section class="cta-one" style="background-image: url(Frontend/assets/images/background/cta-bg-2-.jpg);">
            <div class="container text-center">
                <h3>Book an Appointment Today!</h3>
                <p>Lorem ipsum dolor sit amet consec turadipicing elit sed eiusmod tempor. <br> incididunt
                    labore.dolore. magna aliqua enim ad minim veniam. </p>
                <a href="contact.html" class="thm-btn cta-one__btn">Get Appointment</a><!-- /.thm-btn cta-one__btn -->
            </div><!-- /.container -->
        </section><!-- /.cta-one -->




        <section class="funfact-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__counter">
                                <h3><span class="counter">25</span>+</h3>
                            </div><!-- /.funfact-one__counter -->
                            <p>Years Experiences</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__counter">
                                <h3><span class="counter">750</span></h3>
                            </div><!-- /.funfact-one__counter -->
                            <p>Great Volunteers</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__counter">
                                <h3><span class="counter">20</span><!-- /.counter -->k+</h3>
                            </div><!-- /.funfact-one__counter -->
                            <p>Satisfied Clients</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 -->
                    <div class="col-lg-3 col-md-6 col-sm-12 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="funfact-one__single">
                            <div class="funfact-one__counter">
                                <h3><span class="counter">30</span>+</h3>
                            </div><!-- /.funfact-one__counter -->
                            <p>Awards Achieve</p>
                        </div><!-- /.funfact-one__single -->
                    </div><!-- /.col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.funfact-one -->

        <section class="faq-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-three__image wow fadeInLeft" data-wow-duration="1500ms">
                            <img src="Frontend/assets/images/shapes/faq-2-dot.png" class="faq-three__image-dots" alt="">
                            <img src="Frontend/assets/images/resources/faq-2-1.jpg" alt="">
                        </div><!-- /.faq-three__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="faq-one__block">
                            <div class="block-title text-left">
                                <p class="has-line">03. Why Choose US</p>
                                <h3>Why Most of The People <br> Choose Oberlin</h3>
                            </div><!-- /.block-title -->

                            <p>Our goal each day is to ensure that our residents’ needs are not only met but exceeded.
                                To make that happen we are committed to providing an </p>
                            <div class="accrodion-grp" data-grp-name="career-one__accrodion">
                                <div class="accrodion ">
                                    <div class="accrodion-title">
                                        <h4>Resort Style Living</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our goal each day is to ensure that our residents’ needs are not only
                                                met.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion active">
                                    <div class="accrodion-title">
                                        <h4>Safety & Security Guaranty</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our goal each day is to ensure that our residents’ needs are not only
                                                met.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                                <div class="accrodion">
                                    <div class="accrodion-title">
                                        <h4>24/7 Nursing Staff</h4>
                                    </div>
                                    <div class="accrodion-content">
                                        <div class="inner">
                                            <p>Our goal each day is to ensure that our residents’ needs are not only
                                                met.</p>
                                        </div><!-- /.inner -->
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.faq-one__block -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.faq-three -->


        <section class="event-two">
            <div class="container">
                <div class="block-title text-center">
                    <p>04. Next Events</p>
                    <h3>Let’s Join to Our Next <br> Events</h3>
                </div><!-- /.block-title -->
                <div class="row no-gutters">
                    <div class="col-xl-6">
                        <div class="event-two__single">
                            <div class="event-two__image">
                                <img src="Frontend/assets/images/event/event-2-1.jpg" alt="">
                                <a href="event-details.html"><i class="fal fa-plus"></i></a>
                            </div><!-- /.event-two__image -->
                            <div class="event-two__content d-flex">
                                <div class="my-auto">
                                    <div class="event-two__date"><b>25</b> <span>Mar</span></div>
                                    <!-- /.event-two__date -->
                                    <h3><a href="event-details.html">Jogging for the Better Tomorrow</a></h3>
                                    <p>Our goal each day is to ensure that our residents.</p>
                                </div><!-- /.my-auto -->
                            </div><!-- /.event-two__content -->
                        </div><!-- /.event-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6">
                        <div class="event-two__single">
                            <div class="event-two__image">
                                <img src="Frontend/assets/images/event/event-2-2.jpg" alt="">
                                <a href="event-details.html"><i class="fal fa-plus"></i></a>
                            </div><!-- /.event-two__image -->
                            <div class="event-two__content d-flex">
                                <div class="my-auto">
                                    <div class="event-two__date"><b>25</b> <span>Mar</span></div>
                                    <!-- /.event-two__date -->
                                    <h3><a href="event-details.html">Walk for Mikado Hospice</a></h3>
                                    <p>Our goal each day is to ensure that our residents.</p>
                                </div><!-- /.my-auto -->
                            </div><!-- /.event-two__content -->
                        </div><!-- /.event-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6">
                        <div class="event-two__single">
                            <div class="event-two__image">
                                <img src="Frontend/assets/images/event/event-2-3.jpg" alt="">
                                <a href="event-details.html"><i class="fal fa-plus"></i></a>
                            </div><!-- /.event-two__image -->
                            <div class="event-two__content d-flex">
                                <div class="my-auto">
                                    <div class="event-two__date"><b>25</b> <span>Mar</span></div>
                                    <!-- /.event-two__date -->
                                    <h3><a href="event-details.html">Mountain Camp Cabin in the Woods</a></h3>
                                    <p>Our goal each day is to ensure that our residents.</p>
                                </div><!-- /.my-auto -->
                            </div><!-- /.event-two__content -->
                        </div><!-- /.event-two__single -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-xl-6">
                        <div class="event-two__single">
                            <div class="event-two__image">
                                <img src="Frontend/assets/images/event/event-2-4.jpg" alt="">
                                <a href="event-details.html"><i class="fal fa-plus"></i></a>
                            </div><!-- /.event-two__image -->
                            <div class="event-two__content d-flex">
                                <div class="my-auto">
                                    <div class="event-two__date"><b>25</b> <span>Mar</span></div>
                                    <!-- /.event-two__date -->
                                    <h3><a href="event-details.html">Chess Tournament Final Results</a></h3>
                                    <p>Our goal each day is to ensure that our residents.</p>
                                </div><!-- /.my-auto -->
                            </div><!-- /.event-two__content -->
                        </div><!-- /.event-two__single -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.event-two -->

        <section class="testimonials-two"
            style="background-image: url(Frontend/assets/images/background/testimonials-1-bg-1-1.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="testimonials-two__content wow fadeInUp" data-wow-duration="1500ms">
                            <div class="block-title">
                                <p class="has-line">05. Testimonials</p><!-- /.has-line -->
                                <h3>What Our Clients Say <br> About Oberlin?</h3>
                            </div><!-- /.block-title -->
                            <div class="testimonials-two__carousel">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testimonials-two__single">
                                            <p>Our goal each day is to ensure that our residents needs are not only met
                                                but
                                                exceeded. To make that happen we are committed to providing.</p>
                                            <h3>Rebeka Dawson</h3>
                                            <span>Instructor</span>
                                        </div><!-- /.testimonials-two__single -->
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonials-two__single">
                                            <p>Our goal each day is to ensure that our residents needs are not only met
                                                but
                                                exceeded. To make that happen we are committed to providing.</p>
                                            <h3>Lina Dean</h3>
                                            <span>Instructor</span>
                                        </div><!-- /.testimonials-two__single -->
                                    </div><!-- /.swiper-slide -->
                                    <div class="swiper-slide">
                                        <div class="testimonials-two__single">
                                            <p>Our goal each day is to ensure that our residents needs are not only met
                                                but
                                                exceeded. To make that happen we are committed to providing.</p>
                                            <h3>Leon Cortez</h3>
                                            <span>Instructor</span>
                                        </div><!-- /.testimonials-two__single -->
                                    </div><!-- /.swiper-slide -->
                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /.testimonials-two__carousel -->
                            <div class="testimonials-two__thumb-carousel-wrap">
                                <div class="testimonials-two__thumb-carousel">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="Frontend/assets/images/resources/testi-3-1.jpg" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="Frontend/assets/images/resources/testi-3-2.jpg" alt="">
                                        </div><!-- /.swiper-slide -->
                                        <div class="swiper-slide">
                                            <img src="Frontend/assets/images/resources/testi-3-3.jpg" alt="">
                                        </div><!-- /.swiper-slide -->
                                    </div><!-- /.swiper-wrapper -->
                                </div><!-- /.testimonials-two__thumb-carousel -->
                            </div><!-- /.testimonials-two__carousel-wrap -->

                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.testimonials-two -->


        {{-- blog strat --}}

        @include('Frontend.body.Latest_Blog')
       <!-- /.blog-one -->


       {{-- start appoinment --}}
       @include('Frontend.body.appointment')
      <!-- /.appointment-one -->


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
