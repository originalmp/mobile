<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML Basic 1.1//EN" "http://www.w3.org/TR/xhtml-basic/xhtml-basic11.dtd">
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="./images/favicon.ico">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
<link href="./css/main.css" rel="stylesheet" type="text/css">
<link href="./css/media.css" rel="stylesheet" type="text/css">
<link href="./css/bootstrap.min.css" rel="stylesheet">
<link href="./css/animations.css" rel="stylesheet">
<script src="./js/jquery.min.js"></script>
<script src="//rawgit.com/balupton/jquery-scrollto/gh-pages/lib/jquery-scrollto.js"></script>
</head>
<body >
<!-- START of Left Side Push Menu --> <?php include './inc/left-side-push-menu.php'; ?>
<!-- Main Body --><div id="main" class="">

<!-- Main Menu--> <nav id="header-bar" class="container-fluid">
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
  <div id="body-content">
    <?php include './views/home.php'; ?>
  </div>
  
  
</div>
<!-- END of (div id="main") --> 


<script src="./js/bootstrap.min.js"  type="text/javascript"></script> 
<script src="./js/main.js" type="text/javascript"></script>
</body>
</html>
