<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seccion extends Model
{
    use HasFactory;

    /*//Inversa 1 a muchos
    public function boleto()
    {
        return $this->belongsTo(Compra::class , 'numBoleto', 'numBoleto');
    }*/
}


