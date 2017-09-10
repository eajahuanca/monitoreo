<?php $__env->startSection('FormularioTitulo','Provincias'); ?>
<?php $__env->startSection('FormularioDescripcion','en este formulario se pueden observar todas las provincias correspondientes a los departamentos'); ?>
<?php $__env->startSection('FormularioActual','Provincias'); ?>
<?php $__env->startSection('FormularioDetalle','Provincias'); ?>

<?php $__env->startSection('stylesheet'); ?>
    <link href="<?php echo e(asset('plugin/plugins/datatables/dataTables.bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugin/plugins/datatables/responsive/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugin/plugins/datatables/responsive/responsive.bootstrap4.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ContenidoPagina'); ?>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <span class="hint--top  hint--success" aria-label="Registrar nueva provincia"><a  href="<?php echo e(route('provincia.create')); ?>" class="btn btn-success"><i class="fa fa-plus"></i> Nueva Provincia</a></span>
            </div>
        </div>
    </div>
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
         <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">Acción</th>
                <th style="text-align: center !important;">Departamento</th>
                <th style="text-align: center !important;">Provincia</th>
                <th style="text-align: center !important;">Estado</th>
                <th style="text-align: center !important;">Registrado</th>
                <th style="text-align: center !important;">Actualizado</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            <?php foreach($provincia as $item): ?>
            <tr id="<?php echo e($item->id); ?>">
                <td><?php echo e($contadorFilas++); ?></td>
                <td align="center">
                    <div class="form-horizontal">
                        <span class="hint--top  hint--info" aria-label="Actualizar"><a href="<?php echo e(route('provincia.edit', $item->id)); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></span>
                    </div>
                </td>
                <td><?php echo e($item->departamento->dep_nombre); ?></td>
                <td><?php echo e($item->prov_nombre); ?></td>
                <td align="center">
                    <?php if($item->prov_estado): ?>
                        <span class="hint--top  hint--warning" aria-label="Provincia Habilitado"><button class="btn btn-warning btn-xs">Habilitado</button></span>
                    <?php else: ?>
                        <span class="hint--top  hint--error" aria-label="Provincia Bloqueado"><button class="btn btn-danger btn-xs">Bloqueado</button></span>
                    <?php endif; ?>
                </td>
                <td align="center"><?php echo $item->userRegistra->us_nombre.' '.$item->userRegistra->us_paterno.' '.$item->userRegistra->us_materno.'<br>'.$item->created_at->diffForHumans(); ?></td>
                <td align="center"><?php echo $item->userActualiza->us_nombre.' '.$item->userActualiza->us_paterno.' '.$item->userActualiza->us_materno.'<br>'.$item->updated_at->diffForHumans(); ?></td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.init', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>