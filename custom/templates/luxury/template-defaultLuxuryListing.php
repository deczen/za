<?php
$contactIds=get_contact_id();
?>
<link rel="stylesheet" href="<?php echo ZipperagentGlobalFunction()->zipperagent_url(false) . 'css/luxury.css'; ?>">	
<div id="zpa-main-container" class="zpa-container " style="display: inline;">
	<div class="zpa-listing-search-results">
		<div class="luxury-list-section">
		   <?php foreach( $list as $luxury ): ?>
				<?php 		
				// echo "<pre>"; print_r($luxury); echo "</pre>";
				$properties = isset($luxury->properties)?$luxury->properties:false;
				
				if(!$properties)
					continue;
				
				$property=$properties[0];								
				$single_url = zipperagent_luxury_property_url( $luxury->id, 'detail' );
				$more = ' <a href="'. $single_url .'">more</a>';
				// $luxury->description = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
				$description = isset($luxury->description)?$luxury->description:'no description.';
				?>
				<div class="lux-single">
					<div class="lux-header">
						<h3><a href="<?php echo $single_url ?>"><?php echo $luxury->name ?></a></h3>
					</div>
					<div class="lux-content row">
						<div class="lux-image col-sm-3 col-xs-12">
							<div style="background-image: url('<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>');" class="zpa-results-grid-photo" >
								<img class="printonly" src="<?php echo ( isset($property->photoList[0]) ) ? str_replace('http://','//',$property->photoList[0]->imgurl) : ZIPPERAGENTURL . "images/no-photo.jpg"; ?>"  alt="property photo" />
								<a href="<?php echo $single_url ?>"></a>
							</div>
						</div>
						<div class="col-sm-9 col-xs-12">
							<div class="col-xs-12">
								<a href="<?php echo $single_url ?>"><span class="available-properties"> <?php echo count($properties) . ' '; echo count($properties)>1?'properties available':'property available'; ?> </span></a>
							</div>
							
							<div class="lux-properties col-lg-5 col-sm-7 col-xs-12">							
								<table>
									<thead>
										<tr>
											<th>Rooms</th><th>Sales</th><th>Rentals</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										$variables = luxury_get_variables($properties);
										extract($variables);
										if(sizeof($rooms)):
										foreach($rooms as $key=>$room): ?>
										<tr>
											<td><?php echo $rooms[$key] ?> BR</td>
											<td><?php echo $sales[$key]? zipperagent_currency() . number_format_i18n( $sales[$key], 0 ) : '-'; ?></td>
											<td><?php echo $rentals[$key]? zipperagent_currency() . number_format_i18n( $rentals[$key], 0 ) : '-'; ?></td>										
										</tr>
										<?php endforeach;
										endif; ?>
									</tbody>
								</table>
							</div>
							
							<div class="lux-description col-lg-7 col-sm-5 col-xs-12">
								<span class="lux-description-text"><?php echo wp_trim_words( $description, 50, '...' ) . $more; ?></span>
							</div>
						
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		   
		</div>		
		
		<?php if( $showPagination ): ?>
		<div class="row">
			<div class="col-xs-6">
				<ul class="pagination">
					<?php
					/* pagination */
					$total = $count;
					$pagescount = ceil($total/$num);
					$current_url=$actual_link;
					$back_url=$page>1?add_query_arg( array( 'page' => $page-1 ), $current_url ):'#';
					$next_url=$page<$pagescount?add_query_arg( array( 'page' => $page+1 ), $current_url ):'#';
					?>
					<li class="<?php if( $back_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $back_url ?>">&laquo;</a>
					</li>
					<li class="disabled"><a href="#"><?php echo $page ?> of <?php echo $pagescount ?></a>
					</li>
					<li class="<?php if( $next_url=="#" ) echo 'disabled' ?>"><a href="<?php echo $next_url ?>">&raquo;</a>
					</li>
				</ul>
			</div>
			<!--col-->
		</div>
		<!--row-->
		<?php endif; ?>
		
		<?php
		$listing_disclaimer = zipperagent_get_listing_disclaimer();
		?>
		<?php if( $listing_disclaimer ): ?>
		<div class="row">
			<div class="col-xs-12">
				<span class="listing-disclaimer" role="none"><?php echo $listing_disclaimer ?></span>
			</div>
			<!--col-->
		</div>
		<?php endif; ?>
		
	</div>
</div>