@extends('layouts.app')
@section('content')
    <div class="col-md-12">
        <h1 class="mt-4">Listado de Unidades <a href="{{route('unidades.create')}}" class="mt-2 btn btn-success float-right">Nueva Unidad</a><a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
        <table class="table table-responsive table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>PROVEEDOR</th>
                <th>NOMBRE</th>
                <th>ECONOMICO</th>
                <th>TIPO</th>
                <th>MARCA</th>
                <th>MODELO</th>
                <th>PLACAS</th>
                <th>SERIE</th>
                <th>MOTOR</th>
                <th>SEGURO</th>
                <th>VERIFICACION</th>
                <th>FM</th>
                <th>OBS</th>
                <th>ELIMINAR</th>
                <th>ACTUALIZAR</th>
            </tr>
            </thead>
            <tbody>
            @foreach($unidades as $unidad)
                <tr>
                    <td>{{$unidad->id}}</td>
                    <td>{{$unidad->provedor}}</td>
                    <td>{{$unidad->nombre}}</td>
                    <td>{{$unidad->economico}}</td>
                    <td>{{$unidad->tipo}}</td>
                    <td>{{$unidad->marca}}</td>
                    <td>{{$unidad->modelo}}</td>
                    <td>{{$unidad->placas}}</td>
                    <td>{{$unidad->serie}}</td>
                    <td>{{$unidad->motor}}</td>
                    <td>{{$unidad->seguro}}</td>
                    <td>{{$unidad->verificacion}}</td>
                    <td>{{$unidad->fm}}</td>
                    <td>{{$unidad->obs}}</td>
                    <td>
                        <form method="post" action="{{url('/unidades/'.$unidad->id)}}">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{url('/unidades/'.$unidad->id.'/edit')}}" class="btn btn-primary">Editar</a>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        {{$unidades->render()}}
    </div>
@endsection