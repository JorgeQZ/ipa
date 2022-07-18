<?php
 /**
 * IPA functions
 */

 function ipa_support(){
     add_theme_support('wp-block-styles');
     add_editor_style('style.css');
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'responsive-embeds' );
     add_theme_support( 'editor-styles' );
     add_theme_support( 'html5', array('style','script', ) );
     add_theme_support( 'block-templates' );
     add_theme_support( 'align-wide' );
     add_theme_support( 'custom-spacing' );

     add_image_size( 'logo-header', 200,  75);

     $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );
     add_theme_support( 'custom-logo', $defaults );
 }

 add_action('after_setup_theme', 'ipa_support');


function ipa_scripts() {
    wp_enqueue_style('generals', get_template_directory_uri().'/css/generals.css', [], 'all');

    if(is_page_template( 'page-capacitacion.php' )){
        wp_enqueue_style('capacitacion', get_template_directory_uri().'/css/capacitacion.css', [], 'all');
    }


    if(is_page_template( 'page-servicios.php' )){
        wp_enqueue_style('servicios', get_template_directory_uri().'/css/servicios.css', [], 'all');
    }


    if(is_page_template( 'page-nosotros.php' )){
        wp_enqueue_style('nosotros', get_template_directory_uri().'/css/nosotros.css', [], 'all');
    }


    if(is_page_template( 'page-representacion.php' )){
        wp_enqueue_style('representacion', get_template_directory_uri().'/css/representacion.css', [], 'all');
    }

    if(is_post_type_archive( 'gaceta' )){
        wp_enqueue_style('gaceta', get_template_directory_uri().'/css/gaceta.css', [], 'all');
    }

    if(is_singular( 'gaceta' )){
        wp_enqueue_style('gaceta-single', get_template_directory_uri().'/css/gaceta-single.css', [], 'all');
    }
}
add_action('wp_enqueue_scripts', 'ipa_scripts');


function ipa_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Menú Primario', 'text_domain' ),
    ) );
}
add_action( 'after_setup_theme', 'ipa_register_nav_menu', 0 );

function ipa_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer Columna 1', 'ipa' ),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Columna 2', 'ipa' ),
        'id'            => 'footer-2',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Columna 3', 'ipa' ),
        'id'            => 'footer-3',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Columna 4', 'ipa' ),
        'id'            => 'footer-4',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer Columna 5', 'ipa' ),
        'id'            => 'footer-5',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}

add_action( 'widgets_init', 'ipa_widgets' );


// GACETA

add_action( 'init', 'ipa_posttype_gaceta' );

function ipa_posttype_gaceta(){
    $labels = array(
        'name'                => __('Gaceta'),
        'singular_name'       => __('Gaceta'),
        'add_new'             => __('Agregar nuevo post'),
        'add_new_item'        => __('Agregar nuevo post'),
        'edit_item'           => __('Editar post'),
        'add_new'             => __('Agregar nuevo post'),
        'all_items'           => __('Todos los posts'),
        'view_item'           => __('Ver posts'),
        'search_items'        => __('Buscar posts'),
        'not_found'           => __('No se han encontrado posts de gaceta.'),
		'not_found_in_trash'  => __('No se han encontrado posts de gaceta en la papelera')
    );


    $args = array(
        'labels'            => $labels,
        'description'       => '',
        'public'            => true,
        'menu_position'     => 5,
        'supports'          => array( 'title', 'thumbnail', 'excerpt'),
        'has_archive'       => true,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'query_var'         => 'gaceta'
      );

      register_post_type( 'gaceta', $args);
}
?>
