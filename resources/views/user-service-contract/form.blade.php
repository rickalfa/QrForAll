<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_service') }}
            {{ Form::text('name_service', $userServiceContract->name_service, ['class' => 'form-control' . ($errors->has('name_service') ? ' is-invalid' : ''), 'placeholder' => 'Name Service']) }}
            {!! $errors->first('name_service', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $userServiceContract->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('start_service_contract') }}
            {{ Form::text('start_service_contract', $userServiceContract->start_service_contract, ['class' => 'form-control' . ($errors->has('start_service_contract') ? ' is-invalid' : ''), 'placeholder' => 'Start Service Contract']) }}
            {!! $errors->first('start_service_contract', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('expire_service_contract') }}
            {{ Form::text('expire_service_contract', $userServiceContract->expire_service_contract, ['class' => 'form-control' . ($errors->has('expire_service_contract') ? ' is-invalid' : ''), 'placeholder' => 'Expire Service Contract']) }}
            {!! $errors->first('expire_service_contract', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $userServiceContract->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>