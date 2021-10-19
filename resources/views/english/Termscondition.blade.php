@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
        <div class="container">
            <h1>Terms condition</h1>
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->
    
    <main>
        <div class="container margin_60_35">
            <div class="row">
                <aside class="col-lg-3" id="faq_cat">
                        <div class="box_style_cat" id="faq_box">
                            <ul id="cat_nav">
                                <li><a href="#Termscondition" class="active"><i class="icon_document_alt"></i>Terms condition</a></li>
                            </ul>
                        </div>
                        <!--/sticky -->
                </aside>
                <!--/aside -->
                <!-- ====================== Content Terms ========================================== -->
                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">Terms condition</h4>
                    <p>Welcome to Desol Medical Centre. This website belongs to Desol Medical Centre, an integrated healthcare solutions and delivery organization with operations in Nigeria. Our sole desire is to improve the healthcare delivery in Nigeria.</p> 

                    <p>The terms and conditions contained herein on this page shall govern the use and access to this website, including the pages, images and illustrations on this website.</p>

                    <p>By accessing the Website and/or using the online services, you agree to terms stated herein.  If you do not accept any of these Terms, you must immediately discontinue your access and use of this Website.</p>
                    <div role="tablist" class="add_bottom_45 accordion_2" id="Termscondition">
                        <!-- ====================== Content Terms ========================================== -->
                        @foreach($Terms as $Term)
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#{{ $Term->id }}" aria-expanded="true"><i class="indicator ti-minus"></i>
                                        {{ $Term->Terms_title }}</a>
                                </h5>
                            </div>
                            <div id="{{ $Term->id }}" class="collapse show" role="tabpanel" data-parent="#Termscondition">
                                <div class="card-body">
                                    <p>{{ $Term->Terms_dec}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- ====================== Content Terms ========================================== -->
                    </div>
                    <!-- /accordion payment -->
                </div>
                <!-- ====================== Content Terms ========================================== -->
                <!-- /col -->
            </div>
            <!-- /row -->
        </div>
        <!--/container-->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection