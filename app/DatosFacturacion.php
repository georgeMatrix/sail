<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DatosFacturacion extends Model
{
    protected $fillable = ['ruta', 'facturador', 'asignacionPrecio', 'claveProdServ', 'noIdentificacion', 'cantidad', 'claveUnidad', 'unidad', 'descripcion', 'valorUnitario', 'importe', 'tIva', 'tIsr', 'rIva', 'rIsr'];

    public function rutasF(){
        return $this->belongsTo(Rutas::class, 'rutas');
    }

    public function provedoresF(){
        return $this->belongsTo(Provedores::class, 'asignacionPrecio');
    }
}
