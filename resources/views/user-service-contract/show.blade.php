@extends('layouts.app')

@section('template_title')
    {{ $userServiceContract->name ?? 'Show User Service Contract' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User Service Contract</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user-service-contracts.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name Service:</strong>
                            {{ $userServiceContract->name_service }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $userServiceContract->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Start Service Contract:</strong>
                            {{ $userServiceContract->start_service_contract }}
                        </div>
                        <div class="form-group">
                            <strong>Expire Service Contract:</strong>
                            {{ $userServiceContract->expire_service_contract }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $userServiceContract->description }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
