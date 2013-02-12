<?php
/* Disable the Admin Bar
-----------------------------------------------------------------------------------*/
add_filter( 'show_admin_bar', '__return_false' );


/* Turn on Post Thumbnails
-----------------------------------------------------------------------------------*/
if ( function_exists( 'add_theme_support' ) ){
	add_theme_support('post-thumbnails');
	// name of the thumbnail, width, height, crop mode
 add_image_size( 'cover-image', 230, 9999 ); // post image shown in the gallery page (category.php)
	// Use: < ? php if ( has_post_thumbnail() ) { the_post_thumbnail('product-thumb'); } ? >
  // add_image_size( 'product-main',  520, 520, false );
}


/* Disable the Editor in the post and page edit screens
-----------------------------------------------------------------------------------*/
function remove_editors(){
    remove_post_type_support( 'post', 'editor' );
    remove_post_type_support( 'page', 'editor' );
}   
add_action( 'init', 'remove_editors' );
?>