<?php
require_once 'db/ext_connection.php';
// require_once 'Config/Config.php';
// require_once 'Helpers/Helpers-2.php';
class Categories extends Connection{
	private $table = "categoria";
	// private $table = "tbl_categories";
  function __construct()
  {
    parent::__construct();
  }
  // ------------- LISTAR LAS CATEGORÍAS DE LA 1ERA LÍNEA - HOME
  public function listCategs_1line(){
  	try{
			$sql = "SELECT idcategoria, nombre, descripcion, portada, ruta, position FROM {$this->table}";
			$stm = $this->con->prepare($sql);
			$stm->execute();
			$request = $stm->fetchAll(PDO::FETCH_ASSOC);
			if(count($request) > 0){
				for ($c=0; $c < count($request) ; $c++) { 
					$request[$c]['portada'] = BASE_URL.'/Assets/images/uploads/'.$request[$c]['portada'];		
				}
			}
			return $request;
  	}catch(PDOException $e){
  		return $e->getMessage();
  	}
  }

}