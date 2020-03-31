$(document).ready(function(e) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    var url = window.location.href;
    console.log(url);
    if(url.includes('about')){
         $('#about').addClass('current-menu-item');
         $('#index').removeClass('current-menu-item');
         $('#causes').removeClass('current-menu-item');
         $('#portfolio').removeClass('current-menu-item');
         $('#news').removeClass('current-menu-item');
         $('#contact').removeClass('current-menu-item');
    }else if(url.includes('causes')){
         $('#about').removeClass('current-menu-item');
         $('#index').removeClass('current-menu-item');
         $('#causes').addClass('current-menu-item');
         $('#portfolio').removeClass('current-menu-item');
         $('#news').removeClass('current-menu-item');
         $('#contact').removeClass('current-menu-item');

    }else if(url.includes('portfolio')){
         $('#about').removeClass('current-menu-item');
         $('#index').removeClass('current-menu-item');
         $('#causes').removeClass('current-menu-item');
         $('#portfolio').addClass('current-menu-item');
         $('#news').removeClass('current-menu-item');
         $('#contact').removeClass('current-menu-item');

    }else if(url.includes('news')){
        $('#about').removeClass('current-menu-item');
         $('#index').removeClass('current-menu-item');
         $('#causes').removeClass('current-menu-item');
         $('#portfolio').removeClass('current-menu-item');
         $('#news').addClass('current-menu-item');
         $('#contact').removeClass('current-menu-item');

    }else if(url.includes('contact')){
        $('#about').removeClass('current-menu-item');
         $('#index').removeClass('current-menu-item');
         $('#causes').removeClass('current-menu-item');
         $('#portfolio').removeClass('current-menu-item');
         $('#news').removeClass('current-menu-item');
         $('#contact').addClass('current-menu-item');

    }else {
        $('#about').removeClass('current-menu-item');
         $('#index').addClass('current-menu-item');
         $('#causes').removeClass('current-menu-item');
         $('#portfolio').removeClass('current-menu-item');
         $('#news').removeClass('current-menu-item');
         $('#contact').removeClass('current-menu-item');
    }
});