<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;

    /*//Inversa 1 a muchos
    public function compra()
    {
        return $this->belongsTo(Compra::class , 'compraId', 'clienteID');
    }*/
}
