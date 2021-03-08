//VARIABLES
let url;

//Evento para mostrar titulo de cada libro al hacer click
$('img').on('click', function () {
    var titulo = $(this).attr('title');
    $('#seleccion').text(titulo);

});
//Evento del botón menú abrir y equis para cerrar
$('#icon').on('click', function () {
    $('.menu ul').addClass('mostrar');
});
$('.fa-times').on('click',function () {
	$('.menu ul').removeClass('mostrar');

});
//Eventos para la selección de tema
$('.fa-cog').on('click', function(){
    $('.config').toggleClass('mostrar');
})
$('.config li a').on('click', function (event) {
    event.preventDefault();
    url = 'url(' + $(this).data('src') + ')';
    
   
    $('.background-container').css('background-image', url);
    $('#oscuro').css('background','#fff');
    $('#oscuro').css('color','#000');
    $('#main-head').css('color','#fff');
    $('#lupa').css('color','#fff');
    $('#icon').css('color','#fff');
    $('.fa-cog').css('color','#fff');
   
});

//EVENTO PARA MOSTRAR EL BUSCADOR Y DIFUMINAR EL TITULO Y EL BUSCADOR DE TEMAS
$('#lupa').on('click', function(){

	$('.search-container').toggleClass('mostrar');
    $('.index-container').toggleClass('difuso');
    $('#main-head').toggleClass('difuso');

});

//Inhabilitar botón derecho del ratón
$(function(){
    $(document).bind("contextmenu",function(e){

        return false;

    });
});
