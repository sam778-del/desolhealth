@extends('english.layout.inside')

@php
    $service = \App\Advice::orderBy('id', 'DESC')->where('title', '!=', $New->title)->get();
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
                        <figure><img alt="{{ $New->title }}" height="350" src="{{ asset('advice'.'/'.$New->image) }}" style="width:100%;"></figure>
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
                            @foreach($service as $Postsrecent)
                            <li>
                                <div class="alignleft">
                                    <a href="{{ route('hub_details', $Postsrecent->title) }}"><img src="{!! asset('advice'.'/'.$Postsrecent->image) !!}" alt=""></a>
                                </div>
                                <h3>
                                    <a href="{{ route('hub_details', $Postsrecent->title) }}" title="{!! substr($Postsrecent->title, 0, 10)!!}">
                                        {!! substr($Postsrecent->title, 0, 40)!!}
                                    </a>
                                </h3>
                                <p>{!! substr($Postsrecent->description, 0, 60)!!}</p>
                            </li>
                            @endforeach
                            <!-- ================ /New Posts recents content =================== -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection