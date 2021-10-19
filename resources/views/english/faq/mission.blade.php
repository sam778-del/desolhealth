@extends('english.layout.inside')

@php
    $service = \App\Service::orderBy('id', 'DESC')->get();
    $partner = \App\Partner::get();
    $News = \DB::table('posts')->orderBy('id', 'DESC')->get();
@endphp

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <div class="sub_header_in">
        <div class="container">
            <h1>Our Mission / Purpose</h1>
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->
    <main>
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
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <!-- ================ home Title content  =================== -->
                <h2>{{ setting('home.Home-Title') }}</h2>
                <!-- ================ Wishlists content  =================== -->
                <p>{!! setting('home.Home-Title-sub') !!}</p>
                <!-- ================ home Title content  =================== -->
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-medal"></i>
                        <!-- ================ home Title content  =================== -->
                        <h3>{{ setting('about.about-title-Customers') }}</h3>
                        <p>{{ setting('about.about-content-Customers') }}</p>
                        <!-- ================ home Title content  =================== -->
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-help2"></i>
                        <!-- ================ home Title content  =================== -->
                        <h3>{{ setting('about.about-title-Support') }}</h3>
                        <p>{{ setting('about.about-content-Support') }}</p>
                        <!-- ================ home Title content  =================== -->
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="box_feat" href="#0">
                        <i class="pe-7s-culture"></i>
                        <!-- ================ home Title content  =================== -->
                        <h3>{{ setting('about.about-title-Locations') }}</h3>
                        <p>{{ setting('about.about-content-Locations') }}</p>
                        <!-- ================ home Title content  =================== -->
                    </a>
                </div>
            </div>
            <!--/row-->
        </div>
        <!-- /container -->
        <!--/bg_color_1-->
    </main>
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
                                    <h5 class="card-title">{{ $new->title, 0, 8 }}</h5>
                                    <p class="card-text">{{ substr($new->description, 0, 80) }}</p>
                                    <a href="{{ route('service_details', $new->title) }}" class="btn btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- ================ news content  =================== -->
                </div>
                <!--/row-->
                <p class="btn_home_align"><a href="{{ url('website/Service') }}" class="btn_1 rounded">View all services</a></p>
            </div>
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
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection