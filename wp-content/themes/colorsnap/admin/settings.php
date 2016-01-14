<?php /* Theme Customizer For colorsnap Theme */
   
 	function colorsnap_customize_register($wp_customize){
    
	// Theme Colors
 
	$colors = array();
    $colors[] = array( 'slug'=>'bg_color', 'default' => '#eee',
    'label' => __( 'Background Color', 'colorsnap' ) );
	
    $colors[] = array( 'slug'=>'primary_color', 'default' => '#F9A646',
    'label' => __( 'Primary Color ', 'colorsnap' ) );
     
	
	foreach($colors as $color)
  {	
    $wp_customize->add_setting( $color['slug'], array( 'default' => $color['default'],
    'type' => 'theme_mod', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_hex_color', ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize,
     $color['slug'], array( 'label' => $color['label'], 'section' => 'colors',
     'settings' => $color['slug'] )));
  }
	// Theme Colors Ends
	// Logo Uploader
	
	$wp_customize->add_section( 'colorsnap_logo_fav_section' , array(
    'title'       => __( 'Site Logo', 'colorsnap' ),
    'priority'    => 30,
    'description' => __('Upload a logo to replace the default site name and description in the header','colorsnap'),) );

    $wp_customize->add_setting( 'colorsnap_logo', array(
		'sanitize_callback' => 'esc_url_raw') );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'colorsnap_logo', array(
    'label'    => __( 'Site Logo ( Recommended height - 60px)', 'colorsnap' ),
    'section'  => 'colorsnap_logo_fav_section',
    'settings' => 'colorsnap_logo',
    ) ) );
	
	function colorsnap_check_header_video($file){
  return validate_file($file, array('', 'mp4'));
}

	// Sidebar Position
	
		$wp_customize->add_section( 'sidebar_position', array(
        'title' => __('Sidebbar Position','colorsnap'), // The title of section
        'description' => __('Select Sidebar Position.','colorsnap'), // The description of section
        'priority' => '900',
	) );
	
$wp_customize->add_setting( 'sidebar_position_option', array(
    'default' => 'sidebar_display_right',
    'type' => 'theme_mod',
	'sanitize_callback' => 'colorsnap_sanitize_sidebar_placement',
) );

	$wp_customize->add_control( 'sidebar_position_option', array(
    'label' => __('Display Sidebar on Left or Right','colorsnap'),
    'section' => 'sidebar_position',
    'type' => 'radio',
    'choices' => array(
        'sidebar_display_right' => __('Right (Default)', 'colorsnap'),
    	'sidebar_display_left' => __('Left', 'colorsnap'),
        ),
) );

function colorsnap_sanitize_sidebar_placement( $input ) {
    $valid = array(
       'sidebar_display_right' => __('Right (Default)','colorsnap'),
    	'sidebar_display_left' => __('Left','colorsnap'),
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
	  
	// Sidebar Position Ends
	
	
 	// Footer Copyright Section
	
	$wp_customize->add_section( 'fcopyright', array(
        'title' => __('Footer Copyright','colorsnap'), // The title of section
        'description' => __('Add Your Copyright Notes Here.','colorsnap'), // The description of section
        'priority' => '900',
	) );
 
	$wp_customize->add_setting( 'colorsnap_footer_top', array('default' => '','sanitize_callback' => 'sanitize_footer_text',) );
    $wp_customize->add_control( 'colorsnap_footer_top', array('label' => 'Footer Text','section' => 'fcopyright',) );
	
    	
	function sanitize_footer_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
	
	
	  } // function ends here

	   // This will output the custom WordPress settings to the live theme's WP head. */
   
   function colorsnap_header_output() {
     $sidebar_pos = get_theme_mod('sidebar_position_option');
     $bgcolor = get_theme_mod('bg_color');
	
	 $primarycolor = get_theme_mod('primary_color');
	 
	 ?><?php echo get_theme_mod('textarea_setting'); 
      if ( ($sidebar_pos == 'sidebar_display_left') || ( ! empty( $bgcolor )) || (!empty($primarycolor))){
?>	  <!--Customizer CSS--> 
      
	  <style type="text/css">
	        <?php if ($sidebar_pos == 'sidebar_display_left') { ?>
     	    #content{float:right;}
			.post-container, .page-container, .cat-container, .home-container { margin-left: 380px; margin-right:0px;}
			 #sidebar{margin-right: -380px; margin-left:0px; float: left;}
			 @media only screen and (max-width: 479px){ 
			 .post-container, .page-container, .cat-container, .home-container { margin-left: 0px;} #sidebar{margin-right:0px; }}
			 @media only screen and (max-width: 767px) and (min-width: 480px){
			 .post-container, .page-container, .cat-container, .home-container { margin-left: 0px;} }
			 
			 
			
	    	<?php } ?>

		    <?php if($bgcolor) { ?>
		      body{background-color: <?php echo esc_attr($bgcolor); ?>;} 
		   	<?php } ?>
		  
            <?php if($primarycolor) { ?>

  .search-block #s, .post-meta,  #main-footer a,
			  .catbox a, .hcat a:visited, a, .cdetail h3 a:hover, .cdetail h2 a:hover,   
			  .related-article h5 a, #sidebar a:hover, .blog-title a:hover {color:<?php echo esc_attr($primarycolor); ?>;}
			  		 #main-footer {border-top: 6px solid <?php echo esc_attr($primarycolor); ?>;}  
					 .top-nav{border-top: 3px solid <?php echo esc_attr($primarycolor); ?>;}  
					 #gototop, .cat-head, .nav-toggle, .pagenavi span.current	{background-color:<?php echo esc_attr($primarycolor); ?>;}
					 .catpost {     border-bottom: 2px solid <?php echo esc_attr($primarycolor); ?>; }
		
		   	<?php } ?>

		
	  </style>
      <!--/Customizer CSS-->
	<?php } ?>
	<?php } 
	
	   function colorsnap_footer_output() {
	   ?><?php echo get_theme_mod('textarea_setting2'); 
	   }
	  
	  
add_action( 'customize_register', 'colorsnap_customize_register', 11 );
add_action( 'wp_head', 'colorsnap_header_output', 11 );
add_action( 'wp_footer', 'colorsnap_footer_output', 11 );

//add_action( 'customize_register' , array( 'colorsnap_Customize' , 'register' ) );
//add_action( 'wp_head' , array( 'colorsnap_Customize' , 'header_output' ) );