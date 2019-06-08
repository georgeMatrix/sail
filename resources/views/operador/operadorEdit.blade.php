@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class=" text-danger far fa-id-card"></i> ACTUALIZACION OPERADOR</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('operadores.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/operadores/'.$operador->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <h5 for="">Apellido paterno</h5>
                    <input maxlength="20" type="text" name="apellido_paterno" id="apellido_paterno" class="form-control" value="{{$operador->apellido_paterno}}">
                    <h5 for="">Apellido Materno</h5>
                    <input maxlength="20" type="text" name="apellido_materno" id="apellido_materno" class="form-control"  value="{{$operador->apellido_materno}}">
                    <h5 for="">Nombres</h5>
                    <input maxlength="50" type="text" name="nombres" id="nombres" class="form-control"  value="{{$operador->nombres}}">
                    <h5 for="">Nombre corto</h5>
                    <input maxlength="20" type="text" name="nombre_corto" id="nombre_corto" class="form-control"  value="{{$operador->nombre_corto}}">
                    <h5 for="">Licencia</h5>
                    <input maxlength="20" type="text" name="licencia" id="licencia" class="form-control"  value="{{$operador->licencia}}">
                    <h5 for="">Vigencia licencia</h5>
                    <input type="text" readonly name="vigencia_licencia" id="vigencia_licencia" class="form-control"  value="{{$operador->vigencia_licencia}}">
                    <h5 for="">Vigencia medico</h5>
                    <input type="text" readonly name="vigencia_medico" id="vigencia_medico" class="form-control"  value="{{$operador->vigencia_medico}}">
                    <h5 for="">Obs</h5>
                    <input maxlength="100" type="text" name="obs" id="obs" class="form-control"  value="{{$operador->obs}}">
                    <br>
                    <button type="submit" class="btn btn-info"><i class="far fa-edit"></i> Actualizar</button>
                </form>
            </div>
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