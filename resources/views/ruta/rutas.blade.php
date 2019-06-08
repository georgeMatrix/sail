@extends('layouts.app')
@section('content')
    <div class="container">
        @include('include.menu')
        <div class="card bg-dark">
            <div class="row">
                <div class="col-md-6 card-title">
                    <h3 style="font-size: 20pt;" class="mt-3 text-center text-white"><i class="fa fa-map-marked fa-md text-danger"></i> LISTADO RUTAS</h3>
                </div>
                <div class="col-md-3">
                    <a href="{{route('rutas.create')}}" class="mt-3 btn btn-info float-right"><i class="fas fa-user"></i> Nueva Ruta</a>
                </div>
                <div class="col-md-3">
                    <a href="{{url('/home')}}" class="mt-3 mr-3 btn btn-info float-right"><i class="fas fa-arrow-circle-left"></i> Regresar</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12 xlg-margin">
                        <h4>Accordion</h4>
                        <div class="md-margin"></div><!--space -->

                        <div class="accordion" id="accordion">
                            <div class="accordion-group panel">
                                <div class="accordion-header">
                                    <div class="accordion-title">Rutas</div><!-- End .accourdion-title -->
                                    <a class="accordion-btn" data-toggle="collapse" data-parent="#accordion" href="#accordion-one"></a>
                                </div><!-- End .accordion-header -->

                                <div class="accordion-body collapse" id="accordion-one">
                                    <div class="accordion-body-wrapper">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-sm">
                                                <thead class="table-info">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>CLIENTES</th>
                                                    <th>NOMBRE</th>
                                                    <th>CLIENTE</th>
                                                    <th>LUGAR_EXP</th>
                                                    <th>ORIGEN</th>
                                                    <th>REMITENTE</th>
                                                    <th>DOM_REMITENTE</th>
                                                    <th>RECOGE</th>
                                                    <th>VALOR_DECLARADO</th>
                                                    <th>DESTINO</th>
                                                    <th>DESTINATARIO</th>
                                                    <th>DOM_DESTINATARIO</th>
                                                    <th>ENTREGA</th>
                                                    <th>FECHA_ENTREGA</th>
                                                    <th>CANTIDAD</th>
                                                    <th>EMBALAJE</th>
                                                    <th>CONCEPTO</th>
                                                    <th>MATERIAL_PELIGROSO</th>
                                                    <th>INDEMNIZACION</th>
                                                    <th>OBS</th>
                                                    <th>DIAS_RE</th>
                                                    <th>ELIMINAR_REGISTRO</th>
                                                    <th>EDITAR_REGISTRO</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($rutas as $ruta)
                                                    <tr>
                                                        <td>{{$ruta->id}}</td>
                                                        <td>{{$ruta->clientes}}</td>
                                                        <td>{{$ruta->nombre}}</td>
                                                        <td>{{$ruta->cliente}}</td>
                                                        <td>{{$ruta->lugar_exp}}</td>
                                                        <td>{{$ruta->origen}}</td>
                                                        <td>{{$ruta->remitente}}</td>
                                                        <td>{{$ruta->dom_remitente}}</td>
                                                        <td>{{$ruta->recoge}}</td>
                                                        <td>{{$ruta->valor_declarado}}</td>
                                                        <td>{{$ruta->destino}}</td>
                                                        <td>{{$ruta->destinatario}}</td>
                                                        <td>{{$ruta->dom_destinatario}}</td>
                                                        <td>{{$ruta->entrega}}</td>
                                                        <td>{{$ruta->fecha_entrega}}</td>
                                                        <td>{{$ruta->cantidad}}</td>
                                                        <td>{{$ruta->embalaje}}</td>
                                                        <td>{{$ruta->concepto}}</td>
                                                        <td>{{$ruta->material_peligroso}}</td>
                                                        <td>{{$ruta->indemnizacion}}</td>
                                                        <td>{{$ruta->obs}}</td>
                                                        <td>{{$ruta->dias_re}}</td>
                                                        <td>
                                                            <form method="post" action="{{url('/rutas/'.$ruta->id)}}">
                                                                {{csrf_field()}}
                                                                {{method_field('DELETE')}}
                                                                <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger"><i class="far fa-trash-alt"></i> Eliminar</button>
                                                            </form>
                                                        </td>
                                                        <td>
                                                            <a href="{{url('/rutas/'.$ruta->id.'/edit')}}" class="btn btn-primary"><i class="far fa-edit"></i> Editar</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                        {{$rutas->render()}}
                                    </div><!-- End .accordion-body-wrapper -->
                                </div><!-- End .accordion-body -->
                            </div><!-- End .accordion-group -->
                            <div class="accordion-group panel">
                                <div class="accordion-header">
                                    <div class="accordion-title">Datos de Facturacion</div><!-- End .accourdion-title -->
                                    <a class="accordion-btn" data-toggle="collapse" data-parent="#accordion" href="#accordion-three"></a>
                                </div><!-- End .accordion-header -->

                                <div class="accordion-body collapse" id="accordion-three">
                                    <div class="accordion-body-wrapper">
                                        <table class="table table-responsive table-hover">
                                            <thead>
                                            <tr>
                                                <th>id</th>
                                                <td>rutas</td>
                                                <td>claveProdServ</td>
                                                <td>noIdentificacion</td>
                                                <td>cantidad</td>
                                                <td>claveUnidad</td>
                                                <td>unidad</td>
                                                <td>descripcion</td>
                                                <td>valorUnitario</td>
                                                <td>importe</td>
                                                <td>tIva</td>
                                                <td>tIsr</td>
                                                <td>rIva</td>
                                                <td>rIsr</td>
                                                <td>Eliminar</td>
                                                <td>Editar</td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datosF as $dt)
                                                <tr>
                                                    <td>{{$dt->id}}</td>
                                                    <td>{{$dt->rutas}}</td>
                                                    <td>{{$dt->claveProdServ}}</td>
                                                    <td>{{$dt->noIdentificacion}}</td>
                                                    <td>{{$dt->cantidad}}</td>
                                                    <td>{{$dt->claveUnidad}}</td>
                                                    <td>{{$dt->unidad}}</td>
                                                    <td>{{$dt->descripcion}}</td>
                                                    <td>{{$dt->valorUnitario}}</td>
                                                    <td>{{$dt->importe}}</td>
                                                    <td>{{$dt->tIva}}</td>
                                                    <td>{{$dt->tIsr}}</td>
                                                    <td>{{$dt->rIva}}</td>
                                                    <td>{{$dt->rIsr}}</td>
                                                    <td>
                                                        <form method="post" action="{{url('/datosFacturacions/'.$dt->id)}}">
                                                            {{csrf_field()}}
                                                            {{method_field('DELETE')}}
                                                            <button type="submit" onclick="return confirm('Eliminar');" class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a href="{{url('/datosFacturacions/'.$dt->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            @endforeach
                                        </table>
                                        {{$datosF->render()}}
                                    </div><!-- End .accordion-body-wrapper -->
                                </div><!-- End .accordion-body -->
                            </div><!-- End .accordion-group -->
                            <div class="accordion-group panel">
                                <div class="accordion-header">
                                    <div class="accordion-title">Cuentas por pagar</div><!-- End .accourdion-title -->
                                    <a class="accordion-btn" data-toggle="collapse" data-parent="#accordion" href="#accordion-four"></a>
                                </div><!-- End .accordion-header -->

                                <div class="accordion-body collapse" id="accordion-four">
                                    <div class="accordion-body-wrapper">
                                        <p>Pellentesque malesuada sollicitudin fermentum. Nullam ultricesposuere congue. Turpis rhoncus. Nullam pretium eleifend neque, eget congue purus tincidunt id. Duis quam vitae condimentum.</p>
                                        <p>Sed pretium, elit eget fermentum mattis, tortor eros aliquam purus,  lacus mauris pellentesque odio, ut rhoncus erat risus sed.</p>
                                    </div><!-- End .accordion-body-wrapper -->
                                </div><!-- End .accordion-body -->
                            </div><!-- End .accordion-group -->
                            <div class="accordion-group panel">
                                <div class="accordion-header">
                                    <div class="accordion-title">Tarifas</div><!-- End .accourdion-title -->
                                    <a class="accordion-btn" data-toggle="collapse" data-parent="#accordion" href="#accordion-four"></a>
                                </div><!-- End .accordion-header -->

                                <div class="accordion-body collapse" id="accordion-four">
                                    <div class="accordion-body-wrapper">
                                        <p>Pellentesque malesuada sollicitudin fermentum. Nullam ultricesposuere congue. Turpis rhoncus. Nullam pretium eleifend neque, eget congue purus tincidunt id. Duis quam vitae condimentum.</p>
                                        <p>Sed pretium, elit eget fermentum mattis, tortor eros aliquam purus,  lacus mauris pellentesque odio, ut rhoncus erat risus sed.</p>
                                    </div><!-- End .accordion-body-wrapper -->
                                </div><!-- End .accordion-body -->
                            </div><!-- End .accordion-group -->
                        </div><!-- End .accordion -->

                    </div><!-- End .col-md-6 -->

                </div> <!-- row -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
@endsection