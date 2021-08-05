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
</head>

<body>
  
  @include('header')
   <main>
      <div class="slider-area ">
         <div class=" d-flex align-items-center" style="background-image:url({{asset('assets/img/blog/blogdetails.jpg')}}) ;height: 82vh; background-size:100% 100%;">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="hero-cap">
                             <h2>BLOG DETAILS</h2>
                             
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img">
                        <img class="img-fluid" src="{{ asset("storage/".$blog->image) }}" alt="">
                     </div>
                     <div class="blog_details">
                        <h2>{{ $blog->heading}}
                        </h2>
                       
                        <p class="excert text-justify">
                           {{ $blog->details}}
                        </p>
                     </div>
                  </div>
   
                  <!--div class="comment-form">
                     <h4>Leave a Reply</h4>
                     <form class="form-contact comment_form" action="#" id="commentForm">
                        <div class="row">
                           <div class="col-12">
                              <div class="form-group">
                                 <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                    placeholder="Write Comment"></textarea>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                              </div>
                           </div>
                           <div class="col-12">
                              <div class="form-group">
                                 <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                              </div>
                           </div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                        </div>
                     </form>
                  </div-->
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
      <!--================ Blog Area end =================-->

   </main>
   <div class="elfsight-app-562cb2ce-5863-4900-acbd-489b0e5a8538"></div>
 @include('footer')
   <!-- Scroll Up -->
   <!--div id="back-top" >
         <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
   </div>

   <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
      <script src="https://apps.elfsight.com/p/platform.js" defer></script>
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

</body>

</html>