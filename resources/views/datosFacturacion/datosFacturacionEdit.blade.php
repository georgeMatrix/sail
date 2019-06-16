@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="fa fa-map-marked fa-md text-danger"></i> ACTUALIZACION FACTURACION</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('rutas.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/datosFacturacions/'.$datosF->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <h5 for="">Rutas</h5>
                <select name="rutas" id="rutas" class="form-control">
                    @foreach($rutas as $ruta)
                        @if($datosF->rutas == $ruta->id)
                            <option value="{{$ruta->id}}" selected>{{$ruta->nombre}}</option>
                        @else
                            <option value="{{$ruta->id}}">{{$ruta->nombre}}</option>
                        @endif
                    @endforeach
                </select>
                <h5 for="">Razon social que factura</h5>
                <input type="number" name="facturador" id="facturador" class="form-control"  value="{{$ruta->facturador}}">
                <h5 for="">Asignacion de Precio</h5>
                <select name="asignacionPrecio" id="asignacionPrecio" class="form-control">
                    @foreach($provedores as $provedor)
                        @if($provedor->id == $datosF->asignacionPrecio)
                            <option value="{{$provedor->id}}" selected>{{$provedor->nombre}}</option>
                        @else
                            <option value="{{$provedor->id}}">{{$provedor->nombre}}</option>
                        @endif
                    @endforeach
                </select>
                <h5 for="">Clave de Producto o Servicio</h5>
                <input type="text" name="claveprodserv" id="claveprodserv" class="form-control"  value="{{$datosF->claveProdServ}}">
                <h5 for="">Numero de Identificacion</h5>
                <input type="text" name="noIdentificacion" id="noIdentificacion" class="form-control"  value="{{$datosF->noIdentificacion}}">
                <h5 for="">Cantidad</h5>
                <input type="text" name="cantidad" id="cantidad" class="form-control"  value="{{$datosF->cantidad}}">
                <h5 for="">Clave Unidad</h5>
                <input type="text" name="claveUnidad" id="claveUnidad" class="form-control"  value="{{$datosF->claveUnidad}}">
                <h5 for="">Unidad</h5>
                <input type="text" name="unidad" id="unidad" class="form-control"  value="{{$datosF->unidad}}">
                <h5 for="">Descripcion</h5>
                <input type="text" name="descripcion" id="descripcion" class="form-control"  value="{{$datosF->descripcion}}">
                <h5 for="">Valor unitario</h5>
                <input type="text" name="valorUnitario" id="valorUnitario" class="form-control"  value="{{$datosF->valorUnitario}}">
                <h5 for="">Importe</h5>
                <input type="text" name="importe" id="importe" class="form-control"  value="{{$datosF->importe}}">
                <h5 for="">Traslado de Iva (Porsentaje)</h5>
                <input type="text" name="tIva" id="tIva" class="form-control"  value="{{$datosF->tIva}}">
                <h5 for="">Traslado de Irs (Porcentaje)</h5>
                <input type="text" name="tIsr" id="tIsr" class="form-control"  value="{{$datosF->tIsr}}">
                <h5 for="">Retencion de Iva (Porcentaje)</h5>
                <input type="text" name="rIva" id="rIva" class="form-control" value="{{$datosF->rIva}}">
                <h5 for="">Retencion de Isr (Porcentaje)</h5>
                <input type="text" name="rIsr" id="rIsr" class="form-control" value="{{$datosF->rIsr}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    </div>
@endsection