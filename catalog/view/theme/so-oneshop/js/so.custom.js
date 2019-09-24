/* Add Custom Code Jquery
 ========================================================*/
$(document).ready(function(){
	// Fix hover on IOS
	$('body').bind('touchstart', function() {}); 



	// Messenger posmotion
	$( "#close-posmotion-header" ).click(function() {
		$('.promotion-top').toggleClass('hidden-promotion');
		$('body').toggleClass('hidden-promotion-body');

		if($(".promotion-top").hasClass("hidden-promotion")){
			$.cookie("open", 0);
			
		} else{
			$.cookie("open", 1);
		}

	});
	
	if($.cookie("open") == 0){
		$('.promotion-top').addClass('hidden-promotion');
		$('body').addClass('hidden-promotion-body');
	}


	// Messenger Top Link
	$('.list-msg').owlCarousel2({
		pagination: false,
		center: false,
		nav: false,
		dots: false,
		loop: true,
		slideBy: 1,
		autoplay: true,
		margin: 30,
		autoplayTimeout: 4500,
		autoplayHoverPause: true,
		autoplaySpeed: 1200,
		startPosition: 0, 
		responsive:{
			0:{
				items:1
			},
			480:{
				items:1
			},
			768:{
				items:1
			},
			1200:{
				items:1
			}
		}
	});

	
	// Close pop up countdown
	 $( "#so_popup_countdown .customer a" ).click(function() {
	  $('body').toggleClass('hidden-popup-countdown');
	 });
	// =========================================


	// click header search header 
	jQuery(document).ready(function($){
		$( ".search-header-w .icon-search" ).click(function() {
		$('#sosearchpro .search').slideToggle(200);
		$(this).toggleClass('active');
		});
	});

	// add class Box categories
	jQuery(document).ready(function($){

		if($("#accordion-category .panel .panel-collapse").hasClass("in")){
			$('#accordion-category .panel .accordion-toggle').addClass("show");			
		} 
		else{
			$('#accordion-category .panel .accordion-toggle').removeClass("show");
		}

	});

	// click btn category slider on device
	jQuery(document).ready(function($){
		if ($(window).innerWidth() <= 991) {
			$( ".cate-slider1 .item-sub-cat" ).click(function() {
			$('.cate-slider1 .item-sub-cat > ul').slideToggle(200);
			$(this).toggleClass('active');
			});

			$( ".cate-slider2 .item-sub-cat" ).click(function() {
			$('.cate-slider2 .item-sub-cat > ul').slideToggle(200);
			$(this).toggleClass('active');
			});

			$( ".cate-slider3 .item-sub-cat" ).click(function() {
			$('.cate-slider3 .item-sub-cat > ul').slideToggle(200);
			$(this).toggleClass('active');
			});
		}
	});


	// custom to show footer center
	$(".description-toggle").click(function () {
		if($('.showmore').hasClass('active'))
			$('.showmore').removeClass('active');
		else
			$('.showmore').addClass('active');
	}); 

});
