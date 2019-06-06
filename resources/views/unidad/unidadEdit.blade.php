@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Actualizacion de Unidades <a class="btn btn-primary float-right mt-3" href="{{route('unidades.index')}}">Regresar a listado</a></h1>
            <form action="{{url('/unidades/'.$unidad->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}

                <label for="">Provedor</label>
                <select name="provedor" id="provedor" class="form-control">
                    @foreach($provedores as $provedor)
                        @if($provedor->id == $unidad->provedor)
                            <option value="{{$provedor->id}}" selected>{{$provedor->nombre}}</option>
                        @else
                            <option value="{{$provedor->id}}">{{$provedor->nombre}}</option>
                        @endif
                    @endforeach
                </select>
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control"  value="{{$unidad->nombre}}">
                <label for="">Economico</label>
                <input type="text" name="economico" id="economico" class="form-control"  value="{{$unidad->economico}}">
                <label for="">Tipo</label>
                <input type="text" name="tipo" id="tipo" class="form-control"  value="{{$unidad->tipo}}">
                <label for="">Marca</label>
                <input type="text" name="marca" id="marca" class="form-control"  value="{{$unidad->marca}}">
                <label for="">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="form-control"  value="{{$unidad->modelo}}">
                <label for="">Placas</label>
                <input type="text" name="placas" id="placas" class="form-control"  value="{{$unidad->placas}}">
                <label for="">Serie</label>
                <input type="text" name="serie" id="serie" class="form-control"  value="{{$unidad->serie}}">
                <label for="">Motor</label>
                <input type="text" name="motor" id="motor" class="form-control"  value="{{$unidad->motor}}">
                <label for="">Seguro</label>
                <input type="text" readonly name="seguro" id="seguro" class="form-control"  value="{{$unidad->seguro}}">
                <label for="">Verificacion</label>
                <input type="text" readonly name="verificacion" id="verificacion" class="form-control"  value="{{$unidad->verificacion}}">
                <label for="">Fm</label>
                <input type="text" readonly name="fm" id="fm" class="form-control"  value="{{$unidad->fm}}">
                <label for="">Obs</label>
                <input type="text" name="obs" id="obs" class="form-control"  value="{{$unidad->obs}}">
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