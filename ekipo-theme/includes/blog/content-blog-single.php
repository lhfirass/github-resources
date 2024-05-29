<?php

	equipo_enovathemes_global_variables();

	$blog_single_sidebar   = (isset($GLOBALS['equipo_enovathemes']['blog-single-sidebar']) && $GLOBALS['equipo_enovathemes']['blog-single-sidebar']) ? $GLOBALS['equipo_enovathemes']['blog-single-sidebar'] : "none";
 	$blog_related_posts    = (isset($GLOBALS['equipo_enovathemes']['blog-related-posts']) && $GLOBALS['equipo_enovathemes']['blog-related-posts'] == 1) ? "true" : "false";
	$blog_related_posts_by = (isset($GLOBALS['equipo_enovathemes']['blog-related-posts-by']) && $GLOBALS['equipo_enovathemes']['blog-related-posts-by']) ? $GLOBALS['equipo_enovathemes']['blog-related-posts-by'] : "categories";
	$blog_image_full       = (isset($GLOBALS['equipo_enovathemes']['blog-image-full']) && $GLOBALS['equipo_enovathemes']['blog-image-full'] == 1) ? "true" : "false";

	$class = array();

	if (is_active_sidebar('blog-single-widgets') && $blog_single_sidebar == "none" && !defined('ENOVATHEMES_ADDONS')) {
		$blog_single_sidebar = 'right';
	}

	if ($blog_single_sidebar != "none") {
		$class[] = 'sidebar-active';
	}

	$class[] = 'post-layout';
	$class[] = 'blog-layout-single';
	$class[] = 'layout-sidebar-'.$blog_single_sidebar;
	$class[] = 'lazy lazy-load';

?>
<div id="et-content" class="content et-clearfix padding-false">
	<div class="<?php echo implode(' ', $class); ?>">
		<div class="container">
			<?php if ($blog_single_sidebar == "left"): ?>
				<div class="blog-sidebar layout-sidebar et-clearfix">
					<?php get_sidebar('single'); ?>
				</div>
				<div class="blog-content layout-content et-clearfix">
					<?php get_template_part( '/includes/blog/content-blog-single-code' ); ?>
				</div>
			<?php elseif ($blog_single_sidebar == "right"): ?>
				<div class="blog-content layout-content et-clearfix">
					<?php get_template_part( '/includes/blog/content-blog-single-code' ); ?>
				</div>
				<div class="blog-sidebar layout-sidebar et-clearfix">
					<?php get_sidebar('single'); ?>
				</div>
			<?php else: ?>
				<?php get_template_part( '/includes/blog/content-blog-single-code' ); ?>
			<?php endif ?>
		</div>
		<div class="nav-container">
			<div class="container et-clearfix">
				<?php equipo_enovathemes_post_nav('post',get_the_ID()); ?>
				<?php if ($blog_single_sidebar != "none"): ?>
					<?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['grid'])): ?>
						<a href="#" title="<?php echo esc_attr__("Toggle sidebar","equipo"); ?>" class="content-sidebar-toggle"><?php echo et_get_theme_icon()['grid']; ?></a>
					<?php endif ?>
				<?php endif ?>
				</div>
			</div>
		<?php if ($blog_related_posts == "true"): ?>
			<?php $categories = wp_get_post_categories(get_the_ID());?>
			<?php $tags = wp_get_post_tags(get_the_ID());?>
			<?php if ($categories || $tags): ?>

				<?php

					if ($blog_related_posts_by == "categories") {
						$args = array(
							'post_type'           => 'post',
							'category__in'        => $categories,
							'posts_per_page'      => 6,
							'ignore_sticky_posts' => 1,
							'orderby'             => 'date',
							'post__not_in'        => array($post->ID)
						);
					} else {

						$terms = array();
						foreach ($tags as $tag) {
							array_push($terms, $tag->term_id);
						}
						
						$args = array(
							'post_type'           => 'post',
							'tag__in'             => $terms,
							'posts_per_page'      => 6,
							'ignore_sticky_posts' => 1,
							'orderby'             => 'date',
							'post__not_in'        => array($post->ID)
						);
					}

				    $related_posts = new WP_Query($args);

				    $thumb_size = ($blog_image_full == "true") ? 'full' : 'equipo_600X400';

				?>

				<?php if ($related_posts->have_posts()): ?>
					<div class="related-posts-wrapper medium blog-layout-grid grid et-clearfix">
						<div class="container">
							<h4 class="related-posts-title"><?php echo esc_html__("Related posts", 'equipo'); ?></h4>
							<div id="related-posts" class="related-posts loop-posts only-posts et-carousel et-clearfix" data-columns="3">
								<div class="slides">
									<?php while($related_posts->have_posts()) : $related_posts->the_post(); ?>
										<?php echo equipo_enovathemes_post('grid',94,50,$thumb_size,false,false,false); ?>
									<?php endwhile; ?>
									<?php wp_reset_postdata(); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif ?>
				
			<?php endif ?>
		<?php endif ?>
	</div>
</div>