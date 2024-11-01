<?php 

// Widgets Heading Section
    $wp_customize->add_section('wpmt_section_wid_head', array(
        'title'    => __('Widgets Heading Typography', 'wp-minimal-typography'),
        'description' => '',
        'priority' => 10,
        'panel'  => 'wpmt_section_panel'
    ));
 	// Widgets Heading Typography Enabled Checkbox
	$wp_customize->add_setting('wpmt_wid_head_checkbox', array(
	    'default'    => ''
	));

	$wp_customize->add_control(
	    new WP_Customize_Control(
	        $wp_customize,
	        'wpmt_wid_head_checkbox',
	        array(
	            'label'     => __('Enable Widgets Heading Typography Setting', 'wp-minimal-typography'),
	            'section'   => 'wpmt_section_wid_head',
	            'settings'  => 'wpmt_wid_head_checkbox',
	            'type'      => 'checkbox',
	            'description' => __('Leave the field blank which you don\'t need.', 'wp-minimal-typography'),
	        )
	    )
	);
 	// Widgets Heading Color
    $wp_customize->add_setting('wpmt_wid_head_color', array(
        'default'        => ''
    ));
 
    $wp_customize->add_control(
    	new WP_Customize_Color_Control(
		    $wp_customize,
			'wid_head_color',
	           array(
	               'label'      => __( 'Select Color for Widgets Heading', 'wp-minimal-typography' ),
	               'section'    => 'wpmt_section_wid_head',
	               'settings'   => 'wpmt_wid_head_color'
	           )
	       )
		);

    // Widgets Heading Font Size
    $wp_customize->add_setting('wpmt_wid_head_font_size', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_wid_head_font_size_control', array(
        'label'      => __('Widgets Heading Font Size in Pixel', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_wid_head',
        'settings'   => 'wpmt_wid_head_font_size',
        'type' 		 => 'text',
        'description' => __( 'Write only numbers like " 16 " ', 'wp-minimal-typography' )
    )); 
    // Widgets Heading Font Style
    $wp_customize->add_setting('wpmt_wid_head_font_style', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_wid_head_font_style_control', array(
        'label'      => __('Select Widgets Heading Font Style', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_wid_head',
        'settings'   => 'wpmt_wid_head_font_style',
        'type' 		 => 'select',
        'choices' => array(
		    'normal' => __( 'Normal' ),
		    'italic' => __( 'Italic' ),
		    'oblique' => __( 'Oblique' ),
		    'inherit' => __( 'Inherit' ),
		    'initial' => __( 'Initial' )
		  ),
    )); 
    // Widgets Heading Font Weight
    $wp_customize->add_setting('wpmt_wid_head_font_weight', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_wid_head_font_weight_control', array(
        'label'      => __('Set Widgets Heading Font Weight', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_wid_head',
        'settings'   => 'wpmt_wid_head_font_weight',
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
    // Widgets Heading Text Transfomr
    $wp_customize->add_setting('wpmt_wid_head_text_transform', array(
	    'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_wid_head_text_transform_control', array(
        'label'      => __('Set Widgets Heading Text Transform', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_wid_head',
        'settings'   => 'wpmt_wid_head_text_transform',
        'type' 		 => 'select',
        'choices' => array(
		    'none' => __( 'None' ),
		    'capitalize' => __( 'Capitalize' ),
		    'uppercase' => __( 'Uppercase' ),
		    'lowercase' => __( 'Lowercase' ),
		    'inherit' => __( 'Inherit' )
		  ),
    )); 

    // Widgets Heading Background Color
    $wp_customize->add_setting('wpmt_wid_head_background', array(
        'default'        => ''
    ));
 
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'wid_head_bacground',
               array(
                   'label'      => __( 'Select Color for Widgets Heading Background', 'wp-minimal-typography' ),
                   'section'    => 'wpmt_section_wid_head',
                   'settings'   => 'wpmt_wid_head_background'
               )
           )
        );

    // Widgets Heading Font Size
    $wp_customize->add_setting('wpmt_wid_head_padding', array(
        'default'        => '',
    ));
 
    $wp_customize->add_control('wpmt_wid_head_padding_control', array(
        'label'      => __('Widgets Heading Padding in Pixel', 'wp-minimal-typography'),
        'section'    => 'wpmt_section_wid_head',
        'settings'   => 'wpmt_wid_head_padding',
        'type'       => 'text',
        'description' => __( 'Write in Pixel like " 5px 10px 15px 20px "', 'wp-minimal-typography' )
    )); 

	// Widgets Heading End



 ?>