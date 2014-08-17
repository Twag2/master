$(document).ready(function()
{


    $("#status").click(function()
    {
       $("#status").replaceWith(
           '<div class="thumbnail">' +
               '<form class="form-horizontal">' +
                    '<div class="input-group">' +
                        '<input class="form-control" type="text" value="Status">' +
                        '<span class="input-group-btn">' +
                        '<button class="btn btn-primary" id="status_change" type="submit">Сменить</button>' +
                        '</span>' +
                    '</div>' +
               '</form>' +
           '</div>'
       );
       return false;
    })
});