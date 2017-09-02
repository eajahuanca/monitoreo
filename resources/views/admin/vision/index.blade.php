@extends('layouts.init')

@section('FormularioTitulo','Visión')
@section('FormularioDescripcion','en este formulario se pueden observar todas las Visiones')
@section('FormularioActual','Visiones')
@section('FormularioDetalle','Visiones Registradas')

@section('stylesheet')
    <link href="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('ContenidoPagina')

    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <span class="hint--top  hint--success" aria-label="Registrar Nueva Vision"><a  href="{{ route('vision.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar Vision</a></span>
            </div>
        </div>
    </div>
    <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
         <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">Acción</th>
                <th style="text-align: center !important;">Contenido de la Vision</th>
                <th style="text-align: center !important;">Estado</th>
                <th style="text-align: center !important;">Fecha de Registro</th>
                <th style="text-align: center !important;">Fecha de Actualización</th>
                <th style="text-align: center !important;">Registrado/Actualizado Por</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            @foreach($vision as $item)
            <tr id="{{ $item->id }}">
                <td>{{ $contadorFilas++ }}</td>
                <td align="center">
                    <div class="form-horizontal">
                        <span class="hint--top  hint--info" aria-label="Actualizar"><a href="{{ route('vision.edit', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></span>
                    </div>
                </td>
                <td>{!! $item->vi_contenido !!}</td>
                <td align="center">
                    @if($item->vi_estado)
                        <span class="hint--top  hint--warning" aria-label="Vision Activa"><button class="btn btn-warning btn-xs">Habilitado</button></span>
                    @else
                        <span class="hint--top  hint--error" aria-label="Vision Inactiva"><button class="btn btn-danger btn-xs">Inhabilitado</button></span>
                    @endif
                </td>
                <td align="center">{{ $item->created_at->diffForHumans() }}</td>
                <td align="center">{{ $item->updated_at->diffForHumans() }}</td>
                <td>{{ $item->user->us_nombre.' '.$item->user->us_paterno.' '.$item->user->us_materno }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('javascript')
    <script src="{{ asset('plugin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
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