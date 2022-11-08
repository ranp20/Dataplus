<!DOCTYPE html>
<html lang="es">
<head>
  <!-- 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Abel OSH">
  <meta name="theme-color" content="#2271b3">
  <link rel="shortcut icon" href="<?= media();?>/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="<?= media();?>/css/styles.min.css">
 -->
  <?php require_once './views/Template/inc-header-links_home.php';?>
  <title><?= $data['page_tag']; ?></title>
</head>
<body>
  <!-- SIMPLE HEADERTOP -->
  <section class="c-hTop_header" id="c-hTop_header">
    <div class="c-hTop_header__c">
      <div class="c-hTop_header__c__cont container">
        <div class="c-hTop_header__c__cont__cLogo lh-login">
          <a class="c-hTop_header__c__cont__cLogo__cLink my-0 mx-auto" href="./">
            <span class="c-hTop_header__c__cont__cLogo__cLink__ctLogo">
              <img src="<?= media();?>/images/logo/logo.png" alt="c-sitelogo_dataplus" width="100" height="100" class="img-fluid">
            </span>            
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="c-mHmLogin_main">
    <div class="c-mHmLogin_main__c container">
      <div class="c-mHmLogin_main__c__cont">
        <div class="c-mHmLogin_main__c__cont__ct">
          <div class="c-mHmLogin_main__c__cont__ct__cCont" id="register-form-container">
            <form method="POST" id="id_login">
              <h1 class="title_original" style="font-size: 27px;">Regístrate</h1>
              <div class="fieldset">
                <ul class="form-list">
                  <div class="separator-line">
                    <span class="txt">O registrate con tu email</span>
                    <span class="line"></span>
                  </div>
                  <li class="fields">
                    <h4 id="invalid-captcha" class="error_msg">Invalid Captcha</h4>
                    <div class="customer-name">
                      <div class="field name-firstname">
                        <label for="firstname" class="required">Nombre:</label>
                        <div class="input-box">
                          <input type="text" placeholder="Nombre" id="firstname" name="firstname" value="" title="Nombre" maxlength="255" class="input-text required-entry focus_nofirstname">
                        </div>
                        <div class="clear"></div>
                        <p id="firstname" class="error_msg nofirstname">Nombre Requerido</p>
                      </div>
                      <div class="field name-lastname">
                        <label for="lastname" class="required">Apellido:</label>
                        <div class="input-box">
                          <input type="text" id="lastname" placeholder="Apellido" name="lastname" value="" title="Apellido" maxlength="255" class="input-text required-entry focus_nolastname">
                        </div>
                        <div class="clear"></div>
                        <p id="lastname" class="error_msg nolastname">Apellido Requerido</p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="fieldset">
                <ul class="form-list">
                  <li class="fields">
                    <div class="field">
                      <label for="email_address_register" class="required">E-mail:</label>
                      <div class="input-box">
                        <input type="email" maxlength="255" placeholder="Tu dirección de E-mail" name="email" id="email_address_register" value="" title="E-mail" class="input-text validate-email required-entry show_placeholder focus_wrongemail">
                      </div>
                      <div class="clear"></div>
                      <p id="email_address_incorrecto" class="error_msg wrongemail">E-mail Incorrecto</p>
                      <p id="email_address_existente" class="error_msg">Este e-mail ya existe</p>
                    </div>
                  </li>
                  <li class="fields">
                    <div class="field">
                      <label for="password-reg" class="required">Contraseña:</label>
                      <div class="input-boxno-margin">
                        <input type="password" placeholder="Contraseña para tiendamia" name="password" id="password-reg" title="Contraseña" class="input-text required-entry show notxt focus_shortpassword focus_dirtypassword focus_longpassword">
                        <span id="show_password" class="show_password" onclick="changeType()">Mostrar</span>
                      </div>
                      <div class="clear"></div>
                    </div>
                    <div class="field">
                      <div class="password_hint">
                        <span class="caption">La contraseña debe tener al menos 6 caracteres.</span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="buttons-set">
                <button type="button" title="Enviar" id="register-button" class="button-register"><span><span>Regístrate</span></span></button>
              </div>
              <p class="txt-policy-p_terms">Tiendamia está protegida por reCAPTCHA y se aplican la <a href="https://policies.google.com/privacy">Política de Privacidad</a> y los <a href="https://policies.google.com/terms">Términos de Servicio de Google</a>
              </p>
              <div class="already-registered separator-line">
                <span class="txt">¿Ya tienes una cuenta?</span>
                <span class="line"></span>
              </div>
              <div class="new-users-wrapper">
                <div class="new-users">
                  <div class="content">
                  <div class="buttons-set">
                    <button type="button" title="Ingresar" class="button-login"><span><span>Ingresar</span></span></button>
                  </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="c-mHmLogin_main__c__cont__ct__cCont active" id="login-form-container">
            <form method="POST" id="id_register">
              <h1>Ingresar</h1>
              <div class="fieldset">
                <ul class="form-list">
                  <li class="fields">
                    <div class="field">
                      <label for="cvl-log_email_login" class="required">E-mail:</label>
                      <div class="input-box">
                        <input type="email" placeholder="Tu dirección de E-mail" name="email" id="cvl-log_email_login" value="" title="E-mail" class="input-text validate-email required-entry show_placeholder">
                      </div>
                      <div class="clear"></div>
                      <p id="email_address_incorrecto" class="error_msg wrongemail">E-mail Incorrecto</p>
                      <p id="email_address_existente" class="error_msg">Este e-mail ya existe</p>
                    </div>
                  </li>
                  <li class="fields">
                    <div class="field">
                      <label for="cvl-log_password" class="required">Contraseña:</label>
                      <div class="input-box">
                        <input type="password" placeholder="Contraseña" name="password" id="cvl-log_password" title="Contraseña" class="input-text required-entry show notxt showpasswords">
                        <span id="show_password" class="show_passwords">Mostrar</span>
                      </div>
                      <div class="clear"></div>
                      <p id="password-fail-msg" class="error_msg shortpassword longpassword">Email y contraseña no coinciden.</p>
                      <a href="javascript:void(0);" style="color:#0078c2;font-size: 12px;" class="f-right">¿Olvidaste tu contraseña?</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="buttons-set">
                <button type="button" title="Enviar" id="login-button" class="button-register"><span><span>Ingresar</span></span></button>
              </div>
              <div class="separator-line">
                <span class="txt">o</span>
                <span class="line"></span>
              </div>
              <p class="txt-policy-p_terms">Tiendamia está protegida por reCAPTCHA y se aplican la <a href="https://policies.google.com/privacy">Política de Privacidad</a> y los <a href="https://policies.google.com/terms">Términos de Servicio de Google</a>.</p>
              <div class="already-registered separator-line">
                <span class="txt">¿No tienes una cuenta?</span>
                <span class="line"></span>
              </div>
              <div class="new-users-wrapper">
                <div class="new-users">
                  <div class="content">
                    <div class="buttons-set">
                      <button type="button" title="Regístrate" class="button-login"><span><span>Regístrate</span></span></button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="correo-seguro">
            <span class="title">Guardamos tu correo electrónico de manera 100% segura para:</span>
            <ul>
              <li>Identificar tu perfil</li>
              <li>Notificar sobre los estados de tu compra</li>
              <li>Guardar el historial de compras</li>
              <li>Facilitar el proceso de compra</li>
            </ul>
            <div class="clear"></div>
          </div>
          <p class="terminos-condiciones">Al registrarte estás aceptando nuestros <a href="/terminos-y-condiciones">Términos y Condiciones</a><br>y nuestras <a href="javascript:void(0);">Políticas de Privacidad</a>
          </p>
        </div>
      </div>
    </div>
  </section>



  <!-- 
  <section class="material-half-bg">
    <div class="cover"></div>
  </section>
  <section class="login-content">
    <div class="logo">
      <h1><?= $data['page_title']; ?></h1>
    </div>
    <div class="login-box">
      <div id="divLoading" >
        <div>
          <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
      </div>
      <form class="login-form" name="formLogin" id="formLogin" action="">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3>
        <div class="form-group">
          <label class="control-label">USUARIO</label>
          <input id="txtEmail" name="txtEmail" class="form-control" type="email" placeholder="Email" autofocus>
        </div>
        <div class="form-group">
          <label class="control-label">CONTRASEÑA</label>
          <input id="txtPassword" name="txtPassword" class="form-control" type="password" placeholder="Contraseña">
        </div>
        <div class="form-group">
          <div class="utility">
            <p class="semibold-text mb-2"><a href="javascript:void(0);" data-toggle="flip">¿Olvidaste tu contraseña?</a></p>
          </div>
        </div>
        <div id="alertLogin" class="text-center"></div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
        </div>
      </form>
      <form id="formRecetPass" name="formRecetPass" class="forget-form" action="">
        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>¿Olvidaste contraseña?</h3>
        <div class="form-group">
          <label class="control-label">EMAIL</label>
          <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="Email">
        </div>
        <div class="form-group btn-container">
          <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
        </div>
        <div class="form-group mt-3">
          <p class="semibold-text mb-0"><a href="javascript:void(0);" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
        </div>
      </form>
    </div>
  </section>
  -->
  <script>
    const base_url = "<?= base_url(); ?>";
  </script>
  <script src="<?= media(); ?>/js/popper.min.js"></script>
  <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
  <script src="<?= media(); ?>/js/fontawesome.js"></script>
  <script src="<?= media(); ?>/js/main.js"></script>
  <!-- The javascript plugin to display page loading on top-->
  <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
  <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
  <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
  <script type="text/javascript" src="<?= media();?>/js/actions/inc-login.js"></script>
</body>
</html>