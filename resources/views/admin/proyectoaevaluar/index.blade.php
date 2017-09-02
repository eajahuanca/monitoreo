@extends('layouts.init')

@section('FormularioTitulo','Proyectos a Evaluar')
@section('FormularioDescripcion','en este formulario se pueden observar todos los proyectos a evaluar')
@section('FormularioActual','Proyectos a evaluar')
@section('FormularioDetalle','Proyectos')

@section('stylesheet')
    <link href="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
     <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugin/plugins/select2/select2.min.css') }}">
@endsection

@section('ContenidoPagina')

    {!! Form::open(['id' => 'formProyectos', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include('admin.proyectoaevaluar.formCreate')
        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Guardar los datos del Proyecto a Evaluar">
                    {!! link_to('#','Guardar', ['id' => 'GrabarProyecto', 'class' => 'btn btn-success col-xs-12']) !!}
                </span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro">
                    <button type="reset" class="btn btn-danger col-xs-12">Cancelar</button>
                </span>
            </center>
        </div>
    {!! Form::close() !!}
    <hr class="btn-primary">
    <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
         <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">H.R.</th>
                <th style="text-align: center !important;">Proyecto (Entidad)</th>
                <th style="text-align: center !important;">Unidad Proponente</th>
                <th style="text-align: center !important;">Lugar</th>
                <th style="text-align: center !important;">Monto(Bs.)</th>
                <th style="text-align: center !important;">Archivo</th>
                <th style="text-align: center !important;">Tiempo Estimado</th>
                <th style="text-align: center !important;">Responsable</th>
                <th style="text-align: center !important;">Estado</th>
                <th style="text-align: center !important;">Acción</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            @foreach($proyecto as $item)
            <tr id="{{ $item->id }}">
                <td>{{ $contadorFilas++ }}</td>
                <td align="center" valign="middle">{{ $item->proy_hr }}</td>
				<td>{{ $item->entidad->ent_nombre }}</td>
				<td>{{ $item->eunidad->uni_nombre }}</td>
                <td>{{ $item->departamento->dep_nombre.' '.$item->provincia->prov_nombre.' '.$item->municipio->mun_nombre }}</td>
                <td>{{ $item->proy_monto }}</td>
                <td>
					@if($item->proy_archivo)
						<a href="" class="fa fa-file-pdf"><span class="hint--top  hint--success" aria-label="Descargar Archivo"></span></a>
					@else
						{{ 'Sin Archivo' }}
					@endif
				</td>
                <td align="center">{{ $item->proy_tiempo.' Años' }}</td>
                <td align="justify">{{ $item->responsable->us_nombre.' '.$item->responsable->us_paterno.' '.$item->responsable->us_materno }}</td>
				<td align="center">
                    @if(!$item->proy_estado)
                        <span class="hint--top  hint--warning" aria-label="Proyecto en solicitud"><button class="btn btn-warning btn-xs">En Solicitud</button></span>
                    @else
                        <span class="hint--top  hint--error" aria-label="Proyecto Devuelto a la entidad"><button class="btn btn-danger btn-xs">Devuelto</button></span>
                    @endif
                </td>
				<td align="center">
					<div class="form-horizontal">
                        <span class="hint--top  hint--info" aria-label="Modificar Datos del Proyecto"><a href="{{ route('aevaluar.edit', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></span>
						@if(!$item->proy_estado)
                        	<span class="hint--top  hint--error" aria-label="Devolver Proyecto a Entidad"><a href="{{ route('aevaluar.destroy', $item->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-reply-all"></i></a></span>
						@endif
                    </div>
				</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('javascript')

    <script src="{{ asset('plugin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugin/plugins/select2/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();
        })
    </script>
    <!-- Datatables -->
    <script type="text/javascript">
        $(function() {
            $("#myTable").dataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "responsive": true
            });
        });
    </script>
    <!-- /Datatables -->
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
                url: "{{ url('/getEntidad') }}",
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
                url: "{{ url('/getDepartamento') }}",
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
                    url: "{{ url('/getUnidad', '"+ entidadID +"') }}",
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
                    url: "{{ url('/getProvincia', '"+ departamentoID +"') }}",
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
                    url: "{{ url('/getMunicipio', '"+ provinciaID +"') }}",
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
@endsection