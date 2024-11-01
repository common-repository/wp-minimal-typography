<?php 

// H5 Section
    $wp_customize->add_section('wpmt_section_h5', array(
        'title'    => __('H5 Typography Setting', 'wp-minimal-typography'),
        'description' => '',
        'priority' => 10,
        'panel'  => 'wpmt_section_panel'
    ));
 	// H5 Typography Enabled Checkbox
	$wp_customize->add_setting('wpmt_h5_checkbox', array(
	    'default'    => ''
	));

	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'wpmt_h5_checkbox',
	        array(
	            'label'     => __('Enable H5 Typography Setting', 'wp-minimal-typography'),
	            'section'   => 'wpmt_section_h5',
	            'settings'  => 'wpmt_h5_checkbox',
	            'type'      => 'checkbox',
	            'description' => __('Leave the field blank which you don\'t need.', 'wp-minimal-typography'),
	        )
	    )
	);
 	// H5 Color
    $wp_customize->add_setting('wpmt_h5_color', array(
        'default'        => ''
    ));
 
    $wp_customize->add_control(
    	new WP_Customize_Color_Control(
		    $wp_customize,
			'h5_color',
	           array(
	               'label'      => __( 'Select Color for H5', 'wp-minimal-typography' ),
	               'section'    => 'wpmt_section_h5',
	               'settings'   => 'wpmt_h5_color'
	           )
	       )
		);

    // H5 Font Size
    $wp_customize->add_setting('wpmt_h5_font_size', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h5_font_size_control', array(
        'label'      => __('H5 Font Size in Pixel', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h5',
        'settings'   => 'wpmt_h5_font_size',
        'type' 		 => 'text',
        'description' => __( 'Write only numbers like " 16 " ', 'wp-minimal-typography' )
    )); 
    // H5 Font Style
    $wp_customize->add_setting('wpmt_h5_font_style', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h5_font_style_control', array(
        'label'      => __('Select H5 Font Style', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h5',
        'settings'   => 'wpmt_h5_font_style',
        'type' 		 => 'select',
        'choices' => array(
		    'normal' => __( 'Normal' ),
		    'italic' => __( 'Italic' ),
		    'oblique' => __( 'Oblique' ),
		    'inherit' => __( 'Inherit' ),
		    'initial' => __( 'Initial' )
		  ),
    )); 
    // H5 Font Weight
    $wp_customize->add_setting('wpmt_h5_font_weight', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h5_font_weight_control', array(
        'label'      => __('Set H5 Font Weight', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h5',
        'settings'   => 'wpmt_h5_font_weight',
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
    // H5 Text Transfomr
    $wp_customize->add_setting('wpmt_h5_text_transform', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_h5_text_transform_control', array(
        'label'      => __('Set H5 Text Transform', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_h5',
        'settings'   => 'wpmt_h5_text_transform',
        'type' 		 => 'select',
        'choices' => array(
		    'none' => __( 'None' ),
		    'capitalize' => __( 'Capitalize' ),
		    'uppercase' => __( 'Uppercase' ),
		    'lowercase' => __( 'Lowercase' ),
		    'inherit' => __( 'Inherit' )
		  ),
    )); 

	// H5 End



 ?>