<?php

namespace App\Http\Controllers;

use App\Operadores;
use Illuminate\Http\Request;

class OperadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operadores = Operadores::orderBy('id', 'DESC')->paginate(10);
        return view('operador/operadores')->with('operadores' , $operadores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operador/operadorCreate');
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
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'nombres' => 'required',
            'nombre_corto' => 'required',
            'licencia' => 'required',
            'vigencia_licencia' => 'required',
            'vigencia_medico' => 'required',
            'obs' => 'required',
        ];
        //Este mensaje se dejo aqui por si se requiere ver los datos que no cumplen con alguna validacion en el formulario
        $mensaje = ["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);

        $operador = $request->except('_token');
        Operadores::insert($operador);
        return redirect()->route('operadores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Operadores  $operadores
     * @return \Illuminate\Http\Response
     */
    public function show(Operadores $operadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Operadores  $operadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operador = Operadores::findOrFail($id);
        return view('operador/operadorEdit')->with('operador', $operador);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Operadores  $operadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $operadores = $request->except(['_token', '_method']);
        Operadores::where('id', '=', $id)->update($operadores);
        return redirect()->route('operadores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Operadores  $operadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Operadores::destroy($id);
        return redirect()->route('operadores.index');
    }
}