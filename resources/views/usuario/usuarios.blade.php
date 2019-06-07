@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> LISTADO USUARIOS</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('usuarios.create')}}" class="mt-2 btn btn-success float-right"><i class="fas fa-user"></i> Nuevo Usuario</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/home')}}" class="mt-2 mr-3 btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive table-hover table-striped table table-sm">
                    <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>APELLIDO_PATERNO</th>
                        <th>APELLIDO_MATERNO</th>
                        <th>NOMBRE</th>
                        <th>PASSWORD</th>
                        <th>NOMBRE_CORTO</th>
                        <th>CARGO</th>
                        <th>AREA</th>
                        <th>MODULO_01</th>
                        <th>MODULO_02</th>
                        <th>MODULO_03</th>
                        <th>MODULO_04</th>
                        <th>MODULO_05</th>
                        <th>MODULO_06</th>
                        <th>MODULO_07</th>
                        <th>MODULO_08</th>
                        <th>MODULO_09</th>
                        <th>MODULO_10</th>
                        <th>ELIMINAR</th>
                        <th>ACTUALIZAR</th>
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