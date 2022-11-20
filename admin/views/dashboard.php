<?php
//COMPRIMIR ARCHIVOS DE TEXTO...
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
if(!isset($_SESSION['adm-logg_DATAPLUS'])){
	header("Location: ../admin");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once 'includes/incadm_header-links.php';?>
	<title>Admin - Dashboard</title>
</head>
<body>
	<div id="dash-contT">
		<?php require_once 'includes/incadm_sidebar-left.php';?>
		<main id="main-dashCamel">
			<?php require_once 'includes/incadm_header-top.php';?>
			<div class="cont-dashCamel">
				<h2>DASHBOARD</h2>
			</div>
		</main>
	</div>
	<script type="text/javascript" src="<?= $url;?>js/main.js"></script>
</body>
</html>