<div class="col-md-12">

	<div class="form-group <?php echo e($errors->has('provincia_id')?' has-error':''); ?>">
        <?php echo Form::label('provincia_id', 'Seleccione la Provincia', ['class' => 'col-md-12']); ?>

        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-object-ungroup"></i>
                </div>
                <?php echo Form::select('provincia_id', $provincia, null, ['class' => 'form-control select2']); ?>

            </div>
        </div>
    </div>

    <div class="form-group <?php echo e($errors->has('mun_nombre')?' has-error':''); ?>">
        <?php echo Form::label('mun_nombre', 'Nombre del Municipio', ['class' => 'col-md-12']); ?>

        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-paper-plane-o"></i>
                </div>
                <?php echo Form::text('mun_nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del municipio']); ?>

            </div>
            <?php if($errors->has('mun_nombre')): ?>
                <span class="help-block">
                    <strong><?php echo e($errors->first('mun_nombre')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

	<div class="form-group <?php echo e($errors->has('mun_estado')?' has-error':''); ?>">
        <?php echo Form::label('mun_estado', 'Estado del Municipio', ['class' => 'col-md-12']); ?>

        <div class="col-md-4">
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-unlock"></i>
                </div>
                <?php echo Form::select('mun_estado', [true => 'Habilitado', false => 'Bloqueado'], null, ['class' => 'form-control select2']); ?>

            </div>
        </div>
    </div>

</div>