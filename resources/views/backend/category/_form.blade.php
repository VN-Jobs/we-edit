@include('backend._partials.components.errors')
<div class="form-group">
    {{ Form::label('name', __('repositories.label.title'), [ 'class' => 'control-label' ]) }}<span class="require">*</span>
    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => __('repositories.label.title')]) }}
</div>

<div class="form-group">
    {{ Form::label('description', __('repositories.label.description'), ['class' => 'control-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <label></label>
    <div class="checkbox">
        <label>
            {{ Form::checkbox('locked', true, old('locked'), ['data-toggle'=>'toggle', 'data-size' => 'small']) }} <b>{{ __('repositories.label.locked') }}</b>
        </label>
    </div>
</div>

<div class="form-group text-right">
    <button type="submit" class="btn btn-success btn-sm"><i class="ion-checkmark-circled"></i> {{ isset($item) ? __('repositories.title.edit') : __('repositories.title.create') }}</button>
</div>
