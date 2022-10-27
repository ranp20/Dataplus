<?php 
require_once("Libraries/Core/Mysql.php");
trait TTestimonials{
	private $con;

	public function getTestimonialsHome(){
		$this->con = new Mysql();
		$sql = "SELECT
							per.nombres as 'cli_name',
							per.apellidos as 'cli_lastname',
							per.photo as 'cli_photo',
							tbtest.testimony as 'text_text'
						FROM tbl_testimonials tbtest
							INNER JOIN persona per ON per.idpersona = tbtest.id_client
						ORDER BY tbtest.id DESC
						LIMIT 10";
		$request = $this->con->select_all($sql);
		if(count($request) > 0){
			for ($c=0; $c < count($request) ; $c++) { 
				$request[$c]['cli_photo'] = BASE_URL.'/Assets/images/uploads/'.$request[$c]['cli_photo'];		
			}
		}
		return $request;
	}
	
}

 ?>