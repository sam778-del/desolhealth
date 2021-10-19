@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ==================================== Medicines =========================================== -->
<style type="text/css">
  .hero_in.medicine:before {
  background: url('{{ asset(Voyager::image($Medicine->Medicine_image)) }}') center center no-repeat;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
   }
</style>
<!-- ==================================== Medicines =========================================== -->
<main>      
        <div class="hero_in medicine">
            <div class="wrapper">
                <span class="magnific-gallery">
                    <!-- ==================================== Medicines =========================================== -->
                    <a href="{{ asset(Voyager::image($Medicine->Medicine_image)) }}" title="Photo title" data-effect="mfp-zoom-in"></a>
                </span>
            </div>
        </div>
        <!--/hero_in-->
        <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section>
                            <div class="detail_title_1">
                                <!-- ==================================== Medicines =========================================== -->
                                <h1>{{ $Medicine->Medicine_Name }}</h1>
                            </div>
                            <p></p>
                            <h5 class="add_bottom_15">Information</h5>
                            <div class="row add_bottom_30">
                                <div class="col-sm-12">
                                    <ul class="bullets">
                                        <!-- ==================================== Medicines =========================================== -->
                                        <li>Date : {{ date('M j, Y', strtotime($Medicine->created_at)) }}</li>
                                        @if(isset($Medicine->Status)) 
                                        @if($Medicine->Status == "0")
                                        <li>Available Medicine</li> 
                                        @else
                                        <li>Un Available Medicine</li>
                                        @endif 
                                        <!-- ==================================== Medicines =========================================== -->
                                        @else
                                          <li>Not Selected Medicine</li>
                                        @endif
                                        <!-- ==================================== Medicines =========================================== -->
                                        <li>Medicine Category : {{ $Medicine->Category_Name }}</li>
                                        <!-- ==================================== Medicines =========================================== -->
                                        <li>Price : {{ $Medicine->Price }}</li>
                                        <!-- ==================================== Medicines =========================================== -->
                                        <li>Manufactured : {{ $Medicine->Manufactured_By }}</li>
                                        <!-- ==================================== Medicines =========================================== -->
                                        <li>Description : {{ $Medicine->Medicine_Description }}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->                       
                        </section>
                        <!-- /section -->
                        <div id="comments">
                        <h5> Comments</h5>
                        <ul>
                        <!-- =========================================== Medicine Comments ============================ -->
                        @foreach($comments as $comment)
                        <li>
                            <div class="avatar">
                                <!-- =========================================== Medicine Comments ============================ -->
                                <a href="{{ url('Patients') }}/{{ $comment->user->name }}">
                                <!-- =========================================== Medicine Comments ============================ -->
                                <img src="{!! asset(Voyager::image( $comment->user->avatar )) !!}" alt="{{ $comment->user->name }}">
                            </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    <!-- =========================================== Medicine Comments ============================ -->
                                    By <a href="{{ url('Patients') }}/{{ $comment->user->name }}">{{ $comment->user->name }}</a><span>|</span>
                                    <!-- =========================================== Medicine Comments ============================ -->
                                    {{ date('M j, Y', strtotime($comment->created_at)) }}<span>|</span>
                            @guest
                            @else
                            <!-- =========================================== Medicine Comments ============================ -->
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
                                    <!-- =========================================== Medicine Comments ============================ -->
                                    {{ $comment->Comment_content }}
                                    <!-- =========================================== Medicine Comments ============================ -->
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
                        A simple Comment If You Gest <a href="{{ route('register') }}" class="alert-link">{{ __('Register') }}</a>. Give it a click if you like.
                      </div>
                    @else
                    <!-- =========================================== Add Post Comments ============================ --> 
                    <h5>Leave a comment</h5>
                    <!--   ================== FORM comment store ================================ -->
                    {{ Form::open(['route' => ['Comments.store'], 'method' => 'POST']) }}
                    {{ csrf_field() }}
                    {{ Form::hidden('Medicine_id', $Medicine->id) }}
                    <div class="form-group">
                        <textarea class="form-control" name="Comment_content" id="comments2" rows="6" placeholder="Comment"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn_1 add_bottom_15">Comment</button>
                    </div>
                    {{ Form::close() }}
                    @endguest
                    </div>
                    <!-- /col -->
                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <h5 class="d-inline">Book Medicine Now</h5>
                            </div>
                    <!-- =========================== User Medicine books ============================== -->
                        {{ Form::open(['route' => ['Medicinebooks.store'], 'method' => 'POST']) }}
                        {{ csrf_field() }}
                            {{ Form::hidden('Medicine_id', $Medicine->id) }}
                            <div class="form-group" id="input-dates">
                                <input class="form-control" type="text" name="Medicinebook_name" placeholder="Your Name..">
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="form-group" id="input-dates">
                                <textarea class="form-control" type="text" name="Medicinebook_content" placeholder="Details..."></textarea>
                                <i class="icon-email"></i>
                            </div>
                            <div class="form-group clearfix">
                                <div class="custom-select-form">
                                    <select class="wide" name="Medicinebook_Quantity">
                                        <option value="Quantity">Quantity</option>   
                                        <option value="ONEMedicine">ONE Medicine</option>
                                        <option value="TwoMedicine">Two Medicine</option>
                                        <option value="ThreeMedicine">Three Medicine</option>
                                        <option value="OtherMedicine">Other Medicine</option>
                                    </select>
                                </div>
                            </div>
                            <button class=" add_top_30 btn_1 full-width purchase" type="submit">Get Me Medicine</button>
                             @if(session('Messagge'))
                            <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your Medicine has been Book successfully We will Back To If You Need Help {{ setting('contact.Help-phone') }}</div>
                            </div>
                            @endif
                        {{ Form::close() }}
                        <!-- =========================== User Medicine books ============================== -->
                        </div>
                    </aside>
                </div>
            </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection