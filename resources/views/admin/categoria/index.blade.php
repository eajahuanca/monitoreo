@extends('layouts.init')

@section('FormularioTitulo','Categorias')
@section('FormularioDescripcion','en este formulario se pueden observar todas las categorias')
@section('FormularioActual','Categorias')
@section('FormularioDetalle','Categorias Registradas')

@section('stylesheet')
    <link href="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('ContenidoPagina')

    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <span class="hint--top  hint--success" aria-label="Registrar Nueva Categoria"><a  href="{{ route('categoria.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar Categoria</a></span>
            </div>
        </div>
    </div>
    <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
         <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">Acción</th>
                <th style="text-align: center !important;">Nombre de la Categoria</th>
                <th style="text-align: center !important;">Descripcion</th>
                <th style="text-align: center !important;">Estado</th>
                <th style="text-align: center !important;">Fecha de Registro</th>
                <th style="text-align: center !important;">Fecha de Actualización</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            @foreach($categoria as $item)
            <tr id="{{ $item->id }}">
                <td>{{ $contadorFilas++ }}</td>
                <td align="center">
                    <div class="form-horizontal">
                        <span class="hint--top  hint--info" aria-label="Actualizar"><a href="{{ route('categoria.edit', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></span>
                    </div>
                </td>
                <td>{{ $item->cat_nombre }}</td>
                <td>{!! $item->cat_descripcion !!}</td>
                <td align="center">
                    @if($item->cat_estado)
                        <span class="hint--top  hint--warning" aria-label="Categoria Activa"><button class="btn btn-warning btn-xs">Habilitado</button></span>
                    @else
                        <span class="hint--top  hint--error" aria-label="Categoria Inactiva"><button class="btn btn-danger btn-xs">Inhabilitado</button></span>
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