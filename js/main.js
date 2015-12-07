// sidebar window-height
$(function() {
  function overlapListener() {
    var h = $(window).height(),
    nTop = $("ul.links").offset().top,
    nHeight = $("ul.links").height(),
    nBottom = nTop + nHeight,
    f = $("section.nav-footer").offset().top

    if($(f) <= nBottom) {
      console.log('hi')
    }
  }

  $(window).on("load", function() {

    overlapListener()

  })

  $(window).on("resize", function() {
    overlapListener()
  })

})