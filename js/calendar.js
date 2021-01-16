function calendar() {

    let mes = document.getElementById('mes');
    let anno = document.getElementById('anno');
    let dia = document.getElementById('dia');
    let wk = document.getElementById('semana');
    let trans = document.getElementById('trans');
    let falt = document.getElementById('falt');

    //Mostrar la semana con su nombre
    let semana = new Array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
    let sem = new Date().getDay();
    //Mostrar el mes con su nombre
    let meses = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    let d = new Date().getDay() + 1;
    let ms = new Date().getMonth();
    let y = new Date().getFullYear();

    anno.innerHTML = y;
    mes.innerHTML = meses[ms];
    dia.innerHTML = d;
    wk.innerHTML = semana[sem];

    const fechaIni = new Date('01/01/20');
    const fechaFin = new Date('12/31/20');
    let hoy = new Date();

    let transcurridos = Math.round((hoy - fechaIni) / 86400000);
    trans.innerHTML = transcurridos;
    let faltan = Math.round((fechaFin - hoy) / 86400000);
    falt.innerHTML = faltan;

    //Para cambiar el color del día a los domingos
    if(sem == 7){
        dia.style.color = 'rgb(255, 0, 0)';
    }

}
calendar();
