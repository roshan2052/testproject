<ol class="breadcrumb m-0">

  <li class="breadcrumb-item"><a href="{{route('backend.supersite.dashboard.index')}}">Dashboard</a></li>
  @if(Route::current()->getName() !== 'backend.supersite.dashboard.index')
    <li class="breadcrumb-item"><a href="{{route($base_route. '.index')}}">{{$panel}}</a></li>
  @endif
  <li class="breadcrumb-item active">{{$page_title}}</li>
</ol>
