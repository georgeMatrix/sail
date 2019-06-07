@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> LISTADO CLIENTES</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('clientes.create')}}" class="mt-2 btn btn-success float-right"><i class="fas fa-user"></i> Nuevo Cliente</a>
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
                        <th>CALLE</th>
                        <th>NUMERO</th>
                        <th>INTERIOR</th>
                        <th>COLONIA</th>
                        <th>CIUDAD</th>
                        <th>CP</th>
                        <th>ESTADO</th>
                        <th>CONTACTO_1</th>
                        <th>TELEFONO_1</th>
                        <th>MAIL_1</th>
                        <th>CONTACTO_2</th>
                        <th>TELEFONO_2</th>
                        <th>MAIL_2</th>
                        <th>DIA_DE_REVISION</th>
                        <th>DIA_DE_CREDITO</th>
                        <th>ELIMINAR</th>
                        <th>EDITAR</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->id}}</td>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->calle}}</td>
                            <td>{{$cliente->numero}}</td>
                            <td>{{$cliente->interior}}</td>
                            <td>{{$cliente->colonia}}</td>
                            <td>{{$cliente->ciudad}}</td>
                            <td>{{$cliente->cp}}</td>
                            <td>{{$cliente->estado}}</td>
                            <td>{{$cliente->contacto1}}</td>
                            <td>{{$cliente->tel1}}</td>
                            <td>{{$cliente->mail1}}</td>
                            <td>{{$cliente->contacto2}}</td>
                            <td>{{$cliente->tel2}}</td>
                            <td>{{$cliente->mail2}}</td>
                            <td>{{$cliente->dia_revision}}</td>
                            <td>{{$cliente->dia_credito}}</td>
                            <td>
                                <form method="post" action="{{url('/clientes/'.$cliente->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url('/clientes/'.$cliente->id.'/edit')}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$clientes->render()}}
            </div>
        </div>
    </div>
@endsection