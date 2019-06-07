@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> LISTADO PROVEEDORES</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('provedores.create')}}" class="mt-2 btn btn-success float-right"><i class="fas fa-user"></i> Nuevo Proveedor</a>
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
                        <th>NOMBRE</th>
                        <th>RAZON_SOCIAL</th>
                        <th>RFC</th>
                        <th>DIRECCION</th>
                        <th>CONTACTO</th>
                        <th>MAIL</th>
                        <th>CREDITO</th>
                        <th>SALDO</th>
                        <th>ELIMINAR</th>
                        <th>EDITAR</th>
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
        </div>
    </div>
@endsection