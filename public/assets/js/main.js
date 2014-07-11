(function($) {
		Menu();	

		$(window).scroll( function(){
			var that = $(this)
				scrollTop = that.scrollTop(),
				header = $('header').height();

            if( scrollTop > header + 50 ){
                loadProgressBar();
                
 				$(window).off('scroll');
 			} 
		});
		
		function loadProgressBar(){
			var skillsHolder = $('.skills'),
			progressBar = skillsHolder.find('.bar');

			progressBar.each(function(){
				var that = $(this),
					progress = that.find('span'),
					progressValue = progress.data('procent');

					$('.procent').hide().delay(1000).fadeIn();

				that.parent('div').append('<span class="procent">'+ progressValue + '%</span>');

				progress.animate({
					'width' : progressValue + '%'
	 			}, 500);
			});
		}
		
		// flashmessage
		$('.flash-message').delay(3000).slideUp(400);

		//googlemaps
		function initialize() {
			var styles = [{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#9ACA9A"},{"saturation":0},{"lightness":0},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#9ACA9A"},{"saturation":-10},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]}]
			var myLatlng = new google.maps.LatLng(52.29947,5.24339);
			var mapOptions = {
		    zoom: 15,
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


		
})(jQuery);

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