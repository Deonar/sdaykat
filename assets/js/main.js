jQuery(document).ready(function ($) {
  //======================== Scrollbar
  $('.scrollbar').scrollbar();

  //======================== POPUPS
  $('.popup').magnificPopup({});

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

  // Popup city
  $('#city-list').on('click', '.selectCity__item', function () {
    city = $(this).data('city');
    region = $(this).data('region');
    $('.selectCity__item').removeClass('selectCity__current');
    $(this).addClass('selectCity__current');
    $('.header-top__location .header-top__location-link').text(city);
    $('.header-mob__location .header-mob__location-link').text(city);
    $('#geo-city').text(city);

    $('#inputCity').val(city);

    $.magnificPopup.close();
  });
  // $('#closeLocationPopup').on('click', function (e) {
  //   $('.location-popup').css({ opacity: '0', visibility: 'hidden' });
  // });
  // Popup city and
  //======================== MASK
  // $('.mask-phone').mask('+7 (999) 999-99-99');

  //======================== ALL SELECTIZES
  // $('.custom-select').selectize();
});
