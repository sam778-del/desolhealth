@extends('english.layout.main')
@section('content')
<main>
    <div id="error_page">
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-7 col-lg-9">
                        <h2>404</h2>
                        <p>We're sorry, but the page you were looking for doesn't exist.</p>
                        <a class="anima-button btn-lg btn" href="{{ url('/') }}"><i class="fa-long-arrow-left fa"></i>Go back to home</a>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /error_page -->
</main>
<!--/main-->
<!-- ========================== CONTENT : END ============================================== -->
@endsection
