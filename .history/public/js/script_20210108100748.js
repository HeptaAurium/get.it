$(document).ready(function () {

    $('button.btnNext').click(function (e) {
        e.preventDefault();
        showSlide(+1);
    });
    $('button.btnPrev').click(function (e) {
        e.preventDefault();
        showSlide(-1);
    });

});

var slideIndex = 0;
var slides = $('div.showcase-outer'), i = 0;
function showSlide(n) {
    if (slideIndex > slides.length) { slideIndex = 0 }
    for (i = 0; i < slides.length; i++) {
        var slide = slides[i];
        $(slide).removeClass('active');
    }
    var next = slides[slideIndex + Number(n)];
    $(next).addClass('active');
}
