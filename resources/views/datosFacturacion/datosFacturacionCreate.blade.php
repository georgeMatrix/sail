@extends('layouts.app')
@section('content')
    <div class="col-md-6">
        <h1 class="text-center">Formulario de rutas <a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
        <form action="{{route('datosFacturacions.store')}}" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="">Rutas</label>
                <select name="rutas" id="rutas" class="form-control">
                    @foreach($rutas as $ruta)
                        <option value="{{$ruta->id}}">{{$ruta->nombre}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="">Clave Prod Serv</label>
                <input type="text" name="claveProdServ" id="claveProdServ" class="form-control {{$errors->has('claveProdServ')?'is-invalid':''}}"
                       value="{{old('claveProdServ')}}">
                <div class="invalid-feedback">
                    El campo claveProdServ es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">No Identificacion</label>
                <input type="text" name="noIdentificacion" id="noIdentificacion" class="form-control {{$errors->has('noIdentificacion')?'is-invalid':''}}"
                       value="{{old('noIdentificacion')}}">
                <div class="invalid-feedback">
                    El campo noIdentificacion es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Cantidad</label>
                <input type="text" name="cantidad" id="cantidad" class="form-control {{$errors->has('cantidad')?'is-invalid':''}}"
                       value="{{old('cantidad')}}">
                <div class="invalid-feedback">
                    El campo cantidad es requerido y debe de ser numerico
                </div>
            </div>

            <div class="form-group">
                <label for="">Clave Unidad</label>
                <input type="text" name="claveUnidad" id="claveUnidad" class="form-control {{$errors->has('claveUnidad')?'is-invalid':''}}"
                       value="{{old('claveUnidad')}}">
                <div class="invalid-feedback">
                    La campo claveUnidad es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Unidad</label>
                <input type="text" name="unidad" id="unidad" class="form-control {{$errors->has('unidad')?'is-invalid':''}}"
                       value="{{old('unidad')}}">
                <div class="invalid-feedback">
                    La campo unidad es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}"
                       value="{{old('descripcion')}}">
                <div class="invalid-feedback">
                    El campo descripcion es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Valor Unitario</label>
                <input type="text" name="valorUnitario" id="valorUnitario" class="form-control {{$errors->has('valorUnitario')?'is-invalid':''}}"
                       value="{{old('valorUnitario')}}">
                <div class="invalid-feedback">
                    El campo valorUnitario es requerido
                </div>
            </div>

            <div class="form-group">
                <label for="">Importe</label>
                <input type="text" name="importe" id="importe" class="form-control {{$errors->has('importe')?'is-invalid':''}}"
                       value="{{old('importe')}}">
                <div class="invalid-feedback">
                    El campo importe es requerido y debe de ser numerico
                </div>
            </div>

            <div class="form-group">
                <label for="">tIva</label>
                <input type="text" name="tIva" id="tIva" class="form-control {{$errors->has('tIva')?'is-invalid':''}}"
                       value="{{old('tIva')}}">
                <div class="invalid-feedback">
                    El campo tIva es requerido y debe de ser numerico
                </div>
            </div>

            <div class="form-group">
                <label for="">tIsr</label>
                <input type="text" name="tIsr" id="tIsr" class="form-control {{$errors->has('tIsr')?'is-invalid':''}}"
                       value="{{old('tIsr')}}">
                <div class="invalid-feedback">
                    El campo tIsr es requerido y debe de ser numerico
                </div>
            </div>

            <div class="form-group">
                <label for="">rIva</label>
                <input type="text" name="rIva" id="rIva" class="form-control {{$errors->has('rIva')?'is-invalid':''}}"
                       value="{{old('rIva')}}">
                <div class="invalid-feedback">
                    El campo rIva es requerido y debe de ser numerico
                </div>
            </div>

            <div class="form-group">
                <label for="">rIsr</label>
                <input type="text" name="rIsr" id="rIsr" class="form-control {{$errors->has('rIsr')?'is-invalid':''}}"
                       value="{{old('rIsr')}}">
                <div class="invalid-feedback">
                    El campo rIsr es requerido y debe de ser numerico
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection