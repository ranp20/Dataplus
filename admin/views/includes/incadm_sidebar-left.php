<?php
$admname = $_SESSION['adm-logg_DATAPLUS']['adm_username'];
?>
<div class="nav-dashAdm">
	<nav class="nav-dashAdm--sidenav" id="nav-dashAdm">
		<div class="nav-dashAdm--sidenav--c">
			<span id="closebtnToggSideNav_icon">
		  	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" width="35px" height="35px"><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>
		  </span>
			<div class="nav-dashAdm--sidenav--c--cLogo">
				<img src="<?= $url;?>assets/img/logos/logo.png" alt="icon_preciodeldolar_adm" class="nav-dashAdm--sidenav--c--cLogo--img" width="100" height="100">
			</div>
			<div class="nav-dashAdm--sidenav--c--cUserInfo">
				<div class="nav-dashAdm--sidenav--c--cUserInfo--cAvatar">
					<img src="<?= $url;?>assets/img/utilities/user-pro-default.png" alt="icon_useradmin_adm" class="nav-dashAdm--sidenav--c--cUserInfo--cAvatar--img" width="100" height="100">
				</div>
				<div class="nav-dashAdm--sidenav--c--cUserInfo--cInfo">
					<h5 class="nav-dashAdm--sidenav--c--cUserInfo--cInfo--title"><?= $admname; ?></h5>
					<p class="nav-dashAdm--sidenav--c--cUserInfo--cInfo--desc">Administrador</p>
				</div>
			</div>
			<div class="nav-dashAdm--sidenav--c--cList">
				<ul class="nav-dashAdm--sidenav--c--cList--m">
					<li class="nav-dashAdm--sidenav--c--cList--m--i">
						<a href="productos" class="nav-dashAdm--sidenav--c--cList--m--link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m596.4 144.48c0-0.55859 0-1.1211-0.55859-2.2383v-0.55859c-0.55859-1.1211-0.55859-1.6797-1.1211-2.2383l-48.16-67.199c-7.2773-10.645-19.039-16.246-30.797-16.246h-320.32c-12.32 0-23.52 5.6016-30.801 15.68l-48.16 67.199c-0.55859 0.55859-1.1211 1.6797-1.1211 2.2383v0.55859c0 0.55859-0.55859 1.1211-0.55859 2.2383v0.55859 0.55859 329.28c0 19.039 15.68 34.719 34.719 34.719h411.6c19.039 0 34.719-15.68 34.719-34.719v-328.71-0.55859c0.55859-0.003907 0.55859-0.5625 0.55859-0.5625zm-80.637-66.082c5.0391 0 9.5195 2.2383 12.32 6.1602l35.281 49.84h-137.77l-16.238-56zm-210.56 68.883 19.602-68.883h61.602l19.598 68.883v91.84l-50.398-27.441-50.398 27.441zm-122.08-62.723c2.8008-3.9219 7.2812-6.1602 12.32-6.1602h105.84l-16.238 56h-137.2zm390.88 390.32c0 6.7188-5.6016 12.32-12.32 12.32h-412.16c-6.7188 0-12.32-5.5977-12.32-12.32v-318.08h145.6v90.16c0 6.1602 3.3594 11.762 8.3984 15.121 2.8008 1.6797 5.6016 2.2383 8.9609 2.2383 2.8008 0 5.6016-0.55859 8.3984-2.2383l47.039-25.762 47.039 25.762c5.6016 2.8008 11.762 2.8008 17.359-0.55859 5.6016-3.3594 8.3984-8.9609 8.3984-15.121l0.003907-89.602h145.6z"/><path d="m394.8 145.6c0-6.1602-5.0391-11.199-11.199-11.199l-56-0.003906c-6.1602 0-11.199 5.0391-11.199 11.199s5.0391 11.199 11.199 11.199h56c6.1602 0.003906 11.199-5.0352 11.199-11.195z"/></g></svg>
							<span>Productos</span>
						</a>
					</li>
					<li class="nav-dashAdm--sidenav--c--cList--m--i">
						<a href="categorias" class="nav-dashAdm--sidenav--c--cList--m--link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m126 28c-15.223 0-28 12.777-28 28v162.4c0 15.223 12.777 28 28 28h168c15.223 0 28-12.777 28-28v-162.4c0-15.223-12.777-28-28-28zm280 0c-15.219 0-28 12.762-28 28v162.4c0 15.207 12.777 28 28 28h168c15.223 0 28-12.777 28-28v-162.4c0-15.223-12.777-28-28-28h-168zm-274.4 33.602h156.8v151.2h-156.8zm280 0c53.672-0.003906 103.12 0 156.8 0v151.2h-156.8zm-285.6 252c-15.223 0-28 12.777-28 28v162.4c0 15.223 12.777 28 28 28h168c15.223 0 28-12.777 28-28v-162.4c0-15.223-12.777-28-28-28zm280 0c-15.223 0-28 12.777-28 28v162.4c0 15.223 12.777 28 28 28h168c15.223 0 28-12.777 28-28v-162.4c0-15.223-12.777-28-28-28zm-274.4 33.598h156.8v151.2h-156.8zm280 0h156.8v151.2h-156.8z"/></g></svg>
							<span>Categorías</span>
						</a>
					</li>
					<li class="nav-dashAdm--sidenav--c--cList--m--i">
						<a href="tarifas" class="nav-dashAdm--sidenav--c--cList--m--link">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35px" height="35px" version="1.1" viewBox="0 0 700 700"><g xmlns="http://www.w3.org/2000/svg"><path d="m167.81 444.05c4.543 0 8.8203-1.7695 12.047-4.9766l137.43-137.43 62.699 62.703c3.0781 3.0742 7.4688 4.8398 12.051 4.8398 4.5703 0 8.9531-1.7656 12.035-4.8398l170.21-170.24v33.621c0 9.3906 7.6445 17.035 17.035 17.035s17.031-7.6367 17.031-17.035l-0.003906-74.734c0-9.3906-7.6367-17.031-17.031-17.031h-74.734c-9.3906 0-17.035 7.6367-17.035 17.031 0 9.3906 7.6445 17.035 17.035 17.035h33.621l-158.18 158.18-62.691-62.691c-3.207-3.207-7.4883-4.9766-12.047-4.9766-4.5547 0.003906-8.832 1.7734-12.039 4.9766l-149.47 149.47c-3.2188 3.2266-4.9883 7.4922-4.9883 12.047 0 4.543 1.7734 8.8203 4.9883 12.047 3.2188 3.207 7.5 4.9766 12.039 4.9766z"/><path d="m607.62 520.84h-498.46v-498.46c0-9.2539-7.5273-16.777-16.777-16.777-9.2539 0-16.777 7.5234-16.777 16.777v515.25c0 9.25 7.5234 16.773 16.777 16.773h515.25c9.25 0 16.773-7.5234 16.773-16.777 0-9.25-7.5234-16.777-16.777-16.777z"/></g></svg>
							<span>Tarifas</span>
						</a>
					</li>
				</ul>
				<ul class="nav-dashAdm--sidenav--c--cList--mOthers">
					<li class="nav-dashAdm--sidenav--c--cList--mOthers--i">
						<a href="javascript:void(0);" class="nav-dashAdm--sidenav--c--cList--mOthers--link">
							<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="desktop" width="35px" height="35px" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-desktop fa-w-18 fa-3x"><path fill="currentColor" d="M528 0H48C21.5 0 0 21.5 0 48v288c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-6 336H54c-3.3 0-6-2.7-6-6V54c0-3.3 2.7-6 6-6h468c3.3 0 6 2.7 6 6v276c0 3.3-2.7 6-6 6zm-42 152c0 13.3-10.7 24-24 24H120c-13.3 0-24-10.7-24-24s10.7-24 24-24h98.7l18.6-55.8c1.6-4.9 6.2-8.2 11.4-8.2h78.7c5.2 0 9.8 3.3 11.4 8.2l18.6 55.8H456c13.3 0 24 10.7 24 24z" class=""></path></svg>
							<span>Ajustes del Home</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>