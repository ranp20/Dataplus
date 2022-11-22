$(() => {
  // ------------ BANNERS - HOME - SLICKCAROUSEL
  $('.wrap-slick1').each(function(){
    var wrapSlick1 = $(this);
    var slick1 = $(this).find('.slick1');
    var itemSlick1 = $(slick1).find('.item-slick1');
    var layerSlick1 = $(slick1).find('.layer-slick1');
    var actionSlick1 = [];

    $(slick1).on('init', function(){
      var layerCurrentItem = $(itemSlick1[0]).find('.layer-slick1');
      for(var i=0; i<actionSlick1.length; i++){
        clearTimeout(actionSlick1[i]);
      }

      $(layerSlick1).each(function(){
        $(this).removeClass($(this).data('appear') + ' visible-true');
      });

      for(var i=0; i<layerCurrentItem.length; i++){
        actionSlick1[i] = setTimeout(function(index){
            $(layerCurrentItem[index]).addClass($(layerCurrentItem[index]).data('appear') + ' visible-true');
        },$(layerCurrentItem[i]).data('delay'),i);
      }        
    });

    var showDot = false;
    if($(wrapSlick1).find('.wrap-slick1-dots').length > 0){
        showDot = true;
    }

    $(slick1).slick({
      pauseOnFocus: false,
      pauseOnHover: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      speed: 1000,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 6000,
      arrows: true,
      appendArrows: $(wrapSlick1),
      prevArrow:'<button class="arrow-slick1 prev-slick1"><i class="zmdi zmdi-caret-left"></i></button>',
      nextArrow:'<button class="arrow-slick1 next-slick1"><i class="zmdi zmdi-caret-right"></i></button>',
      dots: showDot,
      appendDots: $(wrapSlick1).find('.wrap-slick1-dots'),
      dotsClass:'slick1-dots',
      customPaging: function(slick, index){
        var linkThumb = $(slick.$slides[index]).data('thumb');
        var caption = $(slick.$slides[index]).data('caption');
        return  '<img src="' + linkThumb + '">' +
                '<span class="caption-dots-slick1">' + caption + '</span>';
      },
    });
    $(slick1).on('afterChange', function(event, slick, currentSlide){ 
      var layerCurrentItem = $(itemSlick1[currentSlide]).find('.layer-slick1');
      for(var i=0; i<actionSlick1.length; i++){
        clearTimeout(actionSlick1[i]);
      }

      $(layerSlick1).each(function(){
        $(this).removeClass($(this).data('appear') + ' visible-true');
      });

      for(var i=0; i<layerCurrentItem.length; i++){
        actionSlick1[i] = setTimeout(function(index){
            $(layerCurrentItem[index]).addClass($(layerCurrentItem[index]).data('appear') + ' visible-true');
        },$(layerCurrentItem[i]).data('delay'),i);
      }
    });
  });
  // ------------ BANNERS - HOME - OWLCAROUSEL
  var owl_categlisthome = $('.banners-list_home');
  owl_categlisthome.owlCarousel({
    items:1,
    lazyLoad:true,
    loop:true,
    autoplay:true,
    autoplayTimeout:6000,
    autoplayHoverPause:false,
    nav:false,
    dots:false,
    margin:0,
    responsiveClass:true,
    responsive:{
      0: {
        items: 1,
        nav:false,
        dots:false,
        margin:0,
      },
      576: {
        items: 1,
        nav:false,
        dots:false
      },
      768: {
        items: 1,
        nav:false,
        dots:false
      },
      992: {
        items: 1,
        nav:false,
        dots:false,
        margin:0
      },
      1200: {
        items: 1,
        nav:false,
        dots:false,
        margin:0
      }
    }
  });
  $('.slider-arrow-left').click(function(){
    owl_categlisthome.trigger('prev.owl.carousel', [300]);
  });
  $('.slider-arrow-right').click(function(){
    owl_categlisthome.trigger('next.owl.carousel', [300]);
  });
  // ------------ PRODUCTOS NUEVOS 1 - HOME
  var owl_productnewlist1home = $('.products-new-list_home');
  owl_productnewlist1home.owlCarousel({
    items:5,
    lazyLoad:true,
    loop:true,
    autoplay:false,
    autoHeight: false,
    autoHeightClass: 'owl-height',
    autoplayTimeout:6000,
    autoplayHoverPause:false,
    nav:false,
    dots:false,
    margin:15,
    responsiveClass:true,
    responsive:{
      0: {
        items: 2,
        nav:false,
        dots:false,
        margin:15,
      },
      576: {
        items: 2,
        nav:false,
        dots:false
      },
      768: {
        items: 3,
        nav:false,
        dots:false
      },
      992: {
        items: 5,
        nav:false,
        dots:false,
        margin:15
      },
      1200: {
        items: 5,
        nav:false,
        dots:false,
        margin:15
      }
    }
  });
  $('#arr-left__prods-new-l_home').click(function(){
    owl_productnewlist1home.trigger('prev.owl.carousel', [300]);
  });
  $('#arr-right__prods-new-l_home').click(function(){
    owl_productnewlist1home.trigger('next.owl.carousel', [300]);
  });
  // ------------ PRODUCTOS NUEVOS 2 - HOME
  var owl_productnewlist2home = $('.products-new-1-list_home');
  owl_productnewlist2home.owlCarousel({
    items:5,
    lazyLoad:true,
    loop:true,
    autoplay:false,
    autoHeight: false,
    autoHeightClass: 'owl-height',
    autoplayTimeout:6000,
    autoplayHoverPause:false,
    nav:false,
    dots:false,
    margin:15,
    responsiveClass:true,
    responsive:{
      0: {
        items: 2,
        nav:false,
        dots:false,
        margin:15,
      },
      576: {
        items: 2,
        nav:false,
        dots:false
      },
      768: {
        items: 3,
        nav:false,
        dots:false
      },
      992: {
        items: 5,
        nav:false,
        dots:false,
        margin:15
      },
      1200: {
        items: 5,
        nav:false,
        dots:false,
        margin:15
      }
    }
  });
  $('#arr-left__prods-new-1-l_home').click(function(){
    owl_productnewlist2home.trigger('prev.owl.carousel', [300]);
  });
  $('#arr-right__prods-new-1-l_home').click(function(){
    owl_productnewlist2home.trigger('next.owl.carousel', [300]);
  });
  // ------------ PRODUCTOS RECOMENDADOS - HOME
  var owl_productnewlist3home = $('.products-new-2-list_home');
  owl_productnewlist3home.owlCarousel({
    items:5,
    lazyLoad:true,
    loop:true,
    autoplay:false,
    autoHeight: false,
    autoHeightClass: 'owl-height',
    autoplayTimeout:6000,
    autoplayHoverPause:false,
    nav:false,
    dots:false,
    margin:15,
    responsiveClass:true,
    responsive:{
      0: {
        items: 2,
        nav:false,
        dots:false,
        margin:15,
      },
      576: {
        items: 2,
        nav:false,
        dots:false
      },
      768: {
        items: 3,
        nav:false,
        dots:false
      },
      992: {
        items: 5,
        nav:false,
        dots:false,
        margin:15
      },
      1200: {
        items: 5,
        nav:false,
        dots:false,
        margin:15
      }
    }
  });
  $('#arr-left__prods-new-2-l_home').click(function(){
    owl_productnewlist3home.trigger('prev.owl.carousel', [300]);
  });
  $('#arr-right__prods-new-2-l_home').click(function(){
    owl_productnewlist3home.trigger('next.owl.carousel', [300]);
  });

});