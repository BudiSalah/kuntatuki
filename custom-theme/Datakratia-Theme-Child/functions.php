<?php
function hello_elementor_child_enqueue_scripts() {
	
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css');	
	wp_enqueue_style('bootstrap-style', "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css", array('parent-style'));
    wp_enqueue_style('datatable-css', "https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css");
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));
    wp_enqueue_script("jquery-child", "https://code.jquery.com/jquery-3.5.1.slim.min.js", array(), false, true);
    wp_enqueue_script("popper-child", "https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js", array(), false, true);
    wp_enqueue_script("bootstrapjs-child", "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), false, true);
    wp_enqueue_script("datatable-js", "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js", array(), false, true);
    wp_enqueue_script("custom-script", get_stylesheet_directory_uri() . "/js/script.js", array(), false, true);
	
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts');

function add_bootstrap_cdn_attributes( $html, $handle ) {
    if ( 'bootstrap-style' === $handle ) {
        return str_replace( "media='all'", "integrity='sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z' crossorigin='anonymous'", $html );
    }
    return $html;
}
add_filter( 'style_loader_tag', 'add_bootstrap_cdn_attributes', 10, 2 );

function jquery_attributes( $tag, $handle, $src ) {
    if ( 'jquery-child' === $handle ) {
        $tag = str_replace( 'src=', 'src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"', $tag);
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'jquery_attributes', 10, 3 );

function popper_attributes( $tag, $handle, $src ) {
    if ( 'popper-child' === $handle ) {
        $tag = str_replace( 'src=', 'src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"', $tag);
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'popper_attributes', 10, 3 );

function bootstrapjs_attributes( $tag, $handle, $src ) {
    if ( 'bootstrapjs-child' === $handle ) {
        $tag = str_replace( 'src=', 'src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"', $tag);
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'bootstrapjs_attributes', 10, 3 );

/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Sidebar', 'hello-elementor' ),
        'id'            => 'leftsidebar-sidebar-1',
        'description'   => __( 'Left Sidebar.', 'hello-elementor' ),
        'before_widget' => '<div id="%1$s" class="left-siderbar-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="leftsidebar-widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );