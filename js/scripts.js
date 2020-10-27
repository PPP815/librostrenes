//Evento para mostrar titulo de cada libro al hacer click
$('img').on('click', function () {
    var titulo = $(this).attr('title');
    $('#seleccion').text(titulo);

});
//Evento del botón menú
$('#icon').on('click', function () {
    $('.menu ul').toggleClass('mostrar');

});

//Eventos para la selección de tema
$('.config #oscuro').on('click', function () {

    $('.background-container').css('background-image', 'url(../img/fondo_oscuro.jpg)');
    $('#icon').css('color', '#fff');
    $('h1').css('color', '#fff');
    $('body').css('background-image', 'url(img/fondo_oscuro.jpg)');
	$('#lupa').css('color', '#fff');
	$('ul.mostrar').css('background-color', '#fff');
});

$('.config #claro').on('click', function () {

    $('.background-container').css('background-image', 'url(../img/fondo_blanco.jpg)');
    $('#icon').css('color', '#000000');
    $('h1').css('color', '#000000');
    $('body').css('background-image', 'url(img/fondo_blanco.jpg)');
	$('footer').css('background-color', '#000000');
	$('#lupa').css('color', '#000000');
	$('ul.mostrar').css('background-color', '#ffe5c5');
});
//EVENTO PARA MOSTRAR EL BUSCADOR
$('#lupa').on('click', function(){

	$('.search-container').toggleClass('mostrar');




});

//Evento para que en la versión movil aparezca este texto y no el menu de gestión
$( window ).on('load',function() {
  $( "#gestion" ).append( "<p class='ocultar'>Este menú no está disponible en la versión para móviles</p>" );
});
//Inhabilitar botón derecho del ratón
$(function(){
    $(document).bind("contextmenu",function(e){

        return false;

    });
});
