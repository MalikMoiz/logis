<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Silk Cargos-Meeting the Requirements with Coherence and Trustship Since 2002</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">


<style>
    .img-hover img {
    -webkit-transition: all .3s ease; /* Safari and Chrome */
  	-moz-transition: all .3s ease; /* Firefox */
  	-o-transition: all .3s ease; /* IE 9 */
  	-ms-transition: all .3s ease; /* Opera */
  	transition: all .3s ease;
  	position:relative;
}
.img-hover img:hover {
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transform:translateZ(0) scale(1.10); /* Safari and Chrome */
    -moz-transform:scale(1.10); /* Firefox */
    -ms-transform:scale(1.10); /* IE 9 */
    -o-transform:translatZ(0) scale(1.10); /* Opera */
    transform:translatZ(0) scale(1.10);
}


</style>
</head>
<body>
@include('header')
<main>
    <div class="slider-area ">
        <div class=" d-flex align-items-center" style="background-image:url('assets/img/privatejet/sportsevents.jpg') ;height: 82vh; background-size:100% 100%;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>Sports Events</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="our-info-area pt-70 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 text-justify">
                    <h1 style="color:#805BA1;">The perfect flight solutions to sports events around the world</h1>
                   <p>Charter a private jet to sports events around the world with Silk Cargos. Not only do we fly teams, atheltes, and their staff, but many fans also utilize our private jet charter service as a form of luxury travel to matches and tournaments. No matter the sport, no matter the destination, Silk Cargos???s specialist team is on hand to listen to your requirements and provide the perfect flight solution.</p>
                   <p>Whether it???s attending a single Formula 1 race, or following a football team on their European tour, we can arrange a charter service offering maximum convenience and flexibility. Private jet charter gives fans the opportunity to travel at times that suit them, to and from the most convenient airports.</p>

                </div>
                <div class="col-lg-4 col-md-4 col-sm-12" style="margin-top: -20rem">
                   <div class="card">
                    <div class="p-5">
                        <h1 class="p-2" style="color:#805BA1;">We provide specialist solutions for:</h1>
                       <div><span class="p-2"><i class="fas fa-check-circle"></i></span>Private jet charters for athletes</div>
                       <div><span class="p-2"><i class="fas fa-check-circle"></i></span>Executive charters</div>
                       <div><span class="p-2"><i class="fas fa-check-circle"></i></span>Sports staff charters</div>
                       <div><span class="p-2"><i class="fas fa-check-circle"></i></span>Group air charters for global fans</div>
                    </div>

                       <div class="header-right-btn d-none d-lg-block ml-20 p-5">
                        <a href="{{url('/quotes')}}" class="btn header-btn">Get A Quote</a>
                    </div>

                   </div>
                </div>

            </div>
        </div>
    </div>

   @include('quoteform')

    <div class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-70">
                        <span style="color:#805BA1;">Our Recent news</span>
                        <h2 style="color:#805BA1;">Company Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blogs)
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="{{ asset("storage/".$blogs->image) }}" alt="" width="100px" height="300px">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>{{date('d', strtotime($blogs->date));}}</span>
                                <p>{{date('F', strtotime($blogs->date))}}</p>
                            </div>
                            <div class="blog-cap">

                                <h3><a href="{{ route('blog.details', ['blog' => $blogs])}}">{{$blogs->heading}}</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
               @endforeach


            </div>
        </div>
    </div>
    <!-- Blog Area End -->
</main>
@include('footer')
<!-- Scroll Up -->
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
        <script src="{{asset('./assets/js/jquery.magnific-popup.js')}}"></script>

		<!-- Nice-select, sticky -->
        <script src="{{asset('./assets/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('./assets/js/jquery.sticky.js')}}"></script>

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
            <div class="elfsight-app-562cb2ce-5863-4900-acbd-489b0e5a8538"></div>


</body>
</html>
