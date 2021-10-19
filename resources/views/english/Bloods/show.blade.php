@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ============================== Content Blood  =============== -->
<style type="text/css">
  .hero_in.restaurant_detail:before {
  background: url('{{ asset(Voyager::image($Blood->Blood_image)) }}') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
   }
</style>
<!-- ============================== Content Blood  =============== -->
<main>      
        <div class="hero_in restaurant_detail">
            <div class="wrapper">
                <span class="magnific-gallery">
                    <a href="img/gallery/hotel_list_2.jpg" title="Photo title" data-effect="mfp-zoom-in"></a>
                </span>
            </div>
        </div>
        <!--/hero_in-->
        <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section>
                            <div class="detail_title_1">
                                <!-- ============================== Content Blood  =============== -->
                                <h1>{{ $Blood->Blood_en }}</h1>
                            </div>
                            <p></p>
                            <h5 class="add_bottom_15">Information</h5>
                            <div class="row add_bottom_30">
                                <div class="col-sm-12">
                                    <ul class="bullets">
                                        <!-- ============================== Content Blood  =============== -->
                                        <li>{{ $Blood->Bloodcontent }}</li>
                                        <!-- ============================== Content Blood  =============== -->
                                        <li>{{ date('M j, Y', strtotime($Blood->created_at)) }}</li>
                                        <!-- ============================== Content Blood  =============== -->
                                        @if(isset($Blood->Active)) 
                                        @if($Blood->Active == "0")
                                        <li>Available Blood</li> 
                                        @else
                                        <li>Un Available Blood</li>
                                        @endif 
                                        @else
                                          <li>Not Selected Blood</li>
                                        @endif
                                        <!-- ============================== Content Blood  =============== -->
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->                       
                            <hr>
                            <h5>Similar</h5>
                            <div class="row add_bottom_15">
                              <!-- ============================== Patients Content Blood  =============== -->
                              @foreach($Patients as $Patient)
                                <div class="col-md-12">
                                    <ul class="menu_list">
                                        <li>
                                            <div class="thumb">
                                                <!-- ============================== Patients Content Blood  =============== -->
                                                <img src="{!! asset(Voyager::image($Patient->user->avatar)) !!}" alt="">
                                            </div>
                                            <h6>
                                                <!-- ============================== Content Blood  =============== -->
                                            <a href="{{ url('Patients') }}/{{ $Patient->user->name }}">{{ $Patient->user->name }}</a>
                                                <!-- ============================== Patients Content Blood  =============== -->
                                            <span>Patient Phone : {{ $Patient->Patient_Phone }}</span>
                                            </h6>
                                            <p>
                                                <!-- ============================== Patients Content Blood  =============== -->
                                                Patient Mobile : {{ $Patient->Patient_Mobile }}<br>
                                                <!-- ============================== Patients Content Blood  =============== -->
                                                Patient Age : {{ $Patient->Patient_Age }}<br>
                                                <!-- ============================== Patients Content Blood  =============== -->
                                                Date of Birth : {{ $Patient->Date_of_Birth }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                              @endforeach
                              <!-- ============================== Patients Content Blood  =============== -->
                            </div>
                            <!-- /row -->
                        </section>
                        <!-- /section -->
                        <div id="comments">
                        <h5> Comments</h5>
                        <ul>
                        <!-- =========================================== Blood Comments ============================ -->
                        @foreach($comments as $comment)
                        <li>
                            <div class="avatar">
                            <!-- =========================================== Blood Comments ============================ -->
                            <a href="{{ url('Patients') }}/{{ $comment->user->name }}">
                                <!-- =========================================== Blood Comments ============================ -->
                                <img src="{!! asset(Voyager::image( $comment->user->avatar )) !!}" alt="{{ $comment->user->name }}">
                            </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    <!-- =========================================== Blood Comments ============================ -->
                                    By <a href="{{ url('Patients') }}/{{ $comment->user->name }}">{{ $comment->user->name }}</a><span>|</span>
                                    {{ date('M j, Y', strtotime($comment->created_at)) }}<span>|</span>
                            @guest
                            @else
                            <!-- =========================================== Blood Comments ============================ -->
                            @if(Auth::user()->id == $comment->user->id)        
                            <!--  ==============================================   Comments destroy FORM ============== -->
                            {{ Form::open(['method' => 'DELETE','style' => 'display: inline-block','route' => ['Comments.destroy', $comment->id]]) }} 
                                {{ csrf_field() }} 
                                        <button type="submit" style="color: #004dda;
                                                text-decoration: none;
                                                -moz-transition: all 0.3s ease-in-out;
                                                -o-transition: all 0.3s ease-in-out;
                                                -webkit-transition: all 0.3s ease-in-out;
                                                -ms-transition: all 0.3s ease-in-out;
                                                transition: all 0.3s ease-in-out;
                                                outline: none;background: none;border: 0;display: inline-block;">
                                            <i class="icon-cancel"></i>
                                        </button>
                            {{ Form::close() }}
                            <!--  ==============================================   Comments destroy FORM =============== -->     
                            @endif
                            @endguest
                                </div>
                                <p>
                                    <!-- =========================================== Blood Comments ============================ -->
                                    {{ $comment->Comment_content }}
                                </p>
                            </div>
                            
                        </li>
                        @endforeach
                        <!-- =========================================== Post Comments ============================ -->
                        </ul>
                    </div>

                    <hr>
                    @guest
                      <div class="alert alert-info" role="alert">
                        <!-- =========================================== register ============================ -->
                        A simple Comment If You Gest <a href="{{ route('register') }}" class="alert-link">{{ __('Register') }}</a>. Give it a click if you like.
                        <!-- =========================================== register ============================ -->
                      </div>
                    @else
                    <!-- =========================================== Add Post Comments ============================ --> 
                    <h5>Leave a comment</h5>
                    <!--   ================== FORM comment store ================================ -->
                    {{ Form::open(['route' => ['Comments.store'], 'method' => 'POST']) }}
                    {{ csrf_field() }}
                    {{ Form::hidden('Blood_id', $Blood->id) }}
                    <div class="form-group">
                        <textarea class="form-control" name="Comment_content" id="comments2" rows="6" placeholder="Comment"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn_1 add_bottom_15">Comment</button>
                    </div>
                    {{ Form::close() }}
                    <!-- ====================== FORM comment store ============================ -->
                    @endguest
                    </div>
                    <!-- /col -->
                    <aside class="col-lg-4" id="sidebar">

                        <div class="box_detail booking">
                            <div class="price">
                                <h5 class="d-inline">Book Blood Now</h5>
                            </div>
                        <!-- =========================== Book Bloods ============================== -->
                        {{ Form::open(['route' => ['BookBloods.store'], 'method' => 'POST']) }}
                        {{ csrf_field() }}
                            <!-- =========================== Book Bloods ============================== -->
                            {{ Form::hidden('Blood_id', $Blood->id) }}
                            <div class="form-group" id="input-dates">
                                <input class="form-control" type="text" name="Bloodbook_name" placeholder="Your Name..">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="form-group" id="input-dates">
                                <textarea class="form-control" type="text" name="Bloodbook_content" placeholder="Details..."></textarea>
                                <i class="icon-email"></i>
                            </div>
                            <div class="form-group clearfix">
                                <div class="custom-select-form">
                                    <select class="wide" name="Bloodbook_Quantity">
                                        <option value="Quantity">Quantity</option>   
                                        <option value="ONELiter">ONE Liter</option>
                                        <option value="TwoLiter">Two Liter</option>
                                        <option value="ThreeLiter">Three Liter</option>
                                        <option value="OtherLiter">Other Liter</option>
                                    </select>
                                </div>
                            </div>
                            <button class=" add_top_30 btn_1 full-width purchase" type="submit">Get Me Blood</button>
                            <!-- =========================== Book Bloods ============================== -->
                            @if(session('Messagge'))
                             <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your Blood has been Book successfully We will Back To If You Need Help {{ setting('contact.Help-phone') }}</div>
                             </div>
                            @endif
                            <!-- =========================== Book Bloods ============================== -->
                        {{ Form::close() }}
                        <!-- =========================== User Identificatione ============================== -->
                        </div>
                    </aside>
                </div>
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection