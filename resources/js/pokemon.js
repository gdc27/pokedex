const $ = require( "jquery" );

/* Event to rotate the pokemon sprite depending on his shiny state*/
$('.rotate').click(function(){
   const pokemon = $('.pokemon-sprite');
   if(pokemon.data('shiny-state') == 'no') {
       if (pokemon.data('view') == 'front') {
           pokemon.attr('src', pokemon.data('back'));
           pokemon.data('view', 'back');
       }else{
           pokemon.attr('src', pokemon.data('front'));
           pokemon.data('view', 'front');
       }
   }else{
       if (pokemon.data('view') == 'front') {
           pokemon.attr('src', pokemon.data('shiny-back'));
           pokemon.data('view', 'back');
       }else{
           pokemon.attr('src', pokemon.data('shiny-front'));
           pokemon.data('view', 'front');
       }
   }
});

/* Event to switch between shiny and normal mode */
$('.shiny').click(function(){
    const pokemon = $('.pokemon-sprite');
    if(pokemon.data('shiny-state') == 'no') {
        if (pokemon.data('view') == 'front') {
            pokemon.attr('src', pokemon.data('shiny-front'));
            pokemon.data('shiny-state', 'yes');
        }else{
            pokemon.attr('src', pokemon.data('shiny-back'));
            pokemon.data('shiny-state', 'yes');
        }
    }else {
        if (pokemon.data('view') == 'front') {
            pokemon.attr('src', pokemon.data('front'));
            pokemon.data('shiny-state', 'no');
        }else{
            pokemon.attr('src', pokemon.data('back'));
            pokemon.data('shiny-state', 'no');
        }
    }
});

/* Event to add a class to a capacity make an arrow appear */
$('div.capacities > p').hover(function(){
    $(this).toggleClass('current');
})
