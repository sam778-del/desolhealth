@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<main>
        <div class="sub_header_in">
        <div class="container">
            <!-- ==================================== Content Department Title ======================================== -->
            <h1>{{ setting('department.Department-Title') }}</h1>
            <!-- ==================================== Content Department Title ======================================== -->
        </div>
        <!-- /container -->
        </div>
       <!-- /results -->
        <div class="container margin_60_35">
            <div class="row">
                <aside class="col-lg-3" id="sidebar">
                    <div id="filters_col">
                <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Departments</a>
                        <div class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Department Category</h6>
                                <ul>
                                <!-- ==================================== Content Department  ======================================== -->
                                @foreach($Departments_select as $Department)
                                    <li>
                                        <label class="container_check">
                                        <!-- ==================================== Content Department  ======================================== -->
                                        <a href="{{ url('Departments') }}/{{ $Department->slug }}" style="color: #333;">{{ $Department->Department_Name }}</a>
                                        <!-- ==================================== Content Department  ======================================== --> 
                                        <small>{{ $Department->id }}</small>
                                        </label>
                                    </li>
                                @endforeach
                                <!-- ==================================== Content Department  ======================================== -->
                                </ul>
                            </div>
                           
                        </div>
                        <!--/collapse -->
                    </div>
                    <!--/filters col-->
                </aside>
                <!-- /aside -->
                
                <div class="col-lg-9">
                <!-- ==================================== Content Department  ======================================== -->    
                @foreach($Departments as $Department_view)
                <!-- ==================================== Content Department images  ======================================== -->
                <?php $images = json_decode($Department_view->Department_images,true); ?>
                <?php $images[0]; ?>
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <!-- ==================================== Content Department images  ======================================== -->
                                    <a href="{{ url('Departments')}}/{{ $Department_view->slug }}">
                                        <!-- ==================================== Content Department images  ======================================== -->
                                        <img src="{{ asset(Voyager::image($images[0])) }}" class="img-fluid" alt="{{ $Department_view->Department_Name }}">
                                        <div class="read_more"><span>Read more</span></div>
                                    </a>
                                    <!-- ==================================== Content Department  ======================================== -->
                                    <small>{{ $Department_view->Department_Name }}</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <!-- ==================================== Content Department  ======================================== -->
                                    <h3><a href="{{ url('Departments')}}/{{ $Department_view->slug }}">{{ $Department_view->Department_Name }}</a></h3>
                                    <!-- ==================================== Content Department  ======================================== -->
                                    <small>{{ date('M j Y', strtotime($Department_view->created_at)) }}</small>
                                    <!-- ==================================== Content Department  ======================================== -->
                                    <p>{{ $Department_view->Department_Description }}</p>
                                    <!-- ==================================== Content Department  ======================================== -->
                                    <a class="address" href="{{ url('Departments')}}/{{ $Department_view->slug }}">Get rooms</a>
                                </div>
                                <ul>
                                    <!-- ==================================== Content Department  ======================================== -->
                                    @if($Department_view->Status == 1)
                                    <li><span class="loc_open">Active</span></li>
                                    @else
                                    <li><span class="loc_closed">Inactive</span></li>
                                    @endif
                                    <!-- ==================================== Content Department  ======================================== -->
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- ==================================== Content Department  ======================================== -->
                    <!-- /strip list_view -->
                    <div class="pagination__wrapper add_bottom_30">
                        <ul class="pagination">
                            <!-- ==================================== Content Department  ======================================== -->
                            {{ $Departments->links() }}
                        </ul>
                    </div>
                </div>
                <!-- /col -->
            </div>      
        </div>
        <!-- /container -->
        
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection