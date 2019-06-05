@extends('layouts.app')
@section('content')
        <div class="col-md-12">
            <h1 class="mt-4">Listado de Rutas <a href="{{route('rutas.create')}}" class="mt-2 btn btn-success float-right">Nueva Ruta</a><a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
            <table class="table table-responsive table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>clientes</th>
                    <th>nombre</th>
                    <th>cliente</th>
                    <th>lugar_exp</th>
                    <th>origen</th>
                    <th>remitente</th>
                    <th>dom remitente</th>
                    <th>recoge</th>
                    <th>valor declarado</th>
                    <th>destino</th>
                    <th>destinatario</th>
                    <th>dom destinatario</th>
                    <th>entrega</th>
                    <th>fecha entrega</th>
                    <th>cantidad</th>
                    <th>embalaje</th>
                    <th>concepto</th>
                    <th>material peligroso</th>
                    <th>indemnizacion</th>
                    <th>obs</th>
                    <th>dias re</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
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
@endsection