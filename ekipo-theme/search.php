<?php get_header(); ?>
<?php do_action('equipo_enovathemes_title_section'); ?>
<?php $total_results = $wp_query->found_posts; ?>
<div id="et-content" class="content et-clearfix padding-true search-page">
    <div class="container et-clearfix">

        <div class="tech-page-search-form">
            <?php echo get_search_form(); ?>
        </div>
        <div class="search-results-title">
            <?php echo esc_attr($total_results).esc_html__(' search results for', 'equipo').' <strong><i>"'.get_search_query().'</i></strong>"'; ?>
        </div>
        <div class="search-posts loop-posts">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('search-term post') ?> id="post-<?php the_ID(); ?>">
                        <div class="post-inner et-item-inner et-clearfix">
                            <div class="post-body">
                                <div class="post-body-inner">
                                    <?php if ( '' != the_title_attribute( 'echo=0' ) ): ?>
                                        <h4 class="post-title entry-title">
                                            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr__("Go to", 'equipo').' '.the_title_attribute( 'echo=0' ); ?>" rel="bookmark">
                                                <?php the_title(); ?>
                                            </a>
                                        </h4>
                                    <?php endif; ?>
                                    <?php if ( '' != get_the_excerpt() ): ?>
                                    <div class="post-excerpt"><?php echo equipo_enovathemes_substrwords(get_the_excerpt(),250); ?></div>
                                    <?php endif; ?>
                                    <?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['arrow'])): ?>
                                        <a href="<?php the_permalink(); ?>" class="post-read-more"><?php echo esc_html__("Read more", 'equipo'); ?><span class="screen-reader-text"> <?php the_title();?></span><?php echo et_get_theme_icon()['arrow']; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
                <?php equipo_enovathemes_post_nav_num('general'); ?>
            <?php else : ?>
                <div class="suggestions">
                    <p><strong><?php echo esc_html__('Suggestions:', 'equipo'); ?></strong></p>
                    <ol>
                        <li><?php echo esc_html__('Make sure that all words are spelled correctly', 'equipo'); ?></li>
                        <li><?php echo esc_html__('Try different keywords', 'equipo'); ?></li>
                        <li><?php echo esc_html__('Try more general keywords', 'equipo'); ?></li>
                        <li><?php echo esc_html__('Try fewer keywords', 'equipo'); ?></li>
                    </ol>
                </div>
            <?php endif; ?>
        </div>

    </div>
</div>
<?php get_footer(); ?>