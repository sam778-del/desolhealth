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

@section('page_title', __('Orders'))

@section('content')
    <div class="page-content container-fluid">
        <h1 class="page-title">
            <i class="voyager-news"></i> Order
        </h1>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-hover">
                                <thead>
                                    <th>{{__('Order Id')}}</th>
                                    <th>{{__('Name')}}</th>
                                    <th>{{__('Service Name')}}</th>
                                    <th>{{__('Price')}}</th>
                                    <th>{{__('Status')}}</th>
                                    <th>{{__('Date')}}</th>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $order)
                                        <tr>
                                            <td>{{$order->order_id}}</td>
                                            <td>{{ucfirst($order->name)}}</td>
                                            <td>{{$order->service_name}}</td>
                                            <td>{{env('CURRENCY_SYMBOL').number_format($order->price)}}</td>
                                            <td>
                                                <span class="badge badge-pill @if($order->payment_status == 'succeeded' || $order->payment_status == 'approved') badge-success @else badge-danger @endif">
                                                    {{ucfirst($order->payment_status)}}
                                                </span>
                                            </td>
                                            <td>{{$order->created_at->format('d M Y H:i:s')}}</td>
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
