$(document).ready(function () {
    var path = window.location.pathname
    var page = path.substr(path.lastIndexOf('/') + 1);
    $('nav li a').each(function(){
        if ($(this).attr('href') == page) {
            $(this).parent().addClass('active');
        }
    })
});