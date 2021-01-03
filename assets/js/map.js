$('.scrollbar-js').scrollbar();

$(".tab-wrapper").on("click", ".tab", function (event) {
    var tab = $(this).attr("data-tab");
    $(this).closest(".tab-wrapper").find(".tab").removeClass("active");
    $(this).addClass("active");

    $(this).closest(".tab-wrapper").find(".tab-content").hide();
    $(this)
        .closest(".tab-wrapper")
        .find(".tab-content[data-tab = " + tab + "]")
        .show();
});


//Yandex map
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("yandex-map", {
        center: [55.191700, 61.430303],
        zoom: 12,
        controls: ['zoomControl']
    }),
    myPlacemark1 = new ymaps.Placemark([55.191700, 61.430303], {
        balloonContentHeader: `<h5>SDAYKAT</h5><div style='margin: 10px 0;border-bottom: 1px solid #74686830;'></div>`,
        balloonContentBody: '<p class="mb-10"><img src="assets/img/icons/location-icon-dark.svg" class="mr-10"><span>ул. Братьев Кашириных, 101<br></span>' +
        '<p class="mb-10 d-flex"><img src="assets/img/icons/icon-time-dark.svg" class="mr-10"><span><b>Пн-Пт</b> с 10:00 до 18:00<br><b>Пн-Пт</b> с 10:00 до 18:00</span></p>' +
        '<p class="d-flex"><img src="assets/img/icons/icon-phone-dark.svg" class="mr-10"><a href="tel:+7-123-456-78-90">+7 (123) 456-78-90</a><br/></p>',
        hintContent: "ул. Братьев Кашириных, 101",
    }, {
        iconLayout: "default#image",
        iconImageHref: 'assets/img/map-icon.svg',
        iconImageSize: [60, 60],
        iconImageOffset: [-30, -30],

       
    });
   
    myMap.geoObjects.add(myPlacemark1);
}