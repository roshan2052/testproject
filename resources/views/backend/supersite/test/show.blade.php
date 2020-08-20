@extends('backend.supersite.layouts.master')
@section('title', $panel)
@section('css')
    <!-- third party css -->
    <link rel="stylesheet" href="{{asset('./backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('./backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <!-- third party css end -->
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title space_create">{{$panel}}
                    <span class="custom_view_pull">
                        <a href="{{route($base_route . '.create')}}" class="btn btn-success">Create</a>
                        <a href="{{route($base_route . '.index')}}" class="btn btn-success">List</a>
                    </span>
                </h4>
                <hr class="custom_hr">
                @include('includes.flash_message')
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                    <tr>
                        <th>Name</th>
                        <td>{{$data['row']->name}}</td>
                    </tr>
                    <tr>
                        <th>Key</th>
                        <td>{{ $data['row']->key }}</td>
                    </tr>
                    <tr>
                        <th>Created Date</th>
                        <td>{{$data['row']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated Date</th>
                        <td>{{$data['row']->updated_at}}</td>
                    </tr>
                    <tr>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ route($base_route.'.edit', ['id' => $data['row']->id]) }}" title="Edit"></a>
                        </td>
                        <td>
                            {!! Form::open(['route' => [$base_route.'.delete', $data['row']->id], 'data-id'=> $data['row']->id, 'class' => 'form-inline', 'onsubmit' => 'handleTypeDelete(event)', 'method' => 'delete']) !!}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete"></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </table>
            </div> <!-- end card body-->
        </div>
    </div>
@endsection
