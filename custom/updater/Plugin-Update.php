<?php
global $pagenow;

if ( is_admin() && $pagenow==='plugins.php' ) {	//only do in plugins.php page
	require_once( 'BFIGitHubPluginUploader.php' );
    new BFIGitHubPluginUpdater( ZIPPERAGENTPATH . '/zipperagent.php', 'deczen', "za" );
}
?>