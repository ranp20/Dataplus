$(() => {
	$(document).on("click",".button-login",function(){
		$(".c-mHmLogin_main__c__cont__ct__cCont").each(function(i, v){
			let idthis = i;
			if($(this).hasClass('active')){
				$(this).removeClass('active');
			}else{
				$(this).addClass('active');
			}
		});
	});
	// ----------------- VER LA CONTRASEÑA
	$(document).on("click","#show_password",function(e){
		let typeinput = $("#cvl-log_password").attr("type");
		if(typeinput == "password"){
			$("#cvl-log_password").attr("type", "text");
			$(this).html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cAccount__cont--fAccount--form--controls--cIcon--pass"><path d="M19.604 2.562l-3.346 3.137c-1.27-.428-2.686-.699-4.243-.699-7.569 0-12.015 6.551-12.015 6.551s1.928 2.951 5.146 5.138l-2.911 2.909 1.414 1.414 17.37-17.035-1.415-1.415zm-6.016 5.779c-3.288-1.453-6.681 1.908-5.265 5.206l-1.726 1.707c-1.814-1.16-3.225-2.65-4.06-3.66 1.493-1.648 4.817-4.594 9.478-4.594.927 0 1.796.119 2.61.315l-1.037 1.026zm-2.883 7.431l5.09-4.993c1.017 3.111-2.003 6.067-5.09 4.993zm13.295-4.221s-4.252 7.449-11.985 7.449c-1.379 0-2.662-.291-3.851-.737l1.614-1.583c.715.193 1.458.32 2.237.32 4.791 0 8.104-3.527 9.504-5.364-.729-.822-1.956-1.99-3.587-2.952l1.489-1.46c2.982 1.9 4.579 4.327 4.579 4.327z"></path></svg>`);
		}else{
			$("#cvl-log_password").attr("type", "password");
			$(this).html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cAccount__cont--fAccount--form--controls--cIcon--pass"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"></path></svg>`);
		}
	});
	// ----------------- VER LA CONTRASEÑA
	$(document).on("click","#show_reg-password",function(e){
		let typeinput = $("#password-reg").attr("type");
		if(typeinput == "password"){
			$("#password-reg").attr("type", "text");
			$(this).html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cAccount__cont--fAccount--form--controls--cIcon--pass"><path d="M19.604 2.562l-3.346 3.137c-1.27-.428-2.686-.699-4.243-.699-7.569 0-12.015 6.551-12.015 6.551s1.928 2.951 5.146 5.138l-2.911 2.909 1.414 1.414 17.37-17.035-1.415-1.415zm-6.016 5.779c-3.288-1.453-6.681 1.908-5.265 5.206l-1.726 1.707c-1.814-1.16-3.225-2.65-4.06-3.66 1.493-1.648 4.817-4.594 9.478-4.594.927 0 1.796.119 2.61.315l-1.037 1.026zm-2.883 7.431l5.09-4.993c1.017 3.111-2.003 6.067-5.09 4.993zm13.295-4.221s-4.252 7.449-11.985 7.449c-1.379 0-2.662-.291-3.851-.737l1.614-1.583c.715.193 1.458.32 2.237.32 4.791 0 8.104-3.527 9.504-5.364-.729-.822-1.956-1.99-3.587-2.952l1.489-1.46c2.982 1.9 4.579 4.327 4.579 4.327z"></path></svg>`);
		}else{
			$("#password-reg").attr("type", "password");
			$(this).html(`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="cAccount__cont--fAccount--form--controls--cIcon--pass"><path d="M12.015 7c4.751 0 8.063 3.012 9.504 4.636-1.401 1.837-4.713 5.364-9.504 5.364-4.42 0-7.93-3.536-9.478-5.407 1.493-1.647 4.817-4.593 9.478-4.593zm0-2c-7.569 0-12.015 6.551-12.015 6.551s4.835 7.449 12.015 7.449c7.733 0 11.985-7.449 11.985-7.449s-4.291-6.551-11.985-6.551zm-.015 3c-2.209 0-4 1.792-4 4 0 2.209 1.791 4 4 4s4-1.791 4-4c0-2.208-1.791-4-4-4z"></path></svg>`);
		}
	});
	// ------------ REGISTER
	$(document).on("submit", "#id_register", function(e){
		e.preventDefault();
		if($("#firstname").val() != 0 && $("#firstname").val() != ""){
			$(".error_msg.nofirstname").css({"display":"none"});
			$(".error_msg.nofirstname").text("");
		}else{
			$(".error_msg.nofirstname").css({"display":"block"});
			$(".error_msg.nofirstname").text("Nombre requerido *");
		}
		if($("#lastname").val() != 0 && $("#lastname").val() != ""){
			$(".error_msg.nolastname").css({"display":"none"});
			$(".error_msg.nolastname").text("");
		}else{
			$(".error_msg.nolastname").css({"display":"block"});
			$(".error_msg.nolastname").text("Apellido requerido *");
		}
		if($("#email_address_register").val() != 0 && $("#email_address_register").val() != ""){
			$(".error_msg.notregemail").css({"display":"none"});
			$(".error_msg.notregemail").text("");
		}else{
			$(".error_msg.notregemail").css({"display":"block"});
			$(".error_msg.notregemail").text("Email requerido *");
		}
		if($("#password-reg").val() != 0 && $("#password-reg").val() != ""){
			$(".error_msg.dtplspassword").css({"display":"none"});
			$(".error_msg.dtplspassword").text("");
		}else{
			$(".error_msg.dtplspassword").css({"display":"block"});
			$(".error_msg.dtplspassword").text("Contraseña requerida *");
		}
	  
	  if($("#firstname").val() != 0 && $("#firstname").val() != "" &&	$("#lastname").val() != 0 && $("#lastname").val() != "" && $("#email_address_register").val() != 0 && $("#email_address_register").val() != "" && $("#password-reg").val() != 0 && $("#password-reg").val() != ""){	    
  		var form = $(this).serializeArray();
	    $.ajax({
	      url: './controllers/valid_only/prcss_register-user.php',
	      method: 'POST',
	      dataType: 'JSON',
	      contentType: 'application/x-www-form-urlencoded;charset=UTF-8',
	      data: form
	    }).done((e) => {
	    	
	    	console.log(e);
	    	console.log(e.r);
				
	    	if(e != "" && e != "[]"){
		      if(e.r == "true"){
		        Swal.fire({
				      title: '',
				      html: `<div class="alertSwal">
					            <div class="alertSwal__cTitle">
					              <h3>¡Éxito!</h3>
					            </div>
					            <div class="alertSwal__cText">
					              <p>El usuario ha sido registrado.</strong></p>
					            </div>
					            <button type="button" role="button" tabindex="0" class="SwalBtn1 customSwalBtn">Aceptar</button>
					          </div>`,
				      icon: 'success',
				      showCancelButton: false,
					    showConfirmButton: false,
					    confirmButtonColor: '#3085d6',
					    confirmButtonText: 'Aceptar',
					    allowOutsideClick: false,
					    allowEscapeKey:false,
					    allowEnterKey:true,
					    timer: 1000
				    });
				    $(document).on('click', '.SwalBtn1', function() {
					    swal.clickConfirm();
					    window.location.href = "./";
					  });
					  setTimeout(function(){
					  	window.location.href = "./";
					  }, 1000);
		        $("#header-login").html(`
		        	<a href='javascript:void(0);'>
                <div class='header-icon-style'>
                  <i class='icon-user icons'></i>
                </div>
                <div class='login-text-content' id='login-text-content'>
                  <p><strong>${e.received.username}</strong></p>
                </div>
              </a>
              <div class='listoptions-login-content'>
                <ul>
                  <li class='single-listoptions-login'>
                    <a href='my-account'>
                      <i class='icon-user icons'></i>
                      <span>Mi cuenta</span>
                    </a>
                  </li>
                  <li class='single-listoptions-login'>
                    <a href='logout'>
                      <i class='icon-logout icons'></i>
                      <span>Cerrar sesión</span>
                    </a>
                  </li>
                </ul>
              </div>
		        `);
		        $('#frm_2-Reg')[0].reset();
		      }else if(e.r == "equals"){
		      	
		        Swal.fire({
				      title: '',
				      html: `<div class="alertSwal">
					            <div class="alertSwal__cTitle">
					              <h3>¡Usuario ya existe!</h3>
					            </div>
					            <div class="alertSwal__cText">
					              <p>El usuario ingresado <strong class="bold-pricolor">ya se encuentra registrado, por favor inicie sesión.</strong></p>
					            </div>
					            <button type="button" role="button" tabindex="0" class="SwalBtn1 customSwalBtn">Aceptar</button>
					          </div>`,
				      icon: 'warning',
				      showCancelButton: false,
					    showConfirmButton: false,
					    confirmButtonColor: '#3085d6',
					    confirmButtonText: 'Aceptar',
					    allowOutsideClick: false,
					    allowEscapeKey:false,
					    allowEnterKey:true
				    });
				    $(document).on('click', '.SwalBtn1', function() {
					    swal.clickConfirm();
					  });
		      }else if(e.r == "err_email"){
		        Swal.fire({
				      title: '',
				      html: `<div class="alertSwal">
					            <div class="alertSwal__cTitle">
					              <h3>¡Email Inválido!</h3>
					            </div>
					            <div class="alertSwal__cText">
					              <p>El correo electrónico ingresado no es válido.</p>
					            </div>
					            <button type="button" role="button" tabindex="0" class="SwalBtn1 customSwalBtn">Aceptar</button>
					          </div>`,
				      icon: 'error',
				      showCancelButton: false,
					    showConfirmButton: false,
					    confirmButtonColor: '#3085d6',
					    confirmButtonText: 'Aceptar',
					    allowOutsideClick: false,
					    allowEscapeKey:false,
					    allowEnterKey:true
				    });
				    $(document).on('click', '.SwalBtn1', function() {
					    swal.clickConfirm();
					  });
		      }else if(e.r == "err_insert"){
		        Swal.fire({
				      title: 'Error!',
				      html: `<span class='font-w-300'>Lo sentimos, hubo un error al procesar la información.</span>`,
				      icon: 'error',
				      confirmButtonText: 'Aceptar'
				    });
		      }else{
		        Swal.fire({
				      title: 'Error!',
				      html: `<span class='font-w-300'>Lo sentimos, hubo un error al procesar la información.</span>`,
				      icon: 'error',
				      confirmButtonText: 'Aceptar'
				    });
		      }
	    	}else{
	    		Swal.fire({
			      title: 'Error!',
			      html: `<span class='font-w-300'>Lo sentimos, hubo un error al procesar la información.</span>`,
			      icon: 'error',
			      confirmButtonText: 'Aceptar'
			    });
	    	}
	    	
	    });
	  }else{
		  Swal.fire({
		    title: '',
		    html: `<div class="alertSwal">
		            <div class="alertSwal__cTitle">
		              <h3>¡Atención!</h3>
		            </div>
		            <div class="alertSwal__cText">
		              <p>Debes completar los campos requeridos.</p>
		            </div>
		            <button type="button" role="button" tabindex="0" class="SwalBtn1 customSwalBtn">Aceptar</button>
		          </div>`,
		    icon: 'warning',
		    showCancelButton: false,
		    showConfirmButton: false,
		    confirmButtonColor: '#3085d6',
		    confirmButtonText: 'Aceptar',
		    allowOutsideClick: false,
		    allowEscapeKey:false,
		    allowEnterKey:true
		  });
		  $(document).on('click', '.SwalBtn1', function() {
		    swal.clickConfirm();
		  });
	  }
		

	});
});