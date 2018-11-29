jQuery(document).ready( function(){
    
	var config = {
	    '.za-chosen-select'           : {},
	    '.za-chosen-select-deselect'  : {allow_single_deselect:true},
	    '.za-chosen-select-no-single' : {disable_search_threshold:10},
	    '.za-chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
	    '.za-chosen-select-width'     : {width:"100%",
	    		disable_search_threshold:10, 
	    		placeholder_text_multiple: ' ', 
	    		placeholder_text_single: ' ' }
	}
    for (var selector in config) {
      jQuery(selector).chosen(config[selector]);
    }
});