@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> LISTADO OPERADORES</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('operadores.create')}}" class="mt-2 btn btn-success float-right"><i class="fas fa-user"></i> Nuevo Operador</a>
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
                        <th>APELLIDO_PATERNO</th>
                        <th>APELLIDO_MATERNO</th>
                        <th>NOMBRE</th>
                        <th>NOMBRE_CORTO</th>
                        <th>LICENCIA</th>
                        <th>VIGENCIA_LICENCIA</th>
                        <th>VIGENCIA_MEDICO</th>
                        <th>OBS</th>
                        <th>ELIMINAR</th>
                        <th>EDITAR</th>
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
        </div>
    </div>
@endsection