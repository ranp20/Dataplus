<?php
require_once 'db/ext_connection.php';
// require_once 'Config/Config.php';
// require_once 'Helpers/Helpers-2.php';
class Testimonials extends Connection{
	private $table = "tbl_testimonials";
  function __construct()
  {
    parent::__construct();
  }
  // ------------- LISTAR LAS CATEGORÍAS DE LA 1ERA LÍNEA - HOME
  public function listTestimonials(){
  	try{
			$sql = "SELECT
				per.nombres as 'cli_name',
				per.apellidos as 'cli_lastname',
				per.photo as 'cli_photo',
				tbtest.testimony as 'text_text'
			FROM {$this->table} tbtest
				INNER JOIN persona per ON per.idpersona = tbtest.id_client
			ORDER BY tbtest.id DESC
			LIMIT 10";
			$stm = $this->con->prepare($sql);
			$stm->execute();
			$request = $stm->fetchAll(PDO::FETCH_ASSOC);
			if(count($request) > 0){
				for ($c=0; $c < count($request) ; $c++) { 
					$request[$c]['cli_photo'] = BASE_URL.'/Assets/images/uploads/'.$request[$c]['cli_photo'];		
				}
			}
			return $request;
  	}catch(PDOException $e){
  		return $e->getMessage();
  	}
  }

}