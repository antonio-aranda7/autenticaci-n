<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;

    /*public function boleto()
    {
        //return $this->hasOne(Boleto::class , 'compraId', 'clienteID');
        return $this->hasOne(Boleto::class , 'clienteID', 'clienteID');
    }

    public function clientes()
    {
        //return $this->hasOne(Cliente::class , 'compraId', 'clienteID');
        return $this->hasOne(Cliente::class , 'clienteID', 'clienteID');
    }*/
}
