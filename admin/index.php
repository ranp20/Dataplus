<?php 
//COMPRIMIR ARCHIVOS DE TEXTO...
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
if(isset($_SESSION['adm-logg_DATAPLUS'])){
	header("Location: dashboard");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Dataplus | Login Admin</title>
	<?php require_once 'views/includes/incadm_header-links.php';?>
</head>
<body class="c_body-loginAdm">
	<div class="cLoginAdm">
		<div id="cMessage-user"></div>
		<div class="cLoginAdm__cont">
			<div class="cLoginAdm__cont--fLogin box-small">
				<div class="cLoginAdm__cont--fLogin--cLogo">
					<img src="<?= $url;?>assets/resources/images/logo/logo.png" alt="logoLogin_Memopay" width="100" height="100" decoding="async">
				</div>
				<div class="cLoginAdm__cont--fLogin--cTitle">
					<h2 class="cLoginAdm__cont--fLogin--cTitle--title">INICIAR SESIÓN</h2>
				</div>
				<form method="POST" class="cLoginAdm__cont--fLogin--form" id="logg-cPlatformAdm">
					<div class="cLoginAdm__cont--fLogin--form--cControl">
						<div class="cLoginAdm__cont--fLogin--form--cControl--cIcon">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cLoginAdm__cont--fLogin--form--cControl--cIcon--email"><path d="M0 3v18h24v-18h-24zm21.518 2l-9.518 7.713-9.518-7.713h19.036zm-19.518 14v-11.817l10 8.104 10-8.104v11.817h-20z"/></svg>
						</div>
						<?php
							$tmp_email = "";
							if(count($_COOKIE) > 0){
								if(isset($_COOKIE['dataplus_adm-email'])){
									$tmp_email = "<input type='email' name='adm-logg_email' id='adm-logg_email' class='cLoginAdm__cont--fLogin--form--cControl--input_chkset' placeholder='Correo electrónico' maxlength='200' required autocomplete='off' spellcheck='false' value='". json_decode($_COOKIE['dataplus_adm-email'], true) ."'>";
								}else{
									$tmp_email = "<input type='email' name='adm-logg_email' id='adm-logg_email' class='cLoginAdm__cont--fLogin--form--cControl--input' placeholder='Correo electrónico' maxlength='200' required autocomplete='off' spellcheck='false'>";
								}
							}else{
								$tmp_email = "<input type='email' name='adm-logg_email' id='adm-logg_email' class='cLoginAdm__cont--fLogin--form--cControl--input' placeholder='Correo electrónico' maxlength='200' required autocomplete='off' spellcheck='false'>";
							}
							echo $tmp_email;
						?>
					</div>
					<div class="cLoginAdm__cont--fLogin--form--cControl">
						<div class="cLoginAdm__cont--fLogin--form--cControl--cIcon" id="icon-showPassAdm">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cLoginAdm__cont--fLogin--form--cControl--cIcon--pass"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"/></svg>
						</div>
						<?php
							$tmp_pass = "";
							if(count($_COOKIE) > 0){
								if(isset($_COOKIE['dataplus_adm-pass'])){
									$tmp_pass = "<input type='password' name='adm-logg_pass' id='adm-logg_pass' class='cLoginAdm__cont--fLogin--form--cControl--input_chkset' placeholder='Contraseña' maxlength='200' required autocomplete='off' spellcheck='false' value='". json_decode($_COOKIE['dataplus_adm-pass'], true) ."'>";
								}else{
									$tmp_pass = "<input type='password' name='adm-logg_pass' id='adm-logg_pass' class='cLoginAdm__cont--fLogin--form--cControl--input' placeholder='Contraseña' maxlength='200' required autocomplete='off' spellcheck='false'>";
								}
							}else{
								$tmp_pass = "<input type='password' name='adm-logg_pass' id='adm-logg_pass' class='cLoginAdm__cont--fLogin--form--cControl--input' placeholder='Contraseña' maxlength='200' required autocomplete='off' spellcheck='false'>";
							}
							echo $tmp_pass;
						?>
					</div>
					<?php
						$tmp_chkrempass = "";
						if(count($_COOKIE) > 0){
							if(isset($_COOKIE['dataplus_adm-email']) && isset($_COOKIE['dataplus_adm-pass'])){
								$tmp_chkrempass = "";
							}else{
								$tmp_chkrempass = "
									<div class='cLoginAdm__cont--fLogin--form--cControl flx-justify-end'>
										<div class='cLoginAdm__cont--fLogin--form--cControl--cSpanText'>
											<span>Recordar contraseña</span>
										</div>
										<div class='cLoginAdm__cont--fLogin--form--cControl--cIptChk'>
											<input type='checkbox' name='remem-adm-logg_pass' id='remem-adm-logg_pass' class='cLoginAdm__cont--fLogin--form--cControl--cIptChk--input' placeholder='Recordar contraseña'>											
											<label for='remem-adm-logg_pass' class='cLoginAdm__cont--fLogin--form--cControl--cIptChk--cLabeltext'>
											</label>
										</div>
									</div>
								";
							}
						}else{
							$tmp_chkrempass = "
								<div class='cLoginAdm__cont--fLogin--form--cControl flx-justify-end'>
									<div class='cLoginAdm__cont--fLogin--form--cControl--cSpanText'>
										<span>Recordar contraseña</span>
									</div>
									<div class='cLoginAdm__cont--fLogin--form--cControl--cIptChk'>
										<input type='checkbox' name='remem-adm-logg_pass' id='remem-adm-logg_pass' class='cLoginAdm__cont--fLogin--form--cControl--cIptChk--input' placeholder='Recordar contraseña'>											
										<label for='remem-adm-logg_pass' class='cLoginAdm__cont--fLogin--form--cControl--cIptChk--cLabeltext'>
										</label>
									</div>
								</div>
							";
						}
						echo $tmp_chkrempass;
					?>
					<div class="cLoginAdm__cont--fLogin--form--cBtnsActions">
						<!-- <a href="javascript:void(0);" class="cLoginAdm__cont--fLogin--form--cBtnsActions--recovPass">¿Olvidaste tu contraseña?</a> -->
						<button class="cLoginAdm__cont--fLogin--form--cBtnsActions--btnLogin" type="submit">Ingresar</button>
					</div>
				</form>
				<div class="cLoginAdm__cont--fLogin--cBottInfo">
					<small class="cLoginAdm__cont--fLogin--cBottInfo--desc">
						<span>©</span>
						<span>2021 - <?php echo date("Y"); ?></span>
						<span>&nbsp;-&nbsp;</span>
						<span>Versión 1.0</span>
					</small>
				</div>
			</div>
			<div class="cLoginAdm__cont--imgbanner">
				<div class="img-backdrop-dark"></div>
				<img src="<?= $url; ?>assets/img/utilities/wallpaper_cambista.jpg" alt="banner_login-adm" width="100" height="100">
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?= $url;?>js/actions/adm-login.js"></script>
</body>
</html>