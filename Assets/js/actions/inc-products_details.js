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
  
});

// ----------- LIBRERÍA PARA HACER ZOOM CON VANILLA JAVASCRIPT - OJO: SE TIENE QUE LLAMAR DESPUÉS DE QUE HAYA CARGADO TODO EL HTML, PUEDE SER USADO DENTRO DEL DOOM
// ----------- COLOCAR TODA LA LÓGICA DE LA LIBRERÍA EN UNA FUNCIÓN SIMPLE
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
      /*
      if(e.classList.contains('active')){
        console.log('Existe un DIV con active');
      }
      */
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