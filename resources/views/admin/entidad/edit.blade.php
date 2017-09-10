@extends('layouts.init')

@section('FormularioTitulo','Entidades')
@section('FormularioDescripcion','modificar datos de la entidad')
@section('FormularioActual','Entidad')
@section('FormularioDetalle','Modificar Entidad')

@section('stylesheet')
	<link rel="stylesheet" href="{{ asset('plugin/plugins/select2/select2.min.css') }}">
@endsection

@section('ContenidoPagina')

    {!! Form::model($entidad,['route' => ['entidad.update',$entidad->id], 'method' => 'PUT', 'class' => 'form-horizontal']) !!}
        @include('admin.entidad.form')
        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Actualizar los datos"><button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Actualizar</button></span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro"><a href="{{ route('entidad.index') }}" class="btn btn-danger"><i class="fa fa-reply-all"></i> Cancelar</a></span>
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
@endsection