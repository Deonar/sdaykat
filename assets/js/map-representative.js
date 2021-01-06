function scrollToData(id) {
  console.log(id);
  $el = $('.representative-item[data-id="' + id + '"]');
  if (!($el.length)) return false;
  $('html, body').animate({
    scrollTop: $el.offset().top
  }, 500);

}

$el = $('#representative-map path[fill="white"]');

for (var i = 0; i < $el.length; i++) {
  if ($el.eq(i).prev().attr('fill') != 'white') {
    $el.eq(i).prev().attr('fill', '#043598')
  }
  $el.eq(i).click(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {

        scrollToData(i);
      }
    }
  }(i))

  $el.eq(i).prev().click(function (i) {
    return function () {
      if ($el.eq(i).prev().attr('fill') != 'white') {

        scrollToData(i);
      }
    }
  }(i))

}