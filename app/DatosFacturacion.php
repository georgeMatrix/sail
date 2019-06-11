<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosFacturacion extends Model
{
    protected $fillable = ['ruta', 'asignacionPrecio', 'claveProdServ', 'noIdentificacion', 'cantidad', 'claveUnidad', 'unidad', 'descripcion', 'valorUnitario', 'importe', 'tIva', 'tIsr', 'rIva', 'rIsr'];

    public function rutas(){
        $this->belongsTo(Rutas::class, 'id');
    }

    public function provedoresF(){
        $this->belongsTo(Provedores::class, 'id');
    }
}
