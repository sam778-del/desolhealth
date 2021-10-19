@extends('english.layout.inside')

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
                        <figure><img alt="{{ $New->title }}" class="img-fluid" src="{{ asset('blog'.'/'.$New->image) }}" style="width:100%;"></figure>
                        <!-- ================ /New title =================== -->
                        <h1>{{ $New->title }}</h1>
                        <div class="postmeta">
                            <ul>
                                <!-- ================ /New title =================== -->
                                {{-- <li><a href="#"><i class="ti-folder"></i> {{ $New->category->name }}</a></li> --}}
                                <!-- ================ /New title =================== -->
                                <li><a><i class="ti-calendar"></i> {{ date('M j, Y', strtotime($New->created_at)) }}</a></li>
                                <!-- ================ /New title =================== -->
                                {{-- <li><a><i class="ti-user"></i> {{ $New->user->name }}</a></li> --}}
                                <!-- ================ /New title =================== -->
                                {{-- <li><a><i class="ti-comment"></i>
                                 ({{ count($comments) }}) Comments
                                    </a>
                                </li> --}}
                            </ul>
                        </div>
                        <!-- /post meta -->
                        <div class="post-content">
                            <p>{{ $New->description }}</p>
                        </div>
                        <!-- /post -->
                    </div>
                    <!-- /single-post -->
                    {{-- <div id="comments">
                        <h5> Comments</h5>
                        <ul>
                        <!-- =========================================== Post Comments ============================ -->
                        @foreach($comments as $comment)
                        <li>
                            <div class="avatar">
                                <!-- ================ /New body =================== -->
                            <a href="{{ url('Patients') }}/{{ $comment->user->name }}">
                                <!-- ================ /New body =================== -->
                                <img src="{!! asset(Voyager::image( $comment->user->avatar )) !!}" alt="{{ $comment->user->name }}">
                            </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    <!-- ================ /New body =================== -->
                                    By <a href="{{ url('Patients') }}/{{ $comment->user->name }}">{{ $comment->user->name }}</a><span>|</span>
                                    {{ date('M j, Y', strtotime($comment->created_at)) }}<span>|</span>
                            @guest
                            @else
                            <!-- ================ /New body =================== -->
                            @if(Auth::user()->id == $comment->user->id)        
                            <!--  ==============================================   Comments destroy FORM ============== -->
                            {{ Form::open(['method' => 'DELETE','style' => 'display: inline-block','route' => ['Comments.destroy', $comment->id]]) }} 
                                {{ csrf_field() }} 
                                        <button type="submit" style="color: #004dda;
                                                text-decoration: none;
                                                -moz-transition: all 0.3s ease-in-out;
                                                -o-transition: all 0.3s ease-in-out;
                                                -webkit-transition: all 0.3s ease-in-out;
                                                -ms-transition: all 0.3s ease-in-out;
                                                transition: all 0.3s ease-in-out;
                                                outline: none;background: none;border: 0;display: inline-block;">
                                            <i class="icon-cancel"></i>
                                        </button>
                            {{ Form::close() }}
                            <!--  ==============================================   Comments destroy FORM =============== -->     
                            @endif
                            @endguest
                                </div>
                                <p>
                                    <!-- ================ /New Comment content =================== -->
                                    {{ $comment->Comment_content }}
                                    <!-- ================ /New Comment content =================== -->
                                </p>
                            </div>
                            
                        </li>
                        @endforeach
                        <!-- =========================================== Post Comments ============================ -->
                        </ul>
                    </div> --}}

                    <hr>
                    {{-- @guest
                      <div class="alert alert-info" role="alert">
                        A simple Comment If You Gest <a href="{{ route('register') }}" class="alert-link">{{ __('Register') }}</a>. Give it a click if you like.
                      </div>
                    @else
                    <!-- =========================================== Add Post Comments ============================ --> 
                    <h5>Leave a comment</h5>
                    <!--   ================== FORM comment store ================================ -->
                    {{ Form::open(['route' => ['Comments.store'], 'method' => 'POST']) }}
                    {{ csrf_field() }}
                    <!-- ================ /New Comment content =================== -->
                    {{ Form::hidden('post_id', $New->id) }}
                    <!-- ================ /New Comment content =================== -->
                    <div class="form-group">
                        <textarea class="form-control" name="Comment_content" id="comments2" rows="6" placeholder="Comment"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn_1 add_bottom_15">Comment</button>
                    </div>
                    {{ Form::close() }}
                    <!-- ================ /New Comment content =================== -->
                    @endguest --}}
                </div>
                <!-- /col -->
                <aside class="col-lg-3">
                    {{-- <div class="widget search_blog">
                        <!-- ==================   start Form search =======================================================  -->             
                        {!! Form::open(['method'=>'GET','url'=>'Newssearch','role'=>'search']) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="search" name="search" class="form-control" placeholder="Search..">
                            <span><input type="submit" value="search"></span>
                        </div>
                        {!! Form::close() !!}
                        <!-- ==================   End Form search =========================================================  -->
                    </div> --}}
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Latest Post</h4>
                        </div>
                        <ul class="comments-list">
                            <!-- ================ /New Posts recents content =================== -->
                            @foreach($Postsrecents as $Postsrecent)
                            <li>
                                <div class="alignleft">
                                    <a href="{{ url('News')}}/{{ $Postsrecent->title }}"><img src="{!! asset('blog'.'/'.$Postsrecent->image) !!}" alt=""></a>
                                </div>
                                <small>{{ $Postsrecent->Category->name }} - {{ date('M j, Y', strtotime($Postsrecent->created_at)) }}</small>
                                <h3>
                                    <a href="{{ url('News')}}/{{ $Postsrecent->title }}" title="{!! substr($Postsrecent->title, 0, 10)!!}">
                                    {!! substr($Postsrecent->title, 0, 40)!!}
                                    </a>
                                </h3>
                            </li>
                            @endforeach
                            <!-- ================ /New Posts recents content =================== -->
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="cats">
                            <!-- ================ Category /New  content =================== -->
                            @foreach($Categores as $Category)
                            <!-- ================ Category /New  content =================== -->
                            <li><a href="{{ url('Categores')}}/{{ $Category->name }}">{{ $Category->name }}<span>({{ $Category->id }})</span></a></li>
                            @endforeach
                            <!-- ================ Category /New  content =================== -->
                        </ul>
                    </div>
                    <!-- /widget -->
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Popular Room</h4>
                        </div>
                        <div class="tags">
                           <!-- ================ Popular Rooms /New  content =================== -->
                           @foreach($PopularRooms as $PopularRoom)
                            <a href="{{ url('Beds') }}/{{ $PopularRoom->slug }}">{{ $PopularRoom->Bed_type }}</a>
                           @endforeach
                           <!-- ================ Popular Rooms /New  content =================== -->
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