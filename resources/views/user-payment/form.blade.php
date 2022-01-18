<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('user_id') }}
            {{ Form::text('user_id', $userPayment->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pay_plataform') }}
            {{ Form::text('pay_plataform', $userPayment->pay_plataform, ['class' => 'form-control' . ($errors->has('pay_plataform') ? ' is-invalid' : ''), 'placeholder' => 'Pay Plataform']) }}
            {!! $errors->first('pay_plataform', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pay_amount') }}
            {{ Form::text('pay_amount', $userPayment->pay_amount, ['class' => 'form-control' . ($errors->has('pay_amount') ? ' is-invalid' : ''), 'placeholder' => 'Pay Amount']) }}
            {!! $errors->first('pay_amount', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>