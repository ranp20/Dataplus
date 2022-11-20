<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
// CONFIGURACIÓN LOCALHOST
$urlAdmin =  $actual_link . "/Dataplus/admin/";
// CONFIGURACIÓN SERVIDOR
/*
$urlAdmin =  $actual_link . "/admin/";
*/
?>
<header id="h-dashAdm" class="h-dashAdm">
	<div class="h-dashAdm--c">
		<div id="icon-togglemenuMobile">
			<span></span>
			<span></span>
			<span></span>
		</div>
		<div class="h-dashAdm--c--cTitle">
			<h2>DATAPLUS - TIENDA VIRTUAL</h2>
		</div>
		<div class="h-dashAdm--c--cClock">
			<div class="h-dashAdm--c--cClock--timeclock" id="dash-timeclock-detail"></div>
		</div>
		<div class="h-dashAdm--c--cCBtnWebPage">
			<a href="../" class="h-dashAdm--c--cCBtnWebPage--link" target="_blank">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 1v17h24v-17h-24zm22 15h-20v-13h20v13zm-6.599 4l2.599 3h-12l2.599-3h6.802z"></path></svg>
			</a>
		</div>
		<div class="h-dashAdm--c--cUserMobile">
			<div class="h-dashAdm--c--cUserMobile--linkcont" id="btn-sessuserAdm">
				<img src="<?= $url;?>assets/img/utilities/user-pro-default.png" alt="">
				<span><?= $admname; ?></span>
			</div>
			<ul class="h-dashAdm--c--cUserMobile--m" id="list-opts-sessuser">
				<li class="h-dashAdm--c--cUserMobile--m--item">
					<a href="controllers/prcss_logout-adm.php" class="h-dashAdm--c--cUserMobile--m--link">CERRAR SESIÓN</a>
				</li>
			</ul>
		</div>
		<div class="h-dashAdm--c--cUserDesktop">
			<div class="h-dashAdm--c--cUserDesktop--linkcont" id="btn-sessuserAdm">
				<img src="<?= $url;?>assets/img/utilities/user-pro-default.png" alt="">
				<span><?= $admname; ?></span>
			</div>
			<ul class="h-dashAdm--c--cUserDesktop--m" id="list-opts-sessuser">
				<li class="h-dashAdm--c--cUserDesktop--m--item">
					<a href="logout-adm" class="h-dashAdm--c--cUserDesktop--m--link">CERRAR SESIÓN</a>
				</li>
			</ul>
		</div>
	</div>
</header>
<script type="text/javascript">
	function refreshTime(){
		let currentDate = new Date(),
				year = currentDate.getFullYear(),
				month = currentDate.getMonth(),
				day = parseInt(currentDate.toDateString().slice(8, -5)),
				weekday = currentDate.getDay(),
				hours = currentDate.getHours(),
				minutes = currentDate.getMinutes(),
				seconds = currentDate.getSeconds();

		const weekdays = ["Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado"];
		const months = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

		if(day < 10){
			day = "0" + day;
		}

		if(minutes < 10){
			minutes = "0" + minutes;
		}

		if(seconds < 10){
			seconds = "0" + seconds;
		}
		
		document.querySelector('#dash-timeclock-detail').textContent = weekdays[weekday] + ", " + 
																																day + " de " + 
																																months[month] + " del " + 
																																year + " - " + 
																																hours + " : " +
																																minutes + " : " +
																																seconds;
	}

	setInterval(refreshTime, 1000);
</script>