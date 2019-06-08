@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="fa fa-truck fa-md text-danger"></i> NUEVA UNIDAD</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('unidades.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('unidades.store')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <h5 for="">Proveedor</h5>
                        <select name="provedor" id="provedor" class="form-control">
                            @foreach($provedores as $provedor)
                                <option value="{{$provedor->id}}">{{$provedor->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <h5 for="">Nombre</h5>
                        <input maxlength="70" type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                               value="{{old('nombre')}}">
                        <div class="invalid-feedback">
                            El campo nombre es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Economico</h5>
                        <input maxlength="10" type="text" name="economico" id="economico" class="form-control {{$errors->has('economico')?'is-invalid':''}}"
                               value="{{old('economico')}}">
                        <div class="invalid-feedback">
                            El el campo economico es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Tipo</h5>
                        <input maxlength="20" type="text" name="tipo" id="tipo" class="form-control {{$errors->has('tipo')?'is-invalid':''}}"
                               value="{{old('tipo')}}">
                        <div class="invalid-feedback">
                            El el campo tipo es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Marca</h5>
                        <input maxlength="20" type="text" name="marca" id="marca" class="form-control {{$errors->has('marca')?'is-invalid':''}}"
                               value="{{old('marca')}}">
                        <div class="invalid-feedback">
                            El campo marca es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Modelo</h5>
                        <input maxlength="20" type="text" name="modelo" id="modelo" class="form-control {{$errors->has('modelo')?'is-invalid':''}}"
                               value="{{old('modelo')}}">
                        <div class="invalid-feedback">
                            El campo modelo es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Placas</h5>
                        <input maxlength="20" type="text" name="placas" id="placas" class="form-control {{$errors->has('placas')?'is-invalid':''}}"
                               value="{{old('placas')}}">
                        <div class="invalid-feedback">
                            El campo placas es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Serie</h5>
                        <input maxlength="30" type="text" name="serie" id="serie" class="form-control {{$errors->has('serie')?'is-invalid':''}}"
                               value="{{old('serie')}}">
                        <div class="invalid-feedback">
                            El campo serie es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Motor</h5>
                        <input maxlength="30" type="text" name="motor" id="motor" class="form-control {{$errors->has('motor')?'is-invalid':''}}"
                               value="{{old('motor')}}">
                        <div class="invalid-feedback">
                            El campo motor es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Seguro</h5>
                        <input type="text" readonly name="seguro" id="seguro" class="form-control {{$errors->has('seguro')?'is-invalid':''}}"
                               value="{{old('seguro')}}">
                        <div class="invalid-feedback">
                            El campo seguro es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Verificacion</h5>
                        <input type="text" readonly name="verificacion" id="verificacion" class="form-control {{$errors->has('verificacion')?'is-invalid':''}}"
                               value="{{old('verificacion')}}">
                        <div class="invalid-feedback">
                            El campo verificacion es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Fm</h5>
                        <input type="text" readonly name="fm" id="fm" class="form-control {{$errors->has('fm')?'is-invalid':''}}"
                               value="{{old('fm')}}">
                        <div class="invalid-feedback">
                            El campo fm es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Obs</h5>
                        <input maxlength="100" type="text" name="obs" id="obs" class="form-control {{$errors->has('obs')?'is-invalid':''}}"
                               value="{{old('obs')}}">
                        <div class="invalid-feedback">
                            El campo obs es requerido
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Guardar</button>
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