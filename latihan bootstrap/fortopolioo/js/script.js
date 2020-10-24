// event pada saat link di klik
$('.page-scroll').on('click', function(){

	// ambil isi href
	var tujuan = $(this).attr('href');
	
	// tangkap elemen ybs
	var elementujuan = $(tujuan);
 
 	// pindah scroll
 	$('body').animate({
 		scrollTop: elementujuan.offset().top - 50
 	}, 1250, 'swing');

	e.preventDefault();
});

// paralax 
$(window).scroll(function() {
	var wScroll= $(this)scrollTop();

	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wScroll/4 +'%)'
	})
});