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
        if (slideIndex > slides.length) { slideIndex = 0 }
        for (i = 0; i < slides.length; i++) {
            var slide = slides[i];
            $(slide).removeClass('active');
        }
        var nect = slides[slideIndex - 1];
        $(next).addClass('active');
    }

});




