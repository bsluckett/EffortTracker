<?php $MenuTitle = "Home"; ?>
<?php include 'inc/header.php'; 
	 // require_once 'inc/tasks.php';
?>

	<div class="container clearfix">
	 	<div class="col-md-3 alpha">
	 		<?php include 'inc/sub_menu.php'; ?>
	 	</div>
		<div class="col-md-5">
			<?php include 'inc/Date.php'; ?>
			<div id="task-container">
				<?php include 'pages/close_processing.php' ?>
			</div>
		</div>
		<div class="col-md-4 omega">	
			<?php include 'inc/myStats.php'; ?>
		</div>
	</div>

<?php include 'inc/footer.php'; ?> 