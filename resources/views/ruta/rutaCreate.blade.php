@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-9 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="fa fa-map-marked fa-md text-danger"></i> NUEVA RUTA</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('rutas.index')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#tab1" class="nav-link active" aria-controls="tab1" role="tab" data-toggle="tab">Rutas</a>
                        </li>
                        <li class="nav-item">
                            <a href="#tab2" class="nav-link" aria-controls="tab2" role="tab" data-toggle="tab">Datos Facturacion</a>
                        </li>

                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <form action="{{route('rutas.store')}}" method="post" id="rutasForm">
                                <input type="hidden" name="token" id="tokenFormRutas" value="{{csrf_token()}}">

                                <div class="form-group">
                                    <h5 for="">Nombre</h5>
                                    <input maxlength="20" required type="text" name="nombre" id="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}"
                                           value="{{old('nombre')}}">
                                    <div class="invalid-feedback">
                                        El campo nombre es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">Clientes</h5>
                                    <select name="clientes" id="clientes" class="form-control">
                                        @foreach($clientes as $cliente)
                                            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <h5 for="">lugar_exp</h5>
                                    <input maxlength="50" required type="text" name="lugar_exp" id="lugar_exp" class="form-control {{$errors->has('lugar_exp')?'is-invalid':''}}"
                                           value="{{old('lugar_exp')}}">
                                    <div class="invalid-feedback">
                                        El campo lugar_exp es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">origen</h5>
                                    <input maxlength="50" required type="text" name="origen" id="origen" class="form-control {{$errors->has('origen')?'is-invalid':''}}"
                                           value="{{old('origen')}}">
                                    <div class="invalid-feedback">
                                        La campo origen es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">remitente</h5>
                                    <input maxlength="50" required type="text" name="remitente" id="remitente" class="form-control {{$errors->has('remitente')?'is-invalid':''}}"
                                           value="{{old('remitente')}}">
                                    <div class="invalid-feedback">
                                        La campo remitente es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">dom_remitente</h5>
                                    <input maxlength="50" required type="text" name="dom_remitente" id="dom_remitente" class="form-control {{$errors->has('dom_remitente')?'is-invalid':''}}"
                                           value="{{old('dom_remitente')}}">
                                    <div class="invalid-feedback">
                                        El campo dom_remitente es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">recoge</h5>
                                    <input maxlength="50" required type="text" name="recoge" id="recoge" class="form-control {{$errors->has('recoge')?'is-invalid':''}}"
                                           value="{{old('recoge')}}">
                                    <div class="invalid-feedback">
                                        El campo recoge es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">valor_declarado</h5>
                                    <input maxlength="50" required type="text" name="valor_declarado" id="valor_declarado" class="form-control {{$errors->has('valor_declarado')?'is-invalid':''}}"
                                           value="{{old('valor_declarado')}}">
                                    <div class="invalid-feedback">
                                        El campo valor_declarado es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">destino</h5>
                                    <input maxlength="50" required type="text" name="destino" id="destino" class="form-control {{$errors->has('destino')?'is-invalid':''}}"
                                           value="{{old('destino')}}">
                                    <div class="invalid-feedback">
                                        El destino es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">destinatario</h5>
                                    <input maxlength="50" required type="text" name="destinatario" id="destinatario" class="form-control {{$errors->has('destinatario')?'is-invalid':''}}"
                                           value="{{old('destinatario')}}">
                                    <div class="invalid-feedback">
                                        El campo destinatario es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">dom_destinatario</h5>
                                    <input maxlength="50" required type="text" name="dom_destinatario" id="dom_destinatario" class="form-control {{$errors->has('dom_destinatario')?'is-invalid':''}}"
                                           value="{{old('dom_destinatario')}}">
                                    <div class="invalid-feedback">
                                        El campo dom_destinatario es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">entrega</h5>
                                    <input maxlength="50" required type="text" name="entrega" id="entrega" class="form-control {{$errors->has('entrega')?'is-invalid':''}}"
                                           value="{{old('entrega')}}">
                                    <div class="invalid-feedback">
                                        El campo entrega es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">fecha_entrega</h5>
                                    <input maxlength="50" required type="text" name="fecha_entrega" id="fecha_entrega" class="form-control {{$errors->has('fecha_entrega')?'is-invalid':''}}"
                                           value="{{old('fecha_entrega')}}">
                                    <div class="invalid-feedback">
                                        El campo fecha_entrega es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">cantidad</h5>
                                    <input maxlength="50" required type="text" name="cantidad" id="cantidad" class="form-control {{$errors->has('cantidad')?'is-invalid':''}}"
                                           value="{{old('cantidad')}}">
                                    <div class="invalid-feedback">
                                        El campo cantidad es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">embalaje</h5>
                                    <input maxlength="50" required type="text" name="embalaje" id="embalaje" class="form-control {{$errors->has('embalaje')?'is-invalid':''}}"
                                           value="{{old('embalaje')}}">
                                    <div class="invalid-feedback">
                                        El campo embalaje requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">concepto</h5>
                                    <input maxlength="50" required type="text" name="concepto" id="concepto" class="form-control {{$errors->has('concepto')?'is-invalid':''}}"
                                           value="{{old('concepto')}}">
                                    <div class="invalid-feedback">
                                        El campo concepto requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">material_peligroso</h5>
                                    <input maxlength="50" required type="text" name="material_peligroso" id="material_peligroso" class="form-control {{$errors->has('material_peligroso')?'is-invalid':''}}"
                                           value="{{old('material_peligroso')}}">
                                    <div class="invalid-feedback">
                                        El campo material_peligroso requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">indemnizacion</h5>
                                    <input maxlength="50" required type="text" name="indemnizacion" id="indemnizacion" class="form-control {{$errors->has('indemnizacion')?'is-invalid':''}}"
                                           value="{{old('indemnizacion')}}">
                                    <div class="invalid-feedback">
                                        El campo indemnizacion requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">obs</h5>
                                    <input maxlength="50" required type="text" name="obs" id="obs" class="form-control {{$errors->has('obs')?'is-invalid':''}}"
                                           value="{{old('obs')}}">
                                    <div class="invalid-feedback">
                                        El campo obs requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5 for="">dias_re</h5>
                                    <input type="number" required name="dias_re" id="dias_re" class="form-control {{$errors->has('dias_re')?'is-invalid':''}}"
                                           value="{{old('dias_re')}}">
                                    <div class="invalid-feedback">
                                        El campo dias_re requerido y debe de ser numerico
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-info" id="guardarRutasBtn">Guardar</button>
                            </form></div>
                        <div role="tabpanel" class="tab-pane" id="tab2">

                            <form action="{{route('datosFacturacions.store')}}" method="post" id="dFacturacionForm">
                                <input type="hidden" name="token" id="tokenFormDfacturacion" value="{{csrf_token()}}">
                                <div class="form-group">
                                    <label for="">Rutas</label>
                                    <select name="rutas" id="rutas" class="form-control">
                                        @foreach($rutas as $ruta)
                                            <option value="{{$ruta->id}}">{{$ruta->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="">Clave Prod Serv</label>
                                    <input maxlength="20" type="text" required name="claveProdServ" id="claveProdServ" class="form-control {{$errors->has('claveProdServ')?'is-invalid':''}}"
                                           value="{{old('claveProdServ')}}">
                                    <div class="invalid-feedback">
                                        El campo claveProdServ es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">No Identificacion</label>
                                    <input maxlength="20" type="text" required name="noIdentificacion" id="noIdentificacion" class="form-control {{$errors->has('noIdentificacion')?'is-invalid':''}}"
                                           value="{{old('noIdentificacion')}}">
                                    <div class="invalid-feedback">
                                        El campo noIdentificacion es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Cantidad</label>
                                    <input type="number" required name="cantidad" id="cantidadDfacturacion" class="form-control {{$errors->has('cantidadDatosFacturacion')?'is-invalid':''}}"
                                           value="{{old('cantidadDatosFacturacion')}}">
                                    <div class="invalid-feedback">
                                        El campo cantidad es requerido y debe de ser numerico
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Clave Unidad</label>
                                    <input maxlength="20" type="text" required name="claveUnidad" id="claveUnidad" class="form-control {{$errors->has('claveUnidad')?'is-invalid':''}}"
                                           value="{{old('claveUnidad')}}">
                                    <div class="invalid-feedback">
                                        La campo claveUnidad es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Unidad</label>
                                    <input maxlength="20" type="text" required name="unidad" id="unidad" class="form-control {{$errors->has('unidad')?'is-invalid':''}}"
                                           value="{{old('unidad')}}">
                                    <div class="invalid-feedback">
                                        La campo unidad es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Descripcion</label>
                                    <input maxlength="50" type="text" required name="descripcion" id="descripcion" class="form-control {{$errors->has('descripcion')?'is-invalid':''}}"
                                           value="{{old('descripcion')}}">
                                    <div class="invalid-feedback">
                                        El campo descripcion es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Valor Unitario</label>
                                    <input type="number" required name="valorUnitario" id="valorUnitario" class="form-control {{$errors->has('valorUnitario')?'is-invalid':''}}"
                                           value="{{old('valorUnitario')}}">
                                    <div class="invalid-feedback">
                                        El campo valorUnitario es requerido
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">Importe</label>
                                    <input type="number" required name="importe" id="importe" class="form-control {{$errors->has('importe')?'is-invalid':''}}"
                                           value="{{old('importe')}}">
                                    <div class="invalid-feedback">
                                        El campo importe es requerido y debe de ser numerico
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">tIva</label>
                                    <input type="number" required name="tIva" id="tIva" class="form-control {{$errors->has('tIva')?'is-invalid':''}}"
                                           value="{{old('tIva')}}">
                                    <div class="invalid-feedback">
                                        El campo tIva es requerido y debe de ser numerico
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">tIsr</label>
                                    <input type="number" required name="tIsr" id="tIsr" class="form-control {{$errors->has('tIsr')?'is-invalid':''}}"
                                           value="{{old('tIsr')}}">
                                    <div class="invalid-feedback">
                                        El campo tIsr es requerido y debe de ser numerico
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">rIva</label>
                                    <input type="number" required name="rIva" id="rIva" class="form-control {{$errors->has('rIva')?'is-invalid':''}}"
                                           value="{{old('rIva')}}">
                                    <div class="invalid-feedback">
                                        El campo rIva es requerido y debe de ser numerico
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="">rIsr</label>
                                    <input type="number" required name="rIsr" id="rIsr" class="form-control {{$errors->has('rIsr')?'is-invalid':''}}"
                                           value="{{old('rIsr')}}">
                                    <div class="invalid-feedback">
                                        El campo rIsr es requerido y debe de ser numerico
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary" id="guardarDfacturacionBtn">Guardar</button>
                            </form></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        $("#rutasForm").submit(function(e){
            e.preventDefault();
            var clientes = $('#clientes').val();
            var nombre = $('#nombre').val();
            var lugar_exp = $('#lugar_exp').val();
            var origen = $('#origen').val();
            var remitente = $('#remitente').val();
            var dom_remitente = $('#dom_remitente').val();
            var recoge = $('#recoge').val();
            var valor_declarado = $('#valor_declarado').val();
            var destino = $('#destino').val();
            var destinatario = $('#destinatario').val();
            var dom_destinatario = $('#dom_destinatario').val();
            var entrega = $('#entrega').val();
            var fecha_entrega = $('#fecha_entrega').val();
            var cantidad = $('#cantidad').val();
            var embalaje = $('#embalaje').val();
            var concepto = $('#concepto').val();
            var material_peligroso = $('#material_peligroso').val();
            var indemnizacion = $('#indemnizacion').val();
            var obs = $('#obs').val();
            var dias_re = $('#dias_re').val();

            var token = $('#tokenFormRutas').val();
            var request = {
                clientes:clientes,
                nombre:nombre,
                lugar_exp:lugar_exp,
                origen:origen,
                remitente:remitente,
                dom_remitente:dom_remitente,
                recoge:recoge,
                valor_declarado:valor_declarado,
                destino:destino,
                destinatario:destinatario,
                dom_destinatario:dom_destinatario,
                entrega:entrega,
                fecha_entrega:fecha_entrega,
                cantidad:cantidad,
                embalaje:embalaje,
                concepto:concepto,
                material_peligroso:material_peligroso,
                indemnizacion:indemnizacion,
                obs:obs,
                dias_re:dias_re,
            }

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                headers: {'X-CSRF-TOKEN':token},
                contentType: 'application/json',
                data: JSON.stringify(request),
            })
                .done(function() {
                    console.log("success");
                    $("#guardarRutasBtn").removeClass('btn-info');
                    $("#guardarRutasBtn").addClass('btn-success');
                    $("#guardarRutasBtn").attr("disabled", true);
                    $("#guardarRutasBtn").html('Dato Guardado');
                })
                .fail(function() {
                    console.log("error");
                })
        });

        $("#dFacturacionForm").submit(function(e){
            e.preventDefault();
            var rutas = $("#rutas").val();
            var claveProdServ = $("#claveProdServ").val();
            var noIdentificacion = $("#noIdentificacion").val();
            var cantidad = $("#cantidadDfacturacion").val();
            var claveUnidad = $("#claveUnidad").val();
            var unidad = $("#unidad").val();
            var descripcion = $("#descripcion").val();
            var valorUnitario = $("#valorUnitario").val();
            var importe = $("#importe").val();
            var tIva = $("#tIva").val();
            var tIsr = $("#tIsr").val();
            var rIva = $("#rIva").val();
            var rIsr = $("#rIsr").val();
            var token = $('#tokenFormDfacturacion').val();

            var request = {
                rutas:rutas,
                claveProdServ:claveProdServ,
                noIdentificacion:noIdentificacion,
                cantidad:cantidad,
                claveUnidad:claveUnidad,
                unidad:unidad,
                descripcion:descripcion,
                valorUnitario:valorUnitario,
                importe:importe,
                tIva:tIva,
                tIsr:tIsr,
                rIva:rIva,
                rIsr:rIsr
            };

            $.ajax({
                url: $(this).attr('action'),
                type: 'POST',
                headers: {'X-CSRF-TOKEN':token},
                contentType: 'application/json',
                data: JSON.stringify(request),
            })
                .done(function() {
                    console.log("success");
                    $("#guardarDfacturacionBtn").removeClass('btn-info');
                    $("#guardarDfacturacionBtn").addClass('btn-success');
                    $("#guardarDfacturacionBtn").attr("disabled", true);
                    $("#guardarDfacturacionBtn").html('Dato Guardado');
                })
                .fail( function( jqXHR, textStatus, errorThrown ) {

                    if (jqXHR.status === 0) {

                        alert('Not connect: Verify Network.');

                    } else if (jqXHR.status == 404) {

                        alert('Requested page not found [404]');

                    } else if (jqXHR.status == 500) {

                        alert('Internal Server Error [500].');

                    } else if (textStatus === 'parsererror') {

                        alert('Requested JSON parse failed.');

                    } else if (textStatus === 'timeout') {

                        alert('Time out error.');

                    } else if (textStatus === 'abort') {

                        alert('Ajax request aborted.');

                    } else {

                        alert('Uncaught Error: ' + jqXHR.responseText);

                    }

                });
        });
    </script>
@endsection