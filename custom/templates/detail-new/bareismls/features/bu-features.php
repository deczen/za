<ul class="zy-features-grid">
	
	<?php if( isset($single_property->flooring) || isset($single_property->lot) || isset($single_property->lotsize) || isset($single_property->Association) || isset($single_property->unmapped->{"Annual Accounting"}) || 
			  isset($single_property->unmapped->{"Annual Advertising"}) || isset($single_property->unmapped->{"Annual Insurance"}) || isset($single_property->unmapped->{"Annual License"}) || isset($single_property->unmapped->{"Annual Misc."}) || isset($single_property->unmapped->{"Annual Salaries"}) ||
			  isset($single_property->unmapped->{"Annual Supplies"}) || isset($single_property->unmapped->{"Annual Telephone"}) || isset($single_property->unmapped->{"Annual Utility"}) || isset($single_property->unmapped->{"Property Subtype 1"}) || isset($single_property->unmapped->{"Cost of Goods Sold"}) ||
			  isset($single_property->unmapped->{"Days Open per Week"}) || isset($single_property->unmapped->{"# of Employees"}) || isset($single_property->unmapped->{"Est Annual Net Inc"}) || isset($single_property->unmapped->{"Est Inventory Amount"}) || isset($single_property->unmapped->{"Est License Value"}) ||
			  isset($single_property->unmapped->{"Est Total Annual Exp"}) || isset($single_property->grossannualincome) || isset($single_property->unmapped->{"Lease Deposit Amt"}) || isset($single_property->leaseterms) || isset($single_property->unmapped->{"License(s)"}) ||
			  isset($single_property->unmapped->{"New/Resale"}) || isset($single_property->unmapped->{"Rent Per Month"}) || isset($single_property->squarefeetsource) || isset($single_property->forsale) || isset($single_property->unmapped->{"Type A-Z"}) ||
			  isset($single_property->unmapped->{"Year Established"}) || isset($single_property->unmapped->{"Years On Option"}) || isset($single_property->unmapped->{"Years Owned"}) || isset($single_property->unmapped->{"Yrs Remain On Lease"}) ):?>
	<li class="cell">
		<h3 class="zy-feature-title">Property Features</h3>
		<ul class="zy-sub-list">
			<?php if( isset($single_property->flooring)): ?>
			<li>Floors: [flooring]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lot)): ?>
			<li>LOT: [lot]</li>
			<?php endif; ?>
			<?php if( isset($single_property->lotsize)): ?>
			<li>Lot Size: [lotsize]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->Association)): ?>
			<li>Association: [unmapped_Association]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Accounting"})): ?>
			<li>Annual Accounting: [unmapped_Annual Accounting]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Advertising"})): ?>
			<li>Annual Advertising: [unmapped_Annual Advertising]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Insurance"})): ?>
			<li>Annual Insurance: [unmapped_Annual Insurance]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual License"})): ?>
			<li>Annual License: [unmapped_Annual License]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Misc."})): ?>
			<li>Annual Misc: [unmapped_Annual Misc.]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Salaries"})): ?>
			<li>Annual Salaries: [unmapped_Annual Salaries]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Supplies"})): ?>
			<li>Annual Supplies: [unmapped_Annual Supplies]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Telephone"})): ?>
			<li>Annual Telephone: [unmapped_Annual Telephone]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Annual Utility"})): ?>
			<li>Annual Utility: [unmapped_Annual Utility]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Property Subtype 1"})): ?>
			<li>Business Opportunity Type: [unmapped_Property Subtype 1]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Cost of Goods Sold"})): ?>
			<li>Cost Of Goods Sold: [unmapped_Cost of Goods Sold]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Days Open per Week"})): ?>
			<li>Days Open Per Week: [unmapped_Days Open per Week]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"# of Employees"})): ?>
			<li>No Of Employees: [unmapped_# of Employees]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est Annual Net Inc"})): ?>
			<li>Est Annual Net Inc: [unmapped_Est Annual Net Inc]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est Inventory Amount"})): ?>
			<li>Est Inventory Amount: [unmapped_Est Inventory Amount]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est License Value"})): ?>
			<li>Est License Value: [unmapped_Est License Value]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Est Total Annual Exp"})): ?>
			<li>Est Total Annual Exp: [unmapped_Est Total Annual Exp]</li>
			<?php endif; ?>
			<?php if( isset($single_property->grossannualincome)): ?>
			<li>Gross Annual Income: [grossannualincome]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Lease Deposit Amt"})): ?>
			<li>Lease Deposit Amt: [unmapped_Lease Deposit Amt]</li>
			<?php endif; ?>
			<?php if( isset($single_property->leaseterms)): ?>
			<li>Lease Term: [leaseterms]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"License(s)"})): ?>
			<li>Licenses: [unmapped_License(s)]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"New/Resale"})): ?>
			<li>New Construction Or Resale: [unmapped_New/Resale]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Rent Per Month"})): ?>
			<li>Rent Per Month: [unmapped_Rent Per Month]</li>
			<?php endif; ?>
			<?php if( isset($single_property->squarefeetsource)): ?>
			<li>Square Footage Source: [squarefeetsource]</li>
			<?php endif; ?>
			<?php if( isset($single_property->forsale)): ?>
			<li>Transaction Type: [forsale]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Type A-Z"})): ?>
			<li>Type AZ: [unmapped_Type A-Z]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Year Established"})): ?>
			<li>Year Established: [unmapped_Year Established]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Years On Option"})): ?>
			<li>Years On Option: [unmapped_Years On Option]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Years Owned"})): ?>
			<li>Years Owned: [unmapped_Years Owned]</li>
			<?php endif; ?>
			<?php if( isset($single_property->unmapped->{"Yrs Remain On Lease"})): ?>
			<li>Yrs Remain On Lease: [unmapped_Yrs Remain On Lease]</li>
			<?php endif; ?>
			
		</ul>
	</li>
	<?php endif; ?>

	<li class="cell">
		
		<?php if( isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Cooling, Heating, Utilities</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->utilities)): ?>
			<li>Utilities: [utilities]</li>
			<?php endif; ?>		
		</ul>
		<?php endif; ?>
		
		<?php if( isset($single_property->utilities) ):?>
		<h3 class="zy-feature-title">Taxes, Fees</h3>
		<ul class="zy-sub-list">			
			<?php if( isset($single_property->unmapped->{"Cty Transfer Tax Rat"})): ?>
			<li>City Transfer Tax Rate: [unmapped_Cty Transfer Tax Rat]</li>
			<?php endif; ?>		
			<?php if( isset($single_property->taxes)): ?>
			<li>Taxes: [taxes]</li>
			<?php endif; ?>		
		</ul>
		<?php endif; ?>
	</li>					

</ul>