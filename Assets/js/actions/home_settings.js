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