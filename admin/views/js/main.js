$(() => {
  let btnOpen_m = document.querySelector("#icon-togglemenuMobile"),	btnClose_m = document.querySelector("#closebtnToggSideNav_icon"),	mSideBarLBackdop_m = document.querySelector(".nav-dashAdm"), btn_sessuser = document.querySelector("#btn-sessuserAdm"),	c_sessuser_m = document.querySelector("#list-opts-sessuser"), mContainRight = document.querySelector("#main-dashAdm");
  // ------------ TOGGLE MENU - DESKTOP
  btnOpen_m.addEventListener("click", function(){mSideBarLBackdop_m.classList.toggle("active");mContainRight.classList.toggle("active");});
  btnClose_m.addEventListener("click", function(){mSideBarLBackdop_m.classList.remove("active");mContainRight.classList.remove("active");});
  mSideBarLBackdop_m.addEventListener("click", function(e){if(e.target === mSideBarLBackdop_m){mSideBarLBackdop_m.classList.remove("active");}});
  // ------------ TOGGLE MENU - USUARIO
  btn_sessuser.addEventListener("click", function(){c_sessuser_m.classList.toggle("show");});
  
  // ------------ TOGGLE MENU SIDEBARLEFT
  const navMenu = document.querySelector('div.main-nav');
  const OpenMenus = [];
  navMenu.addEventListener('click', (e) =>  {
    if (!e.target.matches('li.submenu > a')) return
    e.preventDefault();

    let level = 0
      , eLI   = e.target.closest('li')
      , eUL   = e.target.closest('ul')
      , mOpen = eLI.classList.toggle('show')
      ;
    for(;;level++){ // get menu Level
      eUL = eUL.parentElement.closest('ul')
      if (!eUL || !eUL.matches('div.main-nav ul')) break
    }
    for(let i = OpenMenus.length; (--i) > level;){ // close all < sub levels
      OpenMenus.pop().classList.remove('show')
    }
    if(OpenMenus[level] && OpenMenus[level] != eLI )
      OpenMenus.pop().classList.remove('show')

    if(mOpen){
      OpenMenus.push(eLI)  // memorize adding menu opened
    }else{
      OpenMenus.pop()     // or remove it. 
    }
  });
  // ------------ ITEM SELECCIONADO DEL MENÚ EN CADA PÁGINA - SIDEBARLEFT
  var url = window.location.pathname;
  var filename = url.substring(url.lastIndexOf('/')+1);
  if(filename == "ajustes" || filename == "banner-principal"){
    $(".nav-dashAdm--sidenav--c--cList--m--i a").removeClass("active");
    $(".nav-dashAdm--sidenav--c--cList--mOthers--i a").eq(0).addClass('active');
  }else{
    $(".nav-dashAdm--sidenav--c--cList--m--i a").removeClass("active");
    $('.nav-dashAdm--sidenav--c--cList--m--i a[href="' + filename + '"]').addClass("active");
  }

});
