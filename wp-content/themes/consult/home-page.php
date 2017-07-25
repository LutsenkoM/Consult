<?php
/* Template name: Home page*/
get_header(); ?>
<!--    About section-->
    <section class="about">
        <div class="container">
            <h2 class="title-section"><?php echo get_theme_mod('about_title') ?></h2>
            <p class="about-text offset-md-2 col-md-8"><?php echo get_theme_mod('about_text') ?></p>
            <a class="button-to-page green" href="<?php echo get_permalink(get_theme_mod('about_page')) ?>">Read more</a>

            <div class="clients-logo-slider">
                <?php
                $args = array(
                    'post_type' => 'clients-logos',
                    'posts_per_page' => 10
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <a class="client-logo d-flex justify-content-center align-items-center" href="<?php the_field('link_to_client_site'); ?>">
                            <?php the_post_thumbnail('full') ?>
                        </a>
                    <?php endwhile; ?>
                <?php else : //no posts ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>

        </div>
    </section>
<!--    About section end-->

<!--    Features section-->
    <section class="features">
        <div class="container">
            <h2 class="title-section margin-bottom"><?php echo get_theme_mod('features_title') ?></h2>
            <ul class="features-list margin-bottom row">
                <li class="left-side-features col-md-5">
                    <ul class="text-right">
                        <li class="d-flex margin-bottom">
                            <div>
                                <h3 class="feature-title"><?php echo get_theme_mod('features_title_1') ?></h3>
                                <p class="feature-text"><?php echo get_theme_mod('features_text_1') ?></p>
                            </div>
                            <img alt="" src="<?php echo get_theme_mod('features_image_1'); ?>" class="img-feature margin-left">
                        </li>
                        <li class="d-flex ">
                            <div>
                                <h3 class="feature-title"><?php echo get_theme_mod('features_title_2') ?></h3>
                                <p class="feature-text"><?php echo get_theme_mod('features_text_2') ?></p>
                            </div>
                            <img alt="" src="<?php echo get_theme_mod('features_image_2'); ?>" class="img-feature margin-left">
                        </li>
                    </ul>
                </li>
                <li class="col-md-2 d-flex align-items-center justify-content-center">
                    <img alt="" src="<?php echo get_theme_mod('features_logo_image'); ?>" class="img-fluid">
                </li>
                <li class="right-side-features col-md-5">
                    <ul class="text-left">
                        <li class="d-flex flex-row-reverse margin-bottom">
                            <div>
                                <h3 class="feature-title"><?php echo get_theme_mod('features_title_3') ?></h3>
                                <p class="feature-text"><?php echo get_theme_mod('features_text_3') ?></p>
                            </div>
                            <img alt="" src="<?php echo get_theme_mod('features_image_3'); ?>" class="img-feature margin-right">
                        </li>
                        <li class="d-flex flex-row-reverse ">
                            <div>
                                <h3 class="feature-title"><?php echo get_theme_mod('features_title_4') ?></h3>
                                <p class="feature-text"><?php echo get_theme_mod('features_text_4') ?></p>
                            </div>
                            <img alt="" src="<?php echo get_theme_mod('features_image_4'); ?>" class="img-feature margin-right">
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="contact-block d-flex justify-content-between">
                <p class="contact-title"><?php echo get_theme_mod('contact-block-title') ?></p>
                <button type="button" class="green contact-button">Boost your business</button>
            </div>
        </div>
    </section>
<!--    Features section end-->

<!--    Projects-->
    <section class="projects">
        <div class="container">
            <h2 class="title-section margin-bottom"><?php echo get_theme_mod('projects_title') ?></h2>
            <div class="projects-posts row">
                <div class="col-lg-4">
                    <a href="#" class="project-post-link">
                        <div class="projects-post">
                            <div class="project-img">
                                <div class="category-project">Banking</div>
                                <img src="<?php echo get_theme_mod('project_img_1'); ?>" alt="">
                            </div>
                            <div class="project-info">
                                <h3>Project heading</h3>
                                <p>Popularised in the 1960s with the release of Letraset sheets containing Lorem.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8">
                    <a href="#" class="project-post-link">
                        <article class="projects-post ">
                            <div class="project-img">
                                <div class="category-project">Real estate</div>
                                <div class="project-img-slider">
                                    <img src="<?php echo get_theme_mod('project_img_2'); ?>" alt="">
                                    <img src="<?php echo get_theme_mod('project_img_2'); ?>" alt="">
                                    <img src="<?php echo get_theme_mod('project_img_2'); ?>" alt="">
                                </div>
                            </div>
                            <div class="project-info">
                                <h3>Project heading</h3>
                                <p>
                                    Popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages. fact that a reader will be distracted by the readable of a page when.
                                </p>
                            </div>
                        </article>
                    </a>
                </div>
            </div>
            <a class="button-to-page green" href="<?php echo get_permalink(get_theme_mod('projects_page')) ?>">Full projects</a>
        </div>
    </section>
<!--    Projects end-->

<!--    Services section-->
    <section class="services">
        <div class="container">
            <h2 class="title-section margin-bottom"><?php echo get_theme_mod('services_title') ?></h2>
            <div class="services-posts row">
                <?php
                $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => 3
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <div class="service col-md-4 d-flex flex-column justify-content-between">
                            <div class="service-icon"><?php the_post_thumbnail('full') ?></div>
                            <h3 class="service-title"><?php the_title(); ?></h3>
                            <div class="service-text"><?php the_content(); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php else : //no posts ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
            <a class="button-to-page green margin-bottom" href="<?php echo get_permalink(get_theme_mod('services_page')) ?>">Full services</a>
        </div>
    </section>
<!--    Services section end-->

<!--    Testimonials section-->
    <section class="testimonials">
        <div class="container">
            <h2 class="title-section white"><?php echo get_theme_mod('testimonials_title') ?></h2>
            <div class="testimonials-slider  offset-md-1 col-md-10">
                <?php
                $args = array(
                    'post_type' => 'testimonials',
                    'posts_per_page' => 10
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>

                        <div class="testimonial">
                            <div class="client-photo"><?php the_post_thumbnail('full') ?></div>
                            <div class="client-testimonial"><?php  the_content() ?></div>
                            <div class="client-name"><?php the_title(); ?></div>
                            <div class="designation"><?php the_field('designation'); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php else : //no posts ?>
                <?php endif;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<!--    Testimonials section end-->

<!--    Our blog section-->
    <section class="blog">
        <div class="container">
            <h2 class="title-section"><?php echo get_theme_mod('our_blog_title') ?></h2>
            <div class="row posts-container">
                <?php
                $args = array( 'posts_per_page' => 2 );
                $query = new WP_Query( $args );
                while ( $query->have_posts() ) {
                $query->the_post(); ?>
                    <a href="<?php echo get_permalink(); ?>" class="blog-post col-lg-6">
                        <article class="d-flex">
                            <div class="post_thumbnail">
                                <?php the_post_thumbnail('full'); ?>
                            </div>
                             <ul class="post-info">
                                 <li><p class="post-date"><?php the_time('j F, Y'); ?></p></li>
                                 <li><p class="post-title"><?php the_title(); ?></p></li>
                                 <li class="post-excerpt"><?php the_excerpt(); ?></li>
                             </ul>
                        </article>
                    </a>
                <?php }
                wp_reset_postdata();
                ?>
            </div>
            <a class="button-to-page green" href="<?php echo get_permalink(get_theme_mod('our_blog_page')) ?>">Full blog</a>
        </div>
    </section>
<!--    Our blog section end-->

<!--    Quick contact-->
    <section class="quick-contacts">
        <div class="container">
            <h2 class="title-section margin-bottom"><?php echo get_theme_mod('quick_contact_title') ?></h2>
            <ul class="contact-list margin-bottom d-flex flex-wrap">
                <li class="contact-card-wrapp col-lg-4 col-md-12 col-sm-12">
                    <div class="contact-card d-flex justify-content-center align-items-center">
                        <img alt="" src="<?php echo get_theme_mod('email_icon'); ?>" class="img-fluid quick-icon">
                        <ul>
                            <li class="quick-title"><?php echo get_theme_mod('email_title') ?></li>
                            <li class="quick-contact"><?php echo get_theme_mod('email') ?></li>
                        </ul>
                    </div>
                </li>
                <li class="contact-card-wrapp col-lg-4 col-md-12 col-sm-12">
                    <div class="contact-card d-flex justify-content-center align-items-center">
                        <img alt="" src="<?php echo get_theme_mod('call_icon'); ?>" class="img-fluid quick-icon">
                        <ul>
                            <li class="quick-title"><?php echo get_theme_mod('call_title') ?></li>
                            <li class="quick-contact"><?php echo get_theme_mod('quick_call') ?></li>
                        </ul>
                    </div>
                </li>
                <li class="contact-card-wrapp col-lg-4 col-md-12 col-sm-12">
                    <div class="contact-card d-flex justify-content-center align-items-center">
                        <img alt="" src="<?php echo get_theme_mod('career_icon'); ?>" class="img-fluid quick-icon">
                        <ul>
                            <li class="quick-title"><?php echo get_theme_mod('career_title') ?></li>
                            <li class="quick-contact"><?php echo get_theme_mod('quick_career') ?></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<!--    Quick contact end-->
<?php
get_footer();
