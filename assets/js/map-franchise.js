jQuery(document).ready(function ($) {
$el = $('#franchise-map path[fill="white"]');

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

$isTooltip = false;

function getTheTitleImage(id) {

  $.getJSON("assets/js/data-franchise.json", function (json) {
    for (var i = 0; i < json.length; i++) {
      if (parseInt(json[i].id) == id) {

        if (!$isTooltip) {
          $('body').append('<div class="map-tooltip"><img src="assets/img/map/"'+json[i].image+'.svg" alt="#"><span></span></div>')
        }
        $isTooltip = true;

        $('.map-tooltip span').html(json[i].title);
        $('.map-tooltip img').attr('src', 'assets/img/map/'+json[i].image+'.svg');

        break;

      }
    }

  });

}




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
        // console.log(i)
        getData(i)
        $('path[fill="#043598"]').attr('fill', '#B1B9CA')
        $el.eq(i).prev().attr('fill', '#043598')
      }
    }
  }(i))

}



$('.obl_union').click(function () {
      // alert(i)
      getData(-1)
      $('path[fill="#043598"]').attr('fill', '#B1B9CA')
      $('.obl_union').attr('fill', '#043598')
})





for (var i = 0; i < $el.length; i++) {

  $el.eq(i).prev().hover(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {
        $('.map-tooltip').css('transform', 'scale(1)')
        $('.map-tooltip').css('top', $el.eq(i).offset().top - 60)
        $('.map-tooltip').css('left', $el.eq(i).offset().left - $('.map-tooltip').width() / 2)
        console.log(i)
        getTheTitleImage(i)
      }
    }
  }(i), function () {
    $('.map-tooltip').css('transform', 'scale(0)')
  })

}


for (var i = 0; i < $el.length; i++) {

  $el.eq(i).hover(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {
        $('.map-tooltip').css('transform', 'scale(1)')
        $('.map-tooltip').css('top', $el.eq(i).offset().top - 60)
        $('.map-tooltip').css('left', $el.eq(i).offset().left - $('.map-tooltip').width() / 2)
        console.log(i)
        getTheTitleImage(i)
      }
    }
  }(i), function () {
    $('.map-tooltip').css('transform', 'scale(0)')
  })

}

$('.obl_union').hover(function () {
  $('.obl_union').addClass('hovered')
  $('.map-tooltip').css('transform', 'scale(1)')
  $('.map-tooltip').css('top', $('.obl_center').offset().top - 60)
  $('.map-tooltip').css('left', $('.obl_center').offset().left - $('.map-tooltip').width() / 2)
  getTheTitleImage(-1)
}, function () {
  $('.map-tooltip').css('transform', 'scale(0)')
  $('.obl_union').removeClass('hovered')
})

$(document).on('mouseenter', '.map-tooltip', function () {
    $('.map-tooltip').css('transform', 'scale(1)')
}).on('mouseleave', '.map-tooltip', function () {
    $('.map-tooltip').css('transform', 'scale(0)')
});
});
