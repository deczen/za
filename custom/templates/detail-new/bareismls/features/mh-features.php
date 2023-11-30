<ul class="zy-features-grid">
	<?php if( isset($single_property->unmapped->{"Type Home"}) || isset($single_property->unmapped->Awning) || isset($single_property->unmapped->{"Berth Size Length"}) || isset($single_property->unmapped->{"Berth Size Width"}) || isset($single_property->unmapped->Expando) || 
			  isset($single_property->exterior) || isset($single_property->unmapped->Length) || isset($single_property->pooldescription) || isset($single_property->unmapped->Porch) || isset($single_property->roofmaterial) || 
			  isset($single_property->unmapped->Skirting) || isset($single_property->unmapped->{"Space Description"}) || isset($single_property->unmapped->{"Unit Description"}) || isset($single_property->waterviewfeatures) || isset($single_property->unmapped->Width) || 
			  isset($single_property->unmapped->{"Yard/Grounds"}) || isset($single_property->flooring) || isset($single_property->unmapped->Kitchen) || isset($single_property->unmapped->{"Dining Room"}) || isset($single_property->appliances) || 
			  isset($single_property->unmapped->Skirting) || isset($single_property->unmapped->{"Main Level"}) || isset($single_property->unmapped->Miscellaneous) || isset($single_property->unmapped->{"Other Rooms"}) || isset($single_property->unmapped->{"Stories/Levels"}) || 
			  isset($single_property->parkingfeature) || isset($single_property->unmapped->Occupancy) || isset($single_property->unmapped->Manufacturer) || isset($single_property->unmapped->{"Space Rent Includes"}) || isset($single_property->unmapped->Auction) || 
			  isset($single_property->unmapped->{"Construct/Condition"}) || isset($single_property->asscfeeincludes) || isset($single_property->unmapped->{"Land Owned"}) || isset($single_property->unmapped->{"License Fee"}) || isset($single_property->unmapped->Make) || 
			  isset($single_property->unmapped->Manufacturer) || isset($single_property->unmapped->{"Max Lease Mo"}) || isset($single_property->unmapped->{"Min Lease Mo"}) || isset($single_property->unmapped->{"Property Subtype 1"}) || isset($single_property->unmapped->Model) || 
			  isset($single_property->unmapped->{"New Construct/Resale"}) || isset($single_property->restrictions) || isset($single_property->unmapped->{"License Fee"}) || isset($single_property->unmapped->Senior) || isset($single_property->unmapped->{"Site Pk/Hm"}) || 
			  isset($single_property->unmapped->{"Space/Berth Rent $"}) || isset($single_property->unmapped->{"Space #"}) || isset($single_property->unmapped->{"Space Rent Includes"}) || isset($single_property->unmapped->Occupancy) || isset($single_property->forsale) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			
			<?php if( isset($single_property->unmapped->{"Type Home"})): ?>
			<li>Attached Detached Home: [unmapped_Type Home]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Awning)): ?>
			<li>Awning: [unmapped_Awning]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Berth Size Length"})): ?>
			<li>Berth Size Length: [unmapped_Berth Size Length]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Berth Size Width"})): ?>
			<li>Berth Size Width: [unmapped_Berth Size Width]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Expando)): ?>
			<li>Expando: [unmapped_Expando]</li>
			<?php endif; ?>
			<?php if( isset($single_property->exterior)): ?>
			<li>Exterior: [exterior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->Length)): ?>
			<li>Length: [Length]</li>
			<?php endif; ?>
			<?php if( isset($single_property->pooldescription)): ?>
			<li>Pool: [pooldescription]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Porch)): ?>
			<li>Porch: [unmapped_Porch]</li>
			<?php endif; ?>
			<?php if( isset($single_property->roofmaterial)): ?>
			<li>Roof: [roofmaterial]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Skirting)): ?>
			<li>Skirting: [unmapped_Skirting]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Space Description"})): ?>
			<li>Space Description: [unmapped_Space Description]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Unit Description"})): ?>
			<li>Unit Description: [unmapped_Unit Description]</li>
			<?php endif; ?>
			<?php if( isset($single_property->waterviewfeatures)): ?>
			<li>Water View: [waterviewfeatures]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Width)): ?>
			<li>Width: [unmapped_Width]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Yard/Grounds"})): ?>
			<li>Yard Grounds: [unmapped_Yard/Grounds]</li>
			<?php endif; ?>
			<?php if( isset($single_property->flooring)): ?>
			<li>Flooring: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Kitchen)): ?>
			<li>Kitchen: [unmapped_Kitchen]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Dining Room"})): ?>
			<li>Dining Room: [unmapped_Dining Room]</li>
			<?php endif; ?>
			<?php if( isset($single_property->appliances)): ?>
			<li>Laundry Appliance: [appliances]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Skirting)): ?>
			<li>Skirting: [unmapped_Skirting]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Main Level"})): ?>
			<li>Main Level: [unmapped_Main Level]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Miscellaneous)): ?>
			<li>Miscellaneous: [unmapped_Miscellaneous]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Other Rooms"})): ?>
			<li>Other Rooms: [unmapped_Other Rooms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Stories/Levels"})): ?>
			<li>Stories Levels: [unmapped_Stories/Levels]</li>
			<?php endif; ?>
			<?php if( isset($single_property->parkingfeature)): ?>
			<li>Park Features: [unmapped_Park Features]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Manufacturer)): ?>
			<li>Manufacturer: [unmapped_Manufacturer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Space Rent Includes"})): ?>
			<li>Space Rent Includes: [unmapped_Space Rent Includes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Auction)): ?>
			<li>Auction: [unmapped_Auction]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Construct/Condition"})): ?>
			<li>Construct Condition: [unmapped_Construct/Condition]</li>
			<?php endif; ?>
			<?php if( isset($single_property->asscfeeincludes)): ?>
			<li>Fee Includes: [asscfeeincludes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Land Owned"})): ?>
			<li>Land Owned: [unmapped_Land Owned]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"License Fee"})): ?>
			<li>License Fee: [unmapped_License Fee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Make)): ?>
			<li>Make: [unmapped_Make]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Manufacturer)): ?>
			<li>Manufacturer: [unmapped_Manufacturer]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Max Lease Mo"})): ?>
			<li>Max Lease Mo: [unmapped_Max Lease Mo]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Min Lease Mo"})): ?>
			<li>Min Lease Mo: [unmapped_Min Lease Mo]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Subtype 1"})): ?>
			<li>Mobile Floating Home Type: [unmapped_Property Subtype 1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Model)): ?>
			<li>Model: [unmapped_Model]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"New Construct/Resale"})): ?>
			<li>New Construction Or Resale: [unmapped_New Construct/Resale]</li>
			<?php endif; ?>
			<?php if( isset($single_property->restrictions)): ?>
			<li>Restrictions: [restrictions]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"License Fee"})): ?>
			<li>Security Deposit: [unmapped_License Fee]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Senior)): ?>
			<li>Senior: [unmapped_Senior]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Site Pk/Hm"})): ?>
			<li>Site: [unmapped_Site Pk/Hm]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Space/Berth Rent $"})): ?>
			<li>Space Berth Rent: [unmapped_Space/Berth Rent $]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Space #"})): ?>
			<li>Space Number: [unmapped_Space #]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Space Rent Includes"})): ?>
			<li>Space Rent Includes: [unmapped_Space Rent Includes]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Occupancy)): ?>
			<li>Occupancy: [unmapped_Occupancy]</li>
			<?php endif; ?>
			<?php if( isset($single_property->forsale)): ?>
			<li>Transaction Type: [forsale]</li>
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
		
		<?php if( isset($single_property->garageparking) || isset($single_property->unmapped->{"#Garage Spaces"}) ):?>
		<h3 class="zy-feature-title">Parking</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->garageparking)): ?>
				<li>Garage Parking: [garageparking]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"#Garage Spaces"})): ?>
				<li>Garage Spaces: [unmapped_#Garage Spaces]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->unmapped->Fireplace) || isset($single_property->heating) || isset($single_property->unmapped->{"Sewer/Septic"}) || isset($single_property->utilities) || isset($single_property->water) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">
		
			<?php if( isset($single_property->unmapped->Fireplace)): ?>
			<li>Fireplace: [unmapped_Fireplace]</li>
			<?php endif; ?>						
			<?php if( isset($single_property->heating)): ?>
			<li>Heat/Cool: [heating]</li>
			<?php endif; ?>						
			<?php if( isset($single_property->unmapped->{"Sewer/Septic"})): ?>
			<li>Sewer Septic: [unmapped_Sewer/Septic]</li>
			<?php endif; ?>						
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>						
			<?php if( isset($single_property->water)): ?>
			<li>Water Source: [water]</li>
			<?php endif; ?>						
			
		</ul>
		<?php endif; ?>	
		
		<?php if( isset($single_property->unmapped->HOA) || isset($single_property->hoafee) || isset($single_property->unmapped->{"HOA Paid"}) || isset($single_property->unmapped->{"City Transfer Tax"}) || isset($single_property->unmapped->{"Cty Trnsfer Tax Rate"}) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->unmapped->HOA)): ?>
				<li>HOA: [unmapped_HOA]</li>
				<?php endif; ?>
				<?php if( isset($single_property->hoafee)): ?>
				<li>Hoa Amount: [hoafee]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"HOA Paid"})): ?>
				<li>Hoa Paid: [unmapped_HOA Paid]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"City Transfer Tax"})): ?>
				<li>City Transfer Tax: [unmapped_City Transfer Tax]</li>
				<?php endif; ?>
				<?php if( isset($single_property->unmapped->{"Cty Trnsfer Tax Rate"})): ?>
				<li>City Transfer Tax Rate: [unmapped_Cty Trnsfer Tax Rate]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>			

</ul>

<ul class="zy-features-grid">
	<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) || isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) || isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) || isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) || isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->mbrdimen) || isset($single_property->mbrlevel) || isset($single_property->mbrdscrp) ):?>
		<h3 class="zy-feature-title">Master Bedroom</h3>
		<ul class="zy-sub-list">
			
				<?php if( isset($single_property->mbrdimen)): ?>
				<li>Size: [mbrdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrlevel)): ?>
				<li>Level: [mbrlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->mbrdscrp)): ?>
				<li>Features: [mbrdscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed2dimen) || isset($single_property->bed2LEVEL) || isset($single_property->bed2dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed2dimen)): ?>
				<li>Size: [bed2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2LEVEL)): ?>
				<li>Level: [bed2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed2dscrp)): ?>
				<li>Features: [bed2dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed3dimen) || isset($single_property->bed3LEVEL) || isset($single_property->bed3dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed3dimen)): ?>
				<li>Size: [bed3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3LEVEL)): ?>
				<li>Level: [bed3LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed3dscrp)): ?>
				<li>Features: [bed3dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bed4dimen) || isset($single_property->bed4LEVEL) || isset($single_property->bed4dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #4</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed4dimen)): ?>
				<li>Size: [bed4dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4LEVEL)): ?>
				<li>Level: [bed4LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed4dscrp)): ?>
				<li>Features: [bed4dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php //echo $single_property->style; ?>
		<?php if( isset($single_property->bed5dimen) || isset($single_property->bed5LEVEL) || isset($single_property->bed5dscrp) ):?>
		<h3 class="zy-feature-title">Bedroom #5</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bed5dimen)): ?>
				<li>Size: [bed5dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5LEVEL)): ?>
				<li>Level: [bed5LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bed5dscrp)): ?>
				<li>Features: [bed5dscrp]</li>								
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>						
	<?php endif; ?>
	
<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) || isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) || isset($single_property->bth3dimen) || isset($single_property->bth3LEVEL) || isset($single_property->bth3dscrp) || isset($single_property->bth4dimen) || isset($single_property->bth4LEVEL) || isset($single_property->bth4dscrp) || isset($single_property->bth5dimen) || isset($single_property->bth5LEVEL) || isset($single_property->bth5dscrp) ):?>
	<li class="cell">
		<?php if( isset($single_property->bth1dimen) || isset($single_property->bth1LEVEL) || isset($single_property->bth1dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth1dimen)): ?>
				<li>Size: [bth1dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1LEVEL)): ?>
				<li>Level: [bth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth1dscrp)): ?>
				<li>Features: [bth1dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth2dimen) || isset($single_property->bth2LEVEL) || isset($single_property->bth2dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #2</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth2dimen)): ?>
				<li>Size: [bth2dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2LEVEL)): ?>
				<li>Level: [bth2LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth2dscrp)): ?>
				<li>Features: [bth2dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->bth3dimen) || isset($single_property->bth3level) || isset($single_property->bth3dscrp) ):?>
		<h3 class="zy-feature-title">Bathroom #3</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->bth3dimen)): ?>
				<li>Size: [bth3dimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3level)): ?>
				<li>Level: [bth3level]</li>
				<?php endif; ?>
				<?php if( isset($single_property->bth3dscrp)): ?>
				<li>Features: [bth3dscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
	</li>
	<?php endif; ?>

	<li class="cell">
		<?php if( isset($single_property->kitdimen) || isset($single_property->kitlevel) || isset($single_property->kitdscrp) ):?>
		<h3 class="zy-feature-title">Kitchen</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->kitdimen)): ?>
				<li>Size: [kitdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitlevel)): ?>
				<li>Level: [kitlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->kitdscrp)): ?>
				<li>Features: [kitdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->famdimen) || isset($single_property->famlevel) || isset($single_property->famdscrp) ):?>
		<h3 class="zy-feature-title">Family Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->famdimen)): ?>
				<li>Size: [famdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famlevel)): ?>
				<li>Level: [famlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->famdscrp)): ?>
				<li>Features: [famdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->livdimen) || isset($single_property->livlevel) || isset($single_property->livdscrp) ):?>
		<h3 class="zy-feature-title">Living Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->livdimen)): ?>
				<li>Size: [livdimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livlevel)): ?>
				<li>Level: [livlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->livdscrp)): ?>
				<li>Features: [livdscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->dindimen) || isset($single_property->dinlevel) || isset($single_property->dindscrp) ):?>
		<h3 class="zy-feature-title">Dining Room</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->dindimen)): ?>
				<li>Size: [dindimen]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dinlevel)): ?>
				<li>Level: [dinlevel]</li>
				<?php endif; ?>
				<?php if( isset($single_property->dindscrp)): ?>
				<li>Features: [dindscrp]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->oth1DIMEN) || isset($single_property->oth1LEVEL) || isset($single_property->oth1DSCRP) ):?>
		<h3 class="zy-feature-title">Additional Room #1</h3>
		<ul class="zy-sub-list">

			
				<?php if( isset($single_property->oth1DIMEN)): ?>
				<li>Size: [oth1DIMEN]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1LEVEL)): ?>
				<li>Level: [oth1LEVEL]</li>
				<?php endif; ?>
				<?php if( isset($single_property->oth1DSCRP)): ?>
				<li>Features: [oth1DSCRP]</li>
				<?php endif; ?>
			
		</ul>
		<?php endif; ?>
		
	</li>					

</ul>