@extends('layouts.app')

@section('template_title')
    {{ $userApp->name ?? 'Show User App' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User App</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user-app.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $userApp->name }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $userApp->email }}
                        </div>
                        <div class="form-group">
                            <strong>Country:</strong>
                            {{ $userApp->country }}
                        </div>
                        <div class="form-group">
                            <strong>Address:</strong>
                            {{ $userApp->address }}
                        </div>
                        <div class="form-group">
                            <strong>City:</strong>
                            {{ $userApp->city }}
                        </div>
                        <div class="form-group">
                            <strong>Date Create:</strong>
                            {{ $userApp->date_create }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
