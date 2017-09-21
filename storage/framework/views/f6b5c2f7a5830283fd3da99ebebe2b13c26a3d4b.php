<div class="col-md-12">

	<div class="form-group <?php echo e($errors->has('departamento_id')?' has-error':''); ?>">
        <?php echo Form::label('proy_nombre', 'Seleccione el Proyecto', ['class' => 'col-md-12']); ?>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bullseye"></i>
                </div>
                <?php echo Form::select('proy_nombre', $proyecto, null, ['class' => 'form-control select2']); ?>

            </div>
        </div>
    </div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group <?php echo e($errors->has('legal_fmonto')?' has-error':''); ?>">
				<?php echo Form::label('legal_fmonto', 'Monto por Fonabosque', ['class' => 'col-md-12']); ?>

				<div class="col-md-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i> Bs </i>
						</div>
						<?php echo Form::text('legal_fmonto', null, ['class' => 'form-control', 'placeholder' => 'Ej. 150.000']); ?>

					</div>
					<?php if($errors->has('legal_fmonto')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('legal_fmonto')); ?></strong>
						</span>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group <?php echo e($errors->has('legal_cmonto')?' has-error':''); ?>">
				<?php echo Form::label('legal_cmonto', 'Monto por Contraparte (UE)', ['class' => 'col-md-12']); ?>

				<div class="col-md-12">
					<div class="input-group">
						<div class="input-group-addon">
							<i> Bs </i>
						</div>
						<?php echo Form::text('legal_cmonto', null, ['class' => 'form-control', 'placeholder' => 'Ej. 150.000']); ?>

					</div>
					<?php if($errors->has('legal_cmonto')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('legal_cmonto')); ?></strong>
						</span>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
    
	<div class="form-group">
		<?php echo Form::label('legal_archivo', 'Archivo Base Legal', ['class' => 'col-md-12 col-sm-12']); ?>

		<div class="col-md-8 col-xs-12">
			<div class="input-group">
				<div class="input-group-addon">
					<i class="fa fa-file-pdf-o"></i>
				</div>
				<?php echo Form::file('legal_archivo', ['class' => 'form-control']); ?>

			</div>
			<?php if($errors->has('legal_archivo')): ?>
				<span class="help-block">
					<strong><?php echo e($errors->first('legal_archivo')); ?></strong>
				</span>
			<?php endif; ?>
		</div>
	</div>

	<div class="form-group <?php echo e($errors->has('legal_estado')?' has-error':''); ?>">
        <?php echo Form::label('legal_estado', 'Estado de la Base Legal', ['class' => 'col-md-12']); ?>

        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                <?php echo Form::select('legal_estado', [true => 'Habilitado', false => 'Bloqueado'], null, ['class' => 'form-control select2']); ?>

            </div>
        </div>
    </div>

</div>