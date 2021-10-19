@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
        <div class="container">
            <h1>Faq</h1>
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
                                <li><a href="#Faq" class="active"><i class="icon_document_alt"></i>Frequently Asked Question</a></li>
                            </ul>
                        </div>
                        <!--/sticky -->
                </aside>
                <!--/aside -->
                <!-- ====================== Content Terms ========================================== -->
                <div class="col-lg-9" id="faq">
                    <h4 class="nomargin_top">Frequently Asked Question</h4>
                    <div role="tablist" class="add_bottom_45 accordion_2" id="Faq">
                        <!-- ====================== Content Terms ========================================== -->
                        @foreach($faq as $Term)
                        <div class="card">
                            <div class="card-header" role="tab">
                                <h5 class="mb-0">
                                    <a data-toggle="collapse" href="#faq{{ $Term->id }}" aria-expanded="true"><i class="indicator ti-minus"></i>
                                        {{ $Term->title }}</a>
                                </h5>
                            </div>
                            <div id="faq{{ $Term->id }}" class="collapse show" role="tabpanel" data-parent="#Faq">
                                <div class="card-body">
                                    <p>{{ $Term->description }}</p>
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