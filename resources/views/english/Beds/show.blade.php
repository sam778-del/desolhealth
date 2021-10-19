@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<main>   

            <!-- ============================== Content Beds images =============== -->
            <?php $images = json_decode($Bed->Bed_images); ?>
            @if($images != null)
            @foreach($images as $image)
            <style type="text/css">
            .hero_in.hotels_detail:before {
            background: url('{!! asset(Voyager::image($image)) !!}') center center no-repeat;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            }
            </style> 
            @endforeach
            @endif 
            <!-- ============================== Content Beds images =============== -->
        <div class="hero_in hotels_detail">
            <div class="wrapper">
                <span class="magnific-gallery">
                    <!--   ================  Bed image Section ================  -->
                    <?php $images = json_decode($Bed->Bed_images); ?> 
                    <!--   ================  Bed image Section ================  --> 
                    @if($images != null)
                    @foreach($images as $image)
                     <a href="{!! asset(Voyager::image($image)) !!}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
                    @endforeach
                    @endif 
                    <!--   ================  Bed image Section ================  -->
                    <?php $images = json_decode($Bed->Bed_images); ?> 
                    <!--   ================  Bed image Section ================  --> 
                    @if($images != null)
                    @foreach($images as $image)
                     <a href="{!! asset(Voyager::image($image)) !!}" title="Photo title" data-effect="mfp-zoom-in"></a>
                    @endforeach
                    @endif 
                    <!--   ================  Bed image Section ================  -->
                </span>
            </div>
        </div>
        <!--/hero_in-->
        
        <nav class="secondary_nav sticky_horizontal_2">
            <div class="container">
                <ul class="clearfix">
                    <li><a href="#description" class="active">Description</a></li>
                    <li><a href="#reviews">Reviews</a></li>
                    <li><a href="#sidebar">Booking</a></li>
                </ul>
            </div>
        </nav>

        <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section>
                            <div class="detail_title_1">
                                <!--   ================  Bed type ================  -->
                                <h1>{{ $Bed->Bed_type}}</h1>
                                <!--   ================  Bed Department slug ================  -->
                                <a class="partment" href="{{ url('Departments') }}/{{ $Bed->Department->slug }}">
                                    <!--   ================  Bed Department Name ================  -->
                                    {{ $Bed->Department->Department_Name }}
                                </a>
                            </div>
                            <p>
                                <!--   ================  Bed Description ================  -->
                                {{ $Bed->Description }} 
                            </p>
                            <h5 class="add_bottom_15">Properties</h5>
                            <div class="row add_bottom_30">
                                <div class="col-sm-12">
                                    <ul class="bullets">
                                    <!--   ================  Bed Department Name ================  -->
                                    <li>{{ $Bed->Department->Department_Name }}</li>  
                                    <!--   ================  Bed Bed Capacity ================  -->  
                                    <li>{{ $Bed->Bed_Capacity }} Beds</li>
                                    <!--   ================  Bed Active ================  -->
                                    @if(isset($Bed->Active)) 
                                    @if($Bed->Active == "0")
                                    <li>Available Beds</li> 
                                    @else
                                    <li>Un Available Beds</li>
                                    @endif 
                                    @else
                                      <li>Not Selected Beds</li>
                                    @endif
                                    </ul>

                                </div>
                            </div>
                            <!-- /row -->                       
                        </section>
                        <!-- /section -->
                    <section id="reviews">
                            <h2>Reviews</h2>
                            <div class="reviews-container">
                            <!--   ================ foreach review Doctor ================  -->
                               @if(isset($Reviews) && count($Reviews) > 0)
                               @foreach($Reviews as $review)
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb">
                                        <img src="{!! asset(Voyager::image($review->user->avatar)) !!}" alt="Image User review">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            @if($review->Reviews == 1)
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star "></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            @endif
                                            @if($review->Reviews == 2)
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            @endif
                                            @if($review->Reviews == 3)
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star"></i>
                                            <i class="icon_star"></i>
                                            @endif
                                            @if($review->Reviews == 4)
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star"></i>
                                            @endif
                                            @if($review->Reviews == 5)
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            <i class="icon_star voted"></i>
                                            @endif
                                           
                                        </div>
                                        <div class="rev-info">
                                            {{ $review->user->name }} – {{ date('M j, Y', strtotime($review->created_at)) }}:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                               {{ $review->Reviews_content }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                                <!--   ================ foreach review Doctor ================  -->
                            </div>
                            <!-- /review-container -->
                        </section>

                        
                        <hr>

                         <div class="add-review">
                                <h5>Leave a Review</h5>
                                
                                <!--   ================  review Bed   ================  -->
                                {{ Form::open(['route' => ['Reviews.store'], 'method' => 'POST']) }}
                                {{ csrf_field() }}
                                {{ Form::hidden('Bed_id', $Bed->id) }}
                                <!--   ================  review store Product   ================  -->
                                    <div class="row">
                                        <div class="form-group col-sm-12">
                                            <label>Rating </label>
                                            <div class="custom-select-form">
                                            <select name="Reviews" id="Reviews" class="wide">
                                                <option value="1" selected>1 (lowest)</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5 (highest)</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Your Review</label>
                                            <textarea name="Reviews_content" id="review_text" class="form-control" style="height:130px;"></textarea>
                                        </div>
                                        <div class="form-group col-md-12 add_top_20 add_bottom_30">
                                            <input type="submit" value="Submit" class="btn_1" >
                                        </div>
                                    </div>
                                 {{ Form::close() }}
                                 <!--   ================  review  Doctor  ================  -->
                            </div>
                    </div>
                    <!-- /col -->
                    
                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <span>{{ $Bed->Charge }} $ <small>Dollar Within a month</small></span>
                            </div>
                              <!-- =========================== User Identificatione ============================== -->
                        {{ Form::open(['route' => ['Bookrooms.store'], 'method' => 'POST']) }}
                        {{ csrf_field() }}
                        
                            {{ Form::hidden('Bedcontroller_id', $Bed->id) }}
                            <div class="form-group" id="input-dates">
                                <input class="form-control" type="text" name="Bookroom_name" placeholder="Your Name..">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="form-group" id="input-dates">
                                <textarea class="form-control" type="text" name="Bookroom_content" placeholder="Details..."></textarea>
                                <i class="icon-email"></i>
                            </div>
                            <div class="form-group clearfix">
                                <div class="custom-select-form">
                                    <select class="wide" name="Bookroom_Quantity">
                                        <option value="RoomType">Room Type</option>   
                                        <option value="SingleRoom">Single Room</option>
                                        <option value="DoubleRoom">Double Room</option>
                                        <option value="SuiteRoom">Suite Room</option>
                                    </select>
                                </div>
                            </div>
                            <!--   ================  Bed Rooms ================  -->
                            <button class=" add_top_30 btn_1 full-width purchase" type="submit">Get Me Rooms</button>
                            <!--   ================  Bed Messagge ================  -->
                             @if(session('Messagge'))
                            <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your Rooms has been Book successfully We will Back To If You Need Help {{ setting('contact.Help-phone') }}</div>
                            </div>
                            @endif
                             <!--   ================  Messagge ================  -->
                        {{ Form::close() }}
                        <!--   ================  Bed paypal =================================  -->
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="TC6VZNS9FRXJW">
                            <table>
                            <tr><td><input type="hidden" name="on0" value=""></td></tr><tr><td><select name="os0">
                                <option value="Single Room">Single Room : $50.00 USD - monthly</option>
                                <option value="Double Room">Double Room : $100.00 USD - monthly</option>
                                <option value="Suite Room">Suite Room : $200.00 USD - monthly</option>
                                <option value="Suite Room Two">Suite Room Two : $320.00 USD - monthly</option>
                            </select> </td></tr>
                            </table>
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="image" src="{{ asset(Voyager::image(setting('site.Payment_button_Room'))) }}" width="100%" height="100%" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
                            </form>
                        <!-- ===========================  paypal ============================== -->
                        </div>
                    </aside>
                </div>
                <!-- /row -->
        </div>
        <!-- /container -->
        
    </main>
    <!--/main-->
    <!-- ===========================  autoUpdateInput ============================== -->
    <script>
    $(function() {
      $('input[name="dates"]').daterangepicker({
          autoUpdateInput: false,
          parentEl:'#input-dates',
          opens: 'left',
          locale: {
              cancelLabel: 'Clear'
          }
      });
      $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
          $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
      });
      $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
          $(this).val('');
      });
    });
    </script>
    <!-- ===========================  autoUpdateInput ============================== -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection