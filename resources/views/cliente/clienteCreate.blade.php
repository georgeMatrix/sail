@extends('layouts.app')
@section('content')


        <div class="col-md-6">
            <h1 class="text-center">Formulario de Cliente <a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
            <form action="{{route('clientes.store')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                            value="{{old('nombre')}}">
                        <div class="invalid-feedback">
                            El nombre es requerido
                        </div>
                </div>

                <div class="form-group">
                    <label for="">Calle</label>
                    <input type="text" name="calle" id="calle" class="form-control {{$errors->has('calle')?'is-invalid':''}}"
                           value="{{old('calle')}}">
                    <div class="invalid-feedback">
                        El calle es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Numero</label>
                    <input type="text" name="numero" id="numero" class="form-control {{$errors->has('numero')?'is-invalid':''}}"
                           value="{{old('numero')}}">
                    <div class="invalid-feedback">
                        El numero es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Interior</label>
                    <input type="text" name="interior" id="interior" class="form-control {{$errors->has('interior')?'is-invalid':''}}"
                           value="{{old('interior')}}">
                    <div class="invalid-feedback">
                        El interior es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Colonia</label>
                    <input type="text" name="colonia" id="colonia" class="form-control {{$errors->has('colonia')?'is-invalid':''}}"
                           value="{{old('colonia')}}">
                    <div class="invalid-feedback">
                        La colonia es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Ciudad</label>
                    <input type="text" name="ciudad" id="ciudad" class="form-control {{$errors->has('ciudad')?'is-invalid':''}}"
                           value="{{old('ciudad')}}">
                    <div class="invalid-feedback">
                        La ciudad es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Cp</label>
                    <input type="text" name="cp" id="cp" class="form-control {{$errors->has('cp')?'is-invalid':''}}"
                           value="{{old('cp')}}">
                    <div class="invalid-feedback">
                        El cp es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text" name="estado" id="estado" class="form-control {{$errors->has('estado')?'is-invalid':''}}"
                           value="{{old('estado')}}">
                    <div class="invalid-feedback">
                        El estado es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Contacto 1</label>
                    <input type="text" name="contacto1" id="contacto1" class="form-control {{$errors->has('contacto1')?'is-invalid':''}}"
                           value="{{old('contacto1')}}">
                    <div class="invalid-feedback">
                        El contacto 1 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Telefono 1</label>
                    <input type="text" name="tel1" id="tel1" class="form-control {{$errors->has('tel1')?'is-invalid':''}}"
                           value="{{old('tel1')}}">
                    <div class="invalid-feedback">
                        El Telefono 1 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Mail 1</label>
                    <input type="text" name="mail1" id="mail1" class="form-control {{$errors->has('mail1')?'is-invalid':''}}"
                           value="{{old('mail1')}}">
                    <div class="invalid-feedback">
                        El Mail 1 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Contacto 2</label>
                    <input type="text" name="contacto2" id="contacto2" class="form-control {{$errors->has('contacto2')?'is-invalid':''}}"
                           value="{{old('contacto2')}}">
                    <div class="invalid-feedback">
                        El Contacto 2 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Telefono 2</label>
                    <input type="text" name="tel2" id="tel2" class="form-control {{$errors->has('tel2')?'is-invalid':''}}"
                           value="{{old('tel2')}}">
                    <div class="invalid-feedback">
                        El Telefono 2 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Mail 2</label>
                    <input type="text" name="mail2" id="mail2" class="form-control {{$errors->has('mail2')?'is-invalid':''}}"
                           value="{{old('mail2')}}">
                    <div class="invalid-feedback">
                        El Mail 2 es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Dia Revision</label>
                    <input type="text" name="dia_revision" id="dia_revision" class="form-control {{$errors->has('dia_revision')?'is-invalid':''}}"
                           value="{{old('dia_revision')}}">
                    <div class="invalid-feedback">
                        El Dia Revision es requerido
                    </div>
                </div>

                <div class="form-group">
                    <label for="">Dia Credito</label>
                    <input type="text" name="dia_credito" id="dia_credito" class="form-control {{$errors->has('dia_credito')?'is-invalid':''}}"
                           value="{{old('dia_credito')}}">
                    <div class="invalid-feedback">
                        El Dia Credito es requerido y debe de ser numerico
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
@endsection