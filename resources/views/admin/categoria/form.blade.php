<div class="col-md-12">
    <div class="form-group {{ $errors->has('cat_nombre')?' has-error':'' }}">
        {!! Form::label('cat_nombre', 'Nombre de la Categoria', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-wrench"></i>
                </div>
                {!! Form::text('cat_nombre', null, ['placeholder' => 'Ej. Educacion', 'class' => 'form-control']) !!} 
            </div>
            @if($errors->has('cat_nombre'))
                <span class="help-block">
                    <strong>{{ $errors->first('cat_nombre') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('cat_descripcion')?' has-error':'' }}">
        {!! Form::label('cat_descripcion', 'Descripcion de la Categoria', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bars"></i>
                </div>
                {!! Form::textarea('cat_descripcion', null, ['class' => 'form-control', 'rows' => '5', 'id' => 'editor1']) !!}
            </div>
            @if($errors->has('cat_descripcion'))
                <span class="help-block">
                    <strong>{{ $errors->first('cat_descripcion') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('cat_estado')?' has-error':'' }}">
        {!! Form::label('cat_estado', 'Estado de la Categoria', ['class' => 'col-md-12']) !!}
        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                {!! Form::select('cat_estado', [true => 'Habilitado', false => 'Inhabilitado'], null, ['class' => 'form-control chosen-select-deselect']) !!}
            </div>
        </div>
    </div>

</div>