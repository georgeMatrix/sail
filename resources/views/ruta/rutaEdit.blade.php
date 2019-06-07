@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> ACTUALIZACION RUTA</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('rutas.index')}}" class="mt-2 mr-3 btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/rutas/'.$ruta->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <label for="">Clientes</label>
                    <select name="clientes" id="clientes" class="form-control">
                        @foreach($clientes as $cliente)
                            @if($ruta->clientes == $cliente->id)
                            <option value="{{$cliente->id}}" selected>{{$cliente->nombre}}</option>
                                @else
                            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control"  value="{{$ruta->nombre}}">
                    <label for="">Cliente</label>
                    <input type="text" name="cliente" id="cliente" class="form-control"  value="{{$ruta->cliente}}">
                    <label for="">Lugar exp</label>
                    <input type="text" name="lugar_exp" id="lugar_exp" class="form-control"  value="{{$ruta->lugar_exp}}">
                    <label for="">Origen</label>
                    <input type="text" name="origen" id="origen" class="form-control"  value="{{$ruta->origen}}">
                    <label for="">Remitente</label>
                    <input type="text" name="remitente" id="remitente" class="form-control"  value="{{$ruta->remitente}}">
                    <label for="">Dom remitente</label>
                    <input type="text" name="dom_remitente" id="dom_remitente" class="form-control"  value="{{$ruta->dom_remitente}}">
                    <label for="">Recoge</label>
                    <input type="text" name="recoge" id="recoge" class="form-control"  value="{{$ruta->recoge}}">
                    <label for="">Valor declarado</label>
                    <input type="text" name="valor_declarado" id="valor_declarado" class="form-control"  value="{{$ruta->valor_declarado}}">
                    <label for="">Destino</label>
                    <input type="text" name="destino" id="destino" class="form-control"  value="{{$ruta->destino}}">
                    <label for="">Destinatario</label>
                    <input type="text" name="destinatario" id="destinatario" class="form-control"  value="{{$ruta->destinatario}}">
                    <label for="">Dom destinatario</label>
                    <input type="text" name="dom_destinatario" id="dom_destinatario" class="form-control"  value="{{$ruta->dom_destinatario}}">
                    <label for="">Entrega</label>
                    <input type="text" name="entrega" id="entrega" class="form-control"  value="{{$ruta->entrega}}">
                    <label for="">Fecha entrega</label>
                    <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control"  value="{{$ruta->fecha_entrega}}">
                    <label for="">Cantidad</label>
                    <input type="text" name="cantidad" id="cantidad" class="form-control"  value="{{$ruta->cantidad}}">
                    <label for="">Embalaje</label>
                    <input type="text" name="embalaje" id="embalaje" class="form-control"  value="{{$ruta->embalaje}}">
                    <label for="">Concepto</label>
                    <input type="text" name="concepto" id="concepto" class="form-control"  value="{{$ruta->concepto}}">
                    <label for="">Material peligroso</label>
                    <input type="text" name="material_peligroso" id="material_peligroso" class="form-control"  value="{{$ruta->material_peligroso}}">
                    <label for="">indemnizacion</label>
                    <input type="text" name="indemnizacion" id="indemnizacion" class="form-control"  value="{{$ruta->indemnizacion}}">
                    <label for="">Obs</label>
                    <input type="text" name="obs" id="obs" class="form-control"  value="{{$ruta->obs}}">
                    <label for="">Dias re</label>
                    <input type="text" name="dias_re" id="dias_re" class="form-control"  value="{{$ruta->dias_re}}">
                    <br>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection