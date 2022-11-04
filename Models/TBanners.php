<?php 
require_once("Libraries/Core/Mysql.php");
trait TBanners{
	private $con;

	public function getBannersHome(){
		$this->con = new Mysql();
		$sql = "SELECT photo, status FROM tbl_banners ORDER BY id DESC LIMIT 10";
		$request = $this->con->select_all($sql);
		if(count($request) > 0){
			for ($c=0; $c < count($request) ; $c++) { 
				$request[$c]['photo'] = BASE_URL.'/Assets/images/uploads/'.$request[$c]['photo'];		
			}
		}
		return $request;
	}
	
}

 ?>