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
	<title>Admin - Tarifas</title>
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
							<h2 class="c-dashAdm__mn__c--cTitle--title">Tarifas</h2>
						</div>
						<div class="c-dashAdm__mn__c--cBdy">
							<div class="c-dashAdm__mn__c--cBdy__c">
								<div class="c-dashAdm__mn__c--cBdy__c--cardBdy">
									<div class="c-dashAdm__mn__c--cBdy__c--cardBdy__c">
										<div class="c-dashAdm__mn__c--cBdy__c--cardBdy__c--cTitle">
											<div class="c-dashAdm__mn__c--cBdy__c--cardBdy__c--cTitle--tOptShort">
												<h4 class="c-dashAdm__mn__c--cBdy__c--cardBdy__c--cTitle--tOptShort--title">Lista de Tarifas</h4>
											</div>
											<div class="c-dashAdm__mn__c--cBdy__c--cardBdy__c--cTitle--tSelOpts d-none">
												<select name="" id="">
													<option value="0">Seleccione una opción</option>
												</select>
											</div>
										</div>
										<div class="c-dashAdm__mn__list-results">
											<table id="tbl_products" class="c-dashAdm__mn__c--cBdy__c--cardBdy__c--cTblResponsive--tbl" cellpadding="0" width="100%">
												<thead>
													<tr>
														<th>#</th>
														<th>Código</th>
														<th>Nombre</th>
														<th>Descripción</th>
														<th class="text-center">Precio</th>
														<th class="text-center">Marca</th>
														<th></th>
													</tr>
												</thead>
											</table>
										</div>
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