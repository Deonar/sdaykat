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
        currentText = select.querySelector('.select__current');

        currentText.innerHTML = text;
        select.classList.remove('is-active');
    }
};
select();

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
 function init () {
     var myMap = new ymaps.Map("yandex-map", {
             center: [55.75898200418115,37.6644832754631],
             zoom: 17,
             controls: ['zoomControl']
         }),
         myPlacemark2 = new ymaps.Placemark([55.75898200418115,37.6644832754631], {
             // Свойства.
             hintContent: 'Арт Коттедж'
         }, {
              iconLayout: "default#image",
             iconImageHref: 'http://art-cottage.pro/wp-content/themes/building/assets/img/map-label.png',
             // Размеры метки.
             iconImageSize: [90, 90],
             // Смещение левого верхнего угла иконки относительно
             // её "ножки" (точки привязки).
             iconImageOffset: [-45, -45]
         });
     if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
      myMap.behaviors.disable('drag');
     } 
     myMap.geoObjects.add(myPlacemark2)
 }
