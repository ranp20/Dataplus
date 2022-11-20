<<<<<<< HEAD
<?php
headerTienda($data);
$arrProducto = $data['producto'];
$arrProductos = $data['productos'];
$arrImages = $arrProducto['images'];
$rutacategoria = $arrProducto['categoriaid'] . '/' . $arrProducto['ruta_categoria'];
$urlShared = base_url() . "/tienda/producto/" . $arrProducto['idproducto'] . "/" . $arrProducto['ruta'];
?>
<br><br><br>
<hr>
=======
<!DOCTYPE html>
<html lang="es">
<head>
	<?php require_once './Views/Template/inc-header-links_home.php';?>
	<title><?= $data['page_tag']; ?></title>
	<!-- PLUGINS AND ASSETS - HOME -->
	<!-- INCLUIR OWL CAROUSEL 2 -->
	<link rel="stylesheet" href="<?= media();?>/js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
	<script type="text/javascript" src="<?= media();?>/js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
	<!-- INCLUIR SWEET ALERT 2 -->
  <link rel="stylesheet" href="../../../node_modules/sweetalert2/dist/sweetalert2.min.css">
  <script type="text/javascript" src="../../../node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
</head>
<body class="animsition">
<?php
	require_once './Views/Template/inc-header-top_home.php';
	// headerTienda($data);
	$arrProducto = $data['producto'];
	$arrProductos = $data['productos'];
	$arrImages = $arrProducto['images'];
	$rutacategoria = $arrProducto['categoriaid'] . '/' . $arrProducto['ruta_categoria'];
	$urlShared = base_url() . "/tienda/producto/" . $arrProducto['idproducto'] . "/" . $arrProducto['ruta'];
<<<<<<< HEAD
	?>
<br>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
=======
?>
>>>>>>> master
<!-- breadcrumb -->
<div class="container">
	<div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg mb-3">
		<a href="<?= base_url(); ?>" class="stext-109 cl8 hov-cl1 trans-04">
			Inicio
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>
		<a href="<?= base_url() . '/tienda/categoria/' . $rutacategoria; ?>" class="stext-109 cl8 hov-cl1 trans-04">
			<?= $arrProducto['categoria'] ?>
			<i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
		</a>
		<span class="stext-109 cl4">
			<?= $arrProducto['nombre'] ?>
		</span>
	</div>
</div>
<<<<<<< HEAD


=======
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
<main>
	<!-- product-details-start -->
	<div class="product-details">
		<div class="container">
			<div class="row">
				<div class="col-xl-8">
					<div class="product__details-nav d-sm-flex align-items-start">
						<ul class="nav nav-tabs flex-sm-column justify-content-between" id="productThumbTab" role="tablist">
<<<<<<< HEAD



							<?php
							if (!empty($arrImages)) {
								for ($img = 0; $img < count($arrImages); $img++) {

							?>


									<li class="nav-item" role="presentation" data-thumb="<?= $arrImages[$img]['url_image']; ?>">
										<button class="nav-link <?= $img ? "" : "active" ?>" id="thumbOne-tab-<?= $img ?>" data-bs-toggle="tab" data-bs-target="#thumbOne-<?= $img ?>" type="button" role="tab" aria-controls="thumbOne-<?= $img ?>" aria-selected="true">
											<img src="<?= $arrImages[$img]['url_image']; ?>" alt="<?= $arrProducto['nombre']; ?>" width="85px">
										</button>
									</li>


							<?php
								}
							}
							?>





						</ul>
						<div class="product__details-thumb">
							<div class="tab-content" id="productThumbContent">
								<!-- class="tab-pane fade"  -->

								<?php
								if (!empty($arrImages)) {
									for ($img = 0; $img < count($arrImages); $img++) {

								?>
										<div class="tab-pane fade show <?= $img ? "" : "active" ?>" id="thumbOne-<?= $img ?>" role="tabpanel" aria-labelledby="thumbOne-tab-<?= $img ?>">
											<div class="product__details-nav-thumb w-100">
												<img src="<?= $arrImages[$img]['url_image']; ?>" alt="<?= $arrProducto['nombre']; ?>" width="600px">
											</div>
										</div>

								<?php
									}
								}
								?>

=======
							<?php
								$tmp_proddet_imgs = "";
								$count_imgss = 0;
								if(!empty($arrImages)){
									foreach ($arrImages as $k => $v){
										if($count_imgss < count($arrImages)){
											$count_imgss++;
											$imgss = ($count_imgss != 1) ? '' : 'active';
											$proddet_url = $v['url_image'];

											$tmp_proddet_imgs .= "
												<li class='nav-item' role='presentation' data-thumb='{$proddet_url}'>
													<button class='nav-link {$imgss}' id='thumbOne-tab-{$count_imgss}' data-bs-toggle='tab' data-bs-target='#thumbOne-{$count_imgss}' type='button' role='tab' aria-controls='thumbOne-{$count_imgss}' aria-selected='true'>
														<img class='img-fluid' src='{$proddet_url}' alt='{$arrProducto['nombre']}' width='85px'>
													</button>
												</li>
											";
										}
									}
								}
								echo $tmp_proddet_imgs;
							?>
						</ul>
						<div class="product__details-thumb">
							<div class="tab-content" id="productThumbContent">
								<?php 
									$tmp_proddet_imgs_giant = "";
									$count_imgss_2 = 0;
									if(!empty($arrImages)){
										foreach($arrImages as $k => $v){
											if($count_imgss_2 < count($arrImages)){
												$count_imgss_2++;
												$imgss = ($count_imgss_2 != 1) ? '' : 'active';
												$proddet_url = $v['url_image'];

												$tmp_proddet_imgs_giant .= "
													<div class='tab-pane fade show {$imgss}' id='thumbOne-{$count_imgss_2}' role='tabpanel' aria-labelledby='thumbOne-tab-{$count_imgss_2}'>
														<div class='product__details-nav-thumb w-100'>
															<img class='product__details-nav-thumb--img small-preview img-fluid' src='{$proddet_url}' alt='{$arrProducto['nombre']}'>
															<div class='zoomed-image'></div>
														</div>
													</div>
												";
											}
										}
									}
									echo $tmp_proddet_imgs_giant;
								?>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-4">
					<div class="product__details-content">
						<h6><?= $arrProducto['nombre']; ?></h6>
<<<<<<< HEAD
						<div class="pd-rating mb-10">
							<ul class="rating">
<<<<<<< HEAD
								<li><a href="#"><i class="fal fa-star"></i></a></li>
								<li><a href="#"><i class="fal fa-star"></i></a></li>
								<li><a href="#"><i class="fal fa-star"></i></a></li>
								<li><a href="#"><i class="fal fa-star"></i></a></li>
								<li><a href="#"><i class="fal fa-star"></i></a></li>
							</ul>
							<span>(01 comentario)</span>
							<span><a href="#">Agragar comentario</a></span>
=======
								<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
								<li><a href="javascript:void(0);"><i class="fal fa-star"></i></a></li>
							</ul>
							<span>(01 comentario)</span>
							<span><a href="javascript:void(0);">Agragar comentario</a></span>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
						</div>
=======
>>>>>>> master
						<div class="price mb-10">
							<span><?= SMONEY . formatMoney($arrProducto['precio']); ?></span>
						</div>
						<!-- 
						<div class="features-des mb-20 mt-10">
							<?= $arrProducto['descripcion']; ?>
						</div>
						 -->
						<div class="product-stock mb-20">
							<h5>Disponible: <span> 940 en stock</span></h5>
						</div>
						<div class="cart-option mb-15">
							<div class="product-quantity mr-20">
								<div class="cart-plus-minus p-relative">
									<input id="cant-product" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" min="1">
									<div class="dec qtybutton btn-num-product-down">-</div>
									<div class="inc qtybutton btn-num-product-up">+</div>
								</div>
							</div>
							<!-- <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
									<i class="fs-16 zmdi zmdi-minus"></i>
								</div>
								<input id="cant-product" class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1" min="1">
								<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
									<i class="fs-16 zmdi zmdi-plus"></i>
								</div> -->
							<button id="<?= openssl_encrypt($arrProducto['idproducto'], METHODENCRIPT, KEY); ?>" class="cart-btn js-addcart-detail">Agregar al carrito</button>
						</div>
						<!-- 
						<div class="details-meta">
							<div class="d-meta-left">
								<div class="dm-item mr-20">
<<<<<<< HEAD
									<a href="#"><i class="fal fa-heart"></i>Agregar a favoritos</a>
								</div>
								<div class="dm-item">
									<a href="#"><i class="fal fa-layer-group"></i>Compare</a>
=======
									<a href="javascript:void(0);"><i class="fal fa-heart"></i>Agregar a favoritos</a>
								</div>
								<div class="dm-item">
									<a href="javascript:void(0);"><i class="fal fa-layer-group"></i>Compare</a>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
								</div>
							</div>
							<div class="d-meta-left">
								<div class="dm-item">
<<<<<<< HEAD
<<<<<<< HEAD
									<!-- <a href="#"><i class="fal fa-share-alt"></i>Share</a> -->
									<a href="#" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?= $urlShared; ?> &t=<?= $arrProducto['nombre'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
=======
									<!-- <a href="javascript:void(0);"><i class="fal fa-share-alt"></i>Share</a> -->
=======
>>>>>>> master
									<a href="javascript:void(0);" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Facebook" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?= $urlShared; ?> &t=<?= $arrProducto['nombre'] ?>','ventanacompartir', 'toolbar=0, status=0, width=650, height=450');">
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
										<i class="fa fa-facebook"></i>
									</a>
									<a href="https://twitter.com/intent/tweet?text=<?= $arrProducto['nombre'] ?>&url=<?= $urlShared; ?>&hashtags=<?= SHAREDHASH; ?>" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
									<a href="https://api.whatsapp.com/send?text=<?= $arrProducto['nombre'] . ' ' . $urlShared ?>" target="_blank" class="fs-14 cl3 hov-cl1 trans-04 lh-10 p-lr-5 p-tb-2 m-r-8 tooltip100" data-tooltip="WhatsApp">
										<i class="fab fa-whatsapp" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
 						-->
						<div class="product-tag-area mt-15">
							<div class="product_info">
								<span class="sku_wrapper">
									<span class="title">SKU:</span>
									<span class="sku">DK1002</span>
								</span>
								<span class="posted_in">
									<span class="title">Categories:</span>
<<<<<<< HEAD
									<a href="#">iPhone</a>
									<a href="#">Tablets</a>
								</span>
								<span class="tagged_as">
									<span class="title">Tags:</span>
									<a href="#">Smartphone</a>,
									<a href="#">Tablets</a>
=======
									<a href="javascript:void(0);">iPhone</a>
									<a href="javascript:void(0);">Tablets</a>
								</span>
								<span class="tagged_as">
									<span class="title">Tags:</span>
									<a href="javascript:void(0);">Smartphone</a>,
									<a href="javascript:void(0);">Tablets</a>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- product-details-end -->
<<<<<<< HEAD

=======
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
	<!-- product-details-des-start -->
	<div class="product-details-des mt-40 mb-60">
		<div class="container">
			<div class="info-1">
				<div class="row">
					<div class="col-xl-12">
						<div class="section__head d-flex justify-content-between mb-10">
							<div class="section__title">
								<h5 class="st-titile">DETALLE DEL PRODUCTO</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="product__desc-info">
					<ul>
						<li>
							<h6>Weight</h6>
							<span>2 lbs</span>
						</li>
						<li>
							<h6>Dimensions</h6>
							<span>12 × 16 × 19 in</span>
						</li>
						<li>
							<h6>Product</h6>
							<span>Purchase this product on rag-bone.com</span>
						</li>
						<li>
							<h6>Color</h6>
							<span>Gray, Black</span>
						</li>
						<li>
							<h6>Size</h6>
							<span>S, M, L, XL</span>
						</li>
						<li>
							<h6>Model</h6>
							<span>Model </span>
						</li>
						<li>
							<h6>Shipping</h6>
							<span>Standard shipping: $5,95</span>
						</li>
						<li>
							<h6>Care Info</h6>
							<span>Machine Wash up to 40ºC/86ºF Gentle Cycle</span>
						</li>
						<li>
							<h6>Brand</h6>
							<span>Kazen</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="info-2">
				<div class="product__details-des-wrapper">
					<div class="row">
						<div class="col-xl-12">
							<div class="section__head d-flex justify-content-between mb-10">
								<div class="section__title">
									<h5 class="st-titile">DESCRIPCIÓN DEL PRODUCTO</h5>
								</div>
							</div>
						</div>
					</div>
					<p class="des-text mb-35">Designed by Hans J. Wegner in 1949 as one of the first models created especially for Carl Hansen & Son, and produced since 1950. The last of a series of chairs wegner designed based on inspiration from antique Chinese armchairs. The gently rounded top together with the back and seat offers a variety of comfortable seating positions,ideal for both long visits to the dining table and relaxed lounging.</p>
				</div>
				<div class="info-3">
					<div class="row">
						<div class="col-xl-12">
							<div class="section__head d-flex justify-content-between mb-10">
								<div class="section__title">
									<h5 class="st-titile">RESEÑA DEL PRODUCTO</h5>
								</div>
							</div>
						</div>
					</div>
					<div class="product__details-review">
						<div class="row">
							<div class="col-xl-4">
								<div class="review-rate">
									<h5>5.00</h5>
									<div class="review-star">
<<<<<<< HEAD
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
										<a href="#"><i class="fas fa-star"></i></a>
=======
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
										<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
									</div>
									<span class="review-count">01 Review</span>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="review-des-infod">
									<h6>1 review for "<span>Wireless Bluetooth Over-Ear Headphones</span>"</h6>
									<div class="review-details-des">
										<div class="author-image mr-15">
<<<<<<< HEAD
											<a href="#"><img src="<?= media(); ?>/images/author/author-sm-1.jpeg" alt=""></a>
=======
											<a href="javascript:void(0);"><img src="<?= media(); ?>/images/author/author-sm-1.jpeg" alt=""></a>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
										</div>
										<div class="review-details-content">
											<div class="str-info">
												<div class="review-star mr-15">
<<<<<<< HEAD
													<a href="#"><i class="fas fa-star"></i></a>
													<a href="#"><i class="fas fa-star"></i></a>
													<a href="#"><i class="fas fa-star"></i></a>
													<a href="#"><i class="fas fa-star"></i></a>
													<a href="#"><i class="fas fa-star"></i></a>
												</div>
												<div class="add-review-option">
													<a href="#">Add Review</a>
=======
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
													<a href="javascript:void(0);"><i class="fas fa-star"></i></a>
												</div>
												<div class="add-review-option">
													<a href="javascript:void(0);">Add Review</a>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
												</div>
											</div>
											<div class="name-date mb-30">
												<h6> admin – <span> May 27, 2021</span></h6>
											</div>
											<p>A light chair, easy to move around the dining table and about the room. Duis aute irure dolor in reprehenderit in <br> voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-xl-12">
								<div class="product__details-comment ">
									<div class="comment-title mb-20">
										<h3>Add a review</h3>
										<p>Your email address will not be published. Required fields are marked *</p>
									</div>
									<div class="comment-rating mb-20">
										<span>Overall ratings</span>
										<ul>
<<<<<<< HEAD
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
											<li><a href="#"><i class="fas fa-star"></i></a></li>
=======
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
											<li><a href="javascript:void(0);"><i class="fas fa-star"></i></a></li>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
										</ul>
									</div>
									<div class="comment-input-box">
										<form action="#">
											<div class="row">
												<div class="col-xxl-6 col-xl-6">
													<div class="comment-input">
														<input type="text" placeholder="Your Name">
													</div>
												</div>
												<div class="col-xxl-6 col-xl-6">
													<div class="comment-input">
														<input type="email" placeholder="Your Email">
													</div>
												</div>
												<div class="col-xxl-12">
													<textarea placeholder="Your review" class="comment-input comment-textarea"></textarea>
												</div>
												<div class="col-xxl-12">
													<div class="comment-agree d-flex align-items-center mb-25">
														<div class="form-check">
															<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
															<label class="form-check-label" for="flexCheckDefault">
																Save my name, email, and website in this browser for the next time I comment.
															</label>
														</div>
													</div>
												</div>
												<div class="col-xxl-12">
													<div class="comment-submit">
														<button type="submit" class="cart-btn">Submit</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- product-details-des-end -->
<<<<<<< HEAD

</main>




=======
</main>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
<!-- Related Products -->
<section class="topsell__area-2 pt-15">
	<div class="container">
		<div class="row">
			<div class="col-xl-12">
				<div class="section__head d-flex justify-content-between mb-10">
					<div class="section__title">
						<h5 class="st-titile">PRODUCTOS RELACIONADOS</h5>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-12">
				<div class="tab-content" id="flast-sell-tabContent">
					<div class="tab-pane fade active show" id="computer" role="tabpanel" aria-labelledby="computer-tab">
						<div class="product-bs-slider-2">
							<div class="product-slider-2 swiper-container">
								<div class="swiper-wrapper">
								<?php
<<<<<<< HEAD
									if (!empty($arrProductos)) {
										for ($p = 0; $p < count($arrProductos); $p++) {
											$ruta = $arrProductos[$p]['ruta'];
											if (count($arrProductos[$p]['images']) > 0) {
												$portada = $arrProductos[$p]['images'][0]['url_image'];
											} else {
												$portada = media() . '/images/uploads/product.png';
											}
									?>



										<div class="product__item swiper-slide p-2 m-3 bg-white h-100" style="height: 360px;">
											<div class="product__thumb fix">
												<div class="product-image w-img">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>">
														<img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
													</a>
												</div>
												<div class="product__offer">
													<span class="discount">-15%</span>
												</div>
												<div class="product-action">
													<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="icon-box icon-box-1" data-bs-toggle="modal" data-bs-target="#productModalId">
														<i class="fal fa-eye"></i>
														<i class="fal fa-eye"></i>
													</a>
													<a href="#" class="icon-box icon-box-1">
														<i class="fal fa-heart"></i>
														<i class="fal fa-heart"></i>
													</a>
													<a href="#" class="icon-box icon-box-1">
														<i class="fal fa-layer-group"></i>
														<i class="fal fa-layer-group"></i>
													</a>
												</div>
											</div>
											<div class="product__content">
												<a href="<?= base_url() . '/tienda/producto/' . $arrProductos[$p]['idproducto'] . '/' . $rutaProducto; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
													<?= strlen($arrProductos[$p]['nombre']) >= 50 ? substr($arrProductos[$p]['nombre'], 0, 50) . "..." : $arrProductos[$p]['nombre'] ?>
												</a>

												<div class="rating mb-3">
													<ul>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
														<li><a href="#"><i class="fal fa-star"></i></a></li>
													</ul>
													<span>(01 review)</span>
												</div>
												<div class="price">
													<span><?= SMONEY . formatMoney($arrProductos[$p]['precio']); ?></span>
												</div>
											</div>
											<div class="product__add-cart text-center">
												<!-- product-modal-sidebar-open-btn d-flex align-items-center -->
												<a id="<?= openssl_encrypt($arrProductos[$p]['idproducto'], METHODENCRIPT, KEY); ?>" href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center ">
													Agregar al carrito
												</a>
											</div>

										</div>


										<?php
											}
										}
										?>
=======
									$tmp_prodsl1 = "";
									foreach($arrProductos as $k => $v) {
										$prodsl1_id = $v['idproducto'];
										$rutaProducto = $v['ruta'];
										$prodsl1_name = $v['nombre'];
										$prodsl1_name_short = strlen($v['nombre']) >= 42 ? substr($v['nombre'], 0, 42) . "..." : $v['nombre'];
										$prodsl1_price = SMONEY . formatMoney($v['precio']);
										$prodsl1_link_addcart = openssl_encrypt($v['idproducto'], METHODENCRIPT, KEY);
										$path_linkurl = base_url() . '/tienda/producto/' . $v['idproducto'] . '/' . $rutaProducto;

										if(count($v['images']) > 0){
											$portada = $v['images'][0]['url_image'];
										} else {
											$portada = media() . '/images/uploads/product.png';
										}
										
										$tmp_prodsl1 .= "
											<div class='product__item swiper-slide p-2 m-3 bg-white h-100 rounded item' style='height: 360px;'>
												<div class='product__thumb fix'>
													<div class='product-image w-img'>
														<a href='{$path_linkurl}'>
															<img src='{$portada}' alt='{$prodsl1_name}'>
														</a>
													</div>
													<div class='product__offer'>
														<span class='discount'>-15%</span>
													</div>
													<!--
													<div class='product-action'>
														<a href='{$path_linkurl}' class='icon-box icon-box-1' data-bs-toggle='modal' data-bs-target='#productModalId'>
															<i class='fal fa-eye'></i>
														</a>
													</div>
													-->
												</div>
												<div class='product__content m-1'>
													<a href='{$path_linkurl}' class='stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6'>
														{$prodsl1_name_short}
													</a>
													<div class='price'>
														<span>{$prodsl1_price}</span>
													</div>
												</div>
												<!--
												<div class='product__add-cart text-center'>
													<a id='{$prodsl1_link_addcart}' href='javascript:(0);' class='btn-addwish-b2 dis-block pos-relative js-addwish-b2 js-addcart-detail cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center '>
														Agregar al carrito
													</a>
												</div>
												-->
												<div class='product__viewdetails text-center'>
													<a href='{$path_linkurl}' class='dis-block pos-relative cl2 hov-cl1 trans-04 p-l-22 p-r-11 cart-btn justify-content-center'>
														<span>VER PRODUCTO</span>
													</a>
												</div>
											</div>
										";
									}
									echo $tmp_prodsl1;
								?>
<<<<<<< HEAD
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb

=======
>>>>>>> master
								</div>
							</div>
							<!-- If we need navigation buttons -->
							<div class="bs-button bs2-button-prev"><i class="fal fa-chevron-left"></i></div>
							<div class="bs-button bs2-button-next"><i class="fal fa-chevron-right"></i></div>
						</div>
					</div>
<<<<<<< HEAD



=======
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
				</div>
			</div>
		</div>
	</div>
</section>
<<<<<<< HEAD

<!-- Related Products -->






<?php
footerTienda($data);
?>
=======
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
  <script src="<?= media();?>/js/actions/inc-products_details.js"></script>
  <!-- <script src="<?= media();?>/js/backtotop.js"></script> -->
</body>
</html>
>>>>>>> 31b9bad6fcee7de8a36a33db08f336a0bec43bfb
