const $ = require( "jquery" );

$('.rotate').click(function(){
   const pokemon = $('.pokemon-sprite');
   let mem = pokemon.attr('src');
   pokemon.attr('src',pokemon.data('back'));
    pokemon.data('back', mem);
});
