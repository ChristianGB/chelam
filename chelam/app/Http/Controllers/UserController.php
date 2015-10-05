<?php namespace App\Http\Controllers;

class UserController extends Controller{

	/*
	|-------------------------------------
	|UserController all logic for the user
	|-------------------------------------
	*/


	public function __construct(){

	}

	public function iniciarSesion(){
		$userName = $_POST["userName"];
		$password = $_POST["password"];
	}

	public function crearUsuario(){
		
		$userName = $_POST["userName"];
		$password = $_POST["password"];
		$email = $_POST["email"];

		$encriptPass = md5($password);

		try{

			$id = \DB::table('Objeto')->insertGetId(
			    array(	
		    		
			    )
			);

			\DB::table('usuario')->insert(
			    array(	
			    	'idObjeto' => $id,
		    		'userName' => $userName, 
		    		'password' => $encriptPass,
		    		'email' => $email
			    )
			);
			\Session::put("idUsuarioSesion", $id);
			\Session::put("nameUsuarioSesion", $userName);
			return \Redirect::to("/");
		}catch(Exception $e){
			return \Redirect::to("registrar");
		}
		return \Redirect::to("/");
	}

	public function olvidarSesion(){
		\Session::forget("idUsuarioSesion");
		\Session::forget("nameUsuarioSesion");
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
			if($user==null){
				return \Redirect::to("/")->with('messageLogin', 'No se encontro usuario');	
			}
			\Session::put("idUsuarioSesion", $user->idUsuario);
			\Session::put("nameUsuarioSesion", $user->userName);
			return \Redirect::to("/");
		}catch(Exception $e){
			return \Redirect::to("/");
		}
		
	}


}