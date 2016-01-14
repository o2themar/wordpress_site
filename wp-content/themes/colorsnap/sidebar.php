<?php /* Main Sidebar @package colorsnap */
?>
<aside id="sidebar"> 
	<div id="secondary" class="widget-area" role="complementary">
		<?php do_action( 'before_sidebar' ); ?>
			<?php if ( is_active_sidebar( 'primary-sidebar' ) ) : ?>
				<?php dynamic_sidebar( 'primary-sidebar' ); ?>
    	    <?php else : ?>
		<div class="alert alert-help">
			<p><?php _e("Please activate some Widgets.", "colorsnap");  ?></p>
		</div>
		<?php endif; // end sidebar widget area ?>
	</div><!-- #secondary -->
</aside>