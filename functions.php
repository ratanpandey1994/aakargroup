<?php 

function load_stylesheets() {

	wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), 1,'all');
	wp_enqueue_style('bootstrap');

	// wp_register_style('styles', get_template_directory_uri() . '/css/styles.css', array(),1,'all');
	// wp_enqueue_style('styles');		
	
	wp_register_style('style', get_template_directory_uri() . '/style.css', array(),1,'all');	
	wp_enqueue_style('style');

	wp_register_style('color_default', get_template_directory_uri() . '/dist/color-default.css', array(), 1,'all');
	wp_enqueue_style('color_default');

	wp_register_style('color_switcher', get_template_directory_uri() . '/dist/color-switcher.css', array(), 1,'all');
	wp_enqueue_style('color_switcher');

	wp_register_style('magnific_popup', get_template_directory_uri() . '/css/magnific-popup.css', array(), 1,'all');
	wp_enqueue_style('magnific_popup');

	wp_register_style('animate', get_template_directory_uri() . '/css/animate.css', array(), 1,'all');
	wp_enqueue_style('animate');

	wp_register_style('owl', get_template_directory_uri() . '/css/owl.css', array(),1,'all');
	wp_enqueue_style('owl');

	wp_register_style('jquery_fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css', array(), 1,'all');
	wp_enqueue_style('jquery_fancybox');

	wp_register_style('rs-plugin', get_template_directory_uri() . '/rs-plugin/css/settings.css', array(), 1,'all');
	wp_enqueue_style('rs-plugin');

	wp_register_style('style_slider', get_template_directory_uri() . '/css/style_slider.css', array(), 1,'all');
	wp_enqueue_style('style_slider');

	wp_register_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), 1,'all');
	wp_enqueue_style('font_awesome');


	
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


//Load Scripts

function addjs()
{
	wp_register_script('jquery_2', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery_2');

	wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), 1, 1, 1);
	wp_enqueue_script('bootstrap');

	wp_register_script('jquery_magnific', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery_magnific');

	wp_register_script('isotope', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array(), 1, 1, 1);
	wp_enqueue_script('isotope');

	wp_register_script('imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), 1, 1, 1);
	wp_enqueue_script('imagesloaded');

	wp_register_script('jquery_fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery_fancybox');

	wp_register_script('owl', get_template_directory_uri() . '/js/owl.carousel.js', array(), 1, 1, 1);
	wp_enqueue_script('owl');

	wp_register_script('jquery_themepunch', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.tools.min.js', array(), 1, 1, 1);
	wp_enqueue_script('jquery_themepunch');

	wp_register_script('themepunch_revolution', get_template_directory_uri() . '/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), 1, 1, 1);
	wp_enqueue_script('themepunch_revolution');

	wp_register_script('counter', get_template_directory_uri() . '/js/counter.js', array(), 1, 1, 1);
	wp_enqueue_script('counter');

	wp_register_script('main', get_template_directory_uri() . '/js/main.js', array(), 1, 1, 1);
	wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'addjs');

add_theme_support('menus');
register_nav_menus(
	array('top_menu' => 'Top Menu')
);



add_filter( 'nav_menu_link_attributes', function($atts) {
        $atts['class'] = "hvr-link";
        return $atts;
}, 100, 1 );



add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}


function wpdocs_add_menu_parent_class( $items ) {
    $parents = array();
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }
    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'dropdown'; 
        }
    }
    return $items;
}
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );


add_filter('use_block_editor_for_post', '__return_false', 10); 
add_filter('use_block_editor_for_post_type', '__return_false', 10);

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 1568, 9999 );




add_action('init', 'portfolios_categories_register');
function portfolios_categories_register() {
	$labels = array(
		'name'                          => 'Portfolios Categories',
		'singular_name'                 => 'Portfolios Category',
		'search_items'                  => 'Search Portfolios Categories',
		'popular_items'                 => 'Popular Portfolios Categories',
		'all_items'                     => 'All Portfolios Categories',
		'parent_item'                   => 'Parent Portfolio Category',
		'edit_item'                     => 'Edit Portfolio Category',
		'update_item'                   => 'Update Portfolio Category',
		'add_new_item'                  => 'Add New Portfolio Category',
		'new_item_name'                 => 'New Portfolio Category',
		'separate_items_with_commas'    => 'Separate portfolios categories with commas',
		'add_or_remove_items'           => 'Add or remove portfolios categories',
		'choose_from_most_used'         => 'Choose from most used portfolios categories'
    );
	$args = array(
		'label'                         => 'Portfolios Categories',
		'labels'                        => $labels,
		'public'                        => true,
		'hierarchical'                  => true,
		'show_ui'                       => true,
		'show_in_nav_menus'             => true,
		'args'                          => array( 'orderby' => 'term_order' ),
		'rewrite'                       => array( 'slug' => 'portfolios', 'with_front' => true, 'hierarchical' => true ),
		'query_var'                     => true
	);
	register_taxonomy( 'portfolios_categories', 'portfolios', $args );
}


add_action('init', 'portfolios_register');
function portfolios_register() {
    $labels = array(
		'name' => 'Images Portfolio',
		'singular_name' => 'Images Portfolio',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Portfolio',
		'edit_item' => 'Edit Portfolio',
		'new_item' => 'New Portfolio',
		'view_item' => 'View Portfolio',
		'search_items' => 'Search Portfolios',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Trash',
		'parent_item_colon' => ''
	);
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'portfolios', 'with_front' => true ),
		'capability_type' => 'post',
		'menu_position' => 6,
		'supports' => array('title', 'excerpt', 'editor','thumbnail') 
	);
    register_post_type( 'portfolios' , $args );
}





add_action('init', 'portfolio_videos_categories_register');
function portfolio_videos_categories_register() {
	$labels = array(
		'name'                          => 'Portfolio Videos Categories',
		'singular_name'                 => 'Portfolio Videos Category',
		'search_items'                  => 'Search Portfolio Videos Categories',
		'popular_items'                 => 'Popular Portfolio Videos Categories',
		'all_items'                     => 'All Portfolio Videos Categories',
		'parent_item'                   => 'Parent Portfolio Video Category',
		'edit_item'                     => 'Edit Portfolio Video Category',
		'update_item'                   => 'Update Portfolio Video Category',
		'add_new_item'                  => 'Add New Portfolio Video Category',
		'new_item_name'                 => 'New Portfolio Video Category',
		'separate_items_with_commas'    => 'Separate portfolio Videos categories with commas',
		'add_or_remove_items'           => 'Add or remove portfolio Videos categories',
		'choose_from_most_used'         => 'Choose from most used portfolio Videos categories'
    );
	$args = array(
		'label'                         => 'Portfolio Video Categories',
		'labels'                        => $labels,
		'public'                        => true,
		'hierarchical'                  => true,
		'show_ui'                       => true,
		'show_in_nav_menus'             => true,
		'args'                          => array( 'orderby' => 'term_order' ),
		'rewrite'                       => array( 'slug' => 'portfolio_videos', 'with_front' => true, 'hierarchical' => true ),
		'query_var'                     => true
	);
	register_taxonomy( 'portfolio_videos_categories', 'portfolio_videos', $args );
}


add_action('init', 'portfolio_videos_register');
function portfolio_videos_register() {
    $labels = array(
		'name' => 'Portfolio Video Link',
		'singular_name' => 'Portfolio Video Link',
		'add_new' => 'Add New',
		'add_new_item' => 'Insert Link to Add Videos',
		'edit_item' => 'Edit Portfolio Videos Link',
		'new_item' => 'New Portfolio Videos Link',
		'view_item' => 'View Portfolio Videos Link',
		'search_items' => 'Search Portfolio Videos Link',
		'not_found' =>  'Nothing found',
		'not_found_in_trash' => 'Nothing found in Trash',
		'parent_item_colon' => ''
	);
    $args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'has_archive' => true,
		'rewrite' => array( 'slug' => 'portfolio_videos', 'with_front' => true ),
		'capability_type' => 'post',
		'menu_position' => 6,
		'supports' => array('title', 'excerpt', 'editor','thumbnail') 
	);
    register_post_type( 'portfolio_videos' , $args );
}


?>

