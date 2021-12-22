<?php
function aravalli_header_settings( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	/*=========================================
	Header Settings Panel
	=========================================*/
	$wp_customize->add_panel( 
		'header_section', 
		array(
			'priority'      => 2,
			'capability'    => 'edit_theme_options',
			'title'			=> __('Header', 'aravalli'),
		) 
	);
	
	/*=========================================
	Aravalli Site Identity
	=========================================*/
	$wp_customize->add_section(
        'title_tagline',
        array(
        	'priority'      => 1,
            'title' 		=> __('Site Identity','aravalli'),
			'panel'  		=> 'header_section',
		)
    );
	
	/*=========================================
	Header Navigation
	=========================================*/	
	$wp_customize->add_section(
        'header_navigation',
        array(
        	'priority'      => 4,
            'title' 		=> __('Header Navigation','aravalli'),
			'panel'  		=> 'header_section',
		)
    );
	
	
	// Info Left
	$wp_customize->add_setting(
		'hdr_nav_info_left'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_info_left',
		array(
			'type' => 'hidden',
			'label' => __('Info Left','aravalli'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hs_nav_info_left' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hs_nav_info_left', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'aravalli' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	// icon // 
	$wp_customize->add_setting(
    	'nav_info_left_icon',
    	array(
	        'default' => 'fa-clock-o',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority' => 3,
		)
	);	

	$wp_customize->add_control(new Aravalli_Icon_Picker_Control($wp_customize, 
		'nav_info_left_icon',
		array(
		    'label'   		=> __('Icon','aravalli'),
		    'section' 		=> 'header_navigation',
			'iconset' => 'fa',
			
		))  
	);	
	// title // 
	$wp_customize->add_setting(
    	'nav_info_left_ttl',
    	array(
			'sanitize_callback' => 'aravalli_sanitize_text',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	

	$wp_customize->add_control( 
		'nav_info_left_ttl',
		array(
		    'label'   		=> __('Title','aravalli'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	
	// subtitle // 
	$wp_customize->add_setting(
    	'nav_info_left_subttl',
    	array(
			'sanitize_callback' => 'aravalli_sanitize_text',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority' => 5,
		)
	);	

	$wp_customize->add_control( 
		'nav_info_left_subttl',
		array(
		    'label'   		=> __('Subtitle','aravalli'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	
	
	
	// Info Right
	$wp_customize->add_setting(
		'hdr_nav_info_right'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 6,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_info_right',
		array(
			'type' => 'hidden',
			'label' => __('Info Right','aravalli'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hs_nav_info_right' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_checkbox',
			'priority' => 7,
		) 
	);
	
	$wp_customize->add_control(
	'hs_nav_info_right', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'aravalli' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	// icon // 
	$wp_customize->add_setting(
    	'nav_info_right_icon',
    	array(
	        'default' => 'fa-clock-o',
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
			'priority' => 8,
		)
	);	

	$wp_customize->add_control(new Aravalli_Icon_Picker_Control($wp_customize, 
		'nav_info_right_icon',
		array(
		    'label'   		=> __('Icon','aravalli'),
		    'section' 		=> 'header_navigation',
			'iconset' => 'fa',
			
		))  
	);	
	// title // 
	$wp_customize->add_setting(
    	'nav_info_right_ttl',
    	array(
			'sanitize_callback' => 'aravalli_sanitize_text',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority' => 9,
		)
	);	

	$wp_customize->add_control( 
		'nav_info_right_ttl',
		array(
		    'label'   		=> __('Title','aravalli'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	
	// subtitle // 
	$wp_customize->add_setting(
    	'nav_info_right_subttl',
    	array(
			'sanitize_callback' => 'aravalli_sanitize_text',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority' => 10,
		)
	);	

	$wp_customize->add_control( 
		'nav_info_right_subttl',
		array(
		    'label'   		=> __('Subtitle','aravalli'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	// Search
	$wp_customize->add_setting(
		'hdr_nav_search'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 11,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_search',
		array(
			'type' => 'hidden',
			'label' => __('Search','aravalli'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_search' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_checkbox',
			'priority' => 12,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_search', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'aravalli' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	// Button
	$wp_customize->add_setting(
		'hdr_nav_btn'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 15,
		)
	);

	$wp_customize->add_control(
	'hdr_nav_btn',
		array(
			'type' => 'hidden',
			'label' => __('Button','aravalli'),
			'section' => 'header_navigation',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_nav_btn' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_checkbox',
			'transport'         => $selective_refresh,
			'priority' => 16,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_nav_btn', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'aravalli' ),
			'section'     => 'header_navigation',
			'type'        => 'checkbox'
		) 
	);	
	
	// Button Label // 
	$wp_customize->add_setting(
    	'nav_btn_lbl',
    	array(
			'sanitize_callback' => 'aravalli_sanitize_text',
			'capability' => 'edit_theme_options',
			'transport'         => $selective_refresh,
			'priority' => 17,
		)
	);	

	$wp_customize->add_control( 
		'nav_btn_lbl',
		array(
		    'label'   		=> __('Button Label','aravalli'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	// Button Link // 
	$wp_customize->add_setting(
    	'nav_btn_link',
    	array(
			'sanitize_callback' => 'aravalli_sanitize_url',
			'capability' => 'edit_theme_options',
			'priority' => 18,
		)
	);	

	$wp_customize->add_control( 
		'nav_btn_link',
		array(
		    'label'   		=> __('Button Link','aravalli'),
		    'section' 		=> 'header_navigation',
			'type'		 =>	'text'
		)  
	);
	
	/*=========================================
	Sticky Header
	=========================================*/	
	$wp_customize->add_section(
        'sticky_header_set',
        array(
        	'priority'      => 4,
            'title' 		=> __('Sticky Header','aravalli'),
			'panel'  		=> 'header_section',
		)
    );
	
	// Heading
	$wp_customize->add_setting(
		'sticky_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'sticky_head',
		array(
			'type' => 'hidden',
			'label' => __('Sticky Header','aravalli'),
			'section' => 'sticky_header_set',
		)
	);
	$wp_customize->add_setting( 
		'hide_show_sticky' , 
			array(
			'default' => '1',
			'capability'     => 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_checkbox',
			'priority' => 2,
		) 
	);
	
	$wp_customize->add_control(
	'hide_show_sticky', 
		array(
			'label'	      => esc_html__( 'Hide/Show', 'aravalli' ),
			'section'     => 'sticky_header_set',
			'type'        => 'checkbox'
		) 
	);	
}
add_action( 'customize_register', 'aravalli_header_settings' );

// Header selective refresh
function aravalli_header_partials( $wp_customize ){
	// hide_show_nav_btn
	$wp_customize->selective_refresh->add_partial(
		'hide_show_nav_btn', array(
			'selector' => '.navbar-area li.header-btn',
			'container_inclusive' => true,
			'render_callback' => 'header_navigation',
			'fallback_refresh' => true,
		)
	);	
	
	// nav_info_left_ttl
	$wp_customize->selective_refresh->add_partial( 'nav_info_left_ttl', array(
		'selector'            => '.header-widget-info .header-info.left h6',
		'settings'            => 'nav_info_left_ttl',
		'render_callback'  => 'aravalli_nav_info_left_ttl_render_callback',
	) );
	
	// nav_info_left_subttl
	$wp_customize->selective_refresh->add_partial( 'nav_info_left_subttl', array(
		'selector'            => '.header-widget-info .header-info.left .info-sub-title',
		'settings'            => 'nav_info_left_subttl',
		'render_callback'  => 'aravalli_nav_info_left_subttl_render_callback',
	) );
	
	
	// nav_info_right_ttl
	$wp_customize->selective_refresh->add_partial( 'nav_info_right_ttl', array(
		'selector'            => '.header-widget-info .header-info.right h6',
		'settings'            => 'nav_info_right_ttl',
		'render_callback'  => 'aravalli_nav_info_right_ttl_render_callback',
	) );
	
	// nav_info_right_subttl
	$wp_customize->selective_refresh->add_partial( 'nav_info_right_subttl', array(
		'selector'            => '.header-widget-info .header-info.right .info-sub-title',
		'settings'            => 'nav_info_right_subttl',
		'render_callback'  => 'aravalli_nav_info_right_subttl_render_callback',
	) );
	
	// nav_btn_lbl
	$wp_customize->selective_refresh->add_partial( 'nav_btn_lbl', array(
		'selector'            => '.menu-item .bt-primary',
		'settings'            => 'nav_btn_lbl',
		'render_callback'  => 'aravalli_nav_btn_lbl_render_callback',
	) );
	
	}

add_action( 'customize_register', 'aravalli_header_partials' );

// nav_info_left_ttl
function aravalli_nav_info_left_ttl_render_callback() {
	return get_theme_mod( 'nav_info_left_ttl' );
}

// nav_info_left_subttl
function aravalli_nav_info_left_subttl_render_callback() {
	return get_theme_mod( 'nav_info_left_subttl' );
}


// nav_info_right_ttl
function aravalli_nav_info_right_ttl_render_callback() {
	return get_theme_mod( 'nav_info_right_ttl' );
}

// nav_info_right_subttl
function aravalli_nav_info_right_subttl_render_callback() {
	return get_theme_mod( 'nav_info_right_subttl' );
}


// nav_btn_lbl
function aravalli_nav_btn_lbl_render_callback() {
	return get_theme_mod( 'nav_btn_lbl' );
}
