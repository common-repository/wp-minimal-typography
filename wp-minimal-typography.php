<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit();
}
/**
 * Plugin Name:       Wp Minimal Typography
 * Description:       WP Total Typography is most important for WordPress website. You can set your all typography like H1, H2, H3, H4, H5, H6, Paragraph and all body fonts size, color, font-family and google fonts.
 * Version:           1.0
 * Author:            Md Mahmudul Hasan
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-minimal-typography
 * Domain Path:       /languages
 */

function wpmt_customizer_register($wp_customize){
	$wp_customize->add_panel( 'wpmt_section_panel', array(
		'priority' => 30,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Wp Minimal Typography', 'wp-minimal-typography' ),
		'description' => ''
		) );

include_once( plugin_dir_path( __FILE__ ) . 'inc/content-typography.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/customizer-section-h1.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/customizer-section-h2.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/customizer-section-h3.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/customizer-section-h4.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/customizer-section-h5.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/customizer-section-h6.php' );
include_once( plugin_dir_path( __FILE__ ) . 'inc/widgets-heading.php' );

}
add_action('customize_register', 'wpmt_customizer_register');


include_once( plugin_dir_path( __FILE__ ) . 'inc/customizer-output-style.php' );


