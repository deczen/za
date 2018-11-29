<?php

class ET_Builder_Module_Za_Agent extends ET_Builder_Module {
	
	public static $agent_options;
	
    function init() {
        $this->name = '[Zipperagent] Agent';
        $this->slug = 'et_pb_za_agent_module';

        $this->main_css_element = '%%order_class%%';
        $this->whitelisted_fields = array(
            'za_agent',
        );
		
		$agents = getAgentList();
		$agent_options[] = 'Select Agent';
		foreach( $agents as $agent ){
			$key=isset($agent->login)?$agent->login:'';
			$username=isset($agent->userName)?$agent->userName:'';
			if($key)
				$agent_options[$key]=$username;
		}
		// echo "<pre>"; print_r($agent_options); echo "</pre>";
		
		self::$agent_options = $agent_options;
		
        $this->options_toggles = array(
            'general' => array(
                'toggles' => array(
                    'main_content' => 'Listing Agent',
                ),
            ),
        );
    }

    function get_fields() {
		
		$fields['za_agent'] = array(
			'label'           => esc_html__( 'Agent', 'zipperagent' ),
			'type'            => 'select',
			'option_category' => 'basic_option',
			'options'         => self::$agent_options,
			'description'     => esc_html__( 'Choose an agent.', 'zipperagent' ),
			'toggle_slug'     => 'main_content',
			'default'         => '',
		);
		
        return $fields;
    }

    function shortcode_callback($atts, $content = null, $function_name) {
        $za_agent = $this->shortcode_atts['za_agent'];
        $module_class = ET_Builder_Element::add_module_order_class('', $function_name);
        ob_start();
        
		$agent = zipperagent_get_agent_by('login', $za_agent);

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
		</div> <?php
		
        $output = ob_get_contents();
        ob_clean();
        $output = sprintf(
                '<div class="et_pb_module %1$s">%2$s</div>', ( '' !== $module_class ? sprintf(' %1$s', esc_attr($module_class)) : ''), $output
        );
        

        return $output;
    }

}

new ET_Builder_Module_Za_Agent();

