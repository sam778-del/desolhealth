@extends('english.layout.inside')

@section('content')
<!-- ============================================================ Content Start ============================================================= -->
<main>
  <div id="results">
    <div class="sub_header_in">
      <div class="container">
        <!-- ==================================== Beds Content Department  ======================================== -->
        <h1>{{ setting('doctors.Doctors-title') }}</h1>
        <!-- ==================================== Beds Content Department  ======================================== -->
      </div>
      <!-- /container -->
    </div>
  </div>
  <!-- ==================================== Content Doctors  ======================================== -->
  <div class="container margin_60_35">
    <div class="row">
      <aside class="col-lg-3" id="sidebar">
        <div id="filters_col">
          <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
          <div class="collapse show" id="collapseFilters">
            <div class="filter_type">
              <!-- ==================================== Beds Content Doctors  ======================================== -->
              <h6>{{ setting('doctors.Doctors-title') }}</h6>
              <ul>
                <!-- ==================================== Beds Content Doctors  ======================================== -->
                @foreach($Doctors_select as $Doctor_select)
                <li>
                  <label class="container_check">
                    <!-- ==================================== Beds Content Doctors  ======================================== -->
                    <a href="{{ url('Doctors') }}/{{ $Doctor_select->name }}" style="color: #333;">{{ $Doctor_select->name }}</a> 
                    <!-- ==================================== Beds Content Doctors  ======================================== -->
                    <small>{{ $Doctor_select->id }}</small>
                    <input type="checkbox">
                  </label>
                </li>
                @endforeach
                <!-- ==================================== Beds Content Doctors  ======================================== -->
              </ul>
            </div>
          </div>
          <!--/collapse -->
        </div>
        <!--/filters col-->
      </aside>
      <!-- /aside -->
      <div class="col-lg-9">
        <!-- ==================================== Beds Content Doctors  ======================================== -->
        @foreach($Doctors as $Doctor)
        <div class="strip list_view">
          <div class="row no-gutters">
            <div class="col-lg-5">
              <figure>
                <!-- ==================================== Beds Content Doctors  ======================================== -->
                <a href="{{ url('Doctors') }}/{{ $Doctor->name }}">
                  <!-- ==================================== Beds Content Doctors  ======================================== -->
                  <img src="{{ asset(Voyager::image($Doctor->avatar)) }}" class="img-fluid" alt="{{ $Doctor->name }}">
                  <div class="read_more"><span>Read more</span></div></a>
                  <!-- ==================================== Beds Content Doctors  ======================================== -->
                  <small>Doctor Mobile : {{ $Doctor->Doctor_Mobile }}</small>
                  <!-- ==================================== Beds Content Doctors  ======================================== -->
                </figure>
              </div>
              <div class="col-lg-7">
                <div class="wrapper">
                  <!-- ==================================== Content Doctors  ======================================== -->
                  <h3><a href="{{ url('Doctors') }}/{{ $Doctor->name }}">{{ $Doctor->name }}</a></h3>
                  <!-- ==================================== Content Doctors  ======================================== -->
                  @if(isset($Doctor->Doctor->Specialist)) 
                  <small>Specialty : {{ $Doctor->Doctor->Specialist }}</small>
                  @else
                  <small>Specialty is not yet Selected</small>
                  @endif
                  <!-- ==================================== Content Doctors  ======================================== -->
                  @if(isset($Doctor->Doctor->Designation)) 
                  <p>Designation : {!! substr($Doctor->Doctor->Designation, 0, 80)!!}</p>
                  @else
                  <p>Designation is not yet Selected</p>
                  @endif
                  <!-- ==================================== Content Doctors  ======================================== -->
                  @if(isset($Doctor->Doctor->Short_Biography)) 
                  <p>Biography : {!! substr($Doctor->Doctor->Short_Biography, 0, 180)!!}</p>
                  @else
                  <p>Biography is not yet Selected</p>
                  @endif
                  <!-- ==================================== Content Doctors  ======================================== -->
                </div>
                <ul>
                  <!-- ==================================== Content Doctors  ======================================== -->
                  @if(isset($Doctor->Doctor->active)) 
                  @if($Doctor->Doctor->active == 1)
                  <li><span class="loc_open">Active</span></li>
                  @else
                  <li><span class="loc_closed">Inactive</span></li>
                  @endif
                  @else
                  <li><span class="loc_closed">Out Of Work</span></li>
                  @endif
                  <!-- ==================================== Content Doctors  ======================================== -->
                </ul>
              </div>
            </div>
          </div>
          <!-- /strip list_view -->
          @endforeach
          <!-- /strip list_view -->
          <div class="pagination__wrapper add_bottom_30">
            <ul class="pagination">
              <!-- ==================================== Content Doctors  ======================================== -->
              {{ $Doctors->links() }}
              <!-- ==================================== Content Doctors  ======================================== -->
            </ul>
          </div>
        </div>
      </div>      
    </div>
  </main>
  <!-- ============================================================= Content end   ============================================================= -->
  @endsection