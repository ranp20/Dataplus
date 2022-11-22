<?php 
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
if(isset($_GET['idprod']) && is_numeric($_GET['idprod']) && isset($_GET['nameprod']) && $_GET['nameprod'] != ""){
	$id_prod = intval($_GET['idprod']);
	$name_prod = $_GET['nameprod'];
	require_once '../Config/Config.php';
	require_once '../Helpers/Helpers.php';
	require_once '../Models/categories.php';
	require_once '../Models/products.php';
	// VARIABLES DE CONTENIDO...
	$m_prod = new Products();
	$m_categories = new Categories();
	$arrProductoD = $m_prod->detailsProduct($id_prod); // VARIABLE TEMPORAL
	$arrCategories = $m_categories->listCategs_1line(); // VARIABLE TEMPORAL
	$arrImages = $arrProductoD[0]['images'];
	$rutacategoria = $arrProductoD[0]['categoriaid'] . '/' . $arrProductoD[0]['ruta_categoria'];
	// VARIABLES DE PÁGINA...
	$page_title = "▷ ".ucwords($name_prod)." - ".NOMBRE_EMPESA;
	$total = 0;
}

/*
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
//exit();
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title><?= $page_title;?></title>
	<?php require_once './includes/inc-header-links_home.php';?>
	<!-- PLUGINS AND ASSETS - HOME -->
	<!-- INCLUIR OWL CAROUSEL 2 -->
	<link rel="stylesheet" href="<?= media();?>/js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
	<script type="text/javascript" src="<?= media();?>/js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
	<!-- INCLUIR SWEET ALERT 2 -->
  <link rel="stylesheet" href="<?= nodeModules();?>/sweetalert2/dist/sweetalert2.min.css">
  <script type="text/javascript" src="<?= nodeModules();?>/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body class="animsition">
	<?php require_once './includes/inc-header-top_home-ind.php';?>
	<?php require_once './includes/inc-products_details.php';?>
	<?php require_once './includes/inc-products_related.php';?>
	<?php require_once './includes/inc-footer_home-ind.php';?>
	<script src="<?= media();?>/tienda/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?= media();?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media();?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= media();?>/js/fontawesome.js"></script>
	<script src="<?= media();?>/js/main.js"></script>
	<script src="<?= media();?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/tienda/js/functions.js"></script>
  <script src="<?= media();?>/js/bootstrap-bundle.js"></script>
  <script src="<?= media();?>/js/meanmenu.js"></script>
  <script src="<?= media();?>/js/swiper-bundle.js"></script>
  <script src="<?= media();?>/js/owl-carousel.js"></script>
  <script src="<?= media();?>/js/nice-select.js"></script>
  <script src="<?= media();?>/js/countdown.min.js"></script>
  <script src="<?= media();?>/js/counterup.js"></script>
  <script src="<?= media();?>/js/main-web.js"></script>
  <script src="<?= media();?>/js/actions/inc-products_details.js"></script>
</body>
</html>