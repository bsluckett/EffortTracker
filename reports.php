
<script type="text/javascript" src="js/barchart.js"></script>
<?php $MenuTitle = "Reports"; ?>
<?php include 'inc/header.php'; 
	 // require_once 'inc/tasks.php';
?>

<div class="container clearfix">
  <div class="col-md-3 alpha">
    <?php include 'inc/sub_menu.php'; ?>
  </div>
  <div class="col-md-9">
    <?php include 'pages/daterange.php'; ?>
    <div id="bar-container"> <?php include 'colrotseries.php'; ?> </div>
  
  </div>
  
</div>
