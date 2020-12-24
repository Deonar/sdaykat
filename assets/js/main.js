jQuery(document).ready(function ($) {
  //Mob-menu
  $('#header-burger').on('click', function (e) {
    $(this).toggleClass('active');
    $('#mobMenu').addClass('active');
    $('body').toggleClass('overflow-h');
  });
  $('.close-mob-menu-js').on('click', function (e) {
    $('body').removeClass('overflow-h');
    $('#header-burger').removeClass('active');
    $('#mobMenu').removeClass('active');
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
