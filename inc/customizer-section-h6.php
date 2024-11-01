<?php 

// H6 Section
    $wp_customize->add_section('wpmt_section_h6', array(
        'title'    => __('H6 Typography Setting', 'wp-minimal-typography'),
        'description' => '',
        'priority' => 10,
        'panel'  => 'wpmt_section_panel'
    ));
 	// H6 Typography Enabled Checkbox
	$wp_customize->add_setting('wpmt_h6_checkbox', array(
	    'default'    => ''
	));

	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'wpmt_h6_checkbox',
	        array(
	            'label'     => __('Enable H6 Typography Setting', 'wp-minimal-typography'),
	            'section'   => 'wpmt_section_h6',
	            'settings'  => 'wpmt_h6_checkbox',
	            'type'      => 'checkbox',
	            'description' => __('Leave the field blank which you don\'t need.', 'wp-minimal-typography'),
	        )
	    )
	);
 	// H6 Color
    $wp_customize->add_setting('wpmt_h6_color', array(
        'default'        => ''
    ));
 
    $wp_customize->add_control(
    	new WP_Customize_Color_Control(
		    $wp_customize,
			'h6_color',
	           array(
	               'label'      => __( 'Select Color for H6', 'wp-minimal-typography' ),
	               'section'    => 'wpmt_section_h6',
	               'settings'   => 'wpmt_h6_color'
	           )
	       )
		);

    // H6 Font Size
    $wp_customize->add_setting('wpmt_h6_font_size', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h6_font_size_control', array(
        'label'      => __('H6 Font Size in Pixel', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h6',
        'settings'   => 'wpmt_h6_font_size',
        'type' 		 => 'text',
        'description' => __( 'Write only numbers like " 16 " ', 'wp-minimal-typography' )
    )); 
    // H6 Font Style
    $wp_customize->add_setting('wpmt_h6_font_style', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h6_font_style_control', array(
        'label'      => __('Select H6 Font Style', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h6',
        'settings'   => 'wpmt_h6_font_style',
        'type' 		 => 'select',
        'choices' => array(
		    'normal' => __( 'Normal' ),
		    'italic' => __( 'Italic' ),
		    'oblique' => __( 'Oblique' ),
		    'inherit' => __( 'Inherit' ),
		    'initial' => __( 'Initial' )
		  ),
    )); 
    // H6 Font Weight
    $wp_customize->add_setting('wpmt_h6_font_weight', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h6_font_weight_control', array(
        'label'      => __('Set H6 Font Weight', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h6',
        'settings'   => 'wpmt_h6_font_weight',
        'type' 		 => 'select',
        'choices' => array(
		    '300' => __( '300' ),
		    '400' => __( '400' ),
		    '500' => __( '500' ),
		    '600' => __( '600' ),
		    '700' => __( '700' ),
		    '800' => __( '800' ),
		    '900' => __( '900' )
		  ),
    )); 
    // H6 Text Transfomr
    $wp_customize->add_setting('wpmt_h6_text_transform', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h6_text_transform_control', array(
        'label'      => __('Set H6 Text Transform', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h6',
        'settings'   => 'wpmt_h6_text_transform',
        'type' 		 => 'select',
        'choices' => array(
		    'none' => __( 'None' ),
		    'capitalize' => __( 'Capitalize' ),
		    'uppercase' => __( 'Uppercase' ),
		    'lowercase' => __( 'Lowercase' ),
		    'inherit' => __( 'Inherit' )
		  ),
    )); 

	// H6 End



 ?>