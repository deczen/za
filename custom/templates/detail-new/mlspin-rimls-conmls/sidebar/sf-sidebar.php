<?php if($single_property->sourceid == 'CONMLS'): ?>

	<?php if(isset($single_property->norooms)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Total Rooms</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[norooms]</span></li><?php endif; ?>
	<?php if(isset($single_property->nobedrooms)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Beds</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nobedrooms]</span></li><?php endif; ?>
	<?php if(isset($single_property->nofullbaths)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Full Baths</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nofullbaths]</span></li><?php endif; ?>
	<?php if(isset($single_property->nohalfbaths)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">1/2 Baths</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nohalfbaths]</span></li><?php endif; ?>
	<?php if(isset($single_property->squarefeet)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">SqFt</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[squarefeet]</span></li><?php endif; ?>
	<?php if(isset($single_property->acre)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Acres</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[acre]</span></li><?php endif; ?>
	<?php if(isset($single_property->neighborhood)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Neighborhood</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[neighborhood]</span></li><?php endif; ?>
	<?php if(isset($single_property->proptype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[proptype]</span></li><?php endif; ?>
	<?php if(isset($single_property->propsubtype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Sub Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[propsubtype]</span></li><?php endif; ?>
	<?php if(isset($single_property->yearbuilt)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Built</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[yearbuilt]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">County</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngCOUNTYDESCRIPTION]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngAREADESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Area</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngAREADESCRIPTION]</span></li><?php endif; ?>

<?php elseif($single_property->sourceid == 'RIMLS'): ?>

	<?php if(isset($single_property->norooms)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Total Rooms</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[norooms]</span></li><?php endif; ?>
	<?php if(isset($single_property->nobedrooms)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Beds</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nobedrooms]</span></li><?php endif; ?>
	<?php if(isset($single_property->nofullbaths)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Full Baths</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nofullbaths]</span></li><?php endif; ?>
	<?php if(isset($single_property->nohalfbaths)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">1/2 Baths</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nohalfbaths]</span></li><?php endif; ?>
	<?php if(isset($single_property->squarefeet)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">SqFt</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[squarefeet]</span></li><?php endif; ?>
	<?php if(isset($single_property->acre)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Acres</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[acre]</span></li><?php endif; ?>
	<?php if(isset($single_property->neighborhood)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Neighborhood</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[neighborhood]</span></li><?php endif; ?>
	<?php if(isset($single_property->proptype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[proptype]</span></li><?php endif; ?>
	<?php if(isset($single_property->propsubtype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Sub Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[propsubtype]</span></li><?php endif; ?>
	<?php if(isset($single_property->yearbuilt)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Built</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[yearbuilt]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">County</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngCOUNTYDESCRIPTION]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngAREADESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Area</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngAREADESCRIPTION]</span></li><?php endif; ?>

<?php else: ?>

	<?php if(isset($single_property->style)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">House Style</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[style]</span></li><?php endif; ?>
	<?php if(isset($single_property->norooms)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Total Rooms</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[norooms]</span></li><?php endif; ?>
	<?php if(isset($single_property->nobedrooms)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Beds</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nobedrooms]</span></li><?php endif; ?>
	<?php if(isset($single_property->nofullbaths)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Full Baths</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nofullbaths]</span></li><?php endif; ?>
	<?php if(isset($single_property->nohalfbaths)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">1/2 Baths</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nohalfbaths]</span></li><?php endif; ?>
	<?php if(isset($single_property->squarefeet)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">SqFt</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[squarefeet]</span></li><?php endif; ?>
	<?php if(isset($single_property->acre)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Acres</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[acre]</span></li><?php endif; ?>
	<?php if(isset($single_property->neighborhood)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Neighborhood</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[neighborhood]</span></li><?php endif; ?>
	<?php if(isset($single_property->proptype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[proptype]</span></li><?php endif; ?>
	<?php if(isset($single_property->yearbuilt)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Built</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[yearbuilt]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">County</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngCOUNTYDESCRIPTION]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngAREADESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Area</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngAREADESCRIPTION]</span></li><?php endif; ?>
	
<?php endif; ?>
