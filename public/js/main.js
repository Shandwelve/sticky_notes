$(document).ready(function () {
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
})