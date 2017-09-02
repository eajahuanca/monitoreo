@extends('layouts.init')

@section('FormularioTitulo','Mi Biografia')
@section('FormularioDescripcion','en este formulario se puede observar mi Biografia')
@section('FormularioActual','Biografia')
@section('FormularioDetalle','Biografias Registradas')

@section('stylesheet')
    <link href="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('ContenidoPagina')

    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <span class="hint--top  hint--success" aria-label="Registrar Nueva Biografia"><a  href="{{ route('biografia.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar Biografia</a></span>
            </div>
        </div>
    </div>
    <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
         <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">Acción</th>
                <th style="text-align: center !important;">Fotografia</th>
                <th style="text-align: center !important;">Nombre Completo</th>
                <th style="text-align: center !important;">Mayores Detalles</th>
                <th style="text-align: center !important;">Estado</th>
                <th style="text-align: center !important;">Fecha de Registro</th>
                <th style="text-align: center !important;">Fecha de Actualización</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            @foreach($biografia as $item)
            <tr id="{{ $item->id }}">
                <td>{{ $contadorFilas++ }}</td>
                <td align="center">
                    <div class="form-horizontal">
                        <span class="hint--top  hint--info" aria-label="Actualizar"><a href="{{ route('biografia.edit', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></span>
                    </div>
                </td>
                <td><img src="{{ asset($item->bio_imagen) }}" width="70px" height="70px"></td>
                <td>{{ $item->bio_nombre }}</td>
                <td>{!! $item->bio_descripcion !!}</td>
                <td align="center">
                    @if($item->bio_estado)
                        <span class="hint--top  hint--warning" aria-label="Biografia Activa"><button class="btn btn-warning btn-xs">Habilitado</button></span>
                    @else
                        <span class="hint--top  hint--error" aria-label="Biografia Inactiva"><button class="btn btn-danger btn-xs">Inhabilitado</button></span>
                    @endif
                </td>
                <td align="center">{{ $item->created_at->diffForHumans() }}</td>
                <td align="center">{{ $item->updated_at->diffForHumans() }}</td>
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