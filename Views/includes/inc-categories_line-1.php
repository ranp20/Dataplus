<section class="topsell__area-2 pb-20">
	<div class="container">
		<div class="row container-cards-apple">
			<?php
				$tmp_categs_row_1 = "";
				foreach ($arrCategories as $k => $v){
					if($v['position'] == 1){					
						$categs_row_1_name = (strlen($v['nombre']) > 100) ? substr($v['nombre'], 0, 97) . '...' : $v['nombre'];
						$categs_row_1_desc = (strlen($v['descripcion']) > 100) ? substr($v['descripcion'], 0, 97) . '...' : $v['descripcion'];
						$categs_row_1_img = $v['portada'];
						$categs_ruta = explode(" ", $v['ruta']);
						$categs_ruta_1 = implode("-", $categs_ruta);
						$categs_row_1_linkfilter = base_url() . '/categoria/' . $v['idcategoria'].'/'.$categs_ruta_1;
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
											Ver productos</div>
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