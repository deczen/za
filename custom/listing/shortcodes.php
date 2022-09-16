<?php
function full_panel_func( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'color' => 'grey',
		'class' => '',
		'image' => '',
		'contain' => 'true'
	), $atts ) );

	if ( $image != '' ) {
	$html .= '<div class="hp_panel '.$color.'-panel '. $class .' image-panel" style="background-image:url(\''.$image.'\');">';
	} else {
	$html .= '<div class="hp_panel '.$color.'-panel '. $class .'">';
	}
	if ( $contain == "true" ) {
			$html .= '<div class="za-container">';
	}
	$html .= do_shortcode($content);

	if ( $contain == "true" ) {
			$html .= '</div>';
	}

	$html .= '</div>';

	return $html;

}

add_shortcode( 'full_panel', 'full_panel_func' );


// Panel Shortcode
function panel_func( $atts, $content = null ) {
    extract( shortcode_atts( array(
        'slug' => '',
    ), $atts ) );

if ( $slug !== '' ) {
$args = array(
                'post_type' => 'homepage_panel',
                'name' => $slug
        );
$p_query = new WP_Query( $args );

ob_start(); 

while ( $p_query->have_posts() ) : $p_query->the_post();

    get_template_part( 'panel', $slug );

endwhile;   

$html .= ob_get_clean();

}

    return $html;

}
add_shortcode( 'panel', 'panel_func' );

// Column Shortcode
function art_col_func( $atts, $content = null ) {
	$a = shortcode_atts( array(
			'xs' => '12',
			'sm' => '',
			'md' => '',
			'lg' => '',
			'class' => '',
			'bg' => '',
			'first' => '',
			'last' => ''
		), $atts );

	if ( $a[ 'first' ] == '1' ) { $html .= '<div class="row artcols">'; }
	$html .= '<div class="art-col col-xs-'.$a['xs'].' col-sm-'.$a['sm'].' col-md-'.$a['md'].' col-lg-'.$a['lg'].' '.$a['class'].'" style="background-image:url('.$a['bg'].');">';
	
	$html .= do_shortcode($content);

	$html .= '</div>';
	if ( $a[ 'last' ] == '1' ) { $html .= '</div>'; }

	return $html;

}
add_shortcode( 'art-col', 'art_col_func' );

// VIDEO SHORTCODE
function art_vid_func( $atts ) {
    $a = shortcode_atts( array(
        'url' => '',
	'image' => '',
    ), $atts );
	
	if ( strpos( $a['url'], 'you' ) !== false ) {
		$url = str_replace('watch?v=', 'embed/', $a['url']);	
		$parse = parse_url( $a['url'] );
		$id = str_replace('v=', '', $parse['query'] );
		$class = 'artYoutube';
	} elseif ( strpos( $a['url'], 'vimeo' ) !== false ) {
		$url = $a['url'];
		$id = 'vimeo';
		$class = 'artVimeo';
	}
	
	$html .= '<div class="fluid-width-video-wrapper artVideo '.$class.'">';
	$html .= '<a class="showvid" href="#" style="background-image:url('.$a['image'].');"><span><i class="fa fa-play-circle" role="none"></i></span></a>';
	$frame = wp_oembed_get( $a['url'] );
	$frame = str_replace('?feature', '?enablejsapi=1&modestbranding=1&rel=0&showinfo=0&feature', $frame);
	$frame = str_replace('<iframe', '<iframe id="player-'.$id.'" class="art-player"', $frame);
	$html .= $frame;
	$html .= '</div>';
    return $html;
}

add_shortcode( 'artifakt-video', 'art_vid_func' );

function home_worth_func( $atts ) {
	$a = shortcode_atts( array(
		'action' => '',
	), $atts );
	
	ob_start();
?>
<form action="<?php echo $a['action']; ?>" id="homeworthform">
	<label for="address">SIMPLY ENTER YOUR PROPERTY ADDRESS TO FIND OUT!</label>
	<div class="address-wrap">
		<input type="text" name="address" value="" id="autocomplete" class="address form-control" placeholder="YOUR PROPERTY ADDRESS" />
		<input type="submit" value="FIND OUT" class="btn" />
	</div>
</form>
<script>
<?php
$rb = ZipperagentGlobalFunction()->zipperagent_rb();
$states=isset($rb['web']['states'])?$rb['web']['states']:'';
$states=array_map('trim', explode(',', $states));
$states=implode(' | ',$states);
?>

var placeSearch, autocomplete;
var input = document.getElementById('autocomplete');

function initAutocomplete() {
	var options = {
		types: ['geocode'],  // or '(cities)' if that's what you want?
		componentRestrictions: {country: ["us"]},
	};
	autocomplete = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(input), options);
}
initAutocomplete();

<?php if($states): ?>
jQuery(input).on('input',function(){
	var str = input.value;
	var prefix = '<?php echo $states; ?> | ';
	if(str.indexOf(prefix) == 0) {
		console.log(input.value);
	} else {
		if (prefix.indexOf(str) >= 0) {
			input.value = prefix;
		} else {
			input.value = prefix+str;
		}
	}
});
<?php endif; ?>
</script>
<?

	return ob_get_clean();

}

add_shortcode( 'homeworth', 'home_worth_func' );


//client info shortcodes
function client_phone_func( $atts ) {
	$client = get_option('artifakt_theme_options');
	
	$html .= $client[ 'phone_number' ];
	
	return $html;
	
}
add_shortcode( 'client-phone', 'client_phone_func' );


function client_email_func( $atts ) {
	$client = get_option('artifakt_theme_options');
	
	$html .= $client[ 'email_address' ];
	
	return $html;
	
}
add_shortcode( 'client-email', 'client_email_func' );


function client_logo_func( $atts ) {
	$a = shortcode_atts( array(
		'width' => ''
	), $atts );	
	
	$client = get_option('artifakt_theme_options');
	
	$html .= '<img src="'.$client[ 'header_logo' ].'" width="'.$a[ 'width' ].'" />';
	
	return $html;
	
}
add_shortcode( 'client-logo', 'client_logo_func' );


function client_footer_logo_func( $atts ) {
	$a = shortcode_atts( array(
		'width' => ''
	), $atts );	
	
	$client = get_option('artifakt_theme_options');
	
	$html .= '<img src="'.$client[ 'footer_logo' ].'" width="'.$a[ 'width' ].'" />';
	
	return $html;
	
}
add_shortcode( 'client-footer-logo', 'client_footer_logo_func' );


function brokerage_logo_func( $atts ) {
	$a = shortcode_atts( array(
		'width' => ''
	), $atts );	
	
	$client = get_option('artifakt_theme_options');
	
	$html .= '<img src="'.$client[ 'brokerage_logo' ].'" width="'.$a[ 'width' ].'" />';
	
	return $html;
	
}
add_shortcode( 'brokerage-logo', 'brokerage_logo_func' );


function alt_brokerage_logo_func( $atts ) {
	$a = shortcode_atts( array(
		'width' => ''
	), $atts );	
	
	$client = get_option('artifakt_theme_options');
	
	$html .= '<img src="'.$client[ 'alt_brokerage_logo' ].'" width="'.$a[ 'width' ].'" />';
	
	return $html;
	
}
add_shortcode( 'alt-brokerage-logo', 'alt_brokerage_logo_func' );


function client_address_func( $atts ) {
	$client = get_option('artifakt_theme_options');
	
	$html .= $client[ 'address' ];
	
	return $html;
	
}
add_shortcode( 'client-address', 'client_address_func' );


// sidebar testimonial
function sidebar_testimonial_func( $atts ) {
	$a = shortcode_atts( array(
		'id' => ''
	), $atts );
	
	$st = get_post( $a[ 'id'] );
	
	$html .= '<div class="sidebar-testimonial centertext">';
	$html .= '<div class="sb-testimonial-img"><img src="'.get_the_post_thumbnail_url( $st ).'" /></div>';
	$html .= '<h4 class="t-title tiny caps">- '.$st->post_title.'</h4>';
	$html .= '<h4 class="redtext"><em>'.$st->post_excerpt.'</em></h4>';
	$html .= '</div>';		
	
	return $html;

}
add_shortcode( 'sidebar-testimonial', 'sidebar_testimonial_func' );


function fancytitle_func( $atts, $content = null ) {
	$a = shortcode_atts( array(
		'title' => '',
		'class' => ''
	), $atts );
	
	$html .= '<div class="fancy-wrap '.$a[ 'class' ].'">';
	$html .= '<div class="fancy-title"><h4 class="redtext caps"><strong>'.$a[ 'title' ].'</strong></h4></div>';
	$html .= do_shortcode( $content );
	$html .= '</div>';
		
	return $html;

}
add_shortcode( 'fancytitle', 'fancytitle_func' );


function stat_func( $atts ) {
	$a = shortcode_atts( array(
		'value' => '',
		'title' => '',
		'icon' => '',
		'class' => ''
	), $atts );
	
	$html .= '<div class="stat-box centertext"><div>';
	$html .= '<h3><i class="fa fa-'.$a[ 'icon' ].'" role="none"></i></h3>';
	$html .= '<h2 class="redtext caps"><strong>'.$a[ 'value' ].'</strong></h2>';
	$html .= '<hr />';
	$html .= '<h4>'.$a[ 'title' ].'</h4>';
	$html .= '</div></div>';
		
	return $html;

}
add_shortcode( 'stat', 'stat_func' );


function private_page_func( $atts, $content = null ) {
	
	// just remove the ! if you want to test while logged in
	if ( function_exists('is_user_logged_in') && !is_user_logged_in() ) {
	// if (0) {

	$args = array(
	'echo'           => false,
	'form_id'        => 'loginform',
	'id_username'    => 'user_login',
	'id_password'    => 'user_pass',
	'id_remember'    => 'rememberme',
	'id_submit'      => 'wp-submit',
	'label_log_in'   => __( 'Log In' )
	);
	$html .= '<div class="modal fade" tabindex="-1" role="dialog" data-show="true" data-backdrop="static" data-keyboard="false" id="loginModal">';
  	$html .= '<div class="modal-dialog" role="document">';
    $html .= '<div class="modal-content">';
	$html .= '<p><div class="priv-col-overlay col-md-8 col-md-offset-2">';
	$html .= '<a href="'.esc_url( home_url( '/' ) ).'"><img class="size-full wp-image-9256" src="'.get_stylesheet_directory_uri().'/imgs/lil-header-logo.svg" width="550" /></a></p>';
	$html .= do_shortcode( $content );
	$html .= wp_login_form( $args );	
	$html .= '</div></div>';
	$html .= '</div></div>';
	$html .= '<script type="text/javascript">jQuery(window).load(function(){showLogin();});</script>';
	

	return $html;

	}
}
add_shortcode( 'private_page', 'private_page_func' );


function typebox_func( $atts ) {
	$a = shortcode_atts( array(
		'class' => '',
		'title' => '',
		'img' => '',
		'link' => ''
	), $atts );	
	
	$html .= '<div class="type-box '.$a[ 'class' ].'" style="background-image: url( '.$a[ 'img' ].' );">';
	$html .= '<a href="'.$a[ 'link' ].'">';
	$html .= '<div class="type-box-inner">';
	$html .= '<h3 class="caps">'.$a[ 'title' ].'</h3>';
	$html .= '<p class="caps"><strong>SEARCH NOW <i class="fa fa-angle-double-right" role="none"></i></strong></p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	
	return $html;
	
}
add_shortcode( 'typebox', 'typebox_func' );


function areabox_func( $atts ) {
	$a = shortcode_atts( array(
		'class' => '',
		'title' => '',
		'img' => '',
		'link' => ''
	), $atts );	
	
	$html .= '<div class="area-box col-md-3 col-sm-6 '.$a[ 'class' ].'">';
	$html .= '<a href="'.$a[ 'link' ].'">';
	$html .= '<div class="area-box-inner" style="background-image: url( '.$a[ 'img' ].' );">';
	$html .= '<div><h3 class="caps"><i class="fa fa-map-marker" role="none"></i><br /><span><strong>'.$a[ 'title' ].'</strong></span></h3></div>';
	$html .= '<p class="btn">Search Now</p>';
	$html .= '</div>';
	$html .= '</a>';
	$html .= '</div>';
	
	return $html;
	
}
add_shortcode( 'areabox', 'areabox_func' );


function team_social_func( $atts ) {
	$a = shortcode_atts( array(
		'class' => '',
		'icon' => '',
		'link' => ''
	), $atts );	
	
	$html .= '<a class="team-social-link '.$a[ 'class' ].'" href="'.$a[ 'link' ].'"><i class="fa fa-'.$a[ 'icon' ].'" role="none"></i></a>';
	
	return $html;
	
}
add_shortcode( 'social-link', 'team_social_func' );


function listing_query_func( $atts ) {
	$a = shortcode_atts( array(
		'cat' => '',
		'num' => '9'
	), $atts );
	
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); }
	elseif ( get_query_var('pagenum') ) { $paged = get_query_var('pagenum'); }
	else { $paged = 1; }
	
	if ( $a[ 'cat' ] ) {
		$args = array( 
			'post_type' => 'listings',
			'posts_per_page' => $a[ 'num' ],
			'paged' => $paged,
			'tax_query' => array (
				array(
					'taxonomy' => 'listings_categories',
					'field' => 'slug',
					'terms' => $a[ 'cat' ]
				)
			)
		);
	} else {
		$args = array( 
			'post_type' => 'listings',
			'posts_per_page' => $a[ 'num' ],
			'paged' => $paged
		);
	}
		
	$l_query = new WP_Query( $args );
	$i; 
	ob_start();
	?>

	<div class="listing-pg-query listing-wrapper span-page"><div class="row">
		
		<?php while ( $l_query->have_posts() ) : $l_query->the_post();
			$i ++; ?>
			
			<?php get_template_part( 'content', 'listing' ); ?>
			
			<?php if ( $i % 3 == 0 ) echo '</div><div class="row">';
		endwhile; ?>
	
	</div></div>
	<?php $big = 999999999; // need an unlikely integer
	echo '<div class="paging-navigation"><div>';
	echo  paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'format' => '?paged=%#%',
		'current' => max( 1, get_query_var('paged') ),
		'prev_text' => __('<i class="fa fa-angle-left" role="none"></i>'),
		'next_text' => __('<i class="fa fa-angle-right" role="none"></i>'),
		'total' => $l_query->max_num_pages
	) );
		echo '</div></div><!-- /pagination -->';
	wp_reset_postdata();
	
	$html = ob_get_clean();

	return $html;

}
add_shortcode( 'listing-query', 'listing_query_func' );