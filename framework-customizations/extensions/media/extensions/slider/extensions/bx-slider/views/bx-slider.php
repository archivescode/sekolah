<?php if (!defined('FW')) die('Forbidden'); ?>
<?php if (isset($data['slides'])): ?>
	<script type="text/javascript">
		jQuery('document').ready(function () {
			jQuery('.bxslider').bxSlider({
				auto: true,
				captions: true,
				adaptiveHeight: true,	
			});
		});
	</script>
	<ul class="bxslider">
		<?php foreach ($data['slides'] as $slide): ?>
			<li>
				<?php if ($slide['multimedia_type'] === 'video') : ?>
					<?php echo fw_oembed_get($slide['src'], $dimensions); ?>
				<?php else: ?>
					<?php $src_image = ($slide['src'] == false) ? get_stylesheet_directory_uri() . '/images/no-img.png"' : $slide['src'] ; ?>
					<img src="<?php echo fw_resize($src_image, $dimensions['width'], $dimensions['height'], true); ?>"
					     alt="<?php echo $slide['title'] ?>" width="<?php echo $dimensions['width']; ?>"
					     height="<?php echo $dimensions['height']; ?>"/>
					<div class="caption"> 
			        	<span><?php echo $slide['title']; ?></span>
			    	</div>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ul>
<?php endif; ?>
