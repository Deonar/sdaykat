jQuery(document).ready(function ($) {
  //Get Coockie
  function getCookie(name) {
    let matches = document.cookie.match(new RegExp('(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'));
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

    $('html, body').animate({
      scrollTop: $(href).offset().top - 100,
    }, {
      duration: 370, // по умолчанию «400»
      easing: 'linear', // по умолчанию «swing»
    });
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
    type: 'inline',
    fixedContentPos: false,
    fixedBgPos: true,
    callbacks: {
      open: function () {
        $('body').addClass('overflow-h');
        console.log('open');
      },
      close: function () {
        $('body').removeClass('overflow-h');
        console.log('close');
      },
    },
  });

  $('#price-oftype__slider a').on('click', function(e){
    e.preventDefault();
  })

  $('.slider-item__preview-btn').on('click', function () {
    $('#price-oftype__slider').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {
        enabled: true,
      },
    }).magnificPopup('open');
  });

  $('.main-form__phone').blur(function () {
    if ($(this).val().length >= 18) {
      $(this).closest('.main-form__label_phone').addClass('_done').removeClass('_error');
    } else {
      $(this).closest('.main-form__label_phone').removeClass('_done').addClass('_error');
    }
  });
  $('.main-form').on('submit', function (e) {
    if ($(this).find('.main-form__checkbox').is(':checked')) {
      if ($(this).find('.main-form__phone').val().length >= 18) {
        let target = $(this).find('.main-form__submit').data('target');
        if (target) {
          e.stopPropagation();
          $.magnificPopup.open({
            items: {
              src: target,
            },
            type: 'inline',
            callbacks: {
              open: function () {
                $('body').addClass('overflow-h');
                console.log('open');
              },
              close: function () {
                $('body').removeClass('overflow-h');
                console.log('close');
              },
            },
          });
        }
      } else {
        $(this).find('.main-form__label_phone').addClass('_error');
      }
    }
    e.preventDefault();
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

  // actions-content-show-js
  $('.actions-content-show-js').on('click', function (e) {
    e.stopPropagation();
    $(this).toggleClass('active');
  });

  // options-tooltip

  if ($(window).innerWidth() <= 768) {
    $('.options-tooltip-js').on('click', function () {
      if ($(this).hasClass('active')) {
        $('.options-tooltip-js').removeClass('active');
        $(this).removeClass('active');
      } else {
        $('.options-tooltip-js').removeClass('active');
        $(this).addClass('active');
      }
    });
    // $('.tooltip-close-js').on('click', function () {
    //   $(this).parent().parent().parent().removeClass('active');
    // });
  } else {
    $('.options-tooltip-js').hover(function (e) {
      $(this).toggleClass('active');
    });
  }

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

    document.cookie = 'user-city=' + city + '; path=/';
    document.cookie = 'user-region=' + region + '; path=/';

    $.magnificPopup.close();
  });

  var userCity = getCookie('user-city');
  if (userCity) {
    $('.header-top__location').removeClass('active');
  }

  var userAuth = getCookie('user-auth');

  if (Number(userAuth)) {
    $('#sing-in, #sing-in_mob').hide();
    $('.header-authorized, .header-mob__authorized').show();
  } else {
    $('#sing-in, #sing-in_mob').show();
    $('.header-authorized, .header-mob__authorized').hide();
  }

  $('#log-out, #log-out_mob, .log-out-js').on('click', function () {
    document.cookie = 'user-auth=0; path=/';
    window.location.href = '/';
  });

  // ======================== location popup
  $('.closeLocationPopup').on('click', function (e) {
    $('.header-top__location').removeClass('active');
    city = $('.header-top__location .header-top__location-link').text();
    document.cookie = 'user-city=' + city + '; path=/';
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
      $(this).parent().find('.accordion-block-js').hide();
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
  //======================== click link mob menu --> show tabs profile
  function showProfileContent() {
    $('#profile-tab').addClass('active');
    $('#transactions-tab').removeClass('active');
    $('#analitics-tab').removeClass('active');
    $('#profile-tab-content').show();
    $('#transactions-tab-content').hide();
    $('#analitics-tab-content').hide();
  }

  function showAnaliticContent() {
    $('#profile-tab').removeClass('active');
    $('#transactions-tab').removeClass('active');
    $('#analitics-tab').addClass('active');
    $('#profile-tab-content').hide();
    $('#transactions-tab-content').hide();
    $('#analitics-tab-content').show();
  }

  function showTransactionsContent() {
    $('#profile-tab').removeClass('active');
    $('#transactions-tab').addClass('active');
    $('#analitics-tab').removeClass('active');
    $('#profile-tab-content').hide();
    $('#transactions-tab-content').show();
    $('#analitics-tab-content').hide();
  }

  function openTabsProfile() {
    let hash = window.location.hash;
    if (hash == '#profile-tab') {
      showProfileContent();
    } else if (hash == '#analitic-tab') {
      showAnaliticContent();
    } else if (hash == '#transactions-tab') {
      showTransactionsContent();
    }
  }
  openTabsProfile();
  $('.open-profile-js').on('click', function (e) {
    let dataTabProfile = $(this).data('tab-profile');

    if (dataTabProfile == 'profile-tab') {
      showProfileContent();
    } else if (dataTabProfile == 'analitic-tab') {
      showAnaliticContent();
    } else if (dataTabProfile == 'transactions-tab') {
      showTransactionsContent();
    }
  });
  //======================== click link mob menu --> show tabs profile end

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

  function sliderTimer(sider) {
    var curr = 0;
    var percentTime = 0;

    sider.on('init', function (event, slick, currentSlide, nextSlide) {
      percentTime = 0;
      sider.find('.actual_dot path').css('stroke-dasharray', '0, 100');

      for (var i = 0; i < sider.find('.slick-dots li').length; i++) {
        if (!sider.find('.slick-dots li').eq(i).attr('class')) {
          sider.find('.slick-dots li').eq(i).find('.actual_dot path').css('stroke-dasharray', '100, 100');
        } else {
          break;
        }
      }
    });
    sider.on('afterChange', function (event, slick, currentSlide, nextSlide) {
      percentTime = 0;
      sider.find('.actual_dot path').css('stroke-dasharray', '0, 100');
      for (var i = 0; i < sider.find('.slick-dots li').length; i++) {
        if (!sider.find('.slick-dots li').eq(i).attr('class')) {
          sider.find('.slick-dots li').eq(i).find('.actual_dot path').css('stroke-dasharray', '100, 100');
        } else {
          curr = i;
          break;
        }
      }
    });

    function startProgressbar() {
      percentTime = 0;
      setInterval(interval, 50);
    }

    function interval() {
      percentTime++;
      if (curr != -1) {
        if (percentTime < 100) {
          sider
            .find('.slick-dots li')
            .eq(curr)
            .find('.actual_dot path')
            .css('stroke-dasharray', percentTime + ', 100');
        } else {
          curr = -1;
          sider.slick('slickNext');
          percentTime = 0;
        }
      }
    }
    startProgressbar();
  }
  if ($('div').is('#reviews-slider')) {
    sliderTimer($('#reviews-slider'));
    $('#reviews-slider').slick({
      slidesToShow: 3,
      slidesToScroll: 1,
      centerMode: true,
      adaptiveHeight: true,
      infinite: true,
      dots: true,
      centerPadding: '0',
      speed: 500,
      customPaging: function (slider, i) {
        return '<svg viewBox="0 0 36 36" class="actual_dot"><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#feb700"; stroke-width="6" stroke-dasharray="80, 100"; /></svg><svg viewBox="0 0 36 36" class="bg_dot"><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#feb700"; stroke-width="6" stroke-dasharray="100, 100"; /></svg>';
      },
      prevArrow: '<button class="slider-btn slider-btn__prev"></button>',
      nextArrow: '<button class="slider-btn slider-btn__next"></button>',
      responsive: [{
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
  }

  if ($('div').is('#price-oftype__slider')) {
    sliderTimer($('#price-oftype__slider'));
    $('#price-oftype__slider').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      adaptiveHeight: true,
      infinite: true,
      dots: true,
      speed: 500,
      customPaging: function (slider, i) {
        return '<svg viewBox="0 0 36 36" class="actual_dot"><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#fff"; stroke-width="6" stroke-dasharray="80, 100"; /></svg><svg viewBox="0 0 36 36" class="bg_dot"><path d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831" fill="none" stroke="#fff"; stroke-width="6" stroke-dasharray="100, 100"; /></svg>';
      },
      prevArrow: '<button class="slider-btn slider-btn__prev"></button>',
      nextArrow: '<button class="slider-btn slider-btn__next"></button>',
    });
  }

  $('#redemption-slider').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    adaptiveHeight: true,
    infinite: false,
    dots: false,
    prevArrow: '<button class="slider-btn slider-btn__prev"></button>',
    nextArrow: '<button class="slider-btn slider-btn__next"></button>',
    responsive: [{
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

  function numberWithSpaces(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, " ");
  }

  // Стоимость сырья PT
  $('#calculate-range-pt').slider({
    range: 'min',
    value: 0.4,
    min: 0,
    max: 1,
    step: 0.1,
    slide: function (event, ui) {
      $('#calculate-input-pt').val(numberWithSpaces(ui.value));
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
      $('#calculate-input-pd').val(numberWithSpaces(ui.value));
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
      $('#calculate-input-rh').val(numberWithSpaces(ui.value));
    },
  });

  // Население
  $('#calculate-range-people').slider({
    range: 'min',
    value: 600000,
    min: 0,
    max: 2000000,
    step: 100,
    slide: function (event, ui) {
      $('#calculate-input-people').val(numberWithSpaces(ui.value));
    },
  });

  // Обьем сырья
  $('#calculate-range-size').slider({
    range: 'min',
    value: 300,
    min: 0,
    max: 1000,
    step: 1,
    slide: function (event, ui) {
      $('#calculate-input-size').val(numberWithSpaces(ui.value));
    },
  });

  //Cтоимость сырья
  $('#calculate-input-weight').on('input', function () {
    if ($('#calculate-input-weight').val()) {
      $('.form-warning-js').hide();
      $('#calculator-total-price').show();
    } else {
      $('.form-warning-js').show();
      $('#calculator-total-price').hide();
    }
  })

  $('.calculator-calculate-btn').on('click', function (e) {
    if ($('#calculate-input-weight').val()) {
      let href = $(this).attr('href');
      if (href) {
        e.stopPropagation();
        $.magnificPopup.open({
          items: {
            src: href,
          },
          type: 'inline',
          callbacks: {
            open: function () {
              $('body').addClass('overflow-h');
              console.log('open');
            },
            close: function () {
              $('body').removeClass('overflow-h');
              console.log('close');
            },
          },
        });
      }
    }
    e.preventDefault();
  });

});