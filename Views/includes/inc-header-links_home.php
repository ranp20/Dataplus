<?php
require_once "../Config/Config.php";
require_once "../Helpers/Helpers.php";
$cantCarrito = 0;
if (isset($_SESSION['arrCarrito']) && count($_SESSION['arrCarrito']) > 0){
	foreach ($_SESSION['arrCarrito'] as $product) {
		$cantCarrito += $product['cantidad'];
	}
}
?>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php
$nombreSitio = NOMBRE_EMPESA;
$descripcion = DESCRIPCION;
$nombreProducto = NOMBRE_EMPESA;
$urlWeb = base_url();
$urlImg = media() . "/images/portada.jpg";
if (!empty($data['producto'])) {
	//$descripcion = $data['producto']['descripcion'];
	$descripcion = DESCRIPCION;
	$nombreProducto = $data['producto']['nombre'];
	$urlWeb = base_url() . "/tienda/producto/" . $data['producto']['idproducto'] . "/" . $data['producto']['ruta'];
	$urlImg = $data['producto']['images'][0]['url_image'];
}
?>
<meta property="og:locale" content='es_ES' />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="<?= $nombreSitio; ?>" />
<meta property="og:description" content="<?= $descripcion; ?>" />
<meta property="og:title" content="<?= $nombreProducto; ?>" />
<meta property="og:url" content="<?= $urlWeb; ?>" />
<meta property="og:image" content="<?= $urlImg; ?>" />

<!-- NUEVO CONTENIDO (INICIO) -->
<!-- PRELOADER FILES -->
<link rel="preload" href="<?= media();?>/css/styles.min.css" as="style"/>
<link rel="preload" href="<?= media();?>/js/plugins/jquery/jquery-3.6.0.min.js" as="script"/>
<!-- JQUERY COMPRESSED -->
<script type="text/javascript" src="<?= media();?>/js/plugins/jquery/jquery-3.6.0.min.js"></script>
<!-- POPPERJS -->
<script type="text/javascript" src="<?= media();?>/js/plugins/jquery/popper.min.js"></script>
<!-- BOOTSTRAP UNCOMPRESSED -->
<link rel="stylesheet" href="<?= media();?>/js/plugins/bootstrap-4.6.2/css/bootstrap.min.css">
<script type="text/javascript" src="<?= media();?>/js/plugins/bootstrap-4.6.2/js/bootstrap.min.js"></script>
<!-- STYLESSHEET -->
<link rel="stylesheet" href="<?= media();?>/css/styles.min.css"/>
<link rel="stylesheet" type="text/css" href="<?= media();?>/flaticon/flaticon.css">
<!-- NUEVO CONTENIDO (FIN) -->
<link rel="icon" type="image/png" href="<?= media() ?>/tienda/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/iconic/css/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/fonts/linearicons-v1.0.0/icon-font.min.css">
<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/animsition/css/animsition.min.css">
<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/vendor/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?= media() ?>/tienda/css/main.css">