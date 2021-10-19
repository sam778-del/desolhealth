@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<main>
			<div id="results">
				<div class="sub_header_in">
					<div class="container">
						<!-- ============================== Content Bed managers Title=============== -->
						<h1>{{ setting('bedmanagers.Bedmanagers-Title') }}</h1>
					</div>
					<!-- /container -->
				</div>
			</div>
			<div class="container margin_60_35">
				<div class="row">
					<aside class="col-lg-3" id="sidebar">
					<div id="filters_col">
				<a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">
				<!-- ============================== Content Bed managers Title=============== -->	
				{{ setting('bedmanagers.Bedmanagers-Title') }}</a>
				<div class="collapse show" id="collapseFilters">
						<div class="filter_type">
							<!-- ============================== Content Bed managers Title=============== -->
							<h6>{{ setting('bedmanagers.Bedmanagers-Title') }}</h6>
									<ul>
									<!-- ============================== Content Bed select =============== -->
									@foreach($Beds_select as $Bed_select)
                                    <li>
                                     <label class="container_check">
                                     <!-- ============================== Content Bed slug =============== -->
                                     <a href="{{ url('Beds') }}/{{ $Bed_select->slug }}" style="color: #333;">{!! substr($Bed_select->Bed_type, 0, 18)!!}</a>
                                        <small>{{ $Bed_select->id }}</small>
                                        </label>
                                    </li>
                                    @endforeach
									</ul>
								</div>
								
								<div class="filter_type">
									<h6>Room Price</h6>
									<ul>
									<!-- ============================== Content Bed managers Title=============== -->	
									@foreach($Beds_select as $Bed_select)
                                    <li>
                                     <label class="container_check">
                                     <!-- ============================== Content Bed slug =============== -->
                                     <a href="{{ url('Beds') }}/{{ $Bed_select->slug }}" style="color: #333;">{!! substr($Bed_select->Charge, 0, 18)!!}</a>
                                        <small>{{ $Bed_select->id }}</small>
                                         
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
						<div class="row">
							<!-- ============================== Content Bed managers Title=============== -->
			                @foreach($Beds as $Bed)
			                <!-- ============================== Content Bed images =============== -->
			                <?php $images = json_decode($Bed->Bed_images,true); ?>
			                <?php $images[0]; ?>
							<div class="col-md-6">
								<div class="strip grid">
									<figure>
										<!-- ============================== Content slug =============== -->
										<a href="{{ url('Beds')}}/{{ $Bed->slug }}">
											<!-- ============================== Content image =============== -->
											<img src="{{ asset(Voyager::image($images[0])) }}" class="img-fluid" alt="{{ $Bed->slug }}">
											<div class="read_more"><span>Read more</span></div>
										</a>
										<!-- ============================== Content Department Name =============== -->
										<small>{{ $Bed->Department->Department_Name }}</small>
									</figure>
									<div class="wrapper">
										<!-- ==============================  Content  Bed type =============== -->
										<h3><a href="{{ url('Beds')}}/{{ $Bed->slug }}">{{ $Bed->Bed_type }}</a></h3>
										<!-- ============================== Content  Bed created_at =============== -->
										<small>{{ date('M j Y', strtotime($Bed->created_at)) }}</small>
										<!-- ============================== Content Bed Description =============== -->
										<p>{!! substr($Bed->Description, 0, 80)!!}</p>
									</div>
									<ul>
										<!-- ============================== Content Bed Active =============== -->
										@if($Bed->Active == 1)
	                                    <li><span class="loc_open">Active</span></li>
	                                    @else
	                                    <li><span class="loc_closed">Inactive</span></li>
	                                    @endif
	                                    <!-- ============================== Content Bed Active =============== -->
										<li>
										</li>
									</ul>
								</div>
							</div>
							<!-- /strip grid -->
							@endforeach
						</div>
						<!-- /row -->
						<div class="pagination__wrapper add_bottom_30">
                        <ul class="pagination">
                        	<!-- ============================== Content Beds  =============== -->
                            {{ $Beds->links() }}
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