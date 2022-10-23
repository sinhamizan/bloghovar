(function ($) {
  "use strict";

  var preloader = document.getElementById("preloader");
  var bdy = document.querySelector("body");

  bdy.onload = function () {
    preloader.style.display = "none";
  }


  // Open Search Box
  document.querySelector('#open_search_box').addEventListener('click', (e) => {
    document.querySelector('.header__search').style.transform = "translate(0, 0)";
    document.querySelector('body').style.overflow = "hidden";
  });

  // Close Search Box
  document.querySelector('#close_search_box').addEventListener('click', (e) => {
    document.querySelector('.header__search').style.transform = "translate(-100%, 100%)";
    document.querySelector('body').style.overflow = "visible";
  });


  // Sticky Menu
  var navbar = document.querySelector(".header__area");

  window.onscroll = (e) => {
    if( document.documentElement.scrollTop > 50 || document.body.scrollTop >50 ) {
      navbar.classList.add( 'sticky' );
    } else {
      navbar.classList.remove( 'sticky' );
    }
  }

  // Hero slider
  var hero_slider = new Swiper(".hero_slider", {
    loop: true,
    speed: 1500,
    navigation: {
      nextEl: ".swiper-btn-next",
      prevEl: ".swiper-btn-prev",
    },
  });


  // Go to Top
  let scroll_top = document.getElementById("scroll_top");

  if( scroll_top ) {
    window.onscroll = function() {
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        scroll_top.style.display = "block";
      } else {
        scroll_top.style.display = "none";
      }
    };

    scroll_top.addEventListener( 'click', function(e) {
      e.preventDefault();
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    } );
  }


  jQuery(document).ready(function () {

    // Mean Menu Active
    jQuery('#site-navigation').meanmenu({
      meanScreenWidth: '1199',
    });
  });


})(jQuery);