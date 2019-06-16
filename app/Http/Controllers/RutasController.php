<?php

namespace App\Http\Controllers;

use App\Clientes;
use App\DatosCporPagar;
use App\DatosFacturacion;
use App\Provedores;
use App\Rutas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RutasController extends Controller
{
    public function datosSelect(){
        return Rutas::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosCxP = DatosCporPagar::all();
        $datosCxPListado = DatosCporPagar::all();
        $clientes = Clientes::all();
        $provedores = Provedores::all();
        $rutasAll = Rutas::all();
        $datosF = DatosFacturacion::orderBy('id', 'DESC')->paginate(10);
        $rutas = Rutas::orderBy('id', 'DESC')->paginate(10);
        //Se mandan dos rutas, ya que una de ellas no manda todos los datos ya que como esta paginada solo manda un pedazo

        return view('ruta/rutas')
            ->with('rutas' , $rutas)
            ->with('datosF' , $datosF)
            ->with('provedores', $provedores)
            ->with('clientes', $clientes)
            ->with('rutasAll', $rutasAll)
            ->with('datosCxP', $datosCxP)
            ->with('datosCxPListado', $datosCxPListado);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datosF = DatosFacturacion::all();
        $provedores = Provedores::all();
        $rutas = Rutas::all();
        $clientes = Clientes::all();
        return view('ruta/rutaCreate')
            ->with('clientes',$clientes)
            ->with('rutas' ,$rutas)
            ->with('provedores', $provedores)
            ->with('datosF', $datosF);
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
            'dias_re' => 'required|numeric',
            'importe' => 'required|numeric',
            'asignacion_precio' => 'required|numeric'
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
        $provedores = Provedores::all();
        $clientes = Clientes::all();
        $ruta = Rutas::findOrFail($id);
        return view('ruta/rutaEdit')->with('ruta', $ruta)->with('clientes', $clientes)->with('provedores', $provedores);
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
