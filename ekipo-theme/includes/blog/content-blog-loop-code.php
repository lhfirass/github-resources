<?php

	equipo_enovathemes_global_variables();

	$blog_post_excerpt = (isset($GLOBALS['equipo_enovathemes']['blog-post-excerpt']) && $GLOBALS['equipo_enovathemes']['blog-post-excerpt']) ? $GLOBALS['equipo_enovathemes']['blog-post-excerpt'] : 0;
	$blog_post_title_excerpt = (isset($GLOBALS['equipo_enovathemes']['blog-post-title-excerpt']) && $GLOBALS['equipo_enovathemes']['blog-post-title-excerpt']) ? $GLOBALS['equipo_enovathemes']['blog-post-title-excerpt'] : 52;
	$blog_post_layout  = (isset($GLOBALS['equipo_enovathemes']['blog-post-layout']) && $GLOBALS['equipo_enovathemes']['blog-post-layout']) ? $GLOBALS['equipo_enovathemes']['blog-post-layout'] : "masonry";
    $blog_sidebar      = (isset($GLOBALS['equipo_enovathemes']['blog-sidebar']) && $GLOBALS['equipo_enovathemes']['blog-sidebar']) ? $GLOBALS['equipo_enovathemes']['blog-sidebar'] : "none";
    $blog_navigation   = (isset($GLOBALS['equipo_enovathemes']['blog-navigation']) && $GLOBALS['equipo_enovathemes']['blog-navigation']) ? $GLOBALS['equipo_enovathemes']['blog-navigation'] : "pagination";
	$blog_image_full   = (isset($GLOBALS['equipo_enovathemes']['blog-image-full']) && $GLOBALS['equipo_enovathemes']['blog-image-full'] == 1) ? "true" : "false";

	$class = array();

	$class[] = 'loop-posts';
	$class[] = 'only-posts';

	if (is_active_sidebar('blog-widgets') && $blog_sidebar == "none" && !defined('ENOVATHEMES_ADDONS')) {
		$blog_sidebar = 'right';
	}

?>

<?php if ($blog_sidebar != "none"): ?>
	<?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['grid'])): ?>
		<a href="#" title="<?php echo esc_attr__("Toggle sidebar","equipo"); ?>" class="content-sidebar-toggle"><?php echo et_get_theme_icon()['grid']; ?></a>
    <?php endif; ?>
<?php endif ?>

<?php if (have_posts()) : ?>

	<main id="loop-posts" class="<?php echo esc_attr(implode(' ', $class)); ?>" data-nav="<?php echo esc_attr($blog_navigation); ?>">

		<?php

			$thumb_size = 'equipo_600X400';

			switch ($blog_post_layout) {
				case 'full':
					$thumb_size = 'equipo_1200X800';
					break;
				case 'list':
					$thumb_size = 'equipo_425X425';
					break;
				default:
					$thumb_size = 'equipo_600X400';
					break;
			}
			
			if ($blog_image_full == "true") {
				$thumb_size = 'full';
			}

		?>

		<?php while (have_posts()) : the_post(); ?>
			<?php echo equipo_enovathemes_post($blog_post_layout,$blog_post_excerpt,$blog_post_title_excerpt,$thumb_size,$blog_image_full,false); ?>
		<?php endwhile; ?>

	</main>

	<?php equipo_enovathemes_navigation('post',$blog_navigation); ?>

<?php else : ?>
	<?php equipo_enovathemes_not_found('post'); ?>
<?php endif; ?>