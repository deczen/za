<div class="mb-15 p-0 zy-panel uk-panel uk-panel-box">
	<div class="zy-panel__stack__sub zy-panel--small uk-text-center">
		<div class="">
			<strong>$[realprice]</strong>
		</div>
		
		<?php /*
		<button type="button" class="js-mortgage-modal btn-small mt-5 uk-text-success" title="Payment Calculator">
			<svg class="zy-icon zy-icon--larger">
				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#bicon-calculator"></use>
			</svg>
			<span class="js-mortgage">$2,887/mo.</span>
		</button> */ ?>

	</div>
	<div class="zy-panel__stack__sub">
		<ul class="zy-listing__feature-grid" style="margin-bottom:0">
			<li class="beds">
				<div class="attr-num">[nobedrooms]</div>
				<div class="uk-text-small uk-text-truncate">BEDS</div>
			</li>
			<li class="acres">

				<div class="attr-num zy-listing__acreage-text">[acre]</div>

				<div class="uk-text-small uk-text-truncate">ACRES</div>
			</li>
			<li class="baths">
				<div class="attr-num">[nobaths]</div>
				<div class="uk-text-small uk-text-truncate">BATHS</div>
			</li>										
			<li class="half-baths">
				<div class="attr-num">[nohalfbaths]</div>
				<div class="uk-text-small uk-text-truncate">1/2 BATHS</div>
			</li>
			<li class="sqft ">
				<div class="attr-num">
					[squarefeet]
				</div>
				<div class="uk-text-small uk-text-truncate">SQFT</div>
			</li>										
			
			<li class="price-sqft">
				<?php /*
				<div class="attr-num">$[bldgsqfeet]</div>
				<div class="uk-text-small uk-text-truncate">$/SQFT</div> */ ?>
				<div class="attr-num">&nbsp;</div>
				<div class="uk-text-small uk-text-truncate">&nbsp;</div>
			</li>

		</ul>
	</div>
	<div class="zy-panel__stack__sub">
		<div class="m-0 zy-listing-table zy-listing__table-break">
		
			<div class="grid">
				<div class="cell uk-text-bold">Neighborhood:</div>
				<div class="cell uk-text-right"> [neighborhood] </div>
			</div>

			<div class="grid">
				<div class="cell cell-xs-3 uk-text-bold">Type:</div>
				<div class="cell uk-text-right">[proptype]</div>
			</div>

			<div class="grid">
				<div class="cell cell-xs-3 uk-text-bold">Built:</div>
				<div class="cell uk-text-right">[yearbuilt]</div>
			</div>
			
			<div class="grid">
				<div class="cell cell-xs-4 uk-text-bold">County:</div>
				<div class="cell uk-text-right">
					[lngCOUNTYDESCRIPTION]
				</div>
			</div>

			<div class="grid">
				<div class="cell cell-xs-3 uk-text-bold">Area:</div>
				<div class="cell uk-text-right">
					[lngAREADESCRIPTION]
				</div>
			</div>

		</div>
	</div>
</div>