<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //tbl_producto
    protected $table = 'tbl_producto';
    
    //Query Scope
    public function scopeNombre($query, $nombre)
    {
        if($nombre)
            return $query->where('nombre', 'LIKE', "%$nombre%");
    }

    public function scopeCodigo($query, $codigo)
    {
        if($codigo)
            return $query->where('codigo', 'LIKE', "%$codigo%");
    }
}
