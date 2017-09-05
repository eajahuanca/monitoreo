<?php $__env->startSection('FormularioTitulo','Proyectos a Evaluar'); ?>
<?php $__env->startSection('FormularioDescripcion','en este formulario se pueden observar todos los proyectos a evaluar'); ?>
<?php $__env->startSection('FormularioActual','Proyectos a evaluar'); ?>
<?php $__env->startSection('FormularioDetalle','Proyectos'); ?>

<?php $__env->startSection('stylesheet'); ?>
    <link href="<?php echo e(asset('plugin/plugins/datatables/dataTables.bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugin/plugins/datatables/responsive/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('plugin/plugins/datatables/responsive/responsive.bootstrap4.min.css')); ?>" rel="stylesheet">
     <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo e(asset('plugin/plugins/select2/select2.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ContenidoPagina'); ?>
    
    <?php echo Form::open(['id' => 'formProyectos', 'class' => 'form-horizontal', 'files' => true]); ?>

        <?php echo $__env->make('admin.proyectoaevaluar.formCreate', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Guardar los datos del Proyecto a Evaluar">
                    <?php echo link_to('#','Guardar', ['id' => 'GrabarProyecto', 'class' => 'btn btn-success col-xs-12']); ?>

                </span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro">
                    <button type="reset" class="btn btn-danger col-xs-12">Cancelar</button>
                </span>
            </center>
        </div>
    <?php echo Form::close(); ?>

    <hr class="btn-primary">
    <table id="example" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">Acción</th>
                <th style="text-align: center !important;">Estado</th>
                <th style="text-align: center !important;">H.R.</th>
                <th style="text-align: center !important;">Proyecto (Entidad)</th>
                <th style="text-align: center !important;">Unidad Proponente</th>
                <th style="text-align: center !important;">Lugar</th>
                <th style="text-align: center !important;">Monto(Bs.)</th>
                <th style="text-align: center !important;">Archivo</th>
                <th style="text-align: center !important;">Tiempo Estimado</th>
                <th style="text-align: center !important;">Responsable</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            <?php foreach($proyecto as $item): ?>
            <tr id="<?php echo e($item->id); ?>">
                <td><?php echo e($contadorFilas++); ?></td>
                <td align="left">
					<div class="form-horizontal">
                        <span class="hint--top  hint--info" aria-label="Modificar Datos del Proyecto"><a href="<?php echo e(route('aevaluar.edit', $item->id)); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></span>
						<?php if($item->proy_estado): ?>
                        	<span class="hint--top  hint--error" aria-label="Devolver Proyecto a Entidad"><a href="<?php echo e(route('aevaluar.destroy', $item->id)); ?>" class="btn btn-danger btn-xs"><i class="fa fa-reply-all"></i></a></span>
						<?php endif; ?>
                    </div>
				</td>
                <td align="center">
                    <?php if($item->proy_estado): ?>
                        <span class="hint--top  hint--warning" aria-label="Proyecto en solicitud"><button class="btn btn-warning btn-xs">En Solicitud</button></span>
                    <?php else: ?>
                        <span class="hint--top  hint--error" aria-label="Proyecto Devuelto a la entidad"><button class="btn btn-danger btn-xs">Devuelto</button></span>
                    <?php endif; ?>
                </td>
                <td align="center" valign="middle"><?php echo e($item->proy_hr); ?></td>
				<td><?php echo e($item->entidad->ent_nombre); ?></td>
				<td style="width:50px !important;"><?php echo e($item->eunidad->uni_nombre); ?></td>
                <td><?php echo e($item->departamento->dep_nombre.' '.$item->provincia->prov_nombre.' '.$item->municipio->mun_nombre); ?></td>
                <td align="right"><?php echo e(number_format($item->proy_monto, 2, ',', '.').' Bs.'); ?></td>
                <td>
					<?php if($item->proy_archivo): ?>
						<span class="hint--top  hint--error" aria-label="Descargar Archivo"><a href="" class="fa fa-file-pdf-o"></a></span>
					<?php else: ?>
						<?php echo e('Sin Archivo'); ?>

					<?php endif; ?>
				</td>
                <td align="right"><?php echo e($item->proy_tiempo.' Años'); ?></td>
                <td align="justify"><?php echo e($item->responsable->us_nombre.' '.$item->responsable->us_paterno.' '.$item->responsable->us_materno); ?></td>
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
    <!-- Select2 -->
    <script src="<?php echo e(asset('plugin/plugins/select2/select2.full.min.js')); ?>"></script>
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <!--Cargar Datos -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("select[name=unidad_id]").empty();
            $("select[name=unidad_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Proponente</option>");
            $("select[name=provincia_id]").empty();
            $("select[name=provincia_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Provincia</option>");
            $("select[name=municipio_id]").empty();
            $("select[name=municipio_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Municipio</option>");
            //Entidades
            $.ajax({
                url: "<?php echo e(url('/getEntidad')); ?>",
                type: "get",
                datatype: "json",
                success: function(rpta){
                    $("select[name=entidad_id]").empty();
                    $("select[name=entidad_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Entidad</option>");
                    $.each(rpta, function(index, value){
                        $("select[name=entidad_id]").append("<option value='" + value['id'] + "'>" + value['ent_nombre'] + "</option>");
                    });
                }
            });
            //Departamentos
            $.ajax({
                url: "<?php echo e(url('/getDepartamento')); ?>",
                type: "get",
                datatype: "json",
                success: function(rpta){
                    $("select[name=departamento_id]").empty();
                    $("select[name=departamento_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Departamento</option>");
                    $.each(rpta, function(index, value){
                        $("select[name=departamento_id]").append("<option value='" + value['id'] + "'>" + value['dep_nombre'] + "</option>");
                    });
                }
            });
            //Unidad Proponente
            $("select[name=entidad_id]").change(function(){
                var entidadID = $("select[name=entidad_id]").val();
                $.ajax({
                    url: "<?php echo e(url('/getUnidad', '"+ entidadID +"')); ?>",
                    type: "get",
                    datatype: "json",
                    data: {"entidadID" : entidadID},
                    success: function(rpta){
                        $("select[name=unidad_id]").empty();
                        $("select[name=unidad_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Proponente</option>");
                        $.each(rpta, function(index, value){
                            $("select[name=unidad_id]").append("<option value='" + value['id'] + "'>" + value['uni_nombre'] + "</option>");
                            $("#proy_sigla").val(value['ent_sigla']);
                        });
                    }
                });
            });
            //Provincia
            $("select[name=departamento_id]").change(function(){
                var departamentoID = $("select[name=departamento_id]").val();
                $.ajax({
                    url: "<?php echo e(url('/getProvincia', '"+ departamentoID +"')); ?>",
                    type: "get",
                    datatype: "json",
                    data: {"departamentoID" : departamentoID},
                    success: function(rpta){
                        $("select[name=provincia_id]").empty();
                        $("select[name=provincia_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Provincia</option>");
                        $.each(rpta, function(index, value){
                            $("select[name=provincia_id]").append("<option value='" + value['id'] + "'>" + value['prov_nombre'] + "</option>");
                        });
                    }
                });
            });
            //Municipio
            $("select[name=provincia_id]").change(function(){
                var provinciaID = $("select[name=provincia_id]").val();
                $.ajax({
                    url: "<?php echo e(url('/getMunicipio', '"+ provinciaID +"')); ?>",
                    type: "get",
                    datatype: "json",
                    data: {"provinciaID" : provinciaID},
                    success: function(rpta){
                        $("select[name=municipio_id]").empty();
                        $("select[name=municipio_id]").append("<option value='' disabled selected style='display:none;'>Seleccione Municipio</option>");
                        $.each(rpta, function(index, value){
                            $("select[name=municipio_id]").append("<option value='" + value['id'] + "'>" + value['mun_nombre'] + "</option>");
                        });
                    }
                });
            });
        });
    </script>
    <!--Validacion y Envio de Datos-->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#GrabarProyecto").click(function(event){
                event.preventDefault();
                var dataString = $("#formProyectos").serialize();
                var token = $("input[name=_token]").val();
                var route = "<?php echo e(route('aevaluar.store')); ?>";
                $.ajax({
                    url: route,
                    headers: {'X-CSRF-TOKEN':token},
                    type: 'post',
                    datatype: 'json',
                    data: dataString,
                    success: function(data){
                        if(data.success == 'true')
                        {
                            location.reload();
                        }
                        else
                        {
                            toastr["error"]("No se puede registrar el proyecto.", "Error en Registro");
                        }
                    },
                    error:function(data){
                        toastr["error"]("Existen campos del formulario que no cumplen las condiciones.", "Error en el Formulario");
                        if(data.responseJSON.proy_hr)
                        { $("#error1").html(data.responseJSON.proy_hr); }
                        else
                        { $("#error1").html(""); }
                        $("#msg-error1").fadeIn();
                        
                        if(data.responseJSON.entidad_id)
                        { $("#error2").html(data.responseJSON.entidad_id); }
                        else
                        { $("#error2").html(""); }
                        $("#msg-error2").fadeIn();

                        if(data.responseJSON.unidad_id)
                        { $("#error3").html(data.responseJSON.unidad_id); }
                        else
                        { $("#error3").html(""); }
                        $("#msg-error3").fadeIn();

                        if(data.responseJSON.proy_sigla)
                        { $("#error4").html(data.responseJSON.proy_sigla); }
                        else
                        { $("#error4").html(""); }
                        $("#msg-error4").fadeIn();

                        if(data.responseJSON.departamento_id)
                        { $("#error5").html(data.responseJSON.departamento_id); }
                        else
                        { $("#error5").html(""); }
                        $("#msg-error5").fadeIn();

                        if(data.responseJSON.provincia_id) 
                        { $("#error6").html(data.responseJSON.provincia_id); }
                        else
                        { $("#error6").html(""); }
                        $("#msg-error6").fadeIn();

                        if(data.responseJSON.municipio_id)
                        { $("#error7").html(data.responseJSON.municipio_id); }
                        else
                        { $("#error7").html(""); }
                        $("#msg-error7").fadeIn();

                        if(data.responseJSON.proy_monto)
                        { $("#error8").html(data.responseJSON.proy_monto); }
                        else
                        { $("#error8").html(""); }
                        $("#msg-error8").fadeIn();

                        if(data.responseJSON.proy_tiempo)
                        { $("#error9").html(data.responseJSON.proy_tiempo); }
                        else
                        { $("#error9").html(""); }
                        $("#msg-error9").fadeIn();

                        if(data.responseJSON.proy_archivo)
                        { $("#error10").html(data.responseJSON.proy_archivo); }
                        else
                        { $("#error10").html(""); }
                        $("#msg-error10").fadeIn();
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            <?php if(Session::get('active')): ?>
                toastr["success"]("Registro de Proyecto a Evaluar", "Se realizo el registro de manera satisfactoria.");
                <?php echo e(Session::forget('active')); ?>

            <?php endif; ?>
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.init', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>