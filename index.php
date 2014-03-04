<?php 
require_once 'header.php'; 
?>
<body style="background-color:white;">
	<?php require_once 'pages/nav_bar.php'; ?>

 	<div class="col-md-2 hidden-sm hidden-xs">
 		<?php require_once 'pages/tab_bar.php'; ?>
 	</div>
	<div id="body-container" class="col-md-7">
	
<div style="position: relative; background-color:#428BCA; width:300px; margin:0 auto;height: 130px; border-radius: 10px;">
			<h4 style="position: absolute; margin-left: 40px; margin-top: 10px"><strong>Select a date to log work</strong></h4><br>
			<div style="position: absolute; margin-left: 15px; margin-top: 20px">
				<h4 style="display: inline-block;">Start Date:</h4><input type="date" name="Home_Date" style="margin-left:10px">
			</div>
			<button type="button" class="btn btn-success" style="background-color:#9BD377; color:#000000; position: absolute; margin-top:65px; right:10px">Submit</button>
		</div>
		<div>
			<?php require_once 'pages/close_processing.php'; ?>
		</div>
	</div>

	<div class="col-md-3 hidden-sm hidden-xs" style="width: 300px">
		<div id="sidebar">
			<div class="panel panel-primary">
				<div class="panel-heading text-center">
	    			<h3 class="panel-title">My Stats</h3>
	  			</div>
	  			<div style="margin:10px">
	  				<strong>Close Processing:</strong> <span class="Stats">1 hours</span> </br>
	  				<strong>Daily Sunrise Call:</strong><span class="Stats">1 hours</span></br>
	  				<strong>General Admin:</strong><span class="Stats">1 hours</span></br>
	  				<strong>Incident Management:</strong><span class="Stats">2 hours</span></br>
	  				<strong>Service Request:</strong><span class="Stats">1 hours</span></br>
	  				<strong>Physical Access:</strong><span class="Stats">1 hours</span></br>
	  				<strong>Queue Management:</strong><span class="Stats">1 hours</span></br>
	  				<strong>Total Hours:</strong><span class="Stats">8 hours</span></br>
	  			</div>
			</div>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>