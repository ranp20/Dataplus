$(() => {
  // ------------ ANCLAS INTERNAS PARA LAS SECCCIONES
  const linksAnchParent = $("#tab-links-prodDetails");
  const linksAnch = linksAnchParent.find("div");
  const itemsAnch = $(`div[data-tab-ctDet="tab"]`);
  const firstLinkAnch = linksAnch.eq(0).data("tab-custom").slice(1);

  // MOSTRAR EL PRIMER LINK Y SU SECCIÓN
  linksAnch
    .eq(0)
    .add($(`div[tab-custom="${firstLinkAnch}"]`))
    .addClass("active");
  // MOSTRAR SECCIÓN DE ACUERDO AL LINK
  linksAnch.on("click", function(){
    var t = $(this);
    var tindex = t.index();
    var tattribute = t.data("tab-custom").slice(1);
    // linksAnch.eq(tindex).add(itemsAnch.eq(tindex)).addClass("active").siblings().removeClass("active");
    linksAnch
      .eq(tindex)
      .add($(`div[id="${tattribute}"]`))
      .addClass('active')
      .siblings()
      .removeClass("active");
  });
  
  // ----------- ADD PRODUCTO INTO CART
  $('.js-addcart-detail').each(function(){
    let nameProduct = $(this).parent().parent().parent().parent().find('.js-name-detail').html();
    let cant = 1;
    $(this).on('click', function(){
      let id = this.getAttribute('id');
      if(document.querySelector('#cant-product')){
        cant = document.querySelector('#cant-product').value;
      }
      if(this.getAttribute('pr')){
        cant = this.getAttribute('pr');
      }

      if(isNaN(cant) || cant < 1){
        swal("","La cantidad debe ser mayor o igual que 1" , "error");
        return;
      } 
      let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
        // let ajaxUrl = base_url+'/Models/products.php?addCarrito';
        let ajaxUrl = base_url+'/Controllers/valid_only/c_add-toCartBySession.php';
        let formData = new FormData();
        formData.append('id',id);
        formData.append('cant',cant);
        request.open("POST",ajaxUrl,true);
        request.send(formData);
        request.onreadystatechange = function(){
          if(request.readyState != 4) return;
          if(request.status == 200){
            let objData = JSON.parse(request.responseText);
            if(objData.status){
              document.querySelector("#productosCarrito").innerHTML = objData.htmlCarrito;
              //document.querySelectorAll(".cantCarrito")[0].setAttribute("data-notify",objData.cantCarrito);
              //document.querySelectorAll(".cantCarrito")[1].setAttribute("data-notify",objData.cantCarrito);
              const cants = document.querySelectorAll(".cantCarrito");
          cants.forEach(element => {
            element.setAttribute("data-notify",objData.cantCarrito)
          });
          new swal(nameProduct, "¡Se agrego al corrito!", "success");
            }else{
              new swal("", objData.msg , "error");
            }
          }
          return false;
        }
    });
  });

  // ----------- ZOOM INTO PRODUCT
  (function(ventana){
     function define_library(){
      var vanillaZoom = {};
      vanillaZoom.init = function(galleryId){
        var container = document.querySelector(galleryId);

        if(!container){
          console.error('Por favor, especifique la clase correcta de su galería.');
          return;
        }

        var childItemsImg = container.querySelectorAll('.tab-pane');
        childItemsImg.forEach(e => {
          var classThisChild = e.className;
          var firstSmallImage = e.querySelector('.small-preview');
          var zoomedImage = firstSmallImage.nextElementSibling;

          if(!zoomedImage){
            console.error('Agregue un elemento .zoomed-image a su galería.');
            return;
          }

          if(!firstSmallImage){
            console.error('Agregue imágenes con la clase .small-preview a su galería.');
            return;
          }else{
            zoomedImage.style.backgroundImage = 'url(' + firstSmallImage.src + ')';
          }

          e.addEventListener("click", function(evento){
            var elem = event.target;
            if(elem.classList.contains("small-preview")){
              zoomedImage.style.backgroundImage = 'url(' + elem.src + ')';
            }
          });

          zoomedImage.addEventListener('mouseenter', function(e){
            this.classList.add('active');
            this.style.backgroundSize = "250%";
          }, false);

          zoomedImage.addEventListener('mousemove', function(e){

            var dimentions = this.getBoundingClientRect();

            var x = e.clientX - dimentions.left;
            var y = e.clientY - dimentions.top;

            var xpercent = Math.round( 100 / (dimentions.width / x));
            var ypercent = Math.round( 100 / (dimentions.height / y));

            this.style.backgroundPosition = xpercent + '%' + ypercent + '%' ;

          }, false);

          zoomedImage.addEventListener('mouseleave', function(e){
            this.classList.remove('active');
            this.style.backgroundSize = "cover";
            this.style.backgroundPosition = "center";
          }, false);
        });
      }
      return vanillaZoom;
    }

    if( typeof (vanillaZoom) === 'undefined'){
      window.vanillaZoom = define_library();
    }else{
      console.log("Biblioteca ya definida");
    }
  })(this);
  vanillaZoom.init('#productThumbContent');
});

