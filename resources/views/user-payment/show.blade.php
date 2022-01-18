@extends('layouts.app')

@section('template_title')
    {{ $userPayment->name ?? 'Show User Payment' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User Payment</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user-payments.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $userPayment->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pay Plataform:</strong>
                            {{ $userPayment->pay_plataform }}
                        </div>
                        <div class="form-group">
                            <strong>Pay Amount:</strong>
                            {{ $userPayment->pay_amount }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
