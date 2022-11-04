<?php
headerTienda($data);
$arrSlider = $data['slider'];
$arrBanner = $data['banner'];
$arrProductos = $data['productos'];
$contentPage = "";
if(!empty($data['page'])){
	$contentPage = $data['page']['contenido'];
}

?>
<!-- PLUGINS AND ASSETS - HOME -->
<!-- INCLUIR OWL CAROUSEL 2 -->
<link rel="stylesheet" href="<?= media();?>/js/plugins/OwlCarousel2/dist/assets/owl.carousel.min.css">
<script type="text/javascript" src="<?= media();?>/js/plugins/OwlCarousel2/dist/owl.carousel.min.js"></script>
<?php require_once 'Template/inc-home_banners-init.php';?>
<?php require_once 'Template/inc-home_features.php';?>
<!-- CATEGORIES ROW 1 - HOME -->
<section class="topsell__area-2 pb-20">
	<div class="container">
		<div class="row container-cards-apple">
			<?php
				$tmp_categs_row_1 = "";
				foreach ($data['categorias'] as $k => $v){
					if($v['position'] == 1){					
						$categs_row_1_name = (strlen($v['nombre']) > 100) ? substr($v['nombre'], 0, 97) . '...' : $v['nombre'];
						$categs_row_1_desc = (strlen($v['descripcion']) > 100) ? substr($v['descripcion'], 0, 97) . '...' : $v['descripcion'];
						$categs_row_1_img = $v['portada'];
						$categs_row_1_linkfilter = base_url() . '/category/' . $v['idcategoria'];
						$tmp_categs_row_1 .= "
							<div class='col-sm-12 col-md-12 col-xl-4 col-lg-6'>
								<a href='{$categs_row_1_linkfilter}' title='{$categs_row_1_name}'>
									<div class='bg-white card-apple'>
										<h3 class='title-card-apple'>{$categs_row_1_name}</h3>
										<h4 class='sub-title-card-apple'></h4>
										<div class='img-card-apple'>
											<img style='border-radius: 0 0 8px 0'	src='{$categs_row_1_img}'	alt='{$categs_row_1_name}'>
										</div>
										<div class='btn-card-apple'>
											Ver productos </div>
									</div>
								</a>
							</div>
						";
					}
				}
				echo $tmp_categs_row_1;
			?>
		</div>
	</div>
</section>
<?php require_once 'Template/inc-products_line-1.php';?>
<!-- CATEGORIES ROW 2 - HOME -->
<div class="container">
	<div class="row container-cards-apple mb-4">
		<?php
				$tmp_categs_row_1 = "";
				foreach ($data['categorias'] as $k => $v){
					if($v['position'] == 2){					
						$categs_row_1_name = (strlen($v['nombre']) > 100) ? substr($v['nombre'], 0, 97) . '...' : $v['nombre'];
						$categs_row_1_desc = (strlen($v['descripcion']) > 100) ? substr($v['descripcion'], 0, 97) . '...' : $v['descripcion'];
						$categs_row_1_img = $v['portada'];
						$categs_row_1_linkfilter = base_url() . '/category/' . $v['idcategoria'];
						$tmp_categs_row_1 .= "
							<div class='col-sm-12 col-md-12 col-xl-4 col-lg-6'>
								<a href='{$categs_row_1_linkfilter}' title='{$categs_row_1_name}'>
									<div class='bg-white card-apple'>
										<h3 class='title-card-apple'>{$categs_row_1_name}</h3>
										<h4 class='sub-title-card-apple'></h4>
										<div class='img-card-apple'>
											<img style='border-radius: 0 0 8px 0'	src='{$categs_row_1_img}'	alt='{$categs_row_1_name}'>
										</div>
										<div class='btn-card-apple'>
											Ver productos </div>
									</div>
								</a>
							</div>
						";
					}
				}
				echo $tmp_categs_row_1;
			?>
	</div>
</div>
<?php require_once 'Template/inc-products_line-2.php';?>
<?php require_once 'Template/inc-products_line-3.php';?>
<?php require_once 'Template/inc-home_testimonials.php';?>
<?php require_once 'Template/inc-home_brands.php';?>
<!-- SCRIPTS - HOME -->
<script type="text/javascript" src="<?= media();?>/js/actions/home_settings.js"></script>
<?php footerTienda($data);?>