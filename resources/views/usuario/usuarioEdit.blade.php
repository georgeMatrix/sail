@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Actualizacion de Usuarios<a class="btn btn-primary float-right mt-3" href="{{route('usuarios.index')}}">Regresar a listado</a></h1>
            <form action="{{url('/usuarios/'.$usuario->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PATCH')}}
                <label for="">Apellido Paterno</label>
                <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control" value="{{$usuario->apellidoPaterno}}">
                <label for="">apellidoMaterno</label>
                <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control"  value="{{$usuario->apellidoMaterno}}">
                <label for="">nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control"  value="{{$usuario->nombre}}">
                <label for="">password</label>
                <input type="text" name="password" id="password" class="form-control"  value="{{$usuario->password}}">
                <label for="">nombreCorto</label>
                <input type="text" name="nombreCorto" id="nombreCorto" class="form-control"  value="{{$usuario->nombreCorto}}">
                <label for="">cargo</label>
                <input type="text" name="cargo" id="cargo" class="form-control"  value="{{$usuario->cargo}}">
                <label for="">Area</label>
                <input type="text" name="area" id="area" class="form-control"  value="{{$usuario->area}}">
                <br>
                <div class="form-group">
                    <label>Modulo01</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo01_1"/>
                    </div>
                </div>
                <input type="hidden" name="modulo01" id="modulo01" value="1" />

                <div class="form-group">
                    <label>Modulo02</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo02_2"/>
                    </div>
                </div>
                <input type="hidden" name="modulo02" id="modulo02" value="1" />

                <div class="form-group">
                    <label>Modulo03</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo03_3"/>
                    </div>
                </div>
                <input type="hidden" name="modulo03" id="modulo03" value="1" />

                <div class="form-group">
                    <label>Modulo04</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo04_4"/>
                    </div>
                </div>
                <input type="hidden" name="modulo04" id="modulo04" value="1" />

                <div class="form-group">
                    <label>Modulo05</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo05_5"/>
                    </div>
                </div>
                <input type="hidden" name="modulo05" id="modulo05" value="1" />

                <div class="form-group">
                    <label>Modulo06</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo06_6"/>
                    </div>
                </div>
                <input type="hidden" name="modulo06" id="modulo06" value="1"/>

                <div class="form-group">
                    <label>Modulo07</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo07_7"/>
                    </div>
                </div>
                <input type="hidden" name="modulo07" id="modulo07" value="1" />

                <div class="form-group">
                    <label>Modulo08</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo08_8"/>
                    </div>
                </div>
                <input type="hidden" name="modulo08" id="modulo08" value="1" />

                <div class="form-group">
                    <label>Modulo09</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo09_9"/>
                    </div>
                </div>
                <input type="hidden" name="modulo09" id="modulo09" value="1" />

                <div class="form-group">
                    <label>Modulo10</label>
                    <div class="checkbox">
                        <input type="checkbox" id="modulo10_10"/>
                    </div>
                </div>
                <input type="hidden" name="modulo10" id="modulo10" value="1" />

                <!--<div class="form-group">
                    <label>Define Gender</label>
                    <div class="checkbox">
                        <input type="checkbox" name="gender" id="gender" checked />
                    </div>
                </div>
                <input type="hidden" name="hidden_gender" id="hidden_gender" value="1" />-->

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
    </div>
    <script>

        $(document).ready(function(){

            if ({{ json_encode($usuario->modulo01) }} == 1){
                $("#modulo01_1").prop("checked", true)
                $('#modulo01').val(1)
            }else{
                $('#modulo01').val(0)
                $("#modulo01_1").prop("checked", false)
            }

            if ({{ json_encode($usuario->modulo02) }} == 1){
                $("#modulo02_2").prop("checked", true)
                $('#modulo02').val(1)
            }else{
                $('#modulo02').val(0)
                $("#modulo02_2").prop("checked", false);
            }

            if ({{ json_encode($usuario->modulo03) }} == 1){
                $("#modulo03_3").prop("checked", true)
                $('#modulo03').val(1)
            }else{
                $('#modulo03').val(0)
                $("#modulo03_3").prop("checked", false);
            }

            if ({{ json_encode($usuario->modulo04) }} == 1){
                $("#modulo04_4").prop("checked", true)
                $('#modulo04').val(1)
            }else{
                $('#modulo04').val(0)
                $("#modulo04_4").prop("checked", false);
            }

            if ({{ json_encode($usuario->modulo05) }} == 1){
                $("#modulo05_5").prop("checked", true)
                $('#modulo05').val(1)
            }else{
                $('#modulo05').val(0)
                $("#modulo05_5").prop("checked", false);
            }

            if ({{ json_encode($usuario->modulo06) }} == 1){
                $("#modulo06_6").prop("checked", true)
                $('#modulo06').val(1)
            }else{
                $('#modulo06').val(0)
                $("#modulo06_6").prop("checked", false);
            }

            if ({{ json_encode($usuario->modulo07) }} == 1){
                $("#modulo07_7").prop("checked", true)
                $('#modulo07').val(1)
            }else{
                $('#modulo07').val(0)
                $("#modulo07_7").prop("checked", false);
            }

            if ({{ json_encode($usuario->modulo08) }} == 1){
                $("#modulo08_8").prop("checked", true)
                $('#modulo08').val(1)
            }else{
                $('#modulo08').val(0)
                $("#modulo08_8").prop("checked", false);
            }

            if ({{ json_encode($usuario->modulo09) }} == 1){
                $("#modulo09_9").prop("checked", true)
                $('#modulo09').val(1)
            }else{
                $('#modulo09').val(0)
                $("#modulo09_9").prop("checked", false);
            }
            if ({{ json_encode($usuario->modulo10) }} == 1){
                $("#modulo10_10").prop("checked", true)
                $('#modulo10').val(1)
            }else{
                $('#modulo10').val(0)
                $("#modulo10_10").prop("checked", false);
            }

                $('#modulo01_1').bootstrapToggle({
                    on: 'on',
                    off: 'off',
                    onstyle: 'success',
                    offstyle: 'danger'
                });

                $('#modulo01_1').change(function(){
                    if($(this).prop('checked'))
                    {
                        $('#modulo01').val('1');
                    }
                    else
                    {
                        $('#modulo01').val('0');
                    }
                });

            $('#modulo02_2').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo02_2').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo02').val('1');
                }
                else
                {
                    $('#modulo02').val('0');
                }
            });

            $('#modulo03_3').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo03_3').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo03').val('1');
                }
                else
                {
                    $('#modulo03').val('0');
                }
            });

            $('#modulo04_4').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo04_4').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo04').val('1');
                }
                else
                {
                    $('#modulo04').val('0');
                }
            });
            $('#modulo05_5').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo05_5').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo05').val('1');
                }
                else
                {
                    $('#modulo05').val('0');
                }
            });
            $('#modulo06_6').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo06_6').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo06').val('1');
                }
                else
                {
                    $('#modulo06').val('0');
                }
            });
            $('#modulo07_7').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo07_7').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo07').val('1');
                }
                else
                {
                    $('#modulo07').val('0');
                }
            });
            $('#modulo08_8').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo08_8').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo08').val('1');
                }
                else
                {
                    $('#modulo08').val('0');
                }
            });
            $('#modulo09_9').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo09_9').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo09').val('1');
                }
                else
                {
                    $('#modulo09').val('0');
                }
            });
            $('#modulo10_10').bootstrapToggle({
                on: 'on',
                off: 'off',
                onstyle: 'success',
                offstyle: 'danger'
            });

            $('#modulo10_10').change(function(){
                if($(this).prop('checked'))
                {
                    $('#modulo10').val('1');
                }
                else
                {
                    $('#modulo10').val('0');
                }
            });
        }) //Document ready



    </script>
@endsection