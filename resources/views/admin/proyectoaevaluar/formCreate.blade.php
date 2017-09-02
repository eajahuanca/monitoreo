<div class="col-md-12">
    <div class="form-group {{ $errors->has('proy_hr')?' has-error':'' }}">
        <div class="col-md-12 col-sm-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-wrench"></i> <b>Hoja de Ruta</b>
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
		<div class="col-md-5 col-xs-12">
			<div class="form-group {{ $errors->has('entidad_id')?' has-error':'' }}">
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Entidad (UE)</b>
						</div>
						{!! Form::select('entidad_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-md-5 col-xs-12">
			<div class="form-group {{ $errors->has('unidad_id')?' has-error':'' }}">
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Unidad</b>
						</div>
						{!! Form::select('unidad_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-2 col-xs-12">
			<div class="form-group {{ $errors->has('proy_sigla')?' has-error':'' }}">
				<div class="col-md-12 col-sm-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-wrench"></i> <b>Sigla</b>
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
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Departamento</b>
						</div>
						{!! Form::select('departamento_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('provincia_id')?' has-error':'' }}">
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Provincia</b>
						</div>
						{!! Form::select('provincia_id', ['-' => 'Seleccione'], null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('municipio_id')?' has-error':'' }}">
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Municipio</b>
						</div>
						{!! Form::select('municipio_id',['-' => 'Seleccione'], null, ['class' => 'form-control select2', 'multiple' => 'multiple', 'data-placeholder' => 'Seleccione']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('proy_responsable')?' has-error':'' }}">
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Responsable</b>
						</div>
						{!! Form::select('proy_responsable', $responsable, null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>
	
		<div class="col-md-4 col-xs-12">
			<div class="form-group {{ $errors->has('proy_monto')?' has-error':'' }}">
				<div class="col-md-12 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Monto Solicitado (Bs)</b>
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
				<div class="col-md-12 col-sm-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-wrench"></i> <b>Tiempo (Años)</b>
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
				<div class="col-md-8 col-xs-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-unlock"></i> <b>Estado del proyecto</b>
						</div>
						{!! Form::select('proy_estado', [true => 'En Solicitud', false => 'Devuelto'], null, ['class' => 'form-control select2']) !!}
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6 col-xs-12">
			<div class="form-group {{ $errors->has('proy_archivo')?' has-error':'' }}">
				<div class="col-md-8 col-xs-12 pull-right">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-file-pdf-o"></i> <b>Respaldo</b>
						</div>
						{!! Form::file('proy_archivo', ['class' => 'form-control']) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>