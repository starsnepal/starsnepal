<?php 
if( isset($_REQUEST['type'])&&( $_REQUEST['type'] == 'talents' ) ){
get_header(); ?>
<div class="two_third mid-content"> 
<?php
comment_form();
?>
</div>
<div id="sidebar" class="one_third_last">
		<?php  ?>
	</div>
<?php get_footer();
 }else{
	get_template_part('archive');
} ?>

