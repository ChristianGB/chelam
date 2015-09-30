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
		$token = $_POST["_token"];

		$encriptPass = md5($password);

		try{
			DB::table('usuario')->insert(
			    array(	
		    		'userName' => $userName, 
		    		'password' => $encriptPass,
		    		'email' => $email,
		    		'token' => $token
			    )
			);

			return Redirect::to("/");
		}catch(Exception $e){
			return Redirect::to("registrar");
		}
		return Redirect::to("/");
	}


}