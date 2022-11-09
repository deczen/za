<?php
if( $list ): ?>
<div id="map-content">

	<div class="tab-content clearfix">
		<div class="tab-pane active" id="photo-view">
			<?php 
			$i=0;
			$wrapOpen=false;
			$column=2; //map view only has 2 columns
			foreach( $list as $option ): ?>
				<?php 				
				
				if( $open )
					$property=isset($option->mergedProperty)?$option->mergedProperty:null;
				else
					$property=$option;
				
				if( !isset($property->id) )
					continue;
				
				$params = zipperagent_property_grid( 
					$property, 
					array( 
						'i' => $i,
						'column' => $column,
						'wrapOpen' => $wrapOpen,
						'total_props' => sizeof($list),
						'is_desktop' => 1,
						'columns_code' => 'col-lg-6 col-sm-6 col-md-12 col-xs-12',
					),
					$requests, 
					$searchId, 
					$search
				);
				
				extract( $params );
				
				$i++;
			endforeach; ?>			
		</div>
		
		<div class="tab-pane" id="list-view">
			<?php 
			$i=0;
			foreach( $list as $option ): ?>
				<?php 				
				
				if( $open )
					$property=isset($option->mergedProperty)?$option->mergedProperty:null;
				else
					$property=$option;
				
				if( !isset($property->id) )
					continue;
				
				$params = zipperagent_property_list( 
					$property, 
					array( 
						'i' => $i,
						'total_props' => sizeof($list),
					),
					$requests, 
					$searchId, 
					$search
				);
				
				extract( $params );
				
				$i++;
			endforeach; ?>	
		</div>
		
		<?php /* 
		<div class="tab-pane" id="table-view">
			<table class="table-view">
				<thead>
					<tr>
						<th>&nbsp;</th>
						<th>Address</th>
						<th>Location</th>
						<th>Price</th>
						<th>Beds</th>
						<th>Baths</th>
						<th>Sq.Ft.</th>
						<!-- <th>$/Sq.Ft.</th> -->
						<th>On Site</th>
						<th>&nbsp;</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach( $list as $option ):						
					
					if( $open )
						$property=isset($option->mergedProperty)?$option->mergedProperty:null;
					else
						$property=$option;
					
					if( !isset($property->id) )
						continue;
					
					// echo "<pre>"; print_r( $property ); echo "</pre>";
					
					$fulladdress = zipperagent_get_address($property);
					
					$saved_crit=$search;
					$critBase64 = !empty($saved_crit) ? base64_encode(serialize($saved_crit)) : null;
					if(!empty($searchId)){
						$query_args['searchId']= $searchId;
					}
					if(zp_using_criteria() && !empty($critBase64)){
						$query_args['criteria']= $critBase64;
					}
					if(isset($requests['newsearchbar']) && $requests['newsearchbar']==1){
						$query_args['newsearchbar']= 1;
					}
					$single_url = add_query_arg( $query_args, zipperagent_property_url( $property->id, $fulladdress ) );
					$price=(in_array($property->status, explode(',',zipperagent_sold_status()))?(isset($property->saleprice)?$property->saleprice:$property->listprice):$property->listprice);
					
					// $rebate_text = za_get_rebate_text( $property );
					$rb = ZipperagentGlobalFunction()->zipperagent_rb();
					$enable_rebate = isset($rb['web']['display.buyerrebate.amount'])?$rb['web']['display.buyerrebate.amount']:0;
					$rebate_prefix = isset($rb['web']['buyerrebate.amount.prefix'])?$rb['web']['buyerrebate.amount.prefix']:'';
					$rebate_default_text = isset($rb['web']['emptybuyerrebate.amount.text'])?$rb['web']['emptybuyerrebate.amount.text']:'';
					?>
					
					<tr data-link="<?php echo $single_url; ?>">
						<td><a class="url-wrap" listingId="<?php echo $property->id; ?>" href="<?php echo $single_url; ?>"></a>
							<?php if( isset( $option->startDate ) || isset($property->openHouses) ): ?><span class="badge-open-house">Open&nbsp;House</span><?php endif; ?></td>
						<td><span class="address-wrap" title="<?php echo $fulladdress; ?>"><?php echo $fulladdress; ?></span></td>
						<td><span class="town-wrap" title="<?php echo isset($property->lngTOWNSDESCRIPTION)?$property->lngTOWNSDESCRIPTION:''; ?>"><?php echo isset($property->lngTOWNSDESCRIPTION)?$property->lngTOWNSDESCRIPTION:'-'; ?></span></td>
						<td><?php echo zipperagent_currency() . number_format_i18n( $price, 0 ); ?></td>
						<td><?php echo zipperagent_get_nobedrooms($property); ?></td>
						<td><?php echo zipperagent_get_nobaths($property); ?></td>
						<td><?php echo zipperagent_get_sqft($property); ?></td>
						<?php /* <td><?php echo zipperagent_get_sqft($property); ?></td> * ?>
						<td><?php echo isset($property->dayssincelisting)?($property->dayssincelisting . ' ' . ( $property->dayssincelisting > 1 ? 'days':'day') ):'-'; ?> </td>
						<td><a class="listing-<?php echo $property->id; ?> save-favorite-btn <?php echo zipperagent_is_favorite($property->id)?"active":""; ?>" isLogin="<?php echo ZipperagentGlobalFunction()->getCurrentUserContactLogin() ? 1:0; ?>" listingId="<?php echo $property->id; ?>" searchId="" contactId="<?php echo implode(',',$contactIds); ?>" href="#" afteraction="save_favorite_listing"><i class="fa fa-heart" aria-hidden="true" role="none"></i></a></td>
					</tr>
					
					<?php
				endforeach; ?>
				</tbody>
			</table>
		</div> */ ?>
	</div>
   
   
	<?php if( $showPagination ): ?>
	<div class="clearfix"></div>
		<?php if( ! $is_ajax_count ): ?>
		<div class="col-md-12 pagination-wrap prop-pagination">
			<div class="col-xs-12">			
				<?php echo zipperagent_pagination($page, $num, $count, $actual_link); ?>
			</div>
		</div>
		<!--col-->
		<?php else: ?>
		<div class="col-md-12 pagination-wrap prop-pagination"></div> <!-- show on ajax -->
		<?php endif; ?>
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
	
<?php
else: ?>
<div id="map-content" class="row">

	<div class="col-md-12">
		<div class="col-md-12 mb-10 mt-25">
			<span>No Properties Found </span>
		</div>
		<div class="col-md-12 pagination-wrap">
			<ul class="pagination">
				<li class="disabled"><a href="#">&laquo;</a>
				</li>
				<li class="disabled"><a href="#">1 of 0</a>
				</li>
				<li class="disabled"><a href="#">&raquo;</a>
				</li>
			</ul>
		</div>		
		<!--col-->
	</div>
	<!--row-->
</div>
<?php endif; ?>