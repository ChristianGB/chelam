<?php namespace App\Http\Controllers;

class CervezaController extends Controller {


	public function getAllCervezas(){
		try{
			$allCervezas = \DB::table("cervezas")->get();	
			return \View::make("chelas")->with("allCervezas", $allCervezas);
		}catch(Exception $e){
			return \Redirect::to("/");
		}
	}
}
?>