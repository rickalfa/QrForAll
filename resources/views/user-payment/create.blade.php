@extends('layouts.app')

@section('template_title')
    Create User Payment
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create User Payment</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user-payments.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('user-payment.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
