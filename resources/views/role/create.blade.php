@extends('layouts.app')

@section('template_title')
    Create Role
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Role</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('roles.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            <div class="box box-info padding-1">
                             <div class="box-body">
                                 
                                 <div class="form-group">
                                     {{ Form::label('name') }}
                                     {{ Form::text('name', $role->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
                                     {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
                                 </div>
                                 <div class="form-group">
                                     {{ Form::label('guard_name') }}
                                     {{ Form::text('guard_name', $role->guard_name, ['class' => 'form-control' . ($errors->has('guard_name') ? ' is-invalid' : ''), 'placeholder' => 'Guard Name']) }}
                                     {!! $errors->first('guard_name', '<div class="invalid-feedback">:message</p>') !!}
                                 </div>

                                 <div class="form-group form-check">
                                 @foreach($permissions as $permiso)

                                

                                 <div style="width: 50px;"> 
                                   <input type="checkbox" class="form-check-input" id="exampleCheck1" name="permissions[]" value="{{$permiso->id}}">
                                   <label class="form-check-label" for="exampleCheck1">{{$permiso->name}}</label>
                                </div>

                                 @endforeach
                                 </div>

        

                            </div>
                            <div class="box-footer mt20">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                          

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
