<?php 

// Content Section
    $wp_customize->add_section('wpmt_content_typography', array(
        'title'    => __('Content Typography Setting', 'wp-minimal-typography'),
        'description' => '',
        'priority' => 10,
        'panel'  => 'wpmt_section_panel'
    ));
 	// Content Typography Enabled Checkbox
	$wp_customize->add_setting('wpmt_content_checkbox', array(
	    'default'    => ''
	));

	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'wpmt_content_checkbox',
	        array(
	            'label'     => __('Enable Content Typography Setting', 'wp-minimal-typography'),
	            'section'   => 'wpmt_content_typography',
	            'settings'  => 'wpmt_content_checkbox',
	            'type'      => 'checkbox',
	            'description' => __('Leave the field blank which you don\'t need.', 'wp-minimal-typography'),
	        )
	    )
	);
 	// Content Color
    $wp_customize->add_setting('wpmt_content_color', array(
        'default'        => ''
    ));
 
    $wp_customize->add_control(
    	new WP_Customize_Color_Control(
		    $wp_customize,
			'content_color',
	           array(
	               'label'      => __( 'Select Color for Content', 'wp-minimal-typography' ),
	               'section'    => 'wpmt_content_typography',
	               'settings'   => 'wpmt_content_color'
	           )
	       )
		);

    // Content Font Size
    $wp_customize->add_setting('wpmt_content_font_size', array(
	    'default'        => '16',
    ));
 
    $wp_customize->add_control('wpmt_content_font_size_control', array(
        'label'      => __('Content Font Size in Pixel', 'wp-minimal-typography'),
        'section'    => 'wpmt_content_typography',
        'settings'   => 'wpmt_content_font_size',
        'type' 		 => 'text',
        'description' => __( 'Write only numbers Like " 16 "', 'wp-minimal-typography' )
    )); 
    // Content Font Style
    $wp_customize->add_setting('wpmt_content_font_style', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_content_font_style_control', array(
        'label'      => __('Select Content Font Style', 'wp-minimal-typography'),
        'section'    => 'wpmt_content_typography',
        'settings'   => 'wpmt_content_font_style',
        'type' 		 => 'select',
        'choices' => array(
		    'normal' => __( 'Normal' ),
		    'italic' => __( 'Italic' ),
		    'oblique' => __( 'Oblique' ),
		    'inherit' => __( 'Inherit' ),
		    'initial' => __( 'Initial' )
		  ),
    )); 
    // Content Font Weight
    $wp_customize->add_setting('wpmt_content_font_weight', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_content_font_weight_control', array(
        'label'      => __('Set Content Font Weight', 'wp-minimal-typography'),
        'section'    => 'wpmt_content_typography',
        'settings'   => 'wpmt_content_font_weight',
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
    // Content Text Transfomr
    $wp_customize->add_setting('wpmt_content_text_transform', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_content_text_transform_control', array(
        'label'      => __('Select Content Text Transform', 'wp-minimal-typography'),
        'section'    => 'wpmt_content_typography',
        'settings'   => 'wpmt_content_text_transform',
        'type' 		 => 'select',
        'choices' => array(
		    'none' => __( 'None' ),
		    'capitalize' => __( 'Capitalize' ),
		    'uppercase' => __( 'Uppercase' ),
		    'lowercase' => __( 'Lowercase' ),
		    'inherit' => __( 'Inherit' )
		  ),
    )); 
    // Content Line Height
    $wp_customize->add_setting('wpmt_content_line_height', array(
        'default'        => '28px',
    ));
 
    $wp_customize->add_control('wpmt_content_line_height_control', array(
        'label'      => __('Set Content Line Height', 'wp-minimal-typography'),
        'section'    => 'wpmt_content_typography',
        'settings'   => 'wpmt_content_line_height',
        'type'       => 'text',
        'description' => __( 'Write in Pixel like " 28px "', 'wp-minimal-typography' )
    )); 

 // Content Text Transfomr
    $wp_customize->add_setting('wpmt_content_text_align', array(
        'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_content_text_align_control', array(
        'label'      => __('Select Content Text Text Align', 'wp-minimal-typography'),
        'section'    => 'wpmt_content_typography',
        'settings'   => 'wpmt_content_text_align',
        'type'       => 'select',
        'choices' => array(
            'none' => __( 'Align None' ),
            'left' => __( 'ALign Left' ),
            'right' => __( 'ALign Right' ),
            'center' => __( 'Align Center' ),
            'justify' => __( 'Align Justify' ),
            'inherit' => __( 'Align Inherit' )
          ),
    )); 
    // Content Letter Spacing
    $wp_customize->add_setting('wpmt_content_letter_spacing', array(
        'default'        => '1px',
    ));
 
    $wp_customize->add_control('wpmt_content_letter_spacing_control', array(
        'label'      => __('Set Content Letter Spacing', 'wp-minimal-typography'),
        'section'    => 'wpmt_content_typography',
        'settings'   => 'wpmt_content_letter_spacing',
        'type'       => 'text',
        'description' => __( 'Write in Pixel like " 1px "', 'wp-minimal-typography' )
    )); 
	// Content End



 ?>