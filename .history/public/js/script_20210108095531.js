$(document).ready(function () {
    var slideIndex = 0;
    $('button.btnNext').click(function (e) {
        e.preventDefault();
        showSlide(+1);
    });
    $('button.btnPrev').click(function (e) {
        e.preventDefault();
        showSlide(-1);
    });

});

function showSlide(n) {
    var slides = $('div.showcase-outer'), i = 0 ;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < slides.length; i++) {
        var slide = slides[i];
        $(slide).removeClass('active');
    }
    var next = slides[slideIndex + Number(n)];
    $(next).fadeIn().addClass('active');
}
