<?php

namespace App\Http\Controllers\Evpanel\Mantenedores;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    //tbl_cliente
    protected $table = 'tbl_cliente';

    public function index()
    {
        return view('evpanel/index');
    }
}
