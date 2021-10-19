@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
  <main>
        <div id="results">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-4 col-10">
                       <!-- =========================== News CONTENT ============================== -->
                       <h4><strong>{{ $Newscategory->name }}</strong></h4>
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
            <!-- =========================== News CONTENT ============================== -->
            @foreach($News as $new)
            <div class="strip list_view isotope-item bars">
                <div class="row no-gutters">
                    <div class="col-lg-5">
                        <figure>
                          <!-- =========================== News CONTENT ============================== -->
                            <a href="{{ url('News')}}/{{ $new->title }}">
                              <!-- =========================== News CONTENT ============================== -->
                                <img src="{!! asset('blog'.'/'.$new->image) !!}" class="img-fluid" alt="{{ $new->title }}">
                                <!-- =========================== News CONTENT ============================== -->
                                <div class="read_more"><span>Read more</span>
                                </div>
                            </a>
                            <!-- =========================== News CONTENT ============================== -->
                            <small>{{ $new->Category->name }}</small>
                        </figure>
                    </div>
                    <div class="col-lg-7">
                        <div class="wrapper">
                            <!-- =========================== News CONTENT ============================== -->
                            <h3><a href="{{ url('News')}}/{{ $new->title }}">{{ $new->title }}</a></h3>
                            <!-- =========================== News CONTENT ============================== -->
                            <small>{{ date('M j, Y', strtotime($new->created_at)) }}</small>
                            <!-- =========================== News CONTENT ============================== -->
                            <p>{!! substr($new->description, 0, 190) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /strip list_view -->
            @endforeach
            <!-- =========================== News CONTENT ============================== -->
        </div>
        <!-- /isotope-wrapper-->
            
        <div class="pagination__wrapper add_bottom_30">
            <ul class="pagination">
                 <!-- =========================== News CONTENT ============================== -->
                 {{ $News->links() }}
            </ul>
        </div>
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection