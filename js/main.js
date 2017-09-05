// JavaScript Document
//


// Side Menu Open
function openNav() {
    document.body.style.overflowX = "hidden";
    document.getElementById("main").style.marginLeft = "80%";
    document.getElementById("main").classList.add("active");
	document.getElementById("openmenu").style.display = "none";
	document.getElementById("closemenu").innerHTML = "&times;";
    document.getElementById("mySidenav").style.width = "80%";
    document.getElementById("mySidenav").classList.add("active");
    document.getElementById("sideNavTop").style.display = "block";	
    document.getElementById("innerMenu").style.display = "block";
    document.getElementById("body-content").classList.add("disable");

}
// Side Menu Close
function closeNav() {
    document.body.style.overflowX = "auto";	
    document.getElementById("main").style.marginLeft= "0";
	document.getElementById("main").classList.remove("active");
	document.getElementById("openmenu").style.display = "block";
	document.getElementById("closemenu").innerHTML = "";
    document.getElementById("mySidenav").classList.remove("active");
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("sideNavTop").style.display = "none";	
    document.getElementById("innerMenu").style.display = "none";
    document.getElementById("body-content").classList.remove("disable");
}

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

// My Account menu Active
$('#my-account, #close-Sidemenu').click(function() {
  $('.account-icon, #account-access, #my-account, #mySidenav, #sideNavTop, #innerMenu, #closemenu, #topmenu-GPS-icon, #close-Sidemenu, #account_icon, #account_exit-icon, #side-menu-top').toggleClass('open')
})

$(document).click(function(e) {
  var accountClick = $("#my-account, #close-Sidemenu, .account-icon, #account-access, #mySidenav, #sideNavTop, #innerMenu, #closemenu, #topmenu-GPS-icon, #close-Sidemenu, #account_icon, #account_exit-icon, #side-menu-top");
  if (!accountClick.is(e.target) && accountClick.has(e.target).length === 0) {
    accountClick.removeClass('open')
  }
});

// Select Login Tab
function loginTab() {
    document.getElementById("signup-tab").classList.remove("active-tab-item");
	document.getElementById("login-tab").classList.add("active-tab-item");
	document.getElementById("membership-signin").style.display = "block";
	document.getElementById("membership-signup").style.display = "none";

}
// Select Signup Tab
function signupTab() {
    document.getElementById("login-tab").classList.remove("active-tab-item");
	document.getElementById("signup-tab").classList.add("active-tab-item");
	document.getElementById("membership-signin").style.display = "none";
	document.getElementById("membership-signup").style.display = "block";
}


// FILE END