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
    $('#icon').css('color', 'white');
    $('h1').css('color', 'white');
    $('body').css('background-image', 'url(img/fondo_oscuro.jpg)');
});

$('.config #claro').on('click', function () {

    $('body').css('background-color', '#e5ded4');
    $('#icon').css('color', 'black');
    $('h1').css('color', 'black');
    $('body').css('background-image', 'url(img/fondo_blanco.jpg)');

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
