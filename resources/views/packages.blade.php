<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Poygam Marriage Media</title>

    <!-- Loading Bootstrap -->
    <link href="{{asset('package_files/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Loading Template CSS -->
    <link href="{{asset('package_files/css/style.css') }}" rel="stylesheet">
    <link href="{{asset('package_files/css/animate.css') }}" rel="stylesheet">
    <link href="{{asset('package_files/css/style-magnific-popup.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{asset('package_files/css/fonts.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700'
        rel='stylesheet' type='text/css'>

    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--headerIncludes-->

</head>

<body>

    <!--begin loader -->
    <div id="loader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--end loader -->

    <!--begin header -->
    <header class="header">

        <!--begin nav -->
        <nav class="navbar navbar-default navbar-fixed-top">

            <!--begin container -->
            <div class="container">

                <!--begin navbar -->
                <div class="navbar-header">
                    <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle"
                        type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ route('welcome') }}">
                        <img src="{{ asset('template/images/logo-dark.png') }}" alt="" />
                    </a>

                    {{-- <a href="index.html" class="navbar-brand brand scrool"><span class="blue">Poygam </span>Merriage
                        Media</a> --}}
                </div>

                <div id="navbar-collapse-02" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#pricing">Pricing</a></li>
                        <li><a href="#contact" class="purchase scrool">Contact Us</a></li>
                    </ul>
                </div>
                <!--end navbar -->

            </div>
            <!--end container -->

        </nav>
        <!--end nav -->

    </header>
    <!--end header -->


    <!--begin col-md-4 -->
    <section class="section-white" id="pricing">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row margin-bottom-50">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center">
                    <h2 class="section-title">Choose Your form</h2>

                    <div class="separator_wrapper">
                        <i class="icon icon-star-two red"></i>
                    </div>

                    <p class="section-subtitle">Please register according to your own district or country<br>Fill in the
                        form correctly and submit, be sure to complete the payment

                    </p>
                </div>
                <!--end col-md-12-->

            </div>
            <!--end row-->

            <!--begin row-->
            <div class="row">

                <!--begin col-sm-4 -->
                <div class="col-sm-4">

                    <!--begin pricing-box -->
                    <div class="pricing-box">

                        <!--begin pricing-top -->
                        <div class="pricing-top">

                            <h3>Mymensingh District</h3>

                            <p class="price"><span class="currency white">৳</span> <span
                                    class="number white">1,100</span> <span class="month white">One Time</span></p>

                        </div>
                        <!--end pricing-top -->

                        <!--begin pricing-bottom -->
                        <div class="pricing-bottom">

                            <ul>
                                <li>Unlimited validity</li>
                                <li>Direct appointment arrangements</li>
                                <li>unlimited updates</li>
                                <li>Meeting at the couple's home</li>
                                <li>The information is secure</li>
                            </ul>

                            <a href="{{ route('buy_package', 'mymansing') }}"
                                class="btn btn-md btn-block btn-pricing-blue">REGISTER TODAY</a>

                        </div>
                        <!--end pricing-bottom -->

                    </div>
                    <!--end pricing-box -->

                </div>
                <!--end col-sm-4 -->

                <!--begin col-sm-4 -->
                <div class="col-sm-4">

                    <!--begin pricing-box -->
                    <div class="pricing-box">

                        <!--begin pricing-top -->
                        <div class="pricing-top">

                            <h3>Outside Mymensingh</h3>

                            <p class="price"><span class="currency white">৳</span> <span
                                    class="number white">1,500</span> <span class="month white">One Time</span></p>

                        </div>
                        <!--end pricing-top -->

                        <!--begin pricing-bottom -->
                        <div class="pricing-bottom">

                            <ul>
                                <li>Unlimited validity</li>
                                <li>Direct appointment arrangements</li>
                                <li>unlimited updates</li>
                                <li>Meeting at the couple's home</li>
                                <li>The information is secure</li>
                            </ul>

                            <a href="{{route('buy_package', 'bangladesh')}}"
                                class="btn btn-md btn-block btn-pricing-blue">REGISTER TODAY</a>

                        </div>
                        <!--end pricing-bottom -->

                    </div>
                    <!--end pricing-box -->

                </div>
                <!--end col-sm-4 -->

                <!--begin col-sm-4 -->
                <div class="col-sm-4">

                    <!--begin pricing-box -->
                    <div class="pricing-box">

                        <!--begin pricing-top -->
                        <div class="pricing-top">

                            <h3>Out of Bangladesh</h3>

                            <p class="price"><span class="currency white">৳</span> <span
                                    class="number white">2,500</span> <span class="month white">One Time</span></p>

                        </div>
                        <!--end pricing-top -->

                        <!--begin pricing-bottom -->
                        <div class="pricing-bottom">

                            <ul>
                                <li>Unlimited validity</li>
                                <li>Direct appointment arrangements</li>
                                <li>unlimited updates</li>
                                <li>Meeting at the couple's home</li>
                                <li>The information is secure</li>
                            </ul>

                            <a href="{{route('buy_package', 'foreign')}}"
                                class="btn btn-md btn-block btn-pricing-blue">REGISTER TODAY</a>

                        </div>
                        <!--end pricing-bottom -->

                    </div>
                    <!--end pricing-box -->

                </div>
                <!--end col-sm-4 -->

            </div>
            <!--end row-->

            <!--begin row-->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center">
                    <p>*With more than <span class="bold">25078 clients</span>, we aim to offer <span
                            class="bold">register today </span> for find your match.</p>
                </div>
                <!--end col-md-12-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end section-white-->


    <!--begin section-white -->
    <section class="section-white medium-padding">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-30 margin-bottom-30">

                    <iframe width="560" height="315" src="https://www.youtube.com/embed/AxirvCDALTA" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

                </div>
                <!--end col-sm-6-->

                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-35 margin-bottom-30">

                    <h3 class="medium-title">Watch the video tutorial.</h3>

                    <p>To register, you must select a package according to your district or country</p>

                    <p>Fill in the form correctly and submit, be sure to complete the payment</p>

                    <a href="#" class="btn btn-lg btn-blue small margin-top-10">Know More</a>

                </div>
                <!--end col-sm-6-->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>

    <!--begin contact -->
    <section class="section-dark" id="contact">

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row margin-bottom-50">

                <!--begin col-md-10-->
                <div class="col-md-10 col-md-offset-1 text-center">
                    <h2 class="section-title grey">Massage Us For Quary</h2>

                    <div class="separator_wrapper_white">
                        <i class="icon icon-star-two grey"></i>
                    </div>

                    <p class="section-subtitle grey">Please register according to your own district or country<br>If
                        necessary, Watch the video tutorial or message us</p>
                </div>
                <!--end col-md-10-->

            </div>
            <!--end row-->

            <!--begin row-->
            <div class="row">

                <!--begin success message -->
                <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us
                    soon. Thank You!</p>
                <!--end success message -->

                <!--begin contact form -->
                <form id="contact-form" class="contact" action="php/contact.php" method="post">

                    <!--begin col-md-6-->
                    <div class="col-md-6">
                        <input class="contact-input white-input" required="" name="contact_names"
                            placeholder="Full Name*" type="text">
                        <input class="contact-input white-input" required="" name="contact_subject"
                            placeholder="Subject*" type="text">
                    </div>
                    <!--end col-md-6-->

                    <!--begin col-md-6-->
                    <div class="col-md-6">
                        <input class="contact-input white-input" required="" name="contact_email"
                            placeholder="Email Adress*" type="email">
                        <input class="contact-input white-input" required="" name="contact_phone"
                            placeholder="Phone Number*" type="text">
                    </div>
                    <!--end col-md-6-->

                    <!--begin col-md-6-->
                    <div class="col-md-12">
                        <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message"
                            placeholder="Your Message..."></textarea>
                    </div>
                    <!--end col-md-6-->

                    <!--begin col-md-12-->
                    <div class="col-md-12">
                        <input value="Send Message" id="submit-button" class="contact-submit" type="submit">
                    </div>
                    <!--end col-md-12-->

                </form>
                <!--end contact form -->

            </div>
            <!--end row-->

        </div>
        <!--end container-->

    </section>
    <!--end contact-->

    <!--begin footer -->
    <div class="footer">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">

                    <!--begin copyright -->
                    <div class="copyright">
                        <p class="footer-logo"><span class="blue">Poygam </span>Marriage Media</p>
                        <p>Copyright © 2021. Designed &amp; Developed by <a href="http:www.cube.com.bd"
                                target="_blank">Cube Limited</a></p>

                    </div>
                    <!--end copyright -->

                    <!--begin footer_social -->
                    <ul class="footer_social">
                        <li>
                            <a href="#">
                                <i class="icon icon-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon icon-skype"></i>
                            </a>
                        </li>
                    </ul>
                    <!--end footer_social -->

                </div>
                <!--end col-md-6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </div>
    <!--end footer -->


    <!-- Load JS here for greater good =============================-->
    <script src="{{asset('package_files/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{asset('package_files/js/bootstrap.min.js') }}"></script>
    <script src="{{asset('package_files/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{asset('package_files/js/jquery.nav.js') }}"></script>
    <script src="{{asset('package_files/js/jquery.scrollTo-min.js') }}"></script>
    <script src="{{asset('package_files/js/SmoothScroll.js') }}"></script>
    <script src="{{asset('package_files/js/wow.js') }}"></script>
    <script src="{{asset('package_files/js/custom.js') }}"></script>
    <script src="{{asset('package_files/js/plugins.js') }}"></script>


</body>

</html>
