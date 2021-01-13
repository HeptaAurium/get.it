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

    // Products sliding

    // Arrivals

    $('button#arrivalsNext').click(function (e) {
        e.preventDefault();
        var margin = $('div.arrivals').css('margin-left'), nw;

        margin = margin.replace('px', '');
        margin = Number(margin);
        nw = margin - 320;

        if (nw < -1963) {
            nw = -1963;
        } else {
            slide($('div.arrivals'), nw);
        }

    });
    $('button#arrivalsPrev').click(function (e) {
        e.preventDefault();
        var margin = $('div.arrivals').css('margin-left');
        var nw;

        margin = margin.replace('px', '');
        margin = Number(margin);
        nw = margin + 320;

        if (nw > 0) {
            slide($('div.arrivals'), '0');
        } else {
            slide($('div.arrivals'), nw);
        }
    });
    // Picks
    $('button#picksNext').click(function (e) {
        e.preventDefault();
        var margin = $('div.picks').css('margin-left'), nw;

        margin = margin.replace('px', '');
        margin = Number(margin);
        nw = margin - 320;

        if (nw < -1963) {
            nw = -1963;
        } else {
            slide($('div.picks'), nw);
        }

    });
    $('button#picksPrev').click(function (e) {
        e.preventDefault();
        var margin = $('div.picks').css('margin-left');
        var nw;

        margin = margin.replace('px', '');
        margin = Number(margin);
        nw = margin + 320;

        if (nw > 0) {
            slide($('div.picks'), '0');
        } else {
            slide($('div.picks'), nw);
        }
    });

    function slide(div, margin) {
        $(div).css('margin-left', margin + 'px');
    }

    // expand side panel
    $('button.expand-side').click(function (e) {
        e.preventDefault();
        $(this).toggleClass('min');
        $('.clear-left').toggleClass('clear');
        $('.search-side-bar').toggleClass('slide');
    });

});



