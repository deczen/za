<ul class="grid grid--gutters grid-xs--full grid-lg--thirds">
	<?php if( isset($single_property->style) || isset($single_property->yearbuilt) || isset($single_property->parkingspaces) || isset($single_property->parkingfeature) || isset($single_property->shortsalelenderappreqd) || isset($single_property->unmapped->Foreclosure) || isset($single_property->water) || isset($single_property->sewer) || isset($single_property->asscfeeincludes) || isset($single_property->taxes) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">General Information</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->yearbuilt)): ?>
				<tr>
					<td class="zy-listing__table__label">Year Built</td>
					<td class="zy-listing__table__items"><span>[yearbuilt]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingspaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking</td>
					<td class="zy-listing__table__items"><span>[parkingspaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->parkingfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Parking Description</td>
					<td class="zy-listing__table__items"><span>[parkingfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->shortsalelenderappreqd)): ?>
				<tr>
					<td class="zy-listing__table__label">Short Sale</td>
					<td class="zy-listing__table__items"><span>[shortsalelenderappreqd]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Foreclosure)): ?>
				<tr>
					<td class="zy-listing__table__label">Foreclosure</td>
					<td class="zy-listing__table__items"><span>[unmapped_Foreclosure]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->water)): ?>
				<tr>
					<td class="zy-listing__table__label">Water</td>
					<td class="zy-listing__table__items"><span>[water]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->sewer)): ?>
				<tr>
					<td class="zy-listing__table__label">Sewer</td>
					<td class="zy-listing__table__items"><span>[sewer]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->asscfeeincludes)): ?>
				<tr>
					<td class="zy-listing__table__label">Inclusions</td>
					<td class="zy-listing__table__items"><span>[asscfeeincludes]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->taxes)): ?>
				<tr>
					<td class="zy-listing__table__label">Taxes</td>
					<td class="zy-listing__table__items"><span>[taxes]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</li>						
	<?php endif; ?>
	
	<?php if( isset($single_property->construction) || isset($single_property->yearbuiltdescrp) || isset($single_property->acre) || isset($single_property->lotsize) || isset($single_property->style) ):?>
	<li class="cell">
		<h3 class="zy-listing__headline">Exterior Information</h3>
		<table class="zy-listing__table">

			<tbody>
				<?php if( isset($single_property->construction)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction</td>
					<td class="zy-listing__table__items"><span>[construction]</span></td>
				</tr>
				<?php endif; ?>		
				<?php if( isset($single_property->yearbuiltdescrp)): ?>
				<tr>
					<td class="zy-listing__table__label">Construction Type</td>
					<td class="zy-listing__table__items"><span>[yearbuiltdescrp]</span></td>
				</tr>
				<?php endif; ?>		
				<?php if( isset($single_property->acre)): ?>
				<tr>
					<td class="zy-listing__table__label">Acres</td>
					<td class="zy-listing__table__items"><span>[acre]</span></td>
				</tr>
				<?php endif; ?>		
				<?php if( isset($single_property->lotsize)): ?>
				<tr>
					<td class="zy-listing__table__label">Lot Dimensions</td>
					<td class="zy-listing__table__items"><span>[lotsize]</span></td>
				</tr>
				<?php endif; ?>		
				<?php if( isset($single_property->style)): ?>
				<tr>
					<td class="zy-listing__table__label">Style</td>
					<td class="zy-listing__table__items"><span>[style]</span></td>
				</tr>
				<?php endif; ?>			
			</tbody>
		</table>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->cooling) || isset($single_property->heating) || isset($single_property->unmapped->HeatType2) || isset($single_property->fireplaces) || isset($single_property->flooring) || isset($single_property->unmapped->Basement) || isset($single_property->basementfeature) || isset($single_property->basement) || isset($single_property->unmapped->BathsFullLocations) || isset($single_property->unmapped->BathsPartialLocations) ):?>
		<h3 class="zy-listing__headline">Interior Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->cooling)): ?>
				<tr>
					<td class="zy-listing__table__label">Cooling</td>
					<td class="zy-listing__table__items"><span>[cooling]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->heating)): ?>
				<tr>
					<td class="zy-listing__table__label">Heat Type</td>
					<td class="zy-listing__table__items"><span>[heating]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->HeatType2)): ?>
				<tr>
					<td class="zy-listing__table__label">Heat Type 2</td>
					<td class="zy-listing__table__items"><span>[unmapped_HeatType2]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->fireplaces)): ?>
				<tr>
					<td class="zy-listing__table__label">Number of Fireplaces</td>
					<td class="zy-listing__table__items"><span>[fireplaces]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->flooring)): ?>
				<tr>
					<td class="zy-listing__table__label">Floors</td>
					<td class="zy-listing__table__items"><span>[flooring]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement</td>
					<td class="zy-listing__table__items"><span>[unmapped_Basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basementfeature)): ?>
				<tr>
					<td class="zy-listing__table__label">Basement Access</td>
					<td class="zy-listing__table__items"><span>[basementfeature]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->basement)): ?>
				<tr>
					<td class="zy-listing__table__label">Basemet Description</td>
					<td class="zy-listing__table__items"><span>[basement]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BathsFullLocations)): ?>
				<tr>
					<td class="zy-listing__table__label">Full Bath Locations</td>
					<td class="zy-listing__table__items"><span>[unmapped_BathsFullLocations]</span></td>
				</tr>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->BathsPartialLocations)): ?>
				<tr>
					<td class="zy-listing__table__label">Partial Bath Locations</td>
					<td class="zy-listing__table__items"><span>[unmapped_BathsPartialLocations]</span></td>
				</tr>
				<?php endif; ?>		
			</tbody>
		</table>
		<?php endif; ?>
		
		<?php if( isset($single_property->schooldistrict) ):?>
		<h3 class="zy-listing__headline">School Information</h3>
		<table class="zy-listing__table">
			<tbody>
				<?php if( isset($single_property->schooldistrict)): ?>
				<tr>
					<td class="zy-listing__table__label">School District</td>
					<td class="zy-listing__table__items"><span>[schooldistrict]</span></td>
				</tr>
				<?php endif; ?>
			</tbody>
		</table>
		<?php endif; ?>
	</li>					

</ul>
