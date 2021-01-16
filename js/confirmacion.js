//EVENTO PARA MOSTRAR UN MENSAJE DE ALERT ANTES DE BORRAR UN REGISTRO
function confirmacion(e){
    if (confirm("Esta a punto de borrar un registro. ¿Desea Continua?")){
        return true;
    }else{
        e.preventDefault();
    }
}
 document.querySelector(".borrar").addEventListener("click", confirmacion);

