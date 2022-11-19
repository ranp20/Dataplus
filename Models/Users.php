<?php
require_once 'db/ext_connection.php';
class Users extends Connection{

	private $table = "tbl_users";
  function __construct()
  {
    parent::__construct();
  }
	// -------------- VALIDAR EL USUARIO
  public function verify_email($email){
    try{
      $sql = "SELECT * FROM {$this->table} WHERE u_email = :email";
      $stm = $this->con->prepare($sql);
      $stm->bindValue(':email', $email);
      $stm->execute();
      return $stm->rowCount() > 0 ? 'true' : 'false';
    }catch(PDOEXception $e){
      return $e->getMessage();
    }
  }
  // -------------- AGREGAR USUARIO
  public function add($arr_userdata){
    try {
      $sql = "CALL sp_add_user(:_token, :u_firstname, :u_lastname, :u_email, :u_pass)";
      $stm = $this->con->prepare($sql);
      foreach ($arr_userdata as $key => $value){
        $stm->bindValue($key, $value);
      }
      $stm->execute();
      return $stm->rowCount() > 0 ? "true" : "false";
    } catch (PDOException $e) {
      return $e->getMessage();
    }
  }
  // -------------- LISTAR - USERS
  public function get_users($email){
    try{
      $sql = "SELECT * FROM {$this->table} WHERE u_email = :email";
      $stm = $this->con->prepare($sql);
      $stm->bindValue(':email', $email);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
      return $e->getMessage();
    }
  }
  // -------------- LISTAR USUARIO - PARA VALIDAR INICIO DE SESIÃ“N
  function get_usersverifylogin($email){
    try{
      $sql = "SELECT u_pass FROM {$this->table} WHERE u_email = :email";
      $stm = $this->con->prepare($sql);
      $stm->bindValue(':email', $email);
      $stm->execute();
      return $stm->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
      return $e->getMessage();
    }
  }
}