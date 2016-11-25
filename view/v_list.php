<!DOCTYPE html>
<html lang ="en"/>
<html>
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
		<!DOCTYPE html>
<html>

<body>

	
		<!-- nav -->
        <div class="container">
			<div class="row">
				<div class="col-sm-12>
					<?php include ('../layout/includes/nav.php')?>
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
			
			
		            <?php
		            echo "<table class='table-condensed table-striped table-hover'>";
		              echo "<tr><th>Num</th><th>Nom</th><th>Prenom</th><th>Genre</th><th>Date Naissance</th><th>Telephone</th><th>Email</th></tr>";

		            class TableRows extends RecursiveIteratorIterator {
			             function __construct($it) {
				             parent::__construct($it, self::LEAVES_ONLY);
			             }

			             function current() {
				             return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
			             }

			             function beginChildren() {
				             echo "<tr>";
			             }

			             function endChildren() {
				             echo "</tr>" . "\n";
			             }
		            }

		            $servername = "localhost";
		            $username = "root";
		            $password = "root";
		            $dbname = "crm";

		            try {
			             $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			             $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			             $stmt = $conn->prepare("SELECT * FROM client");
			             $stmt->execute();

			             // set the resulting array to associative
			             $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

			             foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
				             echo $v;
			             }
		            }
		            catch(PDOException $e) {
			             echo "Error: " . $e->getMessage();
		            }
		            $conn = null;
		            echo "</table>";
		            ?>

                        <ul class="pagination">
                          <li><a href="#">«</a></li>
                          <li><a href="#">1</a></li>
                          <li><a class="active" href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#">6</a></li>
                          <li><a href="#">»</a></li>
                        </ul>
			</div>

		</div>
	</div>		
	
		
	
 

</body>
</html>

		
	</body>
</html>

