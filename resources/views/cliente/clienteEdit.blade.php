@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="text-danger fas fa-user"></i> ACTUALIZACION CLIENTES</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('clientes.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>

    <div class="row">
        <div class="col-md-12">
            <form action="{{url('/clientes/'.$cliente->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <h5 for="">Nombre</h5>
                <input maxlength="70" type="text" name="nombre" id="nombre" class="form-control" value="{{$cliente->nombre}}">
                <h5 for="">Calle</h5>
                <input maxlength="70" type="text" name="calle" id="calle" class="form-control"  value="{{$cliente->calle}}">
                <h5 for="">Numero</h5>
                <input maxlength="10" type="text" name="numero" id="numero" class="form-control"  value="{{$cliente->numero}}">
                <h5 for="">Interior</h5>
                <input maxlength="10" type="text" name="interior" id="interior" class="form-control"  value="{{$cliente->interior}}">
                <h5 for="">Colonia</h5>
                <input maxlength="70" type="text" name="colonia" id="colonia" class="form-control"  value="{{$cliente->colonia}}">
                <h5 for="">Ciudad</h5>
                <input maxlength="70" type="text" name="ciudad" id="ciudad" class="form-control"  value="{{$cliente->ciudad}}">
                <h5 for="">Cp</h5>
                <input maxlength="10" type="text" name="cp" id="cp" class="form-control"  value="{{$cliente->cp}}">
                <h5 for="">Estado</h5>
                <input maxlength="20" type="text" name="estado" id="estado" class="form-control"  value="{{$cliente->estado}}">
                <h5 for="">Contacto 1</h5>
                <input maxlength="50" type="text" name="contacto1" id="contacto1" class="form-control"  value="{{$cliente->contacto1}}">
                <h5 for="">Telefono 1</h5>
                <input maxlength="20" type="text" name="tel1" id="tel1" class="form-control"  value="{{$cliente->tel1}}">
                <h5 for="">Mail 1</h5>
                <input maxlength="50" type="text" name="mail1" id="mail1" class="form-control"  value="{{$cliente->mail1}}">
                <h5 for="">Contacto 2</h5>
                <input maxlength="50" type="text" name="contacto2" id="contacto2" class="form-control" value="{{$cliente->contacto2}}">
                <h5 for="">Telefono 2</h5>
                <input maxlength="20" type="text" name="tel2" id="tel2" class="form-control" value="{{$cliente->tel2}}">
                <h5 for="">Mail 2</h5>
                <input maxlength="50" type="text" name="mail2" id="mail2" class="form-control" value="{{$cliente->mail2}}">
                <h5 for="">Dia Revision</h5>
                <input maxlength="20" type="text" name="dia_revision" id="dia_revision" class="form-control" value="{{$cliente->dia_revision}}">
                <h5 for="">Dia Credito</h5>
                <input type="number" name="dia_credito" id="dia_credito" class="form-control" value="{{$cliente->dia_credito}}">
                <br>
                <button type="submit" class="btn btn-info">Actualizar</button>
            </form>
        </div>
    </div>
    </div>
@endsection