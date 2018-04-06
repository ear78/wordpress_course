<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class( ); ?>>

        <div id="page" class="">
            <a href="#content" class="skip-link screen-reader-text">
                <?php esc_html_e( 'Skip to content', 'wphierarchy'); ?>
            </a>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php
                $args = [
                    'theme_location' => 'main-menu'
                ];
                wp_nav_menu( $args );
            ?>
        </nav>
