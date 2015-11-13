<?php namespace App\Http\Controllers;

class UserController extends Controller{

	/*
	|-------------------------------------
	|UserController all logic for the user
	|-------------------------------------
	*/

	/*Constants*/
 	


	public function __construct(){

	}

	public function iniciarSesion(){
		$userName = $_POST["user"];
		$password = $_POST["pass"];
	}

	public function crearUsuario(){
		
		$userName = $_POST["user"];
		$password = $_POST["pass"];
		$email = $_POST["email"];

		$encriptPass = md5($password);

		try{

			$id = \DB::table('Objeto')->insertGetId(
			    array(	
		    		
			    )
			);

			\DB::table('cliente')->insert(
			    array(	
		    		'idObjeto' => $id,
		    		'idTipoCliente' => 1
			    )
			);

			$idUser = \DB::table('usuario')->insertGetId(
			    array(	
			    	'idObjeto' => $id,
		    		'userName' => $userName, 
		    		'password' => $encriptPass,
		    		'email' => $email
			    )
			);
			\Session::put("idUsuarioSesion", $idUser);
			\Session::put("nameUsuarioSesion", $userName);
			return \Redirect::to("user");
		}catch(Exception $e){
			return \Redirect::to("registrar");
		}
		return \Redirect::to("/");
	}

	public function olvidarSesion(){
		\Session::forget("idUsuarioSesion");
		\Session::forget("nameUsuarioSesion");
		\Session::forget("cantArt");
		return \Redirect::to("/");
	}

	public function identificarUsuario(){
		$email = $_POST["email"];
		$password = $_POST["password"];

		$encriptPass = md5($password);

		try{
			$user = \DB::table('usuario')
			->where('email', $email)
			->where('password', $encriptPass)
			->first();

			$clienteInfo = \DB::table("objeto")
			->join("usuario", "objeto.idObjeto", "=", "usuario.idObjeto")
			->join("cliente", "objeto.idObjeto", "=", "cliente.idObjeto")
			->where("usuario.idUsuario", $user->idUsuario)
			->first();

			$cantProductos = \DB::table('productopedido')
			->where("idPedido", $clienteInfo->idPedido)
			->count();

			if($user==null){
				return \Redirect::to("/")->with('messageLogin', 'No se encontro usuario');	
			}
			\Session::put("idUsuarioSesion", $user->idUsuario);
			\Session::put("cantArt", $cantProductos);
			\Session::put("nameUsuarioSesion", $user->userName);

			return \Redirect::to("user");
		}catch(Exception $e){
			return \Redirect::to("/");
		}
		
	}

	public function getInfoUser(){
		$user = \DB::table('usuario')
		->where('idUsuario', \Session::get("idUsuarioSesion"))
		->first();

		return $user;
	}
}