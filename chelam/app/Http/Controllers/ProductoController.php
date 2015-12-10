<?php namespace App\Http\Controllers;

class ProductoController extends Controller {

	
	public function addTempCart(){
		$idCerveza = $_POST["idCerveza"];
		$cantProductos =0;

		$nombreCerveza = "";
		$precioCerveza = "";

		try{
			if(\Session::get("idUsuarioSesion")==null){
				return "error login";
			}else{
				$cerveza = \DB::table("productocerveza")
				->where("idCerveza", $idCerveza)->first();	

				$clienteInfo = \DB::table("objeto")
				->join("usuario", "objeto.idObjeto", "=", "usuario.idObjeto")
				->join("cliente", "objeto.idObjeto", "=", "cliente.idObjeto")
				->where("usuario.idUsuario", \Session::get("idUsuarioSesion"))
				->first();

				$idPedido = 0;
				if($clienteInfo->idPedido == 0){//No se ha hecho ningun pedido para este cliente
					//Se agrega un nuevo pedido PEDIDO = CARRITO PARA X CLIENTE
					$idPedido = \DB::table("pedido")->insertGetId(
						array(

						)
					);	
					//Se agrega un idPedido a X cliente
					\DB::table("cliente")
					->where("idCliente", $clienteInfo->idCliente)
					->update(
						array(
							"idPedido"=> $idPedido
						)
					);
				}else{//El cliente ya tiene asignado un pedido (asignado un carrito)
					$idPedido = $clienteInfo->idPedido;
				}

				//Se hace la relacion de x producto a y pedido
				\DB::table('productopedido')->insert(
				    array(
				    	'idProducto' => $cerveza->idProducto, 
				    	'idPedido' => $idPedido
				    )
				);

				//Se obtienen la cantidad de productos en el carrito
				$cantProductos = \DB::table('productopedido')
				->where("idPedido", $idPedido)
				->count();

				$pruducto = \DB::table("producto")
				->where("idProducto", $cerveza->idProducto)
				->first();

				$cervezaObj = \DB::table("cervezas")
				->where("idCerveza", $idCerveza)
				->first();

				$nombreCerveza = $cervezaObj->Nombre;
				$precioProducto = $pruducto->precio;

				\Session::put("cantArt", $cantProductos);
				

			}
		}catch(Exception $e){
			return 0;
		}
		return json_encode(
			array(
				"cantProductos" => $cantProductos,
				"idCerveza" => $idCerveza,
				"nombreProducto" => $nombreCerveza,
				"precioProducto" => $precioProducto
				)
		);			
	}


}
?>