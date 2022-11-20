<!DOCTYPE html>
<html lang="es">
<head>
	<title><?= $data['page_tag']; ?></title>
	<?php incHeaderLinksHome($data);?>
	<!-- PLUGINS AND ASSETS - HOME -->
	<!-- INCLUIR OWL CAROUSEL 2 -->
	<link rel="stylesheet" href="<?= media();?>/js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
	<script type="text/javascript" src="<?= media();?>/js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
	<!-- INCLUIR SWEET ALERT 2 -->
  <link rel="stylesheet" href="../../../node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script type="text/javascript" src="../../../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
	<!-- INCLUIR ELEVATEZOOM -->
	<!-- 
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="../../../node_modules/src/jquery.ez-plus.js"></script>
	<link rel="stylesheet" href="../../../node_modules/css/jquery.ez-plus.css">
 	-->
</head>
<body class="animsition">
<?php 
	// headerTienda($data);
	incHeaderTopHome($data);
	$arrProductos = $data['productos'];
?>
	<!-- Product -->
	<div class="bg0 pt-4 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<h3><?= $data['page_title']; ?></h3>
				</div>

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						&nbsp;&nbsp;
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Categoría &nbsp;
					</div>
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
						<div class="filter-col4 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Categorías
							</div>

							<div class="flex-w p-t-4 m-r--5">
								<?php 
									if(count($data['categorias']) > 0){
										foreach ($data['categorias'] as $categoria) {										
								 ?>
								<a href="<?= base_url() ?>/tienda/categoria/<?= $categoria['idcategoria'].'/'.$categoria['ruta'] ?>" class="flex-c-m stext-107 cl6 size-301 bor7 p-lr-15 hov-tag1 trans-04 m-r-5 m-b-5">
									<?= $categoria['nombre'] ?> <span> &nbsp;(<?= $categoria['cantidad'] ?>)</span>
								</a>
								<?php 
										}
									}
								 ?>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row isotope-grid">
			<?php 
			if(!empty($arrProductos)){
				for ($p=0; $p < count($arrProductos); $p++) { 
					$ruta = $arrProductos[$p]['ruta'];
					if(count($arrProductos[$p]['images']) > 0 ){
						$portada = $arrProductos[$p]['images'][0]['url_image'];
					}else{
						$portada = media().'/images/uploads/product.png';
					}
			 ?>
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
							<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								Ver producto
							</a>
						</div>
						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['idproducto'].'/'.$ruta; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
									<?= $arrProductos[$p]['nombre'] ?>
								</a>
								<span class="stext-105 cl3">
									<?= SMONEY.formatMoney($arrProductos[$p]['precio']); ?>
								</span>
							</div>
							<div class="block2-txt-child2 flex-r p-t-3">
<<<<<<< HEAD
								<a href="#"
=======
								<a href="javascript:void(0);"
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
								 id="<?= openssl_encrypt($arrProductos[$p]['idproducto'],METHODENCRIPT,KEY); ?>"
								 class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail
								 icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11
								 ">
									<i class="zmdi zmdi-shopping-cart"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php 
				}
			}else{
				?>
			<p>No hay productos para mostrar <a href="<?= base_url() ?>/tienda"> Ver productos</a></p>
			<?php 
			} 
			?>
			</div>

			<!-- Load more -->
			<?php 
				if(count($data['productos']) > 0){
					$prevPagina = $data['pagina'] - 1;
					$nextPagina = $data['pagina'] + 1;
			 ?>
			<div class="flex-c-m flex-w w-full p-t-45">
			<?php if($data['pagina'] > 1){ ?>
				<a href="<?= base_url() ?>/tienda/categoria/<?= $data['infoCategoria']['idcategoria'].'/'.$data['infoCategoria']['ruta'].'/'.$prevPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> <i class="fas fa-chevron-left"></i> &nbsp; Anterior </a>&nbsp;&nbsp;
			<?php } ?>
			<?php if($data['pagina'] != $data['total_paginas']){ ?>
				<a href="<?= base_url() ?>/tienda/categoria/<?= $data['infoCategoria']['idcategoria'].'/'.$data['infoCategoria']['ruta'].'/'.$nextPagina ?>" class="flex-c-m stext-101 cl5 size-103 bg2 bor1 hov-btn1 p-lr-15 trans-04"> Siguiente &nbsp; <i class="fas fa-chevron-right"></i> </a>
			<?php } ?>
			</div>
			<?php 
				}
			 ?>
		</div>
	</div>
<?php incFooterHome();?>

<!--===============================================================================================-->	
	<script src="<?= media() ?>/tienda/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= media() ?>/tienda/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= media() ?>/tienda/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/slick/slick.min.js"></script>
	<script src="<?= media() ?>/tienda/js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/parallax100/parallax100.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/isotope/isotope.pkgd.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media() ?>/tienda/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= media();?>/js/fontawesome.js"></script>
	<script src="<?= media() ?>/tienda/js/main.js"></script>
	<script src="<?= media();?>/js/functions_admin.js"></script>
	<script src="<?= media() ?>/js/functions_login.js"></script>
	<script src="<?= media() ?>/tienda/js/functions.js"></script>
	<script src="<?= media();?>/js/vendor/jquery.js"></script>    
  <script src="<?= media();?>/js/vendor/waypoints.js"></script>
  <script src="<?= media();?>/js/bootstrap-bundle.js"></script>
  <script src="<?= media();?>/js/meanmenu.js"></script>
  <script src="<?= media();?>/js/swiper-bundle.js"></script>
  <script src="<?= media();?>/js/tweenmax.js"></script>
  <script src="<?= media();?>/js/owl-carousel.js"></script>
  <script src="<?= media();?>/js/magnific-popup.js"></script>
  <script src="<?= media();?>/js/parallax.js"></script>
  <script src="<?= media();?>/js/nice-select.js"></script>
  <script src="<?= media();?>/js/countdown.min.js"></script>
  <script src="<?= media();?>/js/counterup.js"></script>
  <script src="<?= media();?>/js/ui-slider-range.js"></script>
  <script src="<?= media();?>/js/wow.js"></script>
  <script src="<?= media();?>/js/isotope-pkgd.js"></script>
  <script src="<?= media();?>/js/imagesloaded-pkgd.js"></script>
  <script src="<?= media();?>/js/ajax-form.js"></script>
  <script src="<?= media();?>/js/main-web.js"></script>
  <script src="<?= media();?>/js/actions/inc-categoria.js"></script>
  <!-- <script src="<?= media();?>/js/backtotop.js"></script> -->
</body>
</html>