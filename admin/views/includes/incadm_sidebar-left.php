<?php
$admname = $_SESSION['adm-logg_DATAPLUS']['adm_username'];
?>
<div class="nav-dashCamel">
	<nav class="nav-dashCamel--sidenav" id="nav-dashCamel">
		<div class="nav-dashCamel--sidenav--c">
			<span id="closebtnToggSideNav_icon">
		  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="35px" height="35px"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
		  </span>
			<div class="nav-dashCamel--sidenav--c--cLogo">
				<img src="<?= $url;?>assets/img/logos/logo-negro.svg" alt="icon_preciodeldolar_adm" class="nav-dashCamel--sidenav--c--cLogo--img" width="100" height="100">
			</div>
			<div class="nav-dashCamel--sidenav--c--cUserInfo">
				<div class="nav-dashCamel--sidenav--c--cUserInfo--cAvatar">
					<img src="<?= $url;?>assets/img/utilities/user-pro-default.png" alt="icon_useradmin_adm" class="nav-dashCamel--sidenav--c--cUserInfo--cAvatar--img" width="100" height="100">
				</div>
				<div class="nav-dashCamel--sidenav--c--cUserInfo--cInfo">
					<h3 class="nav-dashCamel--sidenav--c--cUserInfo--cInfo--title"><?= $admname; ?></h3>
					<p class="nav-dashCamel--sidenav--c--cUserInfo--cInfo--desc">Administrador</p>
				</div>
			</div>
			<div class="nav-dashCamel--sidenav--c--cList">
				<ul class="nav-dashCamel--sidenav--c--cList--m">
					<li class="nav-dashCamel--sidenav--c--cList--m--item">
						<a href="javascript:void(0);" class="nav-dashCamel--sidenav--c--cList--m--link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m596.4 144.48c0-0.55859 0-1.1211-0.55859-2.2383v-0.55859c-0.55859-1.1211-0.55859-1.6797-1.1211-2.2383l-48.16-67.199c-7.2773-10.645-19.039-16.246-30.797-16.246h-320.32c-12.32 0-23.52 5.6016-30.801 15.68l-48.16 67.199c-0.55859 0.55859-1.1211 1.6797-1.1211 2.2383v0.55859c0 0.55859-0.55859 1.1211-0.55859 2.2383v0.55859 0.55859 329.28c0 19.039 15.68 34.719 34.719 34.719h411.6c19.039 0 34.719-15.68 34.719-34.719v-328.71-0.55859c0.55859-0.003907 0.55859-0.5625 0.55859-0.5625zm-80.637-66.082c5.0391 0 9.5195 2.2383 12.32 6.1602l35.281 49.84h-137.77l-16.238-56zm-210.56 68.883 19.602-68.883h61.602l19.598 68.883v91.84l-50.398-27.441-50.398 27.441zm-122.08-62.723c2.8008-3.9219 7.2812-6.1602 12.32-6.1602h105.84l-16.238 56h-137.2zm390.88 390.32c0 6.7188-5.6016 12.32-12.32 12.32h-412.16c-6.7188 0-12.32-5.5977-12.32-12.32v-318.08h145.6v90.16c0 6.1602 3.3594 11.762 8.3984 15.121 2.8008 1.6797 5.6016 2.2383 8.9609 2.2383 2.8008 0 5.6016-0.55859 8.3984-2.2383l47.039-25.762 47.039 25.762c5.6016 2.8008 11.762 2.8008 17.359-0.55859 5.6016-3.3594 8.3984-8.9609 8.3984-15.121l0.003907-89.602h145.6z"/><path d="m394.8 145.6c0-6.1602-5.0391-11.199-11.199-11.199l-56-0.003906c-6.1602 0-11.199 5.0391-11.199 11.199s5.0391 11.199 11.199 11.199h56c6.1602 0.003906 11.199-5.0352 11.199-11.195z"/></g></svg>
							<span>Productos</span>
						</a>
					</li>
				</ul>
				<ul class="nav-dashCamel--sidenav--c--cList--mOthers">
					<li class="nav-dashCamel--sidenav--c--cList--mOthers--item">
						<a href="javascript:void(0);" class="nav-dashCamel--sidenav--c--cList--mOthers--link">
							<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="desktop" width="35px" height="35px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-desktop fa-w-18 fa-3x"><path fill="currentColor" d="M528 0H48C21.5 0 0 21.5 0 48v288c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-6 336H54c-3.3 0-6-2.7-6-6V54c0-3.3 2.7-6 6-6h468c3.3 0 6 2.7 6 6v276c0 3.3-2.7 6-6 6zm-42 152c0 13.3-10.7 24-24 24H120c-13.3 0-24-10.7-24-24s10.7-24 24-24h98.7l18.6-55.8c1.6-4.9 6.2-8.2 11.4-8.2h78.7c5.2 0 9.8 3.3 11.4 8.2l18.6 55.8H456c13.3 0 24 10.7 24 24z" class=""></path></svg>
							<span>Ajustes del Home</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>