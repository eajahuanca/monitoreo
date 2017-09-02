@extends('layouts.init')

@section('FormularioTitulo','Banner')
@section('FormularioDescripcion','en este formulario se pueden observar los banners')
@section('FormularioActual','Banners')
@section('FormularioDetalle','Banners')

@section('stylesheet')
    <link href="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
@endsection

@section('ContenidoPagina')

    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <span class="hint--top  hint--success" aria-label="Registrar Nuevo Banner"><a  href="{{ route('banner.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Adicionar Nuevo Banner</a></span>
            </div>
        </div>
    </div>
    <table id="myTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
         <thead>
            <tr class="btn-primary">
                <th style="text-align: center !important;">#</th>
                <th style="text-align: center !important;">Acción</th>
                <th style="text-align: center !important;">Banner</th>
                <th style="text-align: center !important;">Descripcion</th>
                <th style="text-align: center !important;">Estado</th>
                <th style="text-align: center !important;">Registro</th>
                <th style="text-align: center !important;">Actualización</th>
                <th style="text-align: center !important;">Subido por</th>
            </tr>
        </thead>
        <tbody>
            <?php $contadorFilas = 1;?>
            @foreach($banner as $item)
            <tr id="{{ $item->id }}">
                <td>{{ $contadorFilas++ }}</td>
                <td align="center">
                    <div class="form-horizontal">
                        <span class="hint--top  hint--info" aria-label="Actualizar"><a href="{{ route('banner.edit', $item->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a></span>
                    </div>
                </td>
                <td align="center"><img src="{{ asset($item->ban_imagen) }}" width="60px" height="50px"></td>
                <td>{!! $item->ban_descripcion !!}</td>
                <td align="center">
                    @if($item->ban_estado)
                        <span class="hint--top  hint--warning" aria-label="Banner Activo"><button class="btn btn-warning btn-xs">Habilitado</button></span>
                    @else
                        <span class="hint--top  hint--error" aria-label="Banner Bloqueado"><button class="btn btn-danger btn-xs">Bloqueado</button></span>
                    @endif
                </td>
                <td align="center">{{ $item->created_at->diffForHumans() }}</td>
                <td align="center">{{ $item->updated_at->diffForHumans() }}</td>
                <td align="center">{{ $item->user->us_nombre.' '.$item->user->us_paterno.' '.$item->user->us_materno }}</td>
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