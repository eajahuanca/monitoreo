<div class="col-md-12">
    <div class="form-group {{ $errors->has('ban_imagen')?' has-error':'' }}">
        {!! Form::label('ban_imagen', 'Subir Archivo (JPG|JPEG|PNG)', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-file"></i>
                </div>
                {!! Form::file('ban_imagen', null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('ban_imagen'))
                <span class="help-block">
                    <strong>{{ $errors->first('ban_imagen') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('ban_descripcion')?' has-error':'' }}">
        {!! Form::label('ban_descripcion', 'Descripcion del Banner', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bars"></i>
                </div>
                {!! Form::textarea('ban_descripcion', null, ['class' => 'form-control', 'rows' => '10', 'id' => 'editor1']) !!}
            </div>
            @if($errors->has('ban_descripcion'))
                <span class="help-block">
                    <strong>{{ $errors->first('ban_descripcion') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('ban_estado')?' has-error':'' }}">
        {!! Form::label('ban_estado', 'Estado del Banner', ['class' => 'col-md-12']) !!}
        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                {!! Form::select('ban_estado', [true => 'Habilitado', false => 'Bloquear'], null, ['class' => 'form-control chosen-select-deselect']) !!}
            </div>
        </div>
    </div>

</div>