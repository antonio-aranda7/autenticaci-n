<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
    use HasFactory;

    //Al romper la regla de queitarle la "s" al nombre de la tabla event_participant-"s"
    //Tenemos que decirle que rompimos esa regla
    protected $table = 'event_participant';
}
