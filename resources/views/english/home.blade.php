@extends('english.layout.main')

@php
    $service = \App\Service::orderBy('title', 'ASC')->get();
    $partner = \App\Partner::get();
    $testimony = \App\Testimony::orderBy('id', 'DESC')->get();
@endphp

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<main class="pattern">
        <section class="header-video">
            {{-- <div id="hero_video">
                <div class="wrapper">
                <div class="container">
                    <img src="{{ asset('clipart/clip4.png') }}"  alt="{{ env('APP_NAME') }}" height="180"/>
                    <!-- ================ home Title content  =================== -->
                    <h3>{{ setting('home.Home-Title') }}</h3>
                    <!-- ================ home Title content  =================== -->
                    <p>
                        Your medical needs are just within reach. <br> You can start by exploring available services that we offer.
                    </p>
                     <!-- ==================   start Form search =======================================================  -->             
                     <a href="#appointmentForm" class="btn btn-primary btn-lg"><i class="pe-7s-note2"></i> Book An Appointment</a>
                     <!-- ==================   End Form search =========================================================  -->
                </div>
            </div>
            </div>
            <!-- ================ header-video--media  =================== -->
            <img src="" alt="header-video" class="header-video--media" data-video-src="{{ asset('clipart/video.mp4') }}" 
            data-teaser-source="{{ asset('clipart/video.mp4') }}" data-provider="" data-video-width="1920" data-video-height="1200"> --}}
            <!-- ================ header-video--media  =================== -->
            <div class="rev_slider_wrapper">
                <div class="rev_slider" data-version="5.0">
                    <ul>                        
                        <!-- SLIDE 2 -->
                        <li data-index="rs-2" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="{{ asset('clipart/slide.jpg') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description="">
                            <!-- MAIN IMAGE --> 
                            <img src="{{ asset('clipart/slide.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="5" data-no-retina> 
                            <!-- LAYERS -->
    
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
                            id="rs-2-layer-2"
    
                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['-20']"
                            data-fontsize="['28']"
                            data-lineheight="['70']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">{{ setting('home.Home-Title') }}
                            </div>
    
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption tp-resizeme text-white text-center" 
                            id="rs-2-layer-3"
    
                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['50']"
                            data-fontsize="['16']"
                            data-lineheight="['28']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1400" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Your medical needs are just within reach. <br> You can start by exploring available services that we offer.
                            </div>
    
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" 
                            id="rs-2-layer-4"
    
                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['115']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1400" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a href="#appointmentForm" class="btn btn-primary btn-lg"><i class="pe-7s-note2"></i> Book An Appointment</a>
                            </div>
                        </li>

                        <li data-index="rs-1" data-transition="random" data-slotamount="7"  data-easein="default" data-easeout="default" data-masterspeed="1000"  data-thumb="{{ asset('clipart/bitola.jpg') }}"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Intro" data-description=""> 
                            <!-- MAIN IMAGE --> 
                            <img src="{{ asset('clipart/bitola.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="5" data-no-retina> 
                            <!-- LAYERS --> 
                             <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway"
                            id="rs-1-layer-1"
    
                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['-20']"
                            data-fontsize="['28']"
                            data-lineheight="['70']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1000" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">We give the best services at affordable prices
                            </div>
    
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption tp-resizeme text-uppercase text-white font-raleway bg-theme-colored-transparent border-left-theme-color-2-6px pl-20 pr-20"
                            id="rs-1-layer-2"
    
                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['50']"
                            data-fontsize="['16']"
                            data-lineheight="['28']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;s:500"
                            data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
                            data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
                            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1400" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">Customer Satisfaction,Reliability Innovation, Responsiveness And Quality
                            </div>
    
                            <!-- LAYER NR. 4 -->
                            <div class="tp-caption tp-resizeme" 
                            id="rs-1-layer-4"
    
                            data-x="['center']"
                            data-hoffset="['0']"
                            data-y="['middle']"
                            data-voffset="['115']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                            data-start="1400" 
                            data-splitin="none" 
                            data-splitout="none" 
                            data-responsive_offset="on"
                            style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a href="{{ route('register') }}" class="btn btn-primary btn-lg"> Get Started</a>
                            </div>
                        </li>    
                    </ul>
                </div><!-- end .rev_slider -->
            </div><!-- end .rev_slider_wrapper -->
            <script>
                $(document).ready(function(e) {
                  $(".rev_slider").revolution({
                    sliderType:"standard",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                      arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                        left: {
                          h_align:"left",
                          v_align:"center",
                          h_offset:30,
                          v_offset:0
                        },
                        right: {
                          h_align:"right",
                          v_align:"center",
                          h_offset:30,
                          v_offset:0
                        }
                      },
                      bullets: {
                        enable:true,
                        hide_onmobile:true,
                        hide_under:600,
                        style:"metis",
                        hide_onleave:true,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"horizontal",
                        h_align:"center",
                        v_align:"bottom",
                        h_offset:0,
                        v_offset:30,
                        space:5,
                        tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title"></span>'
                      }
                    },
                    responsiveLevels: [1240, 1024, 778],
                    visibilityLevels: [1240, 1024, 778],
                    gridwidth: [1170, 1024, 778, 480],
                    gridheight: [650, 768, 960, 720],
                    lazyType: "none",
                    parallax: {
                        origo: "slidercenter",
                        speed: 1000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                        type: "scroll"
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "on",
                    stopAfterLoops: 0,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                  });
                });
            </script>
        </section>
        <!-- /header-video -->
        <section>
            <div class="container">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <!-- ================ home Title content  =================== -->
                        <h2>OUR MISSION/PURPOSE</h2>
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-5 wow" data-wow-offset="50">
                            <img src="{{ asset('clipart/clinic.png') }}" class="img-fluid" alt="{{ env('APP_NAME') }}">
                        </div>
                        <div class="col-lg-7" style="font-size: 18px">
                            <!-- ================ home Title content  =================== -->
                                <p> Desol Health is a company created with the sole vision to be the core providers of medical services of the highest quality in Nigeria.</p>  <p>Our mission is to raise the standard of medical care, practice and delivery in Nigeria.</p> <p>We strongly believe we can fill the obvious gap in medical service delivery.</p>
                            <!-- ================ home Title content  =================== -->
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <!--/container-->
            </div>
        </section>

        <section>
            <div class="container">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <!-- ================ home Title content  =================== -->
                        <h2>OUR SERVICES</h2>
                        <p style="font-size: 15px">Desol Health desires that you remain strong and we plan to exceed your expectations by getting you the right and bespoke medical services.</p>
                    </div>
                    <div class="row">
                        <!-- ================ news content  =================== -->
                        @foreach($service->take(6) as $new)
                            <div class="col-lg-4 col-md-6">
                                <div class="card text-center" style="width: auto; height: auto;">
                                    <img src="{{ asset('service'.'/'.$new->image) }}" height="200" alt="{{ env('APP_NAME') }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $new->title }}</h5>
                                        <p class="card-text">{{ substr($new->description, 0, 60) }}</p>
                                        <a href="{{ route('service_details', $new->title) }}" class="btn btn-outline-primary">Read More</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- ================ news content  =================== -->
                    </div>
                    <!--/row-->
                </div>
                <p class="btn_home_align"><a href="{{ url('website/Service') }}" class="btn_1 rounded">View all services</a></p>
                <!--/container-->
            </div>
        </section>

        <section>
            <div class="bg_color_1">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <!-- ================ home Title content  =================== -->
                        <h2>OUR PARTNERS</h2>
                    </div>
                    <section class="customer-logos slider">
                        @foreach ($partner as $item)
                            <div class="slide"><img src="{{ asset('partner'.'/'.$item->image) }}"></div>
                        @endforeach
                     </section>
                    <!--/row-->
                </div>
                <!--/container-->
            </div>
        </section>
        <!-- /container -->
        
            </div>
            <!-- /wrapper -->
        </div>
        <!--/call_section-->
        <main>

        <section>
            <div class="testimonial2 bg_color_1 py-5">
                <div class="container">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <!-- ================ home Title content  =================== -->
                        <h2>Testimonies</h2>
                    </div>
                  <div class="owl-carousel owl-theme testi2 mt-4">
                      @foreach ($testimony as $item)
                        <div class="item">
                            <div class="row position-relative">
                            <div class="col-lg-6 col-md-6 align-self-center">
                                <button class="btn rounded-circle btn-danger btn-md"><i class="icon-bubble"></i></button>
                                <h4 class="my-3">Patient Reviews</h4>
                                <p>
                                    {{ $item->description }}
                                </p>
                                <h5 class="mt-4">{{ $item->title }}</h5>
                                <h6 class="subtitle font-weight-normal">{{ $item->position }}</h6>
                            </div>
                            <div class="col-lg-6 col-md-6 image-thumb d-none d-md-block">
                                <img src="{{ asset('testimony'.'/'.$item->image) }}" alt="{{ $item->position }}" class="rounded-circle img-fluid" />
                            </div>
                            </div>
                        </div>
                      @endforeach
                  </div>
                </div>
            </div>
        </section>

        <section>
            <div class="call_section">
                <div class="wrapper">
                    <div class="container margin_60_35">
                <div class="main_title_2">
                    <span><em></em></span>
                    <!-- ================ services content  =================== -->
                    <h2>How It Works</h2>
                    <!-- ================ services content  =================== -->
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <a class="box_topic" href="#0">
                            <span><i class="pe-7s-airplay"></i></span>
                            <h3>Lores Pium</h3>
                            <p>Payment and booking can be made online using Paypal in less than a minute.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_topic" href="#0">
                            <i class="pe-7s-users"></i>
                            <h3>Lores Pium</h3>
                            <p>You can make a special account with all the properties you want.</p>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <a class="box_topic" href="#0">
                            <i class="pe-7s-headphones"></i>
                            <h3>Lores Pium</h3>
                            <p>Customer service is available and we will respond to you in less than five minutes.</p>
                        </a>
                    </div>
                </div>
                <!--/row-->
                
            </div>
                </div>
                <!-- /wrapper -->
            </div>
        </section>

        <div class="container margin_60">
            <div class="row" id="appointmentForm">
                <div class="col-lg-6 col-md-6">
                    <div class="step first">
                        <h3>Appointment Form</h3>
                    <ul class="nav nav-tabs" id="tab_checkout" role="tablist">
                      <li class="nav-item">
        <a class="nav-link active show" id="home-tab" data-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">Register</a>
                      </li>
                      <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tab_2" role="tab" aria-controls="tab_2" aria-selected="false">Appointment</a>
                      </li>
                    </ul>
                    <div class="tab-content checkout">
                        <div class="tab-pane fade active show" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                            <!-- ================ register content  =================== -->
                            {{ Form::open(['route' => ['register'], 'method' => 'POST']) }}
                        
                            @csrf
                            <div class="form-group">
                                <input id="name" placeholder="Name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required  >
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                            <input id="email" placeholder="E-Mail Address" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                            <input id="password" placeholder="Password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div> 
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <!-- /other_addr_c -->
                            <input type="submit" class="btn_1 full-width" value="Register">
                           {{ Form::close() }}
                           <!-- ================ register content  =================== -->
                        </div>
                        <!-- /tab_1 -->
                      <div class="tab-pane fade" id="tab_2" role="tabpanel" aria-labelledby="tab_2">
                         <!-- ================ Appointment content  =================== -->
                           {{ Form::open(['route' => ['Appointment.store'], 'method' => 'POST']) }}
                           {{ csrf_field() }}
                          <div class="form-group">
                                <input name="Patient_ID" type="text" class="form-control" placeholder="Patient ID">
                          </div>
                          <!-- /row -->
                            <div class="row no-gutters">
                                <div class="col-md-12 form-group">
                                    <div class="custom-select-form">
                                        <select class="wide add_bottom_15" name="Department_id" id="DepartmentName" style="display: none;">
                                            <option value="" selected="">Select Department</option>
                                            @foreach($Departments_select as $Department_select)
                                             <option value="{{ $Department_select->id }}">{{ $Department_select->Department_Name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                          <!-- /row -->
                          <!-- /row -->
                            <div class="row no-gutters">
                                <div class="col-md-12 form-group">
                                    <div class="custom-select-form">
                                        <select class="wide add_bottom_15" name="Doctor_id" id="DoctorName" style="display: none;">
                                            <option selected="">Select Doctor</option>
                                            @foreach($Doctors_select as $Doctor_select)
                                             <option value="{{ $Doctor_select->id }}">{{ $Doctor_select->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                          <!-- /row -->
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Appointment Date *" name="Appointment_Date">
                            </div>
                            <div class="form-group">
                                <div class="hideShowPassword-wrapper" style="position: relative; display: block; vertical-align: baseline; margin: 0px;"><input type="password" class="form-control hideShowPassword-field" placeholder="Serial No *" name="Serial" id="password_in" style="margin: 0px; padding-right: 0px;"><button type="button" role="button" aria-label="Show Password" title="Show Password" tabindex="0" class="my-toggle hideShowPassword-toggle-show" style="position: absolute; right: 0px; top: 50%; margin-top: -15px; display: none;" aria-pressed="false">Show</button></div>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Problem" name="Problem">
                            </div>
                            <input type="submit" class="btn_1 full-width" value="Send It">
                            {{ Form::close() }}
                             <!-- ================ Appointment content  =================== -->
                        </div>
                        <!-- /tab_2 -->
                    </div>
                    </div>
                    <!-- /step -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="step last">
                        <h3>Request Ambulance</h3>
                    <div class="box_general summary">
                        <!-- ================ Ambulance content  =================== -->
                        {{ Form::open(['route' => ['Ambulance.store'], 'method' => 'POST']) }}
                        {{ csrf_field() }}
                        <div class="form-group">
                                <input type="text" name="Telephone" class="form-control" placeholder="Telephone">
                            </div>
                        <textarea name="Detailed_Address" class="form-control add_bottom_15" placeholder="Detailed Address.." style="height: 100px;">
                        </textarea>
                        <input type="submit" class="btn_1 full-width cart" value="CONFIRM">
                        {{ Form::close() }}
                        <!-- ================ Ambulance content  =================== -->
                    </div>
                    <!-- /box_general -->
                    </div>
                    <!-- /step -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <!-- ================ news content  =================== -->
                <h2>{{ setting('news.news-title') }}</h2>
                <!-- ================ news content  =================== -->
                <p>{{ setting('news.news-Content') }}</p>
                <!-- ================ news content  =================== -->
            </div>
            <div class="row">
                <!-- ================ news content  =================== -->
                @foreach(\App\Blog::orderBy('id', 'DESC')->take(4)->get(); as $new)
                <div class="col-lg-6">
                    <!-- ================ news content  =================== -->
                    <a class="box_news" href="{{ url('News')}}/{{ $new->title }}">
                        <!-- ================ news content  =================== -->
                        <figure><img src="{!! asset('blog'.'/'.$new->image) !!}" alt="{{ $new->title }}"></figure>
                        <ul>
                            <li></li>
                            <!-- ================ news content  =================== -->
                            <li>{{ date('M j, Y', strtotime($new->created_at)) }}</li>
                        </ul>
                        <!-- ================ news content  =================== -->
                        <h4>{{ $new->title }}</h4>
                        <!-- ================ news content  =================== -->
                        <p>{!! substr($new->description, 0, 80)!!}</p>
                    </a>
                </div>
                <!-- /box_news -->
                @endforeach
                <!-- ================ news content  =================== -->
            </div>
            <!-- /row -->
            <p class="btn_home_align"><a href="{{ url('News')}}" class="btn_1 rounded">View all news</a></p>
        </div>
        <!-- /container -->
    </main>
    <!-- /main -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection