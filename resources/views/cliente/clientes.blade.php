@extends('layout.layout')
@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <h1 class="mt-4">Listado de Clientes <a href="{{route('clientes.create')}}" class="mt-2 btn btn-success float-right">Nuevo Cliente</a></h1>
            <table class="table table-striped table-responsive">
                <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>numero</th>
                    <th>interior</th>
                    <th>colonia</th>
                    <th>ciudad</th>
                    <th>cp</th>
                    <th>estado</th>
                    <th>contacto1</th>
                    <th>telefono1</th>
                    <th>mail1</th>
                    <th>contacto2</th>
                    <th>telefono2</th>
                    <th>mail2</th>
                    <th>dia de revision</th>
                    <th>dia de credito</th>
                    <th>eliminar</th>
                    <th>actualizar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->nombre}}</td>
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

        </div>
    </div>
@endsection