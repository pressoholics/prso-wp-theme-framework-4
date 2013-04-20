<div class="row">
  <div class="large-12 columns">
  
    <div class="row collapse hide-for-medium-portrait">
    	<form action="<?php echo home_url( '/' ); ?>" method="get">
	      <div class="eight mobile-three columns">
	        <input type="text" id="search" placeholder="Search" name="s" value="<?php the_search_query(); ?>" />
	      </div>
	      <div class="four mobile-one columns">
	        <button type="submit" id="search-button" class="postfix button">Search</a>
	      </div>
  		</form>
    </div>
    
    <?php if( wp_is_mobile() ): ?>
    <div class="row collapse show-for-medium hide-for-medium-landscape">
    	<form action="<?php echo home_url( '/' ); ?>" method="get">
	      <div class="large-12 columns">
	        <input type="text" id="search" placeholder="Search" name="s" value="<?php the_search_query(); ?>" />
	      </div>
	      <div class="large-12 columns">
	        <button type="submit" id="search-button" class="postfix button full-width">Search</a>
	      </div>
  		</form>
    </div>
    <?php endif; ?>
    
  </div>
</div>