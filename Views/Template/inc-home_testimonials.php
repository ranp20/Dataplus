<!-- TESTIMONIOS -->
<section class="container mt-3">
	<div class="row">
		<div class="col-xl-12">
			<div class="section__head d-flex justify-content-between mb-10">
				<div class="section__title">
					<h5 class="st-titile">TESTIMONIOS</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="row d-flex">
		<div class="col-md-10 col-xl-8 text-left mb-4">
			<div class="mb-4 pb-2 mb-md-5 pb-md-0"></div>
		</div>
	</div>
	<div class="row text-center">
		<?php 
			$tmp_testimonials = "";
			foreach($data['testimonials'] as $k => $v){
				$testimony_name = $v['cli_name'] . " " . $v['cli_lastname'];
				$testimony_userphoto = $v['cli_photo'];
				$testimony_desc = (strlen($v['text_text']) > 100) ? substr($v['text_text'], 0, 97) . '...' : $v['text_text'];
				$tmp_testimonials .= "
					<div class='col-md-4 mb-5 mb-md-0'>
						<div class='card testimonial-card'>
							<!--<div class='card-up' style='background-color: #9d789b;'></div>-->
							<div class='avatar bg-white'>
								<img src='{$testimony_userphoto}' alt='{$testimony_name}' class='rounded-circle img-fluid' />
							</div>
							<div class='card-body text-left'>
								<h4 class='mb-4'>{$testimony_name}</h4>
								<!-- <hr /> -->
								<p class='dark-grey-text mt-4'>
									<i class='fas fa-quote-left pe-2'></i>{$testimony_desc}
								</p>
								<div class='rating mb-3'>
									<ul>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
										<li><a href='javascript:(0);'><i class='fal fa-star' aria-hidden='true'></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				";
			}
			echo $tmp_testimonials;
		?>
	</div>
</section>