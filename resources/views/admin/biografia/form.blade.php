<div class="col-md-12">

    <div class="form-group {{ $errors->has('bio_imagen')?' has-error':'' }}">
        {!! Form::label('bio_imagen', 'Subir imagen', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-file"></i>
                </div>
                {!! Form::file('bio_imagen', null, ['class' => 'form-control']) !!}
            </div>
            @if($errors->has('bio_imagen'))
                <span class="help-block">
                    <strong>{{ $errors->first('bio_imagen') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('bio_nombre')?' has-error':'' }}">
        {!! Form::label('bio_nombre', 'Nombre completo', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-wrench"></i>
                </div>
                {!! Form::text('bio_nombre', null, ['class' => 'form-control']) !!} 
            </div>
            @if($errors->has('bio_nombre'))
                <span class="help-block">
                    <strong>{{ $errors->first('bio_nombre') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('bio_descripcion')?' has-error':'' }}">
        {!! Form::label('bio_descripcion', 'Detalle de la Biografia', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bars"></i>
                </div>
                {!! Form::textarea('bio_descripcion', null, ['class' => 'form-control', 'rows' => '5', 'id' => 'editor1']) !!}
            </div>
            @if($errors->has('bio_descripcion'))
                <span class="help-block">
                    <strong>{{ $errors->first('bio_descripcion') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('bio_estado')?' has-error':'' }}">
        {!! Form::label('bio_estado', 'Estado de la Biografia', ['class' => 'col-md-12']) !!}
        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                {!! Form::select('bio_estado', [true => 'Habilitado', false => 'Inhabilitado'], null, ['class' => 'form-control chosen-select-deselect']) !!}
            </div>
        </div>
    </div>

</div>