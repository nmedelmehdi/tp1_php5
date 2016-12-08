 <?php session_start(); ?>
<form name="myform" method="POST" action="#">
				<table border="1">				
					<tr>

						<td>					
							<label>Name :</label>
						</td>
						<td>					
							<input type=text name="name"/>
						</td>
					</tr>

					<tr>
						<td>					
							<input type=submit name="submit" value="Submit"/>
						</td>
						

							<?php
								
								if(isset($_POST['submit']))
								{
										   $_SESSION['name'] = $_POST['name'];
											
								}
							
							
							?>
					
					</tr>		
				</table>
			</form>
