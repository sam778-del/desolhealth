@extends('english.layout.inside')

@section('content')
<!-- ============================================================= Content Start ============================================================= -->
<div class="sub_header_in">
        <div class="container">
            <!-- ================ Patient name  =================== -->
            <h1>Edit PorFile : {{ $Patient->name }}</h1>
            <!-- ================ Patient name  =================== -->
        </div>
        <!-- /container -->
    </div>
    <!-- /sub_header -->
    
    <main>
        <div class="container margin_60">
            <div class="row">
                <div class="col-md-12">
                    <!-- ================ Patient  Messagge =================== -->
                     @if(session('Messagge'))
                            <div class="success-box">
                                <div class="alert alert-success">Congratulations. Your Edit PorFile has been Edit Successfully</div>
                            </div>
                     @endif
                     <!-- ================ Patient name  =================== -->
                    <div class="step first">
                        <!-- ================ Patient name  =================== -->
                        <h3>Edit PorFile : {{ $Patient->name }}</h3>
                    <ul class="nav nav-tabs" id="tab_checkout" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#tab_1" role="tab" aria-controls="tab_1" aria-selected="true">PorFile</a>
                      </li>
                    </ul>
                    <div class="tab-content checkout">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab_1">
                            <!-- ============================= Patient  ============================= -->
                            {{ Form::open(['url'=>"Patients/$Patient->name",'files' => 'true', 'method' => 'PUT']) }}
                            @csrf
                            <div class="form-group">
                                <input name="email" type="email" class="form-control" placeholder="Email" value="{{ $Patient->email }}">
                            </div>
                            <div class="form-group">
                                <input name="name" type="text" class="form-control" placeholder="Name" value="{{ $Patient->name }}">
                            </div>
                            <label>(leave blank to keep the original password) </label>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control" placeholder="Password">
                                {{ Form::hidden('password', $Patient->password) }}
                                {{ Form::hidden('remember_token', $Patient->remember_token) }}
                            </div>
                            <hr>
                            <div class="form-group">
                                <input class="form-control" style="background: transparent;border: 0;padding-left:0;" type="file" name="avatar">
                            </div>
                            <input type="submit" value="Send" class="btn_1 full-width" >
                             {{ Form::close() }}
                             <!-- ================ Patient name  =================== -->
                            </div>
                            <!-- /other_addr_c -->
                        </div>
                        <!-- /tab_1 -->
                      
                        <!-- /tab_2 -->
                    </div>
                    </div>
                    <!-- /step -->
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->
<!-- ============================================================= Content end   ============================================================= -->
@endsection