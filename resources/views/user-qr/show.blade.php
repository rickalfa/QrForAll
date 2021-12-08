@extends('layouts.app')

@section('template_title')
    {{ $userQr->name ?? 'Show User Qr' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show User Qr</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('user-qrs.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Url Qr:</strong>
                            {{ $userQr->url_qr }}
                        </div>
                        <div class="form-group">
                            <strong>Content:</strong>
                            {{ $userQr->content }}
                        </div>
                        <div class="form-group">
                            <strong>Tags:</strong>
                            {{ $userQr->tags }}
                        </div>
                        <div class="form-group">
                            <strong>Category Type Id:</strong>
                            {{ $userQr->category_type_id }}
                        </div>
                        <div class="form-group">
                            <strong>Owner User Id:</strong>
                            {{ $userQr->owner_user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Date Create:</strong>
                            {{ $userQr->date_create }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
