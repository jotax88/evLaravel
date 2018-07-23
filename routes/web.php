<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Rutas para EV-PANEL [J.M 09-07-2018]

/*
Route::get('evpanel', function () {
    return view('evpanel\login\login');
});
*/

/*Route::middleware(['auth'])->group(function() {
    Route::get('evpanel', 'Auth\LoginController@showLoginForm')
    ->middleware('guest');

    Route::get('mantenedor', 'Auth\LoginController@showLoginForm')
    ->middleware('guest');

});*/

Auth::routes();

 //Rutas para Web [J.M 09-07-2018]
 Route::get('/', function () {
    return view('www\index');
    });

Route::middleware('perfil')->group(function()
{  
    
   /* Route::get('/web', function()
    {
        if(Auth::user()->id_perfil == 1){
            return view("evpanel/ventas/index");
        }
    });*/
/*Route::get('web', 'Evpanel\Mantenedores\ClienteController@index')->name('cliente.index')
->middleware('permission:web.index'); */
    
    Route::get('inicio', 'Evpanel\Mantenedores\ClienteController@index')->name('cliente.index')
    ->middleware('permission:web.index'); 

});


//Route::get('mantenedor', 'Auth\LoginController@showLoginForm')->middleware('guest');

//Route::get('dashboard', 'Evpanel\IndexController@index')->name('dashboard');


Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('producto', 'Evpanel\Mantenedores\ProductoController');
Route::resource('cliente', 'Evpanel\Mantenedores\ClienteController');
//Route::get('producto', 'Evpanel\Mantenedores\ProductoController@index')->name('producto.index');
//Route::get('cliente', 'Evpanel\Mantenedores\ClienteController@index')->name('cliente.index');





 
//Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth', 'perfil'])->group(function() {

    //Route::get('evpanel', 'Auth\LoginController@showLoginForm')->middleware('guest');

    //Mantenedores
      Route::get('mantenedor', 'Evpanel\Mantenedores\UsuarioController@index')
      ->name('mantenedor.index')
      ->middleware('permission:mantenedor.index');

    //Web
    Route::get('web', 'Evpanel\Mantenedores\ClienteController@index')->name('cliente.index')
    ->middleware('permission:web.index');

    Route::get('buscar_cliente', 'Evpanel\Mantenedores\ClienteController@buscar_cliente')
    ->name('buscar_cliente.index')
    ->middleware('permission:buscar_cliente.index'); 

    Route::get('mostrar_cliente/{id}', 'Evpanel\Mantenedores\ClienteController@mostrar_cliente')
    ->name('mostrar_cliente.show');


    //Producto
    Route::get('producto', 'Evpanel\Mantenedores\ProductoController@index')->name('producto.index')
    ->middleware('permission:producto.index');

    Route::post('roles/store')->name('roles.store')
    ->middleware('permission:roles.index');
});