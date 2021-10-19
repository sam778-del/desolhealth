@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ============================== Content Births select =============== -->
 <style type="text/css">
  .hero_in.Birth:before {
  background: url('{{ asset(Voyager::image($Birth->Birth_image)) }}') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
   }
</style>
<!-- ============================== Content Births select =============== -->
 <main>     
        <div class="hero_in Birth">
            <div class="wrapper">
                <span class="magnific-gallery">
                    <!-- ============================== Content Births select =============== -->
                    <a href="{{ asset(Voyager::image($Birth->Birth_image)) }}" title="Photo title" data-effect="mfp-zoom-in"></a>
                </span>
            </div>
        </div>
        <!--/hero_in-->
        <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12">
                        <section>
                            <div class="detail_title_1">
                                <!-- ============================== Content Births  =============== -->
                                <h1>{{ $Birth->Birth_name }}</h1>
                                <!-- ============================== Content Births  =============== -->
                                @if(isset($Birth->Doctor->name))
                                  <a class="address" href="{{ url('Doctors') }}/{{ $Birth->Doctor->name }}">{{ $Birth->Doctor->name }}</a> 
                                @else
                                  <p>Doctor is not yet Selected</p>
                                @endif
                            </div>
                            <!-- ============================== Content Births  =============== -->
                            <p>{{ $Birth->Birth_content }}</p>
                            <h5 class="add_bottom_15">Information</h5>
                            <div class="row add_bottom_30">
                                <div class="col-md-12">
                                    <ul class="bullets">
                                        <!-- ============================== Content Births  =============== -->
                                        <li>Born In : {{ date('M j, Y', strtotime($Birth->created_at)) }}</li>
                                        <!-- ============================== Content Births  =============== -->
                                        <li>Patient ID : {{ $Birth->Patient_ID}}</li>
                                        <!-- ============================== Content Births  =============== -->
                                        <li>Info About Me : {{ $Birth->Birth_content }}</li>
                                        <!-- ============================== Content Births  =============== -->
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->                       
                        </section>
                        <!-- /section -->
                    </div>
                    <!-- /col -->
                </div>
                <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection