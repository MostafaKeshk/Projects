VanillaTilt.init(document.querySelector(".lets"), {
		speed: 1000,
		transition: true,
		perspective: 1000,
		reverse: true,
		max: 10,
	});
$(document).ready(function() {
//	$('.div-vid a').click(function(){
//		$('.fancybox-slide--video .fancybox-content').addClass('animate__animated');
//		$('.fancybox-slide--video .fancybox-content').addClass('animate__fadeInDownBig');
//	});
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
	$('.n-sec1').hover(function(){
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
$('[data-fancybox]').fancybox({
  animationDuration : 400,
  animationEffect   : 'slide-in-out'
});
//$('.vid-3').click(function(){
////	$('.fancybox-slide--video .fancybox-content').attr('style', 'width: auto !important;height: auto !important;');
//$('.fancybox-slide--video .fancybox-content').addClass('wd');
//});
$(function() {
  $(".vid-3").on("click", function(e) {
    $(".fancybox-slide--video .fancybox-content").addClass("wd");
    e.stopPropagation()
  });
  $(document).on("click", function(e) {
    if ($(e.target).is(".fancybox-slide--video .fancybox-content") === false) { setTimeout(function(){
		$(".fancybox-video").removeClass("wd");
	},400);  
    }
  });
});