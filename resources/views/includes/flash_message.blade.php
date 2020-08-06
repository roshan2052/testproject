@if(session()->has('success_message'))
  <section class="content-header fmessage">
    <div class="alert alert-success alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa fa-check"></i>
      {!! session()->get('success_message') !!}
    </div>
  </section>

@endif
@if(session()->has('error_message'))
  <section class="content-header fmessage">
    <div class="alert alert-warning alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
      <i class="icon fa exclamation-triangle"></i>
      {!! session()->get('error_message') !!}
    </div>
  </section>

@endif