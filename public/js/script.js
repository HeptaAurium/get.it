$(document).ready(function () {
    var slideIndex = 1;
    showSlide(slideIndex);

    $('button.btnNext').click(function (e) {
        e.preventDefault();
        plusSlides(+1);
    });
    $('button.btnPrev').click(function (e) {
        e.preventDefault();
        plusSlides(-1);
    });

    function plusSlides(n) {
        showSlide(slideIndex += n);
    }

    function showSlide(n) {
        var slides = $('div.showcase-outer'), i = 0;
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            var slide = slides[i];
            $(slide).fadeOut('300').removeClass('active');
        }
        var next = slides[slideIndex - 1];
        $(next).addClass('active').fadeIn('300');
    }

});

$(window).on("load",function() {
    $(window).scroll(function() {
      var windowBottom = $(this).scrollTop() + $(this).innerHeight();
      $(".fade").each(function() {
        /* Check the location of each desired element */
        var objectBottom = $(this).offset().top + $(this).outerHeight();

        /* If the element is completely within bounds of the window, fade it in */
        if (objectBottom < windowBottom) { //object comes into view (scrolling down)
          if ($(this).css("opacity")==0) {$(this).fadeTo(300,1);}
        } else { //object goes out of view (scrolling up)
          if ($(this).css("opacity")==1) {$(this).fadeTo(300,0);}
        }
      });
    }).scroll(); //invoke scroll-handler on page-load
  });




