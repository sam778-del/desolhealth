@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
    <div class="container">
        <h1>Contacts Hospital</h1>
    </div>
    <!-- /container -->
</div>
<!-- /sub_header -->
<main>
    <!-- =========================== Contacts map ============================== -->
    {{-- <iframe src="{{ setting('contact.Contacts-map') }}" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
    <!-- /map -->
    <div class="container margin_60_35">
        <div class="row justify-content-center">
            
            <div class="col-xl-5 col-lg-6 pr-xl-5">
                <div class="main_title_3">
                    <span></span>
                    <h2>Send us a message</h2>
                    <p>Please submit your enquiry/feedback.</p>
                </div>
                <!-- =========================== User Contact us ============================== -->
                {{ Form::open(['route' => ['Contactus.store'], 'method' => 'POST']) }}
                {{ csrf_field() }}
                @guest
                @else
                {{ Form::hidden('User_id', Auth::user()->id) }}
                @endguest
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
                <p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded"></p>
                @if(session('Messagge'))
                <div class="success-box">
                    <div class="alert alert-success">Congratulations. Your Messagge has been sent successfully</div>
                </div>
                @endif
                {{ Form::close() }}
                <!-- =========================== User Contact us ============================== -->
            </div>
            <div class="col-xl-5 col-lg-6 pl-xl-5">
                <div class="box_contacts">
                    <i class="ti-support"></i>
                    <h2>Need Help?</h2>
                    <!-- =========================== Contacts Help phone ============================== -->
                    <a>{{ setting('contact.Help-phone') }}</a> - <a>{{ setting('contact.Help-email') }}</a>
                </div>
                <div class="box_contacts">
                    <i class="ti-help-alt"></i>
                    <h2>Questions?</h2>
                    <!-- =========================== Contacts phone ============================== -->
                    <a>{{ setting('contact.Questions-phone') }}</a> - <a>{{ setting('contact.Questions-email') }}</a>
                </div>
                <div class="box_contacts">
                    <i class="ti-home"></i>
                    <h2>Address</h2>
                    <!-- =========================== Contacts Address ============================== -->
                    <a>{{ setting('contact.Address') }}.</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /container -->
</main>
<!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection