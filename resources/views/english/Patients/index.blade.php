@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
        <div class="container">
            <h1>Patients</h1>
        </div>
        <!-- ============================== /container ============================= -->
    </div>
     <div class="container margin_60_35">
      <div class="row">
        <aside class="col-lg-4" id="sidebar">
          <div id="filters_col">
        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">
          <!-- ================ Patient title  =================== -->
           {{ setting('patients.Patients-title') }} </a>
            <div class="collapse show" id="collapseFilters">
              <div class="filter_type">
                <!-- ================ Patient title  =================== -->
                <h6>{{ setting('patients.Patients-title') }}</h6>
                <ul>
                <!-- ================ Patient title  =================== -->
                @foreach($Patients as $Patient_select)
                    <li>
                        <label class="container_check">
                          <!-- ================ Patient title  =================== -->
                          <a href="{{ url('Patients') }}/{{ $Patient_select->name }}" style="color: #333;">{{ $Patient_select->name }}</a> 
                          <!-- ================ Patient title  =================== -->
                          <small>{{ $Patient_select->id }}</small>
                        </label>
                    </li>
                @endforeach
                <!-- ================ Patient title  =================== -->
                </ul>
              </div>
            </div>
            <!--/collapse -->
          </div>
          <!--/filters col-->
        </aside>
        <!-- /aside -->
        <div class="col-lg-8">
         <!-- ================ Patient title  =================== -->
         @foreach($Patients as $Patient)
          <div class="strip list_view">
            <div class="row no-gutters">
              <div class="col-lg-5">
                <figure>
                  <!-- ================ Patient content  =================== -->
                  <a href="{{ url('Patients') }}/{{ $Patient->name }}">
                     <!-- ================ Patient content  =================== -->
                    <img src="{{ asset(Voyager::image($Patient->avatar)) }}" class="img-fluid" alt="{{ $Patient->name }}">
                    <div class="read_more"><span>Read more</span></div></a>
                     <!-- ================ Patient content  =================== -->
                    @if(isset($Patient->Patient->department->Department_Name)) 
                      <small>Department : {{ $Patient->Patient->department->Department_Name }}</small>
                    @else
                    <small>Department is not yet Selected</small>
                    @endif
                </figure>
              </div>
              <div class="col-lg-7">
                <div class="wrapper">
                   <!-- ================ Patient content  =================== -->
                  <h3><a href="{{ url('Patients') }}/{{ $Patient->name }}">{{ $Patient->name }}</a></h3>
                   <!-- ================ Patient content  =================== -->
                    @if(isset($Patient->Patient->Patient_ID)) 
                      <small>Patient ID : {{ $Patient->Patient->Patient_ID }}</small>
                    @else
                      <small>Patient ID Not Selected</small>
                    @endif
                    <br>
                     <!-- ================ Patient content  =================== -->
                    @if(isset($Patient->Patient->Date_of_Birth)) 
                      <small>Date of Birth : {!! substr($Patient->Patient->Date_of_Birth, 0, 80)!!}</small>
                    @else
                      <small>Date_of_Birth is not yet Selected</small>
                    @endif
                     <br>
                      <!-- ================ Patient content  =================== -->
                    @if(isset($Patient->Patient->Patient_Age)) 
                      <small>Patient Age : {!! substr($Patient->Patient->Patient_Age, 0, 180)!!}</small>
                    @else
                      <small>Patient_Age is not yet Selected</small>
                    @endif
                </div>
                <ul>
                  <!-- ================ Patient content  =================== -->
                  @if($Patient->Status == 1)
                  <li><span class="loc_open">In Hospital</span></li>
                  @else
                  <li><span class="loc_closed">Out Hospital</span></li>
                  @endif
                  <!-- ================ Patient content  =================== -->
                </ul>
              </div>
            </div>
          </div>
          <!-- /strip list_view -->
          @endforeach
          <!-- ================ Patient title  =================== -->
          <!-- /strip list_view -->
            <div class="pagination__wrapper add_bottom_30">
                <ul class="pagination">
                     <!-- ================ Patient links  =================== -->
                     {{ $Patients->links() }}
                     <!-- ================ Patient links  =================== -->
                </ul>
            </div>
            </div>
            <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection