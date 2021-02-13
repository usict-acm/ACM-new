$(window).on("scroll", function() {
           if($(window).scrollTop()) {
                 $('nav').addClass('black');
           }

           else {
                 $('nav').removeClass('black');
           }
     })


     function toggleIcon(e) {
         $(e.target)
             .prev('.panel-heading')
             .find(".more-less")
             .toggleClass('fas-plus fas-minus');
     }
     $('.panel-group').on('hidden.bs.collapse', toggleIcon);
     $('.panel-group').on('shown.bs.collapse', toggleIcon);
