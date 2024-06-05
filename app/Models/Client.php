<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $primaryKey = 'Passaport_client';
    
    protected $casts = [
        'Passaport_client' => 'string'
    ];

    protected $fillable = [
        'Passaport_client', 'Nom', 'Edat', 'Telèfon', 'Adreça',
        'Ciutat', 'País', 'Email','Tipus_targeta', 'Número_targeta'
    ];
}