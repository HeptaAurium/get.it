$(document).ready(function () {

    $('#btnRemoveCart').click(function (e) {
        e.preventDefault();
        var form_id = $(this).data('form_id');

        Swal.fire({
            icon: 'warning',
            text: 'Do you want to remove this item from your cart?',
            showCancelButton: true,
            confirmButtonText: 'Delete',
            confirmButtonColor: '#e3342f',
        }).then((result) => {
            if (result.isConfirmed) {
                $('form#'+form_id).submit();
                // alert('form#' + form_id);
            }
        });

    });
});
