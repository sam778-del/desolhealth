@extends('english.layout.inside')

@php
    $service = \App\Service::orderBy('id', 'DESC')->where('title', '!=', $New->title)->get();
@endphp
<!-- 
    https://www.youtube.com/watch?v=I8h0eZZQt6I
-->

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
    <div class="sub_header_in">
        <div class="container">
            <!-- ================ /New title =================== -->
            <h1>{{  $New->title }}</h1>
            <!-- ================ /New title =================== -->
        </div>
        <!-- /container -->
    </div>  
    <main>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-9">
                    <div class="singlepost">
                        <!-- ================ /New title =================== -->
                        <figure><img alt="{{ $New->title }}" height="350" src="{{ asset('service'.'/'.$New->image) }}" style="width:100%;"></figure>
                        <!-- ================ /New title =================== -->
                        <h1>{{ $New->title }}</h1>
                        <div class="postmeta">
                            <ul>
                                <!-- ================ /New title =================== -->
                                <li><a><i class="ti-calendar"></i> {{ date('M j, Y', strtotime($New->created_at)) }}</a></li>
                                <!-- ================ /New title =================== -->
                            </ul>
                        </div>
                        <!-- /post meta -->
                        <div class="post-content">
                            <p>{{ $New->description }}</p>
                        </div>
                        <!-- /post -->
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Other Services</h4>
                        </div>
                        <ul class="comments-list">
                            <!-- ================ /New Posts recents content =================== -->
                            @foreach($service->take(4) as $Postsrecent)
                            <li>
                                <div class="alignleft">
                                    <a href="{{ route('service_details', $Postsrecent->title) }}"><img src="{!! asset('service'.'/'.$Postsrecent->image) !!}" alt=""></a>
                                </div>
                                <h3>
                                    <a href="{{ route('service_details', $Postsrecent->title) }}" title="{!! substr($Postsrecent->title, 0, 10)!!}">
                                        {!! substr($Postsrecent->title, 0, 40)!!}
                                    </a>
                                </h3>
                                <p>{!! substr($Postsrecent->description, 0, 60)!!}</p>
                            </li>
                            @endforeach
                            <!-- ================ /New Posts recents content =================== -->
                        </ul>
                    </div>
                    @if($New->test == 'Service')
                        <p class="btn_home_align"><a href="{{ url('/#appointmentForm') }}" class="btn_1 rounded">Book Appointment</a></p>
                    @else
                    <div class="widget-title">
                        <h4>Amount : <span class="badge badge-success">{{ env('CURRENCY_SYMBOL').' '.$New->price }}</span></h4>
                        @php
                           $user = Auth::user();
                        @endphp
                    </div>
                    <form method="POST" action="{{ route('pay') }}" id="paymentForm">
                        {{ csrf_field() }}
                        @if(Auth::check())
                            <input name="name" type="hidden" value="{{ $user->name }}" />
                            <input name="email" type="hidden" value="{{ $user->email }}" />
                            <input name="amount" type="hidden" value="{{ $New->price }}" />
                            <input name="service_name" type="hidden" value="{{ $New->title }}" />
                        @endif
                        <button class="btn_1 rounded" type="submit">Book Test</button>
                    </form>
                    @endif
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection