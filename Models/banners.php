<?php
require_once 'db/ext_connection.php';
// require_once 'Config/Config.php';
// require_once 'Helpers/Helpers-2.php';
class Banners extends Connection{
	private $table = "tbl_banners";
  function __construct()
  {
    parent::__construct();
  }
  // ------------- LISTAR LAS CATEGORÍAS DE LA 1ERA LÍNEA - HOME
  public function listBanners_init(){
  	try{
			$sql = "SELECT photo, status FROM {$this->table} ORDER BY id DESC LIMIT 10";
			$stm = $this->con->prepare($sql);
			$stm->execute();
			$request = $stm->fetchAll(PDO::FETCH_ASSOC);
			if(count($request) > 0){
				for ($c=0; $c < count($request) ; $c++) { 
					$request[$c]['photo'] = BASE_URL.'/Assets/images/banners_home/'.$request[$c]['photo'];		
				}
			}
			return $request;
  	}catch(PDOException $e){
  		return $e->getMessage();
  	}
  }

}