function getData(id) {

  $.getJSON("assets/js/data-franchise.json", function (json) {
    for (var i = 0; i < json.length; i++) {
      if (parseInt(json[i].id) == id) {

        $('.franchise-map__info-content[data-tab="1"] .franchise-map__cityes').html('');
        $('.franchise-map__info-content[data-tab="1"] .franchise-map__region').html(json[i].title);

        $('.franchise-map__info-content[data-tab="2"] .franchise-map__cityes').html('');
        $('.franchise-map__info-content[data-tab="2"] .franchise-map__region').html(json[i].title);
        for (var j = 0; j < json[i].occupied.length; j++) {
          $('.franchise-map__info-content[data-tab="1"] .franchise-map__cityes').append('<li class="franchise-map__city">' + json[i].occupied[j] + '</li>');
        }
        for (var j = 0; j < json[i].avaliable.length; j++) {
          $('.franchise-map__info-content[data-tab="2"] .franchise-map__cityes').append('<li class="franchise-map__city">' + json[i].avaliable[j] + '</li>');
        }
        break;
      }
    }
  });
}

$el = $('#franchise-map path[fill="white"]');

for (var i = 0; i < $el.length; i++) {
  $el.eq(i).click(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {
        // alert(i)
        getData(i)
        $('path[fill="#043598"]').attr('fill', '#B1B9CA')
        $el.eq(i).prev().attr('fill', '#043598')
      }
    }
  }(i))

  $el.eq(i).prev().click(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {
        // alert(i)
        getData(i)
        $('path[fill="#043598"]').attr('fill', '#B1B9CA')
        $el.eq(i).prev().attr('fill', '#043598')
      }
    }
  }(i))

}