@extends('backend.supersite.layouts.master')
@section('title', $page_title)
@section('css')
    <!-- third party css -->
    <link href="{{asset('./backend/assets/libs/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('./backend/assets/libs/datatables/responsive.bootstrap4.css')}}" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('./backend/assets/libs/datatables/buttons.bootstrap4.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('./backend/assets/libs/datatables/select.bootstrap4.css')}}" rel="stylesheet" type="text/css"/>
    <!-- third party css end -->
@endsection
@section('content')
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title space_create">{{$page_title}}
                    <span class="custom_view_pull">
{{--              @if (hasPermission('create action'))--}}
                            <a href="{{route($base_route . '.create')}}" class="btn btn-success">Create</a>
{{--                        @endif--}}
                        {{--                        @if (hasPermission('list action'))--}}
                            <a href="{{route($base_route . '.index')}}" class="btn btn-success">List</a>
{{--                        @endif--}}
          </span>
                </h4>
                <hr class="custom_hr">
                @include('includes.flash_message')
                <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                    <tr>
                        <th>Title</th>
                        <td>{{$data['row']->title}}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{$data['row']->slug}}</td>
                    </tr>
                    <tr>
                        <th>Key</th>
                        <td>{{ $data['row']->key }}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        @if($data['row']->image)
                            <td><img class="img-responsive img-circle" src="{{asset('storage/backend/supersite/images/page_category/'.$data['row']->image)}}" height="150" width="150" alt="Image"></td>
                        @else
                            <td>Image Not Found</td>
                        @endif
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
                        {{--            @if (hasPermission('edit action'))--}}
                        <td>
                            <a class="btn  btn-warning"
                               href="{{ route($base_route.'.edit', ['id' => $data['row']->id]) }}" title="Edit"><span
                                    class="mdi mdi-square-edit-outline"></span></a>
                        </td>
                        {{--            @endif--}}
                        {{--            @if(hasPermission('delete action'))--}}
                        <td>
                            {!! Form::open(['route' => [$base_route.'.delete', $data['row']->id], 'data-id'=> $data['row']->id, 'class' => 'form-inline', 'onsubmit' => 'handleTypeDelete(event)', 'method' => 'delete']) !!}
                            <button type="submit" class="btn btn-danger" title="Delete"><span
                                    class="mdi mdi-delete-sweep-outline"></span></button>
                            {!! Form::close() !!}
                        </td>
                        {{--            @endif--}}
                    </tr>
                </table>
            </div> <!-- end card body-->
        </div>
    </div>
@endsection
