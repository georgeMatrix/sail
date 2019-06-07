@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-4">Listado de Usuarios <a href="{{route('usuarios.create')}}" class="mt-2 btn btn-success float-right">Nuevo Usuario</a><a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
                <table class="table table-responsive table-hover table-striped table table-sm">
                    <thead class="table-primary">
                    <tr>
                        <th>id</th>
                        <td>apellidoPaterno</td>
                        <td>apellidoMaterno</td>
                        <td>nombre</td>
                        <td>password</td>
                        <td>nombreCorto</td>
                        <td>cargo</td>
                        <td>area</td>
                        <td>modulo01</td>
                        <td>modulo02</td>
                        <td>modulo03</td>
                        <td>modulo04</td>
                        <td>modulo05</td>
                        <td>modulo06</td>
                        <td>modulo07</td>
                        <td>modulo08</td>
                        <td>modulo09</td>
                        <td>modulo10</td>
                        <th>eliminar</th>
                        <th>actualizar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->apellidoPaterno}}</td>
                            <td>{{$usuario->apellidoMaterno}}</td>
                            <td>{{$usuario->nombre}}</td>
                            <td>{{$usuario->password}}</td>
                            <td>{{$usuario->nombreCorto}}</td>
                            <td>{{$usuario->cargo}}</td>
                            <td>{{$usuario->area}}</td>
                            <td>{{$usuario->modulo01}}</td>
                            <td>{{$usuario->modulo02}}</td>
                            <td>{{$usuario->modulo03}}</td>
                            <td>{{$usuario->modulo04}}</td>
                            <td>{{$usuario->modulo05}}</td>
                            <td>{{$usuario->modulo06}}</td>
                            <td>{{$usuario->modulo07}}</td>
                            <td>{{$usuario->modulo08}}</td>
                            <td>{{$usuario->modulo09}}</td>
                            <td>{{$usuario->modulo10}}</td>
                            <td>
                                <form method="post" action="{{url('/usuarios/'.$usuario->id)}}">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{url('/usuarios/'.$usuario->id.'/edit')}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                {{$usuarios->render()}}
            </div>
        </div>
    </div>
@endsection