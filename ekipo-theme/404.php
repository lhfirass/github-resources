<?php get_header(); ?>
<?php do_action('equipo_enovathemes_title_section'); ?>
<div id="et-content" class="content et-clearfix padding-true">
    <div class="container et-clearfix">
        <div class="message404 et-clearfix">
            <h1 class="error404-default-title">40<span class="transform-error">4</span></h1>
            <p class="error404-default-subtitle"><?php echo esc_html__('Page not found','equipo'); ?></p>
            <p class="error404-default-description"><?php echo esc_html__('The page you are looking for could not be found.','equipo'); ?></p>
            <br>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="error404-button et-button medium" title="<?php echo esc_attr__('Go to home','equipo'); ?>"><?php echo esc_html__('Homepage','equipo'); ?></a>
        </div> 
    </div>
</div>
<?php get_footer(); ?>
