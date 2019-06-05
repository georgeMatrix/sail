@extends('layouts.app')
@section('content')
        <div class="col-md-12">
            <h1 class="mt-4">Listado de Provedores <a href="{{route('provedores.create')}}" class="mt-2 btn btn-success float-right">Nuevo Provedor</a><a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
            <table class="table table-responsive table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>razon_social</th>
                    <th>rfc</th>
                    <th>direccion</th>
                    <th>contacto</th>
                    <th>mail</th>
                    <th>credito</th>
                    <th>saldo</th>
                </tr>
                </thead>
                <tbody>
                @foreach($provedores as $provedor)
                    <tr>
                        <td>{{$provedor->id}}</td>
                        <td>{{$provedor->nombre}}</td>
                        <td>{{$provedor->razon_social}}</td>
                        <td>{{$provedor->rfc}}</td>
                        <td>{{$provedor->direccion}}</td>
                        <td>{{$provedor->contacto}}</td>
                        <td>{{$provedor->mail}}</td>
                        <td>{{$provedor->credito}}</td>
                        <td>{{$provedor->saldo}}</td>
                        <td>
                            <form method="post" action="{{url('/provedores/'.$provedor->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url('/provedores/'.$provedor->id.'/edit')}}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{$provedores->render()}}
        </div>
@endsection