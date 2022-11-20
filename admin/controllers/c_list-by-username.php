<?php 
require_once '../../Models/db/ext_connection.php';
class Login_Adm extends Connection{
	function Login($arr_logiadm){
		try{
			$sql = "SELECT * FROM tbl_admin WHERE adm_email = :email LIMIT 1";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":email", $arr_logiadm);
			/*
			foreach($arr_logiadm as $key => $value){
				$stm->bindValue($key, $value);
			}
			*/
			$stm->execute();
			return $stm->rowCount() > 0 ? "true" : "false";
		}catch(PDOException $e){
			return $e->getMessage();
		}
	}
}