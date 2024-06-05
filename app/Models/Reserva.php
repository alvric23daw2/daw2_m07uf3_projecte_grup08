<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    protected $table = 'reserva';

    protected $primaryKey = 'Passaport_client';

    protected $fillable = [
        'Passaport_client', 'Codi_vol', 'Localitzador', 'Num_seient','Equipatge_ma',
        'Equipatge_cabina_fins_20kg', 'Quantitat_equipatge_mes_20kg', 'Tipus_checking', 'Tipus_assegurança',
        'Preu_vol'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'Passaport_client', 'Passaport_client');
    }

    public function Vols()
    {
        return $this->belongsTo(Vols::class, 'Codi_vol', 'Codi_vol');
    }
}
