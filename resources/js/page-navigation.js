const $ = require( "jquery" );

/* Event to go to the pokemon page when a pokemon is clicked */
$('.pokemon').click(function(){
   let name = $(this).data('name');
    window.location.href = "/pokemon/"+name;
});

/* Navigation buttons */

/* Moves to the next page when the next button is clicked */
$('.next').click(function(){
    let id = $('.page_nb').html();
    if(id<124) {
        id++;
        window.location.href = "/" + id;
    }
});

/* Moves to the previous page when the prev button is clicked */
$('.prev').click(function(){
    let id = $('.page_nb').html();
    if(id > 0) {
        id--;
        window.location.href = "/" + id;
    }
});

/* Event on the search button that goes to the pokemon page if the search bar contains something*/
$('.input_box>i').click(function(){
    let name = $('input[name="input-search"]').val();
    if(name) {
        window.location.href = "/pokemon/" + name;
    }
});



