var start = document.querySelector('.start');
var change = document.querySelector('.btn.change');
var stop = document.querySelector('.stop');
var reset = document.querySelector('.reset');
var leap = document.querySelector('.leap');
var hour = document.querySelector('.hour');
var min = document.querySelector('.min');
var sec = document.querySelector('.sec');
var mil = document.querySelector('.mi');
var list_container = document.querySelector('.listy');
var h = 0;
var m = 0;
var s = 0;
var mi = 0;
var x;
//var tic = document.querySelector('.tic');
var all = document.querySelector('.all');


start.addEventListener('click', start_timer);
change.addEventListener('click', colorChanger);
stop.addEventListener('click', stop_timer);
leap.addEventListener('click',addLeap);
reset.addEventListener('click', reset_timer);
stop.style.pointerEvents = 'none';
leap.style.pointerEvents = 'none';



function start_timer() {
	all.classList.remove('pause');
	//	tic.classList.remove('pause');
	all.classList.add('round');
	//	tic.classList.add('pulse');
	mi++;
	
	if (mi < 10) {
		mil.innerHTML =  '0' + mi;
	}
	if(mi==10){
		mi =0;
		mil.innerHTML =  '0' + mi;
		s++;
	}
	if (s < 60 && s != 0) {
		if (s < 10) {
			sec.innerHTML = '0' + s + '&nbsp' + ':' + '&nbsp';
		} else {
			sec.innerHTML = s + '&nbsp' + ':' + '&nbsp';
		}
	} else if (s == 60) {
		s = 0;
		sec.innerHTML = '0' + s + '&nbsp' + ':' + '&nbsp';
		m++;
		if (m < 10) {
			min.innerHTML = '0' + m + '&nbsp' + ':' + '&nbsp';
		} else {
			min.innerHTML = m + '&nbsp' + ':' + '&nbsp';
		}
	} 
	if (m == 60) {
		m = 0;
		min.innerHTML = '0' + m + '&nbsp' + ':' + '&nbsp';
		h++;

		if (h < 10) {
			hour.innerHTML = '0' + h + '&nbsp' + ':' + '&nbsp';
		} else {
			hour.innerHTML = h + '&nbsp' + ':' + '&nbsp';
		}
	}

	x = setTimeout(start_timer, 100);
	start.style.pointerEvents = 'none';
	leap.style.pointerEvents = 'all';
	stop.style.pointerEvents = 'all';
}


function stop_timer() {
	clearTimeout(x);
	all.classList.add('pause');
	start.style.pointerEvents = 'all';
	leap.style.pointerEvents = 'none';
	stop.style.pointerEvents = 'none';
	//	tic.classList.add('pause');
}
var count_list = 0;

function reset_timer() {
	clearTimeout(x);
	s = 0;
	m = 0;
	h = 0;
	mil.innerHTML='';
	sec.innerHTML = '';
	min.innerHTML = '';
	hour.innerHTML = '';
	start.style.pointerEvents = 'all';
	leap.style.pointerEvents = 'none';
	stop.style.pointerEvents = 'none';
	all.classList.remove('pause');
	all.classList.remove('round');
	list_container.innerHTML = '';
	return count_list = 0;
	//	tic.classList.remove('pulse');
}

function addLeap() {
	count_list++;
	var timer = document.querySelector('.timer');
	var item = document.createElement('li');
	item.innerHTML = count_list + ' - ' + timer.innerHTML;
	list_container.appendChild(item);
}

function colorChanger() {
	var colorChars = ['a', 'b', 'c', 'd', 'e', 'f', '1', '2', '3', '4', '5', '6'];
	var bg_color = "#";
	for (var c = 0; c < 6; c++) {
		 bg_color += colorChars[Math.floor(Math.random() * 10)];
	}
	document.documentElement.style.setProperty('--color', bg_color);
}
