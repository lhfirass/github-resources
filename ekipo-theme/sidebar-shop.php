<?php
	equipo_enovathemes_global_variables();
	$shop_sidebar = (isset($GLOBALS['equipo_enovathemes']['shop-sidebar']) && $GLOBALS['equipo_enovathemes']['shop-sidebar']) ? $GLOBALS['equipo_enovathemes']['shop-sidebar'] : "right";
	$data_shop  = (isset($_GET["data_shop"]) && !empty($_GET["data_shop"])) ? $_GET["data_shop"] : "default";
?>

<?php if ($data_shop != 'default' && has_action('efp_filter_demo')): ?>
	<?php do_action('efp_filter_demo',$data_shop,$shop_sidebar); ?>
<?php else: ?>
	<?php if (is_active_sidebar('shop-widgets')): ?>
		<aside class='shop-widgets widget-area'>  
			<?php if ($shop_sidebar != "none"): ?>
				<?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['close'])): ?>
					<a href="#" title="<?php echo esc_attr__("Toggle sidebar","equipo"); ?>" class="content-sidebar-toggle active"><?php echo et_get_theme_icon()['close']; ?></a>
                <?php endif; ?>
			<?php endif ?>
			<?php if ( function_exists( 'dynamic_sidebar' )){dynamic_sidebar('shop-widgets');} ?>
		</aside>
	<?php endif ?>
<?php endif ?>	
