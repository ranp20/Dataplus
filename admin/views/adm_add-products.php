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
	<title>Admin - Agregar Productos</title>
</head>
<body>
	<div id="dash-contT">
		<?php require_once 'includes/incadm_sidebar-left.php';?>
		<main id="main-dashAdm" class="main-dashAdm">
			<?php require_once 'includes/incadm_header-top.php';?>
			<div class="c-dashAdm">
				<div class="c-dashAdm__mn">
					<div class="c-dashAdm__mn__c">
						<div class="c-dashAdm__mn__c--cTitle">
							<h2 class="c-dashAdm__mn__c--cTitle--title">Agregar Productos</h2>
						</div>
						<div class="c-dashAdm__mn__c--cBdy">
							<div class="c-dashAdm__mn__c--cBdy__c">
								<div class="c-dashAdm__mn__c--cBdy__c--cardBdy">
									<div class="c-dashAdm__mn__c--cBdy__c--cardBdy__c">
										


									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
	</div>
	<script type="text/javascript" src="<?= $url;?>js/main.js"></script>
</body>
</html>