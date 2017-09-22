<!-- start storeLocations.PHP-->
<!-- Start locations-header -->
<div id="locations-header">
<a id="closeStoreDetails" href="#">
<div id="Store-Details-Header">
STORE DETAILS
</div>
</a>
<div id="storelocations-Header">
STORE LOCATIONS
</div>

<div style="display:none;">
<div class="col-md-6 col-xs-6 col-sm-6">All Stores</div>
<div class="col-md-6 col-xs-6 col-sm-6">Store Locator</div>
</div>

</div><!-- end of locations-header -->

<!-- START locations-body -->
<div id="locations-body" class="col-md-12 col-xs-12 col-sm-12">
<!-- start of all-stores-menu.php -->
<div id="show-all-stores" style=""><?php include './inc/locations/all-stores-menu.php'; ?></div> 
<!-- end of all-stores-menu.php --> 
 
<!-- start of store-Locator.php -->
<div id="store-Locator" style="display:none;"><?php include './inc/locations/store-Locator.php'; ?></div> 
<!-- end of show-all-stores.php -->  
</div><!-- END locations-body -->
<!-- end of store-Locator.PHP-->