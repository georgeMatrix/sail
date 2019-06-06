<?php

namespace App\Http\Controllers;

use App\DatosFacturacion;
use App\Rutas;
use Illuminate\Http\Request;

class DatosFacturacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosF = DatosFacturacion::orderBy('id', 'DESC')->paginate(10);
        return view('datosFacturacion/datosFacturacions')->with('datosF' , $datosF);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rutas = Rutas::all();
        return view('datosFacturacion/datosFacturacionCreate')->with('rutas' ,$rutas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'rutas' => 'required',
            'claveProdServ' => 'required',
            'noIdentificacion' => 'required',
            'cantidad' => 'required|numeric',
            'claveUnidad' => 'required',
            'unidad' => 'required',
            'descripcion' => 'required',
            'valorUnitario' => 'required',
            'importe' => 'required|numeric',
            'tIva' => 'required|numeric',
            'tIsr' => 'required|numeric',
            'rIva' => 'required|numeric',
            'rIsr' => 'required|numeric',
        ];
        //Este mensaje se dejo aqui por si se requiere ver los datos que no cumplen con alguna validacion en el formulario
        $mensaje = ["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);

        $datosF = $request->except('_token');
        DatosFacturacion::insert($datosF);
        return redirect()->route('datosFacturacions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosFacturacion  $datosFacturacion
     * @return \Illuminate\Http\Response
     */
    public function show(DatosFacturacion $datosFacturacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosFacturacion  $datosFacturacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutas = Rutas::all();
        $datosF = DatosFacturacion::findOrFail($id);
        return view('datosFacturacion/datosFacturacionEdit')->with('datosF', $datosF)->with('rutas', $rutas);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosFacturacion  $datosFacturacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosF = $request->except(['_token', '_method']);
        DatosFacturacion::where('id', '=', $id)->update($datosF);
        //$cliente = Clientes::findOrFail($id);
        //return view('cliente/clienteEdit')->with('cliente', $cliente);
        return redirect()->route('datosFacturacions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosFacturacion  $datosFacturacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DatosFacturacion::destroy($id);
        return redirect()->route('datosFacturacions.index');
    }
}
