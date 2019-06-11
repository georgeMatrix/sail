@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="text-danger fa fa-box-open fa-md text-danger"></i> NUEVO PROVEEDOR</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('provedores.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('provedores.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <h5 for="">Nombre comercial del provedor</h5>
                        <input maxlength="70" type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                               value="{{old('nombre')}}">
                        <div class="invalid-feedback">
                            El nombre es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Razon Social del provedor</h5>
                        <input maxlength="70" type="text" name="razon_social" id="razon_social" class="form-control {{$errors->has('razon_social')?'is-invalid':''}}"
                               value="{{old('razon_social')}}">
                        <div class="invalid-feedback">
                            La razon social es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Rfc</h5>
                        <input maxlength="11" type="text" name="rfc" id="rfc" class="form-control {{$errors->has('rfc')?'is-invalid':''}}"
                               value="{{old('rfc')}}">
                        <div class="invalid-feedback">
                            El rfc es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Direccion</h5>
                        <input maxlength="100" type="text" name="direccion" id="direccion" class="form-control {{$errors->has('direccion')?'is-invalid':''}}"
                               value="{{old('direccion')}}">
                        <div class="invalid-feedback">
                            La direccion es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Contacto</h5>
                        <input maxlength="50" type="text" name="contacto" id="contacto" class="form-control {{$errors->has('contacto')?'is-invalid':''}}"
                               value="{{old('contacto')}}">
                        <div class="invalid-feedback">
                            El contacto es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Mail</h5>
                        <input maxlength="50" type="email" name="mail" id="mail" class="form-control {{$errors->has('mail')?'is-invalid':''}}"
                               value="{{old('mail')}}">
                        <div class="invalid-feedback">
                            El mail es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Dias de Credito</h5>
                        <input type="number" min="0" name="credito" id="credito" class="form-control {{$errors->has('credito')?'is-invalid':''}}"
                               value="{{old('credito')}}">
                        <div class="invalid-feedback">
                            El credito es requerido y debe de ser numerico
                        </div>
                    </div>

                    <div class="form-group">
                        <h5 for="">Saldo</h5>
                        <input type="number" min="0" name="saldo" id="saldo" class="form-control {{$errors->has('saldo')?'is-invalid':''}}"
                               value="{{old('saldo')}}">
                        <div class="invalid-feedback">
                            El saldo es requerido y debe de ser numerico
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection