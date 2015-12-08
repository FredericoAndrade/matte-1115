$(function() {
  // sidebar window-height
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

  $("a.scroll-down").click(function(e) {
    e.preventDefault()
    var t = $(this).attr("href")
    $('html, body').animate({
        scrollTop: $(t).offset().top
    }, 500)
  })

  $(window).on("load", function() {
    overlapListener()
  })

  $(window).on("resize", function() {
    overlapListener()
  })

})