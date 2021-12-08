@extends('layouts.app')

@section('template_title')
    Create User Qr
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create User Qr</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('user-qrs.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('user-qr.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
