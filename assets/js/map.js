if (document.documentElement.clientWidth > 578) {
  $('.scrollbar-map-js').scrollbar();
}
var type = 1; // изначально открыто "продать катализатор"

//Yandex map
ymaps.ready(init);

function init() {
  var myMap = new ymaps.Map("yandex-map", {
    center: [55.191700, 61.430303],
    zoom: 12,
    controls: ['zoomControl']
  })

  getPointOpt = function () {
    return {
      iconLayout: "default#image",
      iconImageHref: 'assets/img/map-icon.svg',
      iconImageSize: [60, 60],
      iconImageOffset: [-30, -30],
      hideIconOnBalloonOpen: false
    }
  }

  getPointData = function (id, type) {
    el = document.querySelector('.tab-content[data-tab="' + type + '"]');
    el = el.querySelectorAll(".map-item_mob")[id];
    data = {
      name: (el.querySelector('h5')).innerHTML,
      address: (el.querySelector('.address')).innerHTML,
      time: (el.querySelector('.time')).innerHTML,
      href: (el.querySelector('.phone')).getAttribute('href'),
      phone: (el.querySelector('.phone')).innerHTML,
    }
    return {
      balloonContentHeader: `<h5>` + data.name + `</h5><div style='margin: 10px 0;border-bottom: 1px solid #74686830;'></div>`,
      balloonContentBody: '<p class="mb-10"><img src="assets/img/icons/location-icon-dark.svg" class="mr-10"><span>' + data.address + '<br></span>' +
        '<p class="mb-10 d-flex"><img src="assets/img/icons/icon-time-dark.svg" class="mr-10"><span>' + data.time + '</span></p>' +
        '<p class="d-flex"><img src="assets/img/icons/icon-phone-dark.svg" class="mr-10"><a href="tel:' + data.href + '">' + data.phone + '</a><br/></p>',
      hintContent: data.address,
    }
  }

  getPoint = function (id, type) {
    el = document.querySelectorAll('.tab-content[data-tab="' + type + '"] .map-item');
    return [el[id].getAttribute('data-coord-x'), el[id].getAttribute('data-coord-y')]
  }

  geoObjects = []

  function updatePoints() {

    myMap.geoObjects.removeAll();
    geoObjects = []
    for (var i = 0; i < $('.tab-content[data-tab="' + type + '"] .map-item').length; i++) {
      geoObjects[i] = new ymaps.Placemark(getPoint(i, type), getPointData(i, type), getPointOpt());
      myMap.geoObjects.add(geoObjects[i]);
    }

    for (var i = 0; i < $('.tab-content[data-tab="1"] .map-item').length; i++) {
      $('.tab-content[data-tab="1"] .map-item').eq(i).click(function (i) {
        return function () {
          $('.tab-content[data-tab="1"] .map-item').removeClass('active')
          $('.tab-content[data-tab="1"] .map-item').eq(i).addClass('active')
          a = [parseFloat($('.tab-content[data-tab="1"] .map-item').eq(i).attr('data-coord-x')), parseFloat($('.tab-content[data-tab="1"] .map-item').eq(i).attr('data-coord-y'))]

          myMap.panTo(a, {
            flying: true,
            duration: 1000
          }).then(function () {
            geoObjects[i].balloon.open();
          });


        }
      }(i))
    }

    for (var i = 0; i < $('.tab-content[data-tab="2"] .map-item').length; i++) {
      $('.tab-content[data-tab="2"] .map-item').eq(i).click(function (i) {
        return function () {
          $('.tab-content[data-tab="2"] .map-item').removeClass('active')
          $('.tab-content[data-tab="2"] .map-item').eq(i).addClass('active')
          a = [parseFloat($('.tab-content[data-tab="2"] .map-item').eq(i).attr('data-coord-x')), parseFloat($('.tab-content[data-tab="2"] .map-item').eq(i).attr('data-coord-y'))]

          myMap.panTo(a, {
            flying: true,
            duration: 1000
          }).then(function () {
            geoObjects[i].balloon.open();
          });


        }
      }(i))
    }

    myMap.setBounds(myMap.geoObjects.getBounds(), {
      checkZoomRange: true,
      zoomMargin: 9
    });

  }

  $('.select__item').click(function () {
    var t = $('.tab-content[data-tab="1"]').html()
    $('.tab-content[data-tab="1"]').html($('.tab-content[data-tab="2"]').html())
    $('.tab-content[data-tab="2"]').html(t)

    // ajax
    updatePoints()
  })

  $(".tab-wrapper_map").on("click", ".tab", function (event) {
    var tab = $(this).attr("data-tab");
    var mainWrap = $(this).closest(".tab-wrapper_map");
    mainWrap.find(".tab").removeClass("active");
    $(this).addClass("active");

    mainWrap.find(".tab-content").hide();
    mainWrap.find(".tab-content[data-tab = " + tab + "]").show();

    type = tab;

    updatePoints()

  });

  updatePoints()
}