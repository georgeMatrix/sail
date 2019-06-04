<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidades extends Model
{
    public function provedores(){
        return $this->belongsTo(Unidades::class, id);
    }
}
