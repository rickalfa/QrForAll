<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('url_qr') }}
            {{ Form::text('url_qr', $userQr->url_qr, ['class' => 'form-control' . ($errors->has('url_qr') ? ' is-invalid' : ''), 'placeholder' => 'Url Qr']) }}
            {!! $errors->first('url_qr', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('content') }}
            {{ Form::text('content', $userQr->content, ['class' => 'form-control' . ($errors->has('content') ? ' is-invalid' : ''), 'placeholder' => 'Content']) }}
            {!! $errors->first('content', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tags') }}
            {{ Form::text('tags', $userQr->tags, ['class' => 'form-control' . ($errors->has('tags') ? ' is-invalid' : ''), 'placeholder' => 'Tags']) }}
            {!! $errors->first('tags', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('category_type_id') }}
            {{ Form::text('category_type_id', $userQr->category_type_id, ['class' => 'form-control' . ($errors->has('category_type_id') ? ' is-invalid' : ''), 'placeholder' => 'Category Type Id']) }}
            {!! $errors->first('category_type_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('owner_user_id') }}
            {{ Form::select('owner_user_id',$userApp , $userQr->owner_user_id, ['class' => 'form-control' . ($errors->has('owner_user_id') ? ' is-invalid' : ''), 'placeholder' => 'Owner User Id']) }}
            {!! $errors->first('owner_user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>