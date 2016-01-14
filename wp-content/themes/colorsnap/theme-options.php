<?php

/* create theme options page */
function ct_colorsnap_register_theme_page(){
    add_theme_page( 'Colorsnap Dashboard', 'Colorsnap Dashboard', 'edit_theme_options', 'colorsnap-options', 'ct_colorsnap_options_content');
}
add_action( 'admin_menu', 'ct_colorsnap_register_theme_page' );

/* callback used to add content to options page */
function ct_colorsnap_options_content(){ ?>

    <div id="colorsnap-dashboard-wrap" class="wrap">
        <h2><?php _e('colorsnap Dashboard', 'colorsnap'); ?></h2>

        <?php $active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'dashboard'; ?>

        <h2 class="nav-tab-wrapper">
            <?php _e('Welcome To Colorsnap by ThemeMags', 'colorsnap'); ?>
         </h2>
        
            <div class="content-customization content">
                <h3><?php _e('Theme Options', 'colorsnap'); ?></h3>
                <p><?php _e('Click the "Customize" link in your menu, or use the button below to get started customizing colorsnap', 'colorsnap'); ?>.</p>
                <p>
                    <a class="button-primary" href="<?php echo admin_url('customize.php'); ?>"><?php _e('Use Customizer', 'colorsnap') ?></a>
                </p>
            </div>
	       	       
	        <div class="content content-resources">
		        <h3><?php _e('WordPress Resources', 'colorsnap'); ?></h3>
		        <p><?php _e("Save time and money searching for WordPress products by following our recommendations", "colorsnap"); ?>.</p>
		        <p>
			        <a target="_blank" class="button-primary" href="http://thememags.com/"><?php _e('View Resources', 'colorsnap'); ?></a>
		        </p>
	        </div>
			
			 <div class="content-premium-upgrades content">
		        <h3><?php _e('Rate this theme', 'colorsnap'); ?></h3>
		        <p><?php _e('If you like this theme, I will appreciate any of the following:', 'colorsnap');?></p>
				<p>
				<a target="_blank" class="button-primary" href="https://wordpress.org/support/view/theme-reviews/colorsnap?filter=5"><?php _e('Rate this theme', 'colorsnap'); ?></a>
				
			        <a target="_blank" class="button-primary" href="https://twitter.com/ThemeMags/"><?php _e('Follow on Twitter', 'colorsnap'); ?></a>
					<a target="_blank" class="button-primary" href="https://www.facebook.com/ThemeMags"><?php _e('Like on Facebook', 'colorsnap'); ?></a>
		        </p>
	        </div>
       
    </div>
<?php } 