function now(){
	var second = document.querySelector('.sec');
	var min = document.querySelector('.min');
	var hour = document.querySelector('.hour');
	var time = new Date();
	var secondsDeg = (time.getSeconds() / 60) * 360 + 90;
	var minDeg = (time.getMinutes() / 60) * 360 + 90;
	var hourDeg = (time.getHours() / 12) * 360 + 90;
	second.style.transform = `rotate(${secondsDeg}deg)`;
	min.style.transform = `rotate(${minDeg}deg)`;
	hour.style.transform = `rotate(${hourDeg}deg)`;
}


setInterval(now,1000);