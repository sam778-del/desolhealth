@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ====================== search NULL =========== -->
        @if(isset($search) == '' || count($News) == 0) 
        <main>
        <div id="error_page">
            <div class="wrapper">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-xl-7 col-lg-9">
                            <h2>{{ count($News) }} News</h2>
                             <!-- ==================   start Form search =======================================================  -->             
                            {!! Form::open(['method'=>'GET','url'=>'Newssearch','role'=>'search']) !!}
                            {{ csrf_field() }}
                                <div class="search_bar_error">
                                    <input type="text" name="search" class="form-control" placeholder="Search Again?">
                                    <input type="submit" value="Search">
                                </div>
                            {!! Form::close() !!}
                            <!-- ==================   End Form search =========================================================  -->
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
        @else
       <main>
        <div id="results">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-4 col-10">
                       <!-- ===================================== count SEARCH FOUND =================================== -->
                       <h4><strong>{{ count($News) }}</strong> result for All listing</h4>
                       <!-- ===================================== count SEARCH FOUND =================================== -->
                   </div>
               </div>
               <!-- /row -->
           </div>
           <!-- /container -->
       </div>
       <!-- /results -->
       <!-- ===================================== SEARCH FOUND =================================== -->
        <div class="container margin_60_35">
            <div class="isotope-wrapper">
            <!-- ===================================== News =================================== -->
            @foreach($News as $new)
            <div class="strip list_view isotope-item bars">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <figure>
                             <!-- ===================================== News =================================== -->
                            <a href="{{ url('News')}}/{{ $new->slug }}">
                                 <!-- ===================================== News =================================== -->
                                <img src="{!! asset(Voyager::image( $new->image )) !!}" class="img-fluid" alt="{{ $new->title }}">
                                 <!-- ===================================== News =================================== -->
                                <div class="read_more"><span>Read more</span>
                                </div>
                            </a>
                             <!-- ===================================== News =================================== -->
                            <small>{{ $new->Category->name }}</small>
                        </figure>
                    </div>
                    <div class="col-lg-7">
                        <div class="wrapper">
                             <!-- ===================================== News =================================== -->
                            <h3><a href="{{ url('News')}}/{{ $new->slug }}">{{ $new->title }}</a></h3>
                             <!-- ===================================== News =================================== -->
                            <small>{{ date('M j, Y', strtotime($new->created_at)) }}</small>
                             <!-- ===================================== News =================================== -->
                            <p>{!! substr($new->body, 0, 190) !!}</p>
                             <!-- ===================================== News =================================== -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /strip list_view -->
            @endforeach
            <!-- ===================================== News =================================== -->
        </div>
        <!-- /isotope-wrapper-->
        <div class="pagination__wrapper add_bottom_30">
            <ul class="pagination">
                <!-- ===================================== News links =================================== -->
                 {{ $News->links() }}
                <!-- ===================================== News links =================================== -->
            </ul>
        </div>
        </div>
        <!-- /container -->
        @endif
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection