@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class=" text-danger far fa-id-card"></i> NUEVO OPERADOR</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('operadores.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('operadores.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <h5 for="">Apellido paterno</h5>
                        <input maxlength="20" type="text" name="apellido_paterno" id="apellido_paterno" class="form-control {{$errors->has('apellido_paterno')?'is-invalid':''}}"
                               value="{{old('apellido_paterno')}}">
                        <div class="invalid-feedback">
                            El apellido paterno es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Apellido materno</h5>
                        <input maxlength="20" type="text" name="apellido_materno" id="apellido_materno" class="form-control {{$errors->has('apellido_materno')?'is-invalid':''}}"
                               value="{{old('apellido_materno')}}">
                        <div class="invalid-feedback">
                            El apellido materno es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Nombres</h5>
                        <input maxlength="50" type="text" name="nombres" id="nombres" class="form-control {{$errors->has('nombres')?'is-invalid':''}}"
                               value="{{old('nombres')}}">
                        <div class="invalid-feedback">
                            El campo nombres es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Nombre corto</h5>
                        <input maxlength="20" type="text" name="nombre_corto" id="nombre_corto" class="form-control {{$errors->has('nombre_corto')?'is-invalid':''}}"
                               value="{{old('nombre_corto')}}">
                        <div class="invalid-feedback">
                            El campo nombre corto es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Numero de licencia</h5>
                        <input maxlength="20" type="text" name="licencia" id="licencia" class="form-control {{$errors->has('licencia')?'is-invalid':''}}"
                               value="{{old('licencia')}}">
                        <div class="invalid-feedback">
                            La licencia es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Vigencia de licencia</h5>
                        <!-- <input type="text" class="form-control" id="datapicker">-->
                        <input type="text" readonly name="vigencia_licencia" id="vigencia_licencia" class="form-control {{$errors->has('vigencia_licencia')?'is-invalid':''}}"
                               value="{{old('vigencia_licencia')}}">
                        <div class="invalid-feedback">
                            El campo vigencia licencia es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Vigencia de examen medico</h5>
                        <input type="text" readonly name="vigencia_medico" id="vigencia_medico" class="form-control {{$errors->has('vigencia_medico')?'is-invalid':''}}"
                               value="{{old('vigencia_medico')}}">
                        <div class="invalid-feedback">
                            El campo vigencia medico es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Observaciones</h5>
                        <input maxlength="100" type="text" name="obs" id="obs" class="form-control {{$errors->has('obs')?'is-invalid':''}}"
                               value="{{old('obs')}}">
                        <div class="invalid-feedback">
                            El campo obs es requerido
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Guardar</button>
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