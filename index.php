<?php 
require_once 'header.php'; 
?>
<?php require_once 'db_conn.php'; ?>

<body style="background-color:white;">
	<?php require_once 'pages/nav_bar.php'; ?>
 	<div style="margin:30px; width: 15%; float: left;">
 		<?php require_once 'pages/tab_bar.php'; ?>
 	</div>
	<div id="body-container" class="content-width" style="float: left;">
	
<div style="position: relative; background-color:#63ADD0; width:300px; margin:0 auto;height: 130px; border-radius: 10px;">
			<h4 style="position: absolute; margin-left: 40px; margin-top: 10px"><strong>Select a date to log work</strong></h4><br>
			<div style="position: absolute; margin-left: 15px; margin-top: 20px">
				<h4 style="display: inline-block;">Start Date:</h4><input type="date" name="Home_Date" style="margin-left:10px">
			</div>
			<button type="button" class="btn btn-success" style="background-color:#9BD377; color:#000000; position: absolute; margin-top:65px; right:10px">Submit</button>
		</div>
		<div id="task-container">
			<?php require_once 'pages/close_processing.php'; ?>
		</div>
	</div>

	<div style="margin:30px; float: right; width: 15%;">
		
	<div class="panel panel-primary">
				<div class="panel-heading">
	    			<h3 class="panel-title">My Stats</h3>
	  			</div>
	  			<div style="margin:10px">
	  				<strong>Close Processin:</strong> 8 hours </br>
	  				<strong>Daily Sunrise Call:</strong> 8 hours </br>
	  				<strong>General Admin:</strong> 8 hours </br>
	  				<strong>Incident Management:</strong> 8 hours </br>
	  				<strong>Service Request:</strong> 8 hours </br>
	  				<strong>Physical Access:</strong> 8 hours </br>
	  				<strong>Queue Management:</strong> 8 hours </br>
	  				<strong>Total Hours:</strong> 8 hours </br>
	  			</div>
			</div>
	
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
