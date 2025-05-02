<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class cargo extends Model
{
    use HasFactory, Notifiable;
    
    protected $table = 'cargo';
    public $timestamps = false;
    
    protected $llenado_masivo = [
        'id_cargo', 'nombre_cargo'
    ];
}
