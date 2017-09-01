// JavaScript Document
//


// Side Menu Open
function openNav() {
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    document.body.style.overflowX = "hidden";	
    document.getElementById("mySidenav").style.width = "80%";
    document.getElementById("mySidenav").classList.add("active");	
    document.getElementById("main").style.marginLeft = "80%";
    document.getElementById("main").classList.add("active");
	document.getElementById("openmenu").style.display = "none";
	document.getElementById("closemenu").innerHTML = "&times;";
}
// Side Menu Close
function closeNav() {
    document.getElementById("mySidenav").classList.remove("active");
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
	document.getElementById("main").classList.remove("active");
    document.body.style.backgroundColor = "white";
    document.body.style.overflowX = "auto";
	document.getElementById("openmenu").style.display = "block";
	document.getElementById("closemenu").innerHTML = "";
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
$('#my-account').click(function() {
  $('.account-icon, #account-access, #my-account, #mySidenav, #sideNavTop, #innerMenu, #closemenu, #topmenu-GPS-icon, #close-Sidemenu, #account_icon, #account_exit-icon').toggleClass('open')
})

$(document).click(function(e) {
  var accountClick = $(".account-icon, #account-access, #my-account, #mySidenav, #sideNavTop, #innerMenu, #closemenu, #topmenu-GPS-icon, #close-Sidemenu, #account_icon, #account_exit-icon");
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