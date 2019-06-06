@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Actualizacion de Facturacion<a class="btn btn-primary float-right mt-3" href="{{route('datosFacturacions.index')}}">Regresar a listado</a></h1>
            <form action="{{url('/datosFacturacions/'.$datosF->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <label for="">Rutas</label>
                <select name="rutas" id="rutas" class="form-control">
                    @foreach($rutas as $ruta)
                        @if($datosF->rutas == $ruta->id)
                            <option value="{{$ruta->id}}" selected>{{$ruta->nombre}}</option>
                        @else
                            <option value="{{$ruta->id}}">{{$ruta->nombre}}</option>
                        @endif
                    @endforeach
                </select>
                <label for="">Clave Prod Serv</label>
                <input type="text" name="claveprodserv" id="claveprodserv" class="form-control"  value="{{$datosF->claveProdServ}}">
                <label for="">No Identificacion</label>
                <input type="text" name="noIdentificacion" id="noIdentificacion" class="form-control"  value="{{$datosF->noIdentificacion}}">
                <label for="">Cantidad</label>
                <input type="text" name="cantidad" id="cantidad" class="form-control"  value="{{$datosF->cantidad}}">
                <label for="">Clave Unidad</label>
                <input type="text" name="claveUnidad" id="claveUnidad" class="form-control"  value="{{$datosF->claveUnidad}}">
                <label for="">Unidad</label>
                <input type="text" name="unidad" id="unidad" class="form-control"  value="{{$datosF->unidad}}">
                <label for="">Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" class="form-control"  value="{{$datosF->descripcion}}">
                <label for="">Valor unitario</label>
                <input type="text" name="valorUnitario" id="valorUnitario" class="form-control"  value="{{$datosF->valorUnitario}}">
                <label for="">Importe</label>
                <input type="text" name="importe" id="importe" class="form-control"  value="{{$datosF->importe}}">
                <label for="">tIva</label>
                <input type="text" name="tIva" id="tIva" class="form-control"  value="{{$datosF->tIva}}">
                <label for="">tIsr</label>
                <input type="text" name="tIsr" id="tIsr" class="form-control"  value="{{$datosF->tIsr}}">
                <label for="">rIva</label>
                <input type="text" name="rIva" id="rIva" class="form-control" value="{{$datosF->rIva}}">
                <label for="">rIsr</label>
                <input type="text" name="rIsr" id="rIsr" class="form-control" value="{{$datosF->rIsr}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection