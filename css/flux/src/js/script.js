VanillaTilt.init(document.querySelector(".lets"), {
		speed: 1000,
		transition: true,
		perspective: 1000,
		reverse: true,
		max: 10,
	});
$(document).ready(function() {
	$(".vid").click(function(){
		$('.iframe').addClass('fr');
		$('.iframe').removeClass('fr1');
		$('.big-vid').addClass('d-block');
		$('body').css('overflow','hidden');
	});
	
	$(".big-vid").click(function(){
		 setTimeout(function() {
       $('.big-vid').removeClass('d-block');
		$('body').css('overflow','');
   }, 400);
		
		$('.iframe').removeClass('fr');
		$('.iframe').addClass('fr1');
		
	});
	$('.n-sec').hover(function(){
		$('.for-b').toggleClass('blur');
		$('.logo').toggleClass('blur');
		$('.off').toggleClass('blur');
		$('nav video').toggleClass('blur');
	});
	$('.lets').hover(function(){
		$('.for-b').toggleClass('blur');
		$('.logo').toggleClass('blur');
		$('.off').toggleClass('blur');
		$('nav video').toggleClass('blur');
	});
 });

(function() {
  var elements;
  var windowHeight;

  function init() {
    elements = document.querySelectorAll('.hidden');
    windowHeight = window.innerHeight;
  }

  function checkPosition() {
    for (var i = 0; i < elements.length; i++) {
      var element = elements[i];
      var positionFromTop = elements[i].getBoundingClientRect().top;

      if (positionFromTop - windowHeight <= 0) {
        element.classList.add('frame');
        element.classList.remove('hidden');
      }
		else{
        element.classList.remove('frame');
        element.classList.add('hidden');
      }
    }
  }

  window.addEventListener('scroll', checkPosition);
  window.addEventListener('resize', init);

  init();
  checkPosition();
})();

