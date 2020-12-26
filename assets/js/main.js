jQuery(document).ready(function ($) {
  //======================== Scrollbar
  $('.scrollbar').scrollbar();

  //======================== POPUPS
  $('.popup').magnificPopup({
    mainClass: 'mfp-fade',
  });

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

  //==================================  Popup city
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
  // ======================== MASK
  $('.mask-phone').mask('+7 (999) 999-99-99');
  // ======================= Popup city and

  //======================== Footer tabs
  $('.footer-tab-js').on('click', function (e) {
    $(this).toggleClass('active');
    if ($(this).hasClass('active')) {
      $(this).find('.footer-item__menu-list').toggle('blind');
    } else {
      $(this).find('.footer-item__menu-list').hide('300');
    }
  });

  //======================== Footer tabs and
  //======================== SWIPE SLIDERS
  var mainSwiper = new Swiper('#main-slider', {
    slidesPerView: 1,
    speed: 1000,
    pagination: {
      el: '.main-slider .swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.main-slider .swiper-button-next',
      prevEl: '.main-slider .swiper-button-prev',
    },
    autoplay: {
      delay: 5000,
    },
  });
  //======================== SWIPE SLIDERS AND

  //======================== Calculator
  $('.show-form-calculator').on('click', function (e) {});

  //======================== Calculator and

  //======================== MASK
  // $('.mask-phone').mask('+7 (999) 999-99-99');

  //======================== ALL SELECTIZES
  // $('.custom-select').selectize();
});
