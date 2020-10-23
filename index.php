<?php 
/*
Plugin Name: ALT Lab Pressbooks Global
Plugin URI:  https://github.com/
Description: For stuff that's global in Pressbooks
Version:     1.0
Author:      ALT Lab
Author URI:  http://altlab.vcu.edu
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

function alt_press_gravityforms_for_editors() {
    // Gets the simple_role role object.
    $role = get_role( 'editor' );
 
    // Add a new capability.
    $role->add_cap( 'gravityforms_create_form', true );
    $role->add_cap( 'gravityforms_edit_forms', true );
    $role->add_cap( 'gravityforms_preview_forms', true );
    $role->add_cap( 'gravityforms_view_entries', true );
}
 
// Add simple_role capabilities, priority must be after the initial role definition.
add_action( 'init', 'alt_press_gravityforms_for_editors', 11 );



//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
