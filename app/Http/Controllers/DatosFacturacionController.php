<?php

namespace App\Http\Controllers;

use App\DatosFacturacion;
use App\Provedores;
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

        $datosF = $request->except('_token');
        DatosFacturacion::insert($datosF);
        //return redirect()->route('datosFacturacions.index');
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
        $provedores = Provedores::all();
        $datosF = DatosFacturacion::findOrFail($id);
        return view('datosFacturacion/datosFacturacionEdit')->with('datosF', $datosF)->with('rutas', $rutas)->with('provedores', $provedores);
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
        return redirect()->route('rutas.index');
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
