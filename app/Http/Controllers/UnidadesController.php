<?php

namespace App\Http\Controllers;

use App\Provedores;
use App\Unidades;
use Illuminate\Http\Request;

class UnidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidades = Unidades::orderBy('id', 'DESC')->paginate(10);
        return view('unidad/unidades')->with('unidades' , $unidades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $provedores = Provedores::all();
        return view('unidad/unidadCreate')->with('provedores', $provedores);
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
            'provedor'=>'required|numeric',
            'nombre'=>'required',
            'economico'=>'required',
            'tipo'=>'required',
            'marca'=>'required',
            'modelo'=>'required',
            'placas'=>'required',
            'serie'=>'required',
            'motor'=>'required',
            'seguro'=>'required',
            'verificacion'=>'required',
            'fm'=>'required',
            'obs'=>'required'
        ];
        //Este mensaje se dejo aqui por si se requiere ver los datos que no cumplen con alguna validacion en el formulario
        $mensaje = ["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);

        $unidades = $request->except('_token');
        Unidades::insert($unidades);
        return redirect()->route('unidades.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function show(Unidades $unidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provedores = Provedores::all();
        $unidad = Unidades::findOrFail($id);
        return view('unidad/unidadEdit')->with('unidad', $unidad)->with('provedores', $provedores);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unidades = $request->except(['_token', '_method']);
        Unidades::where('id', '=', $id)->update($unidades);
        //$cliente = Clientes::findOrFail($id);
        //return view('cliente/clienteEdit')->with('cliente', $cliente);
        return redirect()->route('unidades.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Unidades  $unidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unidades::destroy($id);
        return redirect()->route('unidades.index');
    }
}
