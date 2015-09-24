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
}