// /**
//  *  This loader connected in app.html for loading first of all.
//  *  When APP trigger 'app:loaded' event on documentElement - loader hide
//  *
//  *  TODO: need find way to connect loader to main webpack project.
//  */
//
// /**
//  * !!! ATTENTION !!! it's just an example.
//  */
(function () {
  var loaderNode = document.querySelector('.preloader')
  document.body.style.overflow = 'hidden'

  if (!loaderNode) return

  var preloaderDone = createEvent('preloader:done')

  function hideLoaderNode () {
    return new Promise(function (resolve) {
      loaderNode.classList.add('preloader_hide')

      loaderNode.addEventListener('animationend', function () {
        loaderNode.style.display = 'none'
        document.body.style.overflow = ''
        setTimeout(resolve, 200)
      })
    })
  }

  function hide () {
    hideLoaderNode().then(function () {
      document.documentElement.removeEventListener('app:loaded', hide)
      document.documentElement.dispatchEvent(preloaderDone)
    })
  }

  // subscribe to global event app:loaded
  document.documentElement.addEventListener('app:loaded', hide, false)
})()

function createEvent (name) {
  var event = document.createEvent('Event')
  event.initEvent(name, false, false)
  return event
}

/**
 *  Use ES5 and vanila css for IE, because preloader files are not processed with webpack(babel)
 *
 *  1. Preloader is connected in app.html for loading first and covering app while it is loading.
 *  2. When 'app:loaded' event is triggered from app-loaded-mixin loader will start hide animation.
 *  3. When hide animation is done (or almost done) - 'preloader:done' event is triggered
 */
