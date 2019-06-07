@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> LISTADO RUTAS</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('rutas.create')}}" class="mt-2 btn btn-success float-right"><i class="fas fa-user"></i> Nueva Ruta</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/home')}}" class="mt-2 mr-3 btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive table-hover table-sm">
                    <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>CLIENTES</th>
                        <th>NOMBRE</th>
                        <th>CLIENTE</th>
                        <th>LUGAR_EXP</th>
                        <th>ORIGEN</th>
                        <th>REMITENTE</th>
                        <th>DOM_REMITENTE</th>
                        <th>RECOGE</th>
                        <th>VALOR_DECLARADO</th>
                        <th>DESTINO</th>
                        <th>DESTINATARIO</th>
                        <th>DOM_DESTINATARIO</th>
                        <th>ENTREGA</th>
                        <th>FECHA_ENTREGA</th>
                        <th>CANTIDAD</th>
                        <th>EMBALAJE</th>
                        <th>CONCEPTO</th>
                        <th>MATERIAL_PELIGROSO</th>
                        <th>INDEMNIZACION</th>
                        <th>OBS</th>
                        <th>DIAS_RE</th>
                        <th>ELIMINAR</th>
                        <th>EDITAR</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rutas as $ruta)
                        <tr>
                            <td>{{$ruta->id}}</td>
                            <td>{{$ruta->clientes}}</td>
                            <td>{{$ruta->nombre}}</td>
                            <td>{{$ruta->cliente}}</td>
                            <td>{{$ruta->lugar_exp}}</td>
                            <td>{{$ruta->origen}}</td>
                            <td>{{$ruta->remitente}}</td>
                            <td>{{$ruta->dom_remitente}}</td>
                            <td>{{$ruta->recoge}}</td>
                            <td>{{$ruta->valor_declarado}}</td>
                            <td>{{$ruta->destino}}</td>
                            <td>{{$ruta->destinatario}}</td>
                            <td>{{$ruta->dom_destinatario}}</td>
                            <td>{{$ruta->entrega}}</td>
                            <td>{{$ruta->fecha_entrega}}</td>
                            <td>{{$ruta->cantidad}}</td>
                            <td>{{$ruta->embalaje}}</td>
                            <td>{{$ruta->concepto}}</td>
                            <td>{{$ruta->material_peligroso}}</td>
                            <td>{{$ruta->indemnizacion}}</td>
                            <td>{{$ruta->obs}}</td>
                            <td>{{$ruta->dias_re}}</td>
                            <td>
                                <form method="post" action="{{url('/rutas/'.$ruta->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url('/rutas/'.$ruta->id.'/edit')}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$rutas->render()}}
            </div>
        </div>
    </div>
@endsection