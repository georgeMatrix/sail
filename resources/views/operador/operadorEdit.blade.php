@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Actualizacion de Operador <a class="btn btn-primary float-right mt-3" href="{{route('operadores.index')}}">Regresar a listado</a></h1>
            <form action="{{url('/operadores/'.$operador->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <label for="">Apellido paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$operador->apellido_paterno}}">
                <label for="">Apellido Materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control"  value="{{$operador->apellido_materno}}">
                <label for="">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control"  value="{{$operador->nombres}}">
                <label for="">Nombre corto</label>
                <input type="text" name="nombre_corto" id="nombre_corto" class="form-control"  value="{{$operador->nombre_corto}}">
                <label for="">Licencia</label>
                <input type="text" name="licencia" id="licencia" class="form-control"  value="{{$operador->licencia}}">
                <label for="">Vigencia licencia</label>
                <input type="text" readonly name="vigencia_licencia" id="vigencia_licencia" class="form-control"  value="{{$operador->vigencia_licencia}}">
                <label for="">Vigencia medico</label>
                <input type="text" readonly name="vigencia_medico" id="vigencia_medico" class="form-control"  value="{{$operador->vigencia_medico}}">
                <label for="">Obs</label>
                <input type="text" name="obs" id="obs" class="form-control"  value="{{$operador->obs}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        jQuery.fn.datepicker.dates['es'] = {
            days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            daysShort: ["Dom", "Lun", "Mar", "Mié", "Jue", "Vie", "Sáb"],
            daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sá"],
            months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            today: "Hoy",
            clear: "Borrar",
            format: "dd/mm/yyyy",
            titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
            weekStart: 0
        };

        jQuery('#vigencia_licencia').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
        jQuery('#vigencia_medico').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });

    </script>
@endsection