@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">MENU PRINCIPAL</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('include.menu')
                        <table class="table">
                            <tr>
                                <td><h2>Cliente</h2></td>
                                <td><a href="{{route('clientes.index')}}" class="btn btn-primary">Listado Clientes</a></td>
                                <td><a href="{{route('clientes.create')}}" class="btn btn-primary">Nuevo Cliente</a></td>
                            </tr>
                            <tr>
                                <td><h2>Operadores</h2></td>
                                <td><a href="{{route('operadores.index')}}" class="btn btn-primary">Listado Operadores</a></td>
                                <td><a href="{{route('operadores.create')}}" class="btn btn-primary">Nuevo Operador</a></td>
                            </tr>
                            <tr>
                                <td><h2>Provedores</h2></td>
                                <td><a href="{{route('provedores.index')}}" class="btn btn-primary">Listado Provedores</a></td>
                                <td><a href="{{route('provedores.create')}}" class="btn btn-primary">Nuevo Provedor</a></td>
                            </tr>
                            <tr>
                                <td><h2>Rutas</h2></td>
                                <td><a href="{{route('rutas.index')}}" class="btn btn-primary">Listado Rutas</a></td>
                                <td><a href="{{route('rutas.create')}}" class="btn btn-primary">Nuevo Rutas</a></td>
                            </tr>
                            <tr>
                                <td><h2>Unidades</h2></td>
                                <td><a href="{{route('unidades.index')}}" class="btn btn-primary">Listado Unidades</a></td>
                                <td><a href="{{route('unidades.create')}}" class="btn btn-primary">Nuevo Unidad</a></td>
                            </tr>
                            <tr>
                                <td><h2>Datos de Facturacion</h2></td>
                                <td><a href="{{route('datosFacturacions.index')}}" class="btn btn-primary">Listado Facturacion</a></td>
                                <td><a href="{{route('datosFacturacions.create')}}" class="btn btn-primary">Nuevos Datos de Facturacion</a></td>
                            </tr>
                            <tr>
                                <td><h2>Usuarios</h2></td>
                                <td><a href="{{route('usuarios.index')}}" class="btn btn-primary">Listado Usuarios</a></td>
                                <td><a href="{{route('usuarios.create')}}" class="btn btn-primary">Nuevos Usuarios</a></td>
                            </tr>
                        </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
