$(document).ready(function () {
    $.each( $('input[type="password"]'), function( key, value ) {
        var width = $(this).outerWidth();
        $(this).wrap("").after('');
    });
    $(document).on('mousedown', '.icon-eye', function() { $(this).siblings('input').attr('type', 'text') });
    $(document).on('mouseup', '.icon-eye', function() { $(this).siblings('input').attr('type', 'password') });
})




