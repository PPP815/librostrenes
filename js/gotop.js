//Función para mostrar y ocultar la flecha arriba
window.onscroll = function () {
    "use strict";
    if (document.documentElement.scrollTop > 1000) {

        document.querySelector('.go-top-container').classList.add('show');

    } else {

        document.querySelector('.go-top-container').classList.remove('show');

    }


};
//Función para al hacer click ir arriba
document.querySelector('.go-top-container').addEventListener('click', () => {

    window.scrollTo ({
        top: 0,
        behavior: 'smooth'

    });
});
