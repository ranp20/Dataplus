<!DOCTYPE html>
<html lang="es">
<head>
  <?php require_once './Views/Template/inc-header-links_home.php';?>
  <title><?= $data['page_tag']; ?></title>
  <!-- PLUGINS AND ASSETS - HOME -->
  <!-- INCLUIR SWEET ALERT 2 -->
  <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script type="text/javascript" src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
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
            <form method="POST" id="id_register">
              <h1 class="title_original">Regístrate</h1>
              <div class="fieldset">
                <ul class="form-list">
                  <div class="separator-line">
                    <span class="txt">O registrate con tu email</span>
                    <span class="line"></span>
                  </div>
                  <li class="fields">
                    <div class="customer-name">
                      <div class="field name-firstname">
                        <label for="firstname" class="required">Nombre:</label>
                        <div class="input-box">
                          <input type="text" placeholder="Nombre" id="firstname" name="u-reg_firstname" value="" title="Nombre" maxlength="255" class="input-text" required>
                        </div>
                        <p id="firstname" class="error_msg nofirstname">Nombre Requerido</p>
                      </div>
                      <div class="field name-lastname">
                        <label for="lastname" class="required">Apellido:</label>
                        <div class="input-box">
                          <input type="text" id="lastname" placeholder="Apellido" name="u-reg_lastname" value="" title="Apellido" maxlength="255" class="input-text" required>
                        </div>
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
                        <input type="email" maxlength="255" placeholder="Tu dirección de E-mail" name="u-reg_email" id="email_address_register" value="" title="E-mail" class="input-text" required>
                      </div>
                      <p id="email_address_incorrecto" class="error_msg notregemail">E-mail Requerido</p>
                    </div>
                  </li>
                  <li class="fields">
                    <div class="field">
                      <label for="password-reg" class="required">Contraseña:</label>
                      <div class="input-box">
                        <input type="password" placeholder="Contraseña para Dataplus" name="u-reg_password" minlength="6" id="password-reg" title="Contraseña" class="input-text" required>
                        <span id="show_reg-password" class="show_passwords">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cAccount__cont--fAccount--form--controls--cIcon--pass"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"></path></svg>
                        </span>
                      </div>
                      <p id="pass_validation" class="error_msg dtplspassword">Contraseña requerida</p>
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
                <button type="submit" title="Registrarse" id="register-button" class="button-register">
                  <span>Regístrate</span>
                </button>
              </div>
              <p class="txt-policy-p_terms">Tiendamia está protegida por reCAPTCHA y se aplican la <a href="https://policies.google.com/privacy" target="_blank">Política de Privacidad</a> y los <a href="https://policies.google.com/terms" target="_blank">Términos de Servicio de Google</a>
              </p>
              <div class="already-registered separator-line">
                <span class="txt">¿Ya tienes una cuenta?</span>
                <span class="line"></span>
              </div>
              <div class="new-users-wrapper">
                <div class="new-users">
                  <div class="content">
                  <div class="buttons-set">
                    <a href="javascript:void(0);" title="Ingresar" class="button-login">
                      <span>Ingresar</span>
                    </a>
                  </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
          <div class="c-mHmLogin_main__c__cont__ct__cCont active" id="login-form-container">
            <form method="POST" id="id_login">
              <h1>Ingresar</h1>
              <div class="fieldset">
                <ul class="form-list">
                  <li class="fields">
                    <div class="field">
                      <label for="cvl-log_email_login" class="required">E-mail:</label>
                      <div class="input-box">
                        <input type="email" placeholder="Tu dirección de E-mail" name="email" id="cvl-log_email_login" value="" title="E-mail" class="input-text validate-email required-entry show_placeholder">
                      </div>
                      <p id="email_address_incorrecto" class="error_msg wrongemail">E-mail Incorrecto</p>
                      <p id="email_address_existente" class="error_msg">Este e-mail ya existe</p>
                    </div>
                  </li>
                  <li class="fields">
                    <div class="field">
                      <label for="cvl-log_password" class="required">Contraseña:</label>
                      <div class="input-box">
                        <input type="password" placeholder="Contraseña" name="password" id="cvl-log_password" title="Contraseña" class="input-text required-entry show notxt showpasswords">
                        <span id="show_password" class="show_passwords">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cAccount__cont--fAccount--form--controls--cIcon--pass"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"></path></svg>
                        </span>
                      </div>
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
                      <button type="button" title="Regístrate" class="button-login">
                        <span>Regístrate</span>
                      </button>
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
          </div>
          <p class="terminos-condiciones">Al registrarte estás aceptando nuestros <a href="javascript:void(0);">Términos y Condiciones</a><br>y nuestras <a href="javascript:void(0);">Políticas de Privacidad</a>
          </p>
        </div>
      </div>
    </div>
  </section>
  <script type="text/javascript" src="<?= media();?>/js/actions/inc-login.js"></script>
</body>
</html>