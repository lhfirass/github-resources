<?php

/* Constantas
---------------*/

    define('EQUIPO_ENOVATHEMES_TEMPPATH', get_template_directory_uri());
    define('EQUIPO_ENOVATHEMES_IMAGES', EQUIPO_ENOVATHEMES_TEMPPATH. "/images");
    define('EQUIPO_SVG', EQUIPO_ENOVATHEMES_IMAGES."/icons/");
    define('ICL_DONT_LOAD_NAVIGATION_CSS', true);
    define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);

    function equipo_enovathemes_global_variables(){
        global $equipo_enovathemes, $woocommerce, $post, $product, $wp_query, $query_string;
    }

/* Includes
---------------*/

    if (!class_exists('TGM_Plugin_Activation') && file_exists( get_template_directory() . '/includes/class-tgm-plugin-activation.php' ) ) {
        require_once(get_template_directory() . '/includes/class-tgm-plugin-activation.php');
    }

    if (defined( 'WPB_VC_VERSION' )) {
        require_once(get_template_directory() . '/includes/enovathemes_vc.php' );
    }

    require_once(get_template_directory() . '/includes/enovathemes-functions.php');
    require_once(get_template_directory() . '/includes/menu/custom-menu.php' );
    require_once(get_template_directory() . '/includes/dynamic-styles.php');

    if (class_exists('OCDI_Plugin')) {

        add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );
        add_filter( 'pt-ocdi/regenerate_thumbnails_in_content_import', '__return_false' );

        function equipo_enovathemes_intro_text( $default_text ) {
            $default_text = '<br><br><div class="ocdi__intro-text custom-intro-text">
            <h2 class="about-description">
            '.esc_html__( "Importing demo data (post, pages, images, theme settings, ...) is the easiest way to setup your theme.", "equipo" ).'
            '.esc_html__( "It will allow you to quickly edit everything instead of creating content from scratch.", "equipo" ).'
            </h2>
            <hr>
            <h3>'.esc_html__( "Important things to know before starting demo import", "equipo" ).'</h3><br><br>
            <ul>
            <li>'.esc_html__( "No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.", "equipo" ).'</li>
            <li>'.esc_html__( "Posts, pages, images, widgets, menus and other theme settings will get imported.", "equipo" ).'</li>
            <li>'.esc_html__( "Please click on the Import button only once and wait, it can take a couple of minutes.", "equipo" ).'</li>
            <li>'.esc_html__( "If you want to change the homepage version after import, do not import another demo, go to WordPress settings >> Reading and choose different homepage version as your front-page.", "equipo" ).'</li>
            <li>'.esc_html__( "If you want to import pages/posts/custom post type/menu etc. separately use regular WordPress importer", "equipo" ).'</li>
            <li>'.esc_html__( "Sometimes not all widgets are displayed after the import, this is known issue, you will need to replace these plugins or re-save one more time", "equipo" ).'</li>
            <li>'.esc_html__( "Sometimes not all images are imported during import process, this is known issue, you just need before import uncheck the 'Organize my uploads into month- and year-based folders' option from WordPress dashboard >> settings >> media", "equipo" ).'</li>
            </ul>
            <hr>
            <h3>'.esc_html__( "What to do after import", "equipo" ).'</h3><br><br>
            <ul>
            <li>'.esc_html__( "All the images will be imported with original sizes without cropping. This way your import process will be quicker and your server will have less work to do. After the import completed go to the WordPress >> Tools and use the Regenerate thumbnails plugin to crop images to theme supported sizes. !!! Important, regenerate only Featured images", "equipo" ).'</li>
            <li>'.esc_html__( "Also change permalinks from default to whatever you want. (WordPress settings >> permalinks)", "equipo" ).'</li>
            <li>'.esc_html__( "Also you need to clear the WooCommerce cache: go to WooCommerce >> Status >> Tools and clear the WooCommerce transients and regenerate product lookup tables", "equipo" ).'</li>
            <li>'.esc_html__( "Also do not forget to set the shop page from the WooCommerce >> Products settings, make sure it is the one that comes with the theme", "equipo" ).'</li>
            </ul>
            <hr>
            <h3>'.esc_html__( "Troubleshooting", "equipo" ).'</h3><br>
            <p>'.esc_html__( "If you will have any issues with the import process, please update these option on your server (edit your php.ini file)", "equipo" ).' </p>
            <ul class="code">
            <li>upload_max_filesize (256M)</li>
            <li>max_input_time (300)</li>
            <li>memory_limit (256M)</li>
            <li>max_execution_time (300)</li>
            <li>post_max_size (512M)</li>
            </ul>
            <p>'.esc_html__( "These defaults are not perfect and it depends on how large of an import you are making. So the bigger the import, the higher the numbers should be.", "equipo" ).' </p>
            </div><br><br>';
            return $default_text;
        }
        add_filter( 'pt-ocdi/plugin_intro_text', 'equipo_enovathemes_intro_text' );

        function equipo_enovathemes_import_files() {

            return array(

                array(
                    'import_file_name'             => esc_html__('Full demo', 'equipo'),
                    'categories'                   => array( 'General' ),
                    'local_import_file'            => trailingslashit( get_template_directory() ) . '/demo/all.xml',
                    'local_import_widget_file'     => trailingslashit( get_template_directory() ) . '/demo/widgets.wie',
                    'local_import_redux'           => array(
                        array(
                            'file_path'   => trailingslashit( get_template_directory() ) . '/demo/options.json',
                            'option_name' => 'equipo_enovathemes',
                        ),
                    ),
                    'import_notice' => esc_html__( 'Import process can take up to 10 minutes, so please be patient and do not interrupt the import process', 'equipo' ),
                ),

            );
        }
        add_filter( 'pt-ocdi/import_files', 'equipo_enovathemes_import_files' );
    }

/* TGM
---------------*/

    add_action( 'tgmpa_register', 'equipo_enovathemes_register_required_plugins' );
    function equipo_enovathemes_register_required_plugins() {

        global $equipo_enovathemes;

        $disable_plugins = (isset($GLOBALS['equipo_enovathemes']['disable-plugins']) && $GLOBALS['equipo_enovathemes']['disable-plugins'] == 1) ? 'true' : 'false';

        $plugins = array(
            
            array(
                'name'      => esc_html__('Safe SVG', 'equipo'),
                'slug'      => 'safe-svg',
                'required'  => true,
            ),
            array(
                'name'      => esc_html__('One Click Demo Import', 'equipo'),
                'slug'      => 'one-click-demo-import',
                'required'  => true,
            ),
            array(
                'name'      => esc_html__('Envato market master', 'equipo'),
                'slug'      => 'envato-market',
                'source'    => get_template_directory() . '/plugins/envato-market.zip',
                'required'  => true,
            ),
            array(
                'name'      => esc_html__('WPBakery Visual Composer', 'equipo'),
                'slug'      => 'js_composer',
                'source'    => get_template_directory() . '/plugins/js_composer.zip',
                'required'  => true,
                'version'   => '7.3'
            ),
            array(
                'name'      => esc_html__('Revolution slider', 'equipo'),
                'slug'      => 'revslider',
                'source'    => get_template_directory() . '/plugins/revslider.zip',
                'version'   => '6.6.20',
                'required'  => true,
            ),
            array(
                'name'      => esc_html__('Enovathemes add-ons', 'equipo'),
                'slug'      => 'enovathemes-addons',
                'source'    => get_template_directory() . '/plugins/enovathemes-addons.zip',
                'required'  => true,
                'version'   => '2.5'
            ),
            array(
                'name'      => esc_html__('WooCommerce', 'equipo'),
                'slug'      => 'woocommerce',
                'required'  => true,
            ),
            

        );

        if ($disable_plugins == "false") {
            $plugins[] = array(
                'name' => esc_html__('Regenerate Thumbnails', 'equipo'),
                'slug' => 'regenerate-thumbnails',
            );

            $plugins[] = array(
                'name'      => esc_html__('Contact Form 7', 'equipo'),
                'slug'      => 'contact-form-7',
            );
        }

        if (class_exists('Woocommerce') && $disable_plugins == "false") {
            $plugins[] = array(
                'name'      => esc_html__('Variation Swatches for WooCommerce', 'equipo'),
                'slug'      => 'variation-swatches-for-woocommerce',
            );
            $plugins[] = array(
                'name'      => esc_html__('Currency Switcher for WooCommerce', 'equipo'),
                'slug'      => 'currency-switcher-woocommerce',
            );
        }

        $config = array(
            'id'                => 'equipo',
            'default_path'      => '',                          // Default absolute path to pre-packaged plugins
            'parent_slug'       => 'themes.php',                // Default parent menu slug
            'capability'        => 'edit_theme_options',
            'menu'              => 'install-required-plugins',  // Menu slug
            'has_notices'       => true,                        // Show admin notices or not
            'dismissable'       => false,
            'is_automatic'      => false,                       // Automatically activate plugins after installation or not
            'message'           => '',                          // Message to output right before the plugins table
            'strings'           => array(
                'page_title'                                => esc_html__( 'Install Required Plugins', 'equipo' ),
                'menu_title'                                => esc_html__( 'Install Plugins', 'equipo' ),
                'installing'                                => esc_html__( 'Installing Plugin: %s', 'equipo' ), // %1$s = plugin name
                'oops'                                      => esc_html__( 'Something went wrong with the plugin API.', 'equipo' ),
                'notice_can_install_required'               => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'equipo' ), // %1$s = plugin name(s)
                'notice_can_install_recommended'            => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'equipo' ), // %1$s = plugin name(s)
                'notice_cannot_install'                     => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'equipo' ), // %1$s = plugin name(s)
                'notice_can_activate_required'              => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'equipo' ), // %1$s = plugin name(s)
                'notice_can_activate_recommended'           => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'equipo' ), // %1$s = plugin name(s)
                'notice_cannot_activate'                    => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'equipo' ), // %1$s = plugin name(s)
                'notice_ask_to_update'                      => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'equipo' ), // %1$s = plugin name(s)
                'notice_cannot_update'                      => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'equipo' ), // %1$s = plugin name(s)
                'install_link'                              => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'equipo' ),
                'activate_link'                             => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'equipo' ),
                'return'                                    => esc_html__( 'Return to Required Plugins Installer', 'equipo' ),
                'plugin_activated'                          => esc_html__( 'Plugin activated successfully.', 'equipo' ),
                'complete'                                  => esc_html__( 'All plugins installed and activated successfully. %s', 'equipo' ), // %1$s = dashboard link
                'nag_type'                                  => 'updated' // Determines admin notice type - can only be 'updated' or 'error'
            )
        );

        tgmpa( $plugins, $config );

    }

/* Thumbnails
---------------*/

    if ( function_exists( 'add_theme_support' ) ) {

        add_theme_support( 'post-thumbnails');

        add_image_size( 'equipo_1200X800', 1200, 800, true );
        add_image_size( 'equipo_600X400', 600, 400, true );
        add_image_size( 'equipo_425X425', 425, 425, true );
        add_image_size( 'equipo_72X72', 72, 72, true );
    
    }

    if ( ! function_exists( 'equipo_enovathemes_thumbnail_sizes' ) ) {
        function equipo_enovathemes_thumbnail_sizes() {
            update_option( 'thumbnail_size_w', 150 );
            update_option( 'thumbnail_size_h', 150 );

            update_option( 'medium_size_w', 600 );
            update_option( 'medium_size_h', 400 );

            update_option( 'large_size_w', 1200 );
            update_option( 'large_size_h', 800 );
        }
        add_action( 'after_switch_theme', 'equipo_enovathemes_thumbnail_sizes' );
    }

    function equipo_enovathemes_custom_image_sizes( $sizes ) {

        $new_sizes = array();

        $added_sizes = get_intermediate_image_sizes();

        foreach( $added_sizes as $key => $value) {
            $new_sizes[$value] = $value;
        }

        $new_sizes = array_merge( $new_sizes, $sizes );

        return $new_sizes;
    }
    add_filter('image_size_names_choose', 'equipo_enovathemes_custom_image_sizes', 11, 1);

/* Theme Config
---------------*/

    function equipo_enovathemes_pingback_header() {
        if ( is_singular() && pings_open() ) {
            echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
        }
    }
    add_action( 'wp_head', 'equipo_enovathemes_pingback_header' );

    add_action('init', 'equipo_enovathemes_init');
    function equipo_enovathemes_init() {
        add_theme_support( 'html5', array( 'gallery', 'caption' ) );
        add_theme_support( 'post-formats', array( 'aside', 'audio', 'video', 'gallery', 'link', 'quote', 'status', 'chat') );
        add_theme_support( 'automatic-feed-links' );
        add_post_type_support( 'post', 'post-formats' );
        add_post_type_support( 'page', 'excerpt' );
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
    }

    if ( ! isset( $content_width ) ) {$content_width = 1200;}

    if(function_exists('vc_set_as_theme')) vc_set_as_theme(true);

    add_action( 'after_setup_theme', 'equipo_enovathemes_woocommerce_support' );
    function equipo_enovathemes_woocommerce_support() {
        load_theme_textdomain('equipo', get_template_directory() . '/languages');
        add_theme_support( 'woocommerce' );
        add_theme_support( 'title-tag' );
    }

    function equipo_enovathemes_remove_redux_news() {
        remove_meta_box( 'redux_dashboard_widget', 'dashboard', 'side' );
    }
    add_action('wp_dashboard_setup', 'equipo_enovathemes_remove_redux_news' );

    function equipo_enovathemes_redux_menu_page_removing() {
        remove_submenu_page( 'tools.php', 'redux-about' );
    }
    add_action( 'admin_menu', 'equipo_enovathemes_redux_menu_page_removing' );


    add_filter('body_class', 'equipo_enovathemes_general_body_classes');
    function equipo_enovathemes_general_body_classes($classes) {

            global $equipo_enovathemes, $post;

            $header_desktop_id = (isset($GLOBALS['equipo_enovathemes']['header-desktop-id']) && !empty($GLOBALS['equipo_enovathemes']['header-desktop-id'])) ? $GLOBALS['equipo_enovathemes']['header-desktop-id'] : "default";
            $footer_id         = (isset($GLOBALS['equipo_enovathemes']['footer-id']) && !empty($GLOBALS['equipo_enovathemes']['footer-id'])) ? $GLOBALS['equipo_enovathemes']['footer-id'] : "default";
            $cursor            = (isset($GLOBALS['equipo_enovathemes']['cursor']) && $GLOBALS['equipo_enovathemes']['cursor'] == 1) ? 'cursor-active' : '';

            $custom_class = array();
            $custom_class[] = "enovathemes";
            $custom_class[] = $cursor;
            $custom_class[] = (isset($GLOBALS['equipo_enovathemes']['layout']) && !empty($GLOBALS['equipo_enovathemes']['layout']) ) ? 'layout-'.$GLOBALS['equipo_enovathemes']['layout'] : ' layout-wide';

            if ($footer_id == "default") {
                $custom_class[] = "default-footer";
            }

            if (class_exists('Woocommerce')){
                
                if (is_cart() || is_checkout()) {$custom_class[] = "cart-checkout";}
                if (is_account_page()) {$custom_class[] = "my-account";}

                $woocommerce_shop_page_display = get_option( 'woocommerce_shop_page_display' );

                if ($woocommerce_shop_page_display === '') {
                    $custom_class[] = "woocommerce-layout-product";
                } elseif ($woocommerce_shop_page_display === 'subcategories') {
                    $custom_class[] = "woocommerce-layout-category";
                } elseif($woocommerce_shop_page_display === 'both') {
                    $custom_class[] = "woocommerce-layout-both";
                }

            }

            if (is_page()) {
                $page_header_desktop_id = get_post_meta( get_the_ID(), 'enovathemes_addons_desktop_header', true );
                if ($page_header_desktop_id != 'inherit') {
                    $header_desktop_id = $page_header_desktop_id;
                }

                $page_back_video = get_post_meta( get_the_ID(), 'enovathemes_addons_page_back_video', true );
                $page_back_image = get_post_meta( get_the_ID(), 'enovathemes_addons_page_back_image', true );
                $page_back_color = get_post_meta( get_the_ID(), 'enovathemes_addons_page_back_color', true );

                if (!empty($page_back_video) || !empty($page_back_image) || !empty($page_back_color)) {
                    $custom_class[] = "page-background";
                }

            }

            if ($header_desktop_id != "none" && $header_desktop_id != "default"){

                $type = get_post_meta($header_desktop_id, 'enovathemes_addons_header_type', true);
                if ($type == "sidebar") {
                    $custom_class[] = "sidebar-navigation";
                }

            }

            if (is_singular('header')) {
                $type             = get_post_meta(get_the_ID(), 'enovathemes_addons_header_type', true);

                if ($type == "sidebar") {
                    $custom_class[] = "sidebar-navigation";
                }
            }

            if(!defined('ENOVATHEMES_ADDONS')){
                $custom_class[] = 'addon-off';
            }

            $classes[] = implode(" ", $custom_class);




            return $classes;
    }

    // Allow shortcodes in Contact Form 7
    function equipo_enovathemes_shortcodes_in_cf7( $form ) {
        $form = do_shortcode( $form );
        return $form;
    }
    add_filter( 'wpcf7_form_elements', 'equipo_enovathemes_shortcodes_in_cf7' );

    function equipo_enovathemes_edit_nav_classes( $classes, $item ) {

        foreach ($classes as $idx => $class) {
            if (
                $class == 'current-menu-ancestor' ||
                $class == 'current-menu-parent' ||
                $class == 'current-page-ancestor' ||
                $class == 'current-page-item' ||
                ($class == 'current_page_parent' && is_singular('post'))  ||
                ($class == 'current_page_parent' && is_singular('product'))  ||
                $class == 'current-menu-item'
            ) {
                $classes[$idx] = 'active';
            }
        }
        return array_unique($classes);

    }
    add_filter( 'nav_menu_css_class', 'equipo_enovathemes_edit_nav_classes', 10, 2 );

/* Theme actions
/*-------------*/

    /* Header
    ---------------*/

        function equipo_enovathemes_header(){ ?>

            <?php

                global $equipo_enovathemes;

                $header_desktop_id = (isset($GLOBALS['equipo_enovathemes']['header-desktop-id']) && !empty($GLOBALS['equipo_enovathemes']['header-desktop-id'])) ? $GLOBALS['equipo_enovathemes']['header-desktop-id'] : "default";
                $header_mobile_id  = (isset($GLOBALS['equipo_enovathemes']['header-mobile-id']) && !empty($GLOBALS['equipo_enovathemes']['header-mobile-id'])) ? $GLOBALS['equipo_enovathemes']['header-mobile-id'] : "default";

                if (class_exists('SitePress') || function_exists('pll_the_languages')){

                    $current_lang = (function_exists('pll_the_languages')) ? pll_current_language() : ICL_LANGUAGE_CODE;

                    // WPML
                    $header_desktop_id_wpml = (isset($GLOBALS['equipo_enovathemes']['header-desktop-id-wpml']) && !empty($GLOBALS['equipo_enovathemes']['header-desktop-id-wpml'])) ? $GLOBALS['equipo_enovathemes']['header-desktop-id-wpml'] : $header_desktop_id;
                    $header_mobile_id_wpml  = (isset($GLOBALS['equipo_enovathemes']['header-mobile-id-wpml']) && !empty($GLOBALS['equipo_enovathemes']['header-mobile-id-wpml'])) ? $GLOBALS['equipo_enovathemes']['header-mobile-id-wpml'] : $header_mobile_id;

                    if ($header_desktop_id_wpml != $header_desktop_id && !empty($header_desktop_id_wpml)) {
                        $header_desktop_id_wpml = explode('|', $header_desktop_id_wpml);

                        $lang_header_obj = array();


                        foreach ($header_desktop_id_wpml as $wpml_lang_header) {
                            $lang_header_set = explode(":",$wpml_lang_header);
                            $lang_header_obj[$lang_header_set[0]] = $lang_header_set[1];
                        }

                        if (array_key_exists($current_lang,$lang_header_obj)) {
                            $header_desktop_id = $lang_header_obj[$current_lang];
                        }

                    }

                    if ($header_mobile_id_wpml != $header_mobile_id && !empty($header_mobile_id_wpml)) {
                        $header_mobile_id_wpml = explode('|', $header_mobile_id_wpml);

                        $lang_header_obj = array();

                        foreach ($header_mobile_id_wpml as $wpml_lang_header) {
                            $lang_header_set = explode(":",$wpml_lang_header);
                            $lang_header_obj[$lang_header_set[0]] = $lang_header_set[1];
                        }

                        if (array_key_exists($current_lang,$lang_header_obj)) {
                            $header_mobile_id = $lang_header_obj[$current_lang];
                        }

                    }
                }

                if (is_page()) {

                    $page_header_desktop_id = get_post_meta( get_the_ID(), 'enovathemes_addons_desktop_header', true );
                    $page_header_mobile_id  = get_post_meta( get_the_ID(), 'enovathemes_addons_mobile_header', true );

                    if ($page_header_desktop_id != "inherit" && !empty($page_header_desktop_id)) {
                        $header_desktop_id = $page_header_desktop_id;
                    }

                    if ($page_header_mobile_id != "inherit" && !empty($page_header_mobile_id)) {
                        $header_mobile_id = $page_header_mobile_id;
                    }

                }

                elseif (is_404()) {

                    $header_desktop_id = 'none';
                    $header_mobile_id = 'none';

                }

                if ($header_desktop_id == $header_mobile_id && $header_desktop_id != "default") {
                    $header_mobile_id = "none";
                }

                if (class_exists('\Detection\MobileDetect')) {
                    $detect = new \Detection\MobileDetect;

                    if ($detect->isMobile() || $detect->isTablet()) {
                        if ($header_mobile_id != "none" && $header_mobile_id != "default" && function_exists('enovathemes_addons_header_html')) {
                            enovathemes_addons_header_html($header_mobile_id, 'mobile');
                        } elseif ($header_mobile_id == "default") {
                            equipo_enovathemes_default_header('mobile');
                        }
                    } else {
                        if ($header_mobile_id != "none" && $header_mobile_id != "default" && function_exists('enovathemes_addons_header_html')) {
                            enovathemes_addons_header_html($header_mobile_id, 'mobile');
                        } elseif ($header_mobile_id == "default") {
                            equipo_enovathemes_default_header('mobile');
                        }

                        if ($header_desktop_id != "none" && $header_desktop_id != "default" && function_exists('enovathemes_addons_header_html')) {
                            enovathemes_addons_header_html($header_desktop_id, 'desktop');
                        } elseif ($header_desktop_id == "default") {
                            equipo_enovathemes_default_header('desktop');
                        }
                    }
                } else {
                    if ($header_mobile_id != "none" && $header_mobile_id != "default" && function_exists('enovathemes_addons_header_html')) {
                        enovathemes_addons_header_html($header_mobile_id, 'mobile');
                    } elseif ($header_mobile_id == "default") {
                        equipo_enovathemes_default_header('mobile');
                    }

                    if ($header_desktop_id != "none" && $header_desktop_id != "default" && function_exists('enovathemes_addons_header_html')) {
                        enovathemes_addons_header_html($header_desktop_id, 'desktop');
                    } elseif ($header_desktop_id == "default") {
                        equipo_enovathemes_default_header('desktop');
                    }
                }

            ?>

        <?php }
        add_action('equipo_enovathemes_header', 'equipo_enovathemes_header');

    /* Footer
    ---------------*/

        function equipo_enovathemes_footer(){ ?>

            <?php

                global $equipo_enovathemes;

                $footer_id  = (isset($GLOBALS['equipo_enovathemes']['footer-id']) && !empty($GLOBALS['equipo_enovathemes']['footer-id'])) ? $GLOBALS['equipo_enovathemes']['footer-id'] : "default";

                if (class_exists('SitePress') || function_exists('pll_the_languages')){

                    $current_lang = (function_exists('pll_the_languages')) ? pll_current_language() : ICL_LANGUAGE_CODE;

                    // WPML
                    $footer_id_wpml = (isset($GLOBALS['equipo_enovathemes']['footer-id-wpml']) && !empty($GLOBALS['equipo_enovathemes']['footer-id-wpml'])) ? $GLOBALS['equipo_enovathemes']['footer-id-wpml'] : $footer_id;

                    if ($footer_id_wpml != $footer_id && !empty($footer_id_wpml)) {
                        $footer_id_wpml = explode('|', $footer_id_wpml);

                        $lang_footer_obj = array();

                        foreach ($footer_id_wpml as $wpml_lang_footer) {
                            $lang_footer_set = explode(":",$wpml_lang_footer);
                            $lang_footer_obj[$lang_footer_set[0]] = $lang_footer_set[1];
                        }

                        if (array_key_exists($current_lang,$lang_footer_obj)) {
                            $footer_id = $lang_footer_obj[$current_lang];
                        }

                    }
                   
                }

                if (is_page()) {
                    $page_footer_id = get_post_meta( get_the_ID(), 'enovathemes_addons_footer', true );

                    if ($page_footer_id != "inherit" && !empty($page_footer_id)) {
                        $footer_id = $page_footer_id;
                    }
                }

                elseif (is_404()) {

                    $footer_id = 'none';

                }

                if ($footer_id != "none" && $footer_id != "default" && function_exists('enovathemes_addons_footer_html')) {
                    enovathemes_addons_footer_html($footer_id);
                } elseif ($footer_id == "default") {
                    equipo_enovathemes_default_footer();
                }

            ?>

        <?php }
        add_action('equipo_enovathemes_footer', 'equipo_enovathemes_footer');

    /* Title section
    ---------------*/

        function equipo_enovathemes_title_section(){ ?>

            <?php

                global $equipo_enovathemes;

                $slider           = "none";
                $title_section_id = (isset($GLOBALS['equipo_enovathemes']['title-section-id']) && !empty($GLOBALS['equipo_enovathemes']['title-section-id'])) ? $GLOBALS['equipo_enovathemes']['title-section-id'] : "default";
                $etp_title        = "";
                $etp_subtitle     = "";
                $author_text      = esc_html__('Author: %s','equipo');
                $search_text      = esc_html__('Search','equipo');
                $etp_breadcrumbs  = (function_exists('enovathemes_addons_breadcrumbs')) ? enovathemes_addons_breadcrumbs() : "";

                $blog_title_id         = (isset($GLOBALS['equipo_enovathemes']['blog-title']) && !empty($GLOBALS['equipo_enovathemes']['blog-title'])) ? $GLOBALS['equipo_enovathemes']['blog-title'] : "default";
                $blog_title_id_single  = (isset($GLOBALS['equipo_enovathemes']['blog-title-single']) && !empty($GLOBALS['equipo_enovathemes']['blog-title-single'])) ? $GLOBALS['equipo_enovathemes']['blog-title-single'] : "default";
                $blog_title_text       = (isset($GLOBALS['equipo_enovathemes']['blog-title-text']) && $GLOBALS['equipo_enovathemes']['blog-title-text']) ? $GLOBALS['equipo_enovathemes']['blog-title-text'] : 'Blog';
                $blog_subtitle_text    = (isset($GLOBALS['equipo_enovathemes']['blog-subtitle-text']) && $GLOBALS['equipo_enovathemes']['blog-subtitle-text']) ? $GLOBALS['equipo_enovathemes']['blog-subtitle-text'] : '';
               
                $product_title_id        = (isset($GLOBALS['equipo_enovathemes']['product-title']) && !empty($GLOBALS['equipo_enovathemes']['product-title'])) ? $GLOBALS['equipo_enovathemes']['product-title'] : "default";
                $product_title_id_single = (isset($GLOBALS['equipo_enovathemes']['product-title-single']) && !empty($GLOBALS['equipo_enovathemes']['product-title-single'])) ? $GLOBALS['equipo_enovathemes']['product-title-single'] : "default";
                $product_title_text      = (isset($GLOBALS['equipo_enovathemes']['product-title-text']) && $GLOBALS['equipo_enovathemes']['product-title-text']) ? $GLOBALS['equipo_enovathemes']['product-title-text'] : 'Shop';
                $product_subtitle_text   = (isset($GLOBALS['equipo_enovathemes']['product-subtitle-text']) && $GLOBALS['equipo_enovathemes']['product-subtitle-text']) ? $GLOBALS['equipo_enovathemes']['product-subtitle-text'] : '';
                $sel                     = (isset($_GET["sel"]) && !empty($_GET["sel"])) ? urldecode($_GET["sel"]) : false;

                if (class_exists('SitePress') || function_exists('pll_the_languages')){

                    $current_lang = (function_exists('pll_the_languages')) ? pll_current_language() : ICL_LANGUAGE_CODE;

                    // WPML
                    $title_section_id_wpml = (isset($GLOBALS['equipo_enovathemes']['title-section-id-wpml']) && !empty($GLOBALS['equipo_enovathemes']['title-section-id-wpml'])) ? $GLOBALS['equipo_enovathemes']['title-section-id-wpml'] : $title_section_id;

                    if ($title_section_id_wpml != $title_section_id && !empty($title_section_id_wpml)) {
                        $title_section_id_wpml = explode('|', $title_section_id_wpml);

                        $lang_titlesection_obj = array();

                        foreach ($title_section_id_wpml as $wpml_lang_titlesection) {
                            $lang_titlesection_set = explode(":",$wpml_lang_titlesection);
                            $lang_titlesection_obj[$lang_titlesection_set[0]] = $lang_titlesection_set[1];
                        }

                        if (array_key_exists($current_lang,$lang_titlesection_obj)) {
                            $title_section_id = $lang_titlesection_obj[$current_lang];
                        }

                    }
                   
                }

                /* Page
                ---------------*/

                    if (is_page()) {

                        $page_slider                 = get_post_meta( get_the_ID(), 'enovathemes_addons_slider', true );
                        $page_title_section_id       = get_post_meta( get_the_ID(), 'enovathemes_addons_title_section', true );
                        $page_title_section_subtitle = get_post_meta( get_the_ID(), 'enovathemes_addons_subtitle', true );

                        $etp_title     = get_the_title( get_the_ID() );
                        $etp_subtitle  = $page_title_section_subtitle;

                        if (!empty($page_slider)) {
                            $slider = $page_slider;
                        }

                        if ($page_title_section_id != "inherit" && !empty($page_title_section_id)) {
                            $title_section_id = $page_title_section_id;
                        }

                        if (!empty($page_title_section_subtitle)) {
                            $title_section_subtitle = $page_title_section_subtitle;
                        }

                    }

                /* Blog
                ---------------*/

                    elseif (is_home()) {
                        $etp_title     = $blog_title_text;
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif (is_category()) {
                        $etp_title     = single_cat_title('', false);
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif (is_tag()) {
                        $etp_title     = single_tag_title('', false);
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif (is_day()) {
                        $etp_title     = get_the_date('F dS Y');
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif (is_month()) {
                        $etp_title     = get_the_date('Y, F');
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif (is_year()) {
                        $etp_title     = get_the_date('Y');
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif (is_author()) {
                        $userdata      = get_userdata($GLOBALS['author']);
                        $author        = (!empty($userdata->first_name) && !empty($userdata->last_name)) ? esc_attr($userdata->first_name)." ".esc_attr($userdata->last_name) : $userdata->user_login;
                        $etp_title     = sprintf($author_text, $author);
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif ( is_search()) {
                        $etp_title     = $search_text;
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif ( is_tax() && $sel == false) {
                        $etp_title     = single_cat_title('', false);
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id != "inherit") {
                            $title_section_id = $blog_title_id;
                        }
                    }elseif ( is_singular('post') ) {
                        $etp_title     = $blog_title_text;
                        $etp_subtitle  = $blog_subtitle_text;
                        if ($blog_title_id_single != "inherit") {
                            $title_section_id = $blog_title_id_single;
                        }
                    }

                /*  CPT
                -------------------*/

                    elseif (!is_search()  && !is_404()) {                        

                        $post_info = get_post(get_the_ID());

                        if (!is_wp_error($post_info) && is_object($post_info)) {

                            $post_type   = $post_info->post_type;

                            if ($post_type != 'post' && $post_type != 'page') {
                                switch ($post_type) {
                                    case 'product':

                                        $etp_title     = $product_title_text;
                                        $etp_subtitle  = $product_subtitle_text;


                                        if ( is_singular('product') ) {
                                            if ($product_title_id_single != "inherit") {
                                                $title_section_id = $product_title_id_single;
                                            }
                                        } else {

                                            if ($product_title_id != "inherit") {
                                                $title_section_id = $product_title_id;
                                            }
                                        }
                                        break;
                                    default :
                                        $etp_title     = ucfirst(get_post_type( get_the_ID() ));
                                        $etp_subtitle  = '';
                                        if ($blog_title_id != "inherit") {
                                            $title_section_id = $blog_title_id;
                                        }
                                        break;
                                }

                                if ( is_tax() &&  $sel == false) {
                                    $etp_title = single_cat_title('', false);
                                }
                            }

                        }

                    }

                    elseif (is_404()) {
                        $title_section_id = "none";
                    }
            ?>

            <?php if(shortcode_exists("rev_slider") && $slider != "none" && !empty($slider)): ?>
                <?php echo(do_shortcode('[rev_slider '.$slider.']')); ?>
            <?php else: ?>

                <?php

                    if ($title_section_id != "none" && $title_section_id != "default" && function_exists('enovathemes_addons_title_section_html')) {
                        enovathemes_addons_title_section_html($title_section_id, $etp_title, $etp_subtitle, $etp_breadcrumbs);
                    } elseif ($title_section_id == "default") {
                        equipo_enovathemes_default_title_section($etp_title, $etp_subtitle, $etp_breadcrumbs);
                    }

                ?>

            <?php endif ?>

        <?php }
        add_action('equipo_enovathemes_title_section', 'equipo_enovathemes_title_section');

    /* Move top
    ---------------*/

        function equipo_enovathemes_move_top(){ ?>
            <?php global $equipo_enovathemes; ?>
            <?php if ((isset($GLOBALS['equipo_enovathemes']['mtt']) && $GLOBALS['equipo_enovathemes']['mtt'] == 1)): ?>
                <?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['arrow'])): ?>
                    <a id="to-top" href="#wrap"><?php echo et_get_theme_icon()['arrow']; ?></a>
                <?php endif ?>
            <?php endif ?>
        <?php }
        add_action('equipo_enovathemes_move_top', 'equipo_enovathemes_move_top');

        function equipo_enovathemes_custom_cursor(){ ?>
            <?php 
                global $equipo_enovathemes;
                $main_color = (isset($GLOBALS['equipo_enovathemes']['main-color']) && $GLOBALS['equipo_enovathemes']['main-color']) ? $GLOBALS['equipo_enovathemes']['main-color'] : '#ffb700';
            ?>
            <?php if ((isset($GLOBALS['equipo_enovathemes']['cursor']) && $GLOBALS['equipo_enovathemes']['cursor'] == 1)): ?>
                <div class="cursor" data-color="<?php echo esc_attr($main_color); ?>"></div>
                <div class="cursor-follower"></div>
            <?php endif ?>
        <?php }
        add_action('equipo_enovathemes_custom_cursor', 'equipo_enovathemes_custom_cursor');

    /* Page comments
    ---------------*/

        function equipo_enovathemes_page_comments(){
            if (class_exists('Woocommerce')){

                $add_comment_template = "true";

                $wishlistpage = "false";
                if (defined('YITH_WCWL')) {
                    $wishlistpage = (is_page(get_option('yith_wcwl_wishlist_page_id'))) ? "true" : "false";
                }

                if (is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url() || $wishlistpage == "true") {
                    $add_comment_template = "false";
                }

                if ($add_comment_template == "true") {
                    comments_template();
                }

            } else {

                $add_comment_template = "true";

                if ($add_comment_template == "true" &&  comments_open( get_the_ID() )) {
                    comments_template();
                }

            }
        }
        add_action('equipo_enovathemes_after_page_body', 'equipo_enovathemes_page_comments');

    /* Page container after/before
    ---------------*/

        function equipo_enovathemes_woocommerce_page_container_before(){
            if (class_exists('Woocommerce')){

                $wishlistpage = "false";
                if (defined('YITH_WCWL')) {
                    $wishlistpage = (is_page(get_option('yith_wcwl_wishlist_page_id'))) ? "true" : "false";
                }

                if (is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url() || $wishlistpage == "true") {
                    echo '<div class="product-layout product-container-boxed">';
                }

            }
        }
        add_action('equipo_enovathemes_before_page_container', 'equipo_enovathemes_woocommerce_page_container_before');


        function equipo_enovathemes_woocommerce_page_container_after(){
            if (class_exists('Woocommerce')){

                $wishlistpage = "false";
                if (defined('YITH_WCWL')) {
                    $wishlistpage = (is_page(get_option('yith_wcwl_wishlist_page_id'))) ? "true" : "false";
                }

                if (is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url() || $wishlistpage == "true") {
                    echo '</div>';
                }

            }
        }
        add_action('equipo_enovathemes_after_page_container', 'equipo_enovathemes_woocommerce_page_container_after');

/* Menu
---------------*/

    function equipo_enovathemes_register_menu() {

        register_nav_menus(
            array(
              'header-menu' => esc_html__( 'Header menu', 'equipo' ),
            )
        );

    }
    add_action( 'after_setup_theme', 'equipo_enovathemes_register_menu' );

/* Widget areas
---------------*/

    add_action( 'widgets_init', 'equipo_enovathemes_register_sidebars' );
    function equipo_enovathemes_register_sidebars() {

        if ( function_exists( 'register_sidebar' ) ){

            global $equipo_enovathemes;

            register_sidebar(
                array (
                'name'          => esc_html__( 'Blog widgets', 'equipo'),
                'id'            => 'blog-widgets',
                'description'   => esc_html__('Add your blog widgets here. This is the main blog widget area. It is visible only in blog archive pages.', 'equipo'),
                'class'         => 'blog-widgets',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="widget_title">',
                'after_title'   => '</h5>' )
            );

            register_sidebar(
                array (
                'name'          => esc_html__( 'Blog single post page widgets', 'equipo'),
                'id'            => 'blog-single-widgets',
                'description'   => esc_html__('Add your blog single post widgets here. This widget area is only visible in the single post page.', 'equipo'),
                'class'         => 'blog-single-widgets',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="widget_title">',
                'after_title'   => '</h5>' )
            );

            register_sidebar(
                array (
                'name'          => esc_html__( 'Blog after single post widgets', 'equipo'),
                'id'            => 'blog-after-single-widgets',
                'description'   => esc_html__('This widget area is only visible after the single post, before comments.', 'equipo'),
                'class'         => 'blog-after-single-widgets',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h5 class="widget_title">',
                'after_title'   => '</h5>' )
            );

            if (class_exists("Woocommerce")) {

                register_sidebar(
                    array (
                    'name'          => esc_html__( 'Shop widgets', 'equipo'),
                    'id'            => 'shop-widgets',
                    'description'   => esc_html__('Add your shop widgets here. This widget area is visible in shop arhive pages only.', 'equipo'),
                    'class'         => 'shop-widgets',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h5 class="widget_title">',
                    'after_title'   => '</h5>' )
                );

                register_sidebar(
                    array (
                    'name'          => esc_html__( 'Shop single product page widgets', 'equipo'),
                    'id'            => 'shop-single-widgets',
                    'description'   => esc_html__('Add your shop single product widgets here. This widget area is only visible in single product page.', 'equipo'),
                    'class'         => 'shop-single-widgets',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h5 class="widget_title">',
                    'after_title'   => '</h5>' )
                );

                register_sidebar(
                    array (
                    'name'          => esc_html__( 'Shop before products widget area', 'equipo'),
                    'id'            => 'shop-top-widgets',
                    'description'   => esc_html__('Add your shop widgets here. This widget area is visible in shop arhive pages only. And appears before products list', 'equipo'),
                    'class'         => 'shop-single-widgets',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h5 class="widget_title">',
                    'after_title'   => '</h5>' )
                );

                register_sidebar(
                    array (
                    'name'          => esc_html__( 'Shop after products widget area', 'equipo'),
                    'id'            => 'shop-bottom-widgets',
                    'description'   => esc_html__('Add your shop widgets here. This widget area is visible in shop arhive pages only. And appears after products list', 'equipo'),
                    'class'         => 'shop-single-widgets',
                    'before_widget' => '<div id="%1$s" class="widget %2$s">',
                    'after_widget'  => '</div>',
                    'before_title'  => '<h5 class="widget_title">',
                    'after_title'   => '</h5>' )
                );

            }
        }
    }

/* Woo Commerce
---------------*/

    if (class_exists('Woocommerce')){

        add_action('woocommerce_before_shop_loop','equipo_enovathemes_woocommerce_banner_area_top',45);
        function equipo_enovathemes_woocommerce_banner_area_top(){ ?>
            <?php get_sidebar('shop-top'); ?>
        <?php }

        add_action('woocommerce_after_shop_loop','equipo_enovathemes_woocommerce_banner_area_bottom',45);
        function equipo_enovathemes_woocommerce_banner_area_bottom(){ ?>
            <?php get_sidebar('shop-bottom'); ?>
        <?php }

        add_action( 'woocommerce_before_shop_loop', 'equipo_enovathemes_filter_toggle', 22 );
        function equipo_enovathemes_filter_toggle(){

            global $equipo_enovathemes;
            $product_sidebar = (isset($GLOBALS['equipo_enovathemes']['product-sidebar']) && $GLOBALS['equipo_enovathemes']['product-sidebar']) ? $GLOBALS['equipo_enovathemes']['product-sidebar'] : "none";

            if (is_active_sidebar('shop-widgets') && $product_sidebar  == "none" && !defined('ENOVATHEMES_ADDONS')) {
                $product_sidebar = 'left';
            }

            ?>
            <?php if ($product_sidebar != "none"): ?>
                <?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['filter'])): ?>
                    <a href="#" title="<?php echo esc_attr__("Toggle sidebar","equipo"); ?>" class="content-sidebar-toggle"><?php echo et_get_theme_icon()['filter']; ?></a>
                <?php endif ?>
            <?php endif ?>
        <?php }

        /* Show mini cart on cart and checkout
        ---------------*/

            add_filter( 'woocommerce_widget_cart_is_hidden', 'equipo_enovathemes_always_show_cart', 40, 0 );
            function equipo_enovathemes_always_show_cart() {
                return false;
            }

        /* Remove default styling
        ---------------*/

            add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

        /* Woocommerce gallery sypport
        ---------------*/

            add_action( 'after_setup_theme', 'equipo_enovathemes_setup' );
            function equipo_enovathemes_setup() {
                add_theme_support( 'wc-product-gallery-zoom' );
                add_theme_support( 'wc-product-gallery-lightbox' );
                add_theme_support( 'wc-product-gallery-slider' );
            }

        /* Add to cart
        ---------------*/

            add_filter('woocommerce_add_to_cart_fragments', 'equipo_enovathemes_add_to_cart');
            function equipo_enovathemes_add_to_cart( $fragments ) {

                global $woocommerce;

                ob_start(); ?>

                <?php if ($GLOBALS['woocommerce']->cart->cart_contents_count): ?>
                    <span class="cart-contents">
                        <span class="cart-total"><?php echo equipo_enovathemes_output_html($GLOBALS['woocommerce']->cart->get_cart_total()); ?></span>
                        <span class="cart-info"><?php echo equipo_enovathemes_output_html($GLOBALS['woocommerce']->cart->cart_contents_count); ?></span>
                    </span>
                <?php else: ?>
                    <span class="cart-contents">
                        <span class="cart-total"><span>0</span></span>
                        <span class="cart-info">0</span>
                    </span>
                <?php endif; ?>

                <?php

                $fragments['span.cart-contents'] = ob_get_clean();
                return $fragments;

            }

        /* Shop loop
        ---------------*/

            remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
            remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
            remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
            remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

            /* Shop title
            ---------------*/

                add_filter( 'woocommerce_show_page_title' , 'equipo_enovathemes_woo_hide_page_title' );
                function equipo_enovathemes_woo_hide_page_title() {
                    return false;
                }

            /* Shop filter
            ---------------*/

                add_action( 'woocommerce_before_shop_loop', 'equipo_enovathemes_before_shop_loop_open', 15 );
                function equipo_enovathemes_before_shop_loop_open() {?><div class="woocommerce-before-shop-loop et-clearfix"><?php add_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );add_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );}

                add_action( 'woocommerce_before_shop_loop', 'equipo_enovathemes_before_shop_loop_close', 40 );
                function equipo_enovathemes_before_shop_loop_close() {?>
                    </div>
                <?php }

                add_action( 'woocommerce_before_shop_loop', 'equipo_enovathemes_before_shop_loop_filter_breadcrumbs', 45 );
                function equipo_enovathemes_before_shop_loop_filter_breadcrumbs() {?>
                    <?php if (isset($_GET["sel"]) && !empty($_GET["sel"]) && $_GET["sel"] == 'true' && function_exists('filter_breadcrumbs_output')) {

                        $filter_breadcrumbs = array();

                        foreach ($_GET as $key => $value) {
                            if ($key != 'sel') {
                                $taxonomy = ($key == 'product_cat') ? $key : 'pa_'.substr($key, 7);
                                $label    = ($key == 'product_cat') ? esc_html__('Category','equipo') : ucfirst(substr($key, 7));
                                $label    = str_replace('-', ' ', $label);
                                $term     = get_term_by('slug',$value,$taxonomy);
                                if ($term) {
                                    $filter_breadcrumbs[] = '<span class="breadcrumbs-item">'.$label.': '.$term->name.'</span>';
                                }
                            }
                        }

                        if (!empty($filter_breadcrumbs)) {
                            echo filter_breadcrumbs_output($filter_breadcrumbs);
                        }  

                    } ?>
                <?php }

            /* Shop loop item
            ---------------*/

                remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
                remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

                add_action( 'woocommerce_before_shop_loop_item', 'equipo_enovathemes_loop_product_inner_open', 10 );
                function equipo_enovathemes_loop_product_inner_open() { ?>

                    <div class="post-inner et-item-inner et-clearfix">

                        <?php if(get_option( 'woocommerce_enable_ajax_add_to_cart' ) === "yes"){ ?>
                            <div class="ajax-add-to-cart-loading">
                                <svg viewBox="0 0 56 56"><circle class="loader-path" cx="28" cy="28" r="20" /></svg>
                                <?php if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['tick'])): ?>
                                    <?php echo et_get_theme_icon()['tick']; ?>
                                <?php endif; ?>
                            </div>
                        <?php } ?>

                <?php }

                    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
                    remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

                    add_action( 'woocommerce_before_shop_loop_item_title', 'equipo_enovathemes_loop_product_thumbnail_action', 10 );
                    function equipo_enovathemes_loop_product_thumbnail_action() { ?>

                        <?php
                            global $equipo_enovathemes;

                            $product_post_layout  = (isset($GLOBALS['equipo_enovathemes']['product-post-layout']) && $GLOBALS['equipo_enovathemes']['product-post-layout']) ? $GLOBALS['equipo_enovathemes']['product-post-layout'] : "grid";

                            echo equipo_enovathemes_loop_product_thumbnail($product_post_layout);
                        ?>

                    <?php }

                    remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
                    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
                    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
                    remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );

                    add_action( 'woocommerce_shop_loop_item_title', 'equipo_enovathemes_loop_product_title_action', 10 );
                    function equipo_enovathemes_loop_product_title_action() { ?>

                        <?php
                            global $equipo_enovathemes;
                            $product_post_layout   = (isset($GLOBALS['equipo_enovathemes']['product-post-layout']) && $GLOBALS['equipo_enovathemes']['product-post-layout']) ? $GLOBALS['equipo_enovathemes']['product-post-layout'] : "grid";
                            echo equipo_enovathemes_loop_product_title($product_post_layout);
                        ?>

                    <?php }

                add_action( 'woocommerce_after_shop_loop_item', 'equipo_enovathemes_loop_product_inner_close_action', 20 );
                function equipo_enovathemes_loop_product_inner_close_action() { ?>
                    <?php 
                        global $equipo_enovathemes;
                        $product_post_layout = (isset($GLOBALS['equipo_enovathemes']['product-post-layout']) && $GLOBALS['equipo_enovathemes']['product-post-layout']) ? $GLOBALS['equipo_enovathemes']['product-post-layout'] : "grid";
                        echo equipo_enovathemes_loop_product_inner_close($product_post_layout);
                    ?>

                    </div>
                <?php }

            /* Shop navigation
            ---------------*/

                remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
                add_action( 'woocommerce_after_shop_loop', 'equipo_enovathemes_woocommerce_pagination', 10 );
                function equipo_enovathemes_woocommerce_pagination() {

                    global $equipo_enovathemes;

                    $product_navigation = (isset($GLOBALS['equipo_enovathemes']['product-navigation']) && $GLOBALS['equipo_enovathemes']['product-navigation']) ? $GLOBALS['equipo_enovathemes']['product-navigation'] : "pagination";

                    if (function_exists('equipo_enovathemes_navigation')) {
                        echo equipo_enovathemes_navigation('product',$product_navigation);
                    } else {
                        echo equipo_enovathemes_post_nav_num('product');
                    }
                }

        /* Category
        ---------------*/

            function equipo_enovathemes_category_class( $classes, $class, $category= null ){
                $classes[] = 'et-item post';
                return $classes;
            }
            add_filter( 'product_cat_class', 'equipo_enovathemes_category_class', 10, 3 );

            remove_action( 'woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10);
            remove_action( 'woocommerce_after_subcategory', 'woocommerce_template_loop_category_link_close', 10);

            remove_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10);
            add_action( 'woocommerce_shop_loop_subcategory_title', 'woocommerce_template_loop_category_title', 10);
            if ( ! function_exists( 'woocommerce_template_loop_category_title' ) ) {
                function woocommerce_template_loop_category_title( $category ) { ?>
                    <h4 class="woocommerce-loop-category__title post-title post-title">
                        <a href="<?php echo esc_url(get_term_link( $category->slug, 'product_cat' )); ?>" title="<?php echo esc_attr__("View ", 'equipo').' '.esc_attr( $category->name ); ?>">
                        <?php
                            echo esc_attr($category->name);
                            if ( $category->count > 0 ){
                                echo apply_filters( 'woocommerce_subcategory_count_html', ' <mark class="count">(' . $category->count . ')</mark>', $category );
                            }
                        ?>
                        </a>
                    </h4>

                <?php }
            }

            function equipo_enovathemes_before_subcategory($category){ ?>
                <div class="post-inner et-item-inner et-clearfix">

                    <?php

                        $image_class = array();
                        $image_class[] = 'post-image';
                        $image_class[] = 'post-media';
                        $image_class[] = 'overlay-hover';

                    ?>

                    <div class="<?php echo implode(' ', $image_class); ?>">
                        <a href="<?php echo esc_url(get_term_link( $category->slug, 'product_cat' )); ?>" title="<?php echo esc_attr__("View ", 'equipo').' '.esc_attr( $category->name ); ?>">
                            <div class="image-container">
            <?php }
            add_filter( 'woocommerce_before_subcategory', 'equipo_enovathemes_before_subcategory', 10, 2);

            remove_action( 'woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10);
            add_action( 'woocommerce_before_subcategory_title', 'equipo_enovathemes_subcategory_thumbnail', 10);
            function equipo_enovathemes_subcategory_thumbnail($category){

                global $equipo_enovathemes;

                $product_image_full = (isset($GLOBALS['equipo_enovathemes']['product-image-full']) && $GLOBALS['equipo_enovathemes']['product-image-full'] == 1) ? "true" : "false";

                $thumb_size = ($product_image_full == "true") ? 'full': 'woocommerce_thumbnail';

                $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true  );

                if ($thumbnail_id) {
                    echo equipo_enovathemes_build_post_media('list',$thumb_size,$thumbnail_id,'product');
                } else {
                    $image = wc_placeholder_img_src();
                    if ( $image ) {
                        $image = str_replace( ' ', '%20', $image );
                        echo '<img src="' . esc_url( $image ) . '" />';
                    }
                }
                
            }

            add_filter( 'woocommerce_before_subcategory_title', 'equipo_enovathemes_before_subcategory_title', 10, 2 );
            function equipo_enovathemes_before_subcategory_title(){ ?>
                            </div>
                        </a>
                    </div>
                    <div class="post-body et-clearfix">
                        <div class="post-body-inner">
            <?php }

            add_filter( 'woocommerce_after_subcategory_title', 'equipo_enovathemes_after_subcategory_title', 10, 2 );
            function equipo_enovathemes_after_subcategory_title(){ ?>
                        </div>
                    </div>
            <?php }

            function equipo_enovathemes_after_subcategory(){ ?>
                </div>
            <?php }
            add_filter( 'woocommerce_after_subcategory', 'equipo_enovathemes_after_subcategory', 10, 2 );

        /* Single product
        ---------------*/

            add_action('woocommerce_single_product_summary','equipo_enovathemes_wishlist_toggle_single',35);
            function equipo_enovathemes_wishlist_toggle_single(){

                global $product, $enovathemes_addons;

                $wishlist = (isset($GLOBALS['equipo_enovathemes']['wishlist']) && $GLOBALS['equipo_enovathemes']['wishlist'] == 1) ? "true" : "false";
                $compare  = (isset($GLOBALS['equipo_enovathemes']['compare']) && $GLOBALS['equipo_enovathemes']['compare'] == 1) ? "true" : "false";

                if($wishlist == "true"){
                    $product_wishlist_page = (isset($GLOBALS['equipo_enovathemes']['product-wishlist-page']) && $GLOBALS['equipo_enovathemes']['product-wishlist-page']) ? $GLOBALS['equipo_enovathemes']['product-wishlist-page'] : "#";
                    $wishlist_count = '<span class="wishlist-count">'.get_post_meta($product->get_id(), 'enovathemes_addons_wishlist', true ).'</span>';
                    if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['wishlist'])){
                        echo '<span class="wishlist-title">'.esc_attr__("Add to wishlist","equipo").'</span><a class="wishlist-toggle" data-product="'.esc_attr($product->get_id()).'" href="'.esc_url($product_wishlist_page).'" title="'.esc_attr__("Add to wishlist","equipo").'">'.et_get_theme_icon()['wishlist'].'</a>'.$wishlist_count;
                    }
                }
                if($compare == "true"){
                    $product_compare_page  = (isset($GLOBALS['equipo_enovathemes']['product-compare-page']) && $GLOBALS['equipo_enovathemes']['product-compare-page']) ? $GLOBALS['equipo_enovathemes']['product-compare-page'] : "#";
                    if (function_exists('et_get_theme_icon') && et_get_theme_icon() && isset(et_get_theme_icon()['compare'])){
                        echo '<span class="compare-title">'.esc_attr__("Add to compare","equipo").'</span><a class="compare-toggle" data-product="'.esc_attr($product->get_id()).'" href="'.esc_url($product_compare_page).'" title="'.esc_attr__("Add to compare","equipo").'">'.et_get_theme_icon()['compare'].'</a>';
                    }
                }
                
            }

            add_action( 'woocommerce_before_single_product_summary', 'equipo_enovathemes_single_product_wrapper_open', 5 );
            function equipo_enovathemes_single_product_wrapper_open() {?>
                <div class="single-product-wrapper et-clearfix">
            <?php }

                remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );

                add_action( 'woocommerce_single_product_summary', 'equipo_enovathemes_single_product_before_title', 2 );
                function equipo_enovathemes_single_product_before_title(){ ?>
                    <div class="single-title-wrapper et-clearfix">
                <?php }

                add_action( 'woocommerce_single_product_summary', 'equipo_enovathemes_single_product_after_title', 6 );
                function equipo_enovathemes_single_product_after_title(){ ?>
                    </div>
                <?php }

                add_action('init', 'equipo_enovathemes_single_product');
                function equipo_enovathemes_single_product(){

                    global $equipo_enovathemes;

                    $product_single_social  = (isset($GLOBALS['equipo_enovathemes']['product-single-social']) && $GLOBALS['equipo_enovathemes']['product-single-social'] == 1) ? "true" : "false";

                    if ($product_single_social == "true") {
                        add_filter( 'woocommerce_product_meta_end', 'equipo_enovathemes_woocommerce_product_meta_end', 5, 2 );
                        function equipo_enovathemes_woocommerce_product_meta_end(){ ?>
                            <?php echo enovathemes_addons_post_social_share('post-social-share'); ?>
                        <?php }
                    }

                }

                add_action( 'woocommerce_after_add_to_cart_button', 'equipo_enovathemes_buy_now_button');
                function equipo_enovathemes_buy_now_button() { 

                    $product_quick_buy = (isset($GLOBALS['equipo_enovathemes']['product-quick-buy']) && $GLOBALS['equipo_enovathemes']['product-quick-buy'] == 1) ? "true" : "false";


                    if ($product_quick_buy == "true") {
                        global $product;

                        if ('instock' == $product->get_stock_status()) {
                            echo '<a href="' . esc_url(wc_get_checkout_url()) . '?add-to-cart=' . esc_attr($product->get_id()) . '" class="button single_add_to_cart_button buy-now-button">'.esc_html__("Buy now","equipo").'</a>';
                        }
                    }
                }

            add_action( 'woocommerce_after_single_product_summary', 'equipo_enovathemes_single_product_wrapper_close', 0 );
            function equipo_enovathemes_single_product_wrapper_close() {?>
                </div>
            <?php }

            add_action( 'woocommerce_after_single_product_summary', 'equipo_enovathemes_single_product_fbt', 5 );
            function equipo_enovathemes_single_product_fbt() {?>
                <?php

                    global $equipo_enovathemes;

                    $product_title_excerpt = (isset($GLOBALS['equipo_enovathemes']['product-title-excerpt']) && $GLOBALS['equipo_enovathemes']['product-title-excerpt']) ? $GLOBALS['equipo_enovathemes']['product-title-excerpt'] : "22";
                    $product_image_full    = (isset($GLOBALS['equipo_enovathemes']['product-image-full']) && $GLOBALS['equipo_enovathemes']['product-image-full'] == 1) ? "true" : "false";

                    $fbt_ids = get_post_meta( get_the_ID(), 'fbt_ids', true );

                    if (!empty($fbt_ids)) {

                        $currency           = get_woocommerce_currency_symbol();
                        $currency_pos       = get_option('woocommerce_currency_pos');
                        $price_num_decimals = get_option('woocommerce_price_num_decimals');

                        $column = count($fbt_ids);

                        $style  = '';

                        $class   = array();
                        $class[] = 'loop-posts';
                        $class[] = 'loop-products';
                        $class[] = 'fbt';

                        if ($column >= 6) {
                            $column = intval($column/2);
                        }

                        if ($column == 4) {
                            $column = 2;
                        }

                        if ($column > 4) {
                            $class[] = 'grid';
                        } else {
                            $class[] = 'default';
                        }

                        if ($column > 0) {
                            $style = 'grid-template-columns: repeat('.$column.', '.$column.'fr);';
                        }

                        $output = '<div class="fbt-products post-layout product-layout medium grid gap-false layout-sidebar-none">';

                            $output .= '<h4>'.esc_html__('Frequently bought together','equipo').'</h4>';

                            $output .= '<div class="fbt-products-inner">';

                                $checkbox_output = '<ul class="fbt-list">';
                                $all_prices      = array();

                                $output .= '<ul data-column="'.esc_attr($column).'" class="'.implode(' ', $class).'" style="'. $style.'">';
                                    foreach ( $fbt_ids as $fbt_id ) {
                                        $product = wc_get_product( $fbt_id );
                                        if ( is_object( $product ) && $product->is_in_stock()  ) {

                                            if($product->is_type( 'variable' ))
                                            {
                                                $price      = $product->get_variation_regular_price();
                                                $price_sale = $product->get_variation_price();
                                            } else {
                                                $price       = $product->get_regular_price();
                                                $price_sale  = $product->get_sale_price();
                                            }

                                            $final_price = ($price_sale) ? $price_sale : $price;

                                            if (!empty($final_price)) {

                                                $final_price = round($final_price,$price_num_decimals);

                                                array_push($all_prices, $final_price);
                                            }

                                            $checkbox_output .= '<li data-product="'.esc_attr($product->get_id()).'" data-price="'.esc_attr($final_price).'" class="chosen">'.$product->get_name().'<div class="product-price">'.$product->get_price_html().'</div></li>';


                                            $output .= '<li class="'.join( ' ', get_post_class('post')).'" id="product-'.esc_attr($product->get_id()).'">';

                                                $output .= '<div class="post-inner et-item-inner et-clearfix">';

                                                    $thumb_size = ($product_image_full == "true") ? 'full': 'woocommerce_thumbnail';

                                                    $image_class = array();
                                                    $image_class[] = 'post-image';
                                                    $image_class[] = 'post-media';
                                                    $image_class[] = 'overlay-hover';

                                                    $output .= '<div class="'.implode(' ', $image_class).'">';

                                                        $output .= '<a href="'.get_permalink( $product->get_id() ).'" >';
                                                            $output .='<div class="image-container">';
                                                                $output .= equipo_enovathemes_build_post_media('list',$thumb_size,$product->get_image_id(),'product');
                                                            $output .='</div>';
                                                        $output .= '</a>';

                                                    $output .= '</div>';

                                                    $output .= '<div class="post-body et-clearfix">';
                                                        $output .= '<div class="post-body-inner">';
                                                            $output .= '<h4 class="post-title et-clearfix">';
                                                                $output .= '<a href="'.get_permalink( $product->get_id() ).'" title="'.esc_attr__("Read more avbout", "equipo").' '.$product->get_name().'">'.mb_strimwidth($product->get_name(),0,$product_title_excerpt,'').'</a>';
                                                            $output .= '</h4>';

                                                            if(get_option( 'woocommerce_enable_reviews' ) === "yes"){

                                                                $output .= '<div class="star-rating-wrap">';
                                                                    if ($rating = $product->get_average_rating()) {
                                                                        $output .= wc_get_rating_html( $product->get_average_rating() );
                                                                    } else {
                                                                        $output .= '<div class="star-rating empty"></div>';
                                                                    }
                                                                $output .= '</div>';

                                                            }

                                                            if ( $price_html = $product->get_price_html() ){
                                                                $output .= '<div class="product-price">';
                                                                    $output .= '<span class="price">'.$price_html.'</span>';
                                                                $output .= '</div>';
                                                            }

                                                            $args = array();

                                                            $defaults = array(
                                                                'quantity'   => 1,
                                                                'class'      => implode(
                                                                    ' ',
                                                                    array_filter(
                                                                        array(
                                                                            'button',
                                                                            'product_type_' . $product->get_type(),
                                                                            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                                                                            $product->supports( 'ajax_add_to_cart' ) && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
                                                                        )
                                                                    )
                                                                ),
                                                                'attributes' => array(
                                                                    'data-product_id'  => $product->get_id(),
                                                                    'data-product_sku' => $product->get_sku(),
                                                                    'aria-label'       => $product->add_to_cart_description(),
                                                                    'rel'              => 'nofollow',
                                                                ),
                                                            );

                                                            $args = apply_filters( 'woocommerce_loop_add_to_cart_args', wp_parse_args( $args, $defaults ), $product );

                                                            if ( isset( $args['attributes']['aria-label'] ) ) {
                                                                $args['attributes']['aria-label'] = wp_strip_all_tags( $args['attributes']['aria-label'] );
                                                            }

                                                            $output .= apply_filters(
                                                                'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
                                                                sprintf(
                                                                    '<a href="%s" data-quantity="%s" class="%s" %s>%s</a>',
                                                                    esc_url( $product->add_to_cart_url() ),
                                                                    esc_attr( isset( $args['quantity'] ) ? $args['quantity'] : 1 ),
                                                                    esc_attr( isset( $args['class'] ) ? $args['class'] : 'button' ),
                                                                    isset( $args['attributes'] ) ? wc_implode_html_attributes( $args['attributes'] ) : '',
                                                                    esc_html( $product->add_to_cart_text() )
                                                                ),
                                                                $product,
                                                                $args
                                                            );

                                                        $output .= '</div>';
                                                    $output .= '</div>';

                                                $output .= '</div>';

                                            $output .= '</li>';
                                        }
                                    }
                                $output .= '</ul>';

                                $checkbox_output .= '</ul>';

                                $total_price = '<span>'.array_sum($all_prices).'</span>';

                                switch ($currency_pos) {
                                    case 'left':
                                        $total_price = $currency.$total_price;
                                        break;
                                    case 'left_space':
                                        $total_price = $currency.' '.$total_price;
                                        break;
                                    case 'right':
                                        $total_price = $total_price.$currency;
                                        break;
                                    case 'right_space':
                                        $total_price = $total_price.' '.$currency;
                                        break;
                                }

                                $output .= '<div class="fbt-info et-clearfix">';
                                    $output .= $checkbox_output;
                                    $output .= '<div class="selected">';
                                        $output .= '<div>'.esc_html__('Buy selected for','equipo').'</div>';
                                        $output .= '<div class="total-price">'.$total_price.'</div>'; 
                                        $output .= '<a class="add_to_cart_all et-button medium button" href="#">'.esc_html__('Add all to cart','equipo').'</a>';
                                    $output .= '</div>';
                                $output .= '</div>';

                            $output .= '</div>';

                        $output .= '</div>';
                        echo equipo_enovathemes_output_html($output);
                    }


                ?>
            <?php }

            add_action( 'woocommerce_after_single_product_summary', 'equipo_enovathemes_single_product_compare', 10 );
            function equipo_enovathemes_single_product_compare() {?>

                <?php

                    global $enovathemes_addons;

                    $compare_ids = get_post_meta( get_the_ID(), 'compare_ids', true );
                    $product_single_sidebar = (isset($GLOBALS['equipo_enovathemes']['product-single-sidebar']) && $GLOBALS['equipo_enovathemes']['product-single-sidebar']) ? $GLOBALS['equipo_enovathemes']['product-single-sidebar'] : "none";
                ?>

                <?php if ($compare_ids): ?>
                    <?php
                        array_unshift($compare_ids, get_the_ID());
                        $compare_ids = implode(',', $compare_ids);
                    ?>
                    <div class="compare-products">
                        <h4><?php echo esc_html__('Compare with similar items','equipo'); ?></h4>
                        <div class="compare-table-wrapper"><div class="compare-table-single cbt" data-sidebar="<?php echo esc_attr($product_single_sidebar); ?>"><?php compare_fetch($compare_ids); ?></div></div>
                    </div>
                <?php endif ?>

            <?php }

            remove_action( 'woocommerce_review_before', 'woocommerce_review_display_gravatar', 10 );
            add_action( 'woocommerce_review_before', 'equipo_enovathemes_woocommerce_review_display_gravatar', 10 );
            function equipo_enovathemes_woocommerce_review_display_gravatar( $comment ) {
                echo get_avatar( $comment, apply_filters( 'woocommerce_review_gravatar_size', '72' ), '' );
            }

            add_action( 'woocommerce_after_single_product', 'equipo_enovathemes_woocommerce_after_single_product');
            function equipo_enovathemes_woocommerce_after_single_product() {?>
                <div class="et-clearfix">
                    <?php equipo_enovathemes_post_nav('product',get_the_ID()); ?>
                </div>
            <?php }

            add_filter( 'woocommerce_output_related_products_args', 'equipo_enovathemes_related_products_args', 20 );
            function equipo_enovathemes_related_products_args( $args ) {
                $args['posts_per_page'] = 5;
                return $args;
            }

            function equipo_enovathemes_single_product_sale_flash() {
                global $product;
                if($product->is_on_sale()) {
                    if($product->is_type( 'variable' ) )
                    {

                        $variations = $product->get_available_variations();

                        $all_variation_prices = array();

                        foreach ($variations as $variation) {
                            $variation_prices = array();
                            $variation_prices['regular_price'] = $variation['display_regular_price'];
                            $variation_prices['sale_price']    = $variation['display_price'];

                            array_push($all_variation_prices, $variation_prices);
                        }

                        $all_regular_prices = array();
                        $all_sale_prices    = array();

                        foreach ($all_variation_prices as $variation_price) {
                            array_push($all_regular_prices, $variation_price['regular_price']);
                            array_push($all_sale_prices, $variation_price['sale_price']);
                        }

                        $regular_price = array_sum($all_regular_prices)/count($all_regular_prices);
                        $sale_price    = array_sum($all_sale_prices)/count($all_sale_prices);

                    } else {
                        $regular_price = $product->get_regular_price();
                        $sale_price    = $product->get_sale_price();
                    }

                    if (!$product->is_type( 'grouped' )) {

                        if (!empty($regular_price)) {

                            $currency           = get_woocommerce_currency_symbol();
                            $currency_pos       = get_option('woocommerce_currency_pos');
                            $price_num_decimals = get_option('woocommerce_price_num_decimals');

                            $regular_price = round(($regular_price - $sale_price),$price_num_decimals);

                            switch ($currency_pos) {
                                case 'left':
                                    $off = $currency.$regular_price;
                                    break;
                                case 'left_space':
                                    $off = $currency.' '.$regular_price;
                                    break;
                                case 'right':
                                    $off = $regular_price.$currency;
                                    break;
                                case 'right_space':
                                    $off = $regular_price.' '.$currency;
                                    break;
                            }

                            echo '<span class="onsale"><span class="onsale-inner">' .esc_html__("Save","equipo").' '.$off . '</span></span>';
                        }

                    }
                }
            }

            add_action('init','equipo_enovathemes_single_product_init');
            function equipo_enovathemes_single_product_init(){

                global $enovathemes_addons;

                $product_single_post_layout = (isset($GLOBALS['equipo_enovathemes']['product-single-post-layout']) && !empty($GLOBALS['equipo_enovathemes']['product-single-post-layout'])) ? $GLOBALS['equipo_enovathemes']['product-single-post-layout'] : "single-product-tabs-under";
                if ('single-product-thumbnails-left' == $product_single_post_layout) {
                    add_filter( 'woocommerce_single_product_summary', 'equipo_enovathemes_single_product_sale_flash', 5);
                } else {
                    add_filter( 'woocommerce_before_single_product_summary', 'equipo_enovathemes_single_product_sale_flash', 15);
                }
            }

        /* Cart
        ---------------*/

            remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' );
            add_action( 'woocommerce_after_cart', 'woocommerce_cross_sell_display' );

        /* Single product admin tabs
        ---------------*/

            function equipo_enovathemes_fbt() { global $post; ?>
                <div class="options_group">
                    <p class="form-field selection-choice-custom">
                        <label for="fbt_ids"><?php esc_html_e( 'Frequently bought', 'equipo' ); ?></label>
                        <select class="wc-product-search" multiple="multiple" style="width: 50%;" id="fbt_ids" name="fbt_ids[]" data-placeholder="<?php esc_attr_e( 'Search for a product&hellip;', 'equipo' ); ?>" data-action="woocommerce_json_search_products_and_variations" data-exclude="<?php echo intval( $post->ID ); ?>">
                            <?php

                                $fbt_ids = get_post_meta( $post->ID, 'fbt_ids', true );
                                $product_ids = isset( $fbt_ids ) ? array_map( 'intval', (array) wp_unslash( $fbt_ids ) ) : array();
                                if (!empty($product_ids)) {
                                    foreach ( $product_ids as $product_id ) {
                                        $product = wc_get_product( $product_id );
                                        if ( is_object( $product ) ) {
                                            echo '<option value="' . esc_attr( $product_id ) . '"' . selected( true, true, false ) . '>' . esc_html( wp_kses_post( $product->get_formatted_name() ) ) . '</option>';
                                        }
                                    }
                                }
                                
                            ?>
                        </select> <?php echo wc_help_tip( __( 'Frequently bought are products which you recommend with the currently viewed product.', 'equipo' ) ); // WPCS: XSS ok. ?>
                    </p>
            <?php }
            add_action( 'woocommerce_product_options_related', 'equipo_enovathemes_fbt' );

            function equipo_enovathemes_compare() { global $post; ?>
                    <p class="form-field selection-choice-custom">
                        <label for="compare_ids"><?php esc_html_e( 'Compare', 'equipo' ); ?></label>
                        <select class="wc-product-search" multiple="multiple" style="width: 50%;" id="compare_ids" name="compare_ids[]" data-placeholder="<?php esc_attr_e( 'Search for a product&hellip;', 'equipo' ); ?>" data-action="woocommerce_json_search_products_and_variations" data-exclude="<?php echo intval( $post->ID ); ?>">
                            <?php

                                $compare_ids = get_post_meta( $post->ID, 'compare_ids', true );
                                $product_ids = isset( $compare_ids ) ? array_map( 'intval', (array) wp_unslash( $compare_ids ) ) : array();
                                if (!empty($product_ids)) {
                                    foreach ( $product_ids as $product_id ) {
                                        $product = wc_get_product( $product_id );
                                        if ( is_object( $product ) ) {
                                            echo '<option value="' . esc_attr( $product_id ) . '"' . selected( true, true, false ) . '>' . esc_html( wp_kses_post( $product->get_formatted_name() ) ) . '</option>';
                                        }
                                    }
                                }
                                
                            ?>
                        </select> <?php echo wc_help_tip( __( 'Compare are products which you recommend comapred to the currently viewed product.', 'equipo' ) ); // WPCS: XSS ok. ?>
                    </p>
                </div>
            <?php }
            add_action( 'woocommerce_product_options_related', 'equipo_enovathemes_compare' );

            add_action( 'woocommerce_process_product_meta', 'equipo_enovathemes_save_custom_fields' );
            function equipo_enovathemes_save_custom_fields( $post_id ) {
                update_post_meta($post_id, "fbt_ids",$_POST["fbt_ids"]);
                update_post_meta($post_id, "compare_ids",$_POST["compare_ids"]);
            }
        
        /* Recently veiwed produts
        ---------------*/

            function equipo_enovathemes_custom_track_product_view() {
                if ( ! is_singular( 'product' ) ) {
                    return;
                }

                global $post;

                if ( empty( $_COOKIE['woocommerce_recently_viewed'] ) ){
                    $viewed_products = array();
                }
                else{
                    $viewed_products = (array) explode( '|', $_COOKIE['woocommerce_recently_viewed'] );
                }

                if ( ! in_array( $post->ID, $viewed_products ) ) {
                    $viewed_products[] = $post->ID;
                }

                if ( sizeof( $viewed_products ) > 18 ) {
                    array_shift( $viewed_products );
                }

                // Store for session only
                wc_setcookie( 'woocommerce_recently_viewed', implode( '|', $viewed_products ) );
            }

            add_action( 'template_redirect', 'equipo_enovathemes_custom_track_product_view', 20 );
    }

/* Scripts/Styles
---------------*/

    function equipo_enovathemes_scripts_styles_general() {

        global $equipo_enovathemes;

        wp_enqueue_style('equipo-style', get_stylesheet_uri() );
        wp_enqueue_style( 'equipo-default-fonts', equipo_enovathemes_fonts_url(), array(), '1.0.0' );
        wp_enqueue_style('equipo-default-styles', get_template_directory_uri() . '/css/dynamic-styles-cached.css');

        if (isset($GLOBALS['equipo_enovathemes']['disable-defaults']) && $GLOBALS['equipo_enovathemes']['disable-defaults'] == 1) {
            wp_dequeue_style( 'equipo-default-styles' );
            wp_dequeue_style( 'equipo-default-fonts' );
        }

        if ( is_singular() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }

        // dequeue
        wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
        wp_deregister_style( 'woocommerce_prettyPhoto_css' );

    }

    function equipo_enovathemes_scripts() {

        global $equipo_enovathemes,$wp_query;

        $plugins_combined = (isset($GLOBALS['equipo_enovathemes']['plugins-combined']) && $GLOBALS['equipo_enovathemes']['plugins-combined'] == 1) ? 'true' : 'false';
        $blog_post_layout = (isset($GLOBALS['equipo_enovathemes']['blog-post-layout']) && $GLOBALS['equipo_enovathemes']['blog-post-layout']) ? $GLOBALS['equipo_enovathemes']['blog-post-layout'] : "masonry";

        if ($blog_post_layout) {
            wp_enqueue_script( 'imagesloaded');
            wp_enqueue_script( 'jquery-masonry');
        }

        if ($plugins_combined == "true") {
            wp_enqueue_script( 'plugins-combined', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/plugins-combined.js', array('jquery'), '', true);
        } else {
            wp_enqueue_script( 'gsap', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/gsap.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'morph-sv-gplugin', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/MorphSVGPlugin.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'split-text', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/SplitText.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'scroll-to', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/ScrollToPlugin.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'tiny-slider', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/tiny-slider.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'simple-scrollbar', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/simple-scrollbar.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'waypoints', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/waypoints.min.js', array('jquery'), '', true);
            wp_enqueue_script( 'cookie', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/cookie.js', array('jquery'), '', true);
            wp_enqueue_script( 'countdown', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/countdown.js', array('jquery'), '', true);
        }

        if (!is_admin()) {

            if (class_exists('Woocommerce')){
                wp_enqueue_script( 'wc-cart-fragments');
            }

            wp_enqueue_script( 'controller', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/controller.js', array('jquery'), '', true);

            $product_per_page = (isset($GLOBALS['equipo_enovathemes']['product-per-page']) && !empty($GLOBALS['equipo_enovathemes']['product-per-page'])) ? $GLOBALS['equipo_enovathemes']['product-per-page'] : get_option( 'posts_per_page' );
            $post_paged       = (get_query_var('page')) ? get_query_var('page') : 1;
            
            $post_max         = $wp_query->max_num_pages;
            $product_max      = (empty($product_per_page)) ? $wp_query->max_num_pages : ceil($wp_query->found_posts/$product_per_page);

            wp_localize_script(
                'controller',
                'controller_opt',
                array(
                    'postMax'        => $post_max,
                    'productMax'     => $product_max,
                    'start'          => $post_paged,
                    'postNextLink'   => next_posts($post_max, false),
                    'productNextLink'=> next_posts($product_max, false),
                    'wooError'       => esc_html__("No products found, something was wrong", 'equipo'),
                    'postError'      => esc_html__("No posts found, something was wrong", 'equipo'),
                    'noMore'         => esc_html__("No more", 'equipo'),
                    'allAdded'       => esc_html__("All items added", 'equipo'),
                    'filterText'     => esc_html__("Choose category", 'equipo'),
                    'already'        => esc_html__("Product already added", 'equipo'),
                    'ajaxUrl'        => admin_url('admin-ajax.php'),
                )
            );

            $wishlist = (isset($GLOBALS['equipo_enovathemes']['wishlist']) && $GLOBALS['equipo_enovathemes']['wishlist'] == 1) ? "true" : "false";
            $compare  = (isset($GLOBALS['equipo_enovathemes']['compare']) && $GLOBALS['equipo_enovathemes']['compare'] == 1) ? "true" : "false";

            if ($wishlist == "true") {

                wp_localize_script(
                    'controller',
                    'wish_opt',
                    array(
                        'ajaxPost'       => admin_url('admin-post.php'),
                        'shopName'       => sanitize_title_with_dashes(sanitize_title_with_dashes(get_bloginfo('name'))),
                        'inWishlist'     => esc_html__("Already in wishlist","equipo"),
                        'addedWishlist'  => esc_html__("In wishlist","equipo"),
                        'error'          => esc_html__("Something went wrong, could not add to wishlist","equipo"),
                        'noWishlist'     => esc_html__("No products found","equipo"),
                        'confirm'        => esc_html__("Remove the item from wishlist?","equipo"),
                    )
                );
            }

            if ($compare == "true") {

                wp_localize_script(
                    'controller',
                    'comp_opt',
                    array(
                        'shopName'  => sanitize_title_with_dashes(sanitize_title_with_dashes(get_bloginfo('name'))),
                        'inCompare' => esc_html__("Already added to compare","equipo"),
                        'addedCompare' => esc_html__("In compare","equipo"),
                        'error'     => esc_html__("Something went wrong, could not add to compare","equipo"),
                        'noCompare' => esc_html__("No products found","equipo"),
                        'confirm'   => esc_html__("Remove the item","equipo"),
                    )
                );
            }

        }

        if (is_page()) {

            $one_page = get_post_meta( get_the_ID(), 'enovathemes_addons_one_page', true );

            if ($one_page == "on") {

                $one_page_filter = (isset($GLOBALS['equipo_enovathemes']['one-page-filter']) && $GLOBALS['equipo_enovathemes']['one-page-filter']) ? explode(',',esc_attr($GLOBALS['equipo_enovathemes']['one-page-filter'])) : '';
                $et_filter_array = array();

                if (is_array($one_page_filter)) {
                    foreach ($one_page_filter as $filter) {
                        array_push($et_filter_array, '#'.$filter.' > a');
                    }
                }

                wp_enqueue_script( 'single-page-nav', EQUIPO_ENOVATHEMES_TEMPPATH.'/js/single-page-nav.js', array('jquery'), '', true);
                wp_localize_script(
                    'single-page-nav',
                    'single_page_nav_opt',
                    array(
                        'filterArray' => (!empty($et_filter_array)) ? implode(', ', $et_filter_array) : ''
                    )
                );

            }
        }

    }

    function equipo_enovathemes_admin_scripts_styles() {

        global $equipo_enovathemes,$wp_query;

        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_script( 'jquery-ui-draggable' );
        wp_enqueue_script( 'jquery-ui-droppable' );
        wp_enqueue_style( 'equipo-admin', EQUIPO_ENOVATHEMES_TEMPPATH . '/css/admin.css', false, '');
        wp_enqueue_script( 'equipo-admin', EQUIPO_ENOVATHEMES_TEMPPATH . '/js/admin.js', array('jquery'), '', true);

        $post_paged       = (get_query_var('page')) ? get_query_var('page') : 1;

        $categories = (function_exists('get_product_categories_hierarchy')) ? get_product_categories_hierarchy(true) : '';

        $category_output = '';

        if (!empty($categories) && !is_wp_error($categories)){
            $category_output .= list_taxonomy_hierarchy_no_instance($categories,'','default');
        }

        $filter_text = array(
            'limit'         => esc_html__( 'Limit to category', 'equipo' ),
            'hide'          => esc_html__( 'Hide on category', 'equipo' ),
            'include'       => esc_html__( 'Include child categories?', 'equipo' ),
            'all'           => esc_html__( 'All', 'equipo' ),
            'category'      => esc_html__( 'Include child categories?', 'equipo' ),
            'remove'        => esc_html__( 'Remove', 'equipo' ),
            'display'       => esc_html__( 'Display type', 'equipo' ),
            'select'        => esc_html__( 'Select', 'equipo' ),
            'list'          => esc_html__( 'List', 'equipo' ),
            'image'         => esc_html__( 'Image', 'equipo' ),
            'image-list'    => esc_html__( 'Image list', 'equipo' ),
            'lock'          => esc_html__( 'Lock this attribute?', 'equipo' ),
            'lock-desk'     => esc_html__( 'If active, filter results will not affect attribute data', 'equipo' ),
            'label'         => esc_html__( 'Label', 'equipo' ),
            'color'         => esc_html__( 'Color', 'equipo' ),
            'slider'        => esc_html__( 'Slider', 'equipo' ),
            'columns'       => esc_html__( 'Columns', 'equipo' ),
            'desc1'         => esc_html__( "For color, image display types make sure you set the correct type from this attribute settings, found under products / attributes. For slider display types, make sure your attribute is numeric", "equipo" ),
            'desc2'         => esc_html__( "For image display type make sure you set the product category image from the Products / Categories", "equipo" ),
        );

        wp_localize_script(
            'equipo-admin',
            'admin_opt',
            array(
                'start'          => $post_paged,
                'noMore'         => esc_html__("No more", 'equipo'),
                'filterText'     => json_encode($filter_text),
                'ajaxUrl'        => admin_url('admin-ajax.php'),
                'categories'     => $category_output
            )
        );

        return;
    }

    add_action( 'wp_enqueue_scripts', 'equipo_enovathemes_scripts_styles_general');
    add_action( 'wp_enqueue_scripts', 'equipo_enovathemes_scripts');

    add_action('admin_enqueue_scripts','equipo_enovathemes_scripts');
    add_action('admin_enqueue_scripts','equipo_enovathemes_admin_scripts_styles');

    function equipo_enovathemes_editor_styles() {
        wp_enqueue_style('equipo-default-fonts', '//fonts.googleapis.com/css?family=Nunito+Sans:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i' );
        wp_enqueue_style( 'equipo-editor-style', EQUIPO_ENOVATHEMES_TEMPPATH . '/css/editor-style.css' );

    }
    add_action( 'enqueue_block_editor_assets', 'equipo_enovathemes_editor_styles' );

?>
