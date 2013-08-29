jQuery.noConflict();
(function($) {
	
	/*** Init Zurb Foundation **/
	$(document).foundation(
		'orbit', {
		  animation: 'fade',
		  timer_speed: 10000,
		  pause_on_hover: true,
		  resume_on_mouseout: false,
		  animation_speed: 500,
		  stack_on_small: true,
		  navigation_arrows: true,
		  slide_number: true,
		  container_class: 'orbit-container',
		  stack_on_small_class: 'orbit-stack-on-small',
		  next_class: 'orbit-next',
		  prev_class: 'orbit-prev',
		  timer_container_class: 'orbit-timer',
		  timer_paused_class: 'paused',
		  timer_progress_class: 'orbit-progress',
		  slides_container_class: 'orbit-slides-container',
		  bullets_container_class: 'orbit-bullets',
		  bullets_active_class: 'active',
		  slide_number_class: 'orbit-slide-number',
		  caption_class: 'orbit-caption',
		  active_slide_class: 'active',
		  orbit_transition_class: 'orbit-transitioning',
		  bullets: true,
		  timer: true,
		  variable_height: false,
		  before_slide_change: function(){},
		  after_slide_change: function(){}
		},
		function(response){
			//console.log(response);
		}
	);
	
	// Add animation effects to content images on scroll - Except IE6,7,8 (see feature detect logic)
	if( $.support.cssFloat ) {
	  
		$("#main img").css( 'visibility', 'hidden' );
		$("#main img").waypoint( function() {
		                                    
			$(this).delay(100).queue(function(next){
			    
			    if( !$(this).hasClass("animated") ) {
			    	//See _app-animate.scss for animation options
			        $(this).addClass("animated fadeIn");
			    }
			    
			    next();
			
			});                                    
		
		}, { offset: "99%" });
	  
	}
	
	/*** Use this js doc for all application specific JS ***/
  
  
  
  
  
  
	// add foundation classes and color based on how many times tag is used
	function addFoundationClass(thisObj) {
	  var title = $(thisObj).attr('title');
	  if (title) {
	    var titles = title.split(' ');
	    if (titles[0]) {
	      var num = parseInt(titles[0]);
	      if (num > 0)
	      	$(thisObj).addClass('');
	      if (num > 2 && num < 4)
	        $(thisObj).addClass('success');
	      if (num > 5)
	        $(thisObj).addClass('alert');
	    }
	  }
	  return true;
	}
	
	$("#tag-cloud a").each(function() {
	    addFoundationClass(this);
	    return true;
	});
	
	$("ol.commentlist a.comment-reply-link").each(function() {
		$(this).addClass('button blue radius small');
		return true;
	});
	
	// Input placeholder text fix for IE
	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	
	// Prevent submission of empty form
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});
	
})(jQuery);