@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="mt-4">Listado de Datos Facturacion <a href="{{route('datosFacturacions.create')}}" class="mt-2 btn btn-success float-right">Nuevos Datos de Facturacion</a><a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
                <table class="table table-responsive table-hover">
                    <thead>
                    <tr>
                        <th>id</th>
                        <td>rutas</td>
                        <td>claveProdServ</td>
                        <td>noIdentificacion</td>
                        <td>cantidad</td>
                        <td>claveUnidad</td>
                        <td>unidad</td>
                        <td>descripcion</td>
                        <td>valorUnitario</td>
                        <td>importe</td>
                        <td>tIva</td>
                        <td>tIsr</td>
                        <td>rIva</td>
                        <td>rIsr</td>
                        <td>Eliminar</td>
                        <td>Editar</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datosF as $dt)
                        <tr>
                            <td>{{$dt->id}}</td>
                            <td>{{$dt->rutas}}</td>
                            <td>{{$dt->claveProdServ}}</td>
                            <td>{{$dt->noIdentificacion}}</td>
                            <td>{{$dt->cantidad}}</td>
                            <td>{{$dt->claveUnidad}}</td>
                            <td>{{$dt->unidad}}</td>
                            <td>{{$dt->descripcion}}</td>
                            <td>{{$dt->valorUnitario}}</td>
                            <td>{{$dt->importe}}</td>
                            <td>{{$dt->tIva}}</td>
                            <td>{{$dt->tIsr}}</td>
                            <td>{{$dt->rIva}}</td>
                            <td>{{$dt->rIsr}}</td>
                            <td>
                                <form method="post" action="{{url('/datosFacturacions/'.$dt->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url('/datosFacturacions/'.$dt->id.'/edit')}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$datosF->render()}}
            </div>
        </div>
    </div>
@endsection