<div class="col-md-12">
    <div class="form-group {{ $errors->has('proy_hr')?' has-error':'' }}">
		{!! Form::label('proy_hr', 'Hoja de Ruta', ['class' => 'col-md-12 col-sm-12']) !!}
        <div class="col-md-12 col-sm-12">
            <div class="input-group">
                <div class="input-group-addon">
					<i class="fa fa-wrench"></i>
                </div>
                {!! Form::text('proy_hr', null, ['placeholder' => 'Ej. E/2017-0034', 'class' => 'form-control']) !!} 
            </div>
            @if($errors->has('proy_hr'))
                <span class="help-block">
                    <strong>{{ $errors->first('proy_hr') }}</strong>
                </span>
            @endif
        </div>
    </div>
	
	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('entidad_id')?' has-error':'' }}">
				{!! Form::label('entidad_id', 'Entidad (UE)', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-10 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::select('entidad_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
					@if($errors->has('entidad_id'))
						<span class="help-block">
							<strong>{{ $errors->first('entidad_id') }}</strong>
						</span>
					@endif
				</div>
				<div class="col-md-2 col-xs-12">
					<span class="hint--top  hint--info" aria-label="Registrar Entidad (UE)">
						<a id="btnEntidad" class="btn btn-primary col-xs-12"><i class="fa fa-plus"></i></a>
					</span>
				</div>		
			</div>
		</div>
	
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('unidad_id')?' has-error':'' }}">
				{!! Form::label('unidad_id', 'Unidad Proponente', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-10 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::select('unidad_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
					@if($errors->has('unidad_id'))
						<span class="help-block">
							<strong>{{ $errors->first('unidad_id') }}</strong>
						</span>
					@endif
				</div>
				<div class="col-md-2 col-xs-12">
					<span class="hint--top  hint--info" aria-label="Registrar Unidad Proponente">
						<a id="btnUnidad" class="btn btn-primary col-xs-12"><i class="fa fa-plus"></i></a>
					</span>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('proy_sigla')?' has-error':'' }}">
				{!! Form::label('proy_sigla', 'Sigla Entidad', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-12 col-sm-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-wrench"></i>
						</div>
						{!! Form::text('proy_sigla', null, ['class' => 'form-control', 'id' => 'proy_sigla']) !!} 
					</div>
					@if($errors->has('proy_sigla'))
						<span class="help-block">
							<strong>{{ $errors->first('proy_sigla') }}</strong>
						</span>
					@endif
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('departamento_id')?' has-error':'' }}">
				{!! Form::label('departamento_id', 'Departamento', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::select('departamento_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
					@if($errors->has('departamento_id'))
						<span class="help-block">
							<strong>{{ $errors->first('departamento_id') }}</strong>
						</span>
					@endif
				</div>
			</div>
		</div>
	
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('provincia_id')?' has-error':'' }}">
				{!! Form::label('provincia_id', 'Provincias', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-10 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::select('provincia_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
					@if($errors->has('provincia_id'))
						<span class="help-block">
							<strong>{{ $errors->first('provincia_id') }}</strong>
						</span>
					@endif
				</div>
				<div class="col-md-2 col-xs-12">
					<span class="hint--top  hint--info" aria-label="Registrar Provincia">
						<a id="btnProvincia" class="btn btn-primary col-xs-12"><i class="fa fa-plus"></i></a>
					</span>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('municipio_id')?' has-error':'' }}">
				{!! Form::label('municipio_id', 'Municipio(s)', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-10 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::select('municipio_id',['-' => 'Seleccione'], null, ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Seleccione']) !!}
					</div>
					@if($errors->has('municipio_id'))
						<span class="help-block">
							<strong>{{ $errors->first('municipio_id') }}</strong>
						</span>
					@endif
				</div>
				<div class="col-md-2 col-xs-12">
					<span class="hint--top  hint--info" aria-label="Registrar Municipio">
						<a id="btnMunicipio" class="btn btn-primary col-xs-12"><i class="fa fa-plus"></i></a>
					</span>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('proy_responsable')?' has-error':'' }}">
				{!! Form::label('proy_responsable', 'Responsable de Proyecto', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::select('proy_responsable', $responsable, null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('proy_monto')?' has-error':'' }}">
				{!! Form::label('proy_monto', 'Monto solicitado (Bs.)', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::text('proy_monto', null, ['class' => 'form-control']) !!} 
					</div>
					@if($errors->has('proy_monto'))
						<span class="help-block">
							<strong>{{ $errors->first('proy_monto') }}</strong>
						</span>
					@endif
				</div>
			</div>
		</div>

		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('proy_tiempo')?' has-error':'' }}">
				{!! Form::label('proy_tiempo', 'Tiempo estimado (Años)', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-12 col-sm-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-wrench"></i>
						</div>
						{!! Form::number('proy_tiempo', null, ['class' => 'form-control']) !!} 
					</div>
					@if($errors->has('proy_tiempo'))
						<span class="help-block">
							<strong>{{ $errors->first('proy_tiempo') }}</strong>
						</span>
					@endif
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6 col-xs-12">
			<div class="form-group {{ $errors->has('proy_estado')?' has-error':'' }}">
				{!! Form::label('proy_estado', 'Estado del Proyecto', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-8 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i>
						</div>
						{!! Form::select('proy_estado', [true => 'En Solicitud', false => 'Devuelto'], null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xs-12">
			<div class="form-group {{ $errors->has('proy_archivo')?' has-error':'' }}">
				{!! Form::label('proy_archivo', 'Archivo Respaldo', ['class' => 'col-md-12 col-sm-12']) !!}
				<div class="col-md-8 col-xs-12 pull-right">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-file-pdf-o"></i>
						</div>
						{!! Form::file('proy_archivo', ['class' => 'form-control']) !!}
					</div>
					@if($errors->has('proy_archivo'))
						<span class="help-block">
							<strong>{{ $errors->first('proy_archivo') }}</strong>
						</span>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>