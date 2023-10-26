<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package talents
 */

get_header(); ?>
	<div class="three_fourth mid-content"> <!-- Middle content align -->
		<?php woocommerce_content(); ?>
	</div> <!-- End -->
	<div class="one_fourth_last">
		<?php get_sidebar(); ?>
	</div>
<?php get_footer(); ?>