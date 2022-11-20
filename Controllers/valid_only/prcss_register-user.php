<?php
$r = "";
if(isset($_POST) && count($_POST) > 0){
  if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST['u-reg_email'])){

    require_once '../../Models/Users.php';
    $user       = new Users();
    $verifymail = $user->verify_email($_POST['u-reg_email']);
    
    if($verifymail == "true"){
      $r = array(
        'r' => 'equals',
      );
    }else{
      $_token       = md5($_POST['u-reg_email'] . $_POST['u-reg_password']);
      $pass         = password_hash($_POST['u-reg_password'], PASSWORD_BCRYPT, array('cost' => 13));
      $arr_userdata = [
        '_token'   => $_token,
        'u_firstname' => $_POST['u-reg_firstname'],
        'u_lastname' => $_POST['u-reg_lastname'],
        'u_email' => $_POST['u-reg_email'],
        'u_pass' => $pass,
      ];
      $validate = $user->add($arr_userdata);
      
      if($validate == "true"){

        $getdata = $user->get_users($arr_userdata['u_email']);

        if(count($getdata) > 0){
          session_start();
          $_SESSION['usr-logg_DATAPLUS'] = $getdata[0];
          $r = array(
            'r' => 'true',
            'received' => $getdata[0],
          );
        }else{
          $r = array(
            'r' => 'err_insert',
          );
        }
      }else{
        $r = array(
          'r' => 'err_insert',
        );
      }
    }
  }else{
    $r = array(
      'r' => 'err_email',
    );
  }
}else{
  $r = array(
    'r' => 'false',
  );
}
die(json_encode($r));