
const body = document.querySelector('body');
const button = document.querySelector('button');
const text = document.querySelector('p');
const color1 = document.querySelector('.color1');
const color2 = document.querySelector('.color2');

color1.addEventListener('input',function(){
	return color1.value;
});
color2.addEventListener('input',function(){
	return color2.value;
});
button.addEventListener('click',function(){
	const overlay = document.createElement('div');
	overlay.classList.add('overlay');
	body.appendChild(overlay);
	overlay.style.backgroundImage = `linear-gradient(to right,${color1.value},${color2.value})`;
	text.innerText = `background-image: linear-gradient(to right,${color1.value},${color2.value});`
});