@extends('layouts.init')

@section('FormularioTitulo','Proyectos')
@section('FormularioDescripcion','en este formulario se pueden observar todos los proyectos')
@section('FormularioActual','Proyectos')
@section('FormularioDetalle','Proyectos')

@section('stylesheet')
    <link href="{{ asset('plugin/plugins/datatables/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/plugins/datatables/responsive/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/plugins/datatables/responsive/responsive.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('ContenidoPagina')

    <div class="form-group">
        <div class="row">
            <div class="col-xs-12 col-md-12">
                <span class="hint--top  hint--success" aria-label="Asignar Base Legal"><a  href="{{ route('legal.create') }}" class="btn btn-success"><i class="fa fa-plus"></i> Asignar Base Legal</a></span>
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
            @foreach($proyecto as $item)
            <tr id="{{ $item->id }}">
                <td>{{ $contadorFilas++ }}</td>
                <td>{{ $item->proy_nombre }}</td>
				<td>{{ $item->entidad->ent_nombre }}</td>
				<td>{{ $item->legal_fmonto }}</td>
				<td>{{ $item->legal_fmonto }}</td>
				<td>{{ $item->legal_tmonto }}</td>
                <td>
					@if($item->legal_archivo)
						<span class="hint--top  hint--error" aria-label="Descargar Archivo"><a href="{{ asset($item->legal_archivo) }}" target="_blank   " class="fa fa-file-pdf-o"></a></span>
					@else
						{{ 'Sin Archivo' }}
					@endif
				</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('javascript')
    <script src="{{ asset('plugin/plugins/datatables/responsive/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugin/plugins/datatables/responsive/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugin/plugins/datatables/responsive/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugin/plugins/datatables/responsive/responsive.bootstrap4.min.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            @if(Session::get('estado')=="1")
                toastr["success"]("{{ Session::get('title') }}", "{{ Session::get('msg') }}");
            @endif
            @if(Session::get('estado')=="2")
                toastr["error"]("{{ Session::get('title') }}", "{{ Session::get('msg') }}");
            @endif
            @if(Session::get('estado'))
                {{ Session::forget('estado') }}
                {{ Session::forget('title') }}
                {{ Session::forget('msg') }}
            @endif
        });
    </script>
@endsection+