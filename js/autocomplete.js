jQuery(document).ready(function($) {
	
    $('#za-area-input').magicSuggest({
        // data: zipperagent.townurl,
		data: '/wp-content/plugins/zipperagent/custom/towns.php',
        valueField: 'town',
        displayField: 'town',
        groupBy: 'group',
		maxSelection: 1,
        renderer: function(data){
            return '<div class="location">' +
				'<div class="name '+ data.type +'">' + data.name + '</div>' +
				'<div style="clear:both;"></div>' +
			'</div>';
        },
        selectionRenderer: function(data){
            var img = data.countryCode ? ('<img src="img/flags/' + data.countryCode.toLowerCase() + '.png" />') : '';
            return img + '<div class="name">' + data.countryName + '</div>';
        }

    });

});