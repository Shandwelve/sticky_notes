$(document).on('click', '.nav-link', function () {
    $.ajax({
        url: 'filterNotes',
        method: 'POST',
        data: {
            priority: $(this).html()
        }
    }).done(function (result) {
        $('.content').remove();
        $('aside').after(result);
    })
})