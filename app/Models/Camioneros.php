<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camioneros extends Model
{
    public function camions(){
        return $this->belongsToMany('App\Models\camion');
    }
    public function paquetes(){
        return $this->hasMany('App\Models\Paquete');//RECUPERAR LA COLECCION DE POST QUE PERTENECEN A ESTE USUARIO
        
    }
    use HasFactory;
}
