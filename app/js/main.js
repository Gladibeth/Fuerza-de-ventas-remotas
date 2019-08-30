$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})




// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 768)) {
    $('.navbar-fixed-js').addClass('fixed');
    $('.nav-link').addClass('fixed-color');
    $('.nav-top__header').addClass('nav-top__header--detele');
    $("#iso").addClass('img-size').attr('src', 'assets/img/logo-b.png').removeClass('scroll-up');

  } else {
    $('.navbar-fixed-js').removeClass('fixed');
    $('.nav-link').removeClass('fixed-color');
    $('.nav-top__header').removeClass('nav-top__header--detele');
    $("#iso").removeClass('img-size').attr('src', 'assets/img/logo.png').removeClass('scroll-up');

  }
});

$(".hamburger").on("click", function () {
  $(this).toggleClass("is-active");
});