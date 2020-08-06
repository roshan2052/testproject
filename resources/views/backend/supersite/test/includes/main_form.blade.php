@if($page == 'create')
{!! Form::open(['route' => $route, 'method' => $method,  'files' => $files , 'class' => 'form-horizontal data-parsley-validate custom_form']) !!}
@else
  {!! Form::model($data['row'],['route' => [$route, $data['row']->id], 'method' => $method,'files' => $files]) !!}
@endif
<div class="form-group row mb-3">
    {!! Form::label('title', 'Title *', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
        {!! Form::text('title', null, ['class' => "form-control", 'id' => 'title', 'placeholder' => 'title']) !!}
        @include('backend.supersite.includes.single_field_validation_message',['fieldname' => 'title'])
    </div>
</div>

<div class="form-group row mb-3">
    {!! Form::label('key', 'Key *', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
        {!! Form::text('key', null, ['class' => "form-control", 'id' => 'key', 'placeholder' => 'Key']) !!}
        @include('backend.supersite.includes.single_field_validation_message',['fieldname' => 'key'])
    </div>
</div>

<div class="form-group row mb-3">
    {!! Form::label('photo', 'Photo', ['class' => 'col-3 col-form-label']) !!}
    <div class="col-9">
        <label for="example-fileinput">Please Upload Photo</label>
        {!! Form::file('photo', ['class' => 'form-control-file', 'id' => 'photo', 'placeholder' => 'Please Upload Photo']) !!}
        @include('backend.supersite.includes.single_field_validation_message',['fieldname' => 'photo'])
    </div>
</div>

<div class="form-group row mb-3">
    {!! Form::label('status', 'Status', ['class' => 'col-3 col-form-label', 'for' => '' ]) !!}
    <div class="col-9">
        <div class="radio radio-primary form-check-inline">
            @if($page == 'edit')
                {!! Form::radio('status','publish',(isset($data['row']) && $data['row']->status === 'publish')?true:false,['id' => 'statusRadio1']) !!}
            @else
                {!! Form::radio('status','publish',true,['id' => 'statusRadio1']) !!}
            @endif
            <label for="inlineRadio1"> Publish </label>
        </div>
        <div class="radio radio-danger form-check-inline">
            @if($page == 'edit')
                {!! Form::radio('status','un-publish',(isset($data['row']) && $data['row']->status === 'un-publish') ? true:false,['id' => 'statusRadio2']) !!}
            @else
                {!! Form::radio('status','un-publish',false,['id' => 'statusRadio2']) !!}
            @endif
            <label for="inlineRadio1"> Unpublish </label>
        </div>
    </div>
</div>

<div class="form-group mb-0 justify-content-end row">
  <div class="col-9">
    {!! Form::submit($button , ['class' => 'btn btn-info waves-effect waves-light']) !!}
    {!! Form::reset('Clear' , ['class' => 'btn btn-danger waves-effect waves-light']) !!}
  </div>
</div>
{!! Form::close() !!}
