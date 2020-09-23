var boxes = document.getElementsByClassName('box');
var contain = document.getElementById('contain');



for (var a = 0; a < 18000; a++) {
	var box = document.createElement("DIV");
	contain.appendChild(box);
	box.classList.add('box');
}



for (var i = 0; i < boxes.length; i++) {
	boxes[i].addEventListener('mouseover', colored);
}


function colored() {
	var clr = document.getElementById('col').value;
	this.setAttribute('style', `background-color:${clr}`);
}
