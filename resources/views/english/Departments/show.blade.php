@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<main>
    <div id="results">
        <div class="sub_header_in">
            <div class="container">
                <!-- ==================================== Content Department  ======================================== -->
                <h1>{{ $Department->Department_Name }}</h1>
            </div>
            <!-- /container -->
        </div>
    </div>
    <div class="container margin_60_35">
        <div class="row">
            <!-- ==================================== Beds Content Department  ======================================== -->    
            @if(isset($Beds) == '' || count($Beds) == 0)  
            <div class="col-lg-12" style="padding:30px">
                <div class="alert alert-info alert-dismissible fade show" role="alert" style="padding:30px">
                 NO SEARCH FOUND BEETER GO TO OUR Departments TO SEE MORE Beds <a href="{{ url('Departments') }}" class="alert-link">{{ __('Departments') }}
                 </a>
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="padding:30px">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
      @else
      <div class="col-lg-12">
        <div class="row">
         <!-- ==================================== Beds Content Department  ======================================== -->
         @foreach($Beds as $Bed)
         <?php $images = json_decode($Bed->Bed_images,true); ?>
         <?php $images[0]; ?>
         <!-- /strip grid -->
         <div class="col-md-6">
            <div class="strip grid">
                <figure>
                    <!-- ==================================== Beds Content Department  ======================================== -->
                    <a href="{{ url('Beds')}}/{{ $Bed->slug }}">
                        <!-- ==================================== Beds Content Department  ======================================== -->
                        <img src="{{ asset(Voyager::image($images[0])) }}" class="img-fluid" alt="{{ $Bed->Bed_type }}">

                        <div class="read_more"><span>Read more</span></div>
                    </a>
                    <small>{{ $Bed->Charge }}</small>
                </figure>
                <div class="wrapper">
                    <!-- ==================================== Beds Content Department  ======================================== -->
                    <h3><a href="{{ url('Beds')}}/{{ $Bed->slug }}">{{ $Bed->Bed_type }}</a></h3>
                    <!-- ==================================== Beds Content Department  ======================================== -->
                    <small>{{ $Bed->Department->Department_Name }}</small>
                    <!-- ==================================== Beds Content Department  ======================================== -->
                    <p>{!! substr($Bed->Description, 0, 240)!!}</p>
                    <!-- ==================================== Beds Content Department  ======================================== -->
                    <a class="address" href="{{ url('Beds')}}/{{ $Bed->slug }}">{{ $Bed->Bed_Capacity}} Patient</a>
                </div>
                <ul>
                    <!-- ==================================== Beds Content Department  ======================================== -->
                    @if($Bed->Active == 1)
                    <li><span class="loc_open">Active</span></li>
                    @else
                    <li><span class="loc_closed">Inactive</span></li>
                    @endif
                    <!-- ==================================== Beds Content Department  ======================================== -->
                    <li>
                        
                    </li>
                </ul>
            </div>
        </div>
        <!-- /strip grid -->
        @endforeach
        <!-- ==================================== Beds Content Department  ======================================== -->
    </div>
    <!-- /row -->
    <div class="pagination__wrapper add_bottom_30">
        <ul class="pagination">
            <!-- ==================================== Beds Content Department  ======================================== -->
            {{ $Beds->links() }}
        </ul>
    </div>
</div>
@endif
<!-- /col -->
</div>      
</div>
<!-- /container -->
</main>
<!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection