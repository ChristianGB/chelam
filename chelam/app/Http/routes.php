<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');
Route::get('chelas', 'CervezaController@getAllCervezas');
Route::get('chelapack', 'HomeController@chelaPackView');
Route::get('userVista', 'HomeController@userVistaView');

Route::get('listaCompras', 'HomeController@listaComprasView');
Route::get('mayoreo', 'HomeController@mayoreoView');
Route::get('login', 'HomeController@loginView');
Route::get('recuperar','HomeController@recuperarView');
Route::get('carrito','HomeController@carritoView');

Route::get('registrar', 'HomeController@registrarUsuario');
Route::get('datos', 'HomeController@datosUsuario');

//Creación de usuario
Route::post('crearusuario', 'UserController@crearUsuario');
Route::get('olvidarSesion', 'UserController@olvidarSesion');


//identificar usuario
Route::post('identifcar', 'UserController@identificarUsuario');

Route::post('addTempCart', 'ProductoController@addTempCart');

Route::filter('old', function()
{
    if (\Session::get("nameUsuarioSesion")==null)
    {
        return \Redirect::to('/');
    }
});

Route::get('user', array('before' => 'old', function()
{
    return \View::make("user");
}));
