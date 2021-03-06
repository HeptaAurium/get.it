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

    // Thumbnail image controls
    function currentSlide(n) {
        showSlide(slideIndex = n);
    }

    function showSlide(n) {
        var slides = $('div.showcase-outer'), i = 0;
        if (n > slides.length) { slideIndex = 1 }
        if (n < 1) { slideIndex = slides.length }
        for (i = 0; i < slides.length; i++) {
            var slide = slides[i];
            $(slide).fadeOut('150').removeClass('active');
        }
        var next = slides[slideIndex - 1];
        $(next).addClass('active');
    }

});




