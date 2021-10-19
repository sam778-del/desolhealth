@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<main>
    <div id="results">
        <div class="sub_header_in">
            <div class="container">
                <!-- ============================== Content Bloods  =============== -->
                <h1>{{ setting('bloods.Bloods-title') }}</h1>
                <!-- ============================== Content Bloods  =============== -->
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
                            <h6>Bloods Category</h6>
                            <ul>
                                <!-- ============================== Content Bloods  =============== -->
                                @foreach($Bloods_select as $Blood)
                                <li>
                                    <label class="container_check">
                                        <!-- ============================== Content Bloods  =============== -->
                                        <a href="{{ url('Bloods') }}/{{ $Blood->slug }}" style="color: #333;">{{ $Blood->Blood_en }}</a> 
                                        <!-- ============================== Content Bloods  =============== -->
                                        <small>{{ $Blood->id }}</small>
                                        <input type="checkbox">
                                    </label>
                                </li>
                                @endforeach
                                <!-- ============================== Content Bloods  =============== -->
                            </ul>
                        </div>
                    </div>
                    <!--/collapse -->
                </div>
                <!--/filters col-->
            </aside>
            <!-- /aside -->
            <div class="col-lg-9">
                <!-- ============================== Content Bloods  =============== -->    
                @foreach($Bloods as $Blood)
                <div class="strip list_view">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <figure>
                                <!-- ============================== Content Bloods  =============== -->
                                <a href="{{ url('Bloods')}}/{{ $Blood->slug }}">
                                    <!-- ============================== Content Bloods  =============== -->
                                    <img src="{{ asset(Voyager::image($Blood->Blood_image)) }}" class="img-fluid" alt="{{ $Blood->Blood_en }}">
                                    <div class="read_more"><span>Read more</span></div>
                                </a>
                                <!-- ============================== Content Bloods  =============== -->
                                <small>{{ $Blood->Blood_en }}</small>
                            </figure>
                        </div>
                        <div class="col-lg-7">
                            <div class="wrapper">
                                <h3><a href="{{ url('Bloods')}}/{{ $Blood->slug }}">{{ $Blood->Blood_en }}</a></h3>
                                <!-- ============================== Content Bloods  =============== -->
                                <small>{{ date('M j Y', strtotime($Blood->created_at)) }}</small>
                                <!-- ============================== Content Bloods  =============== -->
                                <p>{{ $Blood->Bloodcontent }}</p>
                                <!-- ============================== Content Bloods  =============== -->
                                <a class="address" href="{{ url('Bloods')}}/{{ $Blood->slug }}">Donation Blood</a>
                            </div>
                            <ul>
                                <!-- ============================== Content Bloods  =============== -->
                                @if($Blood->Active == 1)
                                <li><span class="loc_open">Active</span></li>
                                @else
                                <li><span class="loc_closed">Inactive</span></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- ============================== Content Bloods  =============== -->
                <!-- /strip list_view -->
                <div class="pagination__wrapper add_bottom_30">
                    <ul class="pagination">
                        <!-- ============================== Content Bloods  =============== -->
                        {{ $Bloods->links() }}
                        <!-- ============================== Content Bloods  =============== -->
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