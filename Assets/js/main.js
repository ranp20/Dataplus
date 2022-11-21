(function () {
	"use strict";

	var treeviewMenu = $('.app-menu');

	// Toggle Sidebar
	$('[data-toggle="sidebar"]').click(function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
	});

	// Activate sidebar treeview toggle
	$("[data-toggle='treeview']").click(function(event) {
		event.preventDefault();
		if(!$(this).parent().hasClass('is-expanded')) {
			treeviewMenu.find("[data-toggle='treeview']").parent().removeClass('is-expanded');
		}
		$(this).parent().toggleClass('is-expanded');
	});

	// Set initial active toggle
	$("[data-toggle='treeview.'].is-expanded").parent().toggleClass('is-expanded');

	$(document).on("click","#u-close_logg",function(e){
		e.preventDefault();
		console.log('Cerrar sesión');
	});

	/*
	$("*[data-dropdown-custommenu]").hover(function(){
		let namehover = $(this).data("dropdown-custommenu");
		if(namehover == "cart-menu"){
			$("#backdrop").removeClass('hide');
			$(this).addClass('active');
			$(this).next().addClass('active');
		}
		}, function(event){
			var backdropHome = document.querySelector("#backdrop");
			var eventTarget = $(event.target);
			// console.log(e.target);
			if(eventTarget.is(backdropHome)){
					console.log('asdasdasdads');
					$("#backdrop").addClass('hide');
					$(this).removeClass('active');
					$(this).next().removeClass('active');
				// if($(this).hasClass('active')){
				// }
			}
	  }
	);
	*/
	// ----------- HACER HOVER EN UN ELEMENTO CON DROPDOWN
	var namehover = document.querySelector("*[data-dropdown-custommenu]");
	var backdropHome = document.querySelector("#backdrop");
	namehover.addEventListener("mouseenter",function(){
		var attrnamehov = this.getAttribute("data-dropdown-custommenu");
		if(attrnamehov == "cart-menu"){
			$("#backdrop").removeClass('hide');
			$(this).addClass('active');
			$(this).next().addClass('active');
		}
	});
	backdropHome.addEventListener("mouseenter", function(){
		if(namehover.classList.contains("active")){
			this.classList.add("hide");
			namehover.classList.remove('active');
			namehover.nextElementSibling.classList.remove('active');
		}
	});

})();

