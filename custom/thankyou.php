<?php
// ---------------------------------------------------------------------------
// Add virtual pages.
// ---------------------------------------------------------------------------
 
/**
 * First create a query variable addition for the pages. This means that
 * WordPress will recognize index.php?virtualpage=name
 */
function virtualpage_query_vars($vars) {
  $vars[] = 'pagename';
  return $vars;
}
// add_filter('query_vars', 'virtualpage_query_vars');
 
/**
 * Add redirects to point desired virtual page paths to the new 
 * index.php?virtualpage=name destination.
 *
 * After this code is updated, the permalink settings in the administration
 * interface must be saved before they will take effect. This can be done 
 * programmatically as well, using flush_rewrite_rules() triggered on theme
 * or plugin install, update, or removal.
 */
function virtualpage_add_rewrite_rules() {
  // add_rewrite_tag('%virtualpage%', '([^&]+)');
  add_rewrite_rule(
    '^thankyou$',
    'index.php?pagename=thankyou',
    'top'
  );
 
  // An alternative approach.
  // add_rewrite_rule(
  //   'vp/([^/]*)/?$',
  //   'index.php?virtualpage=$matches[1]',
  //   'top'
  // );
 
  // There is also nothing stopping you from declaring more new variables
  // via query_vars and mixing them in if a page needs additional parameters.
  // add_rewrite_tag('%vp_state%', '([^&]+)');
  // add_rewrite_rule(
  //   'thankyou/([^/]*)/?$',
  //   'index.php?virtualpage=thankyou&vp_state=$matches[1]',
  //   'top'
  // );
}
// add_action('init', 'virtualpage_add_rewrite_rules');
 
/**
 * Assign templates to the virtual pages.
 */
function virtualpage_template_include($template) {
  global $wp_query;
  $new_template = '';
 
  if (array_key_exists('pagename', $wp_query->query_vars)) {
    switch ($wp_query->query_vars['pagename']) {
      case 'thankyou':
        // We expect to find virtualpage-thankyou.php in the 
        // currently active theme.
		
		// $wp_query->post = $post;
		// echo "<pre>"; print_r( $wp_query );echo "</pre>";
        $new_template = locate_template(array(
          'page.php'
        ));
        break;
    }
 
    if ($new_template != '') {
      return $new_template;
    } /* else {
      // This is not a valid virtualpage value, so set the header and template
      // for a 404 page.
      $wp_query->set_404();
      status_header(404);
      return get_404_template();
    } */
  }
 
  return $template;
}
// add_filter('template_include', 'virtualpage_template_include');

if (!class_exists('WP_EX_PAGE_ON_THE_FLY')){
    /**
    * WP_EX_PAGE_ON_THE_FLY
    * @author Ohad Raz
    * @since 0.1
    * Class to create pages "On the FLY"
    * Usage: 
    *   $args = array(
    *       'slug' => 'fake_slug',
    *       'post_title' => 'Fake Page Title',
    *       'post content' => 'This is the fake page content'
    *   );
    *   new WP_EX_PAGE_ON_THE_FLY($args);
    */
    class WP_EX_PAGE_ON_THE_FLY
    {

        public $slug ='';
        public $args = array();
        /**
         * __construct
         * @param array $arg post to create on the fly
         * @author Ohad Raz 
         * 
         */
        function __construct($args){
            add_filter('the_posts',array($this,'fly_page'));
            $this->args = $args;
            $this->slug = $args['slug'];
        }

        /**
         * fly_page 
         * the Money function that catches the request and returns the page as if it was retrieved from the database
         * @param  array $posts 
         * @return array 
         * @author Ohad Raz
         */
        public function fly_page($posts){
            global $wp,$wp_query;
            $page_slug = $this->slug;

            //check if user is requesting our fake page
            if(count($posts) == 0 && (strtolower($wp->request) == $page_slug || ( isset($wp->query_vars['page_id']) && $wp->query_vars['page_id'] == $page_slug))){
				
				ob_start();
				include_once ZIPPERAGENTPATH . '/custom/templates/template-thankyou.php';
				$content = ob_get_clean();
				
                //create a fake post
                $post = new stdClass;
                $post->post_author = 1;
                $post->post_name = $page_slug;
                $post->guid = get_bloginfo('wpurl' . '/' . $page_slug);
                $post->post_title = 'page title';
                //put your custom content here
                $post->post_content = $content;
                //just needs to be a number - negatives are fine
                $post->ID = -42;
                $post->post_status = 'static';
                $post->comment_status = 'closed';
                $post->ping_status = 'closed';
                $post->comment_count = 0;
                //dates may need to be overwritten if you have a "recent posts" widget or similar - set to whatever you want
                $post->post_date = current_time('mysql');
                $post->post_date_gmt = current_time('mysql',1);

                $post = (object) array_merge((array) $post, (array) $this->args);
                $posts = NULL;
                $posts[] = $post;

                $wp_query->is_page = true;
                $wp_query->is_singular = true;
                $wp_query->is_home = false;
                $wp_query->is_archive = false;
                $wp_query->is_category = false;
                unset($wp_query->query["error"]);
                $wp_query->query_vars["error"]="";
                $wp_query->is_404 = false;
            }

            return $posts;
        }
    }//end class
}//end if

add_action('init', 'thankyou_page_content' );

function thankyou_page_content(){
	
	
	$args = array(
			'slug' => 'thankyou',
			'post_title' => 'Thank You',
		);
	$post = new WP_EX_PAGE_ON_THE_FLY($args);
}