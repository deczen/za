<?php if($single_property->sourceid == 'CONMLS'): ?>

	<?php if(isset($single_property->nounits)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Units</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nounits]</span></li><?php endif; ?>
	<?php if(isset($single_property->nostories)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Stories</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nostories]</span></li><?php endif; ?>
	<?php if(isset($single_property->nobuildings)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Buildings</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nobuildings]</span></li><?php endif; ?>
	<?php if(isset($single_property->parkingspaces)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Parking Spaces</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[parkingspaces]</span></li><?php endif; ?>
	<?php if(isset($single_property->squarefeet)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">SqFt</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[squarefeet]</span></li><?php endif; ?>
	<?php if(isset($single_property->acre)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Acres</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[acre]</span></li><?php endif; ?>
	<?php if(isset($single_property->proptype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[proptype]</span></li><?php endif; ?>
	<?php if(isset($single_property->propsubtype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Property Sub-type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[propsubtype]</span></li><?php endif; ?>
	<?php if(isset($single_property->yearbuilt)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Built</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[yearbuilt]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">County</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngCOUNTYDESCRIPTION]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngAREADESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Area</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngAREADESCRIPTION]</span></li><?php endif; ?>

<?php elseif($single_property->sourceid == 'RIMLS'): ?>

	<?php if(isset($single_property->nounits)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Units</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nounits]</span></li><?php endif; ?>
	<?php if(isset($single_property->nostories)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Stories</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nostories]</span></li><?php endif; ?>
	<?php if(isset($single_property->nobuildings)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Buildings</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nobuildings]</span></li><?php endif; ?>
	<?php if(isset($single_property->parkingspaces)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Parking Spaces</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[parkingspaces]</span></li><?php endif; ?>
	<?php if(isset($single_property->squarefeet)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">SqFt</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[squarefeet]</span></li><?php endif; ?>
	<?php if(isset($single_property->acre)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Acres</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[acre]</span></li><?php endif; ?>
	<?php if(isset($single_property->proptype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[proptype]</span></li><?php endif; ?>
	<?php if(isset($single_property->propsubtype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Property Sub-type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[propsubtype]</span></li><?php endif; ?>
	<?php if(isset($single_property->yearbuilt)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Built</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[yearbuilt]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">County</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngCOUNTYDESCRIPTION]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngAREADESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Area</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngAREADESCRIPTION]</span></li><?php endif; ?>

<?php else: ?>

	<?php if(isset($single_property->nounits)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Units</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nounits]</span></li><?php endif; ?>
	<?php if(isset($single_property->nostories)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Stories</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nostories]</span></li><?php endif; ?>
	<?php if(isset($single_property->nobuildings)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Buildings</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[nobuildings]</span></li><?php endif; ?>
	<?php if(isset($single_property->parkingspaces)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Parking Spaces</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[parkingspaces]</span></li><?php endif; ?>
	<?php if(isset($single_property->squarefeet)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">SqFt</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[squarefeet]</span></li><?php endif; ?>
	<?php if(isset($single_property->acre)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Acres</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[acre]</span></li><?php endif; ?>
	<?php if(isset($single_property->proptype)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Type</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[proptype]</span></li><?php endif; ?>
	<?php if(isset($single_property->yearbuilt)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Built</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[yearbuilt]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngCOUNTYDESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">County</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngCOUNTYDESCRIPTION]</span></li><?php endif; ?>
	<?php if(isset($single_property->lngAREADESCRIPTION)): ?><li><label class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">Area</label> <span class="col-lg-6 col-sm-6 col-md-6 col-xs-6 col zy_nopadding">[lngAREADESCRIPTION]</span></li><?php endif; ?>
	
<?php endif; ?>
