<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(){
		return view('index');
	}

	public function chelasView(){		
		
	}

	public function chelaPackView(){
		return view('chelapack');
	}

	public function carritoView(){
		return view('carrito');	
	}

	public function recuperarView(){
		return view('recuperar');	
	}

	public function listaComprasView(){
		return view('listaCompras');
	}

	public function mayoreoView(){
		return view('mayoreo');
	}

	public function loginView(){
		return view('login');
	}
	public function registrarUsuario(){
		return view('registrar');
	}
	public function datosUsuario(){
		return view('datos');
	}
	public function userVistaView(){
		return view('user');
	}
}
