<?php

namespace App\Http\Controllers\Evpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('ventasWeb');
    }
    public function index()
    {

      
        

        return view('evpanel\index');
    }
}
