<?php
global $post;
// $agents = getAgentList();
// echo "<pre>"; print_r($agents); echo "</pre>";
$agentlogin= get_post_meta($post->ID, '_lp_agent', true);

$agent = zipperagent_get_agent_by('login', $agentlogin);

// echo "<pre>"; print_r($agent); echo "</pre>";

?>

<div class="agent-widget bt-panel uk-panel uk-panel-box">
	<div class="row">
		<?php if(isset( $agent->imageURL )): ?>
		<div class="bt-listing__agent_image col-xs-4">
			<img class="agent-avatar__img width-1-1" alt="<?php echo isset( $agent->userName )?$agent->userName:''; ?>" src="<?php echo isset( $agent->imageURL )?$agent->imageURL:''; ?>" itemprop="image" title="<?php echo isset( $agent->userName )?$agent->userName:''; ?>">
			
		</div>
		<?php endif; ?>
		<div class="<?php if(isset( $agent->imageURL )) echo "col-xs-8"; else echo "col-xs-12"; ?>">
			
			<div class="font-12 cell bt-listing__agent__info__category bt-listing__agent__info__category--agent">Sales &amp; Leasing Agent </div>
			<div class="bt-listing__agent__info">
				<div class="bt-listing__agent__info__name uk-h4" itemprop="name"><span><?php echo isset( $agent->userName )?$agent->userName:''; ?></span></div>
				<?php if(isset( $agent->phone )): ?><div class="uk-text-truncate-child bt-listing__agent__info__phone"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="tel:<?php echo isset( $agent->phone )?$agent->phone:''; ?>"><span class="bt-listing__agent__info_phone__type"><!-- react-text: 79 -->Office<!-- react-text: 80 -->: </span><span itemprop="telephone"><?php echo isset( $agent->phone )?$agent->phone:''; ?></span></a></div><?php endif; ?>
				<?php if(isset( $agent->email )): ?><div class="uk-text-truncate-child bt-listing__agent__info__email"><a class="width-1-1 js-call-agent bt-listing__agent__call-agent" href="mailto:<?php echo isset( $agent->email )?$agent->email:''; ?>"><span class="bt-listing__agent__info_email__type"><!-- react-text: 79 -->Email<!-- react-text: 80 -->: </span><span itemprop="email"><?php echo isset( $agent->email )?$agent->email:''; ?></span></a></div><?php endif; ?>
				
			</div>
		</div>
	</div>
</div>