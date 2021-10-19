@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_title', __('Services'))

@section('content')
    <div class="page-content container-fluid">
        <div class="row">
            @if(Session::has('error'))
                <p>{!! session('error') !!}</p>
            @endif
            <div class="col-md-9">
                <form method="POST" action="{{ route('service_create') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="voyager-character"></i> Post Title
                                <span class="panel-desc"> The title for your post</span>
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="">
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Post Content</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                            </div>
                        </div>
        
                        <div class="panel-body">
                            <textarea  required  class="form-control" name="description" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-actions">
                                <a class="panel-action voyager-resize-full" data-toggle="panel-fullscreen" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <select name="service_type" id="type" class="form-control">
                                        <option value="">Service Type</option>
                                        <option value="Service">Service</option>
                                        <option value="Test">Test</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel-body">
                                    <input type="number" name="price" id="price" class="form-control" placeholder="Price" value="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-bordered panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="icon wb-image"></i> Post Image</h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <input type="file" name="image">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">
                        <i class="icon wb-plus-circle"></i> Create New Post                 
                    </button>
                </form>
            </div>
        </div>
    </div>
@stop

@section('javascript')
<script>
    $(document).ready(function() {
        $('#price').attr('readonly', 'readonly');
        $('select[name="service_type"]').on('click', function() {
            var type_value = $('#type :selected').val();
            if(type_value == 'Test')
            {
                $('#price').removeAttr('readonly', 'readonly');
            }else{
                $('#price').attr('readonly', 'readonly');
            }
        });
    });
</script>
@stop
