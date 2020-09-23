
var cursor = document.getElementById('cursor');
var body = document.querySelector('.search');
var main = document.querySelector('body');
var words = ['Hell','Heaven','Demon','Angel'];

var input = document.querySelector('input');
var sub = document.querySelector('.sub');
var score = document.getElementById('score');
var sc = 0;
score.innerText = sc;

var ran = Math.floor(Math.random()*3);
var chars = words[ran].split('');


for(var i =0; i<chars.length; i++){
	var ran2 = Math.floor(Math.random()*100);
	var ran3 = Math.floor(Math.random()*100);
	var letter = document.createElement('span');
	letter.innerText = chars[i];
	body.appendChild(letter);
	var text = document.querySelectorAll('span');
	letter.style.left = ran2 + '%';
	letter.style.top = ran3 + '%';
	text[i].addEventListener('mouseover', show);
	text[i].addEventListener('mouseover', white);
	text[i].onmouseout = hide;
	
}
main.addEventListener('mousemove',move);
sub.addEventListener('click',done);
sub.addEventListener('click',re);
function move(e){
	var x = e.clientX;
	var y = e.clientY;
	cursor.style.left = x + 'px';
	cursor.style.top = y + 'px';	
}

function show(){
		cursor.classList.add('big');	
		cursor.classList.remove('small');
}
function hide(){
		cursor.classList.remove('big');	
		cursor.classList.add('small');	
}
function white(){
		this.classList.add('white-text')
}
function done(){
	
	if(input.value == words[ran]){
		sc = sc +1;
		score.innerText = sc;
		input.value = '';
		document.removeChild('span');
		for(var i =0; i<chars.length; i++){
	 ran2 = Math.floor(Math.random()*100);
	 ran3 = Math.floor(Math.random()*100);
	 letter = document.createElement('span');
	letter.innerText = chars[i];
	body.appendChild(letter);
	 text = document.querySelectorAll('span');
	letter.style.left = ran2 + '%';
	letter.style.top = ran3 + '%';
	text[i].addEventListener('mouseover', show);
	text[i].addEventListener('mouseover', white);
	text[i].onmouseout = hide;
		return sc;
		
}	
}

}
// To disable right click
document.addEventListener('contextmenu', event => event.preventDefault());

// To disable F12 options
document.onkeypress = function (event) {
event = (event || window.event);
if (event.keyCode == 123) {
return false;
}
}
document.onmousedown = function (event) {
event = (event || window.event);
if (event.keyCode == 123) {
return false;
}
}
document.onkeydown = function (event) {
event = (event || window.event);
if (event.keyCode == 123) {
return false;
}
}

// To To Disable ctrl+c, ctrl+u


document.onkeydown= function(event) {
var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();

if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u" || pressedKey == "a")) {

return false;
}
};


//addEventListener('input',function(e){
//	e.target.value
//})
