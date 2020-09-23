
window.addEventListener('keydown',play);
window.addEventListener('click',play_mob);



function play(e){
	var audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
	var key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
	var no_audio = document.querySelectorAll(`audio[data-key]:not([data-key="${e.keyCode}"])`);
	var no_key = document.querySelectorAll(`.key[data-key]:not([data-key="${e.keyCode}"])`);
	if(!audio || !no_audio)return;
	for(var i = 0;i <no_audio.length;i++){
		no_audio[i].pause();
		no_key[i].classList.remove('red');
}
	audio.currentTime =0;
	key.classList.add('red');
	audio.play();	
}

function play_mob(e){
	if(!e.target.getAttribute("data-key"))return;
	var x = e.target.getAttribute("data-key");
	var s =  document.querySelector(`.key[data-key="${x}"]`);
	var y = document.querySelectorAll(`audio[data-key]:not([data-key="${x}"])`);
	var z = document.querySelectorAll(`.key[data-key]:not([data-key="${x}"])`);
	if(e.target.getAttribute("data-key") == x){
	for(var a = 0;a <y.length;a++){
		y[a].pause();
		z[a].classList.remove('red');
}
		document.querySelector(`audio[data-key="${x}"]`).play();
		document.querySelector(`audio[data-key="${x}"]`).currentTime =0;
		s.classList.add('red');
	}
}