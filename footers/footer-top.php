<?php
if ( function_exists('fw_get_db_settings_option') ) {

	$footer_column = fw_get_db_settings_option('footer_column');
	$display_footer_top = fw_get_db_settings_option('footer_show');

	if($display_footer_top == "yes"){
	$col_footer = 12 / $footer_column;
?>

<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="footer-top-first">
				<div class="col-sm-<?php echo $col_footer; ?>">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-3') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
			<div class="footer-top-two">
				<div class="col-sm-<?php echo $col_footer; ?>">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-4') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
			<div class="footer-top-three">
				<div class="col-sm-<?php echo $col_footer; ?>">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-5') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
			<div class="footer-top-four">
				<div class="col-sm-<?php echo $col_footer; ?>">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-6') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php 
}

}else{
?> 
<div class="footer-top">
	<div class="container">
		<div class="row">
			<div class="footer-top-first">
				<div class="col-sm-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-3') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
			<div class="footer-top-two">
				<div class="col-sm-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-4') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
			<div class="footer-top-three">
				<div class="col-sm-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-5') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
			<div class="footer-top-four">
				<div class="col-sm-3">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-6') ) : ?>

				   <h2>Articles by month</h2>
				   <ul>
				      <?php wp_get_archives('title_li=&type=monthly'); ?>
				   </ul>
				   <h2>Categories</h2>
				   <ul>
				      <?php wp_list_categories('show_count=0&title_li='); ?>
				   </ul>

				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>