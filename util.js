$(document).ready(function () {
    var path = window.location.pathname
    var page = path.substr(path.lastIndexOf('/') + 1);
    $('nav li a').each(function(){
        if ($(this).attr('href') == page) {
            $(this).parent().addClass('active');
        }
    });

    $('form').submit(function(e){
      if (!checkForm(e.currentTarget)){
        e.preventDefault();
      }
    });
});

function checkForm(form) {
  if($(form).has('.has-error')) {
    $('.text-danger').parent().remove();
    $('.form-group').removeClass('has-error');
  }

  var pass = true;

  $('input', form).each(function(){
    if($(this).attr('required') && $(this).val() == '') {
      $(this).parent().addClass('has-error');
      pass = false;
    }
  });

  if (!pass) {
    $(form).append('<div class="col-md-6 col-md-offset-3"><p class="text-danger">Please fix errors!</p></div>');
  }
  return pass;
}

$(window).scroll(function() {
    if ($(".navbar-inverse").offset().top > 10) {
        $(".navbar-inverse").addClass("top-nav-collapse");
    } else {
        $(".navbar-inverse").removeClass("top-nav-collapse");
    }
});
