<?php namespace App\Http\Controllers;	


class CarroController extends Controller{

	const CERVEZA = 1;
	const CHELAPACK = 2;

	public function getInfoCliente(){

		$clienteInfo = \DB::table("objeto")
		->join("usuario", "objeto.idObjeto", "=", "usuario.idObjeto")
		->join("cliente", "objeto.idObjeto", "=", "cliente.idObjeto")
		->where("usuario.idUsuario",\Session::get("idUsuarioSesion"))
		->first();

		return $clienteInfo;
	}

	public function getPedidoCervezas(){

		if(\Session::get("idUsuarioSesion")!=null){
			$cervezas = \DB::table("productopedido")
			->join("producto", "productopedido.idProducto","=","producto.idProducto")
			->join("pedido","productopedido.idPedido","=","pedido.idPedido")
			->join("productocerveza","productocerveza.idProducto", "=", "producto.idProducto")
			->join("cervezas", "cervezas.idCerveza", "=", "productocerveza.idCerveza")
			->where("pedido.idPedido", $this->getInfoCliente()->idPedido)
			->where("producto.idTipoProducto",  self::CERVEZA)
			->get();	

			return $cervezas;
		}
		return 0;
	}

	public function getPedidoChelapacks(){

		$chelapacks = \DB::table("productopedido")
		->join("producto", "productopedido.idProducto","=","producto.idProducto")
		->join("pedido","productopedido.idPedido","=","pedido.idPedido")
		//Debe cambiar a productochelapack y chelapacks
		->join("productocerveza","productocerveza.idProducto", "=", "producto.idProducto")
		->join("cervezas", "cervezas.idCerveza", "=", "productocerveza.idCerveza")
		->where("pedido.idPedido", $this->$getInfoCliente()->idPedido)
		->where("producto.idTipoPedido",  self::CHELAPACK)
		->get();	

		return $chelapacks;
	}


}