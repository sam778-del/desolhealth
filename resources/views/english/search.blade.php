@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<!-- ====================== search NULL =========== -->
@if(isset($search) == '' || count($News) == 0 || count($Departments) == 0 || count($Users) == 0 || count($Operations) == 0 || count($Births) == 0 || count($Bloods) == 0 || count($Medicines) == 0) 
<main>
    <div id="error_page">
        <div class="wrapper">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-7 col-lg-9">
                        <h2>0 Result</h2>
                        <!-- ==================   start Form search =======================================================  -->             
                        {!! Form::open(['method'=>'GET','url'=>'search','role'=>'search']) !!}
                        {{ csrf_field() }}
                        <div class="search_bar_error">
                            <input type="text" name="search" class="form-control" placeholder="Search Again?">
                            <input type="submit" value="Search">
                        </div>
                        {!! Form::close() !!}
                        <!-- ==================   End Form search =========================================================  -->
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /wrapper -->
    </div>
    <!-- /error_page -->
</main>
<!--/main--> 
@else
<main>
        <div id="results">
           <div class="container">
               <div class="row">
                   <div class="col-lg-3 col-md-4 col-10">
                       <h4>Result for All listing</h4>
                   </div>
                  
               </div>
               <!-- /row -->
           </div>
           <!-- /container -->
       </div>
       <!-- /results -->
        <div class="container margin_60_35">
            <!-- ================ category filter content  =================== -->
            <div class="category_filter">
                <label class="container_radio">All
                    <input type="radio" id="all_2" name="categories_filter" value="all" checked data-filter="*" class="selected">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">Departments
                    <input type="radio" id="Departments" name="categories_filter" value="Departments" data-filter=".Departments">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">Users
                    <input type="radio" id="Users" name="categories_filter" value="Users" data-filter=".Users">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">Operations
                    <input type="radio" id="Operations" name="categories_filter" value="Operations" data-filter=".Operations">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">Births
                    <input type="radio" id="Births" name="categories_filter" value="Births" data-filter=".Births">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">Bloods
                    <input type="radio" id="Bloods" name="categories_filter" value="Bloods" data-filter=".Bloods">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">News
                    <input type="radio" id="News" name="categories_filter" value="News" data-filter=".News">
                    <span class="checkmark"></span>
                </label>
                <label class="container_radio">Medicines
                    <input type="radio" id="Medicines" name="categories_filter" value="Medicines" data-filter=".Medicines">
                    <span class="checkmark"></span>
                </label>
            </div>
            <!-- ================ category filter content =================== -->
            <div class="isotope-wrapper">
            <div class="row">
                <!-- ================ Department filter content =================== -->
                @foreach($Departments as $Department)
                <?php $images = json_decode($Department->Department_images,true); ?>
                <?php $images[0]; ?>
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item Departments">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('Departments') }}/{{ $Department->slug }}">
                                <img src="{{ asset(Voyager::image($images[0])) }}" class="img-fluid" alt="{{ $Department->Department_Name }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>{{ $Department->Department_Name }}</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('Departments') }}/{{ $Department->slug }}">{{ $Department->Department_Name }}</a></h3>
                            <small>{{ date('M j, Y', strtotime($Department->created_at)) }}</small>
                            <p>{!! substr($Department->Department_Description, 0, 60) !!}.</p>
                        </div>
                    </div>
                </div>
                <!-- /strip grid -->
                @endforeach
                <!-- ================ News filter content =================== -->
                <!-- ================ News filter content =================== -->
                @foreach($News as $new)
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item News">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('News')}}/{{ $new->slug }}">
                                <img src="{!! asset(Voyager::image( $new->image )) !!}" class="img-fluid" alt="{{ $new->slug }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>{{ $new->Category->name }}</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('News')}}/{{ $new->slug }}">{!! substr($new->title, 0,20) !!}</a></h3>
                            <small>{{ date('M j, Y', strtotime($new->created_at)) }}</small>
                            <p>{!! substr($new->body, 0, 60) !!}.</p>
                        </div>
                    </div>
                </div>
                <!-- /strip grid -->
                @endforeach
                <!-- ================ News filter content =================== -->
                <!-- ================ News filter content =================== -->
                @foreach($Users as $User)
                @if($User->role_id == '2')
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item Users">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('Patients') }}/{{ $User->name }}">
                                <img src="{!! asset(Voyager::image($User->avatar)) !!}" class="img-fluid" alt="{{ $User->name }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('Patients')}}/{{ $User->name }}">{{ $User->name }}</a></h3>
                            <small>{{ date('M j, Y', strtotime($User->created_at)) }}</small>
                        </div>
                    </div>
                </div>
                @elseif($User->role_id == '3')
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item Users">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('Doctors') }}/{{ $User->name }}">
                                <img src="{!! asset(Voyager::image($User->avatar)) !!}" class="img-fluid" alt="{{ $User->name }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('Doctors')}}/{{ $User->name }}">{{ $User->name }}</a></h3>
                            <small>{{ date('M j, Y', strtotime($User->created_at)) }}</small>
                        </div>
                    </div>
                </div>
                @elseif($User->role_id == '1')
                @endif
                <!-- /strip grid -->
                @endforeach
                <!-- ================ Operation filter content =================== -->
                <!-- ================ Operation filter content =================== -->
                @foreach($Operations as $Operation)
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item Operations">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('Operations')}}/{{ $Operation->Operation_slug }}">
                                <img src="{!! asset(Voyager::image($Operation->Operation_image)) !!}" class="img-fluid" 
                                     alt="{{ $Operation->Operation_slug }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>{{ $Operation->Date  }}</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('News')}}/{{ $Operation->Operation_slug }}">{!! substr($Operation->Operation_Title, 0,20) !!}</a></h3>
                            <small>{{ date('M j, Y', strtotime($Operation->created_at)) }}</small>
                            <p>{!! substr($Operation->Operation_Description, 0, 30) !!}.</p>
                        </div>
                    </div>
                </div>
                <!-- /strip grid -->
                @endforeach
                <!-- ================ Birth filter content =================== -->
                <!-- ================ Birth filter content =================== -->
                @foreach($Births as $Birth)
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item Births">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('Births')}}/{{ $Birth->slug }}">
                                <img src="{!! asset(Voyager::image($Birth->Birth_image)) !!}" class="img-fluid" 
                                     alt="{{ $Birth->slug }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>{{ $Birth->Birth_name  }}</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('Births')}}/{{ $Birth->slug }}">{!! substr($Birth->Birth_name, 0,20) !!}</a></h3>
                            <small>{{ date('M j, Y', strtotime($Birth->created_at)) }}</small>
                            <p>{!! substr($Birth->Birth_content, 0, 30) !!}.</p>
                        </div>
                    </div>
                </div>
                <!-- /strip grid -->
                @endforeach
                <!-- ================ Blood filter content =================== -->
                <!-- ================ Blood filter content =================== -->
                @foreach($Bloods as $Blood)
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item Bloods">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('Bloods')}}/{{ $Blood->slug }}">
                                <img src="{!! asset(Voyager::image($Blood->Blood_image)) !!}" class="img-fluid" 
                                     alt="{{ $Blood->slug }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>{{ $Blood->Blood_en  }}</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('Bloods')}}/{{ $Blood->slug }}">{!! substr($Blood->Blood_en, 0,20) !!}</a></h3>
                            <small>{{ date('M j, Y', strtotime($Blood->created_at)) }}</small>
                            <p>{!! substr($Blood->Bloodcontent, 0, 30) !!}.</p>
                        </div>
                    </div>
                </div>
                <!-- /strip grid -->
                @endforeach
                <!-- ================ Medicine filter content =================== -->
                <!-- ================ Medicine filter content =================== -->
                @foreach($Medicines as $Medicine)
                <div class="col-xl-4 col-lg-6 col-md-6 isotope-item Medicines">
                    <div class="strip grid">
                        <figure>
                            <a href="{{ url('Medicines')}}/{{ $Medicine->slug }}">
                                <img src="{!! asset(Voyager::image($Medicine->Medicine_image)) !!}" class="img-fluid" 
                                     alt="{{ $Medicine->slug }}">
                                <div class="read_more"><span>Read more</span></div>
                            </a>
                            <small>$ {{ $Medicine->Price  }}</small>
                        </figure>
                        <div class="wrapper">
                            <h3><a href="{{ url('Medicines')}}/{{ $Medicine->slug }}">{!! substr($Medicine->Medicine_Name, 0,20) !!}</a></h3>
                            <small>{{ date('M j, Y', strtotime($Medicine->created_at)) }}</small>
                            <p>{!! substr($Medicine->Manufactured_By, 0, 30) !!}.</p>
                        </div>
                    </div>
                </div>
                <!-- /strip grid -->
                @endforeach
                <!-- ================ Medicine filter content =================== -->
                <!-- ================ Medicine filter content =================== -->
            </div>
            <!-- /row -->
            </div>
            <!-- /isotope-wrapper -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
    @endif
     <!-- ================ load filter content =================== -->
    <script>
    $(window).on('load', function(){
      var $container = $('.isotope-wrapper');
      $container.isotope({ itemSelector: '.isotope-item', layoutMode: 'masonry' });
    });

    $('.category_filter').on( 'click', 'input', 'change', function(){
      var selector = $(this).attr('data-filter');
      $('.isotope-wrapper').isotope({ filter: selector });
    });
    </script>
     <!-- ================ load filter content =================== -->
<!-- ============================================================= Content end   ============================================================= -->
@endsection










