<div class="form-group">
    <div class="row">
        <div class="col-sm-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Cấu hình Email</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        {{ Form::label('mail', __('repositories.label.email'), ['class'=>'control-label']) }}
                        {{ Form::email('mail[address]', $items->keyBy('key')['mail']['value']['address'] ?? null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('subject', __('repositories.label.subject'), ['class'=>'control-label']) }}
                        {{ Form::text('mail[subject]', $items->keyBy('key')['mail']['value']['subject'] ?? null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>

            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Cấu hình Flickr</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        {{ Form::label('flickr_api_key', __('repositories.label.flickr_api_key'), ['class'=>'control-label']) }}
                        {{ Form::text('flickr[api_key]', $items->keyBy('key')['flickr']['value']['api_key'] ?? null, ['class' => 'form-control']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('flickr_photo_setid', __('repositories.label.flickr_photo_setid'), ['class'=>'control-label']) }}
                        {{ Form::text('flickr[photo_setid]', $items->keyBy('key')['flickr']['value']['photo_setid'] ?? null, ['class' => 'form-control']) }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">Cấu hình Facebook</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        {{ Form::label('fb_embed', __('repositories.label.fb_embed'), ['class'=>'control-label']) }}
                        {{ Form::textarea('fb_embed[0]', $items->keyBy('key')['fb_embed']['value'][0] ?? null, ['class' => 'form-control', 'rows' => 6]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
