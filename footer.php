<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talents
 */

?>

	</div><!-- #content -->
	</div>
	</div>
	<?php // Footer Section
	if( !function_exists('hfe_render_footer') ){
			talents_kaya_footer(); // Theme Default Header 
	}else{
		$footer_data = get_hfe_footer_id();
		if( !empty($footer_data) ){
			hfe_render_footer(); // Header & Footer Plugin data
		}else{
			talents_kaya_footer();
		}
	} 
?>
</div><!-- #page -->
<a href="#" class="scrolltop"><i class="fa fa-long-arrow-up"></i></a>
<?php wp_footer(); ?>
</body>
</html>
