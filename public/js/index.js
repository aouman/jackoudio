$(document).ready(function () {
    /*lorsqu'on clique sur l'un des bouton du menu elle s'active*/
    $('.navbar-nav .navs a').on('click', function (e) {
        e.preventDefault();
        var me = $(this).parent().toggleClass('active_1')
        $(".active_1").not(me).removeClass('active_1')
    });

    $(window).bind('scroll', function() {
      var navHeight = $(window).height() - 90;
      if ($(window).scrollTop() > navHeight) {
        $('nav').addClass('fixed');
      } else {
        $('nav').removeClass('fixed');
      }
    });
});
