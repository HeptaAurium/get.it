$(document).ready(function () {
    $('button.btnNext').click(function (e) { 
        e.preventDefault();
        
    });

});

function showSlide(n) {
    var slides = $('div.showcase-outer'), i = 0, slideIndex = 0;

    for (i = 0; i < slides.length; i++) {
        slides[i].removeClass('active');
    }
    slides[slideIndex + n].addClass('active').fadeIn();
}
