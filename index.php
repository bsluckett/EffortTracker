<?php 
require_once 'header.php'; 
?>
 <?php require_once 'pages/nav_bar.php'; ?>

<div id="body-container" class="content-width">
	  <body style="background-color:#EFF3F4;">
	 


	<div style="position: relative; background-color:#63ADD0; width:300px; margin:0 auto;height: 130px; border-radius: 10px;">
		<h4 style="position: absolute; margin-left: 40px; margin-top: 10px"><strong>Select a date to log work</strong></h4><br>
		<div style="position: absolute; margin-left: 15px; margin-top: 20px">
			<h4 style="display: inline-block;">Start Date:</h4><input type="date" name="Home_Date" style="margin-left:10px">
		</div>
		<button type="button" class="btn btn-success" style="background-color:#9BD377; color:#000000; position: absolute; margin-top:65px; right:10px">Submit</button>
	</div>
	<?php require_once 'pages/tab_bar.php'; ?>
<div id="tab-container">
</div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>