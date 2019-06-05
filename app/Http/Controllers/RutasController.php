<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\Rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rutas = Rutas::orderBy('id', 'DESC')->paginate(10);
        return view('ruta/rutas')->with('rutas' , $rutas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Clientes::all();
        return view('ruta/rutaCreate')->with('clientes',$clientes);
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
            'clientes' => 'required|numeric',
            'nombre' => 'required',
            'cliente' => 'required',
            'lugar_exp' => 'required',
            'origen' => 'required',
            'remitente' => 'required',
            'dom_remitente' => 'required',
            'recoge' => 'required',
            'valor_declarado' => 'required',
            'destino' => 'required',
            'destinatario' => 'required',
            'dom_destinatario' => 'required',
            'entrega' => 'required',
            'fecha_entrega' => 'required',
            'cantidad' => 'required',
            'embalaje' => 'required',
            'concepto' => 'required',
            'material_peligroso' => 'required',
            'indemnizacion' => 'required',
            'obs' => 'required',
            'dias_re' => 'required|numeric'
        ];
        //Este mensaje se dejo aqui por si se requiere ver los datos que no cumplen con alguna validacion en el formulario
        $mensaje = ["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos, $mensaje);

        $rutas = $request->except('_token');
        Rutas::insert($rutas);
        return redirect()->route('rutas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function show(Rutas $rutas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clientes = Clientes::all();
        $ruta = Rutas::findOrFail($id);
        return view('ruta/rutaEdit')->with('ruta', $ruta)->with('clientes', $clientes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rutas = $request->except(['_token', '_method']);
        Rutas::where('id', '=', $id)->update($rutas);
        //$cliente = Clientes::findOrFail($id);
        //return view('cliente/clienteEdit')->with('cliente', $cliente);
        return redirect()->route('rutas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rutas  $rutas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rutas::destroy($id);
        return redirect()->route('rutas.index');
    }
}
