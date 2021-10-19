@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <div class="sub_header_in">
        <div class="container">
             <!-- ================ Patient content  =================== -->
            <h1>Patient : {{ $Patient->name }}</h1>
             <!-- ================ Patient content  =================== -->
        </div>
        <!-- /container -->
    </div>
    <!-- =================================== /sub_header  ============================= -->
    <main>      
        <div class="container margin_60_35">
                <div class="row">
                    <div class="col-lg-8">
                        <section >
                            <div class="thumb">
                                 <!-- ================ Patient content  =================== -->
                                <img src="{{ asset(Voyager::image($Patient->avatar)) }}" class="img-thumbnail">
                            </div>
                            <div class="opening">
                            <!-- ================ Patient content  =================== -->
                            @if(isset($Patient->Patient->id))
                            @else
                            <div class="success-box">
            <div class="alert alert-success">Congratulations. These data are written through the hospital only for our rights if you want to contact us
            {{ setting('contact.Questions-phone') }}</div>
                            </div>
                            @endif
                                <div class="ribbon">
                                    
                                </div>
                                <i class="icon_id-2"></i>
                                  <!-- ================ Patient content  =================== -->
                                  <h4>{{ $Patient->name }} </h4>
                                  <!-- ================ Patient content  =================== -->
                                <div class="row">
                                    <div class="col-md-6">
                                        <ul>
                                            <!-- ================ Patient content  =================== -->
                                            @if(isset($Patient->Patient->Status)) 
                                            @if($Patient->Patient->Status == "0")
                                                <li >Patient Status : Now OUT</li>  
                                            @else
                                                <li >Patient Status : Now IN</li>
                                            @endif 
                                            @else
                                                <li >Patient Status : Not Selected</li>
                                            @endif
                                            <!-- ================ Patient content  =================== -->
                                            @if(isset($Patient->Patient->Patient_ID)) 
                                              <li>Patient ID : {{ $Patient->Patient->Patient_ID }}</li>
                                            @else
                                              <li>Patient ID Not Selected</li>
                                            @endif
                                            @if(isset($Patient->Patient->Patient_Phone)) 
                                              <li>Patient Phone : {{ $Patient->Patient->Patient_Phone }}</li>
                                            @else
                                              <li>Patient Phone Not Selected</li>
                                            @endif
                                            @if(isset($Patient->Patient->Patient_Mobile)) 
                                              <li>Patient Mobile : {{ $Patient->Patient->Patient_Mobile }}</li>
                                            @else
                                              <li>Patient Mobile Not Selected</li>
                                            @endif
                                             <!-- ================ Patient content  =================== -->
                                        </ul>

                                    </div>
                                    <div class="col-md-6">
                                        <ul>
                                             <!-- ================ Patient content  =================== -->
                                            @if(isset($Patient->Patient->Patient_Sex))
                                            @if($Patient->Patient->Patient_Sex == "0")
                                              <li>Patient Sex : Male</li>
                                            @else
                                              <li>Patient Sex : Woman</li>
                                            @endif 
                                             <!-- ================ Patient content  =================== -->
                                            @else
                                              <li>Patient Not Selected</li>
                                            @endif
                                             <!-- ================ Patient content  =================== -->
                                            @if(isset($Patient->Patient->Blood->Blood_en))
                                              <li>Patient Blood : {{ $Patient->Patient->Blood->Blood_en }}</li>
                                            @else
                                              <li>Patient Blood Not Selected</li>
                                            @endif
                                             <!-- ================ Patient content  =================== -->
                                            @if(isset($Patient->Patient->Patient_Age)) 
                                              <li>Patient Age : {{ $Patient->Patient->Patient_Age }}</li>
                                            @else
                                              <li>Patient Age Not Selected</li>
                                            @endif
                                             <!-- ================ Patient content  =================== -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- /opening -->
                            <div class="detail_title_1"></div>
                                                
                            
                            <hr>
                            <h5>Informations</h5>
                            <div class="row add_bottom_15">
                                <div class="col-lg-6 col-md-12">
                                    <ul class="menu_list">
                                         <!-- ================ Patient content  =================== -->
                                        @if(isset($Patient->Patient->Doctor->name))
                                        <li>
                                            <div class="thumb">
                                                <img src="{!! asset(Voyager::image($Patient->Patient->Doctor->avatar)) !!}" alt="Doctor Image">
                                            </div>
                                            <h6>Patient Doctor :  <span><a href="{{ url('Doctors') }}/{{ $Patient->Patient->Doctor->name }}">
                                                {{ $Patient->Patient->Doctor->name }}
                                            </a></span></h6>
                                             <p>
                                                {{ $Patient->Patient->Doctor->name }}
                                            </p>
                                        </li>
                                        @else
                                            <li>Patient Doctor Not Selected</li>
                                        @endif
                                         <!-- ================ Patient content  =================== -->
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <ul class="menu_list">
                                         <!-- ================ Patient content  =================== -->
                                         @if(isset($Patient->Patient->department->Department_Name))
                                        <li>
                                            <div class="thumb">
                                                <?php $images = json_decode($Patient->Patient->department->Department_images,true); ?>
                                                <?php $images[0]; ?>
                                                <img src="{{ asset(Voyager::image($images[0])) }}" alt="Department Image">
                                            </div>
                                             <!-- ================ Patient content  =================== -->
                                            <h6>Department :  <span><a href="{{ url('Departments') }}/{{ $Patient->Patient->department->slug }}">
                                                {{ $Patient->Patient->department->Department_Name }}
                                            </a></span></h6>
                                             <p>
                                                {{ $Patient->Patient->department->Department_Name }}
                                            </p>
                                        </li>
                                        @else
                                            <li>Patient Department Not Selected</li>
                                        @endif
                                         <!-- ================ Patient content  =================== -->
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <ul class="menu_list">
                                         <!-- ================ Patient content  =================== -->
                                         @if(isset($Patient->Patient->Bed->Bed_type))
                                        <li>
                                            <div class="thumb">
                                                <?php $images = json_decode($Patient->Patient->Bed->Bed_images,true); ?>
                                                <?php $images[0]; ?>
                                                <img src="{{ asset(Voyager::image($images[0])) }}" alt="Department Image">
                                            </div>
                                            <h6>Beds :  <span><a href="{{ url('Beds') }}/{{ $Patient->Patient->Bed->slug }}">
                                                {{ $Patient->Patient->Bed->Bed_type }}
                                            </a></span></h6>
                                             <p>
                                                {{ $Patient->Patient->Bed->Bed_type }}
                                            </p>
                                        </li>
                                        @else
                                            <li>Patient Beds Not Selected</li>
                                        @endif
                                         <!-- ================ Patient content  =================== -->
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <ul class="menu_list">
                                         <!-- ================ Patient content  =================== -->
                                         @if(isset($Patient->Patient->Country->en_name))
                                        <li>
                                            <div class="thumb">
                                                <img src="{!! asset(Voyager::image($Patient->Patient->Country->image_path)) !!}" alt="Country Image">
                                            </div>
                                            <h6>Country :  <span>{{ $Patient->Patient->Country->en_name }}</span></h6>
                                             <p>
                                                {{ $Patient->Patient->Country->en_name }}
                                            </p>
                                        </li>
                                        @else
                                            <li>Patient Country Not Selected</li>
                                        @endif
                                        <!-- ================ Patient content  =================== -->
                                    </ul>
                                </div>
                            </div>
                            <!-- /row -->
                           <hr>
                        </section>
                        <!-- /section -->
                    
                    </div>
                    <!-- /col -->
                    
                    <aside class="col-lg-4" id="sidebar">
                        <div class="box_detail booking">
                            <div class="price">
                                <h5 class="d-inline">Sending a Message</h5>
                            </div>
                         <!-- ================ Patient content  =================== -->
                        {{ Form::open(['route' => ['Messages.store'], 'method' => 'POST']) }}
                        {{ csrf_field() }}
                        
                            {{ Form::hidden('res_id', $Patient->id) }}
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
                         <!-- ================ Patient content  =================== -->
                        </div>
                        @guest
                        @else
                        <!-- ================ Patient content  =================== -->
                        @if(Auth::user()->id == $Patient->id)
                        <ul class="share-buttons">
                            <li><a class="fb-share" href="{{ url('Wishlists') }}/{{ $Patient->name }}"><i class="pe-7s-like"></i> Wishlist</a></li>
                            <li><a class="fb-share" href="{{ url('Patients') }}/{{ $Patient->name }}/edit"><i class="pe-7s-news-paper"></i> Edit</a></li>
                            <li><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="gplus-share" href="{{ route('logout') }}"><i class="pe-7s-power"></i> {{ __('Logout') }}</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                            </form>
                        </ul>
                        <!-- ================ Patient content  =================== -->
                       @else
                       @endif
                       @endguest
                    </aside>
                </div>
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection