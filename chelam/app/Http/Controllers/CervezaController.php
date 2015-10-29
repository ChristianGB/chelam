<?php namespace App\Http\Controllers;

class CervezaController extends Controller {


	public function getAllCervezas(){
		try{
			$cervezas = \DB::table("productocerveza")
			->join("producto", "productocerveza.idProducto", "=", "producto.idProducto")
			->join("cervezas", "productocerveza.idCerveza", "=", "cervezas.idCerveza")
			->get();

		return \View::make('chelas')->with("cervezas", $cervezas);	
		}catch(Exception $e){
			return \Redirect::to("/");
		}
	}
}
?>