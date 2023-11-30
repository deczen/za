<ul class="zy-features-grid">
	
	<?php if( isset($single_property->construction) || isset($single_property->foundation) || isset($single_property->foundationsize) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterViewYN) || 
			  isset($single_property->unmapped->AdditionalParcelsYN) || isset($single_property->unmapped->FloodZoneCode) || isset($single_property->sitecondition) || isset($single_property->vacant) || isset($single_property->yearbuiltdescrp) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->construction)): ?>
			<li>Construction Materials: [construction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundation)): ?>
			<li>Foundation Details: [foundation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->foundationsize)): ?>
			<li>Foundation Size: [foundationsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
			<li>WaterfrontFeetTotal: [unmapped_WaterfrontFeetTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterViewYN)): ?>
			<li>Waterfront Yn: [unmapped_WaterViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels Yn: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
			<li>Flood Zone Code: [unmapped_FloodZoneCode]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site Conditions: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->vacant)): ?>
			<li>Vacant: [vacant]</li>
			<?php endif; ?>
			<?php if( isset($single_property->yearbuiltdescrp)): ?>
			<li>Year Built Description: [yearbuiltdescrp]</li>
			<?php endif; ?>
			
			<?php if( isset($single_property->petsallowed)): ?>
			<li>Pets Allowed: [petsallowed]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pet Restrictions Allow: [petrestrictionsallow]</li>
			<?php endif; ?>
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->cooling) || isset($single_property->unmapped->WaterAccessYN) || isset($single_property->unmapped->WaterExtrasYN) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->cooling)): ?>
			<li>Cooling: [cooling]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterAccessYN)): ?>
			<li>Water Access Yn: [unmapped_WaterAccessYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterExtrasYN)): ?>
			<li>Water Extras Yn: [unmapped_WaterExtrasYN]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->hoafee) || isset($single_property->taxes) || isset($single_property->taxyear) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->hoafee)): ?>
			<li>HOA Fee: [hoafee]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->taxes)): ?>
			<li>Tax Annual Amount: [taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->taxyear)): ?>
			<li>Tax Year: [taxyear]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>