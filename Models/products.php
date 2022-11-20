<?php
require_once 'db/ext_connection.php';
// require_once 'Config/Config.php';
// require_once 'Helpers/Helpers-2.php';
class Products extends Connection{
	private $table = "producto";
	private $intIdProducto;
	// private $table = "tbl_products";
  function __construct()
  {
    parent::__construct();
  }
  // ------------- LISTAR LOS PRODUCTOS DE LA 1ERA LÍNEA - HOME
  public function listProds_1line(){
  	try{
  		// $sql = "SELECT * FROM {$this->table} ORDER BY idproducto DESC LIMIT 100";
  		// $sql = "SELECT * FROM {$this->table} ORDER BY id DESC LIMIT 100";
  		$sql = "SELECT p.idproducto,
					p.codigo,
					p.nombre,
					p.descripcion,
					p.categoriaid,
					c.nombre as categoria,
					p.precio,
					p.ruta,
					p.stock
			FROM {$this->table} p 
			INNER JOIN categoria c
			ON p.categoriaid = c.idcategoria
			WHERE p.status != 0 ORDER BY p.idproducto DESC LIMIT ".CANTPORDHOME;
			$stm = $this->con->prepare($sql);
      $stm->execute();
      $request = $stm->fetchAll(PDO::FETCH_ASSOC);
			if(count($request) > 0){
				for ($c=0; $c < count($request) ; $c++) { 
					$intIdProducto = $request[$c]['idproducto'];
					$sqlImg = "SELECT img	FROM imagen	WHERE productoid = $intIdProducto";
					$arrImg = $this->con->prepare($sqlImg);
					$arrImg->execute();
					$arrImg = $arrImg->fetchAll(PDO::FETCH_ASSOC);
					if(count($arrImg) > 0){
						for ($i=0; $i < count($arrImg); $i++) { 
							$arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
						}
					}
					$request[$c]['images'] = $arrImg;
				}
			}
      // $stm = $this->con->prepare($sql);
      return $request;
      // return $stm->fetchAll(PDO::FETCH_ASSOC);
  	}catch(PDOException $e){
  		return $e->getMessage();
  	}
  }
  // ------------- LISTAR EL DETALLE DEL PRODUCTO
  public function detailsProduct($intIdProducto){
  	try{
  		$sql = "SELECT p.idproducto,
					p.codigo,
					p.nombre,
					p.descripcion,
					p.precio,
					p.ruta,
					p.stock,
					p.categoriaid,
					c.nombre as 'categoria',
					p.status,
					c.ruta as 'ruta_categoria'
			FROM producto p
			INNER JOIN categoria c
			ON p.categoriaid = c.idcategoria
			WHERE idproducto = $intIdProducto";
			$stm = $this->con->prepare($sql);
			$stm->execute();
			$request = $stm->fetchAll(PDO::FETCH_ASSOC);
			if(count($request) > 0){
				for ($c=0; $c < count($request) ; $c++){
					$intIdProducto = $request[$c]['idproducto'];
					$sqlImg = "SELECT img	FROM imagen	WHERE productoid = $intIdProducto";
					$arrImg = $this->con->prepare($sqlImg);
					$arrImg->execute();
					$arrImg = $arrImg->fetchAll(PDO::FETCH_ASSOC);
					if(count($arrImg) > 0){
						for ($i=0; $i < count($arrImg); $i++) { 
							$arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
						}
					}
					$request[$c]['images'] = $arrImg;
				}
			}
			return $request;
  	}catch(PDOException $e){
  		return $e->getMessage();
  	}
  }
  // ------------- OBTENER EL PRODUCTO A PARTIR DEL ID
  public function getProductoIDT(int $idproducto){
		$this->intIdProducto = $idproducto;
		$sql = "SELECT p.idproducto,
				p.codigo,
				p.nombre,
				p.descripcion,
				p.categoriaid,
				c.nombre as categoria,
				p.precio,
				p.ruta,
				p.stock
		FROM producto p 
		INNER JOIN categoria c
		ON p.categoriaid = c.idcategoria
		WHERE p.status != 0 AND p.idproducto = '{$this->intIdProducto}'";
		$stm = $this->con->prepare($sql);
		$stm->execute();
		$request = $stm->fetchAll(PDO::FETCH_ASSOC);
		if(!empty($request) && count($request) > 0){
			for($c=0; $c < count($request) ; $c++){
				$intIdProducto = $request[0]['idproducto'];
				$sqlImg = "SELECT img	FROM imagen	WHERE productoid = $intIdProducto";
				$arrImg = $this->con->prepare($sqlImg);
				$arrImg->execute();
				$arrImg = $arrImg->fetchAll(PDO::FETCH_ASSOC);
				if(count($arrImg) > 0){
					for ($i=0; $i < count($arrImg); $i++) { 
						$arrImg[$i]['url_image'] = media().'/images/uploads/'.$arrImg[$i]['img'];
					}
				}else{
					$arrImg[$c]['url_image'] = media().'/images/uploads/product.png';
				}
				$request[$c]['images'] = $arrImg;
			}
		}
		return $request;
	}
  // ------------- AGREGAR AL CARRITO (SESSION)
  public function addCarrito($addCarrito){
  	
  	echo "<pre>";
  	print_r($_GET);
  	echo "</pre>";


  	if($_POST){
			//unset($_SESSION['arrCarrito']);exit;
			$arrCarrito = array();
			$cantCarrito = 0;
			$idproducto = openssl_decrypt($_POST['id'], METHODENCRIPT, KEY);
			$cantidad = $_POST['cant'];
			if(is_numeric($idproducto) and is_numeric($cantidad)){
				$arrInfoProducto = $this->getProductoIDT($idproducto);
				if(!empty($arrInfoProducto)){
					$arrProducto = array('idproducto' => $idproducto,
										'producto' => $arrInfoProducto['nombre'],
										'cantidad' => $cantidad,
										'precio' => $arrInfoProducto['precio'],
										'imagen' => $arrInfoProducto['images'][0]['url_image']
									);
					if(isset($_SESSION['arrCarrito'])){
						$on = true;
						$arrCarrito = $_SESSION['arrCarrito'];
						for ($pr=0; $pr < count($arrCarrito); $pr++) {
							if($arrCarrito[$pr]['idproducto'] == $idproducto){
								$arrCarrito[$pr]['cantidad'] += $cantidad;
								$on = false;
							}
						}
						if($on){
							array_push($arrCarrito,$arrProducto);
						}
						$_SESSION['arrCarrito'] = $arrCarrito;
					}else{
						array_push($arrCarrito, $arrProducto);
						$_SESSION['arrCarrito'] = $arrCarrito;
					}

					foreach ($_SESSION['arrCarrito'] as $pro) {
						$cantCarrito += $pro['cantidad'];
					}
					$htmlCarrito ="";
					$htmlCarrito = getFile('Template/Modals/modalCarrito',$_SESSION['arrCarrito']);
					$arrResponse = array("status" => true, 
										"msg" => '¡Se agrego al corrito!',
										"cantCarrito" => $cantCarrito,
										"htmlCarrito" => $htmlCarrito
									);

				}else{
					$arrResponse = array("status" => false, "msg" => 'Producto no existente.');
				}
			}else{
				$arrResponse = array("status" => false, "msg" => 'Dato incorrecto.');
			}
			echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
		}
		die();
  }

}