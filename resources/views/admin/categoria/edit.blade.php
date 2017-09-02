@extends('layouts.init')

@section('FormularioTitulo','Categorias')
@section('FormularioDescripcion','editar datos de la categoria en el sistema')
@section('FormularioActual','Categorias')
@section('FormularioDetalle','Editar categoria')

@section('stylesheet')
    <link href="{{ asset('plugin/chosen/chosen.min.css') }}" rel="stylesheet">
    <link href="{{ asset('plugin/editor/css/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet">
@endsection

@section('ContenidoPagina')
    
    {!! Form::model($categoria,['route' => ['categoria.update',$categoria->id], 'method' => 'PUT', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include('admin.categoria.form')
        <div class="form-group">
            <center>
                <span class="hint--top  hint--success" aria-label="Actualizar los datos"><button type="submit" class="btn btn-success"><i class="fa fa-edit"></i> Actualizar</button></span>
                <span class="hint--top  hint--error" aria-label="Cancelar el registro"><a href="{{ route('categoria.index') }}" class="btn btn-danger"><i class="fa fa-reply-all"></i> Cancelar</a></span>
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