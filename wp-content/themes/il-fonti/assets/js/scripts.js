

/* parallax move */

$(document).ready(function () {
 $('.parallax-move').parallaxContent();
});

$(document).ready(function () {

  $('.parallax-move').parallaxContent({
    "shift": 10, 
    "duration": 1.5,
    "gyroSensitivity": 30
  });

});

// adicionando clases de boostrap al menú
  $(document).ready(function(){
    $('.navbar-nav').children('li').addClass('nav-item active');
    $('.nav-item').children('a').addClass('nav-link');
  });

/* pushbar*/

var pushbar = new Pushbar({
  blur: true,
  overlay: true
});

//open a pushbar
pushbar.open('pushbar-menu'); 

//close all pushbars
pushbar.close();



/* flecha arriba */

$(function() {
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll >= 1000) {
      $("#toTop").addClass("show");
    } else {
      $("#toTop").removeClass("show");
    }
  });
});
