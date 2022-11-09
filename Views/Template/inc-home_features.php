<style type="text/css">
	.banners-info-home {
	  background-color: #fff;
	  display: flex;
	  justify-content: space-between;
	  min-height: 90px;
	  margin-top: 30px;
	  padding: 15px 0;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	  background-color: #fff;
	  display: flex;
	  justify-content: space-between;
	  min-height: 90px;
	  margin-top: 30px;
	  padding: 15px 0;
	  -webkit-box-sizing: border-box;
	  -moz-box-sizing: border-box;
	  box-sizing: border-box;
	  box-shadow: 0 1px 1px 0 rgb(0 0 0 / 10%);
	  border: 1px solid #dcdcdced;
	  -webkit-border-radius: 8px;
	  -moz-border-radius: 8px;
	  border-radius: 8px;
	}
	.banners-info-home .cards-container {
	  display: flex;
	  flex-wrap: wrap;
	  justify-content: space-between;
	  align-content: space-between;
	  width: 70px;
	  height: 58px;
	  margin-right: 15px;
	}
	.banners-info-home .inner-div {
	  width: 25%;
	  color: #333;
	  font-size: 13px;
	  padding: 0 15px;
	  display: flex;
	  align-items: center;
	  justify-content: flex-start;
	}
	.banners-info-home .icon-svg {
	  display: inline-block;
	  min-width: 40px;
	  height: 45px;
	  background-size: 40px;
	  margin-right: 15px;
	  background-repeat: no-repeat;
	  background-position: center;
	}
	.banners-info-home .inner-div p{
		margin-bottom: 0;
	}
	.banners-info-home .inner-div a{
		cursor: pointer;
	  color: #3483fa;
	}
	.banners-info-home .inner-div a:hover{
		text-decoration: underline;
	}
	.banners-info-home .cards-container span {
	  display: inline-block;
	  width: calc(47% - 2px);
	  height: 25px;
	  border: 1px solid #e4e4e4;
	  border-radius: 3px;
	  background-size: 80%;
	  background-repeat: no-repeat;
	  background-position: center;
	}
	.banners-info-home .icon-svg.box-svg {
	  background-image: url(./Assets/images/Utilities/caja-info-home.svg);
	}
	.banners-info-home .icon-svg.aduanas-svg {
	  background-image: url(./Assets/images/Utilities/avion-info-home.svg);
	  min-width: 45px;
	  height: 45px;
	  background-size: 45px;
	}
	.banners-info-home .icon-svg.help-svg {
	  background-image: url(./Assets/images/Utilities/headphones-info-home.svg);
	}
	.visa-svg {
	  background-image: url(./Assets/images/Utilities/visa.svg);
	}
	.master-svg {
	  background-image: url(./Assets/images/Utilities/mastercard.svg);
	}
	.amex-svg {
	  background-image: url(./Assets/images/Utilities/american_express.svg);
	}
	.pagoefectivo-svg {
	  background-image: url(./Assets/images/Utilities/pagoefectivo.svg);
	}
	.solo_uy {
	  display: none !important;
	}
	.solo_ar {
	  display: none !important;
	}
	.solo_cl {
	  display: none!important;
	}
	.solo_ec {
	  display: none!important;
	}
	.solo_pe{
	  display: block !important;
	}
</style>
<!-- FEATURES - HOME -->
<section class="mt-4 mb-4  features__area pt-20">
	<div class="container bg-white">


		<div class="banners-info-home border-radius-cards border-shadow-cards">
			<div class="inner-div">
				<span class="icon-svg box-svg"></span>
				<p>Qué es Tiendamia. Fácil, rápido y seguro. <a href="javascript:void(0);" id="como_comprar_light">Cómo comprar</a></p>
			</div>
			<div class="inner-div border-left">
				<span class="icon-svg aduanas-svg"></span>
				<p>Información de Aduanas. Hacemos todo por ti. <a href="javascript:void(0);">Saber más</a></p>
			</div>
			<div class="inner-div border-left">
				<div class="cards-container">
					<span class="visa-svg solo_ar solo_uy solo_pe solo_ec"></span>
					<span class="master-svg solo_ar solo_uy solo_pe solo_ec"></span>
					<span class="amex-svg solo_ar solo_uy solo_pe solo_ec"></span>
					<span class="ocaNew solo_uy"></span>
					<span class="pagoefectivo-svg solo_pe"></span>
					<span class="rapipago-svg solo_ar"></span>
					<span class="diners-svg solo_cl"></span>
					<span class="alia-svg solo_ec"></span>
				</div>
				<p class="solo_uy solo_pe solo_cl">Paga con crédito o débito. <br>
				<a class="solo_uy" href="javascript:void(0);">Ver promociones</a>
				</p>
				<p class="solo_ar solo_ec">Pagá con tu medio de pago preferido.</p><p></p>
			</div>
			<div class="inner-div border-left">
				<span class="icon-svg help-svg"></span>
				<p>Ayuda y seguimiento en tu idioma. <a class="solo_ar solo_uy solo_pe" href="javascript:void(0);" id="trackingGA">Centro de ayuda en línea</a>
				<a class="solo_cl solo_ec" target="_blank" id="trackingGA" href="javascript:void(0);">Centro de ayuda</a></p>
			</div>
		</div>



		<!-- 
		<div class="row" style="background-color: #fff;display: flex;justify-content: space-between;min-height: 90px;margin-top: 30px;padding: 15px 0;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;box-shadow: 0 1px 1px 0 rgb(0 0 0 / 10%);border: 1px solid #dcdcdced;-webkit-border-radius: 8px;-moz-border-radius: 8px;border-radius: 8px;">
			<div class="col pr-0 pl-0">
				<div class="features__item d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fal fa-truck"></i>
					</div>
					<div class="features__content">
						<h6>FREE DELIVERY</h6>
						<p>For all orders over $120</p>
					</div>
				</div>
			</div>
			<div class="col pr-0 pl-0">
				<div class="features__item d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fal fa-money-check"></i>
					</div>
					<div class="features__content">
						<h6>SAFE PAYMENT</h6>
						<p>100% secure payment</p>
					</div>
				</div>
			</div>
			<div class="col pr-0 pl-0">
				<div class="features__item d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fal fa-comments-alt"></i>
					</div>
					<div class="features__content">
						<h6>24/7 HELP CENTER</h6>
						<p>Delicated 24/7 support</p>
					</div>
				</div>
			</div>
			<div class="col pr-0 pl-0">
				<div class="features__item features__item-last d-flex white-bg">
					<div class="features__icon mr-20">
						<i class="fad fa-user-headset"></i>
					</div>
					<div class="features__content">
						<h6>FRIENDLY SERVICES</h6>
						<p>30 day satisfaction guarantee</p>
					</div>
				</div>
			</div>
		</div>
		 -->
	</div>
</section>