<?php
/**
 * consult Theme Customizer
 *
 * @package consult
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function consult_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'consult_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'consult_customize_partial_blogdescription',
		) );
	}

    //HOME PAGE PANEL
    $wp_customize->add_panel ('Home page panel',
        array(
            'title' => __('Home page panel'),
            'priority' => 10,
        )
    );
    // Header
    $wp_customize->add_section ( 'header',
        array(
            'title' => __('Header'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'hot-line',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'hot-line',
            array(
                'settings'		=> 'hot-line',
                'section'		=> 'header',
                'type'			=> 'text',
                'label'	        => __( 'Hot line' )
            )
        )
    );
    // Header end
    // Intro section
    $wp_customize->add_section ( 'intro',
        array(
            'title' => __('Intro section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'intro_span',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'intro_span',
            array(
                'settings'		=> 'intro_span',
                'section'		=> 'intro',
                'type'			=> 'text',
                'label'	        => __( 'Intro subtitle' )
            )
        )
    );
    $wp_customize->add_setting(
        'intro_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'intro_title',
            array(
                'settings'		=> 'intro_title',
                'section'		=> 'intro',
                'type'			=> 'text',
                'label'	        => __( 'Intro title' )
            )
        )
    );

    $wp_customize->add_setting(
        'bg-intro',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'bg-intro',
            array(
                'settings'		=> 'bg-intro',
                'section'		=> 'intro',
                'label'			=> __( 'Upload intro background')
            )
        )
    );
    //Intro section end
    //About section
    $wp_customize->add_section ( 'about',
        array(
            'title' => __('About section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'about_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about_title',
            array(
                'settings'		=> 'about_title',
                'section'		=> 'about',
                'type'			=> 'text',
                'label'	        => __( 'About title' )
            )
        )
    );

    $wp_customize->add_setting(
        'about_text',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'about_text',
            array(
                'settings'		=> 'about_text',
                'section'		=> 'about',
                'type'			=> 'textarea',
                'label'	        => __( 'About text' )
            )
        )
    );

    $wp_customize->add_setting(
        'about_page',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,'about_page',
            array(
                'settings'		=> 'about_page',
                'section'		=> 'about',
                'type'			=> 'dropdown-pages',
                'label'			=> __( 'Select a "About" page' )
            )
        )
    );
    //About section end
    //Features section
    $wp_customize->add_section ( 'features',
        array(
            'title' => __('Features section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'features_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_title',
            array(
                'settings'		=> 'features_title',
                'section'		=> 'features',
                'type'			=> 'text',
                'label'	        => __( 'Features title' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_logo_image',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'features_logo_image',
            array(
                'settings'		=> 'features_logo_image',
                'section'		=> 'features',
                'label'			=> __( 'Upload features logo image')
            )
        )
    );

    $wp_customize->add_setting(
        'features_title_1',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_title_1',
            array(
                'settings'		=> 'features_title_1',
                'section'		=> 'features',
                'type'			=> 'text',
                'label'	        => __( 'Features title 1' )
            )
        )
    );


    $wp_customize->add_setting(
        'features_text_1',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_text_1',
            array(
                'settings'		=> 'features_text_1',
                'section'		=> 'features',
                'type'			=> 'textarea',
                'label'	        => __( 'Features text 1' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_image_1',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'features_image_1',
            array(
                'settings'		=> 'features_image_1',
                'section'		=> 'features',
                'label'			=> __( 'Upload features image 1')
            )
        )
    );

    $wp_customize->add_setting(
        'features_title_2',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_title_2',
            array(
                'settings'		=> 'features_title_2',
                'section'		=> 'features',
                'type'			=> 'text',
                'label'	        => __( 'Features title 2' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_text_2',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_text_2',
            array(
                'settings'		=> 'features_text_2',
                'section'		=> 'features',
                'type'			=> 'textarea',
                'label'	        => __( 'Features text 2' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_image_2',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'features_image_2',
            array(
                'settings'		=> 'features_image_2',
                'section'		=> 'features',
                'label'			=> __( 'Upload features image 2')
            )
        )
    );

    $wp_customize->add_setting(
        'features_title_3',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_title_3',
            array(
                'settings'		=> 'features_title_3',
                'section'		=> 'features',
                'type'			=> 'text',
                'label'	        => __( 'Features title 3' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_text_3',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_text_3',
            array(
                'settings'		=> 'features_text_3',
                'section'		=> 'features',
                'type'			=> 'textarea',
                'label'	        => __( 'Features text 3' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_image_3',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'features_image_3',
            array(
                'settings'		=> 'features_image_3',
                'section'		=> 'features',
                'label'			=> __( 'Upload features image 3')
            )
        )
    );

    $wp_customize->add_setting(
        'features_title_4',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_title_4',
            array(
                'settings'		=> 'features_title_4',
                'section'		=> 'features',
                'type'			=> 'text',
                'label'	        => __( 'Features title 4' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_text_4',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'features_text_4',
            array(
                'settings'		=> 'features_text_4',
                'section'		=> 'features',
                'type'			=> 'textarea',
                'label'	        => __( 'Features text 4' )
            )
        )
    );

    $wp_customize->add_setting(
        'features_image_4',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'features_image_4',
            array(
                'settings'		=> 'features_image_4',
                'section'		=> 'features',
                'label'			=> __( 'Upload features image 4')
            )
        )
    );

    $wp_customize->add_setting(
        'contact-block-title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'contact-block-title',
            array(
                'settings'		=> 'contact-block-title',
                'section'		=> 'features',
                'type'			=> 'text',
                'label'	        => __( 'Contact block title' )
            )
        )
    );

    //Features section end
    //Projects
    $wp_customize->add_section ( 'projects',
        array(
            'title' => __('Projects section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'projects_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'projects_title',
            array(
                'settings'		=> 'projects_title',
                'section'		=> 'projects',
                'type'			=> 'text',
                'label'	        => __( 'Projects title' )
            )
        )
    );

    $wp_customize->add_setting(
        'projects_page',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,'projects_page',
            array(
                'settings'		=> 'projects_page',
                'section'		=> 'projects',
                'type'			=> 'dropdown-pages',
                'label'			=> __( 'Select a "Projects" page' )
            )
        )
    );

    $wp_customize->add_setting(
        'project_img_1',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project_img_1',
            array(
                'settings'		=> 'project_img_1',
                'section'		=> 'projects',
                'label'			=> __( 'Upload img first post')
            )
        )
    );

    $wp_customize->add_setting(
        'project_img_2',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'project_img_2',
            array(
                'settings'		=> 'project_img_2',
                'section'		=> 'projects',
                'label'			=> __( 'Upload img first post')
            )
        )
    );

    //Projects end
    //Services
    $wp_customize->add_section ( 'services',
        array(
            'title' => __('Services section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'services_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'services_title',
            array(
                'settings'		=> 'services_title',
                'section'		=> 'services',
                'type'			=> 'text',
                'label'	        => __( 'Services title' )
            )
        )
    );

    $wp_customize->add_setting(
        'Services_page',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,'Services_page',
            array(
                'settings'		=> 'Services_page',
                'section'		=> 'services',
                'type'			=> 'dropdown-pages',
                'label'			=> __( 'Select a "Services" page' )
            )
        )
    );
    //Services end
    //Testimonials
    $wp_customize->add_section ( 'testimonials',
        array(
            'title' => __('Testimonials section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'testimonials_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'testimonials_title',
            array(
                'settings'		=> 'testimonials_title',
                'section'		=> 'testimonials',
                'type'			=> 'text',
                'label'	        => __( 'Testimonials title' )
            )
        )
    );
    //Testimonials end
    //Our blog section
    $wp_customize->add_section ( 'our_blog',
        array(
            'title' => __('Our blog section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'our_blog_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'our_blog_title',
            array(
                'settings'		=> 'our_blog_title',
                'section'		=> 'our_blog',
                'type'			=> 'text',
                'label'	        => __( 'Our blog title' )
            )
        )
    );

    $wp_customize->add_setting(
        'our_blog_page',
        array(
            'sanitize_callback' => 'absint'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize,'our_blog_page',
            array(
                'settings'		=> 'our_blog_page',
                'section'		=> 'our_blog',
                'type'			=> 'dropdown-pages',
                'label'			=> __( 'Select a "Blog" page' )
            )
        )
    );
    //Our blog section end
    //Quick contact section
    $wp_customize->add_section ( 'quick_contact',
        array(
            'title' => __('Quick contact section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'quick_contact_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'quick_contact_title',
            array(
                'settings'		=> 'quick_contact_title',
                'section'		=> 'quick_contact',
                'type'			=> 'text',
                'label'	        => __( 'Quick contact title' )
            )
        )
    );

    $wp_customize->add_setting(
        'email_icon',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'email_icon',
            array(
                'settings'		=> 'email_icon',
                'section'		=> 'quick_contact',
                'label'			=> __( 'Upload quick email icon')
            )
        )
    );

    $wp_customize->add_setting(
        'email_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'email_title',
            array(
                'settings'		=> 'email_title',
                'section'		=> 'quick_contact',
                'type'			=> 'text',
                'label'	        => __( 'Quick email title' )
            )
        )
    );

    $wp_customize->add_setting(
        'email',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'email',
            array(
                'settings'		=> 'email',
                'section'		=> 'quick_contact',
                'type'			=> 'text',
                'label'	        => __( 'Quick email' )
            )
        )
    );

    $wp_customize->add_setting(
        'call_icon',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'call_icon',
            array(
                'settings'		=> 'call_icon',
                'section'		=> 'quick_contact',
                'label'			=> __( 'Upload quick call icon')
            )
        )
    );

    $wp_customize->add_setting(
        'call_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'call_title',
            array(
                'settings'		=> 'call_title',
                'section'		=> 'quick_contact',
                'type'			=> 'text',
                'label'	        => __( 'Quick call title' )
            )
        )
    );

    $wp_customize->add_setting(
        'quick_call',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'quick_email',
            array(
                'settings'		=> 'quick_call',
                'section'		=> 'quick_contact',
                'type'			=> 'text',
                'label'	        => __( 'Quick call' )
            )
        )
    );

    $wp_customize->add_setting(
        'career_icon',
        array(
            'default'			=> ''
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'career_icon',
            array(
                'settings'		=> 'career_icon',
                'section'		=> 'quick_contact',
                'label'			=> __( 'Upload quick career icon')
            )
        )
    );

    $wp_customize->add_setting(
        'career_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'career_title',
            array(
                'settings'		=> 'career_title',
                'section'		=> 'quick_contact',
                'type'			=> 'text',
                'label'	        => __( 'Quick career title' )
            )
        )
    );

    $wp_customize->add_setting(
        'quick_career',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'quick_career',
            array(
                'settings'		=> 'quick_career',
                'section'		=> 'quick_contact',
                'type'			=> 'text',
                'label'	        => __( 'Quick career' )
            )
        )
    );
    //Quick contact section end
    //Footer section
    $wp_customize->add_section ( 'footer',
        array(
            'title' => __('Footer section'),
            'priority' => 10,
            'panel' => 'Home page panel'
        )
    );

    $wp_customize->add_setting(
        'navigation',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'navigation',
            array(
                'settings'		=> 'navigation',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Navigation title' )
            )
        )
    );

    $wp_customize->add_setting(
        'industry',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'industry',
            array(
                'settings'		=> 'industry',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Industry title' )
            )
        )
    );

    $wp_customize->add_setting(
        'letter_title',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'letter_title',
            array(
                'settings'		=> 'letter_title',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'News letter title' )
            )
        )
    );

    $wp_customize->add_setting(
        'news_letter_text',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'news_letter_text',
            array(
                'settings'		=> 'news_letter_text',
                'section'		=> 'footer',
                'type'			=> 'textarea',
                'label'	        => __( 'News letter text' )
            )
        )
    );

    $wp_customize->add_setting(
        'copyright',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'copyright',
            array(
                'settings'		=> 'copyright',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Copyright text' )
            )
        )
    );

    $wp_customize->add_setting(
        'social_links_facebook',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_links_facebook',
            array(
                'settings'		=> 'social_links_facebook',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Facebook url' )
            )
        )
    );

    $wp_customize->add_setting(
        'social_links_twitter',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_links_twitter',
            array(
                'settings'		=> 'social_links_twitter',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Twitter url' )
            )
        )
    );

    $wp_customize->add_setting(
        'social_links_instagram',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_links_instagram',
            array(
                'settings'		=> 'social_links_instagram',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Instagram url' )
            )
        )
    );

    $wp_customize->add_setting(
        'social_links_linkedin',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_links_linkedin',
            array(
                'settings'		=> 'social_links_linkedin',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Linkedin url' )
            )
        )
    );

    $wp_customize->add_setting(
        'social_links_gplus',
        array(
            'default'			=> '',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Control(
            $wp_customize, 'social_links_gplus',
            array(
                'settings'		=> 'social_links_gplus',
                'section'		=> 'footer',
                'type'			=> 'text',
                'label'	        => __( 'Google+ url' )
            )
        )
    );
    //Footer section end
}
add_action( 'customize_register', 'consult_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function consult_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function consult_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function consult_customize_preview_js() {
	wp_enqueue_script( 'consult-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'consult_customize_preview_js' );
