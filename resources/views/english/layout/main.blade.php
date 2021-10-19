<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ===================================== Meta site ================================================ -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <!-- ====== Laravel description site edit delete from admin panel ================== -->
    <meta name="description" content="{!! setting('site.description')  !!}">
    <!-- ====== Laravel author site edit delete from admin panel ====================== -->
    <meta name="author" content="{!! setting('site.author_title') !!}">
    <!-- ====== Laravel keywords site edit delete from admin panel ================== -->
    <meta name="keywords" content="{!! setting('site.keywords') !!}">
    <!-- ====== Laravel robots site edit delete from admin panel ================== -->
    <meta name="robots" content="{!! setting('site.robots') !!}">
     <!-- ====== Laravel favicon icon ================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/images/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/images/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/images/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/images/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/images/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/images/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/images/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/images/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/images/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/images/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- ====== Laravel favicon icon================== -->
    <!-- ====== Laravel title site edit delete from admin panel ================== -->
    <title>{{ setting('site.title') }}</title>
    <!-- ============================== GOOGLE WEB FONT ========================== -->
    <!-- ======================= Revolution Slider ============================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('assets/js/common_scripts.js') }}"></script>
    <link  href="{{ asset('assets/revolution-slider/css/settings.css') }}" rel="stylesheet" type="text/css"/>
    <link  href="{{ asset('assets/revolution-slider/css/layers.css') }}" rel="stylesheet" type="text/css"/>
    <link  href="{{ asset('assets/revolution-slider/css/navigation.css') }}" rel="stylesheet" type="text/css"/>    
    <script src="{{ asset('assets/revolution-slider/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revolution-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- ======================= Revolution Slider ============================= -->
    <!-- =============================== BASE CSS ================ -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/toast.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/mobile.css') }}" media="all" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}" media="all" />
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .whatsapp-float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:40px;
            left: 40px;
            background-color:#a7ccb4;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #a7ccb4;
            z-index:100;
        }

        h2{
            text-align:center;
            padding: 20px;
        }
        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 100%;
        }

        .slick-slider
        {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
                    user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
                touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list
        {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .slick-list:focus
        {
            outline: none;
        }
        .slick-list.dragging
        {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list
        {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                -o-transform: translate3d(0, 0, 0);
                    transform: translate3d(0, 0, 0);
        }

        .slick-track
        {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }
        .slick-track:before,
        .slick-track:after
        {
            display: table;
            content: '';
        }
        .slick-track:after
        {
            clear: both;
        }
        .slick-loading .slick-track
        {
            visibility: hidden;
        }

        .slick-slide
        {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }
        [dir='rtl'] .slick-slide
        {
            float: right;
        }
        .slick-slide img
        {
            display: block;
        }
        .slick-slide.slick-loading img
        {
            display: none;
        }
        .slick-slide.dragging img
        {
            pointer-events: none;
        }
        .slick-initialized .slick-slide
        {
            display: block;
        }
        .slick-loading .slick-slide
        {
            visibility: hidden;
        }
        .slick-vertical .slick-slide
        {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }
        .slick-arrow.slick-hidden {
            display: none;
        }

        .my-float{
            margin-top:16px;
        }
    </style>
    <style>
        @import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800);
        .testimonial2 {
            font-family: "Montserrat", sans-serif;
            color: #8d97ad;
            font-weight: 300;
        }

        .testimonial2 h1,
        .testimonial2 h2,
        .testimonial2 h3,
        .testimonial2 h4,
        .testimonial2 h5,
        .testimonial2 h6 {
        color: #3e4555;
        }

        .testimonial2 h5 {
            line-height: 22px;
            font-size: 18px;
                font-weight: 400;
        }

        .testimonial2 .font-weight-medium {
        font-weight: 500;
        }

        .testimonial2 .bg-light {
        background-color: #f4f8fa !important;
        }

        .testimonial2 .subtitle {
        color: #8d97ad;
        line-height: 24px;
        }

        .testimonial2 .testi2 .image-thumb {
            background: url(https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/testimonial/greadint-bg.png) no-repeat top center;
            text-align: center;
            padding: 15% 5%;
        }

        .testimonial2 .testi2 .image-thumb img {
            width: 200px;
        }

        .testimonial2 .testi2 .owl-dots {
        display: inline-block;
        position: relative;
        top: -100px;
        }

        .testimonial2 .testi2 .owl-dots .owl-dot {
        border-radius: 100%;
        width: 70px;
        height: 70px;
        background-size: cover;
        margin-right: 10px;
        opacity: 0.4;
        cursor: pointer;
        }

        .testimonial2 .testi2 .owl-dots .owl-dot span {
        display: none;
        }

        .testimonial2 .testi2 .owl-dots .owl-dot.active,
        .testimonial2 .testi2 .owl-dots .owl-dot:hover {
        opacity: 1;
        }

        @media (max-width: 767px) {
        .testimonial2 .testi2 .owl-dots {
            top: 0px;
        }
        }

        .testimonial2 .btn-md {
            padding: 18px 0px;
            width: 60px;
            height: 60px;
            font-size: 20px;
        }

        .testimonial2 .btn-danger {
            background: #ff4d7e !important;
            border: 1px solid #ff4d7e !important;
        }
    </style>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/610d1faf649e0a0a5ccfdad2/1fcdk7if5';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
<!--End of Tawk.to Script-->
    <!-- ================== Modernizr ============================ -->
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>

</head>

<body>
        
    <div id="page">
    @desktop
    <header class="header_in is_sticky ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-12">
                        <div id="logo">
                            <a href="{{ url('/') }}">
                                <!-- ================== logo sticky ============================ -->
                                <img src="{{ asset(Storage::url('logo/logo.png')) }}" height="55" alt="" class="logo_sticky">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-12">
                       <!-- ================== guest ============================ -->
                       @guest
                        <ul id="top_menu">
                            <li><a href="{{ route('login') }}" class="btn_add">{{ __('Login') }}</a></li>
                            @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="btn_add">{{ __('Register') }}</a></li>
                            @endif
                        </ul>
                        @else
                        <!-- ================== Patients ============================ -->
                        @if(Auth::user()->role_id == null) 
                         <ul id="top_menu">
                            <li><a href="{{ url('Messages') }}/{{ Auth::user()->name }}" class="btn_add">Messages</a></li>
                            <li><a href="{{ url('Patients') }}/{{ Auth::user()->name }}"  class="btn_add">{{ Auth::user()->name }}</a></li>
                         </ul>
                         <!-- ================== Patients ============================ -->
                         @elseif(Auth::user()->role_id == '2')
                         <ul id="top_menu">
                            <li><a href="{{ url('Messages') }}/{{ Auth::user()->name }}" class="btn_add">Messages</a></li>
                            <li><a href="{{ url('Patients') }}/{{ Auth::user()->name }}"  class="btn_add">{{ Auth::user()->name }}</a></li>
                         </ul>
                         <!-- ================== Patients ============================ -->
                         @elseif(Auth::user()->role_id == '1')
                         <ul id="top_menu">
                            <li><a href="{{ url('admin') }}"  class="btn_add">{{ Auth::user()->name }}</a></li>
                        </ul>
                        <!-- ================== Doctors ============================ -->
                        @elseif(Auth::user()->role_id == '3')
                         <ul id="top_menu">
                            <li><a href="{{ url('Messages') }}/{{ Auth::user()->name }}" class="btn_add">Messages</a></li>
                            <li><a href="{{ url('Doctors') }}/{{ Auth::user()->name }}"  class="btn_add">{{ Auth::user()->name }}</a></li>
                        </ul>
                        @endif
                        <!-- ================== Doctors ============================ -->
                        @endguest
                        <nav id="menu" class="main-menu">
                            <!-- /top_menu =========== -->
                            {{ menu('Top-menu') }}
                            <!-- /top_menu =========== -->
                        </nav>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->     
        </header>
    @elsedesktop
    <nav class="navbar">
        <div class="container">
            <div class="flex">
                <a href="{{ url('/') }}" class="navbar-brand flex vcenter"><img data-aos="fade-right"
                        class="logo" src="{{ asset(Storage::url('logo/logo.png')) }}" alt="{{ env('APP_NAME') }}" /></a>
                <ul class="navbar-menu">

                </ul>
            </div>
            <div class="level-right">
                <!-- your list menu here -->
                <div class="navbar-menu">
                    @guest
                        <a href="{{ route('register') }}" data-aos="fade-left" data-aos-delay="400" class="btn_add">
                            Get Started
                        </a>
                        <a href="{{ route('login') }}" data-aos="fade-left" data-aos-delay="400" class="btn_add">
                            Login
                        </a>
                    @endguest
                </div>
                <div class="mobile-overlay">
                    <div class="mobile-overlay-bg"></div>
                    <div class="mobile-menu">
                        <ul style="font-family: 'Courier New', Courier, monospace">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('About') }}">About Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('website/Service') }}">Services</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/News') }}">News/Blogs</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('/Contactus') }}">Contact Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ url('advice/hub') }}">Advice Hubs</a>
                            </li>
                        </ul>
                    </div>
    
                </div>
                <div class="flex">
                    <div class="menu-toggle-icon">
                        <div class="menu-toggle">
                            <div class="menu">
                                <input type="checkbox" />
                                <div class="line-menu"></div>
                                <div class="line-menu"></div>
                                <div class="line-menu"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    @enddesktop
        <!-- /header --> 
    <!-- ============================================================= Header End ============================================================= -->
    @yield('content')
    <!-- ============================================================= Footer Start =========================================================== -->
    <footer class="plus_border">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                <a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                        <h3>Useful Links</h3>
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                    </a>
                    <div class="collapse show" id="collapse_ft_1">
                        <ul class="links">
                            <!-- ================== menu Quick Links  ============================ -->
                            {{ menu('menu-Quick-Links') }}
                            <!-- ================== menu Quick Links  ============================ -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                <a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                        <h3>Hospital Activities</h3>
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                    </a>
                    <div class="collapse show" id="collapse_ft_2">
                        <ul class="links">
                           <!-- ================== menu Quick Links  ============================ -->
                           {{ menu('menu-Hospital-Activities') }}
                           <!-- ================== menu Quick Links  ============================ -->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
                        <h3>Contacts</h3>
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                    </a>
                    <div class="collapse show" id="collapse_ft_3">
                        <ul class="contacts">
                            <!-- ================== contact Quick Links  ============================ -->
                            <li><i class="ti-home"></i>{{ setting('contact.Address') }}<br></li>
                            <!-- ================== contact Quick Links  ============================ -->
                            <li><i class="ti-headphone-alt"></i>{{ setting('contact.Questions-phone') }}</li>
                            <!-- ================== contact Quick Links  ============================ -->
                            <li><i class="ti-email"></i>
                                <!-- ================== contact Quick Links  ============================ -->
                                <a href="mailto:{{ setting('contact.Questions-email') }}">{{ setting('contact.Questions-email') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                
                    <div class="collapse show" id="collapse_ft_4">
                        
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                <!-- ================== media Links  ============================ -->
                                <li><a href="{{ setting('media.Facebook')  }}"><i class="ti-facebook"></i></a></li>
                                <li><a href="{{ setting('media.Twitter')   }}"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="{{ setting('media.Google')    }}"><i class="ti-google"></i></a></li>
                                <li><a href="{{ setting('media.Instagram') }}"><i class="ti-instagram"></i></a></li>
                                <!-- ================== media Links  ============================ -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row">
                <div class="col-lg-8">
                    <ul id="footer-selector">
                        {{-- <li >
                            <!-- ================== English Links  ============================ -->
                            <div class="styled-select" id="lang-selector">
                                <a class="add_left_5" href="{{ URL::to('English')}}">English</a>
                            </div>
                            <!-- ================== English Links  ============================ -->
                        </li>
                         <li>
                            <!-- ================== German Links  ============================ -->
                            <div class="styled-select" id="lang-selector">
                                <a class="add_left_5" href="{{ URL::to('German')}}">German</a>
                            </div>
                            <!-- ================== English Links  ============================ -->
                        </li>
                         <li>
                            <!-- ================== Arabic Links  ============================ -->
                            <div class="styled-select" id="lang-selector">
                                <a class="add_left_5" href="{{ URL::to('arabic')}}">Arabic</a>
                            </div>
                            <!-- ================== English Links  ============================ -->
                        </li> --}}
                        <li>
                            @guest
                            @else
                            <!-- ================== Logout Links  ============================ -->
                            <div class="styled-select" id="currency-selector" style="padding-left: 10px;">
                                <a href="{{ route('logout') }}"  onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                            <!-- ================== Logout Links  ============================ -->
                            @endguest
                        </li>
                        <!-- ================== site Payment button ============================ -->
                    </ul>
                </div>
                <div class="col-lg-4">
                    <ul id="additional_links">
                        <!-- ================== site Terms ============================ -->
                        <li><a href="{{ url('Termscondition') }}">Terms and conditions</a></li>
                        <!-- ================== site Terms ============================ -->
                        <li><span>Copyright @ {{ date('Y') }} {{ env('APP_NAME') }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->
    </div>
    <!-- page -->
    
    <div id="toTop"></div><!-- Back to top button -->
    <a href="https://api.whatsapp.com/send?phone=2349055605107&text=Hello {{ env('APP_NAME') }}." class="whatsapp-float" target="_blank">
        <i class='bx bxl-whatsapp my-float' ></i>
    </a>
    <!-- ================ common_scripts ============= -->
    <script type="text/javascript" src="{{ asset('assets/js/functions.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/css/mobile.js') }}"></script>
    <script src="https://unpkg.com/boxicons@2.0.9/dist/boxicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="{{ asset('assets/js/toast.min.js') }}"></script>
    <script type="text/javascript">
        @if(Session::has('error'))
            toastr.error("{!! session('error') !!}");
        @elseif(Session::has('success'))
            toastr.success("{!! session('success') !!}");
        @elseif(Session::has('info'))
            toastr.info("{!! session('info') !!}");
        @endif
    </script>
    <!-- ================ header video ============= -->
    <script>
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    <script>
        $('.testi2').owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        dots: true,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
            items: 1,
            nav: false
            },
            1170: {
            items: 1
            }
        }
        });
    </script>
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script> 
    <script type="text/javascript" src="https://gsolutionsnetwork.info/front/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>
</html>
