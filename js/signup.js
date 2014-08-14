$('form').submit(function(){
    $.post(
        $(this).attr('register'),
        $(this).serializeArray()
    );
    return false;
});