$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
        $(".clearHeader").addClass("white");
		$(".clearHeader .logo img").attr('src','src/img/FLUX_BLACK_hires.png');
		$(".clearHeader .social .n-sec img.img3").attr('src','src/img/twitter2.png');
		$(".clearHeader .social .n-sec img.img4").attr('src','src/img/instagram2.png');

    } else {
        $(".clearHeader").removeClass("white");
		$(".clearHeader .logo  img").attr('src','src/img/FLUX_WHITE_hires.png');
		$(".clearHeader .social .n-sec img.img3").attr('src','src/img/twitter.png');
		$(".clearHeader .social .n-sec img.img4").attr('src','src/img/instagram.png');
    }
});