<?php
$r = "";
if(isset($_POST) && count($_POST) > 0){
  if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST['adm-logg_email'])){
    $arr_logiadm = [
      "adm_email" => (isset($_POST['adm-logg_email']) && $_POST['adm-logg_email'] != "") ? $_POST['adm-logg_email'] : "",
      "adm_pass" => (isset($_POST['adm-logg_pass']) && $_POST['adm-logg_pass'] != "") ? $_POST['adm-logg_pass'] : ""
    ];
    $chkrempass = (isset($_POST['adm-remem-pass'])) ? $_POST['adm-remem-pass'] : "";
    require_once 'c_list-by-username.php';
    $tUser  = new Login_Adm();
    $verify = $tUser->Login($arr_logiadm['adm_email']);

    if(!empty($verify) && $verify == "true"){
      require_once 'c_list-by-admin-verify.php';
      $emailadm = $arr_logiadm['adm_email'];
      $user       = new List_byIdAdmin();
      $getbyemail = $user->list($emailadm);

      if(isset($_COOKIE['dataplus_adm-pass'])){
        // $pass_save = substr($_COOKIE['dataplus_adm-pass'], 1, -1);
        if($arr_logiadm['adm_pass'] == $getbyemail[0]['adm_pass']){
          session_start();
          $_SESSION['adm-logg_DATAPLUS'] = $getbyemail[0];
          $r = array(
            'r' => 'true',
            'rdata' => $getbyemail[0],
          );
        }else{
          $r = array(
            'r' => 'not-match',
          );
        }
      }else{
        if(count($getbyemail) > 0){
          if($chkrempass == "on"){
            if(password_verify($arr_logiadm['adm_pass'], $getbyemail[0]['adm_pass'])){
              session_start();
              $_SESSION['adm-logg_DATAPLUS'] = $getbyemail[0];

              $resadm_email = $getbyemail[0]['adm_username'];
              $resadm_pass  = $getbyemail[0]['adm_pass'];

              // CREAR COOKIES
              $cookie_expiration_time = time() + (10 * 365 * 24 * 60 * 60); // COOKIE EXPIRA EN 10 AÑOS
              if(count($_COOKIE) > 0){
                setcookie("dataplus_adm-email", json_encode($resadm_email), $cookie_expiration_time, '/', '', true, true);
                setcookie("dataplus_adm-pass", json_encode($resadm_pass), $cookie_expiration_time, '/', '', true, true);
              }else{
                //echo "Cookies NO soportadas";
              }

              $r = array(
                'r' => 'true',
                'rdata' => $getbyemail[0],
              );
            }else{
              $r = array(
                'r' => 'not-match',
              );
            }
          }else{
            if(password_verify($arr_logiadm['adm_pass'], $getbyemail[0]['adm_pass'])){
              session_start();
              $_SESSION['adm-logg_DATAPLUS'] = $getbyemail[0];
              $r = array(
                'r' => 'true',
                'rdata' => $getbyemail[0],
              );
            }else{
              $r = array(
                'r' => 'not-match',
              );
            }
          }
        }else{
          $r = array(
            'r' => 'false',
          );
        }
      }

    }else{
      $r = array(
        'r' => 'false',
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