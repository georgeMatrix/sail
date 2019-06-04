<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutas extends Model
{
    public function clientes(){
        return $this->belongsTo(Clientes::class, id);
    }
}
