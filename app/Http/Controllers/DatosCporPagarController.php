<?php

namespace App\Http\Controllers;

use App\DatosCporPagar;
use App\Provedores;
use App\Rutas;
use Illuminate\Http\Request;

class DatosCporPagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosCxP = $request->except('_token');
        DatosCporPagar::insert($datosCxP);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DatosCporPagar  $datosCporPagar
     * @return \Illuminate\Http\Response
     */
    public function show(DatosCporPagar $datosCporPagar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DatosCporPagar  $datosCporPagar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rutas = Rutas::all();
        $provedores = Provedores::all();
        $datosCxP = DatosCporPagar::findOrFail($id);
        return view('datosCxP/datosCxPEdit')->with('datosCxP', $datosCxP)->with('rutas', $rutas)->with('provedores', $provedores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DatosCporPagar  $datosCporPagar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCxP = $request->except(['_token', '_method']);
        DatosCporPagar::where('id', '=', $id)->update($datosCxP);
        return redirect()->route('rutas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DatosCporPagar  $datosCporPagar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DatosCporPagar::destroy($id);
        return redirect()->route('rutas.index');
    }
}
