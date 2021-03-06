<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$current_url = esc_url_raw($current_url); //encode it
?>
<link rel="stylesheet" type="text/css" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/social-share.css'; ?>">
<div class="af_contact_social hideonprint">
   <ul>
      <li class="share-title">SHARE THIS:</li>
      <li id="facebook-container" class="social-containers"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" onclick="window.open(this.href, 'facebook-share-dialog', 'width=626,height=436'); return false;" target="_blank"><i class="fa fa-facebook" role="none"></i> <span>Facebook</span></a></li>
      <li>|</li>
      <li id="twit-container" class="social-containers"><a href="https://twitter.com/share?url=<?php echo $current_url; ?>&amp;text=Buying+With+Us" onclick="window.open(this.href, 'twitter-share', 'width=626,height=436'); return false;" target="_blank"><i class="fa fa-twitter" role="none"></i> <span>Twitter</span></a></li>
      <li>|</li>
      <li id="plus-container" class="social-containers"><a href="https://plus.google.com/share?url=<?php echo $current_url; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" target="_blank"><i class="fa fa-google-plus" role="none"></i> <span>Google+</span></a></li>
      <li>|</li>
      <li id="email-container" class="social-containers"><a href="mailto:?body=Buying With Us: <?php echo $current_url; ?>"><i class="fa fa-envelope" role="none"></i> <span>Email</span></a></li>
   </ul>
</div>