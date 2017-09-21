<?php $__env->startSection('FormularioTitulo','Proyectos'); ?>
<?php $__env->startSection('FormularioDescripcion','en este formulario se pueden observar todos los proyectos'); ?>
<?php $__env->startSection('FormularioActual','Proyectos'); ?>
<?php $__env->startSection('FormularioDetalle','Proyectos'); ?>

<?php $__env->startSection('stylesheet'); ?>
    <link href="<?php echo e(asset('plugin/plugins/datatables/dataTables.bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugin/plugins/datatables/responsive/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugin/plugins/datatables/responsive/responsive.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ContenidoPagina'); ?>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <span class="hint--top  hint--success" aria-label="Asignar Base Legal"><a  href="<?php echo e(route('legal.create')); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Asignar Base Legal</a></span>
            </div>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">Proyecto</th>
                <th style="text-align: center !important;">Entidad Ejecutora</th>
                <th style="text-align: center !important;">Monto Fonabosque</th>
                <th style="text-align: center !important;">Monto Contraparte</th>
                <th style="text-align: center !important;">Total</th>
                <th style="text-align: center !important;">Base Legal</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            <?php foreach($proyecto as $item): ?>
            <tr id="<?php echo e($item->id); ?>">
                <td><?php echo e($contadorFilas++); ?></td>
                <td><?php echo e($item->proy_nombre); ?></td>
				<td><?php echo e($item->entidad->ent_nombre); ?></td>
				<td><?php echo e($item->legal_fmonto); ?></td>
				<td><?php echo e($item->legal_fmonto); ?></td>
				<td><?php echo e($item->legal_tmonto); ?></td>
                <td>
					<?php if($item->legal_archivo): ?>
						<span class="hint--top  hint--error" aria-label="Descargar Archivo"><a href="<?php echo e(asset($item->legal_archivo)); ?>" target="_blank   " class="fa fa-file-pdf-o"></a></span>
					<?php else: ?>
						<?php echo e('Sin Archivo'); ?>

					<?php endif; ?>
				</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script src="<?php echo e(asset('plugin/plugins/datatables/responsive/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugin/plugins/datatables/responsive/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugin/plugins/datatables/responsive/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('plugin/plugins/datatables/responsive/responsive.bootstrap4.min.js')); ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            <?php if(Session::get('estado')=="1"): ?>
                toastr["success"]("<?php echo e(Session::get('title')); ?>", "<?php echo e(Session::get('msg')); ?>");
            <?php endif; ?>
            <?php if(Session::get('estado')=="2"): ?>
                toastr["error"]("<?php echo e(Session::get('title')); ?>", "<?php echo e(Session::get('msg')); ?>");
            <?php endif; ?>
            <?php if(Session::get('estado')): ?>
                <?php echo e(Session::forget('estado')); ?>

                <?php echo e(Session::forget('title')); ?>

                <?php echo e(Session::forget('msg')); ?>

            <?php endif; ?>
        });
    </script>
<?php $__env->stopSection(); ?>+
<?php echo $__env->make('layouts.init', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>