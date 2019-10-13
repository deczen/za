<?php
global $za_shortcodes;

$excludes_shortcodes = array(
	'artifakt-video',
);

$active_shortcodes = get_option('za_active_shortcodes', array());
?>

<div class="wrap">
	<h2><?php _e( 'Active Shortcodes', 'openreserve' ) ?></h2>

	<form method="post" action="options.php">
		<?php settings_fields( 'za_shortcode_setting_group' ); ?>
		<?php do_settings_sections( 'za_shortcode_setting_group' ); ?>
		<table class="form-table">
			<tbody>
				<?php foreach($za_shortcodes as $shortcode=>$function): 
					if(in_array($shortcode, $excludes_shortcodes))
						continue;
				?>
				<tr>
					<th scope="row"><label for="shortcode_<?php echo $shortcode; ?>"><?php echo $shortcode; ?></label></th>
					<td><input type="hidden" name="za_active_shortcodes[<?php echo $shortcode; ?>]" value="0" /><input name="za_active_shortcodes[<?php echo $shortcode; ?>]" type="checkbox" id="shortcode_<?php echo $shortcode; ?>" <?php checked(isset($active_shortcodes[$shortcode])?$active_shortcodes[$shortcode]:1,1); ?> value="1" /></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		
		<?php submit_button(); ?>
	</form>
</div>