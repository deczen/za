<?php
global $post;

$postmeta = get_post_meta( $post->ID );

// echo "<pre>"; print_r($postmeta); echo "</pre>";
?>

<div id="zpa-main-container" class="list-details">
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>County</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_county'][0])?$postmeta['_lp_county'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Zip</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_zipcode'][0])?$postmeta['_lp_zipcode'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Assessed Value</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_assessed_value'][0])?$postmeta['_lp_assessed_value'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Taxes</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_taxes'][0])?$postmeta['_lp_taxes'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Tax Year</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_tax_year'][0])?$postmeta['_lp_tax_year'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Style</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_styles'][0])?$postmeta['_lp_styles'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Living Levels</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_living_levels'][0])?$postmeta['_lp_living_levels'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Lot Size</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_lot_size'][0])?$postmeta['_lp_lot_size'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Living Area</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_living_area'][0])?$postmeta['_lp_living_area'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Basement</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_basement'][0])?$postmeta['_lp_basement'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Number of Rooms</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_rooms'][0])?$postmeta['_lp_rooms'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Number of Full Bathrooms</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_full_bathrooms'][0])?$postmeta['_lp_full_bathrooms'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Master Bath</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_master_bathrooms'][0])?$postmeta['_lp_master_bathrooms'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Parking Spaces</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_parking_space'][0])?$postmeta['_lp_parking_space'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Parking</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_parking'][0])?$postmeta['_lp_parking'][0]:'-'; ?></p>
            </div>
        </div>
        <div class="list-detail col-sm-6">
            <div class="col-xs-6">
                <p><em>Year Built</em></p>
            </div>
            <div class="col-xs-6">
                <p class="redtext"><?php echo isset($postmeta['_lp_year_built'][0])?$postmeta['_lp_year_built'][0]:'-'; ?></p>
            </div>
        </div>
    </div>
    <div class="row"> </div>
</div>