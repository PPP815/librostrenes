let progressbar = document.querySelector('.progressbar');

function ScrollProgressBar(){
	let scrollTop = document.documentElement.scrollTop;
	let scrollHeight = document.documentElement.scrollHeight;
	let clientHight = document.documentElement.clientHeight;

	let windowHeight = scrollHeight - clientHight;
	let porcentaje = scrollTop / windowHeight * 100;

	progressbar.style.width = porcentaje + '%';
}

window.addEventListener('scroll' , ScrollProgressBar);
