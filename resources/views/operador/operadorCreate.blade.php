@extends('layouts.app')
@section('content')


    <div class="col-md-6">
        <h1 class="text-center">Formulario de Operador<a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
        <form action="{{route('operadores.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="">Apellido paterno</label>
                <input type="text" name="apellido_paterno" id="apellido_paterno" class="form-control {{$errors->has('apellido_paterno')?'is-invalid':''}}"
                       value="{{old('apellido_paterno')}}">
                <div class="invalid-feedback">
                    El apellido paterno es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Apellido materno</label>
                <input type="text" name="apellido_materno" id="apellido_materno" class="form-control {{$errors->has('apellido_materno')?'is-invalid':''}}"
                       value="{{old('apellido_materno')}}">
                <div class="invalid-feedback">
                    El apellido materno es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Nombres</label>
                <input type="text" name="nombres" id="nombres" class="form-control {{$errors->has('nombres')?'is-invalid':''}}"
                       value="{{old('nombres')}}">
                <div class="invalid-feedback">
                    El campo nombres es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Nombre corto</label>
                <input type="text" name="nombre_corto" id="nombre_corto" class="form-control {{$errors->has('nombre_corto')?'is-invalid':''}}"
                       value="{{old('nombre_corto')}}">
                <div class="invalid-feedback">
                    El campo nombre corto es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Licencia</label>
                <input type="text" name="licencia" id="licencia" class="form-control {{$errors->has('licencia')?'is-invalid':''}}"
                       value="{{old('licencia')}}">
                <div class="invalid-feedback">
                    La licencia es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Vigencia licencia</label>
                <!-- <input type="text" class="form-control" id="datapicker">-->
                <input type="text" readonly name="vigencia_licencia" id="vigencia_licencia" class="form-control {{$errors->has('vigencia_licencia')?'is-invalid':''}}"
                       value="{{old('vigencia_licencia')}}">
                <div class="invalid-feedback">
                    El campo vigencia licencia es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Vigencia Medico</label>
                <input type="text" readonly name="vigencia_medico" id="vigencia_medico" class="form-control {{$errors->has('vigencia_medico')?'is-invalid':''}}"
                       value="{{old('vigencia_medico')}}">
                <div class="invalid-feedback">
                    El campo vigencia medico es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Obs</label>
                <input type="text" name="obs" id="obs" class="form-control {{$errors->has('obs')?'is-invalid':''}}"
                       value="{{old('obs')}}">
                <div class="invalid-feedback">
                    El campo obs es requerido
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
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