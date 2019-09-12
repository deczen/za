<?php

class ET_Builder_Module_Za_Contact extends ET_Builder_Module {
	
	public static $contact_options;
	public static $agent_options;
	
	function init() {
        $this->name = '[Zipperagent] Contact';
        $this->slug = 'et_pb_za_contact_module';

        $this->main_css_element = '%%order_class%%';
        $this->whitelisted_fields = array(
            'za_contact',
			'use_za_address',
        );
		
		//get contact form options
		$args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
		$contacts = get_posts( $args );
		
		$contact_options[] = 'Default';
		foreach( $contacts as $contact ){
			$key = $contact->ID;
			$name = get_the_title($key);
			if($key)
				$contact_options[$key]=$name;
		}
		
		self::$contact_options = $contact_options;
		
		// get angent option
		$agents = getAgentList();
		$agent_options[] = 'Select Agent';
		foreach( $agents as $agent ){
			$key=isset($agent->login)?$agent->login:'';
			$username=isset($agent->userName)?$agent->userName:'';
			if($key)
				$agent_options[$key]=$username;
		}
		
		self::$agent_options = $agent_options;
		
        $this->options_toggles = array(
            'general' => array(
                'toggles' => array(
                    'cnt' => 'Contact Form 7',
                ),
            ),
        );
		
		$this->fields_defaults = array(
			'use_za_address' => array( 'off' ),
		);
    }
	
	function get_fields() {
		
		$fields['za_contact'] = array(
			'label'           => esc_html__( 'Contact', 'zipperagent' ),
			'type'            => 'select',
			'option_category' => 'basic_option',
			'options'         => self::$contact_options,
			'description'     => esc_html__( 'Choose a form.', 'zipperagent' ),
			'toggle_slug'     => 'cnt',
			'default'         => '',
		);
		
		$fields['za_agent'] = array(
			'label'           => esc_html__( 'Agent', 'zipperagent' ),
			'type'            => 'select',
			'option_category' => 'basic_option',
			'options'         => self::$agent_options,
			'description'     => esc_html__( 'Choose an agent.', 'zipperagent' ),
			'toggle_slug'     => 'cnt',
			'default'         => '',
		);
		
		$fields['use_za_address'] = array(
			'label'           => esc_html__( 'Address Search', 'zipperagent' ),
			'type'            => 'yes_no_button',
				'option_category' => 'configuration',
				'options'         => array(
					'off' => esc_html__( 'No', 'zipperagent' ),
					'on'  => esc_html__( 'Yes', 'zipperagent' ),
				),
				'toggle_slug'     => 'cnt',
				'description'     => esc_html__( "Enable if you're using Address Contact Form. Note: Contact Form fields will be hidden.", 'zipperagent' ),
		);
		
        return $fields;
    }
	
	function shortcode_callback($atts, $content = null, $function_name) {
		$za_contact = $this->shortcode_atts['za_contact'];
		$za_agent = $this->shortcode_atts['za_agent'];
		$use_za_address = $this->shortcode_atts['use_za_address'];
		$contact_title = get_the_title($za_contact);
        $module_class = ET_Builder_Element::add_module_order_class('', $function_name);
		$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		
		$agent = zipperagent_get_agent_by('login', $za_agent);
		$agent_login = ( isset($agent->login)?$agent->login:'' );
		ob_start();
		
		// echo  '<pre>'; print_r($this); echo '</pre>';
		
		if ($za_contact != 0){
			// echo "<pre>"; print_r($za_contact); echo "</pre>";
			echo '<div class="za-contact-form">';
			echo '<h4>' . $contact_title . '</h4>';
			echo do_shortcode('[contact-form-7 id="' . $za_contact . '" title="'.$contact_title.'"]');
			echo do_shortcode('[cf7_auto_populate assign="'. $agent_login .'"]');
			if ($use_za_address == 'on'){
				echo do_shortcode('[cf7_auto_suggest google_field_id="address"]');
			}
			echo '</div>';
		}else{
			$contactIds=get_contact_id();
			?>
			<form id="za-lp-contact" class="za-lp-contact" action="" method="post">
				<p><label> Your Email (required)<br>
					<span class="email"><input type="email" name="email" value="" size="40" required></span> </label></p>
				<p><label> First Name (required)<br>
					<span class="firstName"><input type="text" name="firstName" value="" size="40" required></span> </label></p>
				<p><label> Last Name (required)<br>
					<span class="lastName"><input type="text" name="lastName" value="" size="40" required></span> </label></p>				
				<p><label> Your Message<br>
					<span class="note"><textarea name="note" cols="40" rows="10"></textarea></span> </label></p>
				<p><input type="submit" value="Send" class=""></p>		
				<input type="hidden" name="contactId" value="<?php echo implode(',',$contactIds); ?>" />
				<input type="hidden" name="agent" value="<?php echo $agent_login; ?>" />
				<input type="hidden" name="actual_link" value="<?php echo $actual_link; ?>" />
				<?php if( ! getCurrentUserContactLogin() ): //only for non logged in user ?>
				<input type="hidden" name="action" value="regist_user" >
				<?php else: ?>
				<input type="hidden" name="action" value="contact_agent" >
				<?php endif; ?>
			</form>
			<script>
				jQuery( 'body' ).on( 'submit', '.za-lp-contact', function(){
			
					var data = jQuery(this).serialize();
					var form = jQuery(this);
					form.css("opacity", 0.5);					
					form.css('pointer-events', 'none');
					
					jQuery.ajax({
						type: 'POST',
						dataType : 'json',
						url: zipperagent.ajaxurl,
						data: data,
						success: function( response ) {    
							if( response['result'] ){	
								jQuery('.za-lp-contact').html('<p class="submitted">Your message was sent. Thank You.</p>');
							}else{
								alert( 'Submit failed!' );
							}
							form.css("opacity", 1);
							form.css('pointer-events', 'initial');
						}
					});
					
					return false;
				});
			</script>
			<script>
				jQuery(document).ready(function($){
					$('.za-lp-contact input:not([type=submit]), .za-lp-contact checkbox, .za-lp-contact textarea, .za-lp-contact select').prop("readonly", true);
					$('.za-lp-contact input, .za-lp-contact checkbox, .za-lp-contact textarea, .za-lp-contact select').css("opacity", 0.5);
					$('.za-lp-contact input[type=email][name=email]').prop("readonly", false);
					$('.za-lp-contact input[type=email][name=email]').css("opacity", 1);
					
					$('.za-lp-contact input[type=email][name=email]').on('keyup',function(e){
						if (e.keyCode == 13) {
							// za_check_user($(this));
							$(this).blur();  
						}
					});
					$('.za-lp-contact input[type=email][name=email]').on('blur',function(){
						za_check_user($(this));
					});
					
					function za_check_user(element){
						var email = element.val();
						
						if(isEmail(email)){			
							// alert(email);
							jQuery.ajax({
								type: 'POST',
								dataType : 'json',
								url: zipperagent.ajaxurl,
								data: {
										email: email,
										assign: '<?php echo $assign ?>',
										action: 'get_user_fields'
									},
								success: function( response ) { 
									// console.log(response);
									if( response['userdata']!="" ){
										var userdata = response['userdata'];
										// console.log(userdata);
										
										$('.za-lp-contact input:not([type=submit]), .za-lp-contact checkbox, .za-lp-contact textarea, .za-lp-contact select').prop("readonly", false);
										$('.za-lp-contact input, .za-lp-contact checkbox, .za-lp-contact textarea, .za-lp-contact select').css("opacity", 1);
										
										if(userdata.firstName!=''){
											$('.za-lp-contact input[type=text][name=firstName]').val(userdata.firstName);								
											$('.za-lp-contact input[type=text][name=firstName]').prop("readonly", true);
											$('.za-lp-contact input[type=text][name=firstName]').css("opacity", 0.5);
											
											
											$('.za-lp-contact input[type=text][name=fullname]').val(userdata.firstName + ' ' + userdata.lastName);
											$('.za-lp-contact input[type=text][name=fullname]').prop("readonly", true);
											$('.za-lp-contact input[type=text][name=fullname]').css("opacity", 0.5);			
										}
										if(userdata.lastName!=''){
											$('.za-lp-contact input[type=text][name=lastName]').val(userdata.lastName);
											$('.za-lp-contact input[type=text][name=lastName]').prop("readonly", true);
											$('.za-lp-contact input[type=text][name=lastName]').css("opacity", 0.5);
										}
										if(userdata.phoneOffice!=''){
											$('.za-lp-contact input[type=tel][name=phone]').val(userdata.phoneOffice);
											$('.za-lp-contact input[type=tel][name=phone]').prop("readonly", true);
											$('.za-lp-contact input[type=tel][name=phone]').css("opacity", 0.5);			
										}
									}else{
										
										$('.za-lp-contact input:not([type=submit]), .za-lp-contact checkbox, .za-lp-contact textarea, .za-lp-contact select').prop("readonly", false);
										$('.za-lp-contact input, .za-lp-contact checkbox, .za-lp-contact textarea, .za-lp-contact select').css("opacity", 1);
										
										$('.za-lp-contact input[type=text][name=firstName]').val('');
										$('.za-lp-contact input[type=text][name=lastName]').val('');
										$('.za-lp-contact input[type=text][name=fullname]').val('');
										$('.za-lp-contact input[type=tel][name=phone]').val('');
										$('.za-lp-contact input[type=text][name=firstName]').prop("readonly", false);
										$('.za-lp-contact input[type=text][name=lastName]').prop("readonly", false);
										$('.za-lp-contact input[type=text][name=fullname]').prop("readonly", false);
										$('.za-lp-contact input[type=tel][name=phone]').prop("readonly", false);
										$('.za-lp-contact input[type=text][name=firstName]').css("opacity", 1);
										$('.za-lp-contact input[type=text][name=lastName]').css("opacity", 1);
										$('.za-lp-contact input[type=text][name=fullname]').css("opacity", 1);
										$('.za-lp-contact input[type=tel][name=phone]').css("opacity", 1);
									}
								}
							});
						}else{
							$('.za-lp-contact input[type=text][name=firstName]').val('');
							$('.za-lp-contact input[type=text][name=lastName]').val('');
							$('.za-lp-contact input[type=text][name=fullname]').val('');
							$('.za-lp-contact input[type=tel][name=phone]').val('');
							$('.za-lp-contact input[type=text][name=firstName]').prop("readonly", false);
							$('.za-lp-contact input[type=text][name=lastName]').prop("readonly", false);
							$('.za-lp-contact input[type=text][name=fullname]').prop("readonly", false);
							$('.za-lp-contact input[type=tel][name=phone]').prop("readonly", false);
							$('.za-lp-contact input[type=text][name=firstName]').css("opacity", 1);
							$('.za-lp-contact input[type=text][name=lastName]').css("opacity", 1);
							$('.za-lp-contact input[type=text][name=fullname]').css("opacity", 1);
							$('.za-lp-contact input[type=tel][name=phone]').css("opacity", 1);;
						}
					}
					
					function isEmail(email) {
					  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
					  return regex.test(email);
					}
				});
			</script>
			<?php
		}
		
		$output = ob_get_contents();
        ob_clean();
		
		return $output;
	}
	
}

new ET_Builder_Module_Za_Contact();

?>