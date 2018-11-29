<?php
add_action('admin_menu', 'artifakt_git_menu');

function artifakt_git_menu() {
	add_dashboard_page('Git Dashboard', 'artifakt Git', 'read', 'artifakt-git', 'artifakt_git_function');
}

function artifakt_git_function() {
	echo '<div class="wrap">';
	echo '<h2>artifakt Git Dashboard (beta)</h2>';
	
	$git = $_REQUEST['git'];
	$revert = $_REQUEST['revert'];
	$commit = $_REQUEST['commit'];
	$user = $_REQUEST['username'];
	$email = $_REQUEST['useremail'];
	
	if ( $git == 'pull') {
		chdir(get_stylesheet_directory());
		$output = shell_exec('git pull');
		echo '<pre>'.$output.'</pre>';
	} elseif ( $git == 'status' ) {
		chdir(get_stylesheet_directory());
		$output = shell_exec('git status');
		echo '<pre>'.$output.'</pre>';
	} elseif ( $revert != '' ) {
		chdir(get_stylesheet_directory());
		$output = shell_exec('git revert '.$revert );
		$output .= shell_exec('git status');
		echo '<pre>'.$output.'</pre>';
	} elseif ( $git == 'add' ) { 
		chdir(get_stylesheet_directory());
		$output = shell_exec('git add *');
		$output .= shell_exec('git status');
		echo '<pre>'.$output.'</pre>';
	} elseif ( $git == 'commit' ) { 
		chdir(get_stylesheet_directory());
		$output = shell_exec("git config user.email '$email'");
		$output = shell_exec("git config user.name '$user'");
		
		$output = shell_exec("git commit -m 'pushing from the dashboard - $commit'");
		$output .= shell_exec('git status');
		echo '<pre>'.$output.'</pre>';
	} elseif ( $git == 'push' ) { 
		chdir(get_stylesheet_directory());
		$output = shell_exec('git push');
		$output .= shell_exec('git status');
		echo '<pre>'.$output.'</pre>';
	}else {
		chdir(get_stylesheet_directory());
		$output = shell_exec('git fetch origin');
		$output .= shell_exec('git log HEAD..origin/master --oneline');
		$output .= shell_exec('git status');
		echo '<pre>'.$output.'</pre>';
	}

	echo '<h3>Step 1:</h3>';
	echo '<p>make sure there are no local changes in need of committing (if so Commit/Push local changes)</p>';
	echo '<p><a href="?page=artifakt-git&git=status" class="button button-primary">git status</a></p>';
	echo '<h3>Step 2:</h3>';
	echo '<p>Pull the latest changes from the repo</p>';
	echo '<p><a href="?page=artifakt-git&git=pull" class="button button-primary">git pull</a></p>';
	
	echo '<hr />';
	echo '<h3>Commit/Push Local Changes</h3>';
	echo '<p>Step 1: <a href="?page=artifakt-git&git=add" class="button button-primary">git add</a></p>';
	echo '<form>';
	echo '<input name="page" value="artifakt-git" type="hidden" />';
	echo '<input name="git" value="commit" type="hidden" />';
	echo 'Step 2: <input name="username" value="'.$user.'" placeholder="Git Username" type="text" />';
	echo '<input name="useremail" value="'.$email.'" placeholder="Git User Email" type="text" />';
	echo '<input name="commit" type="text" placeholder="Commit Message" value="'.$commit.'"/>';
	echo '<input type="submit" class="button button-primary" value="git commit"></form>';
	echo '<p>Step 3: <a href="?page=artifakt-git&git=push" class="button button-primary">git push</a></p>';
	echo '<hr />';
	echo '<h3>Revert Commit</h3>';
	echo '<form>';
	echo '<input name="page" value="artifakt-git" type="hidden" />';
	echo '<input name="revert" type="text" placeholder="commit id" value="'.$revert.'"/>';
	echo '<input type="submit" class="button button-primary" value="revert"></form>';
	echo '</div>';
}
?>
