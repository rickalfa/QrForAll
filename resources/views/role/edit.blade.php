@extends('layouts.app')

@section('template_title')
    Update Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Role</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.update', $role->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('role.form')

                            <div class="form-group form-check">
                                 @foreach($permissions as $permiso)

                                

                                 <div style="width: 50px;"> 
                                   <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permissions[]"
                                    value="{{$permiso->id}}" {{$role->permissions->contains($permiso->id) ? 'checked': ''}}>
                                   <label class="form-check-label" for="exampleCheck1">{{$permiso->name}}</label>
                                </div>

                                 @endforeach
                                 </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
