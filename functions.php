<?php

function bateaux_child_init()
{
	wp_enqueue_style( 'bateaux-child', get_stylesheet_uri() , array( 'bateaux' ) );
}
add_action( 'wp_enqueue_scripts', 'bateaux_child_init' );


//*** Remove this comment to enable blueprint with custom post type. Replace the post type name you want into "xxxxxxx".***///
// function bateaux_child_post_types( $post_types )
// {
// 	$post_types[] = 'xxxxxxx';
// 	return $post_types;
// }
//
// add_filter( 'bateaux_blueprint_post_types', 'bateaux_child_post_types' );


//*** Remove this comment to enable media library to be able to upload SVG file type.***///
// function bateaux_child_mime_types( $mimes )
// {
//   $mimes['svg'] = 'image/svg+xml';
//   return $mimes;
// }
// add_filter( 'upload_mimes', 'bateaux_child_mime_types' );
