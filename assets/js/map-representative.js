$el = $('#representative-map path[fill="white"]');

function scrollToData(id) {
  console.log(id);
  $temp = $('.representative-item[data-id="' + id + '"]');
  $('.representative-item__title').removeClass('active');
  $temp.find('.representative-item__title').addClass('active');

  if (!($temp.length)) return false;
  $('html, body').animate({
    scrollTop: $temp.offset().top
  }, 500);

}

for (var i = 0; i < $el.length; i++) {
  $el.eq(i).click(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {
        $('path[fill="#043598"]').attr('fill', '#B1B9CA')
        $el.eq(i).prev().attr('fill', '#043598')
        scrollToData(i);
      }
    }
  }(i))

  $el.eq(i).prev().click(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {
        $('path[fill="#043598"]').attr('fill', '#B1B9CA')
        $el.eq(i).prev().attr('fill', '#043598')
        scrollToData(i);
      }
    }
  }(i))

}

  $('.obl_union').click(function () {
    $('path[fill="#043598"]').attr('fill', '#B1B9CA')
    $('.obl_union').attr('fill', '#043598')
    scrollToData(-1);
  })



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

  $el.eq(i).prev().hover(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {

        console.log(i)
        getTheTitleImage(i)
        $('.map-tooltip').css('transform', 'scale(1)')
        $('.map-tooltip').css('top', $el.eq(i).offset().top - 60)
        $('.map-tooltip').css('left', $el.eq(i).offset().left - $('.map-tooltip').width() / 2)
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

        console.log(i)
        getTheTitleImage(i)
        $('.map-tooltip').css('transform', 'scale(1)')
        $('.map-tooltip').css('top', $el.eq(i).offset().top - 60)
        $('.map-tooltip').css('left', $el.eq(i).offset().left - $('.map-tooltip').width() / 2)

      }
    }
  }(i), function () {
    $('.map-tooltip').css('transform', 'scale(0)')
  })

}

$('.obl_union').hover(function () {

  $('.obl_union').addClass('hovered')
  getTheTitleImage(-1)

  $('.map-tooltip').css('transform', 'scale(1)')
  $('.map-tooltip').css('top', $('.obl_center').offset().top - 60)
  $('.map-tooltip').css('left', $('.obl_center').offset().left - $('.map-tooltip').width() / 2)

}, function () {
  $('.obl_union').removeClass('hovered')
  $('.map-tooltip').css('transform', 'scale(0)')
})





$(document).on('mouseenter', '.map-tooltip', function () {
    $('.map-tooltip').css('transform', 'scale(1)')
}).on('mouseleave', '.map-tooltip', function () {
    $('.map-tooltip').css('transform', 'scale(0)')
});
