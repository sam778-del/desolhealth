@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <div class="sub_header_in">
        <div class="container">
            <!-- ==================================== Content Doctor  ======================================== -->
            <h1>Doctor : {{ $Doctor->name }}</h1>
        </div>
        <!-- /container -->
    </div>
    <!-- =================================== /sub_header  ============================= -->
    <main>      
        <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section>
                            <div class="thumb">
                                <!-- ==================================== Content Doctor  ======================================== -->
                                <img src="{{ asset(Voyager::image($Doctor->avatar)) }}" class="img-thumbnail">
                            </div>
                            <div class="opening">
                                <i class="icon_id-2"></i>
                                <!-- ==================================== Content Doctor  ======================================== -->
                                <h4>{{ $Doctor->name }}</h4>
                                <!-- ==================================== Content Doctor  ======================================== -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->Phone_No)) 
                                              <li>Phone No : {{ $Doctor->Doctor->Phone_No }}</li>
                                            @else
                                              <li>Phone Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->Doctor_Mobile)) 
                                              <li>Doctor Mobile : {{ $Doctor->Doctor->Doctor_Mobile }}</li>
                                            @else
                                              <li>Doctor Mobile Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->department->Department_Name))
                                              <li>Doctor Department : {{ $Doctor->Doctor->department->Department_Name }}</li>
                                            @else
                                              <li>Doctor Department Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                        <!-- ==================================== Content Doctor  ======================================== -->
                                        @if(isset($Doctor->Doctor->Date_of_Birth)) 
                                              <li>Date of Birth : {{ $Doctor->Doctor->Date_of_Birth }}</li>
                                        @else
                                              <li>Date of Birth Not Selected</li>
                                        @endif
                                        <!-- ==================================== Content Doctor  ======================================== -->
                                        @if(isset($Doctor->Doctor->Blood->Blood_en))
                                              <li>Doctor Blood : {{ $Doctor->Doctor->Blood->Blood_en }}</li>
                                        @else
                                              <li>Doctor Blood Not Selected</li>
                                        @endif
                                        <!-- ==================================== Content Doctor  ======================================== -->
                                        @if(isset($Doctor->Doctor->Male))
                                        @if($Doctor->Doctor->Male == "0")
                                              <li>Doctor Sex : Male</li>
                                        @else
                                              <li>Doctor Sex : Woman</li>
                                        @endif 
                                        <!-- ==================================== Content Doctor  ======================================== -->
                                        @else
                                              <li>Doctor Sex Not Selected</li>
                                        @endif
                                        <!-- ==================================== Content Doctor  ======================================== -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /opening -->
                            <div class="detail_title_1"></div>
                            <h5 class="add_bottom_15">informations</h5>
                            <div class="row add_bottom_30">
                                <div class="col-md-12">
                                    <ul class="bullets">
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->active)) 
                                            @if($Doctor->Doctor->active == "0")
                                                <li>Now OUT</li>  
                                            @else
                                                <li>Now IN</li>
                                            @endif 
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @else
                                                <li>Not Selected</li>
                                            @endif
                                            @if(isset($Doctor->Doctor->Doctor_Date)) 
                                              <li>Doctor Date : {{ $Doctor->Doctor->Doctor_Date }}</li>
                                            @else
                                              <li>Doctor Date Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->Specialist)) 
                                              <li>Specialist : {{ $Doctor->Doctor->Specialist }}</li>
                                            @else
                                              <li>Specialist Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->Education_Degree)) 
                                              <li>Education Degree : {{ $Doctor->Doctor->Education_Degree }}</li>
                                            @else
                                              <li>Education Degree Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->Designation)) 
                                              <li>Designation : {{ $Doctor->Doctor->Designation }}</li>
                                            @else
                                              <li>Designation Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                            @if(isset($Doctor->Doctor->Short_Biography)) 
                                              <li>Short Biography : {{ $Doctor->Doctor->Short_Biography }}</li>
                                            @else
                                              <li>Short Biography Not Selected</li>
                                            @endif
                                            <!-- ==================================== Content Doctor  ======================================== -->
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->                       
                            <hr>
                            <section id="reviews">
                            <h2>Reviews</h2>
                            <div class="reviews-container">
                               <!--   ================  review Doctor ================  -->
                               @if(isset($Reviews) || count($Reviews) > 0)
                               <!-- ==================================== Reviews  ======================================== -->
                               @foreach($Reviews as $review)
                                <div class="review-box clearfix">
                                    <figure class="rev-thumb">
                                        <!-- ==================================== Reviews  ======================================== -->
                                        <img src="{!! asset(Voyager::image($review->user->avatar)) !!}" alt="Image User review">
                                    </figure>
                                    <div class="rev-content">
                                        <div class="rating">
                                            <!-- ==================================== Reviews  ======================================== -->
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
                                            <!-- ==================================== Reviews  ======================================== -->
                                        </div>
                                        <div class="rev-info">
                                            <!-- ==================================== Reviews  ======================================== -->
                                            {{ $review->user->name }} – {{ date('M j, Y', strtotime($review->user->created_at)) }}:
                                        </div>
                                        <div class="rev-text">
                                            <p>
                                                <!-- ==================================== Reviews  ======================================== -->
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
                        <!-- /section -->
                        <hr>
                            <div class="add-review">
                                <h5>Leave a Review</h5>
                                <!--   ================  review Doctor   ================  -->
                                {{ Form::open(['route' => ['Reviews.store'], 'method' => 'POST']) }}
                                {{ csrf_field() }}
                                {{ Form::hidden('Doctor_id', $Doctor->id) }}
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
                                            <input type="submit" value="Review" class="btn_1" id="Reviews">
                                        </div>
                                    </div>
                                 {{ Form::close() }}
                                 <!--   ================  review  Doctor  ================  -->
                            </div>
                        </section>
                        <!-- /section --> 
                    </div>
                    <!-- /col -->
                      <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <h5 class="d-inline">Sending a Message</h5>
                            </div>
                        <!-- =========================== User Messages ============================== -->
                        {{ Form::open(['route' => ['Messages.store'], 'method' => 'POST']) }}
                        {{ csrf_field() }}
                            {{ Form::hidden('res_id', $Doctor->id) }}
                            <div class="form-group" id="input-dates">
                                <input class="form-control" type="text" name="Message_name" placeholder="Subject Message">
                                <i class="icon-doc-text-1"></i>
                            </div>
                            <div class="form-group" id="input-dates">
                                <textarea class="form-control" type="text" name="Message_content" placeholder="Message"></textarea>
                                <i class="icon-email"></i>
                            </div>
                            <button class=" add_top_30 btn_1 full-width purchase" type="submit">Sending</button>
                             @if(session('Messagge'))
                            <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your Messagge has been sent successfully</div>
                            </div>
                            @endif
                        {{ Form::close() }}
                        <!-- =========================== User Messages ============================== -->
                        </div>
                        @guest
                        @else
                        <!-- =========================== User Wishlists ============================== -->
                        @if(Auth::user()->id == $Doctor->id)
                        <ul class="share-buttons">
                            <li><a class="fb-share" href="{{ url('Wishlists') }}/{{ $Doctor->name }}"><i class="pe-7s-like"></i> Wishlist</a></li>
                            <li><a class="fb-share" href="{{ url('Patients') }}/{{ $Doctor->name }}/edit"><i class="pe-7s-news-paper"></i> Edit</a></li>
                            <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="gplus-share" 
                                   href="{{ route('logout') }}"><i class="pe-7s-power"></i> {{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form> 
                        </ul>
                       @else
                       @endif
                       <!-- =========================== User Wishlists ============================== -->
                       @endguest
                    </aside>
                </div>
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection