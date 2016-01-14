<?php
/* The template part for displaying a message that posts cannot be found. @package colorsnap */
?>
<div class="singlebox">
  <div class="not-found-block center">
      <h3><?php _e('Oops..! No Results Found.', 'colorsnap'); ?></h3>
        <p><?php _e('Perhaps, Try searching with different keywords.', 'colorsnap'); ?></p>                              
                <?php get_search_form(); ?>
		   
  </div>
</div>