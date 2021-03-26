const $ = require( "jquery" );

$('.pokemon').click(function(){
   let id = $(this).data('id');
    window.location.href = "/pokemon/"+id;
});

$('.next').click(function(){
    let id = $('.page_nb').html();
    if(id<124) {
        id++;
        window.location.href = "/" + id;
    }
});

$('.prev').click(function(){
    let id = $('.page_nb').html();
    if(id > 0) {
        id--;
        window.location.href = "/" + id;
    }
});

$('.input_box>i').click(function(){
    let name = $('input[name="input-search"]').val();
    if(name) {
        window.location.href = "/pokemon/" + name;
    }
});



