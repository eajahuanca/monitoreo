@extends('layouts.init')

@section('FormularioTitulo','Banner')
@section('FormularioDescripcion','registrar nuevo Banner en el sistema')
@section('FormularioActual','Banner')
@section('FormularioDetalle','Registrar nuevo Banner')

@section('stylesheet')
    <link href="{{ asset('plugin/chosen/chosen.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/editor/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
@endsection

@section('ContenidoPagina')

    {!! Form::open(['route' => 'banner.store', 'method' => 'POST', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include('admin.banner.form')

        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Guardar los datos"><button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Guardar</button></span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro"><a href="{{ route('banner.index') }}" class="btn btn-danger"><i class="fa fa-reply-all"></i> Cancelar</a></span>
            </center>
        </div>
    {!! Form::close() !!}
@endsection

@section('javascript')
    <script src="{{ asset('plugin/chosen/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('plugin/editor/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('plugin/editor/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- chosen load-->
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
    <!-- /chosen -->
    <!-- Ckeditor load-->
    <script type="text/javascript">
        $(function() 
        {
            CKEDITOR.replace('editor1');
            $(".textarea").wysihtml5();
        });
    </script>
    <!-- /Ckeditor-->
@endsection