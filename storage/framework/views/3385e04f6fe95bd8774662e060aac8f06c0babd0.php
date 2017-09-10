<?php $__env->startSection('FormularioTitulo','Entidades'); ?>
<?php $__env->startSection('FormularioDescripcion','registrar nueva entidad'); ?>
<?php $__env->startSection('FormularioActual','Entidad'); ?>
<?php $__env->startSection('FormularioDetalle','Registrar nueva Entidad'); ?>

<?php $__env->startSection('stylesheet'); ?>
	<link rel="stylesheet" href="<?php echo e(asset('plugin/plugins/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ContenidoPagina'); ?>

    <?php echo Form::open(['route' => 'entidad.store', 'method' => 'POST', 'class' => 'form-horizontal']); ?>

        <?php echo $__env->make('admin.entidad.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Guardar los datos"><button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button></span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro"><a href="<?php echo e(route('entidad.index')); ?>" class="btn btn-danger"><i class="fa fa-reply-all"></i> Cancelar</a></span>
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