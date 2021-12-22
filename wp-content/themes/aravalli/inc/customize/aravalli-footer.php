<?php
function aravalli_footer( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	// Footer Panel // 
	$wp_customize->add_panel( 
		'footer_section', 
		array(
			'priority'      => 34,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Footer', 'aravalli'),
		) 
	);
	// Footer Setting Section // 
	$wp_customize->add_section(
        'footer_copy_Section',
        array(
            'title' 		=> __('Copyright Content','aravalli'),
			'panel'  		=> 'footer_section',
			'priority'      => 4,
		)
    );
	
	
	// footer first text // 
	$aravalli_footer_copyright = esc_html__('Copyright &copy; [current_year] [site_title] | Powered by [theme_author]', 'aravalli' );
	$wp_customize->add_setting(
    	'footer_first_custom',
    	array(
			'default' => $aravalli_footer_copyright,
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'wp_kses_post',
		)
	);	

	$wp_customize->add_control( 
		'footer_first_custom',
		array(
		    'label'   		=> __('Copyright','aravalli'),
		    'section'		=> 'footer_copy_Section',
			'type' 			=> 'textarea',
			'priority'      => 4,
			'transport'         => $selective_refresh,
		)  
	);	
	
	// Footer BG // 
	$wp_customize->add_section(
        'footer_background',
        array(
            'title' 		=> __('Background','aravalli'),
			'panel'  		=> 'footer_section',
			'priority'      => 5,
		)
    );
	
	// Background Image // 
    $wp_customize->add_setting( 
    	'footer_bg_img' , 
    	array(
			'default' 			=> esc_url(get_template_directory_uri() .'/assets/images/rooms-bg.jpg'),
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_url',	
			'priority' => 10,
		) 
	);
	
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize , 'footer_bg_img' ,
		array(
			'label'          => esc_html__( 'Background Image', 'aravalli'),
			'section'        => 'footer_background',
		) 
	));
}
add_action( 'customize_register', 'aravalli_footer' );
// Footer selective refresh
function aravalli_footer_partials( $wp_customize ){
	
	// footer_first_custom
	$wp_customize->selective_refresh->add_partial( 'footer_first_custom', array(
		'selector'            => '.footer-copyright .copyright-text',
		'settings'            => 'footer_first_custom',
		'render_callback'  => 'aravalli_footer_first_custom_render_callback',
	) );
	}

add_action( 'customize_register', 'aravalli_footer_partials' );

// footer_first_custom
function aravalli_footer_first_custom_render_callback() {
	return get_theme_mod( 'footer_first_custom' );
}