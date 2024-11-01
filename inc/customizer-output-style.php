<?php 

//output style on frontend
if( ! function_exists( 'wp_minimal_typography_output' ) ) :

	function wp_minimal_typography_output(){ ?>

		<style type="text/css">
			<?php if(get_theme_mod('wpmt_content_checkbox') == 'true') { ?>
				  body, p { 
				  	color: <?php echo get_theme_mod( 'wpmt_content_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_content_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_content_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_content_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_content_text_transform' ); ?> !important;
					line-height: <?php echo get_theme_mod( 'wpmt_content_line_height' ); ?> !important;
					text-align: <?php echo get_theme_mod( 'wpmt_content_text_align' ); ?> !important;
					letter-spacing: <?php echo get_theme_mod( 'wpmt_content_letter_spacing' ); ?> !important;
				   }
			<?php } ?>

			<?php if(get_theme_mod('wpmt_h1_checkbox') == 'true') { ?>
				  h1 { 
				  	color: <?php echo get_theme_mod( 'wpmt_h1_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_h1_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_h1_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_h1_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_h1_text_transform' ); ?> !important;
				   }
			<?php } ?>

			<?php if(get_theme_mod('wpmt_h2_checkbox') == 'true') { ?>
				  h2, h2 a { 
				  	color: <?php echo get_theme_mod( 'wpmt_h2_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_h2_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_h2_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_h2_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_h2_text_transform' ); ?> !important;
				   }
			<?php } ?>
			<?php if(get_theme_mod('wpmt_h3_checkbox') == 'true') { ?>
				  h3, h3 a { 
				  	color: <?php echo get_theme_mod( 'wpmt_h3_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_h3_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_h3_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_h3_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_h3_text_transform' ); ?> !important;
				   }
			<?php } ?>
			<?php if(get_theme_mod('wpmt_h4_checkbox') == 'true') { ?>
				  h4, h4 a { 
				  	color: <?php echo get_theme_mod( 'wpmt_h4_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_h4_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_h4_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_h4_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_h4_text_transform' ); ?> !important;
				   }
			<?php } ?>
			<?php if(get_theme_mod('wpmt_h5_checkbox') == 'true') { ?>
				  h5, h5 a { 
				  	color: <?php echo get_theme_mod( 'wpmt_h5_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_h5_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_h5_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_h5_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_h5_text_transform' ); ?> !important;
				   }
			<?php } ?>
			<?php if(get_theme_mod('wpmt_h6_checkbox') == 'true') { ?>
				  h6, h6 a { 
				  	color: <?php echo get_theme_mod( 'wpmt_h6_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_h6_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_h6_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_h6_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_h6_text_transform' ); ?> !important;
				   }
			<?php } ?>
			<?php if(get_theme_mod('wpmt_wid_head_checkbox') == 'true') { ?>
				  .widget h2 { 
				  	color: <?php echo get_theme_mod( 'wpmt_wid_head_color' ); ?> !important;
					font-size: <?php echo get_theme_mod( 'wpmt_wid_head_font_size' ); ?>px !important;
					font-style: <?php echo get_theme_mod( 'wpmt_wid_head_font_style' ); ?> !important;
					font-weight: <?php echo get_theme_mod( 'wpmt_wid_head_font_weight' ); ?> !important;
					text-transform: <?php echo get_theme_mod( 'wpmt_wid_head_text_transform' ); ?> !important;
					background: <?php echo get_theme_mod( 'wpmt_wid_head_background' ); ?> !important;
					padding: <?php echo get_theme_mod( 'wpmt_wid_head_padding' ); ?> !important;
				   }
			<?php } ?>
			
    	</style>

<?php }		
	endif;
	add_action( 'wp_head', 'wp_minimal_typography_output', 1000 );


 ?>