@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
        <div class="container">
            <!-- =========================== News Title ============================== -->
            <h1>{{ setting('news.news-title') }}</h1>
            <!-- =========================== News Title ============================== -->
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->
    <main>
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                    <!-- =========================== News Title ============================== -->
                       @foreach($News as $new)
                        <div class="col-md-6">
                            <article class="blog">
                                <figure>
                                    <!-- =========================== News Title ============================== -->
                                    <a href="{{ url('News')}}/{{ $new->title }}"><img src="{!! asset('blog'.'/'.$new->image) !!}" alt="{{ $new->title }}">
                                        <div class="preview"><span>Read more</span></div>
                                    </a>
                                </figure>
                                <div class="post_info">
                                    <!-- =========================== News Title ============================== -->
                                    <small>{{ $new->Category->name }} - {{ date('M j, Y', strtotime($new->created_at)) }}</small>
                                    <!-- =========================== News Title ============================== -->
                                    <h2><a href="{{ url('News')}}/{{ $new->title }}">{!! substr($new->title, 0, 28)!!}</a></h2>
                                    <p>{!! substr($new->description, 0, 90) !!}</p>
                                </div>
                            </article>
                            <!-- /article -->
                        </div>
                        <!-- /col -->
                        @endforeach
                    <!-- =========================== News Title ============================== -->
                    </div>
                    <!-- /row -->
                    <!-- /strip list_view -->
                    <div class="pagination__wrapper add_bottom_30">
                        <ul class="pagination">
                            <!-- =========================== News links ============================== -->
                            {{ $News->links() }}
                            <!-- =========================== News links ============================== -->
                        </ul>
                    </div>
                    
                </div>
                <!-- /col -->
                <aside class="col-lg-3">
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Latest Post</h4>
                        </div>
                        <ul class="comments-list">
                            <!-- ==================   Posts recents =========================================================  -->
                            @foreach($Postsrecents as $Postsrecent)
                            <li>
                                <div class="alignleft">
                                    <!-- ==================   Posts recents =========================================================  -->
                                    <a href="{{ url('News')}}/{{ $Postsrecent->title }}"><img src="{!! asset('blog'.'/'.$Postsrecent->image) !!}" alt=""></a>
                                </div>
                                <!-- ==================   Posts recents =========================================================  -->
                                <small>{{ $Postsrecent->Category->name }} - {{ date('M j, Y', strtotime($Postsrecent->created_at)) }}</small>
                                <h3>
                                    <!-- ==================   Posts recents =========================================================  -->
                                    <a href="{{ url('News')}}/{{ $Postsrecent->title }}" title="{!! substr($Postsrecent->title, 0, 10)!!}">
                                    <!-- ==================   Posts recents =========================================================  -->
                                    {!! substr($Postsrecent->title, 0, 40)!!}
                                    </a>
                                </h3>
                            </li>
                            @endforeach
                            <!-- ==================   Posts recents =========================================================  -->
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="cats">
                            <!-- ==================   Category =========================================================  -->
                            @foreach($Categores as $Category)
                                <li><a href="{{ url('Categores')}}/{{ $Category->name }}">{{ $Category->name }}<span>({{ $Category->id }})</span></a></li>
                            @endforeach
                            <!-- ==================   Category =========================================================  -->
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Popular Room</h4>
                        </div>
                        <div class="tags">
                           <!-- ==================   Popular Rooms =========================================================  -->
                           @foreach($PopularRooms as $PopularRoom)
                            <a href="{{ url('Beds') }}/{{ $PopularRoom->slug }}">{{ $PopularRoom->Bed_type }}</a>
                           @endforeach
                           <!-- ==================   Popular Rooms =========================================================  -->
                        </div>
                    </div>
                    <!-- /widget -->
                </aside>
                <!-- /aside -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection