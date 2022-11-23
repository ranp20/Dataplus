<?php
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
require_once '../Config/Config.php';
require_once '../Helpers/Helpers.php';
require_once '../Models/categories.php';
require_once '../Models/products.php';
// VARIABLES DE CONTENIDO...
$m_prod = new Products();
$m_categories = new Categories();
$arrCategories = $m_categories->listCategs_1line(); // VARIABLE TEMPORAL
// VARIABLES DE PÁGINA...
$name_title_page = "Carrito de compras";
$page_title = ucwords($name_title_page)." - ".NOMBRE_EMPESA;
$total = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<title><?= $page_title;?></title>
  <?php require_once './includes/inc-header-links_home.php';?>
  <!-- PLUGINS AND ASSETS - HOME -->
  <!-- INCLUIR SWEET ALERT 2 -->
  <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script type="text/javascript" src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body class="animsition">
	<?php require_once './includes/inc-header-top_home-ind.php';?>
	<div class="container">
		<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
			<a href="<?= base_url();?>" class="stext-109 cl8 hov-cl1 trans-04">
				Inicio
				<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
			</a>
			<span class="stext-109 cl4">
				<?= $page_title; ?>
			</span>
		</div>
	</div>
	<?php require_once './includes/inc-cart-list-products.php';?>
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
	<script type="text/javascript" src="<?= media();?>/js/actions/inc-cart.js"></script>
</body>
</html>