@extends('layouts.app')
@section('content')
    <div class="col-md-6">
        <h1 class="text-center">Formulario de Unidad <a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
        <form action="{{route('unidades.store')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="">Proveedor</label>
                <select name="provedor" id="provedor" class="form-control">
                    @foreach($provedores as $provedor)
                        <option value="{{$provedor->id}}">{{$provedor->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                       value="{{old('nombre')}}">
                <div class="invalid-feedback">
                    El campo nombre es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Economico</label>
                <input type="text" name="economico" id="economico" class="form-control {{$errors->has('economico')?'is-invalid':''}}"
                       value="{{old('economico')}}">
                <div class="invalid-feedback">
                    El el campo economico es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Tipo</label>
                <input type="text" name="tipo" id="tipo" class="form-control {{$errors->has('tipo')?'is-invalid':''}}"
                       value="{{old('tipo')}}">
                <div class="invalid-feedback">
                    El el campo tipo es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control {{$errors->has('marca')?'is-invalid':''}}"
                       value="{{old('marca')}}">
                <div class="invalid-feedback">
                    El campo marca es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control {{$errors->has('modelo')?'is-invalid':''}}"
                       value="{{old('modelo')}}">
                <div class="invalid-feedback">
                    El campo modelo es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Placas</label>
                <input type="text" name="placas" id="placas" class="form-control {{$errors->has('placas')?'is-invalid':''}}"
                       value="{{old('placas')}}">
                <div class="invalid-feedback">
                    El campo placas es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Serie</label>
                <input type="text" name="serie" id="serie" class="form-control {{$errors->has('serie')?'is-invalid':''}}"
                       value="{{old('serie')}}">
                <div class="invalid-feedback">
                    El campo serie es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Motor</label>
                <input type="text" name="motor" id="motor" class="form-control {{$errors->has('motor')?'is-invalid':''}}"
                       value="{{old('motor')}}">
                <div class="invalid-feedback">
                    El campo motor es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Seguro</label>
                <input type="text" readonly name="seguro" id="seguro" class="form-control {{$errors->has('seguro')?'is-invalid':''}}"
                       value="{{old('seguro')}}">
                <div class="invalid-feedback">
                    El campo seguro es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Verificacion</label>
                <input type="text" readonly name="verificacion" id="verificacion" class="form-control {{$errors->has('verificacion')?'is-invalid':''}}"
                       value="{{old('verificacion')}}">
                <div class="invalid-feedback">
                    El campo verificacion es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Fm</label>
                <input type="text" readonly name="fm" id="fm" class="form-control {{$errors->has('fm')?'is-invalid':''}}"
                       value="{{old('fm')}}">
                <div class="invalid-feedback">
                    El campo fm es requerido
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

        jQuery('#seguro').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
        jQuery('#verificacion').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
        jQuery('#fm').datepicker({
            format: "yyyy/mm/dd",
            language: "es",
            autoclose: true
        });
    </script>
@endsection