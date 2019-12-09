<?php

    function enqueue_function(){
        wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
        wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css');
        wp_enqueue_style('icons', get_template_directory_uri().'/css/line-icons.css');
        wp_enqueue_style('carousel', get_template_directory_uri().'/css/owl.carousel.css');
        wp_enqueue_style('owl-theme', get_template_directory_uri().'/css/owl.theme.css');
        wp_enqueue_style('lightbox', get_template_directory_uri().'/css/nivo-lightbox.css');
        wp_enqueue_style('magnifix-popup', get_template_directory_uri().'/css/magnific-popup.css');
        wp_enqueue_style('slicknav', get_template_directory_uri().'/css/slicknav.css');
        wp_enqueue_style('animate', get_template_directory_uri().'/css/animate.css');
        wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
        wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css');
        wp_enqueue_style('my-style', get_stylesheet_uri());


        wp_deregister_script('jquery');
        wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js", false, null);
        wp_enqueue_script('jquery');


        // wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('popper', get_template_directory_uri().'/js/popper.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('mixitup', get_template_directory_uri().'/js/jquery.mixitup.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('lightbox-js', get_template_directory_uri().'/js/nivo-lightbox.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('carousel-js', get_template_directory_uri().'/js/owl.carousel.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('stellar', get_template_directory_uri().'/js/jquery.stellar.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('scrolling', get_template_directory_uri().'/js/scrolling-nav.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('easing', get_template_directory_uri().'/js/jquery.easing.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('smoothscroll', get_template_directory_uri().'/js/smoothscroll.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('slicknav-js', get_template_directory_uri().'/js/jquery.slicknav.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('vide', get_template_directory_uri().'/js/jquery.vide.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('counterup', get_template_directory_uri().'/js/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('waypoints', get_template_directory_uri().'/js/waypoints.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('form-validator', get_template_directory_uri().'/js/form-validator.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('contact-form', get_template_directory_uri().'/js/contact-form-script.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1.0.0', true);
    }


    add_action('wp_enqueue_scripts','enqueue_function');

    function register_resources() { 
        register_nav_menu('header-menu','Nav');

        $args = array(
            'public' => true,
            'label'  => 'Sections',
            //gutenburg block
            'show_in_rest' => true,
            'supports' => array('title','editor')
        );
        register_post_type( 'section', $args );

        $args = array(
            'public' => true,
            'label'  => 'About',
            'show_in_rest' => true,
            'supports' => array('title','editor')
        );
        register_post_type( 'about', $args );

        $args = array(
            'public' => true,
            'label'  => 'Packages',
            'show_in_rest' => true,
            'supports' => array('title','editor')
        );
        register_post_type( 'packages', $args );

        $args = array(
            'public' => true,
            'label'  => 'Gallery',
            // 'show_in_rest' => true,
            // 'supports' => array('title','editor')
        );
        register_post_type( 'gallery', $args );

        $args = array(
            'label' => 'Type',
            'rewrite' => array('slug' => 'type'),
            'hierarchical' => true,
        );
        register_taxonomy( 'type', 'section', $args );

        $args = array(
            'hierarchical'          => true,
            'labels'                => array(
                'name' => 'Filters',
                'singular_name' => 'Filter',
                'menu_name' => 'Filters'
            ),
            'public' => true,
            'show_in_nav_menues' => true
        );
        register_taxonomy( 'filter', 'gallery', $args );
    }
    add_action( 'init', 'register_resources' );

    function mytheme_customize_register( $wp_customize ) {

        $wp_customize->add_section( 'settings' , array(
            'title'      => 'Settings',
            'priority'   => 30,
        ) );

        $wp_customize->add_setting( 'logo-image' , array(
            'default'     => '',
            'transport'   => 'refresh',
        ) );

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                'logo',
                array(
                    'label'      => 'Upload Logo',
                    'section'    => 'settings',
                    'settings'   => 'logo-image',
                    // 'context'    => 'your_setting_context'
                )
            )
        );

    }

    add_action( 'customize_register', 'mytheme_customize_register' );

?>