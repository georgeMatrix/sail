<?php

namespace App\Http\Controllers;

use App\Provedores;
use Illuminate\Http\Request;

class ProvedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provedores = Provedores::orderBy('id', 'DESC')->paginate(10);
        return view('provedor/provedores')->with('provedores' , $provedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provedor/provedorCreate');
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
            'nombre' => 'required',
            'razon_social' => 'required',
            'rfc' => 'required',
            'direccion' => 'required',
            'contacto' => 'required',
            'mail' => 'required',
            'credito' => 'required|numeric',
            'saldo' => 'required|numeric',
        ];
        //Este mensaje se dejo aqui por si se requiere ver los datos que no cumplen con alguna validacion en el formulario
        $mensaje = ["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);

        $provedor = $request->except('_token');
        Provedores::insert($provedor);
        return redirect()->route('provedores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provedores  $provedores
     * @return \Illuminate\Http\Response
     */
    public function show(Provedores $provedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Provedores  $provedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provedor = Provedores::findOrFail($id);
        return view('provedor/provedorEdit')->with('provedor', $provedor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Provedores  $provedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $provedores = $request->except(['_token', '_method']);
        Provedores::where('id', '=', $id)->update($provedores);
        return redirect()->route('provedores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provedores  $provedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Provedores::destroy($id);
        return redirect()->route('provedores.index');
    }
}
