<?php namespace App\Http\Controllers;	


class UserController extends Controller{
	public function getContentCart(){
		$pedidoCliente = \DB::table("clientepedido")
			->join("pedido", "clientepedido.idPedido", "=", "pedido.idPedido")
			->join("cervezas", "clientepedido.idCerveza", "=", "cervezas.idCerveza")
			->get();
	}
}