@extends('layouts.init')

@section('FormularioTitulo','Proyectos a Evaluar')
@section('FormularioDescripcion','en este formulario se pueden observar todos los proyectos a evaluar')
@section('FormularioActual','Proyectos a evaluar')
@section('FormularioDetalle','Proyectos')

@section('stylesheet')
    <link href="{{ asset('plugin/chosen/chosen.min.css') }}" rel="stylesheet"><link rel="stylesheet" href="{{ asset('/select2/dist/css/select2.min.css') }}">
    <link href="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
     <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugin/plugins/select2/select2.min.css') }}">
@endsection

@section('ContenidoPagina')

    {!! Form::open(['route' => 'aevaluar.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include('admin.proyectoaevaluar.formCreate')
        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Guardar los datos"><button type="submit" class="btn btn-success col-xs-12"><i class="fa fa-save"></i> Guardar</button></span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro"><button type="reset" class="btn btn-danger col-xs-12"><i class="fa fa-reply-all"></i> Cancelar</button></span>
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
    <script src="{{ asset('plugin/chosen/chosen.jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();
        })
    </script>
    <script type="text/javascript">
        var config = {
            '.chosen-select'           : {},
            '.chosen-select-deselect'  : {allow_single_deselect:true},
            '.chosen-select-no-single' : {disable_search_threshold:10},
            '.chosen-select-no-results': {no_results_text:'Oops, Sin Resultados!'},
            '.chosen-select-width'     : {width:"100%"}
        }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
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
                "autoWidth": true
            });
        });
    </script>
    <!-- /Datatables -->
@endsection