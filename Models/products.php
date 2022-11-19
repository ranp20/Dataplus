<?php
require_once 'db/ext_connection.php';
// require_once 'Config/Config.php';
// require_once 'Helpers/Helpers-2.php';
class Products extends Connection{
	private $table = "producto";
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
			return $request;
  	}catch(PDOException $e){
  		return $e->getMessage();
  	}
  }

}