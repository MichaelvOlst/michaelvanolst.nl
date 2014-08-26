(function($) {
		Menu();	
		
		loadProgressBarWhenScrollingDown();
		
		// flashmessage
		$('.flash-message').delay(3000).fadeOut(300);

		//googlemaps
		googleMaps();

		fadeOutBanner();
		
		//scrollingWorkBio();
		
		displayParagraphs();
			
		
})(jQuery);

function displayParagraphs(){
	$('a.read-more').on('click', function(e){
 
 		var toggle = $('div.toggle'),
 			that = $(this);
 			
        if(that.hasClass("less")) {
            that.html("Read more +");
            that.removeClass("less");
        } else {
            that.html("Read less -");
            that.addClass("less");
        }
        that.parent().prev().slideToggle();
        that.prev().slideToggle();
        
        e.preventDefault();
	});
	
	
}

function scrollingWorkBio(){
	$(window).scroll(function (){
		
		if ($(this).scrollTop() > 50)  {
			$('.work-bio').css({
				'margin-top' : "-15%",
				'transform': "translateY(" + $(this).scrollTop() + "px)"
			});	
		} else {
			$('.work-bio').css({
				'margin-top' : "0"
			});	
		}
	});
}

function fadeOutBanner(){

	$(window).scroll(function(){
		var scrolltop = $(this).scrollTop() ,
			banner = $(".banner"),
			bannerHeight = banner.outerHeight(),
			Oval = (bannerHeight / scrolltop);
			
			// banner.css({
				
			// 	'transform' : "translateY(" + scrolltop / 2 + "px)"
			// });
			
			banner.find('.layout').css({
				'opacity' : Math.abs(Oval / 10)
			});
			
	});
		
}

function googleMaps(){
	function initialize() {
			var styles = [{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#9ACA9A"},{"saturation":0},{"lightness":0},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#9ACA9A"},{"saturation":-10},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]}]
			var myLatlng = new google.maps.LatLng(52.29947,5.24339);
			var mapOptions = {
		    zoom: 15,
		    draggable: false,
		    zoomControl: false,
		    scrollwheel: false,
		    disableDefaultUI: true,
		    center: myLatlng,
		    styles: styles,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
  		}
			var map = new google.maps.Map(document.getElementById('maps'), mapOptions);
			  
			var marker = new google.maps.Marker({
	      		position: myLatlng,
	     	 	map: map,
	      		title: 'Huizen'
	  		});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
}

function loadProgressBarWhenScrollingDown(){
	$(window).scroll( function(){
			var that = $(this)
				scrollTop = that.scrollTop(),
				header = $('header').height();

            if( scrollTop >= 200 ){
                loadProgressBar();
                
 				//$(window).off('scroll');
 			} 
		});
		
		function loadProgressBar(){

			$('.skills').find('.bar').each(function(){
				var that = $(this),
					span = that.find('span');
					// progressValue = progress.data('procent');

				that.parent('div').append('<span class="procent">'+ span.data('procent') + '%</span>');
				
				$('.procent').fadeIn();

				that.find('span').animate({
					'width' : span.data('procent') + '%'
	 			}, 500);
	 			
	 			$(window).off('scroll');
			});
		}
}

function Menu(){

	var nav = $('.main-nav'),
		header = $('header'),
		footer = $('footer'),
		container = $('.container'),
		body = $('#body');
		
	$('.menu-toggle').on('click', function(){
		nav.toggleClass('menu-open');
		header.toggleClass('header-open');
		footer.toggleClass('footer-open');
		container.toggleClass('container-open');
	});
	

}