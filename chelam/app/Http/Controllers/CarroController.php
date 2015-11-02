<?php namespace App\Http\Controllers;	


class UserController extends Controller{
	public function getContentCart(){

		$clienteInfo = \DB::table("objeto")
		->join("usuario", "objeto.idObjeto", "=", "usuario.idObjeto")
		->join("cliente", "objeto.idObjeto", "=", "cliente.idObjeto")
		->where("usuario.idUsuario",\Session::get("idUsuarioSesion") $user->idUsuario)
		->first();


	}
}