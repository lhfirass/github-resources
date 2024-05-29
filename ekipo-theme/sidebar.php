<?php if(is_active_sidebar('blog-widgets')): ?>
	<?php
		equipo_enovathemes_global_variables();
		$blog_sidebar= (isset($GLOBALS['equipo_enovathemes']['blog-sidebar']) && $GLOBALS['equipo_enovathemes']['blog-sidebar']) ? $GLOBALS['equipo_enovathemes']['blog-sidebar'] : "right";
	?>
	<aside class='blog-widgets widget-area'>  
		<?php if ($blog_sidebar != "none"): ?>
			<?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['close'])): ?>
				<a href="#" title="<?php echo esc_attr__("Toggle sidebar","equipo"); ?>" class="content-sidebar-toggle active"><?php echo et_get_theme_icon()['close']; ?></a>
            <?php endif; ?>
		<?php endif ?>
		<?php if ( function_exists( 'dynamic_sidebar' )){dynamic_sidebar('blog-widgets');} ?>
	</aside>
<?php endif ?>	
