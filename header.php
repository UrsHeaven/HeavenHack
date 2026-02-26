<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=1200">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="scanlines"></div>
    <div class="code-rain-bg"></div>
    <div class="console-container crt-flicker">
        <header class="sys-header">
            <div class="sys-branding">
                <?php if ( is_front_page() || is_home() ) :  ?>
                    <h1 class="sys-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">> <?php bloginfo( 'name' ); ?>_</a></h1>
                <?php else :  ?>
                    <div class="sys-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">> <?php bloginfo( 'name' ); ?>_</a></div>
                <?php endif; ?>
                <div class="sys-desc">
                    <div class="log-row">
                        <span class="log-prefix">// ACT:</span>
                        <span class="log-text"><?php echo esc_html(get_theme_mod('header_line_1', 'No one conquers the world because they want to rule it.')); ?></span>
                    </div>
                    <div class="log-row">
                        <span class="log-prefix">// &nbsp;G&nbsp;:</span>
                        <span class="log-text"><?php echo esc_html(get_theme_mod('header_line_2', 'They just want to rewrite the gravity of the stars.')); ?></span>
                    </div>
                </div>
            </div> <div class="sys-meta">
                <div>SYS_TIME: <?php echo date('Y-m-d H:i:s'); ?></div>
                <div>USER: GUEST</div>
                <div class="pulse">STATUS: COMPROMISED</div>
            </div>
        </header>
        <nav class="main-nav">
             <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'fallback_cb' => false ) ); ?>
        </nav>