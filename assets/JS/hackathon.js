$(window).on("scroll", function() {
      if($(window).scrollTop()) {
            $('nav').addClass('black-bg');
      }

      else {
            $('nav').removeClass('black-bg');
      }
})
