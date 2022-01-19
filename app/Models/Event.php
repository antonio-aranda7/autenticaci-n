<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    use HasFactory;
    protected $guarded =[];
    
    //Muchos a muchos
    public function participants()
    {
        return $this->belongsToMany(Participant::class/*, 'clienteID', 'clienteID'*/);
    }
}
