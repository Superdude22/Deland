<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php'); 

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php'); 

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 

//Post Thumbnails
add_theme_support( 'post-thumbnails' ); 

//WooCommerce Support
//don't use woo css.  
define('WOOCOMMERCE_USE_CSS', false);

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//Adjust Cart Output

/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );

//remove sort thingy
remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
//remove results count
//remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    //unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

function get_the_brand(){
	global $post;
	$term_list = wp_get_post_terms($post->ID, 'product_brand', array("fields" => "all"));
	return $term_list[0]->name; 
}


function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}

function site_data(){
		//1864
	$data_post = 82;

	return $data_post;
}

function nav_array(){
//'1846, 1828, 1855'
 $string = '9, 70, 1887';

 return $string;

}

function photo_credit( $attachment_id ) {

	$attachment = get_post( $attachment_id );
	$caption = $attachment->post_excerpt;
	return array(
		'description' => $attachment->post_content,
		'caption' => $attachment->post_excerpt
	);
}

/*** Remove Query String from Static Resources ***/
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

add_filter( 'woocommerce_product_add_to_cart_url',  'vouch_atc_link' ); 

function vouch_atc_link( $text ) {
     global $post, $product;

     	//$here = $product->get_name();
     	$url = get_permalink( $product->get_id());
     	//echo $url;
     	$product_id = $product->get_id();
      $search = '';
     	$search = $product->get_category_ids();
     	
      //print_r($search);
      $v_cat = array_search('19', $search);
      //echo $v_cat;
     	if($v_cat){
     		echo '<a href="'.  $url.'" class="button">Personalize</a> ';

        return;
     	}else{
       
        return;
      }      
     
}

//Icons In Widget Titles
add_filter('widget_title', 'do_shortcode');

add_shortcode('fa-cart', 'shortcode_facart');

function shortcode_facart( $attr ){
  return '<i class="fa fa-shopping-cart fa-fw"></i>';
}

//woo commerce pagination
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 15;
  return $cols;
}