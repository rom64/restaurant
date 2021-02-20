/*
|--------------------------------------------------------------------------
| UItoTop jQuery Plugin ver 1.1
| http://www.mattvarone.com/web-design/uitotop-jquery-plugin/
| By Matt Varone.
| Thanks to Remy Tourbiez	
|--------------------------------------------------------------------------
*/

(function(jQuery){
	jQuery.fn.UItoTop = function(options) {

 		var defaults = {
			text: '',
			min: 500,
			inDelay:600,
			outDelay:400,
  			containerID: 'toTop',
			containerHoverID: 'toTopHover',
			scrollSpeed: 800,
			easingType: 'linear'
 		};

 		var settings = jQuery.extend(defaults, options);
		var containerIDhash = '#'+settings.containerID;
		var containerHoverIDHash = '#'+settings.containerHoverID;
		
		jQuery('body').append('<a href="#" id="'+settings.containerID+'">'+settings.text+'</a>');
		jQuery(containerIDhash).hide().click(function(){
			jQuery('html, body').animate({scrollTop:0}, settings.scrollSpeed, settings.easingType);
			jQuery('#'+settings.containerHoverID, this).stop().animate({'opacity': 0 }, settings.Outdelay, settings.easingType);
			return false;
		})
		.prepend('<span id="'+settings.containerHoverID+'"></span>')
		.hover(function() {
				jQuery(containerHoverIDHash, this).stop().animate({
					'opacity': 1
				}, 600, 'linear');
			}, function() { 
				jQuery(containerHoverIDHash, this).stop().animate({
					'opacity': 0
				}, 700, 'linear');
			});
					
		jQuery(window).scroll(function() {
			var sd = jQuery(window).scrollTop();
			if(typeof document.body.style.maxHeight === "undefined") {
				jQuery(containerIDhash).css({
					'position': 'absolute',
					'top': jQuery(window).scrollTop() + jQuery(window).height() - 50
				});
			}
			if ( sd > settings.min ) 
				jQuery(containerIDhash).fadeIn(settings.inDelay);
			else 
				jQuery(containerIDhash).fadeOut(settings.Outdelay);
		});

};
})(jQuery);

jQuery().ready(function() { jQuery().UItoTop(); });