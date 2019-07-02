<?php

function delete_cache_rewrite() {
    add_rewrite_rule( 'delete-cache/(.*)/?', 'index.php?delete-cache=$matches[1]', 'top' );
}
add_action( 'init', 'delete_cache_rewrite' );

function filter_query_vars( $query_vars ) {
    $query_vars[] = 'delete-cache';

    return $query_vars;
}
add_filter( 'query_vars', 'filter_query_vars' );

function my_template_include( $template ) {
    global $wp_query, $wpdb;

    // You could normally swap out the template WP wants to use here, but we'll just die
    if ( isset( $wp_query->query_vars['delete-cache'] ) && ! is_page() && ! is_single() ) {
        $wp_query->is_404 = false;
        $wp_query->is_archive = true;
        $wp_query->is_category = true;
        $username = $wp_query->query_vars['delete-cache'];
		
		$user_id = $wpdb->get_var("SELECT ID from $wpdb->users WHERE user_login='$username' AND user_login != ''");
		if($user_id && $_SERVER['REQUEST_METHOD'] == 'POST'){
			zipperagent_clear_caches();
			$message['clear_cache']=1;
		}else{
			$message['clear_cache']=0;
		}
		
        header( 'Content-Type: application/json' );
        die( json_encode( $message ) );
    } else {
        return $template;
    }
}
add_filter( 'template_include', 'my_template_include' );