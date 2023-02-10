<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar bg-primary navbar-expand-lg mb-4  " id="mainNav">
        <div class="container"><a class="navbar-brand text-white" href="/blog">Home</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
                    <label>
                        <span class="screen-reader-text"><?php echo esc_html__('Search for:', 'textdomain'); ?></span>
                        <input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'textdomain'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
                    </label>
                    <button type="submit" class="search-submit"><?php echo esc_html__('Search', 'textdomain'); ?></button>
                </form>

                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ">
                        <?php $args = array('theme_location' => 'primary'); ?>
                        <?php wp_nav_menu($args); ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>