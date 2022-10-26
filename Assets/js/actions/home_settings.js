$(() => {
  // ------------ BANNERS - HOME
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
    items:4,
    lazyLoad:true,
    loop:true,
    autoplay:false,
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
        items: 4,
        nav:false,
        dots:false,
        margin:15
      },
      1200: {
        items: 4,
        nav:false,
        dots:false,
        margin:15
      }
    }
  });
  $('#arr-left__products-new-list_home').click(function(){
    owl_productnewlist1home.trigger('prev.owl.carousel', [300]);
  });
  $('#arr-right__products-new-list_home').click(function(){
    owl_productnewlist1home.trigger('next.owl.carousel', [300]);
  });
  // ------------ PRODUCTOS NUEVOS 2 - HOME
  var owl_productnewlist2home = $('.products-new-1-list_home');
  owl_productnewlist2home.owlCarousel({
    items:4,
    lazyLoad:true,
    loop:true,
    autoplay:false,
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
        items: 4,
        nav:false,
        dots:false,
        margin:15
      },
      1200: {
        items: 4,
        nav:false,
        dots:false,
        margin:15
      }
    }
  });
  $('#arr-left__products-new-1-list_home').click(function(){
    owl_productnewlist2home.trigger('prev.owl.carousel', [300]);
  });
  $('#arr-right__products-new-1-list_home').click(function(){
    owl_productnewlist2home.trigger('next.owl.carousel', [300]);
  });
  // ------------ PRODUCTOS RECOMENDADOS - HOME
  var owl_productrecomendedlisthome = $('.products-recomended-list_home');
  owl_productrecomendedlisthome.owlCarousel({
    items:4,
    lazyLoad:true,
    loop:true,
    autoplay:false,
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
        items: 4,
        nav:false,
        dots:false,
        margin:15
      },
      1200: {
        items: 4,
        nav:false,
        dots:false,
        margin:15
      }
    }
  });
  $('#arr-left__products-recomended-list_home').click(function(){
    owl_productrecomendedlisthome.trigger('prev.owl.carousel', [300]);
  });
  $('#arr-right__products-recomended-list_home').click(function(){
    owl_productrecomendedlisthome.trigger('next.owl.carousel', [300]);
  });

});