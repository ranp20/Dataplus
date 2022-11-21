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
$name_title_page = "Error 404";
$page_title = ucwords($name_title_page)." - ".NOMBRE_EMPESA;
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title><?= $page_title;?></title>
  <?php require_once './includes/inc-header-links_home.php';?>
</head>
<body class="animsition">
  <?php require_once './includes/inc-header-top_home-ind.php';?>
  <main>
    <div class="error-area pt-70 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="error-info text-center">
              <div class="error-image text-center mb-50 col-4 ml-auto mr-auto">
                <img loading="lazy" src="<?= media();?>/images/banner/404.png" alt="banner_error-404" width="100" height="100">
              </div>
              <div class="error-content">
                <h5>PÁGINA NO ENCONTRADA</h5>
                <p>Lo sentimos la página que ha solicitado no está disponible. Intente buscar otra cosa o regrese a la página de inicio.</p>
                <div class="error-button">
                  <a href="./" class="error-btn" title="Ir a inicio">Regresar al inicio</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php require './includes/inc-footer_home-ind.php';?>
  <script src="<?= media();?>/tienda/vendor/animsition/js/animsition.min.js"></script>
  <script src="<?= media();?>/tienda/vendor/slick/slick.min.js"></script>
  <script src="<?= media();?>/tienda/js/slick-custom.js"></script>
  <script src="<?= media();?>/js/nice-select.js"></script>
  <script src="<?= media();?>/js/main.js"></script>
  <script src="<?= media();?>/tienda/js/main.js"></script>
  <script src="<?= media();?>/tienda/js/functions.js"></script>
  <script src="<?= media();?>/js/meanmenu.js"></script>
  <script src="<?= media();?>/js/swiper-bundle.js"></script>
</body>
</html>