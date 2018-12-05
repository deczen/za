<?php
// clear option cache files
if( isset($_GET['clear_cache']) && $_GET['clear_cache']==1 ){
	zipperagent_clear_caches();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn-save']) ) {
	global $wp_roles;
	
	$adm_cpbs = $_POST['admin_cpb'];
	$agt_cpbs = $_POST['agent_cpb'];
	// echo '<pre>'; print_r($adm); echo '</pre>';
	
	if( current_user_can( 'administrator' )): 
	
		$admin_roles = get_role( 'admin' )->capabilities;
		foreach($admin_roles as $key => $val){
			
			$wp_roles->remove_cap( 'admin', $key );
		
		}
		foreach($adm_cpbs as $adm_cpb){
		  
			// post / page editing
			$wp_roles->add_cap('admin', $adm_cpb);
		}
		
	endif;
	
	if( current_user_can( 'administrator' ) || current_user_can( 'admin' )):
	
		$agent_roles = get_role( 'agent' )->capabilities;
		foreach($agent_roles as $key => $val){
			
			$wp_roles->remove_cap( 'agent', $key );
		
		}
		foreach($agt_cpbs as $agt_cpb){
		  
			// post / page editing
			$wp_roles->add_cap('agent', $agt_cpb);
		}
		
	endif;
	
	wp_redirect('/wp-admin/admin.php?page=za-user-restriction');
	exit;
}
?>
<h2>User Restriction</h2>
<style>
	.box-wrap{margin-top:20px;}
	.box-wrap .box{width:30%; float:left; margin-bottom:10px;}
	@media screen and (max-width:1024px){
		.box-wrap .box{width:30%;}
	}
	@media screen and (max-width:768px){
		.box-wrap .box{width:50%;}
	}
	@media screen and (max-width:425px){
		.box-wrap .box{width:50%;}
	}
</style>

<form method="post" action="">
	<table class="form-table">
		<?php  if( current_user_can( 'administrator' )): ?>
		<tr>
			<th>
				<label for="cpb-list">Admin Role</label>
			</th>
			<td>
				<p>Select admin role capabilities. <a id="check-cpb" href="#">Check All</a> | <a id="uncheck-cpb" href="#">Uncheck All</a></p>
				
				<div class="box-wrap">
					
					<?php /*
					$admin_roles = get_role( 'admin' )->capabilities;
					// echo '<pre>'; print_r($admin_roles); echo '</pre>';
					
					foreach($admin_roles as $key => $val):
						if( $val == 1 ){
							$checked = 'checked';
						}else{
							$checked = '';
						}
					?>
						<div class="box">
							<input class="cpb-list" type="checkbox" name="admin_cpb[]" <?php echo $checked; ?> value="<?php echo $key; ?>"><?php echo $key; ?>
						</div>
					
					<?php endforeach; */
					
					$caps = array(
								'read',
								'edit_posts',
								'publish_posts',
								'delete_posts',
								// 'read_private_posts',
								// 'edit_private_posts',
								// 'delete_private_posts',
								'edit_others_posts',
								'delete_others_posts',
								'edit_published_posts',
								'delete_published_posts',
								'edit_pages',
								'publish_pages',
								'delete_pages',
								// 'read_private_pages',
								// 'edit_private_pages',
								// 'delete_private_pages',
								'edit_others_pages',
								'delete_others_pages',
								'edit_published_pages',
								'delete_published_pages',
								'manage_categories',
								'upload_files',
								'list_users',
								'create_users',
								'edit_users',
								'delete_users',
								// 'moderate_comments',
							);
						// echo '<pre>'; print_r($caps); echo '</pre>';

					
					$admin_roles = get_role( 'admin' )->capabilities;
					// echo '<pre>'; print_r($admin_roles); echo '</pre>';
					
					foreach ($caps as $cap):
					
						$checked = '';
						foreach($admin_roles as $key => $val){
							if( $val == 1 && $key == $cap ){
								$checked = 'checked';
							}
						}
					?>
						<div class="box">
							<input class="cpb-list" type="checkbox" name="admin_cpb[]" <?php echo $checked; ?> value="<?php echo $cap; ?>"><?php echo $cap; ?>
						</div>
						
					<?php endforeach; ?>
				</div>
			</td>
		</tr>
		<?php endif; ?>
		
		<?php  if( current_user_can( 'administrator' ) || current_user_can( 'admin' )): ?>
		<tr>
			<th>
				<label for="cpb-agent-list">Agent Role</label>
			</th>
			<td>
				<p>Select agent role capabilities. <a id="check-cpb-agent" href="#">Check All</a> | <a id="uncheck-cpb-agent" href="#">Uncheck All</a></p>
				
				<div class="box-wrap">
					
					<?php /*
					$agent_roles = get_role( 'agent' )->capabilities;
					// echo '<pre>'; print_r($admin_roles); echo '</pre>';
					
					foreach($agent_roles as $key => $val):
						if( $val == 1 ){
							$checked = 'checked';
						}else{
							$checked = '';
						}
					?>
						<div class="box">
							<input class="cpb-agent-list" type="checkbox" name="agent_cpb[]" <?php echo $checked; ?>><?php echo $key; ?>
						</div>
					
					<?php endforeach; */
					
					$caps = array(
								'read',
								'edit_posts',
								'publish_posts',
								'delete_posts',
								// 'read_private_posts',
								// 'edit_private_posts',
								// 'delete_private_posts',
								'edit_others_posts',
								'delete_others_posts',
								'edit_published_posts',
								'delete_published_posts',
								'edit_pages',
								'publish_pages',
								'delete_pages',
								// 'read_private_pages',
								// 'edit_private_pages',
								// 'delete_private_pages',
								'edit_others_pages',
								'delete_others_pages',
								'edit_published_pages',
								'delete_published_pages',
								'manage_categories',
								'upload_files',
								// 'list_users',
								// 'create_users',
								// 'edit_users',
								// 'remove_users',
								// 'moderate_comments',
							);
					
					foreach ($caps as $cap):
					
						$agent_roles = get_role( 'agent' )->capabilities;
						$checked = '';
						foreach($agent_roles as $key => $val){
							if( $val == 1 && $key == $cap ){
								$checked = 'checked';
							}
						}
					?>
						<div class="box">
							<input class="cpb-agent-list" type="checkbox" name="agent_cpb[]" <?php echo $checked; ?> value="<?php echo $cap; ?>"><?php echo $cap; ?>
						</div>
						
					<?php endforeach; ?>
					
				</div>
				
			</td>
		</tr>
		<?php endif; ?>
	</table>
	<p class="submit">
		<button type="submit" class="button-primary" name="btn-save">Save Changes</button> <a href="admin.php?page=za-user-restriction&clear_cache=1" class="button-primary">Clear Cache</a>
	</p>
</form>

<script>
	jQuery(document).ready(function(){
		
		jQuery( '#check-cpb' ).on( 'click', function(){
			jQuery( 'input.cpb-list').each(function(){
				jQuery(this).prop( "checked", true );
			});
			
			return false;
		});
		jQuery( '#uncheck-cpb' ).on( 'click', function(){
			jQuery( 'input.cpb-list').each(function(){
				jQuery(this).prop( "checked", false );
			});
			
			return false;
		});
		
		jQuery( '#check-cpb-agent' ).on( 'click', function(){
			jQuery( 'input.cpb-agent-list').each(function(){
				jQuery(this).prop( "checked", true );
			});
			
			return false;
		});
		jQuery( '#uncheck-cpb-agent' ).on( 'click', function(){
			jQuery( 'input.cpb-agent-list').each(function(){
				jQuery(this).prop( "checked", false );
			});
			
			return false;
		});
		
	});
</script>