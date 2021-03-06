<div class="col-md-12">
    <div class="form-group <?php echo e($errors->has('ent_nombre')?' has-error':''); ?>">
        <?php echo Form::label('ent_nombre', 'Nombre de la Entidad (UE)', ['class' => 'col-md-12']); ?>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bullseye"></i>
                </div>
                <?php echo Form::text('ent_nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre de la entidad']); ?>

            </div>
            <?php if($errors->has('ent_nombre')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('ent_nombre')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

	<div class="form-group <?php echo e($errors->has('ent_sigla')?' has-error':''); ?>">
        <?php echo Form::label('ent_sigla', 'Sigla de la Entidad', ['class' => 'col-md-12']); ?>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-th"></i>
                </div>
                <?php echo Form::text('ent_sigla', null, ['class' => 'form-control', 'placeholder' => 'Ingrese SIGLA']); ?>

            </div>
            <?php if($errors->has('ent_sigla')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('ent_sigla')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

	<div class="form-group <?php echo e($errors->has('ent_estado')?' has-error':''); ?>">
        <?php echo Form::label('ent_estado', 'Estado de la Entidad', ['class' => 'col-md-12']); ?>

        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                <?php echo Form::select('ent_estado', [true => 'Habilitado', false => 'Bloqueado'], null, ['class' => 'form-control select2']); ?>

            </div>
        </div>
    </div>
	
    <div class="form-group <?php echo e($errors->has('ent_obs')?' has-error':''); ?>">
        <?php echo Form::label('ent_obs', 'Observaciones', ['class' => 'col-md-12']); ?>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-bars"></i>
                </div>
                <?php echo Form::textarea('ent_obs', null, ['class' => 'form-control', 'rows' => '3']); ?>

            </div>
            <?php if($errors->has('ent_obs')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('ent_obs')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

</div>