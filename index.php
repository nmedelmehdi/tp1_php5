<!DOCTYPE html>
<html lang="en">
<head>
  <title>TP1_PHP5</title>
  <?php include('layout/includes/cdn_boutstrap.php'); ?>
</head>
<body>

		<!-- nav -->
        <div class="container">
			<div class="row">
				<div class="col-sm-12>
					<?php include ('layout/includes/nav.php')?>
  				</div>
			</div>
		</div>
		
		<!--  sidenav et carousel-->
	<div class="container">
		<div class="row">
			
			<div class="col-sm-3 sidenav">
				<?php include 'layout/includes/sidenav.php'?>
			</div>
	
			<div class="col-md-9">
				<div class="jumbotron">
				    <div class="container" align="center">
				        <?php include 'layout/includes/carousel.php'?>
				    </div>
				</div>	
			</div>

		</div>
	</div>

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <?php include 'view/v_insert.php' ?>
  </div>


<footer class="container-fluid primary">
  <p align="center" class="active">Created By Me all Right Reserved 2016</p>
</footer>


</body>
</html>

