@if($errors->has($fieldname))
    <span class="text-danger">{!! $errors->first($fieldname) !!}</span>
@endif
