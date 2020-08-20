{{--<ol class="breadcrumb m-0">--}}

{{--  <li class="breadcrumb-item"><a href="{{route('backend.supersite.dashboard.index')}}">Dashboard</a></li>--}}
{{--  @if(Route::current()->getName() !== 'backend.supersite.dashboard.index')--}}
{{--    <li class="breadcrumb-item"><a href="{{route($base_route. '.index')}}">{{$panel}}</a></li>--}}
{{--  @endif--}}
{{--  <li class="breadcrumb-item active">{{$page_title}}</li>--}}
{{--</ol>--}}

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">{{ $panel }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    @if(Route::current()->getName() !== 'backend.supersite.dashboard.index')
                        <li class="breadcrumb-item active">{{ $panel }}</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
</div>
