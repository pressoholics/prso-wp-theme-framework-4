jQuery.noConflict();
(function($) {
	
	/*** Init Zurb Foundation **/
	$(document).foundation(function(response){
		//console.log(response);
	});
	
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