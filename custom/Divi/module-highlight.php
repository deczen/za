<?php

class ET_Builder_Module_Za_Highlight extends ET_Builder_Module {
		
    function init() {
        $this->name = '[Zipperagent] Highlight Info';
        $this->slug = 'et_pb_property_highlight_module';

        $this->main_css_element = '%%order_class%%';
        $this->whitelisted_fields = array(
            'za_listing_price',
			'za_status',
			'za_proptype',
			'za_bedrooms',
			'za_bathrooms',		
        );
				
        $this->options_toggles = array(
            'general' => array(
                'toggles' => array(
                    'main_content' => 'Property Highlight',
                ),
            ),
        );
    }

    function get_fields() {
		
		$fields = array(
			'za_dummy' => array(
                'type' => 'text',
                'toggle_slug' => 'main_content',
				'after'           => array(
					array(
						'type'  => 'button',
						'class' => 'et_pb_generate_details',
						'text'  => esc_html__( 'Generate Values', 'zipperagent' ),
					),
				),
            ),
            'za_listing_price' => array(
                'label' => 'Price',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_status' => array(
                'label' => 'Status',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_proptype' => array(
                'label' => 'Property Type',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_bedrooms' => array(
                'label' => 'Beds',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),
			'za_bathrooms' => array(
                'label' => 'Bath',
                'type' => 'text',
                // 'description' => 'Enter your text here',
                'toggle_slug' => 'main_content',
            ),			
        );
		
        return $fields;
    }

    function shortcode_callback($atts, $content = null, $function_name) {
		$za_listing_price = !empty($this->shortcode_atts['za_listing_price'])?$this->shortcode_atts['za_listing_price']:'&nbsp';
		$za_status = !empty($this->shortcode_atts['za_listing_price'])?$this->shortcode_atts['za_status']:'&nbsp';
		$za_proptype = !empty($this->shortcode_atts['za_listing_price'])?$this->shortcode_atts['za_proptype']:'&nbsp';
		$za_bedrooms = !empty($this->shortcode_atts['za_listing_price'])?$this->shortcode_atts['za_bedrooms']:'&nbsp';
		$za_bathrooms = !empty($this->shortcode_atts['za_listing_price'])?$this->shortcode_atts['za_bathrooms']:'&nbsp';
		
        $module_class = ET_Builder_Element::add_module_order_class('', $function_name);
        ob_start();
		
		$price = is_numeric($za_listing_price) ? zipperagent_currency() . number_format_i18n( $za_listing_price, 0 ) : 'No price';
		?>
		<div class="list-top-meta span-page">
			<div class="za-container">
				<div class="top-meta-wrap">
					<div class="topmeta centertext">
						<h3><i class="fa fa-home" role="none"></i></h3>
						<h3 class="caps redtext"><strong><?php echo $za_proptype; ?></strong></h3>
						<hr>
						<h4 class="caps">Property Type</h4>
					</div>
					<div class="topmeta centertext">
						<h3><i class="fa fa-usd" role="none"></i></h3>
						<h3 class="caps redtext"><strong><?php echo $price; ?></strong></h3>
						<hr>
						<h4 class="caps">List Price</h4>
					</div>
					<div class="topmeta centertext">
						<h3><i class="fa fa-bed" role="none"></i></h3>
						<h3 class="caps redtext"><strong><?php echo $za_bedrooms; ?></strong></h3>
						<hr>
						<h4 class="caps"># of Bedrooms</h4>
					</div>
					<div class="topmeta centertext">
						<h3><i class="fa fa-tint" role="none"></i></h3>
						<h3 class="caps redtext"><strong><?php echo $za_bathrooms; ?></strong></h3>
						<hr>
						<h4 class="caps"># of Bathrooms</h4>
					</div>
				</div>
			</div>
		</div>
		<style>
		
		.top-meta-wrap {
			display: -webkit-flex;
			display: flex;
			-webkit-justify-content: space-between;
			justify-content: space-between;
			padding: 25px 0;
		}
		.topmeta {
			-webkit-flex-grow: 1;
			flex-grow: 1;
			width: 20%;
			text-align: center;
			padding: 0 10px;
		}
		.topmeta h3:first-of-type {
			margin-top: 0;
			display: none;
		}
		.topmeta .redtext {
			font-size: 22px;
			margin: 0 !important;
		}
		.topmeta h4 {
			font-size: 16px !important;
			font-weight: bold !important;
			letter-spacing: 1px;
			margin: 0;
		}
		.topmeta hr {
			border-top: 2px solid #000 !important;
			margin: 7px 0 !important;
		}
		.redtext{color:#880000;}
		@media(max-width: 991px){
			.topmeta {
				padding: 0 5px;
			}
			
			.topmeta .redtext {
				font-size: 20px;
			}
		}
		@media(max-width: 767px){
			.top-meta-wrap {
				display: block;
			}
			
			.topmeta {
				width: 100%;
				padding: 15px 0;
			}
		}
		</style>
		<?php /*
		<div id="property-highlight" style="display:none">
			<div class="listprice">
				<span><?php echo $price; ?></span>
			</div>
			<div class="status">
				<span>Status</span>
				<span><?php echo $za_status; ?></span>
			</div>
			<div class="proptype">
				<span>Type</span>
				<span><?php echo $za_proptype; ?></span>
			</div>
			<div class="beds">
				<span>Beds</span>
				<span><?php echo $za_bedrooms; ?></span>
			</div>
			<div class="bath">
				<span>Bath</span>
				<span><?php echo $za_bathrooms; ?></span>
			</div>
		</div>		
		<script>
			jQuery(document).ready(function($){
				 
				 var width=$('#property-highlight').width();
				 resize(width);
				 
				 $(window).on("resize", function(){
					width=$('#property-highlight').width();
					resize(width);
				 });		
				 
				 function resize(width){
					if(width<=768){
						$('#property-highlight > div').addClass('block');
					}else{
						$('#property-highlight > div').removeClass('block');
					}
				 }
				 
				 $('#property-highlight').fadeIn();
			});
		</script>
		<style>
		#property-highlight{box-shadow: 0 1px 2px rgba(0,0,0,.1); width:99.66%;}
		#property-highlight .listprice{
			background:#880000;
			color: #fff;
			font-weight:bold;
			font-size:20px;
			border-right:1px solid #880000;
		}
		#property-highlight > div{
			width:20%;
			margin-right:-1px;
			float:left;
			border-right:1px solid #ddd;
			border-top:1px solid #ddd;
			border-bottom:1px solid #ddd;
			padding:10px 0;
			text-align:left;
		}
		#property-highlight > div > span:first-child{
			padding-left:10px;
		}
		#property-highlight > div >span:nth-child(2){
			padding-right:10px;
			font-weight:bold;
			float:right;
		}
		#property-highlight > div.block{
			display:block;
			float:none;
			width:100%;
		}
		#property-highlight .listprice.block{
			border-left:1px solid #880000;
			text-align:center;
		}
		#property-highlight > div.block:not(:first-child){
			border-left:1px solid #ddd;
			border-top:none;
		}
		@media screen and (max-width:768px){
			#property-highlight > div{
				display:block;
				float:none;
				width:100%;
			}
			#property-highlight .listprice{
				border-left:1px solid #880000;
				text-align:center;
			}
			#property-highlight > div:not(:first-child){
				border-left:1px solid #ddd;
				border-top:none;
			}
		}
		</style>
		
		<?php */
		
        $output = ob_get_contents();
        ob_clean();
        $output = sprintf(
                '<div class="et_pb_module %1$s">%2$s</div>', ( '' !== $module_class ? sprintf(' %1$s', esc_attr($module_class)) : ''), $output
        );
        

        return $output;
    }

}

new ET_Builder_Module_Za_Highlight();

