@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class=" card">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="text-center text-danger"><i class="fas fa-users"></i> NUEVA RUTA</h1>
                </div>
                <div class="col-md-3">
                    <a href="{{route('rutas.index')}}" class="mt-2 mr-3 btn btn-primary float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('rutas.store')}}" method="post">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="">Clientes</label>
                        <select name="clientes" id="clientes" class="form-control">
                            @foreach($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                               value="{{old('nombre')}}">
                        <div class="invalid-feedback">
                            El campo nombre es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">Cliente</label>
                        <input type="text" name="cliente" id="cliente" class="form-control {{$errors->has('cliente')?'is-invalid':''}}"
                               value="{{old('cliente')}}">
                        <div class="invalid-feedback">
                            El campo cliente es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">lugar_exp</label>
                        <input type="text" name="lugar_exp" id="lugar_exp" class="form-control {{$errors->has('lugar_exp')?'is-invalid':''}}"
                               value="{{old('lugar_exp')}}">
                        <div class="invalid-feedback">
                            El campo lugar_exp es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">origen</label>
                        <input type="text" name="origen" id="origen" class="form-control {{$errors->has('origen')?'is-invalid':''}}"
                               value="{{old('origen')}}">
                        <div class="invalid-feedback">
                            La campo origen es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">remitente</label>
                        <input type="text" name="remitente" id="remitente" class="form-control {{$errors->has('remitente')?'is-invalid':''}}"
                               value="{{old('remitente')}}">
                        <div class="invalid-feedback">
                            La campo remitente es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">dom_remitente</label>
                        <input type="text" name="dom_remitente" id="dom_remitente" class="form-control {{$errors->has('dom_remitente')?'is-invalid':''}}"
                               value="{{old('dom_remitente')}}">
                        <div class="invalid-feedback">
                            El campo dom_remitente es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">recoge</label>
                        <input type="text" name="recoge" id="recoge" class="form-control {{$errors->has('recoge')?'is-invalid':''}}"
                               value="{{old('recoge')}}">
                        <div class="invalid-feedback">
                            El campo recoge es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">valor_declarado</label>
                        <input type="text" name="valor_declarado" id="valor_declarado" class="form-control {{$errors->has('valor_declarado')?'is-invalid':''}}"
                               value="{{old('valor_declarado')}}">
                        <div class="invalid-feedback">
                            El campo valor_declarado es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">destino</label>
                        <input type="text" name="destino" id="destino" class="form-control {{$errors->has('destino')?'is-invalid':''}}"
                               value="{{old('destino')}}">
                        <div class="invalid-feedback">
                            El destino es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">destinatario</label>
                        <input type="text" name="destinatario" id="destinatario" class="form-control {{$errors->has('destinatario')?'is-invalid':''}}"
                               value="{{old('destinatario')}}">
                        <div class="invalid-feedback">
                            El campo destinatario es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">dom_destinatario</label>
                        <input type="text" name="dom_destinatario" id="dom_destinatario" class="form-control {{$errors->has('dom_destinatario')?'is-invalid':''}}"
                               value="{{old('dom_destinatario')}}">
                        <div class="invalid-feedback">
                            El campo dom_destinatario es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">entrega</label>
                        <input type="text" name="entrega" id="entrega" class="form-control {{$errors->has('entrega')?'is-invalid':''}}"
                               value="{{old('entrega')}}">
                        <div class="invalid-feedback">
                            El campo entrega es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">fecha_entrega</label>
                        <input type="text" name="fecha_entrega" id="fecha_entrega" class="form-control {{$errors->has('fecha_entrega')?'is-invalid':''}}"
                               value="{{old('fecha_entrega')}}">
                        <div class="invalid-feedback">
                            El campo fecha_entrega es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">cantidad</label>
                        <input type="text" name="cantidad" id="cantidad" class="form-control {{$errors->has('cantidad')?'is-invalid':''}}"
                               value="{{old('cantidad')}}">
                        <div class="invalid-feedback">
                            El campo cantidad es requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">embalaje</label>
                        <input type="text" name="embalaje" id="embalaje" class="form-control {{$errors->has('embalaje')?'is-invalid':''}}"
                               value="{{old('embalaje')}}">
                        <div class="invalid-feedback">
                            El campo embalaje requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">concepto</label>
                        <input type="text" name="concepto" id="concepto" class="form-control {{$errors->has('concepto')?'is-invalid':''}}"
                               value="{{old('concepto')}}">
                        <div class="invalid-feedback">
                            El campo concepto requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">material_peligroso</label>
                        <input type="text" name="material_peligroso" id="material_peligroso" class="form-control {{$errors->has('material_peligroso')?'is-invalid':''}}"
                               value="{{old('material_peligroso')}}">
                        <div class="invalid-feedback">
                            El campo material_peligroso requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">indemnizacion</label>
                        <input type="text" name="indemnizacion" id="indemnizacion" class="form-control {{$errors->has('indemnizacion')?'is-invalid':''}}"
                               value="{{old('indemnizacion')}}">
                        <div class="invalid-feedback">
                            El campo indemnizacion requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">obs</label>
                        <input type="text" name="obs" id="obs" class="form-control {{$errors->has('obs')?'is-invalid':''}}"
                               value="{{old('obs')}}">
                        <div class="invalid-feedback">
                            El campo obs requerido
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="">dias_re</label>
                        <input type="text" name="dias_re" id="dias_re" class="form-control {{$errors->has('dias_re')?'is-invalid':''}}"
                               value="{{old('dias_re')}}">
                        <div class="invalid-feedback">
                            El campo dias_re requerido y debe de ser numerico
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection