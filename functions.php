<?php
    require get_template_directory(). '/menu.php';
    require get_template_directory(). '/inc/customizer.php';

    function load_scripts(){
        wp_enqueue_style('google_api', get_template_directory_uri().'/https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900', array(), '1.0', 'all');
        wp_enqueue_style('font_awsome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
        wp_enqueue_style('estilo', get_template_directory_uri().'/css/style.css', array(), '1.0', 'all');
        wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', array(), '1.0', 'all');    
        wp_enqueue_style( 'cssmenu-styles', get_template_directory_uri() . '/menus/cssmenu/styles.css');  
        wp_enqueue_style( 'estilos', get_template_directory_uri() . '/css/estilos.css');    
       
       
        wp_enqueue_script('jquery-js', get_template_directory_uri(). '/js/jquery.min.js', array(), '4.0.0',true);
        wp_enqueue_script('poper-js', get_template_directory_uri(). '/js/popper.js', array(), '4.0.0',true);
        wp_enqueue_script('bootstrap-js', get_template_directory_uri(). '/js/bootstrap.min.js', array(), '4.0.0',true);
        wp_enqueue_script('main-js', get_template_directory_uri(). '/js/main.js', array(), '4.0.0',true);
        wp_enqueue_script('cssmenu-js', get_template_directory_uri(). '/menus/cssmenu/script.js', array(), '4.0.0',true);
        wp_enqueue_script('slider-js', get_template_directory_uri(). '/js/vertical.news.slider.js', array(), '4.0.0',true);
        wp_enqueue_script('mask-js', get_template_directory_uri(). '/js/jquery.mask.js', array('jquery'), '1.14.16',true);

    }

    add_action('wp_enqueue_scripts', 'load_scripts');

   
    


    function wpcurso_config(){
        //registrando o menu
        register_nav_menus(
            array(
                'my_main_menu' => 'Main Menu',
                'my_top_menu' => 'Menu Responsivo'
            )
        );

        //imagem de cabeçalho
        $args = array(
            'height' => 350,
            'width' => 1920
        );
        add_theme_support('custom-header', $args);
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag');
        set_post_thumbnail_size( '1280', '720',true );
        add_theme_support( 'post-formats', array('video', 'image', 'gallery','link'));
        add_theme_support( 'custom-logo' );
        add_filter( 'excerpt_length',function($lenght){
            return 30;
        
        } );

        //definir o estilo da paginação
        add_filter( 'next_posts_link_attributes', 'posts_link_attibutes' );
        add_filter( 'previous_posts_link_attributes', 'posts_link_attibutes' );
    }

    add_action( 'after_setup_theme', 'wpcurso_config', 0 );



    add_action( 'widgets_init', 'wp_sidebar_1', 0 ) ; 

    function wp_sidebar_1(){
        register_sidebar(
            array(
                'name' => 'Sidebar para página index e single',
                'id' => 'wp-sidebar-1',
                'description' => 'Sidebar para página index e single',

                'before_title' => '<h4 class= "title">',
                'after_title' => '</h4>'
            )
            );
    }

    function wp_sidebar_2(){
        register_sidebar(
            array(
                'name' => 'Sidebar para pesquisa',
                'id' => 'wp-sidebar-2',
                'description' => 'Sidebar para widget de pesquisa',
                'before_title' => '<h4 class= "title">',
                'after_title' => '</h4>'
            )
            );
    }



    add_action( 'widgets_init', 'wp_sidebar_2', 0 ) ; 



    // remove version from head

    remove_action('wp_head', 'wp_generator');

    // remove version from rss
    add_filter('the_generator', '__return_empty_string');

    // remove version from scripts and styles

    function shapeSpace_remove_version_scripts_styles($src) {
        if (strpos($src, 'ver=')){
            $src = remove_query_arg('ver', $src);
        }
        return $src;
    }

    add_filter('style_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);
    add_filter('script_loader_src', 'shapeSpace_remove_version_scripts_styles', 9999);

   

   