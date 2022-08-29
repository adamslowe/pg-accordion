<?php
/**
 * Plugin Name:       PG Accordion Demo
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Describe what the plugin does.
 * Version:           1.0.0
 * Requires at least: 5.5
 * Requires PHP:      5.3
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       pgaccordion_demo
 * Domain Path:       /languages
*/

 

if ( ! function_exists( 'pgaccordion_demo_plugin_base_url' ) ) :
 
function pgaccordion_demo_plugin_base_url() {
    global $pgaccordion_demo_plugin_base_url_value;
    if(empty($pgaccordion_demo_plugin_base_url_value)) {
        $pgaccordion_demo_plugin_base_url_value = plugin_dir_url( __FILE__ );
    }
    return $pgaccordion_demo_plugin_base_url_value;
}

endif;

if ( ! function_exists( 'pgaccordion_demo_plugin_base_path' ) ) :
 
function pgaccordion_demo_plugin_base_path() {
    global $pgaccordion_demo_plugin_base_path_value;
    if(empty($pgaccordion_demo_plugin_base_path_value)) {
        $pgaccordion_demo_plugin_base_path_value = plugin_dir_path(  __FILE__ );
    }
    return $pgaccordion_demo_plugin_base_path_value;
}

endif;
 
if ( ! function_exists( 'pgaccordion_demo_setup' ) ) :

function pgaccordion_demo_setup() {

    pgaccordion_demo_plugin_base_url();
    /*
     * Make the plugin available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_plugin_textdomain( 'pgaccordion_demo', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    /*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
    /*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
}
endif; // pgaccordion_demo_setup

add_action( 'after_setup_theme', 'pgaccordion_demo_setup' );


if ( ! function_exists( 'pgaccordion_demo_init' ) ) :

function pgaccordion_demo_init() {

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // pgaccordion_demo_setup

add_action( 'init', 'pgaccordion_demo_init' );


if ( ! function_exists( 'pgaccordion_demo_custom_image_sizes_names' ) ) :

function pgaccordion_demo_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'pgaccordion_demo_custom_image_sizes_names' );
endif;// pgaccordion_demo_custom_image_sizes_names


if ( ! function_exists( 'pgaccordion_demo_widgets_init' ) ) :

function pgaccordion_demo_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'pgaccordion_demo_widgets_init' );
endif;// pgaccordion_demo_widgets_init



if ( ! function_exists( 'pgaccordion_demo_customize_register' ) ) :

function pgaccordion_demo_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'pgaccordion_demo_customize_register' );
endif;// pgaccordion_demo_customize_register


if ( ! function_exists( 'pgaccordion_demo_enqueue_scripts' ) ) :
    function pgaccordion_demo_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'pgaccordion_demo_enqueue_scripts' );
endif;

if ( ! function_exists( 'pgaccordion_demo_pgwp_sanitize_placeholder' ) ) :
    function pgaccordion_demo_pgwp_sanitize_placeholder($input) { return $input; }
endif;

    /*
     * Resource files included by Pinegrow.
     */
    /* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
require_once "inc/wp_pg_helpers.php";
require_once "inc/wp_pg_blocks_helpers.php";

    /* Pinegrow generated Include Resources End */

/* Creating Editor Blocks with Pinegrow */

function pgaccordion_demo_blocks_init() {
    // Register blocks. Don't edit anything between the following comments.
    /* Pinegrow generated Register Pinegrow Blocks Begin */
    require_once 'blocks/pg-accordion-item/pg-accordion-item_register.php';
    require_once 'blocks/pg-accordion-block/pg-accordion-block_register.php';

    /* Pinegrow generated Register Pinegrow Blocks End */
}
add_action('init', 'pgaccordion_demo_blocks_init');

/* End of creating Editor Blocks with Pinegrow */

?>