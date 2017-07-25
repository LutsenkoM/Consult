<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package consult
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
        <div class="container">
            <ul class="foot-up d-flex flex-wrap">
                <li class="col-md-12 col-lg-3 d-flex align-items-center justify-content-center margin-md-bottom ">
                    <?php the_custom_logo(); ?>
                </li>
                <li class="foot-menus  col-md-12 col-lg-5 d-flex margin-md-bottom ">
                    <ul class="col-md-6 text-align-md-center">
                        <li><h3 class="foot-title"><?php echo get_theme_mod('navigation') ?></h3></li>
                        <li><?php wp_nav_menu( array( 'theme_location' => 'navigation', 'menu_id' => 'foot-navigation-menu', 'menu_class' => 'navbar-foot', 'container' => 'ul'  ) ); ?></li>
                    </ul>
                    <ul class="col-md-6 text-align-md-center">
                        <li><h3 class="foot-title"><?php echo get_theme_mod('industry') ?></h3></li>
                        <li><?php wp_nav_menu( array( 'theme_location' => 'industry', 'menu_id' => 'industry-menu', 'menu_class' => 'navbar-foot', 'container' => 'ul'  ) ); ?></li>
                    </ul>
                </li>
                <li class="subscribe col-md-12 col-lg-4 text-align-md-center margin-md-bottom ">
                    <ul>
                        <li><h3 class="foot-title"><?php echo get_theme_mod('letter_title') ?></h3></li>
                        <li><p class="news-letter-text"><?php echo get_theme_mod('news_letter_text') ?></p></li>
                        <li><?php echo do_shortcode('[mc4wp_form id="169"]');?></li>
                    </ul>
                </li>
            </ul>
            <div class="foot-down d-flex flex-column flex-sm-row flex-wrap  flex-lg-nowrap justify-content-center justify-content-lg-between">
                <p class="copyright d-flex justify-content-center"><?php echo get_theme_mod('copyright') ?></p>
                <?php
                $social_links_facebook = get_theme_mod('social_links_facebook');
                $social_links_twitter = get_theme_mod('social_links_twitter');
                $social_links_instagram = get_theme_mod('social_links_instagram');
                $social_links_linkedin = get_theme_mod('social_links_linkedin');
                $social_links_gplus = get_theme_mod('social_links_gplus');
                if( $social_links_facebook || $social_links_twitter || $social_links_instagram || $social_links_linkedin || $social_links_gplus  ) ?>
                <ul class="social-icons d-flex flex-column flex-sm-row flex-wrap flex-sm-nowrap">
                    <?php if($social_links_facebook){ ?>
                        <li class="social-icon facebook-color text-center"><a target="_blank" href="<?php echo esc_url($social_links_facebook) ?>">facebook</a></li>
                    <?php } ?>
                    <?php if($social_links_twitter){ ?>
                        <li class="social-icon twitter-color text-center"><a target="_blank" href="<?php echo esc_url($social_links_twitter) ?>">twitter</a></li>
                    <?php } ?>
                    <?php if($social_links_instagram){ ?>
                        <li class="social-icon instagram-color text-center"><a target="_blank" href="<?php echo esc_url($social_links_instagram) ?>">instagram</a></li>
                    <?php } ?>
                    <?php if($social_links_linkedin){ ?>
                        <li class="social-icon linkedin-color text-center"><a target="_blank" href="<?php echo esc_url($social_links_linkedin) ?>">linkedin</a></li>
                    <?php } ?>
                    <?php if($social_links_gplus){ ?>
                        <li class="social-icon gplus-color text-center"><a target="_blank" href="<?php echo esc_url($social_links_gplus) ?>">google+</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
