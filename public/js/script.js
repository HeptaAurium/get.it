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
        $('.site-footer ').toggleClass('slide');
    });

    $('span.span-input').click(function () {
        $('span.span-input').removeClass('active');
        $(this).toggleClass('active');
        var val = $(this).data('size');
        $('input#inp-size').val("");
        $('input#inp-size').val(val);
    });
    $('span.span-colors').click(function () {
        $('span.span-colors').removeClass('active');
        $(this).toggleClass('active');
        var val = $(this).data('color');
        $('input#inp-color').val("");
        $('input#inp-color').val(val);
    });

    $('button#btnAddCart').click(function (e) {
        e.preventDefault();
        var product_id = $('#product_id').val(), color = $('input#inp-color').val(), size = $('input#inp-size').val(), quantity = $('#quantity').val(), guest = $('#guest').val();


        $(this).html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span> Adding...");
        $(this).prop('disabled', true);

        $.ajaxSetup({
            headers: { 'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content') }
        });
        $.ajax({
            type: "post",
            url: "/orders",
            data: {
                color: color,
                size: size,
                quantity: quantity,
                guest: guest,
                product: product_id,
            },

            success: function (response) {
                var resp = JSON.parse(response);
                if (resp.status == "success") {
                    setTimeout(() => {
                        $('button#btnAddCart').prop('disabled', false);
                        $('button#btnAddCart').css('background', '').addClass('bg-success');
                        $('button#btnAddCart').html('<i class="fas fa-check"></i> Product added to cart');
                    }, 1000);

                    // window.setTimeout(function () { location.reload() }, 3000)
                    get_items_in_cart();
                } else {
                    setTimeout(() => {
                        $('button#btnAddCart').prop('disabled', false);
                        $('button#btnAddCart').css('background', '').addClass('bg-success');
                        $('button#btnAddCart').html('<i class="fas fa-cancel"></i> Failed to add to cart! Try again');
                    }, 2000);
                }
            }
        });
    });

    $('.btn-change-disp').click(function (e) {
        e.preventDefault();
        var src = $(this).data('src');
        $('div#display-img').fadeIn().css('background-image', 'url(' + src + ')');
    });

    function get_items_in_cart() {
        $.ajax({
            type: "get",
            url: "/items/in/cart",
            data: {
                get: 1
            },

            success: function (response) {
                $('span.cart-count').html(response);
            }
        });
    }

    $('#btn-search').on('mouseover', function(e) {
        e.preventDefault();

        $(this).addClass('hide');
        $('input#search').removeClass('hide');

    });

    function openSearch() {
        document.getElementById("search-modal").style.display = "block";
    }

    // Close the full screen search box
    function closeSearch() {
        document.getElementById("search-modal").style.display = "none";
    }

    $('#btn-expand-ssb').click(function(e) {
        e.preventDefault();

        $('.search-side-bar').css('left', '-10px');
        $(this).addClass('hide');
        $('#btn-collapse-ssb').removeClass('hide');
    });
    $('#btn-collapse-ssb').click(function(e) {
        e.preventDefault();

        $('.search-side-bar').css('left', '-400px');
        $(this).addClass('hide');
        $('#btn-expand-ssb').removeClass('hide');
    });

    $('.btn-top-menu').on('mouseover', function(e) {
        e.preventDefault();
        $('.profile').removeClass('hide');
    });
    $('.btn-top-menu').on('mouseout', function(e) {
        e.preventDefault();
        $('.profile').addClass('hide');
    });
    $('.profile').on('mouseover', function(e) {
        e.preventDefault();
        $('.profile').removeClass('hide');
    });
    $('.profile').on('mouseout', function(e) {
        e.preventDefault();
        $('.profile').addClass('hide');
    });
    $('.ssb-header').click(function(e) {
        e.preventDefault();
        $(this).next().toggleClass('hide');

    });

    $('.btn-close-cart').click(function(e) {
        e.preventDefault();
        $('.cart-div').css('right', '-300px');
    });
    $('.btn-top-cart').click(function(e) {
        e.preventDefault();
        $('.cart-div').css('right', '0');
    });

});



