<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    protected $fillable = ['clientes', 'nombre', 'lugar_exp', 'origen', 'remitente', 'dom_remitente', 'recoge', 'valor_declarado', 'destino', 'destinatario', 'dom_destinatario', 'entrega', 'fecha_entrega', 'cantidad', 'embalaje', 'concepto', 'material_peligroso', 'indemnizacion', 'obs', 'dias_re'];

    public function clientes(){
        return $this->belongsTo(Clientes::class, id);
    }
}
