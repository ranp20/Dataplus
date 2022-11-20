<?php
(substr_count($_SERVER["HTTP_ACCEPT_ENCODING"], "gzip")) ? ob_start("ob_gzhandler") : ob_start();
session_start();
require_once 'Config/Config.php';
require_once 'Helpers/Helpers.php';
require_once 'Models/categories.php';
require_once 'Models/products.php';
require_once 'Models/banners.php';
require_once 'Models/testimonials.php';
$m_products = new Products();
$m_categories = new Categories();
$m_banners = new Banners();
$m_testimonials = new Testimonials();
$arrProductos = $m_products->listProds_1line(); // VARIABLE TEMPORAL
$arrCategories = $m_categories->listCategs_1line(); // VARIABLE TEMPORAL
$arrBanners = $m_banners->listBanners_init(); // VARIABLE TEMPORAL
$arrTestimonials = $m_testimonials->listTestimonials(); // VARIABLE TEMPORAL
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Dataplus - Tienda Virtual</title>
  <?php require_once 'Views/includes/inc-header-links_index.php';?>
  <!-- PLUGINS AND ASSETS - HOME -->
  <!-- INCLUIR SWEET ALERT 2 -->
  <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script type="text/javascript" src="./node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<!-- INCLUIR OWL CAROUSEL 2 -->
	<link rel="stylesheet" href="<?= media();?>/js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
	<script type="text/javascript" src="<?= media();?>/js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
</head>
<body class="animsition">
<?php require_once 'Views/includes/inc-header-top_home.php';?>
<?php require_once 'Views/includes/inc-home_banners-init.php';?>
<?php require_once 'Views/includes/inc-home_features.php';?>
<?php require_once 'Views/includes/inc-categories_line-1.php';?>
<?php require_once 'Views/includes/inc-products_line-1.php';?>
<?php require_once 'Views/includes/inc-categories_line-2.php';?>
<?php require_once 'Views/includes/inc-products_line-2.php';?>
<?php require_once 'Views/includes/inc-products_line-3.php';?>
<?php require_once 'Views/includes/inc-home_testimonials.php';?>
<?php require_once 'Views/includes/inc-home_brands.php';?>
<?php require_once 'Views/includes/inc-footer_home.php';?>
<script>
  const base_url = "<?= base_url(); ?>";
  const smony = "<?= SMONEY; ?>";
</script>
<script src="<?= media();?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<script src="<?= media();?>/tienda/vendor/slick/slick.min.js"></script>
<script src="<?= media();?>/tienda/js/slick-custom.js"></script>
<script src="<?= media();?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= media();?>/js/nice-select.js"></script>
<!-- 
<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
 -->
<script src="<?= media();?>/js/main.js"></script>
<script src="<?= media();?>/tienda/js/main.js"></script>
<script src="<?= media();?>/tienda/js/functions.js"></script>
<script src="<?= media();?>/js/meanmenu.js"></script>
<script src="<?= media();?>/js/swiper-bundle.js"></script>
<script src="<?= media();?>/js/main-web.js"></script>
<script type="text/javascript" src="<?= media();?>/js/actions/home_settings.js"></script>
</body>
</html>