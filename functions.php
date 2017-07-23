<?php
/**
 * Created by PhpStorm.
 * User: tombeckerle
 * Date: 6/12/17
 * Time: 7:55 PM
 */
 
 add_action( 'wp_enqueue_scripts', 'mat_assets' );
 function mat_assets() {
 	wp_enqueue_style( 'my-awesome-theme', get_stylesheet_uri() );
 }
