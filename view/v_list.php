<?php session_start();?>
<!DOCTYPE html>
<html lang ="en">
	<head>
	<title>v_all</title>
  	<?php include('../layout/includes/cdn_boutstrap.php'); ?>

	                <style>
                ul.pagination {
                    display: inline-block;
                    padding: 0;
                    margin: 0;
                }

                ul.pagination li {display: inline;}

                ul.pagination li a {
                    color: black;
                    float: left;
                    padding: 8px 16px;
                    text-decoration: none;
                    transition: background-color .3s;
                }

                ul.pagination li a.active {
                    background-color: #4CAF50;
                    color: white;
                }

                ul.pagination li a:hover:not(.active) {background-color: #ddd;}
                </style>
	</head>
	<body>
	<!-- nav -->
        <div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php include ('../layout/includes/nav.php')?>
					<!-- Modal Insert-->
					  <div class="modal fade" id="myModal" role="dialog">
						<?php include 'v_insert.php' ?>
					  </div>

					<!-- Modal Apercu -->
					  <div class="modal fade" id="apercu" role="dialog">
						<?php include 'apercu.php' ?>
					  </div>
  				</div>
			</div>
		</div>
		
		<!--  sidenav et carousel-->
	<div class="container">
		<div class="row">
			
			<div class="col-sm-3 sidenav">
				<?php include '../layout/includes/sidenav.php'?>
			</div>
	
			<div class="col-md-9">
				<div class="jumbotron">
				    <div class="container" align="center">
				        <?php include '../layout/includes/carousel.php'?>
				    </div>
				</div>

			<div style="overflow-x:auto;">
			
		             <?php
							

							if (true) {
								echo "
							<table class='table-condensed table-striped table-hover'>
								<tr>
									<th>num</th>
									<th>Nom</th>
									<th>Prenom</th>
									<th>Mail</th>
									<th>Gate</th>
									<th>Genre</th>
									<th>Telephone</th>
									<th>Apercu</th>
									<th>Supprimer</th>
									<th>Modifier</th>
									

								</tr>";
								// output data of each row
								foreach( $result as $row )  {
									echo "<tr>
											<td>".$row["num"]."</td>



<form name='myform' method='post' action='../controle/ctrl.php?action=modif&num=".$row["num"]."'>
<td>
	<input name='nom' class='".$row["num"]."'  type='text' value='".$row["nom"]."' disabled style=' border-radius : 10px ; border : 0 ; background : inherit'>

</td>
<td>
	<input name='prenom' class='".$row["num"]."'  type='text' value='".$row["prenom"]."' disabled style='border-radius : 10px; border : 0 ; background : inherit '>
</td>
<td>
	<input name='mail' class='".$row["num"]."'  type='text' value='".$row["mail"]."' disabled style=' border-radius : 10px;border : 0 ; background : inherit '>
</td>
<td>
	<input name='date' class='".$row["num"]."'  type='text' value='".$row["date"]."' disabled style=' border-radius : 10px;border : 0 ; background : inherit '>
</td>
<td>
	<input name='genre' class='".$row["num"]."'  type='text' value='".$row["genre"]."' disabled style='border-radius : 10px; border : 0 ; background : inherit '>
</td>
<td>
	<input name='telephone' class='".$row["num"]."'  type='text' value='".$row["telephone"]."' disabled style=' border-radius : 10px;border : 0 ; background : inherit '>
</td>
							

<td>
	
		<p id='hideme"?><?php echo $row["num"]?><?php echo "'><input type='button' id='modifier' class='btn btn-active' onclick='func"?><?php echo $row["num"]?><?php echo "()' value='Modifier'/></p>

		<script>

				
	function func"?><?php echo $row["num"]?><?php echo "()
		{
			var elems = document.getElementsByClassName('"?><?php echo $row["num"]?><?php echo "');
				for(var i = 0; i < elems.length; i++) {
					elems[i].disabled = false;
				}

			var background = document.getElementsByClassName('"?><?php echo $row["num"]?><?php echo "');
				for(var i = 0; i < elems.length; i++) {
					background[i].style.backgroundColor = 'lightblue';
				}
			
			document.getElementById('"?><?php echo $row["num"]?><?php echo "').hidden = false;
			document.getElementById('hideme"?><?php echo $row["num"]?><?php echo "').innerHTML = '';
			
		}
	
</script>	
	
	
				
		
			<button id='".$row["num"]."' type=submit hidden=hidden>				
				<img style = 'width : 20px ; height : 20px'  title='Modifier'  src='../layout/images/edit-validated.png'>
			</button>
		
	
</td>
</form>
											
<td>
	
		<a href='../controle/ctrl.php?action=apercu&num=".$row["num"]."' data-toggle='modal' data-target='#apercu'>
			<img title='Aperçu' style = 'width : 20px ; height : 20px' src='../layout/images/apercu.png'>
		</a>
	
</td>
<td>
	<a href='../controle/ctrl.php?action=del&num=".$row["num"]."'>
		<img title='Supprimer' style = 'width : 20px ; height : 20px' src='../layout/images/		Delete_icon.png'>
	</a>
</td>
									
										</tr>";
								}
								echo "</table>";
							} else {
								echo "0 results";
							}
							$conn->close();
							?> 

                
				</div>
				
			</div>
		</div>		
	
	</body>
</html>

