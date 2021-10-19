@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
        <div class="container">
            <h1>Births</h1>
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
                <h6>Births Filters</h6>
                <ul>
                <!-- ============================== Content Births select =============== -->  
                @foreach($Births_select as $Birth_select)
                    <li>
                        <label class="container_check">
                          <!-- ============================== Content Births select =============== -->
                          <a href="{{ url('Births') }}/{{ $Birth_select->slug }}" style="color:#333;">{{ $Birth_select->Birth_name }}</a>
                          <!-- ============================== Content Births select =============== --> 
                          <small>{{ $Birth_select->id }}</small>
                          <!-- ============================== Content Births select =============== -->
                          <input type="checkbox">
                        
                        </label>
                    </li>
                @endforeach
                <!-- ============================== Content Births select =============== -->
                </ul>
              </div>
            </div>
            <!--/collapse -->
          </div>
          <!--/filters col-->
        </aside>
        <!-- /aside -->
        <div class="col-lg-8">
          <!-- ============================== Content Births select =============== -->
         @foreach($Births as $Birth)
          <div class="strip list_view">
            <div class="row no-gutters">
              <div class="col-lg-5">
                <figure>
                  <!-- ============================== Content Births select =============== -->
                  <a href="{{ url('Births') }}/{{ $Birth->slug }}">
                    <!-- ============================== Content Births select =============== -->
                    <img src="{{ asset(Voyager::image($Birth->Birth_image)) }}" class="img-fluid" alt="{{ $Birth->slug }}">
                    <div class="read_more"><span>Read more</span></div></a>
                </figure>
              </div>
              <div class="col-lg-7">
                <div class="wrapper">
                  <!-- ============================== Content Births select =============== -->
                  <h3><a href="{{ url('Births') }}/{{ $Birth->slug }}">{{ $Birth->Birth_name }}</a></h3>
                  <!-- ============================== Content Births select =============== -->
                    @if(isset($Birth->Doctor->name)) 
                      <p>Doctor : {!! substr($Birth->Doctor->name, 0, 80)!!}</p>
                    @else
                      <p>Doctor is not yet Selected</p>
                    @endif
                    <!-- ============================== Content Births select =============== -->
                  <p>{!! substr($Birth->Birth_content, 0, 180)!!}</p>
                    
                </div>
              </div>
            </div>
          </div>
          <!-- /strip list_view -->
          @endforeach
          <!-- ============================== Content Births select =============== -->
          <!-- /strip list_view -->
            <div class="pagination__wrapper add_bottom_30">
                <ul class="pagination">
                     <!-- ============================== Content Births select =============== -->
                     {{ $Births->links() }}
                </ul>
            </div>
            </div>
            <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection