@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
        <div class="container">
            <h1>Operations</h1>
        </div>
        <!-- ============================== /container ============================= -->
    </div>
     <div class="container margin_60_35">
      <div class="row">
        <aside class="col-lg-4" id="sidebar">
          <div id="filters_col">
           <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters</a>
            <div class="collapse show" id="collapseFilters">
              <div class="filter_type">
                <h6>Operations Filters</h6>
                <ul>
                <!-- ================ Popular Rooms /New  content =================== -->
                @foreach($Operations_select as $Operation_select)
                    <li>
                        <label class="container_check">
                        <!-- ================ Popular Rooms /New  content =================== -->
                        <a href="{{ url('Operations') }}/{{ $Operation_select->Operation_slug }}" style="color:#333;">{{ $Operation_select->Operation_Title }}</a>
                        <!-- ================ Popular Rooms /New  content =================== --> 
                        <small>{{ $Operation_select->id }}</small>
                        </label>
                    </li>
                @endforeach
                <!-- ================ Popular Rooms /New  content =================== -->
                </ul>
              </div>
            </div>
            <!--/collapse -->
          </div>
          <!--/filters col-->
        </aside>
        <!-- /aside -->
        <div class="col-lg-8">
        <!-- ================ Operations  content =================== -->
         @foreach($Operations as $Operation)
          <div class="strip list_view">
            <div class="row no-gutters">
              <div class="col-lg-5">
                <figure>
                  <!-- ================ Operations  content =================== -->
                  <a href="{{ url('Operations') }}/{{ $Operation->Operation_slug }}">
                    <!-- ================ Operations  content =================== -->
                    <img src="{{ asset(Voyager::image($Operation->Operation_image)) }}" class="img-fluid" alt="{{ $Operation->Operation_slug }}">
                    <!-- ================ Operations  content =================== -->
                    <div class="read_more"><span>Read more</span></div></a>
                </figure>
              </div>
              <div class="col-lg-7">
                <div class="wrapper">
                  <!-- ================ Operations  content =================== -->
                  <h3><a href="{{ url('Operations') }}/{{ $Operation->Operation_slug }}">{{ $Operation->Operation_Title }}</a></h3>
                  <!-- ================ Operations  content =================== -->
                    @if(isset($Operation->Doctor->name)) 
                      <p>Doctor : {!! substr($Operation->Doctor->name, 0, 80)!!}</p>
                    @else
                      <p>Doctor is not yet Selected</p>
                    @endif
                    <!-- ================ Operations  content =================== -->
                    <p>{!! substr($Operation->Operation_Description, 0, 180)!!}</p>
                    <!-- ================ Operations  content =================== -->
                </div>
              </div>
            </div>
          </div>
          <!-- /strip list_view -->
          @endforeach
          <!-- ================ Operations  content =================== -->
          <!-- /strip list_view -->
            <div class="pagination__wrapper add_bottom_30">
                <ul class="pagination">
                     <!-- ================ Operations  content =================== -->
                     {{ $Operations->links() }}
                     <!-- ================ Operations  content =================== -->
                </ul>
            </div>
            </div>
            <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection