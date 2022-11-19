<?php 
require_once '../../Models/db/ext_connection.php';
class List_byIdAdmin extends Connection{
	function list($email){
		try{
			$sql = "SELECT * FROM tbl_admin WHERE adm_email = :email LIMIT 1";
			$stm = $this->con->prepare($sql);
			$stm->bindValue(":email", $email);
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_ASSOC);

		}catch(PDOException $err){
			return $err->getMessage();
		}
	}
}