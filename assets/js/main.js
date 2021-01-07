jQuery(document).ready(function ($) {
   //Get Coockie
   function getCookie(name) {
    let matches = document.cookie.match(
      new RegExp(
        "(?:^|; )" +
          name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") +
          "=([^;]*)"
      )
    );
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }
  /*-------------------------------------
		Preloader
	-------------------------------------*/
  $(document).ready(function () {
    setTimeout(function () {
      $('.dr-preloader').fadeOut('slow');
    }, 500);
    setTimeout(function () {
      $('#dr-preloader').fadeOut('slow');
    }, 800);
  });
  //======================== Scrollbar
  $('.scrollbar-js').scrollbar();

  //=================== scroll to page
  $('.scrollto').on('click', function () {
    let href = $(this).attr('href');

    $('html, body').animate(
      {
        scrollTop: $(href).offset().top - 100,
      },
      {
        duration: 370, // по умолчанию «400»
        easing: 'linear', // по умолчанию «swing»
      }
    );
    if ($(window).width() < 768) {
      $('html, body').animate({
        scrollTop: $(href).offset().top - 70,
      });
    }
    return false;
  });

  //======================== POPUPS
  $('.popup').magnificPopup({
    mainClass: 'mfp-fade',
  });

  //scroll-header-menu
  var scrollPos = 0;
  $(document).scroll(function () {
    if (500 < $(document).scrollTop()) {
      $('#header').addClass('h-fixed');
    } else {
      $('#header').removeClass('h-fixed');
    }

    var st = $(this).scrollTop();
    if (st < scrollPos) {
      $('#header').removeClass('active');
    } else {
      $('#header').addClass('active');
    }
    scrollPos = st;
    if (scrollPos <= 200) {
      $('#header').removeClass('active');
    }
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

  //entry-account
  $('#entry-account').on('click', function (e) {
    $('#authorization-confirm').show();
    $('#entry-cabinet__entry').hide();
  });
  $('#change-number').on('click', function (e) {
    $('#entry-cabinet__entry').show();
    $('#authorization-confirm').hide();
  });

  // TAIMER

  function startTimer() {
    var _Seconds = $('.seconds').text(),
      int;
    int = setInterval(function () {
      // запускаем интервал
      if (_Seconds > 0) {
        _Seconds--; // вычитаем 1
        $('.seconds').text(_Seconds); // выводим получившееся значение в блок
      } else {
        clearInterval(int); // очищаем интервал, чтобы он не продолжал работу при _Seconds = 0
        $('#send-sms').show(300);
        $('#authorization-confirm__sms').hide(300);
        $('#authorization-confirm__sms-timer').hide(300);
        $('.seconds').text('15');
      }
    }, 1000);
  }
  $('#entry-account').on('click', function (e) {
    startTimer();
  });
  $('#send-sms').on('click', function (e) {
    $(this).hide();
    $('#authorization-confirm__sms').show(300);
    $('#authorization-confirm__sms-timer').show(300);
    startTimer();
  });

  // profile save-info
  $('#save-info').on('click', function (e) {
    $('#profile-registration').show();
    $('#profile-registration-edit').hide();
    $('html, body').animate({ scrollTop: 0 }, 'slow');
    return false;
  });

  // actions-content-show-js
  $('.actions-content-show-js').on('click', function (e) {
    $(this).toggleClass('active');
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

    document.cookie = "user-city=" + city + "; path=/";
    document.cookie = "user-region=" + region + "; path=/";

    $.magnificPopup.close();
  });

  var userCity = getCookie("user-city");
  if (userCity) {
    $('.header-top__location').removeClass('active');
  }

  // ======================== location popup

  $('.closeLocationPopup').on('click', function (e) {
    $('.header-top__location').removeClass('active');
    city = $('.header-top__location .header-top__location-link').text();
    document.cookie = "user-city=" + city + "; path=/";
  });
  $('.header-top__location-link').on('click', function (e) {
    $('.header-top__location').toggleClass('active');
  });

  // ======================== MASK
  $('.mask-phone').mask('+7 (999) 999-99-99');

  //========================  tabs accordion mobile

  if ($(window).innerWidth() <= 768) {
    $('.accordion-tab-js').on('click', function () {
      if ($(this).hasClass('active')) {
        $(this).removeClass('active');
        $(this).find('.accordion-content-js').hide('300');
      } else {
        $('.accordion-tab-js').removeClass('active');
        $(this).addClass('active');
        $('.accordion-content-js').slideUp(200);
        $(this).find('.accordion-content-js').toggle('blind');
      }
    });
  }
  //========================  tabs profile accordion
  $('.accordion-js').on('click', function () {
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
      $(this).parent().find('.accordion-block-js').hide('300');
      $('.transactions-block__more').text('свернуть');
      $(this).parent().find('.transactions-block__more').text('развернуть');
    } else {
      $('.accordion-js').removeClass('active');
      $(this).addClass('active');
      $('.accordion-block-js').slideUp(200);
      $(this).parent().find('.accordion-block-js').toggle('blind');
      $('.transactions-block__more').text('развернуть');
      $(this).parent().find('.transactions-block__more').text('свернуть');
    }
  });
  //======================== tabs profile end

  //======================== tabs
  $('.tab-wrapper').on('click', '.tab', function (event) {
    var tab = $(this).attr('data-tab');
    $(this).closest('.tab-wrapper').find('.tab').removeClass('active');
    $(this).addClass('active');

    $(this).closest('.tab-wrapper').find('.tab-content').hide();
    $(this)
      .closest('.tab-wrapper')
      .find('.tab-content[data-tab = ' + tab + ']')
      .show();
  });
  //======================== tabs  end
  //======================== SLICK SLIDERS
  $('#reviews-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    centerMode: true,
    adaptiveHeight: true,
    infinite: true,
    dots: true,
    centerPadding: '0',
    speed: 500,
    prevArrow: '<button class="slider-btn slider-btn__prev"></button>',
    nextArrow: '<button class="slider-btn slider-btn__next"></button>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
  $('#price-oftype__slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: true,
    dots: true,
    prevArrow: '<button class="slider-btn slider-btn__prev"></button>',
    nextArrow: '<button class="slider-btn slider-btn__next"></button>',
  });
  $('#redemption-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    adaptiveHeight: true,
    infinite: false,
    dots: false,
    prevArrow: '<button class="slider-btn slider-btn__prev"></button>',
    nextArrow: '<button class="slider-btn slider-btn__next"></button>',
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 2,
          arrows: true,
          dots: true,
        },
      },
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 1,
          arrows: true,
          dots: true,
        },
      },
    ],
  });

  // GeoLocation
  $('.input-search-js').on('input', function () {
    let val = this.value.toLowerCase().trim();
    let elasticItems = document.querySelectorAll('.select__body .select__item-search');
    if (val != '') {
      elasticItems.forEach(function (elem) {
        if (elem.innerText.toLowerCase().search(val) == -1) {
          elem.classList.add('hide');
          elem.innerHTML = elem.innerText;
        } else {
          elem.classList.remove('hide');
          let str = elem.innerText;
          elem.innerHTML = insertMark(str, elem.innerText.search(RegExp(val, 'gi')), val.length);
        }
      });
    } else {
      elasticItems.forEach(function (elem) {
        elem.classList.remove('hide');
        elem.innerHTML = elem.innerText;
      });
    }
  });

  //======================== ALL SELEC
  let select = function () {
    let selectHeader = document.querySelectorAll('.select__header');
    let selectItem = document.querySelectorAll('.select__item');

    selectHeader.forEach((item) => {
      item.addEventListener('click', selectToggle);
    });

    selectItem.forEach((item) => {
      item.addEventListener('click', selectChoose);
    });

    function selectToggle() {
      this.parentElement.classList.toggle('is-active');
    }

    function selectChoose() {
      let text = this.innerHTML,
        select = this.closest('.select-custom-js'),
        selectDataValue = this.dataset.selectValue;
      if (select) {
        currentText = select.querySelector('.select__current');
        currentInput = select.querySelector('input');

        currentText.innerHTML = text;
        currentInput.value = selectDataValue;
      }
      select.classList.remove('is-active');
    }
  };
  select();

  $('.select__header-search').on('click', function () {
    $(this).parent('.container-search-js').addClass('is-active');
  });
  $('.select__item-search').on('click', function () {
    $(this).closest('.container-search-js').find('input.input-search-js').val($(this).text().trim());
    $('.container-search-js').removeClass('is-active');
  });

  $('.select').on('click', function () {
    if ($('.select').not(this).hasClass('is-active')) {
      $('.select').not(this).removeClass('is-active');
    }
  });
  $(document).mouseup(function (e) {
    var select = $('.select');
    if (e.target != select[0] && select.has(e.target).length === 0) {
      $('.select').removeClass('is-active');
    }
  });
  //======================== ALL SELEC END

  //======================== Search Brand
  $('#brands-search').on('input', function () {
    let val = this.value.toLowerCase().trim();
    let elasticItems = document.querySelectorAll('.brands__wrapper .brands__item');
    if (val != '') {
      elasticItems.forEach(function (elem) {
        if (elem.dataset.name.toLowerCase().search(val) == -1) {
          elem.classList.add('d-none');
        } else {
          elem.classList.remove('d-none');
        }
      });
    } else {
      elasticItems.forEach(function (elem) {
        elem.classList.remove('d-none');
      });
    }
  });

  $('#brands_btn-more').on('click', function () {
    $(this).hide();
    $('.brands__wrapper').addClass('brands_show-all');
  });

  // Стоимость сырья PT
  $('#calculate-range-pt').slider({
    range: 'min',
    value: 0.4,
    min: 0,
    max: 1,
    step: 0.1,
    slide: function (event, ui) {
      $('#calculate-input-pt').val(ui.value);
    },
  });

  // Стоимость сырья PD
  $('#calculate-range-pd').slider({
    range: 'min',
    value: 0.5,
    min: 0,
    max: 1,
    step: 0.1,
    slide: function (event, ui) {
      $('#calculate-input-pd').val(ui.value);
    },
  });

  // Стоимость сырья RH
  $('#calculate-range-rh').slider({
    range: 'min',
    value: 0.3,
    min: 0,
    max: 1,
    step: 0.1,
    slide: function (event, ui) {
      $('#calculate-input-rh').val(ui.value);
    },
  });

  // Население
  $('#calculate-range-people').slider({
    range: 'min',
    value: 4800000,
    min: 0,
    max: 10000000,
    step: 100,
    slide: function (event, ui) {
      $('#calculate-input-people').val(ui.value);
    },
  });

  // Обьем сырья
  $('#calculate-range-size').slider({
    range: 'min',
    value: 150,
    min: 0,
    max: 1000,
    step: 1,
    slide: function (event, ui) {
      $('#calculate-input-size').val(ui.value);
    },
  });

});
