@extends('layout.layout')
@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Formulario de Cliente</h1>
            <form action="{{route('clientes.store')}}" method="post">
                {{csrf_field()}}
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control">
                <label for="">Calle</label>
                <input type="text" name="calle" id="calle" class="form-control">
                <label for="">Numero</label>
                <input type="text" name="numero" id="numero" class="form-control">
                <label for="">Interior</label>
                <input type="text" name="interior" id="interior" class="form-control">
                <label for="">Colonia</label>
                <input type="text" name="colonia" id="colonia" class="form-control">
                <label for="">Calle</label>
                <input type="text" name="calle" id="calle" class="form-control">
                <label for="">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" class="form-control">
                <label for="">Cp</label>
                <input type="text" name="cp" id="cp" class="form-control">
                <label for="">Estado</label>
                <input type="text" name="estado" id="estado" class="form-control">
                <label for="">Contacto 1</label>
                <input type="text" name="contacto1" id="contacto1" class="form-control">
                <label for="">Telefono 1</label>
                <input type="text" name="tel1" id="tel1" class="form-control">
                <label for="">Mail 1</label>
                <input type="text" name="mail1" id="mail1" class="form-control">
                <label for="">Contacto 2</label>
                <input type="text" name="contacto2" id="contacto2" class="form-control">
                <label for="">Telefono 2</label>
                <input type="text" name="tel2" id="tel2" class="form-control">
                <label for="">Mail 2</label>
                <input type="text" name="mail2" id="mail2" class="form-control">
                <label for="">Dia Revision</label>
                <input type="text" name="dia_revision" id="dia_revision" class="form-control">
                <label for="">Dia Credito</label>
                <input type="text" name="dia_credito" id="dia_credito" class="form-control">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@endsection