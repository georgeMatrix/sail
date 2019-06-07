@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> ACTUALIZACION PROVEEDORES</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('provedores.index')}}" class="mt-2 mr-3 btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{url('/provedores/'.$provedor->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('PATCH')}}
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{$provedor->nombre}}">
                    <label for="">Razon social</label>
                    <input type="text" name="razon_social" id="razon_social" class="form-control"  value="{{$provedor->razon_social}}">
                    <label for="">Rfc</label>
                    <input type="text" name="rfc" id="rfc" class="form-control"  value="{{$provedor->rfc}}">
                    <label for="">Direccion</label>
                    <input type="text" name="direccion" id="direccion" class="form-control"  value="{{$provedor->direccion}}">
                    <label for="">Contacto</label>
                    <input type="text" name="contacto" id="contacto" class="form-control"  value="{{$provedor->contacto}}">
                    <label for="">Mail</label>
                    <input type="text" name="mail" id="mail" class="form-control"  value="{{$provedor->mail}}">
                    <label for="">Credito</label>
                    <input type="text" name="credito" id="credito" class="form-control"  value="{{$provedor->credito}}">
                    <label for="">Saldo</label>
                    <input type="text" name="saldo" id="saldo" class="form-control"  value="{{$provedor->saldo}}">
                    <br>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </form>
            </div>
        </div>
    </div>
@endsection