<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html>
<head>
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
<link href="./css/main.css" rel="stylesheet" type="text/css">
<link href="./css/bootstrap.min.css" rel="stylesheet" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<style></style>
</head>
<body >
<!-- START of Side Menu -->
<div id="mySidenav" class="sidenav">
  <div class="container-fluid">
    <?php include './inc/sideNav/menuHeader.php'; ?>
  </div>
  <div id="account-access" class="">
    <?php include './inc/accountAccess.php'; ?>
  </div>
  <div id="innerMenu">
    <?php include './inc/sideNav/innerMenu.php'; ?>
  </div>
</div>
<!-- END of Side Menu id="mySidenav" class="sidenav" --> 

<!-- Main Body -->
<div id="main" class=""> 
  
  <!-- Main Menu-->
  <nav id="header-bar" class="container-fluid">
    <?php include './inc/header.php'; ?>
  </nav>
  
  <!-- START of (Pop-Open) Shopping Cart-->
  <div id="ProductSearch" class="SearchPopup" >
    <?php include './inc/search.php'; ?>
  </div>
  <div id="ShoppingCart" class="cartPopup" >
    <?php include './inc/cart.php'; ?>
  </div>
  <!-- END of POP Open Items --> 
  
  <!-- Body Content -->
  <div id"body-content">
    <?php include './views/home.php'; ?>
  </div>
</div>
<!-- END of (div id="main") --> 

<script>
// TEST CODE HERE
</script> 
<script src="./js/bootstrap.min.js"  type="text/javascript"></script> 
<script src="./js/main.js" type="text/javascript"></script>
</body>
</html>
