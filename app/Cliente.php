<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //tbl_cliente
    protected $table = 'tbl_cliente';
    protected $fillable = ['razon_social','telefono','rut','celular','email','clave','direccion','id_estado','id_familia','id_ejecutivo'];

     //Query Scope
     public function scopeRazon_social($query, $razon_social)
     {
         if($razon_social)
             return $query->where('razon_social', 'LIKE', "%$razon_social%");
     }
 
     public function scopeRut($query, $rut)
     {
         if($rut)
             return $query->where('rut', 'LIKE', "%$rut%");
     }
}
