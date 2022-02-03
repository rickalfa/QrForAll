<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_seller') }}
            {{ Form::text('name_seller', $sale->name_seller, ['class' => 'form-control' . ($errors->has('name_seller') ? ' is-invalid' : ''), 'placeholder' => 'Name Seller']) }}
            {!! $errors->first('name_seller', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name_bussines') }}
            {{ Form::text('name_bussines', $sale->name_bussines, ['class' => 'form-control' . ($errors->has('name_bussines') ? ' is-invalid' : ''), 'placeholder' => 'Name Bussines']) }}
            {!! $errors->first('name_bussines', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('iva') }}
            {{ Form::text('iva', $sale->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('iva', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('amount_service_contract') }}
            {{ Form::text('amount_service_contract', $sale->amount_service_contract, ['class' => 'form-control' . ($errors->has('amount_service_contract') ? ' is-invalid' : ''), 'placeholder' => 'Amount Service Contract']) }}
            {!! $errors->first('amount_service_contract', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pay_id') }}
            {{ Form::text('pay_id', $sale->pay_id, ['class' => 'form-control' . ($errors->has('pay_id') ? ' is-invalid' : ''), 'placeholder' => 'Pay Id']) }}
            {!! $errors->first('pay_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>