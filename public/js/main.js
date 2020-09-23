/*$(document).ready(function () {
    $.ajax({
        url: 'delete?id=1',
        method: 'POST',
        data: {
            id: 123,
            name: 'test'
        }
    }).done(function (response) {
        $('body').append(response);
    });
})*/

$(document).on('click', '.nav-link', function () {
    console.log($(this).html())
    $.ajax({
        url: 'filterNotes',
        method: 'POST',
        data: {
            priority: $(this).html()
        }
    }).done(function (result) {
        console.log(result)
        $('.content').remove();
        $('aside').after(result);
    })
})