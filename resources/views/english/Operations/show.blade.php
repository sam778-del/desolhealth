@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ================ Operation Operation image =================== -->
 <style type="text/css">
  .hero_in.Operation:before {
  background: url('{{ asset(Voyager::image($Operation->Operation_image)) }}') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
   }
</style>
<!-- ================ Operation Operation image =================== -->
 <main>     
        <div class="hero_in Operation">
            <div class="wrapper">
                <span class="magnific-gallery">
                    <!-- ================ Operation Operation image =================== -->
                    <a href="{{ asset(Voyager::image($Operation->Operation_image)) }}" title="Photo title" data-effect="mfp-zoom-in"></a>
                    <!-- ================ Operation Operation image =================== -->
                </span>
            </div>
        </div>
        <!--/hero_in-->
        <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-12">
                        <section>
                            <div class="detail_title_1">
                                <!-- ================ Operation Operation  =================== -->
                                <h1>{{ $Operation->Operation_Title }}</h1>
                                <!-- ================ Operation Operation  =================== -->
                                @if(isset($Operation->Doctor->name))
                                  <a class="address" href="{{ url('Doctors') }}/{{ $Operation->Doctor->name }}">{{ $Operation->Doctor->name }}</a> 
                                @else
                                  <p>Doctor is not yet Selected</p>
                                @endif
                                <!-- ================ Operation Operation  =================== -->
                            </div>
                            <!-- ================ Operation  Description  =================== -->
                            <p>{{ $Operation->Operation_Description }}</p>
                            <h5 class="add_bottom_15">Information</h5>
                            <div class="row add_bottom_30">
                                <div class="col-md-12">
                                    <ul class="bullets">
                                        <!-- ================ Operation  Description  =================== -->
                                        <li>Born In : {{ date('M j, Y', strtotime($Operation->created_at)) }}</li>
                                        <!-- ================ Operation  Description  =================== -->
                                        <li>Patient ID : {{ $Operation->Patient_ID }}</li>
                                        <!-- ================ Operation  Description  =================== -->
                                        <li>Date Operation : {{ $Operation->Date }}</li>
                                        <!-- ================ Operation  Description  =================== -->
                                        @if($Operation->active == 1)
                                        <li>Operation : Active</li>
                                        @else
                                        <li>Operation : Inactive</li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->                       
                        </section>
                        <!-- /section -->
                    </div>
                    <!-- /col -->
                </div>
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection