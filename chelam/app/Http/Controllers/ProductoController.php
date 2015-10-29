<?php namespace App\Http\Controllers;

class ProductoController extends Controller {

	
	public function addTempCart(){
		$idCerveza = $_POST["idCerveza"];
		$cantProductos =0;

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

				$idPedido = \DB::table("pedido")->insertGetId(
					array(

					)
				);

				\DB::table('productopedido')->insert(
				    array(
				    	'idProducto' => $cerveza->idProducto, 
				    	'idPedido' => $idPedido
				    )
				);
				\DB::table("clientepedido")->insert(
					array(
						'idCliente' => $clienteInfo->idCliente,
						'idPedido' => $idPedido
					)
				);	



				

				$cantProductos = \DB::table('clientepedido')
				->where("idCliente", $clienteInfo->idCliente)
				->count();

				\Session::put("cantArt", $cantProductos);
			}
		}catch(Exception $e){
			return 0;
		}
		return $cantProductos;
	}


}
?>