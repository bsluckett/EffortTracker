<?php 
require_once 'header.php'; 
?>
<?php require 'db_conn.php'; ?>
<body style="background-color:white;">
	<?php require_once 'pages/nav_bar.php'; ?>
 	<div style="margin:30px; width: 15%; float: left;">
 		<?php require_once 'pages/tab_bar.php'; ?>
 	</div>
	<div id="body-container" class="content-width" style="float: left;">
	<?php require_once 'pages/Date.php'; ?>
		<div id="task-container">
			<?php include 'pages/close_processing.php'; ?>
		</div>
	</div>

	<div style="margin:30px; float: right; width: 15%;">
		
	<?php require_once 'pages/myStats.php'; ?>
	
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
