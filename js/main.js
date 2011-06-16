$(document).ready(function() {
	//SLIDER GALLERY	
	$('.slideshow').cycle({
		fx: 'fade',
		next: '#gallery-holder .navigation a.next',
		prev: '#gallery-holder .navigation a.prev'
	});
});

/*
$('.navigation').click(function(){
	mpmetrics.track("Next Frame Click");
}
);
*/
