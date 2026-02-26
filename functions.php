<?php
function heaven_hacker_setup() {
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'customize-selective-refresh-widgets' );
    register_nav_menus( array(
        'header-menu' => __( 'Header Menu', 'heaven-hack' ),
    ) );
}
add_action( 'after_setup_theme', 'heaven_hacker_setup' );

function heaven_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Command Panel', 'heaven-hack' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here.', 'heaven-hack' ),
        'before_widget' => '<div id="%1$s" class="cmd-panel widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="cmd-title">',
        'after_title'   => '</div>',
    ) );
}
add_action( 'widgets_init', 'heaven_widgets_init' );

function heaven_hacker_scripts() {
    wp_enqueue_style( 'heaven-hacker-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'heaven_hacker_scripts' );

function heaven_excerpt_more($more) {
    return '... [DATA_CORRUPTED]';
}
add_filter('excerpt_more', 'heaven_excerpt_more');

function heaven_hacker_customize_register( $wp_customize ) {
    // Section: Terminal Text
    $wp_customize->add_section( 'heaven_hacker_text_section', array(
        'title'    => __( 'Terminal Text', 'heaven-hack' ),
        'priority' => 30,
    ) );

    // Header Line 1
    $wp_customize->add_setting('header_line_1', array(
        'default' => 'No one conquers the world because they want to rule it.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('header_line_1', array(
        'label' => __('Header Line 1', 'heaven-hack'),
        'section' => 'heaven_hacker_text_section',
        'type' => 'text',
    ));

    // Header Line 2
    $wp_customize->add_setting('header_line_2', array(
        'default' => 'They just want to rewrite the gravity of the stars.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('header_line_2', array(
        'label' => __('Header Line 2', 'heaven-hack'),
        'section' => 'heaven_hacker_text_section',
        'type' => 'text',
    ));

    // Footer Uptime
    $wp_customize->add_setting('footer_uptime', array(
        'default' => '> SYSTEM UPTIME: ',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_uptime', array(
        'label' => __('Footer Uptime Prefix', 'heaven-hack'),
        'section' => 'heaven_hacker_text_section',
        'type' => 'text',
    ));

    // Footer Protocol
    $wp_customize->add_setting('footer_protocol', array(
        'default' => '> JOLLY DOG PROTOCOL INSTALLED.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('footer_protocol', array(
        'label' => __('Footer Protocol', 'heaven-hack'),
        'section' => 'heaven_hacker_text_section',
        'type' => 'text',
    ));

    // Colors
    $wp_customize->add_setting('term_bg', array(
        'default' => '#050510',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'term_bg', array(
        'label' => __('Background Color', 'heaven-hack'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('term_green', array(
        'default' => '#00f0ff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'term_green', array(
        'label' => __('Main Text Color', 'heaven-hack'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('term_dim', array(
        'default' => '#005f66',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'term_dim', array(
        'label' => __('Dim / Border Color', 'heaven-hack'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('term_alert', array(
        'default' => '#ff0055',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'term_alert', array(
        'label' => __('Alert / Hover Color', 'heaven-hack'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('term_cyan', array(
        'default' => '#00f0ff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'term_cyan', array(
        'label' => __('Cyan / Accent Color', 'heaven-hack'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('term_yellow', array(
        'default' => '#ffee00',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'term_yellow', array(
        'label' => __('Yellow Color', 'heaven-hack'),
        'section' => 'colors',
    )));

    // Section: Menu Styling
    $wp_customize->add_section( 'heaven_hacker_menu_section', array(
        'title'    => __( 'Menu Styling', 'heaven-hack' ),
        'priority' => 31,
    ) );

    $wp_customize->add_setting('menu_link_color', array(
        'default' => '#00f0ff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'menu_link_color', array(
        'label' => __('Menu Link Color', 'heaven-hack'),
        'section' => 'heaven_hacker_menu_section',
    )));

    $wp_customize->add_setting('menu_hover_bg', array(
        'default' => 'rgba(0, 240, 255, 0.1)',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('menu_hover_bg', array(
        'label' => __('Menu Hover Background (rgba/hex)', 'heaven-hack'),
        'section' => 'heaven_hacker_menu_section',
        'type' => 'text',
    ));

    // Section: Widget Styling
    $wp_customize->add_section( 'heaven_hacker_widget_section', array(
        'title'    => __( 'Widget Styling', 'heaven-hack' ),
        'priority' => 32,
    ) );

    $wp_customize->add_setting('widget_bg_color', array(
        'default' => 'rgba(0, 95, 102, 0.05)',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('widget_bg_color', array(
        'label' => __('Widget Background Color (rgba/hex)', 'heaven-hack'),
        'section' => 'heaven_hacker_widget_section',
        'type' => 'text',
    ));

    $wp_customize->add_setting('widget_border_color', array(
        'default' => '#005f66',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'widget_border_color', array(
        'label' => __('Widget Border Color', 'heaven-hack'),
        'section' => 'heaven_hacker_widget_section',
    )));

    $wp_customize->add_setting('widget_title_color', array(
        'default' => '#00f0ff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'widget_title_color', array(
        'label' => __('Widget Title Color', 'heaven-hack'),
        'section' => 'heaven_hacker_widget_section',
    )));
}
add_action( 'customize_register', 'heaven_hacker_customize_register' );

function heaven_hacker_customizer_css() {
    ?>
    <style type="text/css">
        :root {
            --term-bg: <?php echo get_theme_mod('term_bg', '#050510'); ?>;
            --term-green: <?php echo get_theme_mod('term_green', '#00f0ff'); ?>;
            --term-dim: <?php echo get_theme_mod('term_dim', '#005f66'); ?>;
            --term-alert: <?php echo get_theme_mod('term_alert', '#ff0055'); ?>;
            --term-cyan: <?php echo get_theme_mod('term_cyan', '#00f0ff'); ?>;
            --term-yellow: <?php echo get_theme_mod('term_yellow', '#ffee00'); ?>;
            --menu-link-color: <?php echo get_theme_mod('menu_link_color', '#00f0ff'); ?>;
            --menu-hover-bg: <?php echo get_theme_mod('menu_hover_bg', 'rgba(0, 240, 255, 0.1)'); ?>;
            --widget-bg-color: <?php echo get_theme_mod('widget_bg_color', 'rgba(0, 95, 102, 0.05)'); ?>;
            --widget-border-color: <?php echo get_theme_mod('widget_border_color', '#005f66'); ?>;
            --widget-title-color: <?php echo get_theme_mod('widget_title_color', '#00f0ff'); ?>;
        }
    </style>
    <?php
}
add_action( 'wp_head', 'heaven_hacker_customizer_css' );
?>