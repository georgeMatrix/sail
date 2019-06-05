@extends('layouts.app')
@section('content')
        <div class="col-md-12">
            <h1 class="mt-4">Listado de Operadores<a href="{{route('operadores.create')}}" class="mt-2 btn btn-success float-right">Nuevo Operador</a><a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
            <table class="table table-responsive table-hover">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Apellido paterno</th>
                    <th>Apellido materno</th>
                    <th>Nombre</th>
                    <th>Nombre corto</th>
                    <th>Licencia</th>
                    <th>Vigencia licencia</th>
                    <th>Vigencia medico</th>
                    <th>obs</th>
                </tr>
                </thead>
                <tbody>
                @foreach($operadores as $operador)
                    <tr>
                        <td>{{$operador->id}}</td>
                        <td>{{$operador->apellido_paterno}}</td>
                        <td>{{$operador->apellido_materno}}</td>
                        <td>{{$operador->nombres}}</td>
                        <td>{{$operador->nombre_corto}}</td>
                        <td>{{$operador->licencia}}</td>
                        <td>{{$operador->vigencia_licencia}}</td>
                        <td>{{$operador->vigencia_medico}}</td>
                        <td>{{$operador->obs}}</td>
                        <td>
                            <form method="post" action="{{url('/operadores/'.$operador->id)}}">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{url('/operadores/'.$operador->id.'/edit')}}" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
            {{$operadores->render()}}
        </div>
@endsection