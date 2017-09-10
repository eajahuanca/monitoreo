<div class="col-md-12">

	<div class="form-group <?php echo e($errors->has('entidad_id')?' has-error':''); ?>">
        <?php echo Form::label('entidad_id', 'Seleccione la Entidad (UE)', ['class' => 'col-md-12']); ?>

        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bullseye"></i>
                </div>
                <?php echo Form::select('entidad_id', $entidad, null, ['class' => 'form-control select2']); ?>

            </div>
        </div>
    </div>

    <div class="form-group <?php echo e($errors->has('uni_nombre')?' has-error':''); ?>">
        <?php echo Form::label('uni_nombre', 'Nombre de la Unidad', ['class' => 'col-md-12']); ?>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-indent"></i>
                </div>
                <?php echo Form::text('uni_nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la unidad']); ?>

            </div>
            <?php if($errors->has('uni_nombre')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('uni_nombre')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

	<div class="form-group <?php echo e($errors->has('uni_estado')?' has-error':''); ?>">
        <?php echo Form::label('uni_estado', 'Estado de la Unidad', ['class' => 'col-md-12']); ?>

        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                <?php echo Form::select('uni_estado', [true => 'Habilitado', false => 'Bloqueado'], null, ['class' => 'form-control select2']); ?>

            </div>
        </div>
    </div>
	
    <div class="form-group <?php echo e($errors->has('uni_obs')?' has-error':''); ?>">
        <?php echo Form::label('uni_obs', 'Observaciones', ['class' => 'col-md-12']); ?>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bars"></i>
                </div>
                <?php echo Form::textarea('uni_obs', null, ['class' => 'form-control', 'rows' => '3']); ?>

            </div>
            <?php if($errors->has('uni_obs')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('uni_obs')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

</div>