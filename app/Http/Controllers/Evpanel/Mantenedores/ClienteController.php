<?php

namespace App\Http\Controllers\Evpanel\Mantenedores;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClienteRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //      
        $razon_social = $request->get('razon_social');
        $rut          = $request->get('rut');

        $clientes = Cliente::orderBy('razon_social','ASC')
        ->razon_social($razon_social)
        ->rut($rut)
        ->paginate(20);
        return view("evpanel/ventas/clientes/index", compact('clientes'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("www/login/registrarse");
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        //

        $id_estado = '1';
    	$id_familia = '7';
    	$id_ejecutivo = '0';
    	$cliente = new Cliente(array(
    		'razon_social' => $request->get('nombre'),
    		'telefono' => $request->get('telefono'),
    		'rut' => $request->get('rut'),
    		'celular' => $request->get('celular'),
    		'email' => $request->get('correo'),
    		'clave' => $request->get('contraseña'),
    		'direccion' => $request->get('direccion'),
    		'id_estado' => $id_estado,
    		'id_familia' => $id_familia,
    		'id_ejecutivo' => $id_ejecutivo,

    	));

    	$cliente->save();

    	return redirect('/')->with('status', 'Cuenta creada con exito. Favor revise su correo, le enviaremos un correo para su activacion');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $cliente2 = Cliente::find($id);
        //dd($cliente);
        return view('evpanel.index', compact('cliente2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        //
        $cliente2 = Cliente::find($id);
        //return $cliente;
        return view("evpanel/ventas/buscar_cliente", compact('cliente2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public  function buscar_cliente(Request $request)
    {
        $razon_social = $request->get('razon_social');
        $rut          = $request->get('rut');

        $clientes = Cliente::orderBy('razon_social','ASC')
        ->razon_social($razon_social)
        ->rut($rut)
        ->paginate(20);
        return view("evpanel/ventas/buscar_cliente", compact('clientes'));
       
    }

    public function mostrar_cliente($id)
    {
        //
        $cliente2 = Cliente::find($id);
        //dd($cliente);
        return view('evpanel.index', compact('cliente2'));
    }
}


