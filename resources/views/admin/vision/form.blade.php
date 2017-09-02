<div class="col-md-12">

    <div class="form-group {{ $errors->has('vi_contenido')?' has-error':'' }}">
        {!! Form::label('vi_contenido', 'Detalle de la Vision', ['class' => 'col-md-12']) !!}
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bars"></i>
                </div>
                {!! Form::textarea('vi_contenido', null, ['class' => 'form-control', 'rows' => '5', 'id' => 'editor1']) !!}
            </div>
            @if($errors->has('vi_contenido'))
                <span class="help-block">
                    <strong>{{ $errors->first('vi_contenido') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group {{ $errors->has('vi_estado')?' has-error':'' }}">
        {!! Form::label('vi_estado', 'Estado de la vision', ['class' => 'col-md-12']) !!}
        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                {!! Form::select('vi_estado', [true => 'Habilitado', false => 'Inhabilitado'], null, ['class' => 'form-control chosen-select-deselect']) !!}
            </div>
        </div>
    </div>

</div>