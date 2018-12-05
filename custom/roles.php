<?php
function za_custom_roles(){
	
	add_role('admin', __( 'Admin' ), array(
										'read'         	=> true,  // true allows this capability
										'edit_posts'   	=> true,
										'delete_posts' 	=> true,
										'publish_posts'	=> true,
										'manage_categories'		=> true,
										'read_private_posts'	=> true,
										'edit_private_posts'	=> true,
										'delete_private_posts' 	=> true,
										'edit_others_posts'		=> true,
										'delete_others_posts'	=> true,
										'edit_published_posts'	=> true,
										'delete_published_posts'	=> true,
										'upload_files' 	=> true, 
										'edit_pages'	=> true,
										'publish_pages'	=> true,
										'delete_pages'	=> true,
										'read_private_pages'	=> true,
										'edit_private_pages'	=> true,
										'delete_private_pages'	=> true,
										'edit_others_pages'		=> true,
										'delete_others_pages'	=> true,
										'edit_published_pages'	=> true,
										'delete_published_pages'=> true,
										'list_users'	=> true,
										'create_users'	=> true,
										'edit_users'	=> true,
										'delete_users'	=> true,
										'moderate_comments' => false,
									)
	);
	
	add_role('agent', __( 'Agent' ), array(
										'read'         	=> true,  // true allows this capability
										'edit_posts'   	=> true,
										'delete_posts' 	=> true,
										'publish_posts'	=> true,
										'manage_categories'		=> true,
										'read_private_posts'	=> true,
										'edit_private_posts'	=> true,
										'delete_private_posts' 	=> true,
										'edit_others_posts'		=> true,
										'delete_others_posts'	=> true,
										'edit_published_posts'	=> true,
										'delete_published_posts'	=> true,
										'upload_files' 	=> true, 
										'edit_pages'	=> true,
										'publish_pages'	=> true,
										'delete_pages'	=> true,
										'edit_published_pages'	=> true,
										'delete_published_pages'=> true,
										'read_private_pages'	=> false,
										'edit_private_pages'	=> false,
										'delete_private_pages'	=> false,
										'edit_others_pages'		=> false,
										'delete_others_pages'	=> false,
										'list_users'	=> false,
										'create_users'	=> false,
										'edit_users'	=> false,
										'delete_users'	=> false,
										'moderate_comments' => false,
								)
	);

}

add_action('init', 'za_custom_roles');

function wporg_simple_role_remove(){
	
    remove_role('admin');
    remove_role('agent');
}

// remove the simple_role
// add_action('init', 'wporg_simple_role_remove');

function za_remove_plugin_admin_menu() {
    if( current_user_can( 'admin' ) ||  current_user_can( 'agent' ) ):
        remove_menu_page('edit.php?post_type=portfolio-item');
        remove_menu_page('edit.php?post_type=testimonials');
        remove_menu_page('edit.php?post_type=carousels');
        remove_menu_page('edit.php?post_type=slides');
        remove_menu_page('edit.php?post_type=project');
        remove_menu_page('edit.php?post_type=zipperagent-listing');
        remove_menu_page('admin.php?page=vc-general');
        remove_menu_page('admin.php?page=vc-welcome');		
		remove_menu_page('vc-general'); //remove visual composer      
		remove_menu_page('vc-welcome'); //remove visual composer      
        remove_menu_page('edit.php?post_type=vc_grid_item');
        remove_menu_page('edit-comments.php');
        remove_menu_page('tools.php');
        // remove_menu_page('users.php');
        // remove_submenu_page('post-new.php?post_type=portfolio-item', 'post-new.php?post_type=portfolio-item');
		
    endif;
}
add_action( 'admin_menu', 'za_remove_plugin_admin_menu', 9999 );

function restrict_menus() {

    if( current_user_can( 'admin' ) ||  current_user_can( 'agent' ) ) {  
        $screen = get_current_screen();
		// echo '<pre>'; print_r($screen); echo '</pre>';
        $base   = $screen->id;
        $post_type   = $screen->post_type;


        if( 'vc_grid_item' == $post_type || 'portfolio-item' == $post_type || 'zipperagent-listing' == $post_type || 'project' == $post_type || 'slides' == $post_type || 'carousels' == $post_type || 'testimonials' == $post_type || 'tools' == $base || 'edit-comments' == $base || 'toplevel_page_vc-welcome' == $base ) {
			//|| 'users' == $base 
            wp_redirect(admin_url());
			exit;
        }
    }
}
add_action( 'current_screen', 'restrict_menus' );

//submenu

add_action( 'admin_menu', 'register_user_restriction_setting', 99 );
function register_user_restriction_setting() {
	
  if(current_user_can('administrator'))
	add_submenu_page(zipperAgentConstants::PAGE_CONFIGURATION, "User Restriction", "User Restriction", "manage_options", 'za-user-restriction', 'user_restriction_setting_display');
  else if(current_user_can('admin'))
	add_menu_page("User Restriction", "User Restriction", "admin", 'za-user-restriction', 'user_restriction_setting_display', ZIPPERAGENTURL . 'img/za-icon.svg');
}  

function user_restriction_setting_display(){
	include ZIPPERAGENTPATH . "/custom/templates/admin/restriction.php";
}

function wpse_hide_special_pages($query) {

    // Make sure we're in the admin and it's the main query
    if ( !is_admin() && !is_main_query() ) {
        return;
    }

    global $typenow;
	$pageID = get_option('page_on_front');

    // Only do this for pages
    if ( 'page' == $typenow && ( current_user_can( 'admin' ) || current_user_can( 'agent' ) ) ) {

        // Don't show the special pages (get the IDs of the pages and replace these)
        $query->set( 'post__not_in', array($pageID) );
        return;

    }

}
add_action('pre_get_posts', 'wpse_hide_special_pages');

function wpse_hide_super_admin($user_search) {

    $user = wp_get_current_user();

    if ( ! current_user_can( 'manage_options' ) ) {

        global $wpdb;

        $user_search->query_where = 
            str_replace('WHERE 1=1', 
            "WHERE 1=1 AND {$wpdb->users}.ID IN (
                 SELECT {$wpdb->usermeta}.user_id FROM $wpdb->usermeta 
                    WHERE {$wpdb->usermeta}.meta_key = '{$wpdb->prefix}capabilities'
                    AND {$wpdb->usermeta}.meta_value NOT LIKE '%administrator%')", 
            $user_search->query_where
        );

    }
	if ( current_user_can( 'admin' ) ) {

        global $wpdb;

        $user_search->query_where = 
            str_replace('WHERE 1=1', 
            "WHERE 1=1 AND {$wpdb->users}.ID IN (
                 SELECT {$wpdb->usermeta}.user_id FROM $wpdb->usermeta 
                    WHERE {$wpdb->usermeta}.meta_key = '{$wpdb->prefix}capabilities'
                    AND {$wpdb->usermeta}.meta_value NOT LIKE '%admin%')", 
            $user_search->query_where
        );

    }
}
add_action('pre_user_query','wpse_hide_super_admin');

function wpse_editable_roles( $roles ){
    if( ! current_user_can('administrator') ){
		
      unset( $roles['administrator']);
      unset( $roles['admin']);
	  
    }
    return $roles;
}
add_filter( 'editable_roles', 'wpse_editable_roles');
?>