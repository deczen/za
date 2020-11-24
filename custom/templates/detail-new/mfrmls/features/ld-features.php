<ul class="zy-features-grid">
	
	<?php if( isset($single_property->facingdirection) || isset($single_property->unmapped->FrontFootage) || isset($single_property->lotdescription) || isset($single_property->unmapped->LotSizeDimensions) || isset($single_property->unmapped->WaterAccess) || 
			  isset($single_property->unmapped->WaterAccessYN) || isset($single_property->waterbodyname) || isset($single_property->unmapped->WaterExtrasYN) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterViewYN) || 
			  isset($single_property->unmapped->AdditionalParcelsYN) || isset($single_property->unmapped->AdditionalParcelsDescription) || isset($single_property->reqdownassociation) || isset($single_property->unmapped->CDDYN) || isset($single_property->propsubtype) || 
			  isset($single_property->unmapped->Disclosures) || isset($single_property->easements) || isset($single_property->unmapped->FloodZoneCode) || isset($single_property->unmapped->ListingTerms) || isset($single_property->petrestrictionsallow) ||
			  isset($single_property->unmapped->RealtorInfo) || isset($single_property->assocsecurity) || isset($single_property->sitecondition) || isset($single_property->zoning) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->facingdirection)): ?>
			<li>Direction Faces: [facingdirection]</li>
			<?php endif; ?>
			<?php if( isset($single_property->FrontFootage)): ?>
			<li>Front Footage: [FrontFootage]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotdescription)): ?>
			<li>Lot Description: [lotdescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->LotSizeDimensions)): ?>
			<li>Lot Size Dimensions: [unmapped_LotSizeDimensions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterAccess)): ?>
			<li>Water Access: [unmapped_WaterAccess]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterAccessYN)): ?>
			<li>Water Access Yn: [unmapped_WaterAccessYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterbodyname)): ?>
			<li>Water Body Name: [waterbodyname]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterExtrasYN)): ?>
			<li>Water Extras Yn: [unmapped_WaterExtrasYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
			<li>Water Frontage Feet Lake: [unmapped_WaterfrontFeetTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterViewYN)): ?>
			<li>Water View: [unmapped_WaterViewYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsYN)): ?>
			<li>Additional Parcels Yn: [unmapped_AdditionalParcelsYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AdditionalParcelsDescription)): ?>
			<li>Additional Parcels Description: [unmapped_AdditionalParcelsDescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->reqdownassociation)): ?>
			<li>Association Yn: [reqdownassociation]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->CDDYN)): ?>
			<li>Cdd Yn: [unmapped_CDDYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->propsubtype)): ?>
			<li>Current Use: [propsubtype]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Disclosures)): ?>
			<li>Disclosures: [unmapped_Disclosures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->easements)): ?>
			<li>Easements: [easements]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->FloodZoneCode)): ?>
			<li>Flood Zone Code: [unmapped_FloodZoneCode]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->ListingTerms)): ?>
			<li>Listing Terms: [unmapped_ListingTerms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->petrestrictionsallow)): ?>
			<li>Pets Allowed: [petrestrictionsallow]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->RealtorInfo)): ?>
			<li>Realtor Info: [unmapped_RealtorInfo]</li>
			<?php endif; ?>
			<?php if( isset($single_property->assocsecurity)): ?>
			<li>Security Features: [assocsecurity]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sitecondition)): ?>
			<li>Site Conditions: [sitecondition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->zoning)): ?>
			<li>Zoning: [zoning]</li>
			<?php endif; ?>
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->waterfront) || isset($single_property->unmapped->WaterfrontFeetTotal) || isset($single_property->unmapped->WaterfrontYN) || isset($single_property->utilities) || isset($single_property->sewer)  ||
				  isset($single_property->water) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->waterfront)): ?>
			<li>Waterfront Features: [waterfront]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontFeetTotal)): ?>
			<li>Waterfront Feet Total: [unmapped_WaterfrontFeetTotal]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->WaterfrontYN)): ?>
			<li>Waterfront Yn: [unmapped_WaterfrontYN]</li>
			<?php endif; ?>
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>
			<?php if( isset($single_property->sewer)): ?>
			<li>Sewer: [sewer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->AmenitiesAdditionalFees) || isset($single_property->unmapped->TotalAnnualFees) || isset($single_property->feeinterval) || isset($single_property->unmapped->MonthlyHOAAmount) || isset($single_property->unmapped->AssociationFeeRequirement) || 
				  isset($single_property->taxes) || isset($single_property->taxyear) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->unmapped->AmenitiesAdditionalFees)): ?>
			<li>Amenities Additional Fees: [unmapped_AmenitiesAdditionalFees]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->unmapped->TotalAnnualFees)): ?>
			<li>Association Fee: [unmapped_TotalAnnualFees]</li>
			<?php endif; ?>
			<?php if( isset($single_property->feeinterval)): ?>
			<li>Association Fee Frequency: [feeinterval]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->MonthlyHOAAmount)): ?>
			<li>Association Fee Monthly Amount: [unmapped_MonthlyHOAAmount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->AssociationFeeRequirement)): ?>
			<li>Association Fee Requiremen: [unmapped_AssociationFeeRequirement]</li>
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