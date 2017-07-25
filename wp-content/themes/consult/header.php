<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consult
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, IE=9; IE=8; IE=7; IE=EDGE"  http-equiv="X-UA-Compatible" >
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <style type="text/css" id="custom-background-css">
        .intro { background: url("<?php echo get_theme_mod('bg-intro'); ?>") no-repeat center; background-size: cover; }
    </style>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <section class="intro">
        <header id="masthead" class="site-header d-flex justify-content-between container">
            <div class="logo-wrapp d-flex justify-content-center">
                <?php the_custom_logo(); ?>
            </div>
            <nav class="navbar navbar-toggleable-md navbar-light">
                <div class="navbar-wrap d-flex justify-content-center align-items-center">
                    <button class="button-menu" id="button-menu" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <?php wp_nav_menu( array( 'theme_location' => 'navigation', 'menu_id' => 'header-menu', 'menu_class' => 'navbar-nav', 'container' => 'ul'  ) ); ?>
                </div>
            </nav>
            <div class="contacts d-flex justify-content-center">
                <p class="phone-header"><i class="fa fa-phone fa-lg" aria-hidden="true"></i><?php echo get_theme_mod('hot-line') ?></p>
                <a href="mailto:lutsenko.maxim@gmail.com" class="email-header-btn"><i class="fa fa-envelope-open-o" aria-hidden="true"></i></a>
            </div>
        </header><!-- #masthead -->
        <div class="choose container">

            <span class="intro-subtitle"><?php echo get_theme_mod('intro_span') ?></span>
            <h2 class="intro-title"><?php echo get_theme_mod('intro_title') ?></h2>

            <div class="choose-industry-slider">
                <?php
                $args = array(
                    'post_type' => 'choose-industry',
                    'posts_per_page' => 10
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <a class="industry-link d-flex flex-column justify-content-center " href="<?php the_field('link_to_industry'); ?>">
                            <div class="industry-icon d-flex justify-content-center"><?php the_post_thumbnail('full') ?></div>
                            <h3 class="industry-title"><?php the_title(); ?></h3>
                        </a>
                    <?php endwhile; ?>
                <?php else : //no posts ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>

        </div>
    </section>

	<div id="content" class="site-content">
