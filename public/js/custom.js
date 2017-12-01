jQuery(function ($) { "use strict";


/* ========================================================================= */
/*	Custom Scrollbar
/* ========================================================================= */

var nice = $("html").niceScroll({
  cursorborderradius: 0,
  cursorwidth: "8px",
  cursorfixedheight: 150,
  cursorcolor: "#2dc997",
  zindex: 9999,
  cursorborder: 0,
});


/* ========================================================================= */
/*	Nav link highlighting
/* ========================================================================= */


$('#nav-menu-container').onePageNav({
  currentClass: 'menu-active',
  changeHash: false,
  scrollSpeed: 1500,
  scrollThreshold: .25,
  filter: '',
  easing: 'easeInOutExpo'
});


});
