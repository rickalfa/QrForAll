@extends('layouts.app')

@section('template_title')
    {{ $sale->name ?? 'Show Sale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Sale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('sales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Seller:</strong>
                            {{ $sale->name_seller }}
                        </div>
                        <div class="form-group">
                            <strong>Name Bussines:</strong>
                            {{ $sale->name_bussines }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $sale->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Amount Service Contract:</strong>
                            {{ $sale->amount_service_contract }}
                        </div>
                        <div class="form-group">
                            <strong>Pay Id:</strong>
                            {{ $sale->pay_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
