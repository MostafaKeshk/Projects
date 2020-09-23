var pop = document.querySelector('.model-parent');
var btn = document.querySelector('.button');
var X = document.querySelector('.x');
var site = document.querySelector('section');
var mod = document.querySelector('.model');

btn.addEventListener('click', appear);

X.addEventListener('click', disappear);

pop.addEventListener('click', disappearParent);

function appear() {
	pop.style.display = "block";
	site.style.filter = "blur(10)";
	mod.style.animationName = "drop";
}

function disappear() {
	mod.style.animationName = "up";
	setTimeout(dis, 800);

}

function disappearParent(e) {
	if (e.target.className == "model-parent") {
		mod.style.animationName = "up";
		setTimeout(dis, 800);
	}
}

function dis() {
	pop.style.display = "none";
	site.style.filter = "blur(0)";
}
