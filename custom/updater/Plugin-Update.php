<?php

require_once( 'BFIGitHubPluginUploader.php' );
if ( is_admin() ) {
    new BFIGitHubPluginUpdater( ZIPPERAGENTPATH . '/zipperagent.php', 'deczen', "za" );
}

?>