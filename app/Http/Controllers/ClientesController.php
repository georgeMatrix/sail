<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Clientes::orderBy('id', 'DESC')->paginate(10);
        return view('cliente/clientes')->with('clientes' , $clientes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente/clienteCreate');
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
            'calle' => 'required',
            'numero' => 'required',
            'interior' => 'required',
            'colonia' => 'required',
            'ciudad' => 'required',
            'cp' => 'required',
            'estado' => 'required',
            'contacto1' => 'required',
            'tel1' => 'required',
            'mail1' => 'required',
            'contacto2' => 'required',
            'tel2' => 'required',
            'mail2' => 'required',
            'dia_revision' => 'required',
            'dia_credito' => 'required|numeric'
        ];
        //Este mensaje se dejo aqui por si se requiere ver los datos que no cumplen con alguna validacion en el formulario
        $mensaje = ["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);

        $clientes = $request->except('_token');
        Clientes::insert($clientes);
        return redirect()->route('clientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('cliente/clienteEdit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $clientes = $request->except(['_token', '_method']);
        Clientes::where('id', '=', $id)->update($clientes);
        //$cliente = Clientes::findOrFail($id);
        //return view('cliente/clienteEdit')->with('cliente', $cliente);
        return redirect()->route('clientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        return redirect()->route('clientes.index');
    }
}
