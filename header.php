<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talents
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11"> 

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php
	 ?>
	<div id="kaya-page-content-wrapper" class="">

		<?php 
		// Header Section
		if( !function_exists('hfe_render_header') ){
			talents_kaya_header(); // WPCS: xss ok.
		}else{
			$header_data = get_hfe_header_id();
			if( !empty($header_data) ){
				hfe_render_header(); // Header & Footer Plugin data
			}else{
				echo talents_kaya_header(); // WPCS: xss ok.
			}
		}
		talents_kaya_page_title(); ?>

			 <?php
			    if ( is_active_sidebar( 'search_filter' ) ){
			        echo '<div class="toggle_search_icon">';
			            echo '<i class="fa fa-search"></i>';
			        echo '</div>';
			                echo '<div class="toggle_search_wrapper">';
			                    echo '<div class="toggle_search_field">';
			                        echo '<span class="search_close">';
			                            echo '<i class="fa fa-times">';
			                            echo '</i>';
			                        echo '</span>';
			                            dynamic_sidebar( 'search_filter' );
			                    echo '</div>';
			                echo '</div>';
			    }
			    ?>
			    
		<div class="main-wrapper ajax-search-results">
		<?php	
		// Slider Functionality
		talents_kaya_slider_shortcode(); ?>		<!-- Page title section -->
		
		<!-- Middle content alignment start here -->
		<div id="kaya-mid-content-wrapper">
			<div id="mid-content" class="site-content container">