<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vols extends Model
{
    use HasFactory;

    protected $primaryKey = 'Codi_vol'; 

    protected $casts = [
        'Codi_vol' => 'string'
    ];

    protected $fillable = [
        'Codi_vol', 'Codi_model', 'Ciutat_origen', 'Ciutat_desti', 'Termina_origen', 
        'Terminal_desti', 'Data_sortida', 'Data_arribada', 'Hora_sortida', 'Hora_arribada',
        'Classe'
    ];
}
