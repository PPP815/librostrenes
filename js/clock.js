function clock(){
	let hours = document.getElementById('hour');
	let minutes = document.getElementById('minutes');
	let seconds = document.getElementById('seconds');
	let fecha = document.getElementById('fecha');


	let h = new Date().getHours();
	let m = new Date().getMinutes();
	let s = new Date().getSeconds();
    //Mostrar la semana con su nombre
    let semana = new Array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo');
    let sem = new Date().getDay();
    //Mostrar el mes con su nombre
    let meses = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
    let d = new Date().getDay() + 1;
    let ms = new Date().getMonth();
    let y = new Date().getFullYear();

    //añdir un 0 a las cifras menores de 10 en reloj
    h = (h < 10) ? "0" + h : h
    m = (m < 10) ? "0" + m : m
    s = (s < 10) ? "0" + s : s
    //Añadir un 0 a las cifras menores de 10 en el día
    d = (d < 10) ? "0" + d : d


	hours.innerHTML = h;
	minutes.innerHTML = m;
	seconds.innerHTML = s;
    fecha.innerHTML = (semana[sem] + ', ' + d + ' de ' + meses[ms] + ' de ' + y);


}

var interval = setInterval(clock, 1000);
