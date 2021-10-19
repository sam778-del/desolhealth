@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <main>
        <div class="container margin_60_35">
            <div class="row">
                <aside class="col-lg-3" id="faq_cat">
                        <div class="box_style_cat" id="faq_box">
                            <ul id="cat_nav">
                                <li><a href="#Messages" class="active"><i class="icon_document_alt"></i>Messages</a></li>
                            </ul>
                        </div>
                        <!--/sticky -->
                </aside>
                <!--/aside -->
                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">Messages</h4>
                    <div role="tablist" class="add_bottom_45 accordion_2" id="Messages">
                        <!-- =========================== User Messages ============================== -->
                        @foreach($Messages as $Message)
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse">
                                        <!-- =========================== User Messages ============================== -->
                                        <i class="indicator ti-minus"></i>{{ $Message->Message_name}}
                                    </a>
                                </h5>
                            </div>
                             <!-- =========================== User Messages ============================== -->
                            <div id="{{$Message->id}}" class="collapse show" role="tabpanel">
                                <div class="card-body">
                                    <!-- =========================== User Messages ============================== -->
                                    <p>{{ $Message->Message_content }}</p>
                                </div>
                            <!--  ==============================================   Messages destroy FORM ============== -->
                            {{ Form::open(['method' => 'DELETE','style' => 'display: inline-block','route' => ['Messages.destroy', $Message->id]]) }} 
                            {{ csrf_field() }} 
                                        <button type="submit" style="color: #004dda;
                                                text-decoration: none;
                                                -moz-transition: all 0.3s ease-in-out;
                                                -o-transition: all 0.3s ease-in-out;
                                                -webkit-transition: all 0.3s ease-in-out;
                                                -ms-transition: all 0.3s ease-in-out;
                                                transition: all 0.3s ease-in-out;
                                                outline: none;background: none;
                                                border: 0;
                                                display: inline-block;margin-bottom: 5px;">
                                            <i class="icon-cancel"></i>
                                        </button>
                            {{ Form::close() }}
                            <!--  ==============================================   Messages destroy FORM =============== --> 
                            </div>
                        </div>
                        <!-- /card -->
                        @endforeach
                        <!-- =========================== User Identificatione ============================== -->
                    </div>
                    <!-- /accordion payment -->
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!--/container-->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection