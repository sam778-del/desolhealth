@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
   <div class="sub_header_in">
        <div class="container">
            <h1>Wishlist</h1>
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->
    <main>
        <div class="container margin_60_35">
            <div class="box_booking">
                <!-- ================ Wishlists content  =================== -->
                @foreach($Wishlists as $Wishlist)
                <div class="strip_booking">
                    <div class="row">
                        <div class="col-lg-2 col-md-2">
                            <!-- ================ Wishlists content  =================== -->
                            <img src="{!! asset(Voyager::image($Wishlist->Medicine->Medicine_image)) !!}" class="img-fluid" alt="Medicine image">
                        </div>
                        <div class="col-lg-6 col-md-5">
                            <!-- ================ Wishlists content  =================== -->
                            <h3 class="hotel_booking">{{ $Wishlist->Medicine->Medicine_Name }}<span>{{ $Wishlist->Medicine->Category_Name }}</span></h3>
                        </div>
                        <div class="col-lg-2 col-md-3">
                            <ul class="info_booking">
                                <!-- ================ Wishlists content  =================== -->
                                <li><strong>Price</strong>$ {{ $Wishlist->Medicine->Price }}</li>
                                <!-- ================ Wishlists content  =================== -->
                                <li><strong>Booked At</strong> {{ date('M j, Y', strtotime($Wishlist->Medicine->created_at)) }}</li>
                            </ul>
                        </div>
                        <div class="col-lg-2 col-md-2">
                            <div class="booking_buttons">
                                <a href="{{ url('Medicines') }}/{{ $Wishlist->Medicine->slug }}" class="btn_2">See It</a>
                <!--  ==============================================   Wishlists destroy FORM ============== -->
                {{ Form::open(['method' => 'DELETE','style' => 'display: inline-block,width: 100%','route' => ['Wishlists.destroy', $Wishlist->id]]) }} 
                {{ csrf_field() }} 
                    <button type="submit" class="btn_3" style="width: 100%;">Remove <i class="icon-cancel"></i></button>
                {{ Form::close() }}
                <!--  ==============================================   Wishlists destroy FORM =============== -->    
                            </div>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
                <!-- /strip booking -->
                @endforeach
                <!-- =========================== User Identificatione ============================== -->
            </div>
            <!-- /box_booking -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection