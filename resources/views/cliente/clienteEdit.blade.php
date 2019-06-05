@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Actualizacion de Cliente <a class="btn btn-primary float-right mt-3" href="{{route('clientes.index')}}">Regresar a listado</a></h1>
            <form action="{{url('/clientes/'.$cliente->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{$cliente->nombre}}">
                <label for="">Calle</label>
                <input type="text" name="calle" id="calle" class="form-control"  value="{{$cliente->calle}}">
                <label for="">Numero</label>
                <input type="text" name="numero" id="numero" class="form-control"  value="{{$cliente->numero}}">
                <label for="">Interior</label>
                <input type="text" name="interior" id="interior" class="form-control"  value="{{$cliente->interior}}">
                <label for="">Colonia</label>
                <input type="text" name="colonia" id="colonia" class="form-control"  value="{{$cliente->colonia}}">
                <label for="">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" class="form-control"  value="{{$cliente->ciudad}}">
                <label for="">Cp</label>
                <input type="text" name="cp" id="cp" class="form-control"  value="{{$cliente->cp}}">
                <label for="">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control"  value="{{$cliente->estado}}">
                <label for="">Contacto 1</label>
                <input type="text" name="contacto1" id="contacto1" class="form-control"  value="{{$cliente->contacto1}}">
                <label for="">Telefono 1</label>
                <input type="text" name="tel1" id="tel1" class="form-control"  value="{{$cliente->tel1}}">
                <label for="">Mail 1</label>
                <input type="text" name="mail1" id="mail1" class="form-control"  value="{{$cliente->mail1}}">
                <label for="">Contacto 2</label>
                <input type="text" name="contacto2" id="contacto2" class="form-control" value="{{$cliente->contacto2}}">
                <label for="">Telefono 2</label>
                <input type="text" name="tel2" id="tel2" class="form-control" value="{{$cliente->tel2}}">
                <label for="">Mail 2</label>
                <input type="text" name="mail2" id="mail2" class="form-control" value="{{$cliente->mail2}}">
                <label for="">Dia Revision</label>
                <input type="text" name="dia_revision" id="dia_revision" class="form-control" value="{{$cliente->dia_revision}}">
                <label for="">Dia Credito</label>
                <input type="text" name="dia_credito" id="dia_credito" class="form-control" value="{{$cliente->dia_credito}}">
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
@endsection