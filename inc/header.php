<!DOCTYPE html>
<html>
  <head>
    <title>OCC Effort Tracker</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/homepage.css" rel="stylesheet" type="text/css">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
    <script type="text/javascript" src="js/nav.js"></script>
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color:white;">
<?php include 'inc/db_conn.php' ?>
<?php include_once $_SERVER["DOCUMENT_ROOT"] ."/Dev/ET/inc/tasks.php" ?>

<nav class="navbar navbar-default" role="navigation" style="background-image: linear-gradient(#2F8FC1 0px, #2A7BB0 31%, #2C5692 100%);color:white;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-main" href="./" style="color:white">OCC Effort Tracker</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav" id="navigation-pane">
      <li <?php if ($MenuTitle == "Home") { echo "class= \"activeMenu\""; } ?> ><a href="./">Home</a></li>
      <li <?php if($MenuTitle == "History") { echo "class= \"activeMenu\""; } ?>><a href="history.php" >History</a></li>
      <li <?php if($MenuTitle == "Admin") { echo "class= \"activeMenu\""; } ?> ><a href="admin.php">Admin</a></li>
      <li <?php if($MenuTitle == "Reports") { echo "class= \"activeMenu\""; } ?>><a href="reports.php">Reports</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" style="color:white">Logout</a></li>
    </ul>
  </div>
</nav>