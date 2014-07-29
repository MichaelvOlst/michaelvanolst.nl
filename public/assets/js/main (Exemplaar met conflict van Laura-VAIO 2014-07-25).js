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
		
		
		$('.flash-message').delay(3000).slideUp(400);

		function initialize() {
			var myLatlng = new google.maps.LatLng(52.29947,5.24339);
			var mapOptions = {
		    zoom: 12,
		    center: myLatlng,
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