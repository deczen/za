<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->{"Annual Assessmnt Amt"}) || isset($single_property->unmapped->Auction) || isset($single_property->unmapped->{"Best Use"}) || isset($single_property->unmapped->{"Cross Street Address"}) || isset($single_property->restrictions) ||
			  isset($single_property->documentsonfile) || isset($single_property->easements) || isset($single_property->elevator) || isset($single_property->propsubtype) || isset($single_property->unmapped->Occupancy) ||
			  isset($single_property->unmapped->{"School Name 1"}) || isset($single_property->unmapped->{"Semi-Annual Taxes"}) || isset($single_property->specialfinancing) || isset($single_property->unmapped->{"Suburb (SIC)"}) || isset($single_property->unpammed->Township) ||
			  isset($single_property->utilities) || isset($single_property->unmapped->{"Cleared Acreage"}) || isset($single_property->frontage) || isset($single_property->unmapped->{"Land Descriptions"}) || isset($single_property->lotdescription) ||
			  isset($single_property->unmapped->{"Topography Description"}) || isset($single_property->unmapped->View) || isset($single_property->unmapped->Wooded) || isset($single_property->unmapped->{"Wooded Acreage"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->unmapped->{"Annual Assessmnt Amt"})): ?>
			<li>Annual Assessment Amt: [unmapped_Annual Assessmnt Amt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Best Use"})): ?>
			<li>Best Use: [unmapped_Best Use]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cross Street Address"})): ?>
			<li>Cross Street Address: [unmapped_Cross Street Address]</li>
			<?php endif; ?>
			<?php if( isset($single_property->restrictions)): ?>
			<li>Deed Restrictions: [restrictions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->documentsonfile)): ?>
			<li>Documents Available: [documentsonfile]</li>
			<?php endif; ?>
			<?php if( isset($single_property->easements)): ?>
			<li>Easement: [easements]</li>
			<?php endif; ?>
			<?php if( isset($single_property->elevator)): ?>
			<li>Elevation: [elevator]</li>
			<?php endif; ?>
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Land Type: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"School Name 1"})): ?>
			<li>School District Phone: [unmapped_School Name 1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Semi-Annual Taxes"})): ?>
			<li>Semi Annual Taxes: [unmapped_Semi-Annual Taxes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->specialfinancing)): ?>
			<li>Special Financing: [specialfinancing]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Suburb (SIC)"})): ?>
			<li>Suburb SIC: [unmapped_Suburb (SIC)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Township)): ?>
			<li>Township: [unmapped_Township]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities Available: [utilities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cleared Acreage"})): ?>
			<li>Cleared Acreage: [unmapped_Cleared Acreage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->frontage)): ?>
			<li>Frontage: [frontage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Land Descriptions"})): ?>
			<li>Land Description: [unmapped_Land Descriptions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Dimensions: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Topography Description"})): ?>
			<li>Topography: [unmapped_Topography Description]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->View)): ?>
			<li>View: [unmapped_View]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Wooded)): ?>
			<li>Wooded: [unmapped_Wooded]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Wooded Acreage"})): ?>
			<li>Wooded Acreage: [unmapped_Wooded Acreage]</li>
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

</ul>