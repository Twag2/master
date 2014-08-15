$(document).ready(function()
{
    $("#click_settings").click(function()
    {
        if($("#menu_settings").hasClass('hidden'))
        {
            $("#menu_settings").removeClass('hidden');
        }
        else
        {
            $("#menu_settings").addClass('hidden');
        }
        return false;
    });

    $("#menu_settings_cancel").click(function()
    {
        $("#menu_settings").addClass('hidden');
    });

    $("#menu_settings_save").click(function()
    {
        $("#menu_settings").addClass('hidden');
    });

    $("#status").click(function()
    {
       $("#status").replaceWith(
           '<div class="thumbnail">' +
               '<form class="form-horizontal">' +
                    '<div class="input-group">' +
                        '<input class="form-control" type="text" value="Status">' +
                        '<span class="input-group-btn">' +
                        '<button class="btn btn-primary" id="status_change" type="submit">Change</button>' +
                        '</span>' +
                    '</div>' +
               '</form>' +
           '</div>'
       );
       return false;
    })
});