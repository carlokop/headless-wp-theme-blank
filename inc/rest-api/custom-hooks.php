<?php
/**
  * @package  headless
 */


 /**
  * Callback for something
  * Endpoint /wp-json/wp/v2/base/views/ + post_id
  */

 add_action( 'rest_api_init', function () {
    register_rest_route( 'wp/v2/base','/views/(?P<id>\d+)', array(
      'methods' => 'GET',
      'callback' => 'post_callback_function',
    ));
  });

function post_callback_function( WP_REST_Request $request ) {
  //do something
}
