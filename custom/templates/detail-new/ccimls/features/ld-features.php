<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->{'Flood Ins Required'}) || isset($single_property->assessedvaluebldg) || isset($single_property->assessedvalueland) || isset($single_property->unmapped->{'Lot Size Source'}) || isset($single_property->unmapped->{'Membership Required'}) || isset($single_property->beachmilesto) || isset($single_property->unmapped->{'Other Assessments'}) || isset($single_property->propsubtype) || isset($single_property->unmapped->{'Special Listing Cond'}) || isset($single_property->zoning) || isset($single_property->totalassessedvalue) || isset($single_property->unmapped->{'Water Access'}) || isset($single_property->unmapped->{'Utilities: Water'}) || isset($single_property->location) || isset($single_property->unmapped->{'Lot #'}) || isset($single_property->zoning) || isset($single_property->zoning) || isset($single_property->zoning) || isset($single_property->zoning) || isset($single_property->unmapped->{'Utilities: Gas'}) || isset($single_property->electricfeature) || isset($single_property->unmapped->{'Convenient To'}) || isset($single_property->cableavailable) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">

				
				<?php if( isset($single_property->unmapped->{'Flood Ins Required'})): ?>
				<li>Flood Insurance Required: [unmapped_Flood Ins Required]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<li>Improvement Assessments: [assessedvaluebldg]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvalueland)): ?>
				<li>Land Assessments: [assessedvalueland]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot Size Source'})): ?>
				<li>Lot Size Source: [unmapped_Lot Size Source]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Membership Required'})): ?>
				<li>Membership Required: [unmapped_Membership Required]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachmilesto)): ?>
				<li>Miles From Beach: [beachmilesto]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Other Assessments'})): ?>
				<li>Other Assessments: [unmapped_Other Assessments]</li>
				<?php endif; ?>
				<?php if( isset($single_property->propsubtype)): ?>
				<li>Primary Sub Type: [propsubtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Special Listing Cond'})): ?>
				<li>Special Listing Cond: [unmapped_Special Listing Cond]</li>
				<?php endif; ?>
				<?php if( isset($single_property->zoning)): ?>
				<li>Zoning: [zoning]</li>
				<?php endif; ?>
				<?php if( isset($single_property->totalassessedvalue)): ?>
				<li>Total Assessment: [totalassessedvalue]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Water Access'})): ?>
				<li>Water Access: [unmapped_Water Access]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->unmapped->{'Utilities: Water'})): ?>
				<li>Water: [unmapped_Utilities: Water]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->location)): ?>
				<li>Location Description: [location]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Lot #'})): ?>
				<li>Lot Number: [unmapped_Lot #]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Utilities: Gas'})): ?>
				<li>Gas: [unmapped_Utilities: Gas]</li>
				<?php endif; ?>
				<?php if( isset($single_property->electricfeature)): ?>
				<li>Electric: [electricfeature]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Convenient To'})): ?>
				<li>Convenient To: [unmapped_Convenient To]</li>
				<?php endif; ?>
				<?php if( isset($single_property->cableavailable)): ?>
				<li>Cable: [cableavailable]</li>
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
	
	<?php if( isset($single_property->beachdescription) || isset($single_property->unmapped->Dock) || isset($single_property->roadtype) || isset($single_property->lotdescription) || isset($single_property->unmapped->Waterview) || isset($single_property->waterfrontflag) ): ?>
	<li class="cell">
		<h3 class="zy-feature-title">Exterior Features</h3>
		<ul class="zy-sub-list">

				
				<?php if( isset($single_property->beachdescription)): ?>
				<li>Beach Description: [beachdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Dock)): ?>
				<li>Dock: [unmapped_Dock]</li>
				<?php endif; ?>
				<?php if( isset($single_property->roadtype)): ?>
				<li>Street Description: [roadtype]</li>
				<?php endif; ?>
				<?php if( isset($single_property->lotdescription)): ?>
				<li>Topography: [lotdescription]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->Waterview)): ?>
				<li>Water View: [unmapped_Waterview]</li>
				<?php endif; ?>	
				<?php if( isset($single_property->waterfrontflag)): ?>
				<li>Waterfront: [waterfrontflag]</li>
				<?php endif; ?>						
			
		</ul>
	</li>
	<?php endif; ?>
	
	<li class="cell">
		<?php if( isset($single_property->taxes) || isset($single_property->beachownership) || isset($single_property->unmapped->{'Deed Restrictions'}) || isset($single_property->taxyear) || isset($single_property->assessedvaluebldg) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->taxes)): ?>
				<li>Annual Taxes: [taxes]</li>
				<?php endif; ?>
				<?php if( isset($single_property->beachownership)): ?>
				<li>Beach Ownership: [beachownership]</li>
				<?php endif; ?>
				<?php if( isset($single_property->reqdownassociation)): ?>
				<li>Association: [reqdownassociation]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{'Deed Restrictions'})): ?>
				<li>Deed Restrictions: [unmapped_Deed Restrictions]</li>
				<?php endif; ?>
				<?php if( isset($single_property->taxyear)): ?>
				<li>Tax Year: [taxyear]</li>
				<?php endif; ?>
				<?php if( isset($single_property->assessedvaluebldg)): ?>
				<li>Total Assessment: [assessedvaluebldg]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>					

</ul>