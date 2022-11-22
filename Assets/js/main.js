(() => {
	// ----------- LOAD PAGE
	$(".animsition").animsition({
	  inClass: 'fade-in',
	  outClass: 'fade-out',
	  inDuration: 1500,
	  outDuration: 800,
	  linkElement: '.animsition-link',
	  loading: true,
	  loadingParentElement: 'html',
	  loadingClass: 'animsition-loading-1',
	  loadingInner: '<div class="loader05"></div>',
	  timeout: false,
	  timeoutCountdown: 5000,
	  onLoadEvent: true,
	  browser: [ 'animation-duration', '-webkit-animation-duration'],
	  overlay : false,
	  overlayClass : 'animsition-overlay-slide',
	  overlayParentElement : 'html',
	  transition: function(url){ window.location.href = url; }
	});
	// ----------- BACK TO TOP
	var windowH = $(window).height()/2;
	$(window).on('scroll',function(){
		if($(this).scrollTop() > windowH){
		  $("#myBtn").css('display','flex');
		}else{
		  $("#myBtn").css('display','none');
		}
	});

	$('#myBtn').on("click", function(){
	$('html, body').animate({scrollTop: 0}, 300);
	});
	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event){
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event){
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')){
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// ----------- CERRAR SESIÓN DEL USUARIO
	$(document).on("click","#u-close_logg",function(e){
		e.preventDefault();
		console.log('Cerrar sesión');
	});

	// ----------- HACER HOVER EN UN ELEMENTO CON DROPDOWN
	var namehoverAll = document.querySelectorAll("*[data-dropdown-custommenu]");
	var backdropHome = document.querySelector("#backdrop");
	namehoverAll.forEach(function(i,e){
		var namehover = i;
		namehover.addEventListener("mouseenter",function(){
			var attrnamehov = this.getAttribute("data-dropdown-custommenu");
			if(attrnamehov == "cart-menu"){
				$("#backdrop").removeClass('hide');
				$(this).addClass('active');
				$(this).next().addClass('active');
			}else if(attrnamehov == "listAllCateg-menu"){
				$("#backdrop").removeClass('hide');
				$(this).addClass('active');
				$(this).next().addClass('active');
			}else{
				console.log('No es un menu hover')
			}
		});
	});
	// ----------- REMOVER ELEMENTO DROPDOWN AL HACER HOVER EN EL BACKDROP
	backdropHome.addEventListener("mouseenter", function(){
		namehoverAll.forEach(function(i,e){
			var namehover = i;
			if(namehover.classList.contains("active")){
				backdropHome.classList.add("hide");
				namehover.classList.remove('active');
				namehover.nextElementSibling.classList.remove('active');
			}
		});
	});
})();

