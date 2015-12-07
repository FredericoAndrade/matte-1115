// sidebar window-height
$(function() {
  function overlapListener() {
    var h = $(window).height(),
    n = $("ul.links")
    nTop = n.offset().top,
    nHeight = n.height(),
    nBottom = nTop + nHeight,
    f = $("section.nav-footer"),
    fTop = f.offset().top,
    fHeight = f.height(),
    fPadding = 40,
    pageHeight = nBottom+fHeight+fPadding

    if(fTop<=nBottom) {
      f.addClass("overlapped")
    }
    if(h>=pageHeight) {
      f.removeClass("overlapped")
    }
  }

  $(window).on("load", function() {
    overlapListener()
  })

  $(window).on("resize", function() {
    overlapListener()
  })

})