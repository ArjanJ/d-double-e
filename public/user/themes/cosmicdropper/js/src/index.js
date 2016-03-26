const logo = document.getElementById('logo');
const logoPaths = Array.from(logo.querySelectorAll('path'));

document.addEventListener('DOMContentLoaded', () => {
	let img = new Image();
	img.src = '/images/home-bg.jpg';
	img.onload = () => {
		img = null;
		setTimeout(() => {
				logoPaths.forEach((p) => p.classList.add('done'));
			}, 100);
	}
	
});
