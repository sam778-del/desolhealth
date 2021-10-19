@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <div class="sub_header_in">
        <div class="container">
            <h1>About Hospital Directory</h1>
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->
    <main>
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
        <div class="bg_color_1">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <!-- ================ home Title content  =================== -->
                    <h2>{{ setting('site.title') }}</h2>
                    <!-- ================ home Title content  =================== -->
                    <p>{{ setting('site.description') }}</p>
                    <!-- ================ home Title content  =================== -->
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 wow" data-wow-offset="150">
                        <figure class="block-reveal">
                            <div class="block-horizzontal"></div>
                            <!-- ================ home Title content  =================== -->
                            <img src="{{ asset(Voyager::image(setting('about.about-image'))) }}" class="img-fluid" alt="">
                            <!-- ================ home Title content  =================== -->
                        </figure>
                    </div>
                    <div class="col-lg-5">
                        <!-- ================ home Title content  =================== -->
                        <p>{{ setting('employe.Career-content') }}</p>
                        <!-- ================ home Title content  =================== -->
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </div>
        <!--/bg_color_1-->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection