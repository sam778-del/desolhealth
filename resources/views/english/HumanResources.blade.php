@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
        <main>
            <div class="container margin_60_35">
            <div class="main_title_2">
                <span><em></em></span>
                <!-- ================ employe content  =================== -->
                <h2>{{ setting('employe.employe-title') }}</h2>
                <!-- ================ employe content  =================== -->
                <p>{{ setting('employe.employe-content') }}</p>
                <!-- ================ employe content  =================== -->
            </div>
            <div class="grid-gallery">
                <ul class="magnific-gallery">
                    <!-- ================ employe content  =================== -->
                    @foreach($Employees as $Employee)
                    <li>
                        <figure>
                            <!-- ================ employe content  =================== -->
                            <img src="{!! asset(Voyager::image($Employee->employee_image)) !!}" alt="{{ $Employee->employee_title}}">
                            <figcaption>
                                <div class="caption-content">
                                    <!-- ================ employe content  =================== -->
                    <a href="{!! asset(Voyager::image($Employee->employee_image)) !!}" title="{{ $Employee->employee_title}}" data-effect="mfp-zoom-in">
                                        
                                        <!-- ================ employe content  =================== -->
                                        <p>{{ $Employee->employee_title}}</p>
                                        <!-- ================ employe content  =================== -->
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </li>
                    @endforeach
                    <!-- ================ employe content  =================== -->
                </ul>
            </div>
            <!-- /grid gallery -->
        </div>
        <!-- /container -->
            <div class="bg_color_1">
                <div class="container margin_80_55">
                    <div class="main_title_2">
                        <span><em></em></span>
                        <h2>Careers</h2>
                        <!-- ================ employe content  =================== -->
                        <p>{{ setting('employe.employe-content') }}</p>
                        <!-- ================ employe content  =================== -->
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-lg-6 wow" data-wow-offset="150">
                            <figure class="block-reveal">
                                <div class="block-horizzontal"></div>
                                <!-- ================ employe content  =================== -->
                                <img src="{!! asset(Voyager::image(setting('employe.employe-image'))) !!}" class="img-fluid" alt="">
                                <!-- ================ employe content  =================== -->
                            </figure>
                        </div>
                        <div class="col-lg-5">
                            <!-- ================ employe content  =================== -->
                            <p>{{ setting('employe.employe-content') }}</p>
                            <!-- ================ employe content  =================== -->
                            <p>{{ setting('employe.Career-content') }}</p>
                            <!-- ================ employe content  =================== -->
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <!--/container-->
            </div>
            <!--/bg_color_1-->

            <div class="container margin_60_35">
            <div class="row justify-content-center">
                
                <div class="col-xl-5 col-lg-6 pr-xl-5">
                    <div class="main_title_3">
                        <span></span>
                        <h2>Send us a Resume</h2>
                        <p>Are you interested we also care Be one of us.</p>
                    </div>
                    <div id="message-contact"></div>
                       <!-- ================ employe content  =================== -->
                       {{ Form::open(['route' => ['Resume.store'], 'method' => 'POST','files' => 'true']) }}
                       {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="Name">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Telephone</label>
                                        <input class="form-control" type="text" name="Telephone">
                                    </div>
                                </div>
                            </div>
                            <!-- /row -->
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="Message" style="height:150px;"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Get Us Resume:</label>
                                        <input class="form-control" type="file" style="background: transparent;border: 0;padding-left:0;" name="File">
                                    </div>
                                </div>
                            </div>
                            <p class="add_top_30"><input type="submit" value="Send" class="btn_1 rounded"></p>
                        {{ Form::close() }}
                        <!-- ================ employe content  =================== -->
                </div>
                <div class="col-xl-5 col-lg-6 pl-xl-5">
                    <div class="box_contacts">
                        <i class="ti-support"></i>
                        <h2>Need Help?</h2>
                        <!-- ================ Need Help content  =================== -->
                        <a href="#0">{{ setting('contact.Help-phone') }}</a> - <a href="#0">{{ setting('contact.Help-email') }}</a>
                    </div>
                    <div class="box_contacts">
                        <i class="ti-help-alt"></i>
                        <h2>Questions?</h2>
                        <!-- ================ Questions content  =================== -->
                        <a href="#0">{{ setting('contact.Questions-phone') }}</a> - <a href="#0">{{ setting('contact.Questions-email') }}</a>
                    </div>
                    <div class="box_contacts">
                        <i class="ti-home"></i>
                        <h2>Address</h2>
                        <!-- ================ Address content  =================== -->
                        <a href="#0">{{ setting('contact.Address') }}.</a>
                        <!-- ================ Address content  =================== -->
                    </div>
                 </div>
              </div>
           </div>
        </main>
        <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection