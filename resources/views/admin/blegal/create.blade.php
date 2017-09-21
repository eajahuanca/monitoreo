@extends('layouts.init')

@section('FormularioTitulo','Proyectos')
@section('FormularioDescripcion','registrar nueva Base Legal referente al proyecto')
@section('FormularioActual','Base Legal')
@section('FormularioDetalle','Registrar Nueva Base Legal')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('plugin/plugins/select2/select2.min.css') }}">
@endsection

@section('ContenidoPagina')

    {!! Form::open(['route' => 'legal.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include('admin.blegal.form')

        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Guardar los datos"><button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button></span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro"><a href="{{ route('legal.index') }}" class="btn btn-danger"><i class="fa fa-reply-all"></i> Cancelar</a></span>
            </center>
        </div>
    {!! Form::close() !!}
@endsection

@section('javascript')
	<script src="{{ asset('plugin/plugins/select2/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('.select2').select2();
        })
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            @if(count($errors)>0)
                toastr["error"]("Validación de Campos", "Verifique los campos.");
            @endif
        });
    </script>
@endsection