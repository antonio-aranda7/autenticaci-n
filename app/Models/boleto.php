<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class boleto extends Model
{
    use HasFactory;

    /*public function clientes()
    {
        //return $this->hasOne(Cliente::class , 'numBoleto', 'clienteID');
        return $this->hasOne(Cliente::class , 'clienteID', 'clienteID');
    }

    //Inversa 1 a muchos
    public function compra()
    {
        return $this->belongsTo(Compra::class , 'compraId', 'compraId');
    }*/
}
