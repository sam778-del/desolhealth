@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <main>
        <div id="results">
            <div class="sub_header_in">
        <div class="container">
            <!-- ==================================== Medicines title =========================================== -->
            <h1>Medicines</h1>
            <!-- ==================================== Medicines =========================================== -->
        </div>
        <!-- /container -->
    </div>
       </div>
       <!-- /results -->
        <div class="container margin_60_35">
            <div class="row">
                <aside class="col-lg-3" id="sidebar">
                    <div id="filters_col">
                <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
                        <div class="collapse show" id="collapseFilters">
                            <div class="filter_type">
                                <h6>Medicines Category</h6>
                                <ul>
                                <!-- ==================================== Medicines title =========================================== -->
                                @foreach($Medicines_select as $Medicine)
                                    <li>
                                        <label class="container_check">
                                        <!-- ==================================== Medicines title =========================================== -->
                                        <a href="{{ url('Medicines') }}/{{ $Medicine->slug }}" style="color: #333;">{{ $Medicine->Medicine_Name }}</a> 
                                        <!-- ==================================== Medicines title =========================================== -->
                                          <small>{{ $Medicine->id }}</small>
                                        </label>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--/collapse -->
                    </div>
                    <!--/filters col-->
                </aside>
                <!-- /aside -->
                <div class="col-lg-9">
                <!-- ==================================== Medicines =========================================== -->
                @foreach($Medicines as $Medicine)
                    <div class="strip list_view">
                        <div class="row no-gutters">
                            <div class="col-lg-5">
                                <figure>
                                    <!-- ==================================== Medicines =========================================== -->
                                    <a href="{{ url('Medicines')}}/{{ $Medicine->slug }}">
                                        <!-- ==================================== Medicines =========================================== -->
                                <img src="{{ asset(Voyager::image($Medicine->Medicine_image)) }}" class="img-fluid" alt="{{ $Medicine->Medicine_Name }}">
                                        <div class="read_more"><span>Read more</span></div>
                                    </a>
                                    <!-- ==================================== Medicines =========================================== -->
                                    <small>{{ $Medicine->Category_Name }}</small>
                                </figure>
                            </div>
                            <div class="col-lg-7">
                                <div class="wrapper">
                                    <!-- ==================================== Medicines =========================================== -->
                                    <h3><a href="{{ url('Medicines')}}/{{ $Medicine->slug }}">{{ $Medicine->Medicine_Name }}</a></h3>
                                    <!-- ==================================== Medicines =========================================== -->
                                    <small>{{ date('M j Y', strtotime($Medicine->created_at)) }}</small>
                                    <!-- ==================================== Medicines =========================================== -->
                                     <p>Manufactured By : {{ $Medicine->Manufactured_By }}</p>
                                     <!-- ==================================== Medicines =========================================== -->
                                    <p>{{ $Medicine->Medicine_Description }}</p>
                                </div>
                                <ul>
                                    <!-- ==================================== Medicines =========================================== -->
                                    @if($Medicine->Status == 1)
                                    <li><span class="loc_open">Active</span></li>
                                    @else
                                    <li><span class="loc_closed">Inactive</span></li>
                                    @endif
                                    <!-- ==================================== Medicines =========================================== -->
                                    <li><span class="loc_open">$ {{$Medicine->Price }}</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- ==================================== Medicines =========================================== -->
                    <!-- /strip list_view -->
                    <div class="pagination__wrapper add_bottom_30">
                        <ul class="pagination">
                            <!-- ==================================== Medicines =========================================== -->
                            {{ $Medicines->links() }}
                            <!-- ==================================== Medicines =========================================== -->
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