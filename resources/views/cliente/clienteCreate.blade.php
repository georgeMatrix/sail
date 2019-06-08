@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="text-danger fas fa-user"></i> NUEVO CLIENTE</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('clientes.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>

        <div class="row">
        <div class="col-md-12">
            <form action="{{route('clientes.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <h5 for="">Nombre</h5>
                    <input maxlength="70" type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                            value="{{old('nombre')}}">
                        <div class="invalid-feedback">
                            El nombre es requerido
                        </div>
                </div>

                <div class="form-group">
                    <h5 for="">Calle</h5>
                    <input maxlength="70" type="text" name="calle" id="calle" class="form-control {{$errors->has('calle')?'is-invalid':''}}"
                           value="{{old('calle')}}">
                    <div class="invalid-feedback">
                        El calle es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Numero</h5>
                    <input maxlength="10" type="text" name="numero" id="numero" class="form-control {{$errors->has('numero')?'is-invalid':''}}"
                           value="{{old('numero')}}">
                    <div class="invalid-feedback">
                        El numero es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Interior</h5>
                    <input maxlength="10" type="text" name="interior" id="interior" class="form-control {{$errors->has('interior')?'is-invalid':''}}"
                           value="{{old('interior')}}">
                    <div class="invalid-feedback">
                        El interior es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Colonia</h5>
                    <input maxlength="70" type="text" name="colonia" id="colonia" class="form-control {{$errors->has('colonia')?'is-invalid':''}}"
                           value="{{old('colonia')}}">
                    <div class="invalid-feedback">
                        La colonia es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Ciudad</h5>
                    <input maxlength="70" type="text" name="ciudad" id="ciudad" class="form-control {{$errors->has('ciudad')?'is-invalid':''}}"
                           value="{{old('ciudad')}}">
                    <div class="invalid-feedback">
                        La ciudad es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Cp</h5>
                    <input maxlength="10" type="text" name="cp" id="cp" class="form-control {{$errors->has('cp')?'is-invalid':''}}"
                           value="{{old('cp')}}">
                    <div class="invalid-feedback">
                        El cp es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Estado</h5>
                    <input maxlength="20" type="text" name="estado" id="estado" class="form-control {{$errors->has('estado')?'is-invalid':''}}"
                           value="{{old('estado')}}">
                    <div class="invalid-feedback">
                        El estado es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Contacto 1</h5>
                    <input maxlength="50" type="text" name="contacto1" id="contacto1" class="form-control {{$errors->has('contacto1')?'is-invalid':''}}"
                           value="{{old('contacto1')}}">
                    <div class="invalid-feedback">
                        El contacto 1 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Telefono 1</h5>
                    <input maxlength="20" type="text" name="tel1" id="tel1" class="form-control {{$errors->has('tel1')?'is-invalid':''}}"
                           value="{{old('tel1')}}">
                    <div class="invalid-feedback">
                        El Telefono 1 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Mail 1</h5>
                    <input maxlength="50" type="text" name="mail1" id="mail1" class="form-control {{$errors->has('mail1')?'is-invalid':''}}"
                           value="{{old('mail1')}}">
                    <div class="invalid-feedback">
                        El Mail 1 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Contacto 2</h5>
                    <input maxlength="50" type="text" name="contacto2" id="contacto2" class="form-control {{$errors->has('contacto2')?'is-invalid':''}}"
                           value="{{old('contacto2')}}">
                    <div class="invalid-feedback">
                        El Contacto 2 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Telefono 2</h5>
                    <input maxlength="20" type="text" name="tel2" id="tel2" class="form-control {{$errors->has('tel2')?'is-invalid':''}}"
                           value="{{old('tel2')}}">
                    <div class="invalid-feedback">
                        El Telefono 2 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Mail 2</h5>
                    <input maxlength="50" type="text" name="mail2" id="mail2" class="form-control {{$errors->has('mail2')?'is-invalid':''}}"
                           value="{{old('mail2')}}">
                    <div class="invalid-feedback">
                        El Mail 2 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Dia Revision</h5>
                    <input maxlength="20" type="text" name="dia_revision" id="dia_revision" class="form-control {{$errors->has('dia_revision')?'is-invalid':''}}"
                           value="{{old('dia_revision')}}">
                    <div class="invalid-feedback">
                        El Dia Revision es requerido
                    </div>
                </div>

                <div class="form-group">
                    <h5 for="">Dia Credito</h5>
                    <input type="number" name="dia_credito" id="dia_credito" class="form-control {{$errors->has('dia_credito')?'is-invalid':''}}"
                           value="{{old('dia_credito')}}">
                    <div class="invalid-feedback">
                        El Dia Credito es requerido y debe de ser numerico
                    </div>
                </div>

                <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Guardar</button>
            </form>
        </div>
    </div>
    </div>
@endsection