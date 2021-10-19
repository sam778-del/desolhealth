@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<main>
    <section class="hero_single version_4">
        <div class="wrapper">
            <div class="container">
                <!-- ================ Activities content  =================== -->
                <h3>{{ setting('activities.Activities-title') }}</h3>
                <!-- ================ Activities content  =================== -->
                <p>{{ setting('activities.Activities-content') }}</p>
                <!-- ================ Activities content  =================== -->
                <ul class="counter">
                    <!-- ================ Reports content  =================== -->
                    <li><strong>{{ count($Reports) }}</strong> Report</li>
                    <!-- ================ Users content  =================== -->
                    <li><strong>{{ count($Users) }}</strong> Active users</li>
                    <!-- ================ Users content  =================== -->
                </ul>
            </div>
        </div>
    </section>
    <!-- /hero_single -->   
    <div class="container margin_60_35">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Birth Report</h2>
            <p>Every day a new baby is born in a hospital.</p>
        </div>
        <div class="row">
          <!-- ================ Users content  =================== -->
            @foreach($Births as $Birth)
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="strip grid">
                    <figure>
                      <!-- ================ Birth content  =================== -->
                        <a href="{{ url('Births') }}/{{ $Birth->slug }}">
                          <!-- ================ Birth content  =================== -->
                            <img src="{{ asset(Voyager::image($Birth->Birth_image)) }}" class="img-fluid">
                            <div class="read_more"><span>Read more</span></div>
                        </a>
                        <!-- ================ Birth content  =================== -->
                        <small>Patient ID {{ $Birth->Patient_ID }}</small>
                    </figure>
                    <div class="wrapper">
                      <!-- ================ Birth content  =================== -->
                        <h3><a href="{{ url('Births') }}/{{ $Birth->slug }}">{{ $Birth->Birth_name }}</a></h3>
                        <!-- ================ Birth content  =================== -->
                        <small>{{ date('M j Y', strtotime($Birth->created_at)) }}</small>
                        <!-- ================ Birth content  =================== -->
                        <p>{!! substr($Birth->Birth_content, 0, 180)!!}.</p>
                        <!-- ================ Birth content  =================== -->
                    </div>
                </div>
            </div>
            <!-- /strip grid -->
            @endforeach
            <!-- ================ Birth content  =================== -->
        </div>
        <!-- /row -->
        <p class="text-center"><a href="{{ url('Births') }}" class="btn_1 rounded add_top_30">Show more</a></p>
        
    </div>
    <!-- /container -->
    <div class="bg_color_1">
        <div class="container margin_80_55">
            <div class="main_title_2">
                <span><em></em></span>
                <h2>Operation Report</h2>
                <p>Every day a new Operation in a hospital.</p>
            </div>
            <div class="row">
                <!-- ================ Operations content  =================== -->
                @foreach($Operations as $Operation)
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="strip grid">
                        <figure>
                          <!-- ================ Operations content  =================== -->
                            <a href="{{ url('Operations') }}/{{ $Operation->Operation_slug }}">
                              <!-- ================ Operations content  =================== -->
                                <img src="{{ asset(Voyager::image($Operation->Operation_image)) }}" class="img-fluid">
                                <div class="read_more"><span>Read more</span></div></a>
                                <!-- ================ Operations content  =================== -->
                                <small>Patient ID {{ $Operation->Patient_ID }}</small>
                            </figure>
                            <div class="wrapper">
                                <!-- ================ Operations content  =================== -->
                                <h3><a href="{{ url('Operations') }}/{{ $Operation->Operation_slug }}">{!! substr($Operation->Operation_Title, 0, 25) !!}</a></h3>
                                <!-- ================ Operations content  =================== -->
                                <small>{{ date('M j, Y', strtotime($Operation->Date)) }}</small>
                                <!-- ================ Operations content  =================== -->
                                <p>{!! substr($Operation->Operation_Description, 0, 50) !!}</p>
                                <!-- ================ Operations content  =================== -->
                            </div>
                            <ul>
                              <!-- ================ Operations content  =================== -->
                               @if($Operation->active == 1)
                               <li><span class="loc_open">Active</span></li>
                               @else
                               <li><span class="loc_closed">Inactive</span></li>
                               @endif
                               <li><div class="score"></div></li>
                               <!-- ================ Operations content  =================== -->
                           </ul>
                       </div>
                   </div>
                   @endforeach
                   <!-- ================ Operations content  =================== -->
                   <!-- /strip grid -->
               </div>
               <!-- /row -->
               <p class="text-center"><a href="{{ url('Operations') }}" class="btn_1 rounded add_top_30">Show more</a></p>
           </div>
           <!-- /container --> 
       </div>
       <!-- /bg_color_1 -->
       <div class="container margin_60_35">
        <div class="main_title_2">
            <span><em></em></span>
            <h2>Medicine  Report</h2>
            <p>Every day a new Medicine in a hospital.</p>
        </div>
        <div class="row">
            <!-- ================ Medicines content  =================== -->
            @foreach($Medicines as $Medicine)
            <div class="col-xl-4 col-lg-4 col-md-4">
                <div class="strip grid">
                    <figure>
                        <!--   ================  Form Wishlist store Section ================  -->
                        {{ Form::open(['route' => ['Wishlists.store'],'style' => 'display: inline-block', 'method' => 'POST']) }}
                        {{ Form::hidden('Medicine_id', $Medicine->id) }}
                        {{ csrf_field() }}
                        <button type="submit" class="wish_bt"><i class="icon-heart"></i></button>
                        {{ Form::close() }}
                        <!--   ================  Form Wishlist store Section ================  -->
                        <!-- ================ Medicines content  =================== -->
                        <a href="{{ url('Medicines') }}/{{ $Medicine->slug }}">
                          <!-- ================ Medicines content  =================== -->
                            <img src="{{ asset(Voyager::image($Medicine->Medicine_image)) }}" class="img-fluid">
                            <!-- ================ Medicines content  =================== -->
                            <div class="read_more"><span>Read more</span></div></a>
                            <!-- ================ Medicines content  =================== -->
                            <small>{{ $Medicine->Category_Name }}</small>
                        </figure>
                        <div class="wrapper">
                            <!-- ================ Medicines content  =================== -->
                            <h3><a href="{{ url('Medicines') }}/{{ $Medicine->slug }}">{{ $Medicine->Medicine_Name}}</a></h3>
                            <small></small>
                            <!-- ================ Medicines content  =================== -->
                            <p>{!! substr($Medicine->Medicine_Description, 0, 50) !!}</p>
                        </div>
                        <ul>
                          <!-- ================ Medicines content  =================== -->
                           @if($Medicine->Status == 1)
                           <li><span class="loc_open">Active</span></li>
                           @else
                           <li><span class="loc_closed">Inactive</span></li>
                           @endif
                           <!-- ================ Medicines content  =================== -->
                           <li><div class="score">$ {{ $Medicine->Price}}</div></li>
                           <!-- ================ Medicines content  =================== -->
                       </ul>
                   </div>
               </div>
               @endforeach
               <!-- ================ Medicines content  =================== -->
               <!-- /strip grid -->
           </div>
           <!-- /row -->
           <p class="text-center"><a href="{{ url('Medicines') }}" class="btn_1 rounded add_top_30">Show more</a></p>
           
       </div>
       <!-- /container -->
       <div class="call_section image_bg">
        <div class="wrapper">
            <div class="container margin_80_55">
                <div class="main_title_2">
                    <span><em></em></span>
                    <h2>{{ setting('site.title') }}</h2>
                    <p>Emantal management software is an online based open source or cloud server integrated software that simplifies managing the functioning of the hospital or any medication.</p>
                </div>
                <!-- /row -->
                @guest
                <!-- ================ register content  =================== -->
                <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5">
                    <a href="{{ route('register') }}" class="btn_1 rounded">Register Now</a>
                </p>
                <!-- ================ register content  =================== -->
                @else
                <p class="text-center add_top_30 wow bounceIn" data-wow-delay="0.5">
                   <a class="btn_1 rounded">{{ Auth::user()->name }}</a>
               </p>
               @endguest
               <!-- ================ register content  =================== -->
           </div>
       </div>
       <!-- /wrapper -->
   </div>
   <!--/call_section-->
</main>
<!-- /main -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection