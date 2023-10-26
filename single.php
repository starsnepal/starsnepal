<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 */
get_header(); ?>
	<div class="fullwidth mid-content"> <!-- Middle content align -->
		<?php
		while ( have_posts() ) : the_post();
			$selected = '';
			if(isset($_SESSION['shortlist'])) {
				if ( in_array(get_the_ID(), $_SESSION['shortlist']) ) {
					$selected = 'item_selected';
				}
			}
			//Tabs Sections Enabling/Disabling
			if (function_exists('talents_single_page_tabs_section_enable')) {
				if ($kaya_options->talents_single_page_option) {
					echo talents_single_page_tabs_section_enable();
				}
				else{
					echo talents_single_page_tabs_section_disable();
				}
			}
			// Post Data content wrapper note:don't delete this ID and class
			echo '<div class="post_single_page_content_wrapper item '.esc_attr($selected).'" id="'.get_the_ID().'">'; // Post Data content wrapper note:don't delete this ID and class
				$img_url = wp_get_attachment_url(get_post_thumbnail_id());
				
				echo '<div class="post_single_page_img_details">'; // Post image & Details Wrapper
					echo '<div class="one_fifth">'; // Image displayed one half 
						if( !empty($img_url) ){
							echo '<img src="'.talents_kaya_image_sizes($img_url, '400', '500').'" alt="img" class="" />'; // WPCS: XSS OK
						}else{
							echo '<img src="'.get_parent_theme_file_uri( '/images/default_image.jpg').'" alt="img" class="" />';// WPCS: XSS OK
						}
						echo '<h2>';
						the_title();
						echo '</h2>';
						echo '<div class="category_name"><h4>';
							echo get_the_term_list(get_the_ID(), 'talent_category', '', ', ', '');
						echo '<h4></div>';											
						if( function_exists('kaya_media_section') ){
							echo '<div class="single_tabs_content_wrapper">';
								kaya_tab_section($cpt_slug_name);
								echo '</div>';
						}
						if (function_exists('kaya_pods_cpt_shortlist_text_buttons'))
						{
						echo kaya_pods_cpt_shortlist_text_buttons();
						}
						if (function_exists('kaya_pods_cpt_compcard_images'))
						{
							echo kaya_pods_cpt_compcard_images(get_query_var( 'post_type' ));
						}	
					echo '</div>';	

					echo '<div class="post_single_page_details four_fifth_last">'; // Single Page Details Wrapper
						if( function_exists('kaya_media_section') ){
							echo '<div class="single_tabs_content_wrapper">';
								kaya_profile_tab_section();
								kaya_media_section($cpt_slug_name);
								kaya_custom_tabs_data();
							echo '</div>';
						}
						if ( is_active_sidebar( 'tag_cloud_widget_area' ) ){
			 				dynamic_sidebar( 'tag_cloud_widget_area' );
					    }
					echo '</div>'; // End Single Page Details Wrapper

				echo '</div>'; // End Post image & Details Wrapper
			echo '</div>'; // End post Single content Wrapper
		endwhile; // End of the loop.
		?>
	</div> <!-- End Middle content align -->
<?php get_footer(); ?>