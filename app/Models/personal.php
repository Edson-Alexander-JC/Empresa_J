<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
/*---------------TABLA PERSONAL---------------
Este modelo nos ayudara a hacer cruds para la 
tabla PERSONAL
*/
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'personal';
    public $timestamps = false;
    protected $guarded = ['status'];
}
