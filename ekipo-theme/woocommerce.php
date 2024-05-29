<?php 
    equipo_enovathemes_global_variables();

    $product_post_size   = (isset($GLOBALS['equipo_enovathemes']['product-post-size']) && $GLOBALS['equipo_enovathemes']['product-post-size']) ? $GLOBALS['equipo_enovathemes']['product-post-size'] : "medium";
    $product_post_layout = (isset($GLOBALS['equipo_enovathemes']['product-post-layout']) && $GLOBALS['equipo_enovathemes']['product-post-layout']) ? $GLOBALS['equipo_enovathemes']['product-post-layout'] : "grid";
    $product_sidebar     = (isset($GLOBALS['equipo_enovathemes']['product-sidebar']) && $GLOBALS['equipo_enovathemes']['product-sidebar']) ? $GLOBALS['equipo_enovathemes']['product-sidebar'] : "none";
    $product_gap         = (isset($GLOBALS['equipo_enovathemes']['product-gap']) && $GLOBALS['equipo_enovathemes']['product-gap'] == 1) ? "true" : "false";

    if (is_active_sidebar('shop-widgets') && $product_sidebar == "none" && !defined('ENOVATHEMES_ADDONS')) {
        $product_sidebar = 'left';
    }

    $class = array();

    if ($product_post_layout == 'list' && $product_post_size == 'large') {
        $product_post_size = 'medium';
    }


    if ($product_sidebar != "none") {
        $class[] = 'sidebar-active';
    }

    $class[] = 'post-layout';
    $class[] = 'product-layout';
    $class[] = $product_post_size;
    $class[] = $product_post_layout;
    if ($product_post_layout == "grid") {
        $class[] = 'gap-'.$product_gap;
    }
    $class[] = 'layout-sidebar-'.$product_sidebar;

?>
<?php get_header(); ?>
<?php do_action('equipo_enovathemes_title_section'); ?>
<?php if (is_singular('product')): ?>
    <?php get_template_part('/woocommerce/content-product-single'); ?>
<?php else: ?>
    <div class="<?php echo implode(' ', $class); ?>">
        <?php get_template_part('/woocommerce/content-product-loop'); ?>
    </div>
<?php endif ?>
<?php get_footer(); ?>