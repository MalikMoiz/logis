<header>
    <!-- Header Start -->
    <div class="header-area" >
        <div class="main-header ">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12">
                                    <div class=" d-flex justify-content-end">
                                        <!-- Main-menu -->
                                        <div class=main-menu p" >
                                            <nav> 
                                                <ul>                                                                                          
                                                    <li><a href="{{url('/contact')}}">Contact</a></li>
                                                    <li><a href="{{url('/blog')}}">Blog</a></li>
                                                    <li><a href="{{route('about')}}">About Us</a></li>
                                                    <li><div id="google_translate_element"></div></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    
                                    </div>
                                </div> 
                            </div>
                        </div>
            <div class="header-bottom  header-sticky"">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="{{route('index')}}"><img src="{{ asset('assets/img/logo/logo.jpeg') }}" alt="" width="200rem" height="70rem"></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation" >                                                                                          
                                            <li><a href="{{url('/air-cargo')}}">Air cargo charter</a></li>
                                            <li><a href="{{url('/group-air')}}">Group air charter</a></li>
                                            <li><a href="{{url('/private-jet')}}">Private jet charter</a></li>
                                            <li><a href="{{url('/flight-support')}}">Flight Support</a></li>
                                         
                                        </ul>
                                    </nav>
                                </div>
                                <!-- Header-btn -->
                                <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="{{url('/quotes')}}" class="btn header-btn">Get A Quote</a>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>