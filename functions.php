<?php
/**
 * @package headless
 * Functions file
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

require('inc/custom-posts.php');  //register custom posts
require('inc/rest-api/custom-hooks.php');  //register custom hooks

add_theme_support('post-thumbnails');

//set excerpt length 25 
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 25 );
function mytheme_custom_excerpt_length( $length ) {
    return 20;
}