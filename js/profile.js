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
           '<div class="form-group">' +
                '<input id="status" class="form-control" type="text" value="Status">' +
                '<button class="btn btn-primary btn-sm pull-right" id="status_change" type="submit">Change</button>' +
           '</div>'
       );
       return false;
    })
});