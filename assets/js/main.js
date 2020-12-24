jQuery(document).ready(function ($) {
  //Mob-menu
  $('.burgerJs').on('click', function (e) {
    $(this).toggleClass('active');
    $('body').toggleClass('overflow-h');
    $('#headerNavbar').toggleClass('active');
  });
  $('.navbar-menu a').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $('#headerNavbar').removeClass('active');
    $('.burgerJs').removeClass('active');
  });
  $('#closeNavbar').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $('#headerNavbar').removeClass('active');
    $('.burgerJs').removeClass('active');
  });

  //======================== POPUPS
  // $('.popup').magnificPopup({});

  //======================== MASK
  // $('.mask-phone').mask('+7 (999) 999-99-99');

  //======================== Scrollbar
  // $('.scrollbar').scrollbar();

  //======================== ALL SELECTIZES
  // $('.custom-select').selectize();
});
