<!-- BANNERS - HOME -->
<div class="sec-banner bg0">
	<div class="box-rdx_wtout-p">
		<section class="section-slide">
			<div class="wrap-slick1">
				<div class="slick1">
					<?php
						$tmp_banners_h = "";
						foreach ($arrBanners as $k => $v){
							$banners_row_1_img = $v['photo'];
							$tmp_banners_h .= "	
							<div class='item-slick1' style='background-image: url({$banners_row_1_img});'>
								<div class='container h-full'>
									<div class='flex-col-l-m h-full p-t-100 p-b-30 respon5'>
										<div class='layer-slick1 animated visible-false' data-appear='fadeInDown' data-delay='0'>
											<span class='ltext-101 cl2 respon2'>Descripción de Banner 1</span>
										</div>
										<div class='layer-slick1 animated visible-false' data-appear='fadeInUp' data-delay='800'>
											<h2 class='ltext-201 cl2 p-t-19 p-b-43 respon1'>Banner 1</h2>
										</div>
										<div class='layer-slick1 animated visible-false' data-appear='zoomIn' data-delay='1600'>
											<a href='javascript:void(0);' class='flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04'>
												Ver productos
											</a>
										</div>
									</div>
								</div>
							</div>
							";
						}
						echo $tmp_banners_h;
					?>
				</div>
			</div>
		</section>
	</div>
</div>