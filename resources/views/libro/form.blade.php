<div class="box box-info padding-1">
    <div class="box-body">
        

        <div class="form-group">
            {{ Form::label('nombre_libro') }}
            {{ Form::text('nombre_libro', $libro->nombre_libro, ['class' => 'form-control' . ($errors->has('nombre_libro') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Libro']) }}
            {!! $errors->first('nombre_libro', '<div class="invalid-feedback">:message</p>') !!}
        </div>



        <div class="form-group">
            {{ Form::label('categoria_libro') }}
            {{ Form::select('categoria_libro',$categorias , $libro->categoria_libro, ['class' => 'form-control' . ($errors->has('categoria_libro') ? ' is-invalid' : ''), 'placeholder' => 'Categoria Libro']) }}
            {!! $errors->first('categoria_libro', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>