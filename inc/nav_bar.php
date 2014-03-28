<link href="css/navbar.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/nav.js"></script>
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
      <li <?php if ($MenuTitle == "Home") { echo "class= \"active\""; } ?> ><a href="./">Home</a></li>
	    <li <?php if($MenuTitle == "History") { echo "class= \"active\""; } ?>><a href="#" >History</a></li>
      <li <?php if($MenuTitle == "Admin") { echo "class= \"active\""; } ?> ><a href="admin.php">Admin</a></li>
      <li <?php if($MenuTitle == "Reports") { echo "class= \"active\""; } ?>><a href="reports.php">Reports</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#" style="color:white">Logout</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>