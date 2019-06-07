@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Formulario de Usuarios <a href="{{url('/home')}}" class="mt-2 btn btn-primary float-right">Regresar</a></h1>
                <form action="{{route('usuarios.store')}}" method="post" id="formUsuario">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control {{$errors->has('apellidoPaterno')?'is-invalid':''}}"
                               value="{{old('nombre')}}">
                        <div class="invalid-feedback">
                            El campo Apellido Paterno es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control {{$errors->has('apellidoMaterno')?'is-invalid':''}}"
                               value="{{old('apellidoMaterno')}}">
                        <div class="invalid-feedback">
                            El campo Apellido Materno es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                               value="{{old('nombre')}}">
                        <div class="invalid-feedback">
                            El campo nombre es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">password</label>
                        <input type="password" name="password" id="password" class="form-control {{$errors->has('password')?'is-invalid':''}}"
                               value="{{old('password')}}">
                        <div class="invalid-feedback">
                            El campo password requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">nombreCorto</label>
                        <input type="text" name="nombreCorto" id="nombreCorto" class="form-control {{$errors->has('nombreCorto')?'is-invalid':''}}"
                               value="{{old('nombreCorto')}}">
                        <div class="invalid-feedback">
                            La nombreCorto es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">cargo</label>
                        <input type="text" name="cargo" id="cargo" class="form-control {{$errors->has('cargo')?'is-invalid':''}}"
                               value="{{old('cargo')}}">
                        <div class="invalid-feedback">
                            La cargo es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">area</label>
                        <input type="text" name="area" id="area" class="form-control {{$errors->has('area')?'is-invalid':''}}"
                               value="{{old('area')}}">
                        <div class="invalid-feedback">
                            El area es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">modulo01</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo01" name="modulo01" value="1" @if(old('modulo01') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo02</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo02" name="modulo02" value="1" @if(old('modulo02') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo03</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo03" name="modulo03" value="1" @if(old('modulo03') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo04</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo04" name="modulo04" value="1" @if(old('modulo04') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo05</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo05" name="modulo05" value="1" @if(old('modulo05') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo06</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo06" name="modulo06" value="1" @if(old('modulo06') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo07</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo07" name="modulo07" value="1" @if(old('modulo07') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo08</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo08" name="modulo08" value="1" @if(old('modulo08') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo09</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo09" name="modulo09" value="1" @if(old('modulo09') ==  1) checked="checked" @endif />
                    </div>

                    <div class="form-group">
                        <label for="">modulo10</label>
                        <br>
                        <input data-toggle="toggle" type="checkbox" id="modulo10" name="modulo10" value="1" @if(old('modulo10') ==  1) checked="checked"  @endif />
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>


@endsection