<div class="mb-15 p-0 zy-panel uk-panel uk-panel-box">
	<div class="zy-panel__stack__sub zy-panel--small uk-text-center">
		<div class="">

			<strong>$[realprice]</strong>

		</div>
	</div>
	<div class="zy-panel__stack__sub">
		<ul class="zy-listing__feature-grid" style="margin-bottom:0">
			<li class="rooms">
				<div class="attr-num">[nounits]</div>
				<div class="uk-text-small uk-text-truncate">UNITS</div>
			</li>
			<?php /*
			<li class="beds">
				<div class="attr-num">[nostories]</div>
				<div class="uk-text-small uk-text-truncate">STORIES</div>
			</li>
			<li class="baths">
				<div class="attr-num">[nobuildings]</div>
				<div class="uk-text-small uk-text-truncate">BUILDINGS</div>
			</li>
			*/ ?>			
			<li class="half-baths">
				<div class="attr-num">[parkingspaces]</div>
				<div class="uk-text-small uk-text-truncate">PARKING SPACES</div>
			</li>
			<li class="sqft ">
				<div class="attr-num"> [squarefeet] </div>
				<div class="uk-text-small uk-text-truncate">SQFT</div>
			</li>
			<li class="acres">
				<div class="attr-num zy-listing__acreage-text">[acre]</div>
				<div class="uk-text-small uk-text-truncate">ACRES</div>
			</li>

		</ul>
	</div>
	<div class="zy-panel__stack__sub">
		<div class="m-0 zy-listing-table zy-listing__table-break">

			<div class="grid">
				<div class="cell cell-xs-3 uk-text-bold">Neighborhood:</div>
				<div class="cell uk-text-right">[neighborhood]</div>
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
					[lngTOWNSDESCRIPTION]
				</div>
			</div>



		</div>
	</div>
</div>