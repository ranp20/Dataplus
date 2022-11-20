<?php 
	require_once 'Libraries/Core/Controllers.php';
	require_once("Models/TCategoria.php");
	require_once("Models/TProducto.php");
	require_once("Models/TBanners.php");
	require_once("Models/TTestimonials.php");
	class Home extends Controllers{
		use TCategoria, TProducto, TBanners, TTestimonials;
		public function __construct()
		{
			parent::__construct();
			session_start();
		}

		public function home()
		{
			$pageContent = getPageRout('inicio');
			$data['page_tag'] = NOMBRE_EMPESA;
			$data['page_title'] = NOMBRE_EMPESA;
			$data['page_name'] = "tienda_virtual";
			$data['page'] = $pageContent;
			$data['slider'] = $this->getCategoriasT(CAT_SLIDER);
			$data['banner'] = $this->getCategoriasT(CAT_BANNER);
			$data['categorias'] = $this->getCategoriasAll();
			$data['productos'] = $this->getProductosT();
			$data['banners'] = $this->getBannersHome();
			$data['testimonials'] = $this->getTestimonialsHome();
			$this->views->getView($this,"home",$data); 
		}

	}
 ?>
