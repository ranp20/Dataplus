<?php
$r = "";
if(isset($_POST) && count($_POST) > 0){
  if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST['u-log_email'])){
    $arr_reguser = [
      'u_email' => $_POST['u-log_email'],
      'u_password' => $_POST['u-log_password']
    ];
    require_once '../../Models/Users.php';
    $user = new Users();
    $verifyemail = $user->get_usersverifylogin($arr_reguser['u_email']);

    if($verifyemail != "" && count($verifyemail) > 0){
      if(password_verify($arr_reguser['u_password'], $verifyemail[0]['u_pass'])){
        $getdata = $user->get_users($arr_reguser['u_email']);

        if(count($getdata) > 0){
          session_start();
          $_SESSION['usr-logg_DATAPLUS'] = $getdata[0];

          $r = array(
            'r' => 'true',
            'received' => $getdata[0],
          );
        }else{
          $r = array(
            'r' => 'false',
          );
        }
      }else{
        $r = array(
          'r' => 'err_notequalpass',
        );
      }
    }else{
      $r = array(
        'r' => 'err_emailnotexist',
      );
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