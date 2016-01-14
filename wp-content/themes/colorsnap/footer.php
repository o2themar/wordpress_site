<?php /* Footer Template */ ?>
</div> <!-- end inner-content -->
    </div> <!-- end content -->
        <div class="clr"></div>
			<footer id="main-footer">
				
				<div id="bottom-footer">
				    <div class="layout-wrap container">
                       <div id="footer-logo" class="five-col">
                         <p><?php echo esc_textarea(get_theme_mod( 'colorsnap_footer_top' )); ?></p> 
                       </div>
					 <!-- Footer Menu -->  
     	            <?php if ( has_nav_menu( 'footer-menu' ) ) :
         			wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => '', 'menu_id' =>'footer-nav-links', 'menu_class'=>'footer-menu seven-col last', 'depth' => 0, ) );
			        endif; ?>
					
					<div id="footer-copyright">
                       <p class="vsmall"><span class="alignleft">&copy; <?php echo date("Y") ?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved.', 'colorsnap'); ?></span>
                     <span class="alignright "><a href="http://thememags.com/colorsnap-wordpress-theme/">ColorSnap</a> Theme. <?php _e('Powered by ', 'colorsnap'); ?><a href="http://wordpress.org/">WordPress</a>.</span></p>
					   </div>
                    </div>
                </div><!-- end #inner-footer -->
			</footer> <!-- end footer -->
        <div id="gototop"><?php _e('Scroll To Top' , 'colorsnap'); ?></div>

        <?php wp_footer(); ?>
    </body>
</html>