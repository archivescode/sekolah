<?php if ( ! defined( 'ABSPATH' ) ) { die( 'Direct access forbidden.' ); }
/**
 * @var string $before_widget
 * @var string $after_widget
 * @var array $recent_posts
 * @var array $popular_posts
 */

echo $before_widget
?>
<div class="tabs-wrapper">
	<ul class="nav classic-tabs tabs-cyan">
		<li class="nav-item active"><a href="#popular_posts" class="nav-link waves-light"  data-toggle="tab"><?php _e( 'Posts', 'poc' ); ?></a></li>
		<li class="nav-item"><a href="#most_commented"  class="nav-link waves-light" data-toggle="tab"><?php _e( 'Most Commented', 'poc' ); ?></a></li>
	</ul>
</div>
<div class="tab-content card">
<div id="popular_posts" class="tab-pane fade in active">
	<ul>
		<?php foreach ( $recent_posts as $post ): ?>
			<li>
				<a href="<?php echo $post['post_link']; ?>"><?php echo $post['post_title']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
<div id="most_commented" class="tab-pane fade">
	<ul>
		<?php foreach ( $popular_posts as $post ): ?>
			<li>
				<a href="<?php echo $post['post_link']; ?>"><?php echo $post['post_title']; ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
</div>
<?php echo $after_widget ?>
