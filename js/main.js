// JavaScript Document


// Side Menu Open
function openNav() {
    document.body.classList.add("left-side-menu-active");
 document.body.style.overflowX = "hidden";
    document.getElementById("main").style.marginLeft = "80%";
    document.getElementById("main").classList.add("disabled");
    document.getElementById("left-side-push-menu").style.width = "80%";
    document.getElementById("left-side-push-menu").classList.add("active");
    document.getElementById("sideNavTop").style.display = "block";	
    document.getElementById("main_navigation").style.display = "block";
    document.getElementById("body-content").classList.add("disable");
    document.getElementById("tab-bar-left").classList.add("active");
	

}
// Side Menu Close
function closeNav() {
    document.body.classList.remove("left-side-menu-active");
document.body.style.overflowX = "auto";	
    document.getElementById("main").style.marginLeft= "0";
	document.getElementById("main").classList.remove("disabled");
    document.getElementById("left-side-push-menu").classList.remove("active");
    document.getElementById("left-side-push-menu").style.width = "0";
    document.getElementById("sideNavTop").style.display = "none";	
    document.getElementById("main_navigation").style.display = "none";
    document.getElementById("body-content").classList.remove("disable");
	    document.getElementById("tab-bar-left").classList.remove("active");
}




// Home Page Popups
// Shopping Cart Popout
$('#mobile-cart').click(function() {
  $('.cartPopup, .cart-icon').toggleClass('active')

})

$(document).click(function(e) {
  var cartClick = $(".cartPopup, .cart-icon, #mobile-cart");
  if (!cartClick.is(e.target) && cartClick.has(e.target).length === 0) {
    cartClick.removeClass('active')
  }
});

// Product Search Popout
$('#product-search').click(function() {
  $('.SearchPopup, .search-icon').toggleClass('active')
})

$(document).click(function(e) {
  var searchClick = $(".SearchPopup, .search-icon, #product-search");
  if (!searchClick.is(e.target) && searchClick.has(e.target).length === 0) {
    searchClick.removeClass('active')
  }
});

// LEFT-SIDE-PUSH-MENU - Activate My Account - Area
function myaccountOpen() {
    document.getElementById("left-side-push-menu").classList.add("myaccount");	
}
// LEFT-SIDE-PUSH-MENU - Deactivate My Account - Area
function myaccountClose() {
    document.getElementById("left-side-push-menu").classList.remove("myaccount");		
}


// LEFT-SIDE-PUSH-MENU - My Account - Activate Login Tab
function loginTab() {
    document.getElementById("signup-tab").classList.remove("active-tab-item");
	document.getElementById("login-tab").classList.add("active-tab-item");
	document.getElementById("membership-signin").style.display = "block";
	document.getElementById("membership-signup").style.display = "none";

}
// LEFT-SIDE-PUSH-MENU - My Account - Activate 
function signupTab() {
    document.getElementById("login-tab").classList.remove("active-tab-item");
	document.getElementById("signup-tab").classList.add("active-tab-item");
	document.getElementById("membership-signin").style.display = "none";
	document.getElementById("membership-signup").style.display = "block";
}




// LEFT-SIDE-PUSH-MENU - Activate Browse All Products
function browseproductsEnable() {
    document.getElementById("left-side-push-menu").classList.add("browseproducts");	
}
// LEFT-SIDE-PUSH-MENU - Deactivate Browse All Products
function browseproductsDisable() {
    document.getElementById("left-side-push-menu").classList.remove("browseproducts");		
}

$('#closeBrowseProducts, #sidemenu-ShopByProducts-exit-icon, #retunHome, #sidemenu_logo').click(function() {
  $('#menu-item-1, #menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10').removeClass('deactivate-item');
    $('#menu-item-1').removeClass('activate-item');
    $('#allCategories_header').removeClass('enable');
})

// LEFT-SIDE-PUSH-MENU - Browse All Products - Sub Menu

$('#menu-item-1').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-1').toggleClass('activate-item');
    $('#allCategories_header').toggleClass('enable');
})

$('#menu-item-2').click(function() {
  $('#menu-item-1, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-2').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-3').click(function() {
  $('#menu-item-2, #menu-item-1, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-3').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-4').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-1, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-4').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-5').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-4, #menu-item-1, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-5').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-6').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-1, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-6').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-7').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-1, #menu-item-8, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-7').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-8').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-1, #menu-item-9, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-8').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-9').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-1, #menu-item-10').toggleClass('deactivate-item');
    $('#menu-item-9').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})
$('#menu-item-10').click(function() {
  $('#menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-1').toggleClass('deactivate-item');
    $('#menu-item-10').toggleClass('activate-item');
	    $('#allCategories_header').toggleClass('enable');
})

$('#closeBrowseProducts, #sidemenu-ShopByProducts-exit-icon, #retunHome, #sidemenu_logo, #gps_icon').click(function(e) {
  var ShopByCategory = $("#closeBrowseProducts, #menu-item-1, #menu-item-2, #menu-item-3, #menu-item-4, #menu-item-5, #menu-item-6, #menu-item-7, #menu-item-8, #menu-item-9, #menu-item-10");
  if (!ShopByCategory.is(e.target) && ShopByCategory.has(e.target).length === 0) {
    ShopByCategory.removeClass('activate-item')
  }
  if (!ShopByCategory.is(e.target) && ShopByCategory.has(e.target).length === 0) {
    ShopByCategory.removeClass('deactivate-item')
  }
  
    if (!ShopByCategory.is(e.target) && ShopByCategory.has(e.target).length === 0) {
    ShopByCategory.removeClass('enable')
  }
});



// LEFT-SIDE-PUSH-MENU -  Activate Store Locations - area
function storelocationsOpen() {
    document.getElementById("left-side-push-menu").classList.add("store-locations");	
}
// LEFT-SIDE-PUSH-MENU - Deactivate Store Locations - area
function storelocationsClose() {
    document.getElementById("left-side-push-menu").classList.remove("store-locations");		
}
// toggle store locations (show/ hide)
$('#ajax').click(function() {
  $('#barrie-location, #brampton-location, #burlington-location, #etobicoke-location, #greenfieldpark-location, #hamilton-location, #hamiltonmountain-location, #kanata-location, #kingston-location, #laval-location, #london-location, #markhamunionville-location, #midtown-location, #milton-location, #mississauga-location, #mississauganorth-location, #mississaugasouth-location, #montrealdt-location, #newmarket-location, #northyork-location, #oakvilleeast-location, #oshawa-location, #ottawadowntown-location, #ottawamerivale-location, #ottawaorleans-location, #richmondhill-location, #scarborough-location, #stcatharines-location, #toronto284-location, #toronto366-location, #vaughan-location, #waterloo-location, #westisland-location, #whitby-location').toggleClass('deactivate-menuitem');
    $('#ajax-location').toggleClass('activate-menuitem');
})


$('#barrie').click(function() {
  $('#ajax-location, #brampton-location, #burlington-location, #etobicoke-location, #greenfieldpark-location, #hamilton-location, #hamiltonmountain-location, #kanata-location, #kingston-location, #laval-location, #london-location, #markhamunionville-location, #midtown-location, #milton-location, #mississauga-location, #mississauganorth-location, #mississaugasouth-location, #montrealdt-location, #newmarket-location, #northyork-location, #oakvilleeast-location, #oshawa-location, #ottawadowntown-location, #ottawamerivale-location, #ottawaorleans-location, #richmondhill-location, #scarborough-location, #stcatharines-location, #toronto284-location, #toronto366-location, #vaughan-location, #waterloo-location, #westisland-location, #whitby-location').toggleClass('deactivate-menuitem');
    $('#barrie-location').toggleClass('activate-menuitem');
})



// remove all added atriburtes 
$('.locations-menu-item, #sidemenu-close-myaccount, #retunHome, #main_logo').click(function(e) {
  var ShowStoreLocations = $("#ajax-location, #barrie-location, #brampton-location, #burlington-location, #etobicoke-location, #greenfieldpark-location, #hamilton-location, #hamiltonmountain-location, #kanata-location, #kingston-location, #laval-location, #london-location, #markhamunionville-location, #midtown-location, #milton-location, #mississauga-location, #mississauganorth-location, #mississaugasouth-location, #montrealdt-location, #newmarket-location, #northyork-location, #oakvilleeast-location, #oshawa-location, #ottawadowntown-location, #ottawamerivale-location, #ottawaorleans-location, #richmondhill-location, #scarborough-location, #stcatharines-location, #toronto284-location, #toronto366-location, #vaughan-location, #waterloo-location, #westisland-location, #whitby-location");
  if (!ShowStoreLocations.is(e.target) && ShowStoreLocations.has(e.target).length === 0) {
    ShowStoreLocations.removeClass('activate-menuitem')
  }
  if (!ShowStoreLocations.is(e.target) && ShowStoreLocations.has(e.target).length === 0) {
    ShowStoreLocations.removeClass('deactivate-menuitem')
  }
});

// FILE END