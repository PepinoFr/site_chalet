<?php
function aravalli_blog_setting( $wp_customize ) {
$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';
	$wp_customize->add_panel(
		'aravalli_frontpage_sections', array(
			'priority' => 32,
			'title' => esc_html__( 'Homepage Sections', 'aravalli' ),
		)
	);
	
	/*=========================================
	Blog Section
	=========================================*/
	$wp_customize->add_section(
		'blog_setting', array(
			'title' => esc_html__( 'Blog Section', 'aravalli' ),
			'priority' => 11,
			'panel' => 'aravalli_frontpage_sections',
		)
	);
	
	// Setting Head // 
	$wp_customize->add_setting(
		'blog_setting_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'blog_setting_head',
		array(
			'type' => 'hidden',
			'label' => __('Setting','aravalli'),
			'section' => 'blog_setting',
		)
	);
	
	// Hide Show // 
	$wp_customize->add_setting(
		'blog_hs'
			,array(
			'default'     	=> '1',
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_checkbox',
			'priority' => 1,
		)
	);

	$wp_customize->add_control(
	'blog_hs',
		array(
			'type' => 'checkbox',
			'label' => __('Hide / Show','aravalli'),
			'section' => 'blog_setting',
		)
	);
	
	// Blog Header Section // 
	$wp_customize->add_setting(
		'blog_headings'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 3,
		)
	);

	$wp_customize->add_control(
	'blog_headings',
		array(
			'type' => 'hidden',
			'label' => __('Header','aravalli'),
			'section' => 'blog_setting',
		)
	);
	
	// Blog Title // 
	$wp_customize->add_setting(
    	'blog_title',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_title',
		array(
		    'label'   => __('Title','aravalli'),
		    'section' => 'blog_setting',
			'type'           => 'text',
		)  
	);
	
	
	
	// Blog Subtitle // 
	$wp_customize->add_setting(
    	'blog_subtitle',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 4,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_subtitle',
		array(
		    'label'   => __('Subtitle','aravalli'),
		    'section' => 'blog_setting',
			'type'           => 'text',
		)  
	);
	
	// Blog Description // 
	$wp_customize->add_setting(
    	'blog_description',
    	array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_html',
			'transport'         => $selective_refresh,
			'priority' => 6,
		)
	);	
	
	$wp_customize->add_control( 
		'blog_description',
		array(
		    'label'   => __('Description','aravalli'),
		    'section' => 'blog_setting',
			'type'           => 'textarea',
		)  
	);

	// Blog content Section // 
	if ( class_exists( 'Cleverfox_Customizer_Range_Slider_Control' ) ) {
	$wp_customize->add_setting(
		'blog_content_head'
			,array(
			'capability'     	=> 'edit_theme_options',
			'sanitize_callback' => 'aravalli_sanitize_text',
			'priority' => 7,
		)
	);

	$wp_customize->add_control(
	'blog_content_head',
		array(
			'type' => 'hidden',
			'label' => __('Content','aravalli'),
			'section' => 'blog_setting',
		)
	);
	
	// blog_display_num
		$wp_customize->add_setting(
			'blog_display_num',
			array(
				'default' => '3',
				'capability'     	=> 'edit_theme_options',
				'sanitize_callback' => 'aravalli_sanitize_range_value',
				'priority' => 8,
			)
		);
		$wp_customize->add_control( 
		new Cleverfox_Customizer_Range_Slider_Control( $wp_customize, 'blog_display_num', 
			array(
				'label'      => __( 'No of Posts Display', 'aravalli' ),
				'section'  => 'blog_setting',
				'input_attrs' => array(
					'min'    => 1,
					'max'    => 500,
					'step'   => 1,
					//'suffix' => 'px', //optional suffix
				),
			) ) 
		);
	}
}

add_action( 'customize_register', 'aravalli_blog_setting' );

// service selective refresh
function aravalli_blog_section_partials( $wp_customize ){	
	// blog_title
	$wp_customize->selective_refresh->add_partial( 'blog_title', array(
		'selector'            => '.home-blog .heading-default h6',
		'settings'            => 'blog_title',
		'render_callback'  => 'aravalli_blog_title_render_callback',
	) );
	
	// blog_subtitle
	$wp_customize->selective_refresh->add_partial( 'blog_subtitle', array(
		'selector'            => '.home-blog .heading-default h3',
		'settings'            => 'blog_subtitle',
		'render_callback'  => 'aravalli_blog_subtitle_render_callback',
	) );
	
	// blog_description
	$wp_customize->selective_refresh->add_partial( 'blog_description', array(
		'selector'            => '.home-blog .heading-default p',
		'settings'            => 'blog_description',
		'render_callback'  => 'aravalli_blog_description_render_callback',
	) );	
	}

add_action( 'customize_register', 'aravalli_blog_section_partials' );

// blog_title
function aravalli_blog_title_render_callback() {
	return get_theme_mod( 'blog_title' );
}

// blog_subtitle
function aravalli_blog_subtitle_render_callback() {
	return get_theme_mod( 'blog_subtitle' );
}

// blog_description
function aravalli_blog_description_render_callback() {
	return get_theme_mod( 'blog_description' );
}