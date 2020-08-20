@extends('backend.supersite.layouts.master')
@section('title', $panel)
@section('content')
<div class="col-lg-12">
  <div class="card">
    <!-- card-body start -->
    <div class="card-body">
      <h4 class="mb-3 header-title">{{$panel}}
{{--        @if (hasPermission('list action'))--}}
          <a href="{{route($base_route . '.index')}}" class="btn btn-success custom_btn_cl">List</a>
{{--        @endif--}}
      </h4>
      <hr class="custom_hr">
      @include('includes.flash_message')
       @include($view_path.'.includes.main_form',['route' => $base_route . '.update', 'method' => 'put','files' => true,'button' => 'Update','page' => 'edit'])
    </div>
    <!-- end card-body -->
  </div>
</div>
@endsection

