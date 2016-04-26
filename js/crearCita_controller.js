function mostrarFormulario() {
	'use strict';

//	if ($("#inicio").data("display") == "none") {
//		$("#inicio").data("backgroung-image") === 'url(files/img_heart_rate.svg)';
//		//		$('body').css('background-image', );
//	} else {
//		$("#inicio").data("backgroung-image") === 'url(files/img_background.jpg)';
//		//		$('body').css('background-image', 'url(files/img_background.jpg)');
//		$('body').toggleClass('background-image', 'url(files/img_background.jpg)');
//	}

	$("#form").slideToggle();
	$("#inicio").slideToggle();
	$("body").toggleClass("new_background");

}
