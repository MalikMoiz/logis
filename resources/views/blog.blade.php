<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Silk Cargos-Meeting the Requirements with Coherence and Trustship Since 2002</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
</head>

<body>
    <!-- Preloader Start -->

   @include('header')
    <main>
        <div class="slider-area ">
            <div class=" d-flex align-items-center" style="background-image:url('assets/img/blog/blog.jpg') ;height: 82vh; background-size:100% 100%;">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap">
                                <h2>BLOG</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach($blogsall as $blogs)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ asset("storage/".$blogs->image) }}" alt="">
                                    <a href="#" class="blog_item_date">
                                        <h3>{{date('d', strtotime($blogs->date));}}</h3>
                                        <p>{{date('F', strtotime($blogs->date))}}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('blog.details', ['blog' => $blogs])}}">
                                        <h2>{{$blogs->heading}}</h2>
                                    </a>
                                    <p>{{$blogs->display}}</p>

                                </div>
                            </article>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">



                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Recent Post</h3>
                                @foreach($blogsrecent as $blogsrecent)
                                <div class="media post_item">
                                    <img src="{{ asset("storage/".$blogsrecent->image) }}"alt="post" width="70px" height="70px">
                                    <div class="media-body">
                                        <a href="{{ route('blog.details', ['blog' => $blogsrecent])}}">
                                            <h3>{{$blogsrecent->heading}}</h3>
                                        </a>
                                        <p>{{$blogsrecent->date}}</p>
                                    </div>
                                </div>
                                @endforeach

                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>
    <div class="elfsight-app-562cb2ce-5863-4900-acbd-489b0e5a8538"></div>
   @include('footer')
    <!--div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

<!-- JS here -->

		<!-- All JS Custom Plugins Link Here here -->
        <script src="{{asset('./assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="{{asset('./assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('./assets/js/popper.min.js')}}"></script>
        <script src="{{asset('./assets/js/bootstrap.min.js')}}"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="{{asset('./assets/js/jquery.slicknav.min.js')}}"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="{{asset('./assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('./assets/js/slick.min.js')}}"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="{{asset('./assets/js/wow.min.js')}}"></script>
		<script src="{{asset('./assets/js/animated.headline.js')}}"></script>

		<!-- Nice-select, sticky -->
        <script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

        <!-- contact js -->
        <script src="{{asset('./assets/js/contact.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.form.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('./assets/js/mail-script.js')}}"></script>
        <script src="{{asset('./assets/js/jquery.ajaxchimp.min.js')}}"></script>

		<!-- Jquery Plugins, main Jquery -->
        <script src="{{asset('./assets/js/plugins.js')}}"></script>
        <script src="{{asset('./assets/js/main.js')}}"></script>
        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
              new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
            }
            </script>
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
           
</body>
</html>
