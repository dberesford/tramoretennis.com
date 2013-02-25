<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <title></title>
  <meta name="description" content=""/>
  <meta name="viewport" content="width=device-width"/>
  <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/main.css"/>
  <style>
    body {
    padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
    }
  </style>
</head>
<body>
    
  <!--[if lt IE 7]>
      <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        
  <!--[if lt IE 9]>
      <script src="scripts/vendor/es5-shim.min.js"></script>
      <script src="scripts/vendor/json3.min.js"></script>
      <![endif]-->

  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="/">Tramore Tennis Club</a>
        <div class="nav-collapse collapse">
          <ul class="nav">
            <li <?php if($active=='home') echo 'class="active"'; ?>><a href="/"><i class="icon-home"></i> Home</a></li>
            <li <?php if($active=='news') echo 'class="active"'; ?>><a href="/news.php"><i class="icon-book"></i> News</a></li>
            <li <?php if($active=='contact') echo 'class="active"'; ?>><a href="/contact.php"><i class="icon-envelope"></i> Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>
  
  <div id="maincontainer" class="container">
 <!-- Sidebar -->
 <div class="row">
   <div class="span3">
     <div class="well sidebar-nav">
       <ul class="nav nav-list">
         <li class="nav-header">Links</li>
         <li <?php if($active=='committees') echo 'class="active"'; ?>><a href="/committees.php">Committees</a></li>
         <li <?php if($active=='membership') echo 'class="active"'; ?>><a href="/membership.php">Membership</a></li>
         <li <?php if($active=='childprotection') echo 'class="active"'; ?>><a href="/childprotection.php">Child Protection</a></li>
         <li <?php if($active=='courtaccess') echo 'class="active"'; ?>><a href="/courtaccess.php">Court Access</a></li>
         <li <?php if($active=='conduct') echo 'class="active"'; ?>><a href="/conduct.php">Code of Conduct</a></li>
         <li <?php if($active=='coaching') echo 'class="active"'; ?>><a href="/coaching.php">Coaching</a></li>
         <li <?php if($active=='merchandise') echo 'class="active"'; ?>><a href="/merchandise.php">Merchandise</a></li>
         <li <?php if($active=='history') echo 'class="active"'; ?>><a href="/history.php">History</a></li>
         <li <?php if($active=='about') echo 'class="active"'; ?>><a href="/about.php">About</a></li>
         <li class="nav-header">Find us on Facebook</li>
         <li><iframe src="http://www.facebook.com/plugins/likebox.php?id=123130494379095&amp;width=200&amp;connections=0&amp;stream=false&amp;header=true&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:62px;" allowTransparency="true"></iframe></li>
       </ul>
     </div><!--/.well -->
   </div><!--/span-->
   <!-- content for each page, spans the rest of the grid -->
   <div class="span9">

