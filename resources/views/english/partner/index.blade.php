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

@section('page_title', __('Partner'))

@section('content')
    <div class="page-content container-fluid">
        <h1 class="page-title">
            <i class="voyager-news"></i> Partner
        </h1>
        <a href="{{ route('partner.create') }}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Add New</span>
        </a>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>
                                            Post Image
                                        </th>
                                        <th class="actions text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($partner as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>
                                                <img src="{{ asset('partner'.'/'.$item->image) }}" style="width:100px">
                                            </td>
                                            <td class="no-sort no-click bread-actions">
                                                <a href="javascript:void(0)" onclick="document.getElementById('delete-form-{{$item->id}}').submit()" title="Delete" class="btn btn-sm btn-danger pull-right delete"data-id="3"id="delete-3">
                                                    <i class="voyager-trash"></i> <span class="hidden-xs hidden-sm">Delete</span>
                                                </a>
                                                {!! Form::open(['url' => route('partner_delete', $item->id), 'method' => 'DELETE', 'id' => 'delete-form-'.$item->id, 'style' => 'display:none']) !!}
                                                {!! Form::close() !!}
                                                <a href="{{ route('partner.edit', $item->id) }}" title="Edit" class="btn btn-sm btn-primary pull-right edit">
                                                <i class="voyager-edit"></i> <span class="hidden-xs hidden-sm">Edit</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <p>No record found</P>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('javascript')

@stop
