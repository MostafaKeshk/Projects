var space = document.querySelector('body');
var z_index = 0;
var colorItems = ['0', '1', '2', '3', '4', '5', '6', 'a', 'b', 'c', 'd', 'e', 'f'];
space.addEventListener('click', build);

function build() {
	var item = document.createElement('div');
	item.classList.add('item');
	var col = '';
	var bk_col = '';
	for (var i = 0; i < 6; i++) {
		col += colorItems[Math.floor(Math.random() * 13)];
	}
	var numX = Math.floor(Math.random() * 95) + "%";
	var numY = Math.floor(Math.random() * 95) + "%";
	var rad = Math.floor(Math.random() * 50) + "px";
	z_index = z_index + 1;
	item.setAttribute("style", 'top:' + numY + ';' + 'left:' + numX + ';' + 'z-index:' + z_index + ';' + 'background-color: #' + col + ';'+'border-radius:'+rad+';');
	item.innerText='#'+col;
	space.appendChild(item);
	return z_index;
}