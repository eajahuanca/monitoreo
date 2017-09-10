<?php $__env->startSection('FormularioTitulo','Unidades'); ?>
<?php $__env->startSection('FormularioDescripcion','modificar datos de la unidad'); ?>
<?php $__env->startSection('FormularioActual','Unidad'); ?>
<?php $__env->startSection('FormularioDetalle','Modificar Unidad'); ?>

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('plugin/plugins/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ContenidoPagina'); ?>

    <?php echo Form::model($unidad,['route' => ['unidad.update',$unidad->id], 'method' => 'PUT', 'class' => 'form-horizontal']); ?>

        <?php echo $__env->make('admin.unidad.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Actualizar los datos"><button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Actualizar</button></span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro"><a href="<?php echo e(route('unidad.index')); ?>" class="btn btn-danger"><i class="fa fa-reply-all"></i> Cancelar</a></span>
            </center>
        </div>
    <?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
	<script src="<?php echo e(asset('plugin/plugins/select2/select2.full.min.js')); ?>"></script>
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.init', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>