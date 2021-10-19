@extends('english.layout.inside')

@php
    $partner = \App\Partner::get();
    $News = \DB::table('posts')->orderBy('id', 'DESC')->get();
@endphp

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <div class="sub_header_in">
        <div class="container">
            <h1>Our Services</h1>
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->

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
                    @foreach($service as $new)
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